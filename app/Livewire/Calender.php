<?php

namespace App\Livewire;

use Carbon\Carbon;
use Livewire\Component;

class Calender extends Component
{
    public $currentDate;

    public function mount()
    {
        $this->currentDate = Carbon::now();
    }
    
    public function render()
    {
        $daysInMonth = $this->currentDate->daysInMonth;
        $firstDay = $this->currentDate->firstOfMonth();
        return view('livewire.calender',[
            'daysInMonth' => $daysInMonth,
            'firstDay' => $firstDay]);
    }
}
