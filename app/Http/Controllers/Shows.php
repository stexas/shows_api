<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


use App\Repositories\Shows;


class Shows extends Controller
{
   protected $shows;

   public function __construct(Shows $shows){
     $this->shows = $shows;
   }
   public function index(Request $request){
       $method = $request->method();
       if ($request->isMethod('get')) {
            // Nuevo cliente con un url base
            //$client = new Client(['base_uri' => 'http://api.tvmaze.com/search/','timeout'=>2.0]);

            //$response = $client->request('GET','shows?q=game+of+thrones');

            $posts = $this->posts->all();

            return json_decode($response->getBody()->getContents());
        }
        return response()->json(["error","unauthorized"],401);
    }
    public function findShow($text_string){
        echo $text_string;
    }
}
