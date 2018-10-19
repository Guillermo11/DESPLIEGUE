@extends('home1')
@section('content')
  <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <ol class="breadcrumb">
            <button type="button" class="btn btn-sm btn-info">Ingresar Nuevo Usuario</button>
          </ol>
          <div class="panel-heading clearfix">

            Formulario Para publicar Empleo</div>
          <div class="panel-body">
            {!! Form::open(array('action' => 'EmpleoController@store','method' => 'POST', 'files' => true,'class'=>'popup-form','data-toggle'=>'validator'))!!}

        
             @csrf
             <meta name="csrf-token" content="{{ csrf_token() }}">
              <div class="box-body">

                <div class="form-group col-sm-3">
                  <label  for="exampleSelect1">Fecha Actual</label>
                  {!! Form::date('fecha', \Illuminate\Support\Carbon::now(), ['id' => 'fechahoy','class'=>'form-control','placeholder'=>'Nombres*','required']) !!}

                </div>
              <div class="form-group col-sm-5">
                <label  for="exampleSelect1">Puesto Solicitado</label>
                <input type="text" class="form-control" id="puesto_solicitado" name="puesto_solicitado" required placeholder="Titulo*">

              </div>
                <!-- /fin fila de 12 -->


              <div class="form-group col-sm-5">
                <label  for="exampleSelect1">Direccion</label>
                <input type="text" class="form-control" id="direccion"name="direccion" required placeholder="Direccion*">

              </div>
              <div class="form-group col-sm-3">
                <label  for="exampleSelect1">Fecha Limite</label>
                <input type="date" class="form-control" id="fecha_Limite"name="fecha_Limite" required >

              </div>

              <!-- /fin fila de 12 -->

              <div class="form-group col-sm-5">
                <label  for="exampleSelect1">Mas Informacion</label>
                <textarea name="descripcion" id='descripcion' rows="5" cols="58"></textarea>

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
              <a type="button"  href="{!! url('Empleo') !!}" class="btn btn-md btn-danger" name="button">Cancelar</a>
               </div>
              </div>
             </div>
          {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div><!--/.row-->
  @stop
