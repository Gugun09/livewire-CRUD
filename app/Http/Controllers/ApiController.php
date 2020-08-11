<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    
    public function api()
    {
    	$response = Http::withHeaders([
		    'x-rapidapi-host' => 'covid-19-coronavirus-statistics.p.rapidapi.com',
			'x-rapidapi-key' => '5454503a60msh847a7977acf6d60p1c0ae1jsn98b1d9437657'
		])->get('https://covid-19-coronavirus-statistics.p.rapidapi.com/v1/stats');

		$data = $response['data']['covid19Stats'];
		 // dd($data);
        // $response = collect(Http::get('http://newsapi.org/v2/top-headlines?country=id&apiKey=4ce5f8f101f847fbaa392c422cfd09e3')->json());

        // $data = $response['articles'];
        // // return $data;
        return view('api', compact('data'));
    }
}
