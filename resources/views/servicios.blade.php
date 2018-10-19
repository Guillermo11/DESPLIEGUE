@extends('layouts.estilo')

@section('content')
   <div class="container-fluid">
     <div class="panel panel-default">
           <div class="panel-heading">
             <a href="{!! url('galeri') !!}" class="btn btn-info" ><i class=" glyphicon glyphicon-th-large" ></i></a>
             <a  href="{!! url('servicios') !!}" class="btn btn-primary" ><i class=" fa fa-th" ></i></a>
               <div class="btn-group margin pull-right">
               <a href="{!! url('Formulario') !!}"class="btn btn-success" >Formulario</i></a>

             </div>
           </div>

         </div><!--/.panel-->
      <!-- /.row -->
    @foreach ($publicidad as $publicidad)



  <div class="search-result-item col-md-12">
                <div class="col-sm-3"><a href="#">
                  <img class="img-responsive thumbnail" src="publicidad/{{ $publicidad->avatar }}"  style="width:500px;background-color:#efefef; ">
                  </a></div>
                <div class="search-result-item-body col-sm-9">
                  <div class="row">
                    <div class="col-sm-9">
                      <h3 class="search-result-title"><a href="#">Search Result 3</a></h3>
                      <p class="text-muted">Category</p>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut maximus, odio a imperdiet rhoncus, nunc metus luctus mi, at dignissim sem orci ut massa. Morbi a magna risus. Nunc vestibulum, nibh sit amet dictum pharetra, augue quam faucibus neque, et ultrices dui arcu ac ligula.</p>
                    </div>
                    <div class="col-sm-3 text-center">
                      <h4>$499</h4>
                      <a class="btn btn-primary btn-info btn-md" href="#">View Details</a>
                    </div>
                  </div>
                </div>
              </div><!--/.search-result-item-->
  @endforeach

    </div>

@endsection
