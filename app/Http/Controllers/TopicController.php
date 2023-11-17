<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Topic;
use App\Models\Subject;
use Illuminate\Http\Request;
use App\Models\ReviewSession;
use Illuminate\Support\Facades\DB;
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
    $vr = $request->validate([
        'topic' => 'required',
        'date' => 'required|date',
        'subject' => 'required'
    ]);

    $res = Topic::create([
        'user_id' => Auth::user()->id,
        'title' => $vr['topic'],
        'date_added' => $vr['date'],
        'subject_id' => $vr['subject']
    ]);

    $dates = [
        'S1'=>Carbon::parse($vr['date'])->addDay()->format('Y-m-d'),
        'S3'=>Carbon::parse($vr['date'])->addDays(3)->format('Y-m-d'),
        'S7'=>Carbon::parse($vr['date'])->addWeek()->format('Y-m-d'),
        'S15'=>Carbon::parse($vr['date'])->addWeeks(2)->addDay()->format('Y-m-d'),
        'S30'=>Carbon::parse($vr['date'])->addMonth()->format('Y-m-d'),
        'S70'=>Carbon::parse($vr['date'])->addDays(70)->format('Y-m-d'),
    ];

    $results = [];

    foreach ($dates as $key => $date) {
        $results[] = DB::table('review_sessions')->insert([
            'user_id' => Auth::user()->id,
            'subject_id' => $vr['subject'],
            'topic_id' => $res->id,
            'review_date' => $date,
            'S#'=>$key
        ]);
    }

    $allTrue = array_reduce($results, function ($carry, $value) {
        return $carry && $value;
    }, true);

    if ($allTrue) {
        return redirect()->back()->with('Success', 'Topic Added Successfully');
    } else {
        // At least one value in the array is false
        // Retry the failed operation(s)
        foreach ($results as $key => $result) {
            if (!$result) {
                // Retry the operation using $dates[$key] or other relevant information
                // Example:
               $w= DB::table('review_sessions')->insert([
                    'user_id' => Auth::user()->id,
                    'subject_id' => $vr['subject'],
                    'topic_id' => $res->id,
                    'review_date' => $dates[$key],
                    'S#'=>$key
                ]);
                if ($w) {
                    return redirect()->back()->with('Success', 'Topic Added Successfully');
                }
            }
        }
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
