<?php

namespace App\Livewire;

use App\Models\Topic;
use App\Models\Subject;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Topics extends Component
{
    public $subjects;
    public $today;
    public $selectedSubject;
    public $results;


    public function mount()
    {
        $this->subjects = Subject::all();
        $this->today = now()->format('Y-m-d');
        $this->results = Topic::with('subject')->where('date_added', $this->today)->where('user_id', Auth::user()->id)->get();
        // dd($results);

    }


    public function deleteTopic($topicId)
    {
        // Add logic to delete the topic with the given $topicId
        Topic::find($topicId)->delete();
        // dd($topicId);
        // Reload the results after deletion
        $this->loadResults();
    }


    public function loadResults()
    {
        $this->results = Topic::with('subject')
            ->where('date_added', $this->today)
            ->when($this->selectedSubject, function ($query) {
                $query->where('subject_id', $this->selectedSubject);
            })
            ->where('user_id', Auth::user()->id)
            ->get();
    }



    public function render()
    {
        return view('livewire.topics');
    }
}
