<?php

namespace App\Http\Livewire;

use App\Models\Categorie;
use Livewire\Component;

class CreateCategory extends Component
{
    public $category;
    public $update = NULL;

    protected $listeners = ['editCategory'];

    protected $rules = [
        'category' => 'required|min:3|max:100|regex:/^[\pL\s\-]+$/u|unique:categories',
    ];

    protected $messages = [
        'category.min' => 'The category must contain at least 3 characters',
        'question.max' => 'The category may contain a maximum of 100 characters',
        'category.required' => 'Write a subject area',
        'category.regex' => 'The category must be legible',
        'category.unique' => 'Categories must not be duplicated',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function addCategory()
    {
        $validatedData = $this->validate();
        if (is_NULL($this->update)) {
            Categorie::Create($validatedData);
        } else {
            $item = Categorie::find($this->update);
            $item->update($validatedData);
        }

        $this->reset();
        $this->emit('CategoryAdded');
    }

    public function editCategory($id)
    {
        $item = Categorie::find($id);

        $this->category = $item->category;
        $this->update = $item->id;
    }

    public function render()
    {
        return view('livewire.create-category');
    }
}
