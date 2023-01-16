<?php

namespace App\Http\Controllers;

use App\Models\client;
use Illuminate\Http\Request;

class ClientController extends Controller
{

    public function list ()
    {
        $clients = client::all();
        return view('client.list' , ['client' => $clients]);
    }

    public function create ()
    {
        return view('client.create');
    }

    public function store (Request $request)
    {
        client::create($request->all());
        return redirect()->route('client-list');
    }
}
