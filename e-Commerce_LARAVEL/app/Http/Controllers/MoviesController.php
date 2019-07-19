<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies=Movie::all();
        return view('movie.template', compact('movies'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('movie.agregarPelicula');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

          $request->validate([
            'titulo'=>'required | max:30',
            'rating'=>'required | numeric | min:0 | max:10',
            'premios'=>'required | numeric | max:15',
            'duracion'=>'required | numeric',
            'release_date'=>'required'
          ],
          [
            'required'=>'El campo :attribute es obligatorio',
            'numeric'=>'El campo :attribute debe ser numerico',
            'titulo.max'=>'El campo :attribute debe tener maximo 30 caracteres',
            'rating.min'=>'El mínimo permitido es 0 caracteres',
            'rating.max'=>'El máximo permitido es 10 carracteres '
        ]);


        $movie=new Movie;

        $movie->titulo=$request->input('titulo');
        $movie->rating=$request->input('rating');
        $movie->premios=$request->input('premios');
        $movie->duracion=$request->input('duracion');
        $movie->release_date=$request->input('anio'). '-' . $request->input('mes') . '-' . $request->input('dia');

        $movie->save();
        return view('movie.agregarPelicula', compact('request','movie'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $movies=Movie::find($id);

        if (!$movies) {
          return 'Esa película no se encuentra disponible';
        }else {
          return view('movie.show', compact('movies'));
        }

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
    }
}
