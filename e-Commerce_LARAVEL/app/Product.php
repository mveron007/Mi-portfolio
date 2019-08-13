<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{

    use SoftDeletes;
    //

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'id','title', 'image', 'price', 'category', 'description',
    ];

    public function users()
    {
      return $this->belongsTo(User::class);
    }
}
