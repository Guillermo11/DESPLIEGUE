<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\publicidad;
class EmpleoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $publicidad =publicidad::all();
  return view('Empleo.ver_publicacion',compact('publicidad'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Empleo.formulario_Empleos');   //  //  //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request)

 	{
 		if ($request->hasFile('avatar')) {
 			$file=$request->file('avatar');
 			$name=time().$file->getClientOriginalName();
 			$file->move(public_path().'/publicidad/',$name);

 }
 	$publicidad = new publicidad;

 	$publicidad->fecha  =  $request["fecha"];
 	$publicidad->puesto_solicitado=$request["puesto_solicitado"];
 	$publicidad->direccion=$request["direccion"];
 	$publicidad->descripcion=$request["descripcion"];
 	$publicidad->fecha_Limite=$request["fecha_Limite"];
 	$publicidad->avatar=$name;
   $resul= $publicidad->save();

    	return redirect('Empleo/create');
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
