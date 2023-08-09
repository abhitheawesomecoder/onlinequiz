<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Question;
use App\Topic;
use App\Answer;

class MainQuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
        $input = $request->all();
        $exist = Answer::where('user_id',$request->user_id)->where('topic_id',$request->topic_id)->where('question_id',$request->question_id)->first();
        if(!is_null($exist)){
            $exist->update($input);
        }
        else{
            Answer::create($input);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
          $topic = Topic::findOrFail($id);
          $auth = Auth::user();

          if ($auth) {
            if ($answers = Answer::where('user_id', $auth->id)->get()) {
                $all_questions = collect();
                $q_filter = collect();
                foreach ($answers as $answer) {
                  $q_id = $answer->question_id;
                  $q_filter = $q_filter->push(Question::where('id', $q_id)->get());
                }
                // $all_questions = $all_questions->push(Question::where('topic_id', $topic->id)
                // ->Where('subject', 'English')->random(3)
                // ->get());
                // $all_questions = $all_questions->flatten();
                // $q_filter = $q_filter->flatten();
                // $questions = $all_questions->diff($q_filter);
                // $questions = $questions->flatten();
                // $questions = $questions->shuffle();
                // $questions = $questions->random(50); 

                $answered_question_ids = Answer::where('user_id', $auth->id)->pluck('question_id')->all();

        $history_questions = Question::where('topic_id', $topic->id)
            ->where('subject', 'History')
            ->whereNotIn('id', $answered_question_ids)
            ->inRandomOrder()
            ->take(5)
            ->get();

        $geography_questions = Question::where('topic_id', $topic->id)
            ->where('subject', 'Geography')
            ->whereNotIn('id', $answered_question_ids)
            ->inRandomOrder()
            ->take(5)
            ->get(); 

        $science_questions = Question::where('topic_id', $topic->id)
            ->where('subject', 'Science')
            ->whereNotIn('id', $answered_question_ids)
            ->inRandomOrder()
            ->take(5)
            ->get();

        // $polity_questions = Question::where('topic_id', $topic->id)
        //     ->where('subject', 'Polity')
        //     ->whereNotIn('id', $answered_question_ids)
        //     ->inRandomOrder()
        //     ->take(5)
        //     ->get();

        $gk1_questions = Question::where('topic_id', $topic->id)
            ->where('subject', 'Gk1')
            ->whereNotIn('id', $answered_question_ids)
            ->inRandomOrder()
            ->take(10)
            ->get();

        $gk2_questions = Question::where('topic_id', $topic->id)
            ->where('subject', 'Gk2')
            ->whereNotIn('id', $answered_question_ids)
            ->inRandomOrder()
            ->take(10)
            ->get();

        $reasoning_questions = Question::where('topic_id', $topic->id)
            ->where('subject', 'Reasoning')
            ->whereNotIn('id', $answered_question_ids)
            ->inRandomOrder()
            ->take(10)
            ->get();
        $maths_questions = Question::where('topic_id', $topic->id)
            ->where('subject', 'Mathematics')
            ->whereNotIn('id', $answered_question_ids)
            ->inRandomOrder()
            ->take(10)
            ->get();

        $civics_questions = Question::where('topic_id', $topic->id)
            ->where('subject', 'Civics')
            ->whereNotIn('id', $answered_question_ids)
            ->inRandomOrder()
            ->take(10)
            ->get();

        $questions = $history_questions->concat($geography_questions)->concat($science_questions)->concat($polity_questions)->concat($gk1_questions)->concat($gk2_questions)->concat($reasoning_questions)->concat($maths_questions)->concat($civics_questions);

                return response()->json(["questions" => $questions, "auth"=>$auth, "topic" => $topic->id]);
            }
            $questions = collect();
            $questions = Question::where('topic_id', $topic->id)->get();
            $questions = $questions->flatten();
            $questions = $questions->shuffle();
            return response()->json(["questions" => $questions, "auth"=>$auth]);
          }
          return redirect('/');
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
        $answer = Answer::findOrFail($id);
        $answer->delete();
        return back()->with('deleted', 'Record has been deleted');
    }
}
