@extends('layouts.admin')
          
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col">
                    <h2>Edit Data Gedung</h2>
                    @if ($errors->any())
                                  <div class="alert alert-danger">
                                      <ul>
                                          @foreach ($errors->all() as $error)
                                              <li>{{ $error }}</li>
                                          @endforeach
                                      </ul>
                                  </div>
                            @endif
                  <form action="{{ route('gedung.update', $gedung->id) }}" class="form" method="post">
                    @csrf
                    @method('PUT')
                    <label for="">Nama Gedung</label>
                    <input type="text" value="{{ $gedung->nama_gedung }}" class="form-control" name="nama_gedung">

                    
                    
                    <button type="submit" class="btn btn-info mt-2">Edit</button>
                  </form>
                </div>
              </div>
            </div>
@endsection
          <!-- Content -->

            
            <!-- / Content -->

            <!-- Footer -->
            
            <!-- / Footer -->

            
