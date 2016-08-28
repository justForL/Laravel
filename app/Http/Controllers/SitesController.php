<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SitesController extends Controller
{
    //
    public function index(){
        return view('welcome');
    }

    /**
     *
     */
    public function saySometing(){
        return "hello james";
    }
}
