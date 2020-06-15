<?php
namespace App\Http\Controllers;


class StreamController extends Controller
{
    public function index()
    {
        return view('streams.index');
    }
}
