@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>crear rol</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">

            {!! Form::open(['route' => 'admin.roles.store']) !!}
                
                @include('admin.roles.partials.form')

                {!! Form::submit('Crear Rol', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
            
        </div>
    </div>
@stop
