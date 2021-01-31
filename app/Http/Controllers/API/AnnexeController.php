<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Requests\AnnexePostRequest;
use App\Http\Controllers\Controller;
use App\Annexe;

class AnnexeController extends Controller
{


    public function index()
    {
        return Annexe::all();
    }

    public function show(Request $request, Annexe $annexe)
    {
        return $annexe;
    }

    public function store(AnnexePostRequest $request)
    {
        $data = $request->validated();
        $annexe = Annexe::create($data);
        return $annexe;
    }

    public function update(AnnexePostRequest $request, Annexe $annexe)
    {
        $data = $request->validated();
        $annexe->fill($data);
        $annexe->save();

        return $annexe;
    }

    public function destroy(Request $request, Annexe $annexe)
    {
        $annexe->delete();
        return $annexe;
    }

}
