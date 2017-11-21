@extends('welcome')
@section('update')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            {!! Form::model($payment,array('route' =>['payment_method.update',$payment->id],'method'=>'PUT')) !!}

            {!! Form::hidden('id', $payment->id) !!}

            <div class="form-group">
                {!! Form::label('full_name', 'Nombre') !!}
                {!! Form::text('name', null, ['class' => 'form-control' , 'required' => 'required']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('email', 'Descripcion') !!}
                {!! Form::text('description', null, ['class' => 'form-control' , 'required' => 'required']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Guardar', ['class' => 'btn btn-outline-success ' ] ) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
    @stop