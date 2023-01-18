<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\title;


class TitleController extends Controller
{
    public function list ()
    {
        $titles = title::all();
        return view('title.list' , ['title' => $titles]);
    }

    public function create ()
    {
        return view('title.create');
    }

    public function store (Request $request)
    {
        dd($request);
        title::create($request->all());
        return redirect()->route('title-list');
    }
}
