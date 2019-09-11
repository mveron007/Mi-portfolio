<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products=Product::all();

        return view('products.index', compact('products'));
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
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create()
    {
        //

        return view('products.addProduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
          'image'=>'required',
          'title'=>'required',
          'price'=>'required',
        ],
        [
          'required'=>'El campo :attribute es obligatorio',
          // 'numeric'=>'El campo :attribute debe ser numerico',
      ]);

      $product = new Product();

      $product->title=$request->input('title');
      $product->price=$request->input('price');
      $product->category=$request->input('category');
      $product->description=$request->input('description');

      $product->delete();

      $imagen = $request->file('image');

      if ($imagen) {
			// Armo un nombre único para este archivo
			$imagenFinal = uniqid("img_") . "." . $imagen->extension();
			// Subo el archivo en la carpeta elegida
			$imagen->storePubliclyAs("/public/posters/", $imagenFinal);
			// Le asigno la imagen a la película que guardamos
			$product->image = $imagenFinal;
		}

      $product->save();
      // return view('products.addProduct', compact('request','product'));
      return redirect('/home');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function search() {
      $productos=Product::paginate(5);

      return view('products.show', compact('productos'));
    }

    public function detail($id)
    {
      // code...
      $products=Product::find($id);

      return view('products.detail', compact('products'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $productos = Product::find($id);
        // if (is_null ($productos))
        // {
        // return redirect('products/show');
        // }

        return view('products/edit', compact('productos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $product = Product::findOrFail($id);

        $product->title=$request->input('title');
        $product->price=$request->input('price');
        $product->category=$request->input('category');
        $product->description=$request->input('description');

        $imagen = $request->file('image');

        if ($imagen) {
  			// Armo un nombre único para este archivo
  			$imagenFinal = uniqid("img_") . "." . $imagen->extension();
  			// Subo el archivo en la carpeta elegida
  			$imagen->storePubliclyAs("/public/posters/", $imagenFinal);
  			// Le asigno la imagen a la película que guardamos
  			$product->image = $imagenFinal;
  		}

        $product->save();

        return redirect('/home');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $productsD = Product::find($id);

        if ($productsD != null) {
            $productsD->delete();

            return redirect('products/show');

        }

        return redirect('products/show');

    }
}
