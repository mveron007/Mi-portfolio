<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //
    protected $fillable=['titulo', 'rating','premios','duracion','release_date','id'];

    public function getTitleAndRating(){
      return $this->titulo . ' ' . $this->rating;
    }
}
// Agregar al modelo Movie, el método getTitleAndRating() el cual deberá retornar el title y
// rating de cada película.
