@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <livewire:dashboard/>
@stop

@section('css')
    @livewireStyles
@stop

@section('js')
    <script>
        @livewireScripts
    </script>
@stop
