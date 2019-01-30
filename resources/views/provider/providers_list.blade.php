<html>
<head>
    <title>Lista de provedores</title>
</head>

<body>
@extends('welcome')
@section('list')
<div class="container">
    <div class="row">
        {!! Form::open(['route' => '/provider/search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
        <div class="form-group">
            <label for="exampleInputName2">Nombre</label>
            <input type="text" class="form-control" name = "name" >
        </div>
        <button type="submit" class="btn btn-default">Buscar</button>
        <a href="{{ route('provider.index') }}" class="btn btn-primary">Todos</a>
        <a href="{{ route('provider.create') }}" class="btn btn-primary">Agregar</a>
        <br>
        {!! Form::close() !!}
        <table class="table table-condensed table-striped table-bordered">
            <thead>
            <tr>
                <th>Nombre</th>
                <th>RFC</th>
                <th>Telefono</th>
                <th>Email</th>
                <th>Direccion</th>
                <th>Ciudad</th>
                <th>Estado</th>
            </tr>
            </thead>
            <tbody>
            @foreach($providers as $provider)
                <tr>
                    <td>{{ $provider->provider_name}}</td>
                    <td>{{ $provider->rfc }}</td>
                    <td>{{ $provider->phone }}</td>
                    <td>{{ $provider->email }}</td>
                    <td>{{ $provider->address }}</td>
                    <td>{{ $provider->city }}</td>
                    <td>{{ $provider->state }}</td>
                    <td>
                      <a class="btn btn-primary btn-xs" href="{{ route('provider.edit',['id' => $provider->id_provider] )}}" >Editar</a>
                        <a class="btn btn-danger btn-xs" href="{{ route('/provider/delete',['id' => $provider->id_provider] )}}" >Eliminar</a>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
    @stop
</body>
</html>
