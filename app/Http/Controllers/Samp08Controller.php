<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bcontent;


class Samp08Controller extends Controller
{
    public function index(){
        //$content = Bcontent::all();
            $content = new Bcontent();
            $data = $content->orderBy('id', 'desc') -> limit(5)->get();
            return view('samp08',['data' => $data]);
        }
}
