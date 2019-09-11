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
      $cart = Cart::content();
      $pro = Product::find($id);
      Cart::add(['id' => $pro->id, 'name' => $pro->title, 'qty' => 1, 'price' => $pro->price, 'options' => [
        'img'=> $pro->image,
        ]
      ]);


      return view('cart.add', compact('pro'));


    }


    public function checkout()
    {
        $data = Cart::content();
        return view('cart.checkout', compact('data') );

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
