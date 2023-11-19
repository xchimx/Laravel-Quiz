<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use Illuminate\Support\Str;

class Username extends Component
{
    public $name;

    protected $rules = [
        'name' => 'required|min:3|regex:/^[\pL\-]+\s?[\pL\-]*$/|max:30',
    ];

    protected $messages = [
        'name.required' => 'The name must be entered',
        'name.min' => 'The name must contain at least 3 characters',
        'name.max' => 'The name may contain a maximum of 30 characters',
        'name.regex' => 'It must be a real name',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function enterName()
    {
        $validatedData = $this->validate();
        $contains = Str::contains($validatedData['name'], ['Bad', 'Names', 'You', 'Dont', 'Like']);
        if ($contains) {
            session()->put('name', 'Idiot');
        } else {
            session()->put('name', $validatedData['name']);
        }
        session()->forget('end');
        return redirect()->to('/settings');
    }


    public function render()
    {
        return view('livewire.frontend.username');
    }
}
