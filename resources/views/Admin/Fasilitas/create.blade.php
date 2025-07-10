@extends('layouts.admin')

@section('content')


            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col">
                    <h2>Tambah Data Fasilitas</h2>
                  <form action="{{ route('fasilitas.store') }}" class="form" method="post">
                    @csrf
                    <label for="">Nama Fasilitas</label>
                    <input type="text" class="form-control" name="nama_fasilitas">

                    
                    
                    <button type="submit" class="btn btn-info mt-2">Tambah</button>
                    <a href="{{ route('fasilitas.index') }}" class="btn btn-danger mt-2">Batal</a>
                  </form>
                </div>
              </div>
            </div>

@endsection
          

            