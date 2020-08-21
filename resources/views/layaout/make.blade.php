<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @section ('style')
    <link rel="stylesheet" href="{{asset('src/css/bootstrap.min.css')}}">
    @show
    <title>Menu</title>
    <link rel="shortcut icon" href="{{asset('imagenes/logo2.png')}}" type="image/x-icon">
</head>
<body background="{{asset('imagenes/fondo.jpg')}}">
<div class="content">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">M0V1E_F0R_A11</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo route('/welcome') ?>">Welcome</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo route('/alcance') ?>">alcance</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo route('/futuro') ?>">futuro</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo route('/necesidad') ?>">necesidad</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo route('/objetivo') ?>">objetivo</a>
      </li>
      <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="#">HTML</a></li>
    <li><a href="#">CSS</a></li>
    <li><a href="#">JavaScript</a></li>
  </ul>
</div>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Busque la pelicula" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  </div>
</nav>
</div>
</body>
@section('scripts')
<script src="{{asset('src/js/jquery.min.js')}}"></script>
<script src="{{asset('src/js/jquery-3.3.1.slim.min.js')}}"></script>
<script src="{{asset('src/js/popper.min.js')}}"></script>
<script src="{{asset('src/js/bootstrap.min.css')}}"></script>
@show
</html>

