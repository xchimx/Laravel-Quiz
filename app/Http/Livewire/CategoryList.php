<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Categorie;
use Livewire\WithPagination;

class CategoryList extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    protected $category;
    public $category_id;
    public $search = '';

    protected $listeners = ['CategoryAdded', 'render'];


    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function CategoryAdded()
    {
        $this->category = Categorie::all();
    }

    public function openAsk($id)
    {
        $this->category_id = $id;

        $this->dispatchBrowserEvent('show-ask');
    }

    public function deleteCategory()
    {
        Categorie::destroy($this->category_id);
        $this->dispatchBrowserEvent('notify', ['title' => 'Allright', 'body' => 'Quiz question successfully deleted!!', 'status' => 'bg-success', 'icon' => 'fas fa-check']);
        $this->reset('category_id');
        $this->dispatchBrowserEvent('close-ask');
    }

    public function editCategory($id)
    {
        $this->emit('editCategory', $id);
    }

    public function render()
    {
        return view('livewire.category-list', [
            'categorie' => Categorie::where('category', 'like', '%' . $this->search . '%')->paginate(5),
        ]);
    }
}
