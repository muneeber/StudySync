<?php

namespace App\Http\Controllers;

use App\Models\Test;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Test.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $subjects = Subject::all();
        return view('Test.create', ['subjects' => $subjects]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $val = $request->validate([
            'date' => 'required|date',
            'subject' => 'required',
            'syllabus' => 'required',  // Corrected the rule from 'req' to 'required'
            'unit' => 'required',
        ]);



       $res= DB::insert('INSERT INTO tests (user_id, subject_id, test_description, test_date, unit) VALUES (?, ?, ?, ?, ?)', [Auth::user()->id, $val['subject'], $val['syllabus'], $val['date'], $val['unit']]);

        // $res = Test::create([
        //     'user_id' => Auth::user()->id,
        //     // 'subject_id' => 1,
        //     'subject_id'=>$val['subject'],
        //     'test_description' => $val['syllabus'],
        //     'test_date' => $val['date'],
        //     'unit' => $val['unit'],
        // ]);
            // dd($res);
        if ($res) {
            return redirect()->back()->with('success', 'Test Added Successfully');
        } else {
            return redirect()->back()->with('error', 'Failed to add test');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show( $test)
    {
        // $test;
        dd(Test::with('subject')->find($test));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Test $test)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Test $test)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Test $test)
    {
        //
    }
}
