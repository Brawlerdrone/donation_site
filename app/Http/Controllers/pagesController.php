<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    //

    public function home(){

        return view ('pages.home');
    }
    public function mission_page(){
        return view ('pages.mission');
    }
    public function projects(){
        return view ('pages.projects');
    }
    public function donate(){
        return view ('pages.donate');
    }
    public function volunteer(){
        return view ('pages.volunteer');
    }
    public function gallery(){
        return view ('pages.gallery');
    }
    public function contact(){
        return view('pages.contact');
    }
}
