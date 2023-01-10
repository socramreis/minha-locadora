<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RentController extends Controller
{
    public function index ()
    {
        echo 'index';
    }

    public function list ()
    {
        return view('rent.list');
    }

    public function create ()
    {
        return view('rent.create');
    }

    public function store ()
    {

    }
}

