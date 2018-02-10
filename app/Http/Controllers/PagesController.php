<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'welcome here';
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        $title = 'welcom to about';
        return view('pages.about')->with('title', $title);
    }

    public function services(){

        $data = array(
            "title" => 'Services',
            'services' => ['test', 'test2', 'test3']
        );

        return view('pages.services')->with($data);
    }
}
