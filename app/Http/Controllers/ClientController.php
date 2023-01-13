<?php

namespace App\Http\Controllers;

use App\Models\client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index ()
    {
        return view('cliente.list');
    }

    public function list ()
    {
        return view('client.list');
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
