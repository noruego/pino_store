@extends('welcome')
@section('update')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            {!! Form::model($provider,array('route' =>['provider.update',$provider->id],'method'=>'PUT')) !!}

            {!! Form::hidden('id', $provider->id) !!}

            <div class="form-group">
                {!! Form::label('full_name', 'Nombre') !!}
                {!! Form::text('name', null, ['class' => 'form-control' , 'required' => 'required']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('full_name', 'RFC') !!}
                {!! Form::text('rfc', null, ['class' => 'form-control' , 'required' => 'required']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('full_name', 'Telefono') !!}
                {!! Form::text('phone', null, ['class' => 'form-control' , 'required' => 'required']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('full_name', 'Email') !!}
                {!! Form::text('email', null, ['class' => 'form-control' , 'required' => 'required']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('full_name', 'Direccion') !!}
                {!! Form::text('address', null, ['class' => 'form-control' , 'required' => 'required']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('full_name', 'Estado') !!}
                <select class="form-control" id="state" name="state" placeholder="Selecciona un estado">
                    @foreach($states as $state)
                        @if($state->id == $provider->id_state)
                            <option selected="selected" value="{{ $state->id }}">{{ $state->name }}</option>
                        @endif
                        @if($state->id != $provider->id_state)
                                <option value="{{ $state->id }}">{{ $state->name }}</option>
                            @endif
                    @endforeach
                </select>

            </div>
            <div class="form-group">
                {!! Form::label('full_name', 'ciudad') !!}
                <select class="form-control" id="city" name="city" placeholder="Selecciona un estado">
                    @foreach($cities as $city)
                        @if($city->id == $provider->id_city)
                            <option selected="selected" value="{{ $city->id }}">{{ $city->name }}</option>
                            <script>alert({{ $city->name }});</script>
                        @endif
                        @if($city->id != $provider->id_city)
                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                {!! Form::submit('Guardar', ['class' => 'btn btn-success ' ] ) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
<script>
    $("#state").change(function (event) {
        $.get('/state/'+event.target.value,function (data) {
            $('#city').empty();
            $.each(data,function (index, city) {
                $('#city').append('<option value="'+city.id+'">'+city.name+'</option>');
            });
        });
    });
</script>
@stop