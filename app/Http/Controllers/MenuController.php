<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\publicidad;
class MenuController extends Controller
{

    public function index()
    {
return view('index');
    }
    public function Servicios()
    {
      $publicidad =publicidad::all();
  return view('servicios',compact('publicidad'));

    }
    public function galeri()
    {
      $publicidad =publicidad::all();
  return view('galeri',compact('publicidad'));

    }
    public function Formulario()
    {

  return view('Formulario');

    }



}
