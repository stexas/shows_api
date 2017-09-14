<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Users extends Controller
{
    public function index(Request $request)
    {
        /*
        $user = new User();
        $user->name = 'Esmeralda';
        $user->email ='esmeralda@email.com';
        */

        //Eloquent
        //$users = User::all();
        //return response()->json($users,200);
        //return "hola mundo lumen!";

        if($request->isJson()){
            $users = User::all();
            return response()->json($users,200);
        }
        return response()->json(["error","unauthorized"],401);

    }

    public function createUser(Request $request){

        if($request->isJson()){
           // $users = User::all();
            $data = $request->json()->all();
            $user = User::create([
                'name'=>$data['name'],
                'username'=>$data['username'],
                'email'=>$data['email'],
                'api_token'=>str_random(60),
                'password'=>Hash::make($data['password'])                
                ]);
            return response()->json($user,201);
        }
        return response()->json(["error","unauthorized"],401);
    }

    public function getToken(Request $request){
        if($request->isJson()){
            try{
                $data = $request->json()->all();
                
                $user = User::where('username', $data['username']);

                if($user && Hash::check($data['password'], $user->password)){
                    return response()->json($user,200);
                }else{
                    return response()->json(["error","No Content"],406);
                }

            }catch(ModelNotFoundException $e){
                return response()->json(["error","No Content"],406);
            }

        }else{
            return response()->json(["error","unauthorized"],401);
        }

    }

}
