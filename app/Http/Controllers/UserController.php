<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class UserController extends Controller
{
    function userGet(){
        $response = Http::get('https://jsonplaceholder.typicode.com/users/1');    
        // in the above code all we get api data if we read only users data then we call body function  
        $response = $response->body();    
        return view('user',['userKey'=>json_decode($response)]);
    }
}
