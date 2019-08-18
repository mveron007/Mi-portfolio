<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
use Cart;
use App\Product;

class Order extends Model
{
    //

    protected $fillable = [
        'total',
    ];

    public function orderCols()
    {
      // code...
      return $this->belongsToMany(Product::class);
    }

    public static function createOrder()
    {
      // code...
      $user = Auth::user();
      $order = $user->orders()->create([
        'total'=> Cart::total()
      ]); //Inserta datos de la tabla de pedidos

      //Realizar pedido e insertar datos en tabla order_products
      foreach (Cart::content() as $cData) {
        // code...
        $order->orderCols()->attach($cData->id, [
          'total'=> $cData->qty * $cData->price,
          'qty'=> $cData->qty
          ]);
      }

      Cart::destroy(); //Vacìa el carrito

    }
}
