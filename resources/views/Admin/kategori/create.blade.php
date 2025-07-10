@extends('layouts.admin')

@section('content')


            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col">
                    <h2>Tambah Data Gedung</h2>
                  <form action="{{ route('kategori.store') }}" class="form" method="post">
                    @csrf
                    <label for="">Nama Gedung</label>
                    <input type="text" class="form-control" name="nama_kategori">

                    
                    
                    <button type="submit" class="btn btn-info mt-2">Tambah</button>
                  </form>
                </div>
              </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        
    @endsection

    @push('scripts')
    <!-- jQuery  -->
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

      <!-- DataTables JS -->
      <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script>
  $(document).ready(function () {
    $('#dataGedung').DataTable({
      responsive: true,
      autoWidth: false
    });
  });
</script>
@endpush

  </body>
</html>
