<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\View\View;
use DB;
use Session;

class MainController extends Controller
{

    // Function to get the view
    public function home(): View
    {
        return view('main.home');
    }
    
    // Function to get 1 question and 1 answer
    public function getQuestion() 
    {
        $question = DB::table('questions')
                ->select('*')
                ->orderBy(DB::raw('RAND()'))
                ->first();

        return response()->json($question);
        
    }


}



