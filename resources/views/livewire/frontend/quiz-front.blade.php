@if (is_null($quiz))
    <div class="container">
        <div class="card mb-1 justify-content-center">
            <div class="container-fluid">
                <div class="row text-center p-5 mt-2">
                    <div class="col justify-content-center">
                        <p><strong>CHEATER</strong></p>
                        <button type="button" class="btn btn-outline-danger float-center"
                                wire:click="resetGame">restart Quiz
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@else
    <div class="container">
        <div class="card mb-1">
            <div class="container-fluid">
                <div class="row small text-center text-muted mt-2">
                    <div class="col">
                        <p>Player: {{ session('name') }}</p>
                    </div>
                    <div class="col">
                        <p>Round: {{ $counter }}/{{ session('rounds') }}</p>
                    </div>
                    <div class="col justify-content-center">
                        <p>
                            Difficulty: {{ session('level') }}
                        </p>
                    </div>
                    <div class="col">
                        <p>
                            Subject area: {{ $quiz[$quizid]->categorie['category'] }}
                        </p>
                    </div>
                    <div class="col">
                        <p>Number of points: {{ session('score') }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="p-3 card">
            <div class="container-fluid py-3">
                <h2 class="card-title text-center">{{ $quiz[$quizid]['question'] }}</h2>
            </div>
        </div>

        <div class="row align-items-md-stretch mt-1 mb-1">
            <div class="col-md-6 mb-1" x-data="{ wahl: false }">
                <div :class="{ 'bg-warning': wahl, '': !wahl }" class="card h-100 p-1" @click.away="wahl = false"
                     @click="wahl = ! wahl" wire:click="answer('a')">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2 d-flex align-content-center flex-wrap">
                                <h3 class="card-title">A)</h3>
                            </div>
                            <div class="col-md-10 d-flex align-content-center flex-wrap">
                                <h3 class="card-title text-break">{{ $quiz[$quizid]['a'] }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-1" x-data="{ wahl: false }">
                <div :class="{ 'bg-warning': wahl, '': !wahl }" class="card h-100 p-1" @click.away="wahl = false"
                     @click="wahl = ! wahl" wire:click="answer('b')">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2 d-flex align-content-center flex-wrap">
                                <h3 class="card-title">B)</h2>
                            </div>
                            <div class="col-md-10 d-flex align-content-center flex-wrap">
                                <h3 class="card-title text-break">{{ $quiz[$quizid]['b'] }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-1" x-data="{ wahl: false }">
                <div :class="{ 'bg-warning': wahl, '': !wahl }" class="card h-100 p-1" @click.away="wahl = false"
                     @click="wahl = ! wahl" wire:click="answer('c')">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2 d-flex align-content-center flex-wrap">
                                <h3 class="card-title">C)</h3>
                            </div>
                            <div class="col-md-10 d-flex align-content-center flex-wrap">
                                <h3 class="card-title text-break">{{ $quiz[$quizid]['c'] }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-1" x-data="{ wahl: false }">
                <div :class="{ 'bg-warning': wahl, '': !wahl }" class="card h-100 p-1" @click.away="wahl = false"
                     @click="wahl = ! wahl" wire:click="answer('d')">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2 d-flex align-content-center flex-wrap">
                                <h3 class="card-title">D)</h3>
                            </div>
                            <div class="col-md-10 d-flex align-content-center flex-wrap">
                                <h3 class="card-title text-break">{{ $quiz[$quizid]['d'] }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="d-grid gap-2">
                    <button type="button" class="btn btn-success btn-lg"
                            wire:click="nextQuestion">Next
                    </button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mt-5">
                @if (session()->has('message'))
                    <div class="alert border-success">
                        {{ session('message') }}
                    </div>
                @elseif (session()->has('error'))
                    <div class="alert border-danger">
                        {{ session('error') }}
                    </div>
                @endif
            </div>
            <div class="col-md-6 mt-5">
                <button type="button" class="btn btn-outline-danger float-end" wire:click="resetGame">restart
                    Quiz
                </button>
            </div>
        </div>
    </div>
@endif
