@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
    <h1 class="text-center"><b>CENTRO MEDICO SaludEleva</b></h1>
@stop

@section('content')
    <h5 class="text-center">¡Hola!<b>{{Auth::user()->name }}</b> desde aqui podras administrar tus citas.</h5>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop