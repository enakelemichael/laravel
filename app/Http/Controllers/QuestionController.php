<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class QuestionController extends Controller
{
    //
    public function index()
    {
        $questions = DB::table('questions')->get();

        $view = View('questions/index');
        $view->questions = $questions;
        return $view;
    }
    public function show($question_id)
    {
        $answers = DB::table('answers')->where('question_id', $question_id)
        ->get();

        $question = DB::table('questions')
        ->where('id', $question_id)
        ->first();

        $view = view('questions/show');

        $view->answers = $answers;
        $view->question = $question;


        return $view;
    }
}
