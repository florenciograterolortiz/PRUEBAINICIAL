{!! Form::open(['route' => [$contact->url(),$contact->id], 'method' => $contact->method(), 'class' => 'app-form']) !!}
<div>
	{!!Form::label('nombre','Nombre Del Contacto')!!}
	{!! Form::text('nombre',$contact->name,['class' => 'form-control'])!!}
</div>

<div>
	{!!Form::label('apellido','Apellido Del Contacto')!!}
	{!!Form::text('apellido',$contact->apellido,['class' => 'form-control'])!!}
</div>

<div>
	{!!Form::label('correo','Correo Del Contacto')!!}
	{!!Form::text('correo',$contact->email,['class' => 'form-control'])!!}
</div>


<div>
	{!!Form::label('numbercontact','Numero de Contato')!!}
	{!!Form::text('numbercontact',$contact->numbercontact,['class' => 'form-control'])!!}
</div>


<div  class="">
  <input type="submit" value="guardar" class="btn btn-primary">
</div>
{!!  Form::close() !!}