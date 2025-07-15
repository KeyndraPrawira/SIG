@extends('layouts.admin')

@section('content')


            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col">
                    <h2>Tambah Data Fasilitas</h2>
                    @if ($errors->any())
                                  <div class="alert alert-danger">
                                      <ul>
                                          @foreach ($errors->all() as $error)
                                              <li>{{ $error }}</li>
                                          @endforeach
                                      </ul>
                                  </div>
                            @endif
                  <form action="{{ route('fasilitas.update', $fasilitas->id) }}" class="form" method="post">
                    @csrf
                    @method('PUT')
                    <label for="">Nama Fasilitas</label>
                    <input type="text" value="{{ $fasilitas->nama_fasilitas }}" class="form-control" name="nama_fasilitas">
                    <button type="submit" class="btn btn-info mt-2">Tambah</button>
                    <a href="{{ route('fasilitas.index') }}" class="btn btn-danger mt-2">Batal</a>
                  </form>
                </div>
              </div>
            </div>

@endsection
          

            