<?php

namespace App\Http\Controllers;

use App\Models\autor;
use Illuminate\Http\Request;

class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos=autor::all();
        return view("index",compact("datos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //return view("crear");
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
        $autor=new autor();
        $autor->codAutor=$request->post("codAutor");
        $autor->nombre=$request->post("nombre");
        $autor->apellido=$request->post("apellido");
        $autor->fechaNacimiento=$request->post("fechaNacimiento");
        $autor->save();

        return redirect()->route("autor.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function show(autor $autor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $autor=autor::find($id);
        return view("editarAutor",compact("autor"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $autor=autor::find($id);
        $autor->codAutor=$request->post("codAutor");
        $autor->nombre=$request->post("nombre");
        $autor->apellido=$request->post("apellido");
        $autor->fechaNacimiento=$request->post("fechaNacimiento");
        $autor->save();

        return redirect()->route("autor.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $autor=autor::find($id);
        $autor->delete();

        return redirect()->route("autor.index");
    }
}
