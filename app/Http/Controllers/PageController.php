<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //here controller can be added
    // public function hello() {
    //     return "Hello from Controller!";
    // }
    public function hello(){
        return view('hello');
    }
}
