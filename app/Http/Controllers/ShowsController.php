<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


use App\Repositories\Shows;


class ShowsController extends Controller
{
  protected $shows;

  public function __construct(Shows $shows){
    $this->shows = $shows;
  }

  public function methodNotAllowed(){
    return response()->json(["error","unauthorized method"],401);    
  }

  public function index(){
    return view("shows.index");      
  }

  public function findShow(Request $request,$text_string){

    $text_string = strtolower(urldecode($text_string));

    $method = $request->method();

    if ($request->isMethod('get')) {

      header('Content-Type: application/json');
      $shows = $this->shows->findShow($text_string);
      $shows_json =  json_decode($shows->getBody()->getContents());

      $one_result = array();
      $results = array();
      $i=0;
      foreach ($shows_json as $show) {
        $show_name = strtolower($show->show->name);
        if($show_name == $text_string){
          //Se hallo un resultado exacto
          $one_result['title']=$show_name;
          $one_result['score']=$show->score;
          //print_r($one_result);
          return json_encode($one_result);         
        }else{
          $results[$i]['title']=$show_name;
          $results[$i]['score']=$show->score;
          $i++;
        }
      }
      if(count($shows_json)>0){
        //no se hallo resultado exacto, pero si similares
        return json_encode($results);
      }else{
        //No se hallo ningún resultado
        return response()->json(["error","No Content"],406);
      }
    }else{
      return response()->json(["error","unauthorized method"],401);
    }

    return response()->json(["error","unauthorized method"],401);
  }
}
