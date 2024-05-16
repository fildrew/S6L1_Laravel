<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homepage ()
    {
        return view('welcome');
    }
    public function ciao()
    {
        return view('ciao');
    }

    public function info ()
    {
        return view('info');
    }
}

