<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Test_1109Controller extends Controller
{
    public function index()
    {
        return view('test');
    }
    public function bind($room)
    {
        return view('room', compact('room'));
    }
}
