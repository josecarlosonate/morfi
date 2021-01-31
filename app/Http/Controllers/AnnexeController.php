<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AnnexePostRequest;
use App\Annexe;


class AnnexeController extends Controller
{

    public function index()
    {
        $annexes = Annexe::all();
        return view('annexes.index', compact('annexes'));
    }

    public function show(Request $request, Annexe $annexe)
    {
        return view('annexes.show', compact('annexe'));
    }

    public function create()
    {
        return view('annexes.create');
    }

    public function store(AnnexePostRequest $request)
    {
        $data = $request->validated();
        $annexe = Annexe::create($data);
        return redirect()->route('annexes.index')->with('status', 'Annexe created!');
    }

    public function edit(Request $request, Annexe $annexe)
    {
        return view('annexes.edit', compact('annexe'));
    }

    public function update(AnnexePostRequest $request, Annexe $annexe)
    {
        $data = $request->validated();
        $annexe->fill($data);
        $annexe->save();
        return redirect()->route('annexes.index')->with('status', 'Annexe updated!');
    }

    public function destroy(Request $request, Annexe $annexe)
    {
        $annexe->delete();
        return redirect()->route('annexes.index')->with('status', 'Annexe destroyed!');
    }
}
