@extends('welcome')
@section('add')
    <div class="container">
        <div class="col-md-10 col-md-offset-1">
            {!! $chartjs->render() !!}
        </div>
    </div>
@stop