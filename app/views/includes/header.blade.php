@section('header')
<!DOCTYPE html>
<html lang="en" class=" ">
<head>  
  <meta charset="utf-8" />
  <title>DiBu | Diabetic Companion</title>
  <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
  <link rel="icon" type="image" href="assets/images/favicon.ico"/>
  <link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="assets/css/animate.css" type="text/css" />
  <link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="assets/css/icon.css" type="text/css" />
  <link rel="stylesheet" href="assets/css/font.css" type="text/css" />
  <link rel="stylesheet" href="assets/css/app.css" type="text/css" />  
  <link rel="stylesheet" href="assets/css/landing.css" type="text/css" />
  <!--[if lt IE 9]>
    <script src="js/ie/html5shiv.js"></script>
    <script src="js/ie/respond.min.js"></script>
    <script src="js/ie/excanvas.js"></script>
  <![endif]-->
</head>
<body class="">
  	
  <!-- header -->
  <header id="header" class="navbar navbar-fixed-top bg-primary dk"  data-spy="affix" data-offset-top="1">
    <div class="container">
      <div class="navbar-header">        
        <a href="/" class="navbar-brand m-r-lg"><img src="assets/images/logo_white.png" class="m-r-sm"><span class="text-lt">DiBu</span></a>
        <button class="btn btn-primary btn-emtpy visible-xs" type="button" data-toggle="collapse" data-target=".navbar-collapse">
          <i class="fa fa-bars"></i>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li>
            <a href="/how-it-works" data-ride="scroll">How it works</a>
          </li>
          <li>
            <a href="/features" data-ride="scroll">Features</a>
          </li>
          <li>
            <a href="/pro" data-ride="scroll">DiBu Pro</a>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li>
            <div class="m-t-sm"><a href="/signin" class="btn btn-link btn-sm">Sign in</a> or <a href="/signup" class="btn btn-sm btn-success btn-rounded m-l"><strong>Sign up</strong></a></div>
          </li>
        </ul>     
      </div>
    </div>
  </header>
  <!-- / header -->
  
@stop