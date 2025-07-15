<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fasilitas = Fasilitas::all();
        return view('admin.fasilitas.index', compact('fasilitas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.fasilitas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'nama_fasilitas' => 'required',

        ], 
    [
        'nama_fasilitas' => 'Nama fasilitas harus diisi'
    ]);
        $fasilitas = new Fasilitas();
        $fasilitas->nama_fasilitas  = $request->nama_fasilitas;
        $fasilitas->save();
        toast('fasilitas berhasil ditambahkan', 'success')->position('bottom-end');
        return redirect()->route('fasilitas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $fasilitas = Fasilitas::findOrFail($id);
        return view('fasilitas.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $fasilitas = Fasilitas::findOrFail($id);
        return view('admin.fasilitas.edit', compact('fasilitas'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request -> validate([
            'nama_fasilitas' => 'required',

        ], 
    [
        'nama_fasilitas' => 'Nama fasilitas harus diisi'
    ]);
        $fasilitas = Fasilitas::findOrFail($id);
        $fasilitas->nama_fasilitas = $request->nama_fasilitas;
        $fasilitas->save();
        toast('Data fasilitas berhasil diperbarui', 'success')->position('bottom-end');
        return redirect()->route('fasilitas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $fasilitas = Fasilitas::findOrFail($id);
        $fasilitas->delete();
        toast('fasilitas berhasil dihapus', 'success')->position('bottom-end');
        return back();
    }
}
