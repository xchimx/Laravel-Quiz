@include('layouts.header')

<body>
<main>
    <div class="container py-4">
        <header class="pb-3 mb-4 border-bottom">
            <span class="fs-4 d-flex align-content-center flex-wrap">Quiz - Who wants to be a millionaire</span>
        </header>
        <livewire:frontend.quiz-highscore/>
        @include('layouts.footer')
    </div>
</main>
@livewireScripts
<script src="{{ mix('/js/app.js') }}"></script>
</body>

</html>
