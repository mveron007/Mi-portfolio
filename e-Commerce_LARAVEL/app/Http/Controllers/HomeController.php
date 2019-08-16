<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function buscar($search){
        $search = urldecode($search);
        $products = Product::select()
                ->where('title', 'LIKE', '%'.$search.'%')
                ->orderBy('id', 'desc')
                ->get();

        if (count($products) == 0){
            return View('home.search')
            ->with('message', 'No hay resultados que mostrar')
            ->with('search', $search);
        } else{
            return View('home.search')
            ->with('products', $products)
            ->with('search', $search);
        }
    }
}
