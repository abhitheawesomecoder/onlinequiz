<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Topic;
use App\Answer;
use App\Question;
use Illuminate\Support\Facades\DB;

class TopReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
         $topics = Topic::all();
         $questions = Question::all();
         $total_students_gave_exam = Answer::distinct('user_id')->count();
         return view('admin.top_reports.index', compact('questions', 'topics','total_students_gave_exam'));
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function show($id)
     {  
        $filtStudents = DB::select("SELECT users.*, (positive_count - IFNULL(negative_count,0)) as score
                              FROM (SELECT user_id, count(`user_answer`)*2 as positive_count FROM `answers` WHERE `user_answer` = `answer` AND `topic_id` = ".$id." GROUP BY `user_id`) AS pos
                              LEFT JOIN (SELECT user_id, count(`user_answer`)*0.50 as negative_count FROM `answers` WHERE `user_answer` <> '0' AND `user_answer` <> `answer` AND `topic_id` = ".$id."  GROUP BY `user_id`) as neg
                              ON pos.user_id = neg.user_id 
                              left join users on users.id = pos.user_id
                              ORDER BY score DESC");
         //dd($result);
         $topic = Topic::findOrFail($id);
        //  $answers = Answer::where('topic_id', $topic->id)->get();
        //  $students = User::where('id', '!=', Auth::id())->get();
        //  $c_que = Question::where('topic_id', $id)->count();

        //  $filtStudents = collect();
        //  foreach ($students as $student) {
        //    foreach ($answers as $answer) {
        //      if ($answer->user_id == $student->id) {
        //        $filtStudents->push($student);
        //      }
        //    }
        //  }

        //  $filtStudents = $filtStudents->unique();
        //  $filtStudents = $filtStudents->flatten();

         return view('admin.top_reports.show', compact('filtStudents','topic'));
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
