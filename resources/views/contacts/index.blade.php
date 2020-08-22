@extends('layouts.app')

@section('content')
  <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
              <h1 class="title"> Listado De Contactos </h1>

                    <div class="card-header"></div>
                   <div class="card-body">
                     
                  @foreach( $contacts as  $contact)
                    <div class="card  padding">
                   <h2> <a href="{{ route('contacts.show', $contact->id) }}"> {{$contact->name}} </a> </h2>
                    </div>
                  

                  @endforeach
                   
                    </div>
                       
<div class="editbotom">
<button class="button-with-arrow " style="    padding: 8px 15px 8px 15px; font-size: 17px;margin-top: 15px;"><a href="{{ route('contacts.create') }}">Crear Registro</a></button>
</div>
                   </div>
               </div>
            </div>
        </div>
    




@endsection