@extends('home1')
@section('content')
  <div class="row">
          <div class="col-md-12">
            <div class="box">
              <div class="box-header with-border">
                <h5 class="box-title">Listado de Usuario del Sistema</h5>
                <ol class="breadcrumb">
                    <a type="button"  href="{!! url('admin/create') !!}" class="btn btn-sm btn-info">Ingresar Nuevo Usuario</a>

                </ol>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table class="table table-bordered compact">
                  <tr><th style="width: 40px">Imagen</th>
                    <th >Nombres</th>
                    <th>Apellidos</th>
                    <th>Direccion</th>
                    <th>Correo</th>
                    <th style="width: 40px"></th>

                  </tr>
                  @foreach ($usuario as $user)
                    <tr>
                     <td ><img src="imagen/{{ $user->avatar }}" class="card-img-top rounded-circle" style="height:50px;width:50px;background-color:#efefef; "></td>
                      <td>{{ $user->nombres }}</td>
                        <td>{{ $user->apellidos }}</td>
                          <td>{{ $user->direccion }}</td>
                            <td>{{ $user->email }}</td>
                            <td> 	{!!link_to_route('admin.edit', $title = 'Editar', $parameters = $user->id, $attributes = ['class'=>'btn btn-primary'])!!} </td>


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
