<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use App\Models\Kategori;
use App\Models\Lantai;
use App\Models\Ruangan;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class RuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ruangan =Ruangan::all();
        $kategori = Kategori::all();
        $lantai = Lantai::all();
        $fasilitas =Fasilitas::all();
        
        
        return view('admin.ruangan.index', compact('ruangan', 'kategori','lantai', 'fasilitas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = Kategori::all();
        $fasilitas = Fasilitas::all();
        $lantai = Lantai::all();
        return view('admin.ruangan.create', compact('kategori', 'fasilitas', 'lantai'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_ruangan' => 'required|unique:ruangans,nama_ruangan',
            'kategori_id' => 'required',
            'deskripsi' => 'nullable',
            'gambar' => 'required',
            'fasilitas_id' => 'nullable',
            'lantai_id' => 'required'
        ],
        [
            'nama_ruangan' => 'Nama ruangan tidak boleh sama',
            'kategori_id' => 'Pilih salah satu kategori',
            'gambar' => 'Masukkan gambar ruangan',
            'lantai_id' => 'Pilih lokasi ruangan',
        ]);

        $data = $request->only(['nama_ruangan', 'kategori_id', 'deskripsi', 'lantai_id', 'gambar', 'denah']);
        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('gambar_ruangan', 'public'); 
            $data['gambar'] = $path;
        }

        if ($request->hasFile('denah')) {
            $path = $request->file('denah')->store('gambar_denah', 'public'); 
            $data['denah'] = $path;
        }

        $ruangan = Ruangan::create($data);
        $request->all($data);
        if ($request->has('fasilitas_id')) {
            $ruangan->fasilitas()->attach($request->fasilitas_id);

        }
        $request->all($data);
        
        Alert('Data Ruangan berhasil ditambahkan', 'success');
        return redirect()->route('ruangan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ruangan = Ruangan::findOrFail($id);
        $kategori = Kategori::all();
        $fasilitas = Fasilitas::all();
        $fasilitas_terpilih = $ruangan->fasilitas->pluck('id')->toArray();
        $lantai = Lantai::all();
        return view('admin.ruangan.show', compact('ruangan', 'kategori', 'fasilitas', 'lantai', 'fasilitas_terpilih'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ruangan = Ruangan::with('fasilitas')->findOrFail($id);
        $kategori = Kategori::all();
        $fasilitas = Fasilitas::all();
        $fasilitas_terpilih = $ruangan->fasilitas->pluck('id')->toArray();
        $lantai = Lantai::all();

    return view('admin.ruangan.edit', compact('ruangan', 'fasilitas', 'fasilitas_terpilih', 'kategori', 'lantai'));
}

        

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ruangan = Ruangan::findOrFail($id);
        $request->validate([
            'nama_ruangan' => 'required',
            'kategori_id' => 'required',
            'deskripsi' => 'nullable',
            'gambar' => 'required',
            'fasilitas_id' => 'nullable',
            'lantai_id' => 'required',
            'denah' => 'required'
        ],
        [
            'nama_ruangan' => 'Nama ruangan harus diisi',
            'kategori_id' => 'Pilih salah satu kategori',
            'gambar' => 'Masukkan gambar ruangan',
            'lantai_id' => 'Pilih lokasi ruangan',
            'denah' => 'Masukkan gambar denah'
        ]);

        $data = $request->only(['nama_ruangan', 'kategori_id', 'deskripsi', 'lantai_id', 'gambar']);
        
        if ($ruangan->gambar && Storage::disk('public')->exists($ruangan->gambar)) {
            $ruangan->deleteImage();
        }
        $path = $request->file('gambar')->store('gambar_ruangan', 'public'); 
        $data['gambar'] = $path;


        if ($request->hasFile('denah')) {
            if ($ruangan->denah) {
                $ruangan->deleteImage();
               
            }
             $path = $request->file('denah')->store('gambar_denah', 'public'); 
                $data['denah'] = $path;
        }

        $ruangan->update($data);

        $ruangan->fasilitas()->sync($request->fasilitas_id ?? []);

        toast('Ruangan berhasil diperbarui', 'success')->position('bottom-end');
        return redirect()->route('ruangan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ruangan = Ruangan::findOrFail($id);
        if ($ruangan->gambar) {
                Storage::disk('public')->delete($ruangan->gambar);
            }

        $ruangan->fasilitas()->detach();
        $ruangan->delete();

        toast('Ruangan berhasil dihapus', 'success')->position('bottom-end`');
        return back();
        }
}
