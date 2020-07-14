<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comic;

class ComicsController extends Controller
{
    public function index(){
        $comics = Comic::orderby('create_at','desc')->get();
        return view('index',['comics'=>$comics]);
    }
}
