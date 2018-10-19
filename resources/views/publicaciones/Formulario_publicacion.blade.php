@extends('home1')
@section('content')
  <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <ol class="breadcrumb">
            <button type="button" class="btn btn-sm btn-info">Ingresar Nuevo Usuario</button>
          </ol>
          <div class="panel-heading clearfix">

            Formulario de Eventos</div>
          <div class="panel-body">
            {!! Form::open(array('action' => 'AdminController@store','method' => 'POST', 'files' => true,'class'=>'popup-form','data-toggle'=>'validator'))!!}

             @csrf
             <meta name="csrf-token" content="{{ csrf_token() }}">
              <div class="box-body">

                <div class="form-group col-sm-3">
                  <label  for="exampleSelect1">Fecha Actual</label>
                  {!! Form::date('fechahoy', \Illuminate\Support\Carbon::now(), ['id' => 'fechahoy','class'=>'form-control','placeholder'=>'Nombres*','required']) !!}

                </div>
              <div class="form-group col-sm-5">
                <label  for="exampleSelect1">Titulo</label>
                <input type="text" class="form-control" id="Titulo" name="Titulo" required placeholder="Titulo*">

              </div>
                <!-- /fin fila de 12 -->

              <div class="col-md-4">
                <label  for="exampleSelect1">Lugar</label>
                <input type="text" class="form-control" id="Lugar" name="Lugar" required placeholder="Lugar*">

              </div>
              <div class="form-group col-sm-5">
                <label  for="exampleSelect1">Direccion</label>
                <input type="text" class="form-control" id="direccion"name="direccion" required placeholder="Direccion*">

              </div>
              <div class="form-group col-sm-3">
                <label  for="exampleSelect1">Fecha Limite</label>
                <input type="date" class="form-control" id="Fecha_Limite"name="Fecha_Limite" required >

              </div>

              <!-- /fin fila de 12 -->

              <div class="form-group col-sm-5">
                <label  for="exampleSelect1">Mas Informacion</label>
                <textarea name="name" rows="5" cols="58"></textarea>

              </div>

            <!-- /fin fila de 12 -->
              <div class="form-group col-sm-12">
                <label  for="exampleSelect1">Subir Fotografia</label>
                <input type="file" name="avatar" id="avatar">
              </div>

            <!-- /.box-body -->
               <div class="form-group col-sm-12">
                <div class="box-footer">
                <button type="submit" class="btn btn-primary">Publicar</button>
              <a type="button"  href="{!! url('admin') !!}" class="btn btn-md btn-danger" name="button">Cancelar</a>
               </div>
              </div>
             </div>
          {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div><!--/.row-->
  @stop
