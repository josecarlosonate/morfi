<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ServiciosPostRequest;
use App\Servicios;


class ServiciosController extends Controller
{

    public function index()
    {
        $servicios = Servicios::all();
        return view('servicios.index', compact('servicios'));
    }

    public function show(Request $request, Servicios $servicios)
    {
        return view('servicios.show', compact('servicios'));
    }

    public function create()
    {
        return view('servicios.create');
    }

    public function store(ServiciosPostRequest $request)
    {
        $data = $request->validated();
        $servicios = Servicios::create($data);
        return redirect()->route('servicios.index')->with('status', 'Servicios created!');
    }

    public function edit(Request $request, Servicios $servicios)
    {
        return view('servicios.edit', compact('servicios'));
    }

    public function update(ServiciosPostRequest $request, Servicios $servicios)
    {
        $data = $request->validated();
        $servicios->fill($data);
        $servicios->save();
        return redirect()->route('servicios.index')->with('status', 'Servicios updated!');
    }

    public function destroy(Request $request, Servicios $servicios)
    {
        $servicios->delete();
        return redirect()->route('servicios.index')->with('status', 'Servicios destroyed!');
    }
}
