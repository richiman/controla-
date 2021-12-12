@extends('layouts.sidemenu')
@section('content')
@endsection
<head>
  <link   href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
  <link   href="{{ asset('css/styke.css') }}" rel="stylesheet">
</head>
<div class="container">
  <br>
  <h1 class="text-center font-weight-bold">Dashboard</h1>
  <br>
  <br>
  <br>
  <br>
  <div class="container">
    <div class="row ">
      <div class="col-sm">
      <img src="{{ asset('img/confusio.jpg') }}" height="400" width="700">
      </div>
      <div class="col-sm">
        <h4 class="font-weight-bold text-center">Actividades</h4>
      </div>
    </div>
    <br>
    <br>
    <br>
    <div class="row text-center">
      <div class="col-sm">
        <div class="card shadow rounded" style="width: 18rem;">
          <div class="card-body">
            <h5 class="font-weight-bold">Empleados</h5>
            <img src="{{ asset('img/usar.png') }}" alt="">
            <img src="{{ asset('img/user.png') }}" alt=""><br><br>
            <a href="#" class="card-link ">0</a>
            <a href="#" class="card-link">0</a>
          </div>
        </div>
      </div>
      <div class="col-sm">
        <div class="card shadow rounded" style="width: 18rem;">
          <div class="card-body">
            <h5 class="font-weight-bold">Producción</h5>
            <img src="{{ asset('img/produccion.png') }}" alt="">
            <br>
            <br>
            <h6  class="font-weight-bold ">0 Kg</h6>
          </div>
        </div>
      </div>
      <div class="col-sm">
        <div class="card shadow rounded" style="width: 18rem;">
          <div class="card-body">
            <h5 class="font-weight-bold">Facturación</h5>
            <img src="{{ asset('img/factura.png') }}" alt="">
            <br>
            <br>
            <h6  class="font-weight-bold ">0 MXN</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
