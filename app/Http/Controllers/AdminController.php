<?php

namespace App\Http\Controllers;
use App\Models\Kategori;
use App\Models\Ruangan;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();
        
        return view('Admin.index', compact('kategori'));
    }

}
