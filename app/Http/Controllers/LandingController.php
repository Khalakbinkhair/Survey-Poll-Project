<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Response;
use App\Models\Survey;
use App\Models\Question;


class LandingController extends Controller
{
    public function home(){

        $survey=Survey::with('questions')->get(); 
        //$infos=Question::where ('id','=','survey_id'); 

        // dd($survey);

    
        return view('front.pages.home_content')
        ->with('survey',$survey);

    }

   
    public function homeAnswerSubmit(Request $req){
        
        
        $input = $req->all();
        $info=new Response();
        // $info->question = $input['question'];
        $info->options = implode(',',$input['answer']);

        dd( $info); 
        $info->save();    
       
        return redirect()->route('home');
  
  
        }
}
