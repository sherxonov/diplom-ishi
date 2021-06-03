<?php

namespace App\Http\Controllers;

use App\Http\Requests\BuyumRequest;
use App\Models\Birliklar;
use App\Models\Buyumlar;

class BuyumlarController extends Controller
{
    public function index()
    {
        $buyum = Buyumlar::latest()->paginate(10);

        return view('buyum.index', compact('buyum'));
    }

    public function create()
    {
        $birlik =Birliklar::all();
        return view('buyum.create', compact('birlik'));
    }

    public function store(BuyumRequest $request)
    {
        Buyumlar::create([
            'buyum_nomi'=>$request->get('buyum_nomi'),
            'yangi_soni'=>$request->get('yangi_soni'),
            'eski_soni'=>$request->get('eski_soni'),
            'birlik_id'=>$request->get('birlik_id'),
        ]);

        return redirect()->route('buyumlar')->with('success', 'Success');
    }

    public function edit($id)
    {
        $buyum = Buyumlar::findOrFail($id);
        $birlik = Birliklar::all();

        return view('buyum.edit', compact(['buyum', 'birlik']));
    }


    public function update(BuyumRequest $request, $id)
    {
        $birlik = Buyumlar::findOrFail($id);
        $birlik->update([
            'buyum_nomi'=>$request->input('buyum_nomi'),
            'yangi_soni'=>$request->input('yangi_soni'),
            'eski_soni'=>$request->input('eski_soni'),
            'birlik_id'=>$request->input('birlik_id'),
        ]);


        return redirect()->route('buyumlar')->with('success', 'Success');
    }

    public function delete($id)
    {
        $buyum = Buyumlar::findOrFail($id);

        $buyum->delete();

        return redirect()->route('buyumlar')->with('success', 'Delete Success');
    }
}
