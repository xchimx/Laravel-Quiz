<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Quiz;
use App\Models\Categorie;
use Livewire\WithPagination;

class QuestionList extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    protected $quiz;
    public $quiz_id;
    public $search = '';

    protected $listeners = ['QuestionAdded', 'render'];

    public function updatingSearch()
    {
        $this->resetPage();
    }


    public function QuestionAdded()
    {
        $this->quiz = Quiz::all();
    }

    public function openAsk($id)
    {
        $this->quiz_id = $id;
        $this->dispatchBrowserEvent('show-ask');
    }

    public function deleteQuestion()
    {
        Quiz::destroy($this->quiz_id);
        $this->dispatchBrowserEvent('notify', ['title' => 'Allright', 'body' => 'Quiz question successfully deleted!', 'status' => 'bg-success', 'icon' => 'fas fa-check']);
        $this->reset('quiz_id');
        $this->dispatchBrowserEvent('close-ask');
    }

    public function editQuestion($id)
    {
        $this->emit('editQuestion', $id);
    }

    public function render()
    {
        return view('livewire.question-list', [
            'quiz' => Quiz::where('question', 'like', '%' . $this->search . '%')
                ->orWhere('a', 'like', '%' . $this->search . '%')
                ->orWhere('b', 'like', '%' . $this->search . '%')
                ->orWhere('c', 'like', '%' . $this->search . '%')
                ->orWhere('d', 'like', '%' . $this->search . '%')
                ->orWhere('level', 'like', '%' . $this->search . '%')
                ->paginate(5),
            'categorie' => Categorie::all(),
        ]);
    }
}
