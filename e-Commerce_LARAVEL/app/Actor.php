<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Actor;

class Actor extends Model
{
    //
    protected $fillable=['name','last_name'];

    public function getFullName(){
      return $this->name . ' ' . $this->last_name;
    }

}
