<?php

namespace App\Http\Controllers;

use App\Http\Requests\MasulShaxslarRequest;
use App\Models\Mansablar;
use App\Models\MasulShaxslar;
use Illuminate\Http\Request;

class MasulShaxslarController extends Controller
{
    public function index()
    {
        $masul = MasulShaxslar::latest()->paginate(10);

        return view('masul.index', compact('masul'));
    }

    public function create()
    {
        $mansab = Mansablar::all();
        return view('masul.create', compact('mansab'));
    }

    public function store(MasulShaxslarRequest $request)
    {
        MasulShaxslar::create([
            'shaxs_ismi'=>$request->get('shaxs_ismi'),
            'shaxs_familya'=>$request->get('shaxs_familya'),
            'shaxs_sharif'=>$request->get('shaxs_sharif'),
            'mansab_id'=>$request->get('mansab_id'),
        ]);

        return redirect()->route('masul')->with('success', 'Success');
    }

    public function edit($id)
    {
        $masul = MasulShaxslar::findOrFail($id);
        $mansab = Mansablar::all();

        return view('masul.edit', compact('masul', 'mansab'));
    }

    public function update(MasulShaxslarRequest $request, $id)
    {
        $masul = MasulShaxslar::findOrFail($id);

        $masul->update([
            'shaxs_ismi'=>$request->input('shaxs_ismi'),
            'shaxs_familya'=>$request->input('shaxs_familya'),
            'shaxs_sharif'=>$request->input('shaxs_sharif'),
            'mansab_id'=>$request->input('mansab_id'),
        ]);

        return redirect()->route('masul')->with('success', 'Success');
    }


    public function delete($id)
    {
        $masul = MasulShaxslar::findOrFail($id);
        $masul->delete();

        return redirect()->route('masul');
    }
}
