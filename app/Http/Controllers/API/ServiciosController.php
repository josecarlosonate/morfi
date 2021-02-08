<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Requests\ServiciosPostRequest;
use App\Http\Controllers\Controller;
use App\Servicios;

class ServiciosController extends Controller
{


    public function index()
    {
        return Servicios::all();
    }

    public function show(Request $request, Servicios $servicios)
    {
        return $servicios;
    }

    public function store(ServiciosPostRequest $request)
    {
        $data = $request->validated();
        $servicios = Servicios::create($data);
        return $servicios;
    }

    public function update(ServiciosPostRequest $request, Servicios $servicios)
    {
        $data = $request->validated();
        $servicios->fill($data);
        $servicios->save();

        return $servicios;
    }

    public function destroy(Request $request, Servicios $servicios)
    {
        $servicios->delete();
        return $servicios;
    }

}
