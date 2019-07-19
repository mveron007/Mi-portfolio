@extends('layouts.app')

@section('content')
<div class="container">
  <div class="profile-img">

    <div class="card" style="width: 18rem;">
      <!-- <img src="..." class="card-img-top" alt="..."> -->
      <img src="images/my-profile.png" width="200px" class="img-thumbnail card-img-top rounded-circle border-danger">
      <div class="card-body">
        <h3 class="card-title"><strong>Hola {{Auth::user()->name}}</strong> </h3>
        <p class="card-text">Bienvenid@, te daremos un par de opciones para mejorar tu estadía aquí.</p>
      </div>
      <ul class="list-group list-group-flush">
        <li><a href="/products/index" class="list-group-item card-link">Home</a></li>
        <li><a href="#" class="list-group-item card-link">Compras</a></li>
        <li><a href="/products/addProduct" class="list-group-item card-link">Agregar Productos</a></li>

      </ul>
    </div>

  </div>
    <!-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
                Button trigger modal
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                Launch demo modal
              </button> -->

              <!-- Modal -->
              <!-- <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">

                    </div> -->
                    <!-- <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div> -->
                  <!-- </div>
                </div>
              </div> -->
            </div>
        <!-- </div>
    </div>
</div> -->
@endsection
