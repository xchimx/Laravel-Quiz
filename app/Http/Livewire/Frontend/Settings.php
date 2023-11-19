<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use App\Models\Quiz;
use App\Models\Categorie;

class Settings extends Component
{
    public $rounds;
    public $level;
    public $category;

    protected $rules = [
        'rounds' => 'required',
        'level' => 'required',
        'category' => 'required',
    ];

    protected $messages = [
        'rounds.required' => 'The number of rounds must be selected',
        'level.required' => 'The difficulty level must be selected',
        'category.required' => 'The subject area must be selected',
    ];

    public function enterDetails()
    {
        $validatedData = $this->validate();

        session()->put('rounds', $validatedData['rounds']);
        session()->put('level', $validatedData['level']);
        session()->put('category', $validatedData['category']);
        session()->put('categories', Categorie::all());
        session()->put('score', 0);


        //----------------------------------------

        if ((session('level') == 'all') && (session('category') == 0)) {
            session()->put('question', Quiz::all()->random(Session('rounds')));
        } else if (session('level') == 'all') {
            session()->put('question', Quiz::where('categorie_id', Session('category'))->take(Session('rounds'))->inRandomOrder()->get());
        } else if (session('category') == 0) {
            session()->put('question', Quiz::where('level', Session('level'))->take(Session('rounds'))->inRandomOrder()->get());
        } else {
            session()->put('question', Quiz::where('level', Session('level'))->where('categorie_id', Session('category'))->take(Session('rounds'))->inRandomOrder()->get());
        }

        //--------------------------------------------
        if (session('question')->isEmpty()) {
            session()->flash('message', 'There are no questions in this setting');
        } else if (session('question')->count() < Session('rounds')) {
            session()->flash('message', 'Currently only ' . session('question')->count() . ' questions available in this setting');
        } else {
            return redirect()->to('/quiz');
        }

        //----------------------------------------
    }

    public function render()
    {
        return view('livewire.frontend.settings', [
            'categorie' => Categorie::all(),
        ]);
    }
}
