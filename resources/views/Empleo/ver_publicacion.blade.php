@extends('home1')
@section('content')
  <div class="row">
          <div class="col-md-12">
            <div class="box">
              <div class="box-header with-border">
                <h5 class="box-title">Listado de Usuario del Sistema</h5>
                <ol class="breadcrumb">
                    <a type="button"  href="{!! url('Empleo/create') !!}" class="btn btn-sm btn-info">Ingresar Nuevo Usuario</a>

                </ol>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table class="table table-bordered compact">
                  <tr><th style="width: 100px">Fecha</th>
                    <th >Puesto Solicitado</th>
                    <th>direccion</th>
                    <th>descripcion</th>
                    <th>Fecha Limite</th>
                    <th>Imagen</th>


                  </tr>
                  @foreach ($publicidad as $publicidad)
                    <tr>
                        <td>{{ $publicidad->fecha }}</td>
                        <td>{{ $publicidad->puesto_solicitado }}</td>
                          <td>{{ $publicidad->direccion }}</td>
                            <td>{{ $publicidad->descripcion }}</td>
                            <td>{{ $publicidad->fecha_Limite }}</td>
                            <td ><img src="publicidad/{{ $publicidad->avatar }}" class="card-img-top rounded-circle" style=width:100px;background-color:#efefef; "></td>



                  </tr>
                  @endforeach


                </table>
              </div>
              <!-- /.box-body -->

            </div>
            <!-- /.box -->

            <!-- /.box -->
             </div>
            </div>


  @stop
