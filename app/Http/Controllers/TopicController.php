<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return  view('topics.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $subjects = Subject::all();
        // dd($subjects);
        // dd();
        return  view('topics.create', ['subjects' => $subjects]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 'user_id', 'title',  'date_added','subject_id'
        // dd($request);
       $vr= $request->validate([
            'topic' => 'required',
            'date' => 'required|date',
            'subject' => 'required'
        ]);
        $res=Topic::create([
            'user_id'=>Auth::user()->id,
            'title'=>$vr['topic'],
            'date_added'=>$vr['date'],
            'subject_id'=>$vr['subject']
        ]);
        if($res){
            return redirect()->back()->with('Success','Topic Added Successfully');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Topic $topic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Topic $topic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Topic $topic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Topic $topic)
    {
        //
    }
}
