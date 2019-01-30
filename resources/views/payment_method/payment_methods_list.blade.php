@extends('welcome')
<html>
<head>
    <title>Lista de metodos de pago</title>
</head>

<body>
@section('list')
<div class="container">
    <div class="row">
        {!! Form::open(['route' => '/payment_method/search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
        <div class="form-group">
            <label for="exampleInputName2">Nombre</label>
            <input type="text" class="form-control" name = "name" >
        </div>
        <button type="submit" class="btn btn-default">Buscar</button>
        <a href="{{ route('payment_method.index') }}" class="btn btn-outline-primary">Todos</a>
        <a href="{{ route('payment_method.create') }}" class="btn btn-outline-success">Agregar</a>
        <br>
        {!! Form::close() !!}
        <table class="table table-condensed table-striped table-bordered">
            <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
            </tr>
            </thead>
            <tbody>
            @foreach($payments as $payment)
                <tr>
                    <td>{{ $payment->name }}</td>
                    <td>{{ $payment->description }}</td>
                    <td>
                      <a class="btn btn-outline-primary btn-xs" href="{{ route('payment_method.edit',['id' => $payment->id] )}}" >Editar</a>
                        <a class="btn btn-outline-danger btn-xs" href="{{ route('/payment_method/delete',['id' => $payment->id] )}}" >Eliminar</a>
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
