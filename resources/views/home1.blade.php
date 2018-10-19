<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lumino - Dashboard</title>
	<link href=" {!! asset('assets/css/bootstrap.min.css') !!} " rel="stylesheet">
	<link href=" {!! asset('assets/css/font-awesome.min.css') !!} " rel="stylesheet">
	<link href=" {!! asset('assets/css/datepicker3.css') !!} " rel="stylesheet">
	<link href=" {!! asset('assets/css/styles.css') !!} " rel="stylesheet">

	<link rel="stylesheet" href="font-awesome/4.5.0/css/font-awesome.min.css" />


	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
			<!--Nav////////////////////////////////////////////////////////////////////////////7777/////////////////////////////////////////////// -->
	<nav class="navbar navbar-custom skin-green navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>VUME </span>Ventanilla Municipal de Empleo</a>
				<ul class="nav navbar-top-links navbar-right">
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-envelope"></em><span class="label label-danger">15</span>
					</a>
						<ul class="dropdown-menu dropdown-messages">
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">3 mins ago</small>
										<a href="#"><strong>John Doe</strong> commented on <strong>your photo</strong>.</a>
									<br /><small class="text-muted">1:24 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">1 hour ago</small>
										<a href="#">New message from <strong>Jane Doe</strong>.</a>
									<br /><small class="text-muted">12:27 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="all-button"><a href="#">
									<em class="fa fa-inbox"></em> <strong>All Messages</strong>
								</a></div>
							</li>
						</ul>
					</li>
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-bell"></em><span class="label label-info">5</span>
					</a>
						<ul class="dropdown-menu dropdown-alerts">
							<li><a href="#">
								<div><em class="fa fa-envelope"></em> 1 New Message
									<span class="pull-right text-muted small">3 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-heart"></em> 12 New Likes
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-user"></em> 5 New Followers
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
			<!-- /SILDEVAR////////////////////////////////////////////////////////////////////////////7777/////////////////////////////////////////////// -->
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="{!! asset('../imagen/{{ $user->avatar }}') !!}" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Username</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>

		<ul class="nav menu">
			<li class="">
				<a href="{!! url('usuario/create') !!}">
					<em class="fa fa-users">&nbsp;</em> Usuarios</a>
				</li>

				<li class="">
					<a href="{!! url('publicaciones/create') !!}">
						<em class="fa fa-clone">&nbsp;</em> Eventos</a>
					</li>

			<li><a href="{!! url('Empleo') !!}"><em class="fa fa-calendar">&nbsp;</em> Publicaciones</a></li>
		 	<li><a href="{!! url('admin') !!}"><em class="fa fa-bar-chart">&nbsp;</em>Adminstrador</a></li>
    	<li><a href="index.html"><em class="fa fa-bar-chart">&nbsp;</em> Publicaciones</a></li>

			<li><a href="login.html"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
		<!-- /SILDEVAR////////////////////////////////////////////////////////////////////////////7777/////////////////////////////////////////////// -->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">



		<!-- /S////////////////////////////////////////////////////////////////////////////7777/////////////////////////////////////////////// -->

@yield('content')



		<!-- /S////////////////////////////////////////////////////////////////////////////7777/////////////////////////////////////////////// -->

	</div>	<!--/.main-->

	<script src=" {!! asset('assets/js/jquery-1.11.1.min.js') !!} "></script>
	<script src=" {!! asset('assets/js/bootstrap.min.js') !!} "></script>
	<script src=" {!! asset('assets/js/chart.min.js') !!} "></script>
	<script src=" {!! asset('assets/js/chart-data.js') !!} "></script>
	<script src=" {!! asset('assets/js/easypiechart.js') !!} "></script>
	<script src=" {!! asset('assets/js/easypiechart-data.js') !!} "></script>
	<script src=" {!! asset('assets/js/bootstrap-datepicker.js') !!} "></script>
	<script src=" {!! asset('assets/js/custom.js') !!} "></script>


</body>
</html>
