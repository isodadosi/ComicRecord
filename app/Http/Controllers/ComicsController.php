<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class ComicsController extends Controller
{
    public function index(){
        $comics = Comic::orderBy('created_at','desc')->get();
        return view('index',['comics'=>$comics]);
    }

    public function create(){
        return view ('create');
    }

    public function store(Request $request){
        $content = $request->validate(['content'=> 'required|max:500']);
        Comic::create($content);
        return redirect()->route('index');
    }
}
