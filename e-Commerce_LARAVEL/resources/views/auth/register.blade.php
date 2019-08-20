@extends('layouts.app')

@section('content')
<script type="text/javascript">
  var theForm = document.queryselector('form');
  var formInputs = Array.from(theForm.elements);

  formInputs.shift();
  formInputs.pop();


  // Expresión regular para validar solo números
  var regexNumber = /^\d+$/;

  // Objeto literal para verificar si un campo tiene error
  var errorsObj = {};

  formInputs.forEach(function(oneInput) {
  oneInput.addEventListener("blur", function(){
    if(this.value.trim() == ""){
      this.classList.add("is-invalid");
      this.nextElementSibling.innerHTML = 'El campo <b>' + this.getAttribute('data-nombre') + '</b> es obligatorio';
      errorsObj[this.name] = true;
    }else {
			// Cuando el campo NO está vacío

			// Quitamos la clase de error SI existiera
			this.classList.remove('is-invalid');

			// Si la data es correcta, asignamos esta clase de bootstrap
			this.classList.add('is-valid');

			// Al mensaje de error le sacamos el texto
			this.nextElementSibling.innerHTML = '';

			// Si un campo NO tiene error, eliminamos la key del objeto y su valor
			delete errorsObj[this.name];

  })
});

</script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                          <label for="nickname" class="col-md-4 col-form-label text-md-right">Nickname</label>
                          <div class="col-md-6">
                            <input type="text" class="form-control" name="nickname" value="{{ old('nickname') }}">
                            @if ($errors->has('nickname'))
                                              <span class="help-block">
                                                <strong>{{ $errors->first('nickname') }}</strong>
                                              </span>
                                            @endif
                          </div>
                        </div>
                        <!-- <div class="form-group row">
                            <label for="dni" class="col-md-4 col-form-label text-md-right">DNI</label>

                            <div class="col-md-6">
                                <input id="dni" type="text" class="form-control" @error('dni') is-invalid @enderror" name="dni" value="{{ old('dni') }}" required autocomplete="dni" autofocus>

                                @error('dni')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> -->

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <!-- <div class="form-group row">
                          <label for="country" class="col-md-4 col-form-label text-md-right">Country</label>

                          <div class="col-md-6">
                            <select class="form-control" name="country">
                              <option value="">1</option>
                            </select>
                          </div>
                        </div> -->

                        <div class="form-group row">
                          <label for="avatar" class="col-md-4 col-form-label text-md-right">Profile photo</label>

                          <div class="col-md-6">
                            <input type="file" class="form-control" name="avatar" value="">
                          </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
