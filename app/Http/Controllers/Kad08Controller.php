<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Bcontent;

class Kad08Controller extends Controller
{
    public function index(){
        //$content = Bcontent::all();
            $content = new Bcontent();
            $data = $content->orderBy('id', 'desc') -> limit(10)->get();
            return view('kad08',['data' => $data]);
        }
}
