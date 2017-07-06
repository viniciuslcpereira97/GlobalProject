<?php

namespace DevFinder\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    
    /**
     * Show the application index.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.index');
    }
}
