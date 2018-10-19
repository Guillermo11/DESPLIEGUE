@extends('home1')
@section('content')
  <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <ol class="breadcrumb">
            <button type="button" class="btn btn-sm btn-info">Ingresar Nuevo Usuario</button>
          </ol>
          <div class="panel-heading clearfix">

            Formulario de Usuario del Sistema</div>
          <div class="panel-body">
            {!! Form::open(array('action' => 'AdminController@store','method' => 'POST', 'files' => true,'class'=>'popup-form','data-toggle'=>'validator'))!!}

             @csrf
             <meta name="csrf-token" content="{{ csrf_token() }}">
              <div class="box-body">

              <div class="form-group col-sm-6">
                <label  for="exampleSelect1">Nombres</label>
                <input type="text" class="form-control" id="nombres"name="nombres" required placeholder="Nombres*">

              </div>
              <div class="form-group col-sm-6">
                <label  for="exampleSelect1">Apellidos</label>
                <input type="text" class="form-control" id="apellidos" name="apellidos" required placeholder="Apellidos*">

              </div>
                <!-- /fin fila de 12 -->

              <div class="col-md-2">
                <label  for="exampleSelect1">Telefono</label>
                <input type="text" class="form-control" id="telefono" name="telefono" required placeholder="telefono*">

              </div>
              <div class="form-group col-sm-5">
                <label  for="exampleSelect1">Direccion</label>
                <input type="text" class="form-control" id="direccion"name="direccion" required placeholder="Direccion*">

              </div>
              <div class="form-group col-sm-5">
                <label  for="exampleSelect1">Correo</label>
                <input type="email" class="form-control" pattern='.*@\w{2,}\.\w{2,}', id="email"name="email" required placeholder="Email*">

              </div>

              <!-- /fin fila de 12 -->

              <div class="form-group col-sm-5">
                <label  for="exampleSelect1">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" required placeholder="Password*">

              </div>
            <div class="form-group col-sm-5">
              <label  for="exampleSelect1">Verificar Contraseña</label>
              <input type="password" class="form-control" id="VerificarPass" name="VerificarPass" required placeholder="Verificar Password*">

            </div>
            <!-- /fin fila de 12 -->
              <div class="form-group col-sm-12">
                <label  for="exampleSelect1">Subir Fotografia</label>
                <input type="file" name="avatar" id="avatar">
              </div>

            <!-- /.box-body -->
               <div class="form-group col-sm-12">
                <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              <a type="button"  href="{!! url('admin') !!}" class="btn btn-md btn-danger" name="button">salir</a>
               </div>
              </div>
             </div>
          {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div><!--/.row-->
  @stop
