<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Quiz;
use App\Models\Categorie;

class CreateQuestion extends Component
{
    public $question;
    public $a;
    public $b;
    public $c;
    public $d;
    public $correct;
    public $level;
    public $categorie_id;
    public $update = NULL;

    protected $listeners = ['editQuestion'];

    protected $rules = [
        'question' => 'required|min:6|max:255',
        'a' => 'required|min:1|max:100',
        'b' => 'required|min:1|max:100',
        'c' => 'required|min:1|max:100',
        'd' => 'required|min:1|max:100',
        'correct' => 'required|min:1',
        'level' => 'required',
        'categorie_id' => 'required',
    ];

    protected $messages = [
        'question.required' => 'The question field is required',
        'question.min' => 'The question must contain at least 6 characters',
        'question.max' => 'The question may contain a maximum of 255 characters',
        'a.required' => 'The answer field is required',
        'a.min' => 'The answer must contain at least 1 character',
        'a.max' => 'The answer may contain a maximum of 100 characters',
        'b.required' => 'The answer field is required',
        'b.min' => 'The answer must contain at least 1 character',
        'b.max' => 'The answer may contain a maximum of 100 characters',
        'c.required' => 'The answer field is required',
        'c.min' => 'The answer must contain at least 1 character',
        'c.max' => 'The answer may contain a maximum of 100 characters',
        'd.required' => 'The answer field is required',
        'd.min' => 'The answer must contain at least 1 character',
        'd.max' => 'The answer may contain a maximum of 100 characters',
        'correct.required' => 'Which answer is correct?',
        'correct.min' => 'The answer must contain at least 1 character',
        'level.required' => 'The level of difficulty must be selected',
        'categorie_id.required' => 'The subject area must be selected',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function addQuestion()
    {
        $validatedData = $this->validate();
        if (is_NULL($this->update)) {
            Quiz::Create($validatedData);
            $this->dispatchBrowserEvent('notify', ['title' => 'Allright', 'body' => 'Quiz question successfully added!', 'status' => 'bg-success', 'icon' => 'fas fa-check']);
        } else {
            $item = Quiz::find($this->update);
            $item->update($validatedData);
            $this->dispatchBrowserEvent('notify', ['title' => 'Allright', 'body' => 'Quiz question successfully updated!', 'status' => 'bg-success', 'icon' => 'fas fa-check']);
        }

        $this->reset();
        $this->emit('QuestionAdded');
    }

    public function editQuestion($id)
    {
        $item = Quiz::find($id);

        $this->question = $item->question;
        $this->a = $item->a;
        $this->b = $item->b;
        $this->c = $item->c;
        $this->d = $item->d;
        $this->correct = $item->correct;
        $this->level = $item->level;
        $this->categorie_id = $item->categorie_id;
        $this->update = $item->id;
    }

    public function render()
    {
        return view('livewire.create-question', [
            'categorie' => Categorie::all(),
        ]);
    }
}
