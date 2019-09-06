var myForm = document.querySelector('form');

var inputs = Array.from(myForm.elements);
console.log(inputs);
inputs.shift();


inputs.pop();
console.log(inputs);

var regexEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/



inputs.forEach(function (oneInput) {
    oneInput.addEventListener('blur', function () {
        if (this.value.trim() === '') {
            this.classList.add('is-invalid');
            this.nextElementSibling.innerHTML = 'El campo <b>' + this.getAttribute('data-nombre') + '</b> es obligatorio';

        }else {
            this.classList.remove('is-invalid');
            this.classList.add('is-valid');
            this.nextElementSibling.innerHTML = '';

            if (this.name === 'email') {
                if (!regexEmail.test(this.value.trim())) {
                    this.classList.add('is-invalid');

                    this.nextElementSibling.innerHTML = 'El campo <b>' + this.getAttribute('data-nombre') + '</b> debe tener un @ ';
                }
            }
        }

    })

});
