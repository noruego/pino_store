@extends('welcome')
<html>
<head>
    <title>Lista de categorias</title>
</head>

<body>
@section('list')
<div class="container">
    <div class="row">
        {!! Form::open(['route' => '/category/search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
        <div class="form-group">
            <label for="exampleInputName2">Nombre</label>
            <input type="text" class="form-control" name = "name" >
        </div>
        <button type="submit" class="btn btn-default">Buscar</button>
        <a href="{{ route('category.index') }}" class="btn btn-primary">Todos</a>
        <a href="{{ route('category.create') }}" class="btn btn-primary">Agregar</a>
        <br>
        {!! Form::close() !!}
        <table class="table table-condensed table-striped table-bordered">
            <thead>
            <tr>
                <th>Nombre</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->name }}</td>
                    <td>
                      <a class="btn btn-primary btn-xs" href="{{ route('category.edit',['id' => $category->id] )}}" >Editar</a>
                        <a class="btn btn-danger btn-xs" href="{{ route('/category/delete',['id' => $category->id] )}}" >Eliminar</a>
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
