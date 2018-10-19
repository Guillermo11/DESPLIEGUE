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
            {!! Form::model($usuario,['action' => ['AdminController@update', $usuario->id],'files' => true,'method' => 'put','class'=>'popup-form','data-toggle'=>'validator']) !!}


             @csrf
             <meta name="csrf-token" content="{{ csrf_token() }}">
              <div class="box-body">

              <div class="form-group col-sm-6">
                <label  for="exampleSelect1">Nombres</label>
                {!! Form::text('nombres', null,['class'=>'form-control','id'=>'nombres','placeholder'=>'Nombres*','required','autofocus']) !!}

              </div>
              <div class="form-group col-sm-6">
                <label  for="exampleSelect1">Apellidos</label>
                {!! Form::text('apellidos', null,['class'=>'form-control','id'=>'apellidos','placeholder'=>'Apellidos*','required','autofocus']) !!}


              </div>
                <!-- /fin fila de 12 -->

              <div class="col-md-2">
                <label  for="exampleSelect1">Telefono</label>
              {!! Form::text('telefono', null,['class'=>'form-control','id'=>'telefono','placeholder'=>'telefono*','required','autofocus']) !!}
              </div>
              <div class="form-group col-sm-5">
                <label  for="exampleSelect1">Direccion</label>
                  {!! Form::text('direccion', null,['class'=>'form-control','id'=>'direccion','placeholder'=>'Direccion*','required','autofocus']) !!}
              </div>

              <div class="form-group col-sm-5">
                <label  for="exampleSelect1">Correo</label>
                {!! Form::email('email', null,['pattern'=>'.*@\w{2,}\.\w{2,}','class'=>'form-control','id'=>'email','placeholder'=>'Email*','required','autofocus']) !!}
              </div>



            <!-- /.box-body -->
               <div class="form-group col-sm-12">
                <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a type="button"  href="{!! url('admin') !!}" class="btn btn-md btn-danger" name="button">salir</a>
                </a>

               </div>

              </div>
             </div>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div><!--/.row-->
  @stop
