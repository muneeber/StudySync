<?php

namespace App\Livewire;

use Livewire\Component;
// use Models\ReviewSession;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\ReviewSession as ModelsReviewSession;

class ReviewSession extends Component
{
    public $S1;
    public $S3;
    public $S7;
    public $S15;
    public $S30;
    public $S70;
    public function mount(){
        	$this->S1();
            $this->S3();
            $this->S7();
            $this->S15();
            $this->S30();
            $this->S70();
    }
    public function S1(){
        $this->S1=ModelsReviewSession::with('subject','topic')->where('user_id',Auth::user()->id)
        ->where('S#','S1')
        ->where('review_date',now()->format('Y-m-d'))
        ->get();
        // dd($this->S1);
       
    }
    public function S3(){
        $this->S3=ModelsReviewSession::with('subject','topic')->where('user_id',Auth::user()->id)
        ->where('S#','S3')
        ->where('review_date',now()->format('Y-m-d'))
        ->get();
       
    }
    public function S7(){
        $this->S7=ModelsReviewSession::with('subject','topic')->where('user_id',Auth::user()->id)
        ->where('S#','S7')
        ->where('review_date',now()->format('Y-m-d'))
        ->get();
       
    }
    public function S15(){
        $this->S15=ModelsReviewSession::with('subject','topic')->where('user_id',Auth::user()->id)
        ->where('S#','S15')
        ->where('review_date',now()->format('Y-m-d'))
        ->get();
      
    }
    public function S30(){
        $this->S30=ModelsReviewSession::with('subject','topic')->where('user_id',Auth::user()->id)
        ->where('S#','S30')
        ->where('review_date',now()->format('Y-m-d'))
        ->get();
       
    }
    public function S70(){
        $this->S70=ModelsReviewSession::with('subject','topic')->where('user_id',Auth::user()->id)
        ->where('S#','S70')
        ->where('review_date',now()->format('Y-m-d'))
        ->get();
    }
    public function isDone($id){

            $ch = ModelsReviewSession::find($id);
            if($ch->isDone==0){
                DB::update('UPDATE review_sessions SET isDone = ? WHERE id = ?', [1,$id]);
            }
            else if($ch->isDone==1){
                DB::update('UPDATE review_sessions SET isDone = ? WHERE id = ?', [0,$id]);
            }
            // dd($ch->S);
            $s=($ch->{'S#'});
            $result = $this->{$s}();

            


    }
    public function render()
    {
        return view('livewire.review-session');
    }
}
