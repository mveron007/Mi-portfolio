<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Product;
use App\Order;


class CartController extends Controller
{
    //
    public function index()
    {
      $cart = Cart::content();
      return view('cart.index', compact('cart'));
    }
    public function addItem($id)
    {
      $pro = Product::find($id);
      Cart::add(['id' => $pro->id, 'name' => $pro->title, 'qty' => 1, 'price' => $pro->price, 'options' => [
        'img'=> $pro->image,
        ]
      ]);

      echo "add to a cart";
    }

    public function checkout()
    {
      // code...
      return Order::createOrder();
      return back();
    }

    public function removeItem($id)
    {
      // $pro = Product::find($id);
      Cart::remove($id);
      return redirect('/cart');
    }
}