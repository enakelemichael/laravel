<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    //
    public function index()
    {
        return 'This is the list if questions';
    }
    public function show()
    {
        return 'Thus is a detail of a question';
    }
}
