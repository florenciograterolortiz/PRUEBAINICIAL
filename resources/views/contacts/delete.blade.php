{!! Form::open(['method' => 'DELETE', 'route' => ['contacts.destroy', $contact->id]])  !!}

<input type="submit" value="Eliminar Producto" class="btn btn-danger">
{!!  Form::close() !!}