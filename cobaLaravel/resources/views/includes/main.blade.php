<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">	
	<link href="{{ asset('assets/home.css') }}" rel="stylesheet">	 

	<link rel="stylesheet" 
	href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/home.css')}}">
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&display=swap" rel="stylesheet">	
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Playball&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Chewy&display=swap" rel="stylesheet">


	</head>
	<body>
	 <div class="wrap">

		<div class="container-fluid bgimg-2" style="height: 670px">
		  
		 <div class="container-fluid menu">
			<nav class="navbar navbar-expand-sm navbar-dark">
			<a class="navbar-brand" href="#">
			 <img src="assets/bumi2.png" width="30" height="30" alt="logo" class="d-inline">LOGO </a>
			<button class = "navbar-toggler" type = "button"
			 data-toggle="collapse" data-target="#collapsibleNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id = "collapsibleNavbar">
			  <ul class="navbar-nav mx-auto">
			    <li class="nav-item">
			      <a class="nav-link" href="/">Home</a>
			    </li>
			    <li class="nav-item dropdown">
			      <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" 
				aria-expanded="false" href="turkey.php">Turkey</a>
				<div class="dropdown-menu" role="menu">
					<a class="dropdown-item" href="#" >Tips</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#" >Life</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#" >Money</a>
				</div>
			     </li>
  			    <li class="nav-item">
			      <a class="nav-link" href="/blog">Mesir</a>
			    </li>
		    	    <li class="nav-item">
			      <a class="nav-link" href="#">Wait</a>
			    </li>
			    <li class="nav-item">
			      <a class="nav-link" href="#">About</a>
			    </li>
			
			</ul>


			    <form action="{{ url('search') }}" method="GET" class="form-inline my-2 my-lg-0" >
				 <input type="text" name="search" placeholder="search..." >
				 <button class="btn" type="submit"><i class="fa fa-search"></i></button>
			    </form>

			</nav>
		 </div>
		</div>
	<div>
@yield('container')
	
	<div class="jumbotron bg-dark footer" style="margin-bottom:0">
	 <div class="container">
	  <div class="row">

		<div class="col-sm-6">
		 <div class="bawah1">
		  <p>Web Developer</p>
		  <p>Ahmad Syauqi Syuhada</p>
		  <p>Universitas Sriwijaya</p>
		  <p>IG : @ahmad_syauqi_syuhada</p>
		 </div>
		</div>

		<div class="col-sm-6">
			<p><h1>Follow Us</h1></p>
			<div class="container">
			 <button type="button" class="btn btn-social-icon 
				btn-twitter btn-rounded">
			   <i class="fa fa-twitter"></i>
			  </button>
			 <button type="button" class="btn btn-social-icon 
				btn-instagram btn-rounded" style="margin-left:15px">
			   <i class="fa fa-instagram"></i>
			  </button>
			</div>
		</div>

	  </div>
	 </div>
	</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>

 </div>
</body>
</html>
