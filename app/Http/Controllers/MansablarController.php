<?php

namespace App\Http\Controllers;

use App\Http\Requests\MansabRequest;
use App\Models\Mansablar;
use Illuminate\Http\Request;

class MansablarController extends Controller
{
    public function index()
    {
        $mansab = Mansablar::latest()->paginate(10);

        return view('mansab.index', compact('mansab'));
    }

    public function create()
    {
        return view('mansab.create');
    }

    public function store(MansabRequest $request)
    {
        Mansablar::create([
            'mansab_nomi'=>$request->get('mansab_nomi'),
        ]);

        return redirect()->route('mansablar')->with('success', 'Success');
    }

    public function edit($id)
    {
        $mansab = Mansablar::findOrFail($id);

        return view('mansab.edit', compact('mansab'));
    }

    public function update(MansabRequest $request, $id)
    {
        $mansab = Mansablar::findOrFail($id);

        $mansab->update([
            'mansab_nomi'=>$request->input('mansab_nomi'),
        ]);

        return redirect()->route('mansablar')->with('success', 'Success');
    }

    public function destroy($id)
    {
        $mansab = Mansablar::findOrFail($id);
        $mansab->delete();

        return redirect()->route('mansablar')->with('success', 'Success');
    }

}
