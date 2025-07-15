<?php

namespace App\Http\Controllers;

use App\Models\Gedung;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class GedungController extends Controller
{
    
    public function index()
    {
        confirmDelete('Data akan dihapus!', 'Apa anda yakin?');
        $gedung = Gedung::all();
        return view('admin.gedung.index', compact('gedung'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.gedung.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'nama_gedung' => 'required|string|max:255|unique:gedung',
        ], [
        'nama_gedung' => 'Nama gedung harus diisi dan tidak boleh sama',
        ]
    );

        $gedung = new Gedung();
        $gedung->nama_gedung = $request->nama_gedung;
        $gedung->save();
        
        toast('Gedung berhasil ditambahkan', 'success')->position('bottom-end');
        return redirect()->route('gedung.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $gedung = Gedung::findOrFail($id);
        return view('admin.gedung.show', compact('gedung'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $gedung = Gedung::findOrFail($id);
        return view('admin.gedung.edit', compact('gedung'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_gedung' => 'required|string|max:255',
        ],[
            'nama_gedung' => 'Nama gedung harus diisi',
        ]);

        $gedung = Gedung::findOrFail($id);
        $gedung->nama_gedung = $request->nama_gedung;
        $gedung->save();
        toast('Gedung berhasil diperbarui', 'success')->position('bottom-end');
        return redirect()->route('gedung.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $gedung = Gedung::findOrFail($id);
        $gedung = Gedung::delete();
         toast('Data berhasil dihapus', 'success')->position('bottom-end');
        return redirect()->route('gedung.index', compact('gedung'));
    }
}
