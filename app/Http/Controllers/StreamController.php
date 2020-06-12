<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StreamController extends Controller
{
    public function index()
    {
        return view('streams.index');
    }
}
