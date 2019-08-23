@extends('layouts.app')

@section('content')
<script>
// // Aplicación de API de países en el formulario
//
// $(document).ready(function(){
// $.getJSON('https://restcountries.eu/rest/v2/all', function(data){
//
// var createoption = "<select id='country' class='form-control '>";
//
// for(d in data){
// createoption += "<option>" + data[d].name + "</option>";
// }
// createoption += "</select>";
// document.getElementById('result').innerHTML = createoption;
// });
// });

window.addEventListener('load', function () {
var selectPaises = document.querySelector('#country');
var selectProvincias = document.querySelector('#city');
var contenedorProvincias = selectProvincias.parentElement;

// Función genérica para hacer llamados FETCH
function genericFetchCall (endPoint, callback) {
fetch(endPoint)
.then(function (response) {
  return response.json(); // array de objetos literales
})
.then(function (data) {
  callback(data);
})
.catch(function (error) {
  console.log('El error fue: ' + error);
});
}

// Función para traer los países e insertarlos en el selectPaises
function insertCountries (countries) {
countries.forEach(function (oneCountry) {
selectPaises.innerHTML += `<option value="${oneCountry.name}">${oneCountry.name}</option>`;
});
}

// Llamamos a la api de Paises
genericFetchCall('https://restcountries.eu/rest/v2/all', insertCountries);

// Función para traer las provincias e insertarlas en el selectProvincias
function insertProvinces (provinces) {
provinces.provincias.forEach(function (unaProvincia) {
selectProvincias.innerHTML += `<option value="${unaProvincia.nombre}">${unaProvincia.nombre}</option>`;
});
}

selectPaises.addEventListener('change', function () {
if (this.value.toLowerCase() === 'argentina') {
contenedorProvincias.style.display = 'flex';
genericFetchCall('https://apis.datos.gob.ar/georef/api/provincias', insertProvinces);
} else {
// contenedorProvincias.style.display = 'none';
selectProvincias.innerHTML = `<option value="">Elegí una provincia</option>`;
}
});
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

                        <div class="form-group row">
                          <label for="country-name" class="col-md-4 col-form-label text-md-right">Country</label>

                          <div class="col-md-6">

                            <!-- <div id="result"></div> -->
                            <select id="country" class='form-control' name="">

                            </select>
                            <select id="city" class='form-control'>
                              <option value="">Elegí una provincia</option>
                            </select>

                          </div>
                        </div>

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
