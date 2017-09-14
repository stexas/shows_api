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

  public function index(){
    return view("shows.index");      
  }

  public function findShow(Request $request,$text_string){     
  $method = $request->method();
    if ($request->isMethod('get')) {
      $shows = $this->shows->findShow($text_string);
      return json_decode($shows->getBody()->getContents());
    }
    return response()->json(["error","unauthorized"],401);
  }

}
