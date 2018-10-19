@extends('home1')
@section('content')
  <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <ol class="breadcrumb">
            <button type="button" class="btn btn-sm btn-info">Ingresar Nuevo Usuario</button>
          </ol>
          <div class="panel-heading clearfix">

            Formulario de Usuario</div>
          <div class="panel-body">
            {!! Form::open(['action' => 'UsuarioController@store','id' => 'Formulario_usuario','method' => 'POST','class'=>'popup-form','data-toggle'=>'validator']) !!}
                     @csrf
                  {!! Form::token();!!}

                  <input type="hidden" name="token" value="<?php echo csrf_token(); ?>">
                  <div class="row">
                    <div class="form-group col-sm-2">
                      <label  for="exampleSelect1">Fecha Actual</label>
                      {!! Form::date('fechahoy', \Illuminate\Support\Carbon::now(), ['id' => 'fechahoy','class'=>'form-control','placeholder'=>'Nombres*','required']) !!}

                    </div>
                    <div class="form-group col-sm-3">
                      <label  for="exampleSelect1">Nombres</label>
                      {!! Form::text("nombres",null, ['id' => 'nombres','class'=>'form-control','placeholder'=>'Nombres*','required','autofocus']) !!}
                    </div>

                    <div class="form-group col-sm-3">
                      <label  for="exampleSelect1">Apellidos</label>
                      {!! Form::text('apellidos',null, ['id' => 'apellidos','class'=>'form-control','placeholder'=>'Apellidos*','required']) !!}
                      </div><!-- end form-group -->

                      <div class="form-group col-sm-2">
                        <label  for="exampleSelect1">DPI</label>
                        {!! Form::number('dpi',null, ['id' => 'dpi','class'=>'form-control','placeholder'=>'DPI*','required']) !!}

                        </div>
                        <div class="form-group col-sm-2">
                          <label  for="exampleSelect1">Edad</label>
                          {!! Form::number('edad',null, ['id' => 'edad','class'=>'form-control','placeholder'=>'Edad*','required']) !!}
                          <!-- end form-group -->
                          </div>
                          <div class="form-group col-sm-2">
                            <label  for="exampleSelect1">Fecha de Nacimiento</label>
                            {!! Form::date('fecha', \Illuminate\Support\Carbon::now(), ['id' => 'fecha','class'=>'form-control','placeholder'=>'Fecha de nacimiento*','required']) !!}

                          </div>
                      <div class="form-group col-sm-2">
                      <label  for="exampleSelect1">Sexo</label>
                      {!! Form::select('sexo',['Hombre' => 'Hombre', 'Mujer' => 'Mujer'], null, ['class'=>'form-control','placeholder' => 'seleccionar'])!!}

                        </div><!-- end form-group -->

                        <div class="form-group col-sm-2">
                          <label  for="exampleSelect1">Estado civil</label>
                          {!! Form::select('Estado_civil',['Soltero' => 'Soltero', 'Casado' => 'Casado', 'Unido' => 'Unido'], null, ['class'=>'form-control','placeholder' => 'seleccionar'])!!}
                        </div>

                        <div class="form-group col-sm-4">
                        <label  for="exampleSelect1">Direccion</label>
                        {!! Form::text('direccion',null, ['class'=>'form-control','placeholder'=>'Direccion','required']) !!}
                          </div><!-- end form-group -->

                          <div class="form-group col-sm-2">
                            <label  for="exampleSelect1">Nunicipio</label>
                            {!! Form::text("nunicipio",null, ['class'=>'form-control','placeholder'=>'Municipio','required']) !!}
                          </div>
                          <div class="form-group col-sm-2">
                          <label  for="exampleSelect1">Telefono</label>
                          {!! Form::text('telefono',null, ['class'=>'form-control','placeholder'=>'Telefono','required']) !!}
                            </div><!-- end form-group -->

                            <div class="form-group col-sm-2">
                              <label  for="exampleSelect1">Nivel Educativo</label>
                              {!! Form::select('educacion',['Primaria' => 'Primaria', 'Basico' => 'Basico', 'Diversificado' => 'Diversificado', 'Universitario' => 'Universitario'], null, ['class'=>'form-control','placeholder' => 'seleccionar'])!!}
                            </div>
                            <div class="form-group col-sm-3">
                            <label  for="exampleSelect1">Carrera,Titulo o Especialidad</label>
                            {!! Form::text('carrera',null, ['class'=>'form-control','placeholder'=>'arrera,Titulo o Especialidad','required']) !!}
                              </div><!-- end form-group -->

                              <div class="form-group col-sm-3">
                              <label  for="exampleSelect1">Experiencia laboral</label>
                              {!! Form::text('laboral',null, ['class'=>'form-control','placeholder'=>'Experiencia laboral','required']) !!}
                                </div><!-- end form-group -->
                                <div class="form-group col-sm-2">
                                  <label  for="exampleSelect1">Años de Experiencia</label>
                                  {!! Form::text("experiencia",null, ['class'=>'form-control','placeholder'=>'Años de Experiencia','required']) !!}
                                  </div>
                                <div class="form-group col-sm-3">
                                  <label  for="exampleSelect1">Nombre de la Empresa</label>
                                  {!! Form::text("empresa",null, ['class'=>'form-control','placeholder'=>'Nombre de la Empresa','required']) !!}
                                  </div>
                                <div class="form-group col-sm-2">
                                  <label  for="exampleSelect1">Puesto</label>
                                  {!! Form::text("puesto",null, ['class'=>'form-control','placeholder'=>'Puesto','required']) !!}
                                </div>

                                <div class="form-group col-sm-3">
                                  <label  for="exampleSelect1">Usted ha vivido fuera del pais</label>

                                  {!! Form::text("vivefuera",null, ['class'=>'form-control','placeholder'=>'Usted ha vivido fuera del pais','required','autofocus']) !!}
                                  </div>

                                  <div class="form-group col-sm-4">
                                  <label  for="exampleSelect1">Cuanto tiempo ha vivido fuera del pais</label>
                                  {!! Form::text('tiempofuera',null, ['class'=>'form-control','placeholder'=>'Cuanto tiempo ha vivido fuera del pais','required']) !!}
                                  </div><!-- end form-group -->

                                  <div class="form-group col-sm-2">
                                          <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                                        </div>
                                        <div class="form-group col-sm-2">
                                        <a href="{!! url('usuario') !!}"> <button type="button" class="btn btn-primary btn-block btn-flat">Salir</button></a>
                                        </div>

                    <div class="clearfix"></div>
                  </div><!-- end row -->
                  {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div><!--/.row-->
  @stop
