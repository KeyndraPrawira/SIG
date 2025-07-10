
            <!-- Content -->
@extends('layouts.admin')

@section('content')


            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col">
                    <div >
      <a
        href="{{ route('fasilitas.create') }}"
        class="btn btn-info"
        >Tambah fasilitas</a
      >
    </div>
                  <table>
                    <table class="table mt-2" id="dataFasilitas">
                    <thead>
                      <th>No</th>
                      <th>Nama Fasilitas</th>
                      <th>Aksi</th>
                    </thead>
                     <tbody>
                      @foreach ($fasilitas as $fas)
                     <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $fas->nama_fasilitas }}</td>
                        
                        <td><a href="{{ route('fasilitas.edit', $fas->id) }}" class="btn btn-success">Edit</a>
                        <form action="{{ route('fasilitas.destroy', $fas->id) }}" onsubmit="return confirmDelete(this);" method="post" style="display:inline;" >
                            @csrf
                            @method('DELETE')
                            <button  class="btn btn-danger">Hapus</button>

                        </form>
                        </td>
                      </tr>
                      @endforeach
                      </tbody>
                      

                    
                  </table>
                  </table>
                </div>
              </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      
    <!-- / Layout wrapper -->
@endsection

@push('scripts')
      <!-- DataTables JS -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script>
  $(document).ready(function () {
    $('#dataFasilitas').DataTable({
      responsive: true,
      autoWidth: false
    });
  });

</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
function confirmDelete(form) {
    event.preventDefault();
    Swal.fire({
        title: 'Yakin mau hapus?',
        text: 'Data tidak akan bisa kembali',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#e3342f',
        cancelButtonColor: '#6c757d',
        confirmButtonText: 'Ya, hapus',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            form.submit();
        }
    });
    return false;
}
</script>

@endpush

    

    
