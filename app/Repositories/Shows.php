<?php

namespace App\Repositories;

use GuzzleHttp\Client;


Class Shows
{

	public function all(){
		 // Nuevo cliente con un url base
            $client = new Client(['base_uri' => 'http://api.tvmaze.com/search/','timeout'=>2.0]);

            $response = $client->request('GET','shows?q=game+of+thrones');

            return $response;
	}
	public function findShow($text_string){
		 // Nuevo cliente con un url base
            $client = new Client(['base_uri' => 'http://api.tvmaze.com/search/','timeout'=>2.0]);

            $response = $client->request('GET','shows?q='.$text_string);            

            return $response;
	}
}