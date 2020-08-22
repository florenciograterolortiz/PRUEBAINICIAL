@extends('layouts.app')
@section('content')
<div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
        <div class="col-md-12">
          <div class="card mb-4 shadow-sm">
          
            <div class="card-body">
              <h1 class="card-title card mb-4 " >{{$contact->name}}</h1>
              <h2 class="card-subtitle  card mb-4" >{{$contact->apellido}}</h2>
              <h3 class="card-subtitle  card mb-4 " >{{$contact->email}}</h3>
              <h4 class="card-title card mb-4 " >{{$contact->numbercontact}}</h4>
                             
               <div class="editbotom">
               <button class="button-with-arrow" style="padding: 8px 15px 8px 15px; font-size: 17px;margin-top: 15px;"><a href="{{ route('contacts.edit', $contact->id)  }}">Crear Registro</a></button>
               </div>
          @include('contacts.delete');
            </div>
          </div>
        </div>
     
      
      </div>
    </div>
  </div>
  @endsection