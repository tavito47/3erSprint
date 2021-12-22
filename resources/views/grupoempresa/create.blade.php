@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<head>
<title> Registrar Grupo Empresa | Gestion TIS </title>
</head>
<body>
<div class="container">

<form action="{{url('/grupoempresa')}}" method="post" enctype="multipart/form-data">
@csrf
@include('grupoempresa.form',['modo'=>'Registrar'])
</div>
</body>

<html>

@endsection

