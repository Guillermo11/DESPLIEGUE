<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class publicidad extends Model
{
  protected $table = "Publicidads";

  protected $fillable = [
    'fecha', 'puesto_solicitado',
      'direccion', 'descripcion','fecha_Limite','avatar',
  ];

    //
}
