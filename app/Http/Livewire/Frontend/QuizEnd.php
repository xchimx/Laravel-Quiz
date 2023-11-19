<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use App\Models\Highscore;

class QuizEnd extends Component
{
    public $name;
    public $level;
    public $categorie_id;
    public $score;

    protected $rules = [
        'name' => 'required|min:3|max:50',
        'level' => 'required|min:1|max:100',
        'categorie_id' => 'required|min:1|max:5',
        'score' => 'required|min:1|integer',
    ];

    public function mount()
    {
        $this->name = session('name');
        $this->level = session('level');
        $this->categorie_id = session('category');
        $this->score = session('score');
        $validatedData = $this->validate();
        if (!session('end') == 1) {
            Highscore::Create($validatedData);
        }
        session()->put('end', 1);
        $this->reset();
    }

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
        return view('livewire.frontend.quiz-end');
    }
}
