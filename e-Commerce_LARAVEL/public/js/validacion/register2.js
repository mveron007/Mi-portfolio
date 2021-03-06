var theForm = document.querySelector('form');


// Obtenemos todos los campos, pero parseamos la colección a un Array
var formInputs = Array.from(theForm.elements);
// Sacamos la 1er posición del array que es el un <input> hidden del token
formInputs.shift();

// Sacamos al último elemento que es el <button>
formInputs.pop();

formInputs.splice(5, 1);


console.log(formInputs);

// Expresión regular para validar contraseña que tenga un 'DH'
var regexPass = /DH/;
var regexEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/


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

		} else {
			// Cuando el campo NO está vacío

			// Quitamos la clase de error SI existiera
			this.classList.remove('is-invalid');

			// Si la data es correcta, asignamos esta clase de bootstrap
			this.classList.add('is-valid');

			// Al mensaje de error le sacamos el texto
			this.nextElementSibling.innerHTML = '';



			// Validamos el tipo de dato del campo title
			if (this.name === 'name') {
				// Validamos que el texto insertado NO supere las 15 letras
				if (this.value.length > 15) {
					this.classList.add('is-invalid');
					this.nextElementSibling.innerHTML = 'El Nombre debe ser inferior a 15 letras';
					// Si un campo tiene error, creamos una key con el nombre del campo y valor true
					errorsObj[this.name] = true;
				}
			}

			if (this.name === 'email') {
				if (!regexEmail.test(this.value.trim())) {
					this.classList.add('is-invalid');
					this.nextElementSibling.innerHTML = 'Incluye un <b>' + '@<b>' + ' en el campo';
					// Si un campo tiene error, creamos una key con el nombre del campo y valor true
					errorsObj[this.name] = true;
				}
			}

			var pass = document.getElementById("password").value;
      // var rePass = document.getElementById("password-confirm").value;
			// console.log(rePass);
			if (this.name === 'password') {
				if (!regexPass.test(this.value.trim())) {
					this.classList.add('is-invalid');
					this.nextElementSibling.innerHTML = 'Este campo debe contener DH en alguna parte';
					// Si un campo tiene error, creamos una key con el nombre del campo y valor true
					errorsObj[this.name] = true;
				}

			}

			if (this.name === 'password_confirmation') {

				if (this.value != pass ) {
					this.classList.add('is-invalid');
					this.nextElementSibling.innerHTML = 'Las contraseñas deben coincidir';
					// Si un campo tiene error, creamos una key con el nombre del campo y valor true
					errorsObj[this.name] = true;
				}
			}


    }

  })

	/*
		Validamos el campo poster para verificar la extensión
			- Lo hacemos fuera del evento blur
			- Esta validación se dispara cuando el campo cambia de valor, cuando se ha seleccionado un archivo
	*/
	if (oneInput.name === 'avatar') {
		oneInput.addEventListener('change', function () {
			// sacamos la extensión del archivo
			var fileExtension = this.value.split('.').pop();
			// Array de estensiones permitidas
			var acceptedExtensions = ['jpg', 'jpeg', 'png'];

			var extensionIsOk = acceptedExtensions.find(function (ext) {
				return ext === fileExtension;
			});

			// Validamos la extensión
			if (extensionIsOk === undefined) {
				// Si la extensión no es ninguna de la permitida
				this.classList.add('is-invalid');
				console.log(this.nextElementSibling);
				this.nextElementSibling.innerHTML = 'Formato inválido. Los formatos soportados son jpg, jpeg y png';
				
			} else {
				this.classList.remove('is-invalid');
				this.classList.add('is-valid');
				this.nextElementSibling.innerHTML = '';
			}
		});
	}

});
