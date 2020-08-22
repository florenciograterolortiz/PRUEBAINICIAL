@extends('layouts.app')
@section('content')
<div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
        <div class="col-md-12">
          <div class="card mb-4 shadow-sm">
          
            <div class="card-body">
              <h2 class="  card-titli card-title" >Editar Contacto</h2>
              <p>{{$contact->name}}</p>
              @include('contacts.form');
         
            </div>
          </div>
        </div>
     
      
      </div>
    </div>
  </div>
  @endsection