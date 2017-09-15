<?php

namespace App\Repositories;

use GuzzleHttp\Client;


Class Shows
{	
	protected $client;

	public function __construct(){
    	$this->client = new Client(['base_uri' => 'http://api.tvmaze.com/search/','timeout'=>2.0]);
  	}


	public function findShow($text_string){
		$response = $this->client->request('GET','shows?q='.$text_string);
		return $response;
	}
}