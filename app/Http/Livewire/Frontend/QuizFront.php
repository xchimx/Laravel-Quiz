<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;

class QuizFront extends Component

{
    public $quizid = 0;
    public $counter = 1;
    public $correct;

    protected $listeners = ['refreshComponent' => '$refresh'];

    public function resetGame()
    {
        session()->forget('name');
        session()->forget('rounds');
        session()->forget('level');
        session()->forget('category');
        session()->forget('categories');
        session()->forget('score');
        session()->forget('question');
        session()->forget('end');
        return redirect()->to('/');
    }

    public function answer($id)
    {
        $all = session('question');
        $question = $all[$this->quizid];

        if ($id == $question['correct']) {
            $this->correct = 'yes';
            session()->flash('message', 'Answer has been logged in');
        } else {
            $this->correct = 'no';
            session()->flash('message', 'Answer has been logged in');
        }
    }

    public function nextQuestion()
    {
        $score = session('score');
        if ($this->correct === 'yes') {
            $this->quizid++;
            $this->counter++;

            session()->put('score', $score + 100);

            $this->correct = NULL;
            if ($this->counter - 1 == session('rounds')) {
                return redirect()->to('/end');
            }
            $this->emit('refreshComponent');
        } else {
            session()->put('score', $score - 10);
            $this->correct = 'nope.jpg';
            session()->flash('error', 'Answer incorrect, try again');
        }
    }

    public function render()
    {

        if (session('end') == 1) {
            return view(
                'livewire.frontend.quiz-front',
                [
                    'quiz' => NULL,
                ]
            );
        } else {
            return view(
                'livewire.frontend.quiz-front',
                [
                    'quiz' => session('question'),
                ]
            );
        }
    }
}
