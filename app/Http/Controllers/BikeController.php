<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bike;


class BikeController extends Controller
{
    public function list ()
    {
        $bikes = bike::all();
        return view('bike.list' , ['bike' => $bikes]);
    }

    public function create ()
    {
        return view('bike.create');
    }

    public function store (Request $request)
    {
        bike::create($request->all());
        return redirect()->route('bike-list');
    }
}
