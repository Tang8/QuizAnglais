<?php

namespace App\Http\Controllers;

use App\question;
use App\response;
use App\Http\Resources\question as QuestionResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{
    public $successStatus = 200;

    public function getQuestion(Request $request)
    {
        $input = $request->all();
        $question = question::where([
          'categorie' => $input['categorie'],
          'difficulte' => $input['difficulte'],
        ])->orderByRaw("RAND()")->first();
        if ($question == NULL) {
          return response()->json(['error' => "Question not found"], 404);
        } else {
          $response = response::where(['question_id'=> $question->id])->get();
          return response()->json(['question' => $question, 'response' => $response], $this->successStatus);
      }
    }
}
