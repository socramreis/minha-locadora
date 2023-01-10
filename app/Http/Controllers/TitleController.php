<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TitleController extends Controller
{
    public function index ()
    {
        echo 'index';
    }

    public function list ()
    {
        return view('title.list');
    }

    public function create ()
    {
        return view('title.create');
    }

    public function store ()
    {

    }
}
