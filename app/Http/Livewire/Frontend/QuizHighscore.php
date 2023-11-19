<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use App\Models\Highscore;

class QuizHighscore extends Component
{

    public function resetGame()
    {
        session()->forget('name');
        session()->forget('rounds');
        session()->forget('level');
        session()->forget('category');
        session()->forget('score');
        session()->forget('question');
        session()->forget('end');
        return redirect()->to('/');
    }

    public function render()
    {
        return view('livewire.frontend.quiz-highscore', [
            'highscore' => Highscore::orderBy('score', 'desc')->get(),
        ]);
    }
}
