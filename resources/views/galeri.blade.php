@extends('layouts.estilo')

@section('content')
  <div class="container-fluid">
    <div class="panel panel-default">
          <div class="panel-heading">
            <a href="{!! url('galeri') !!}" class="btn btn-info" ><i class=" glyphicon glyphicon-th-large" ></i></a>
            <a  href="{!! url('servicios') !!}" class="btn btn-primary" ><i class=" fa fa-th" ></i></a>
              <div class="btn-group margin pull-right">
              <a href="{!! url('Formulario') !!}" class="btn btn-success" >Formulario</i></a>

            </div>
          </div>

        </div><!--/.panel-->


    <!-- /.row --><div class="row">
  @foreach ($publicidad as $publicidad)

      <div class="col-xs-12 col-sm-4 col-md-3 portfolio-item"><a href="#">
        <img class="img-responsive thumbnail" src="publicidad/{{ $publicidad->avatar }}"  style="background-color:#efefef; ">
        </a>
    <h4><a href="#">Image title</a></h4>
      <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</a></p>
      </div>


@endforeach

  </div>

  </div>
@endsection
