<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Quiz;
use App\Models\Categorie;
use App\Models\User;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.dashboard', [
            'quiz' => Quiz::all(),
            'categorie' => Categorie::all(),
            'user' => User::all(),
        ]);
    }
}
