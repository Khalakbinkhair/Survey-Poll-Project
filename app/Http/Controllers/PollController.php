<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Survey;
use App\Models\Question;

class PollController extends Controller
{

    public function surveyName(){
        return view('admin.survey.surveyName');
    }
    public function surveyNameSubmit(Request $req){

        $req->validate(
            [
            'name'=> 'required',
            'description'=>'required',

            ]
         
            ); 

        $survey =new Survey();
        $survey->name= $req->name;
        $survey->description=$req->description;
        $survey->status = "survey";

        $survey->save();
        return view('admin.survey.addSurvey')->with('survey_id',$survey->id);

        return redirect()->route('addSurvey');
        }
  
    public function addSurvey(){
        return view('admin.survey.addSurvey');
        }

          
    public function addSurveySubmit(Request $req){

            $input = $req->all();
            for ($i=0; $i <(count($input)-1) ; $i++) {
                if(empty($input['question-'.$i])){
                    break;
                }
                $info=new Question();
                $info->question = $input['question-'.$i];
                $info->options = implode(',',$input['options-'.$i]);
                // $info->options = $input['options-'.$i];
                $info->answer = $input['answer-'.$i];
                $info->survey_id = $input['survey_id'];

                // dd($info);
                $info->save();    
            }
            
            
            // dd($req->all()); 

      
            return redirect()->route('admin_dashboard');
    
  
        }

        public function pollName(){
            return view('admin.survey.pollName');
        }
        public function pollNameSubmit(Request $req){
    
            $req->validate(
                [
                'name'=> 'required',
                'description'=>'required',
    
                ]
             
                ); 
    
            $survey =new Survey();
            $survey->name= $req->name;
            $survey->description=$req->description;
            $survey->status = "poll";

            $survey->save();
            return view('admin.survey.addPoll')->with('survey_id',$survey->id);
    
            return redirect()->route('addPoll');
            }


             public function addPoll(){
            return view('admin.survey.addPoll');
            }
          
            public function addPollStore(Request $req){
        
              $input = $req->all();
              $info=new Question();
              $info->question = $input['question'];
              $info->options = implode(',',$input['options']);
              $info->answer = $input['answer'];
              $info->survey_id = $input['survey_id'];


            //   dd( $info); 

              $info->save();    
        
              return redirect()->route('admin_dashboard');
        
        
              }
        

}
