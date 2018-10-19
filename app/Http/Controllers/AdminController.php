<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $usuario =User::all();
  return view('admin.index',compact('usuario'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.formulario_Admin');   //
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
 			$file->move(public_path().'/imagen/',$name);

 }
 	$usuario = new User;

 	$usuario->nombres  =  $request["nombres"];
 	$usuario->apellidos=$request["apellidos"];
 	$usuario->telefono=$request["telefono"];
 	$usuario->direccion=$request["direccion"];
 	$usuario->email=$request["email"];
 	$usuario->password=bcrypt($request["password"]);
 	$usuario->avatar=$name;
   $resul= $usuario->save();

    	return redirect('admin/create');
 	}


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function edit($id)
   		{
   				$usuario =User::find($id);
   				return view('admin.Editar_Admin',['usuario'=>$usuario]);	//
   		}

   		public function update(Request $request, $id)
   		{
   			$usuario =User::find($id);
   			$usuario ->fill($request->except('avatar'));
   			if ($request->hasFile('avatar')) {
   				$file=$request->file('avatar');
   				$name=time().$file->getClientOriginalName();
   				$usuario->avatar=$name;
   				$file->move(public_path().'/imagen/',$name);

   	}
   			        $usuario ->save();
   							return redirect('admin');
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
