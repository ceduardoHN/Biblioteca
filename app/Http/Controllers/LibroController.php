<?php

namespace App\Http\Controllers;

use App\Models\libro;
use App\Models\autor;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos=libro::all();
        return view("libro",compact("datos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $libro=new libro();
        $libro->ISBN=$request->post("ISBN");
        $libro->nombre=$request->post("nombre");
        $libro->aPubli=$request->post("aPubli");
        $libro->numPaginas=$request->post("numPaginas");
        $libro->codAutor=$request->post("codAutor");
        $libro->save();

        return redirect()->route("libro.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $r=$request->search;
        $c=$request->selectColumn;
        $libros=libro::where($c,$r)->get();
        $autores=autor::all();
        return view("libro",compact("libros","autores"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $libro=libro::find($id);
        $autores=autor::all();
        return view("editarLibro",compact("libro","autores"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $libro=libro::find($id);
        $libro->ISBN=$request->post("ISBN");
        $libro->nombre=$request->post("nombre");
        $libro->aPubli=$request->post("aPubli");
        $libro->numPaginas=$request->post("numPaginas");
        $libro->codAutor=$request->post("codAutor");
        $libro->save();

        return redirect()->route("libro.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $libro=libro::find($id);
        $libro->delete();

        return redirect()->route("libro.index");
    }
}
