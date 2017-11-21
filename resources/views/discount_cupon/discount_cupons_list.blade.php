@extends('welcome')
<html>
<head>
    <title>Lista de cupones</title>
</head>

<body>
@section('list')
<div class="container">
    <div class="row">
        {!! Form::open(['route' => '/discount_cupon/search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
        <div class="form-group">
            <label for="exampleInputName2">Nombre</label>
            <input type="text" class="form-control" name = "name" >
        </div>
        <button type="submit" class="btn btn-default">Buscar</button>
        <a href="{{ route('discount_cupon.index') }}" class="btn btn-outline-primary">Todos</a>
        <a href="{{ route('discount_cupon.create') }}" class="btn btn-outline-success">Agregar</a>
        <br>
        {!! Form::close() !!}
        <table class="table table-condensed table-striped table-bordered">
            <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Porcentaje</th>
                <th>Fecha de inicio</th>
                <th>Fecha de vencimiento</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cupons as $cupon)
                <tr>
                    <td>{{ $cupon->name }}</td>
                    <td>{{ $cupon->description }}</td>
                    <td>{{ $cupon->percentage }}</td>
                    <td>{{ $cupon->start_date }}</td>
                    <td>{{ $cupon->end_date}}</td>
                    <td>
                      <a class="btn btn-outline-primary btn-xs" href="{{ route('discount_cupon.edit',['id' => $cupon->id] )}}" >Editar</a>
                        <a class="btn btn-outline-danger btn-xs" href="{{ route('/discount_cupon/delete',['id' => $cupon->id] )}}" >Eliminar</a>
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
