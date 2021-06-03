<?php

namespace App\Http\Controllers;

use App\Http\Requests\BirlikRequest;
use App\Models\Birliklar;
use Illuminate\Http\Request;

class BirliklarController extends Controller
{
    public function index(){
        $birlik = Birliklar::latest()->paginate(10);

        return view('birlik.index', compact('birlik'));
    }

    public function create(){
        return view('birlik.create');
    }

    public function store(BirlikRequest $request)
    {
        Birliklar::create([
            'birlik_nomi'=>$request->get('birlik_nomi'),
        ]);

        return redirect()->route('birlik')->with('success', 'Success');
    }

    public function edit($id){
        $model = Birliklar::findorFail($id);

        return view('birlik.edit', compact('model'));
    }

    public function update(BirlikRequest $request, $id)
    {
        $model = Birliklar::findOrFail($id);

        $model->update([
            'birlik_nomi'=>$request->input('birlik_nomi'),
        ]);

        return redirect()->route('birlik')->with('success', 'Success');

    }

    public function delete($id)
    {
        $model= Birliklar::findOrFail($id);

        $model->delete();

        return redirect()->route('birlik')->with('success', 'Success');
    }
}
