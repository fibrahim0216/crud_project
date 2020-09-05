<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
   protected $fillable = ['name', 'capital', 'currence', 'population'];

   public function persons(){

   	return $this->hasMany('App\Person');
   }
}
