<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
   public $fillable = ['name','apellido', 'email', 'numbercontact'];



public function url(){

return $this->id ? 'contacts.update' :  'contacts.store';

}


public function method(){

return $this->id ? 'PUT' :  'POST';

}


}
