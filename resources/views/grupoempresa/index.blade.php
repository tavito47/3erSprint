@extends('layouts.app')
@section('content')

@if(Session::has('mensaje'))
<div class="alert alert-success alert-dismissible" role="alert">
{{Session::get('mensaje')}}
</div>
@endif
<!DOCTYPE html>
<head>
<title> Grupo Empresa | Gestion TIS </title>
</head>
<body>
<h2 class="text-center p-2">Listado de Grupo-Empresas</h2>
<div class="container">

<br/>
<br/>
<div class="table-responsive">

<table class="table table-ligth">
<thead class="thead-ligth">
    <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Tipo de Sociedad</th>
        <th>Logo</th>
        <th>Correo</th>
        <th>Telefono</th>
        <th>Direccion</th>
        <th>Representante</th>
        <th>Acciones</th>
    </tr>
</thead>

<tbody>
    @foreach($grupoempresas as $gp )
    <tr>
        <td>{{$gp->id}}</td>
        <td>{{$gp->Nombre}}</td>
        <td>{{$gp->TipoSociedad}}</td>
        <td>
        <img class="img-thumbnail" src="{{asset('storage').'/'.$gp->Logo}}" width=100 alt="">
        </td>
        <td>{{$gp->Correo}}</td>
        <td>{{$gp->Telefono}}</td>
        <td>{{$gp->Direccion}}</td>
        <td>{{$gp->Representante}}</td>
        <td>
        <a href="{{url('/grupoempresa/'.$gp->id.'/edit')}}" class="btn btn-secondary">
        Editar
        </a>
        
        

        <form action="{{url('/grupoempresa/'.$gp->id)}}" method="post">
        @csrf
        {{method_field('DELETE')}}
        <input class="btn btn-dark" type="submit" onClick="return confirm('¿Estas seguro que deseas borrar?')" value="Borrar">
        
    
        </form>
        </td>
    </tr>
    @endforeach
</tbody>
</table>
<a href="{{url('/grupoempresa/create')}}" class="btn btn-dark">Registrar Grupo Empresa</a>
</div>
</div>
</body>
</html>
@endsection