// Capturamos al formulario
var theForm = document.querySelector('form');

console.log(theForm);

// Obtenemos todos los campos, pero parseamos la colección a un Array
var formInputs = Array.from(theForm.elements);

// Sacamos la 1er posición del array que es el un <input> hidden del token
formInputs.shift();

// Sacamos al último elemento que es el <button>
formInputs.pop();

// Expresión regular para validar solo números
var regexNumber = /^\d+$/;

// Objeto literal para verificar si un campo tiene error
var errorsObj = {};

// Recorremos el array y asignamos la validación básica
formInputs.forEach(function (oneInput) {
	// A cada campo le asignamos el evento blur y su funcionalidad
	oneInput.addEventListener('blur', function () {
		// Pregunto si el campo está vacío (previo trimeo de espacios)
		if (this.value.trim() === '') {
			// Si el campo está vacío, le agrego la clase 'is-invalid'
			this.classList.add('is-invalid');
			// Ademas, al <div> con clase 'invalid-feedback' le agremamos el texto de error
			this.nextElementSibling.innerHTML = 'El campo <b>' + this.getAttribute('data-nombre') + '</b> es obligatorio';
			// Si un campo tiene error, creamos una key con el nombre del campo y valor true
			errorsObj[this.name] = true;
		} else {
			// Cuando el campo NO está vacío

			// Quitamos la clase de error SI existiera
			this.classList.remove('is-invalid');

			// Si la data es correcta, asignamos esta clase de bootstrap
			this.classList.add('is-valid');

			// Al mensaje de error le sacamos el texto
			this.nextElementSibling.innerHTML = '';

			// Si un campo NO tiene error, eliminamos la key del objeto y su valor
			delete errorsObj[this.name];

			// Validamos el tipo de dato del campo title
			if (this.name === 'name') {
				// Validamos que el texto insertado NO supere las 15 letras
				if (this.value.length > 15) {
					this.classList.add('is-invalid');
					this.nextElementSibling.innerHTML = 'El título debe ser inferior a 15 letras';
					// Si un campo tiene error, creamos una key con el nombre del campo y valor true
					errorsObj[this.name] = true;
				}
			}
});

// Si tratan de enviar el formulario
theForm.addEventListener('submit', function (event) {
	// Al momento de SUBMITEAR el formulario iteramos los campos y validamos si estÃ¡n vacÃ­os
	formInputs.forEach(function (input) {
		if (input.value.trim() === '') {
			// Si el campo esta vacio creamos dentro del objeto de errores una key con valor true
			errorsObj[input.name] = true;
			// Asiganmos la clase de CSS
			input.classList.add('is-invalid');
			// Mostramos el mensaje de error
			input.nextElementSibling.innerHTML = 'El campo <b>' + input.getAttribute('data-nombre') + '</b> es obligatorio. ';
		}
	});
