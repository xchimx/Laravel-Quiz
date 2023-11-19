@extends('adminlte::page')

@section('title', 'Questions')

@section('content_header')
    <h1>Questionnaire</h1>
@stop

@section('content')
    <livewire:create-question />
    <livewire:question-list />
@stop

@section('css')
    @livewireStyles
@stop

@section('js')
    @livewireScripts
    <script>
        window.addEventListener('notify', (e) => {
            $(document).Toasts('create', {
                title: e.detail.title,
                body: e.detail.body,
                autohide: true,
                class: e.detail.status,
                icon: e.detail.icon
            })
        });
        window.addEventListener('show-ask', event => {
            $('#askme').modal('show');
        });
        window.addEventListener('close-ask', event => {
            $('#askme').modal('hide');
        });
    </script>
@stop
