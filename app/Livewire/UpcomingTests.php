<?php

namespace App\Livewire;

use Carbon\Carbon;
use App\Models\Test;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class UpcomingTests extends Component
{
    public $tests;
    public $startOfWeek;
    public $endOfWeek;
    public function mount(){
        $startOfWeek = Carbon::now()->startOfWeek();
    $endOfWeek = Carbon::now()->endOfWeek();
    $this->startOfWeek =$startOfWeek;
    $this->endOfWeek=$endOfWeek;
    // Fetch tests for the current week using the Test model
    $this->tests = Test::with('subject')->where('user_id',Auth::user()->id)->whereBetween('test_date', [$startOfWeek, $endOfWeek])->get();

    
    }
    public function render()
    {
        return view('livewire.upcoming-tests');
    }
}
