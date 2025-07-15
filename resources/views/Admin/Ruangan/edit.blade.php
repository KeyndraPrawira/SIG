<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="{{ asset('Admin/') }}"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Dashboard - Analytics | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('Admin/img/favicon/favicon.icon')}}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset('Admin/vendor/fonts/boxicons.css')}}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('Admin/vendor/css/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('Admin/vendor/css/theme-default.css')}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('Admin/css/demo.css')}}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('Admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />

    <link rel="stylesheet" href="{{ asset('Admin/vendor/libs/apex-charts/apex-charts.css')}}" />

    <!-- Page CSS -->
   <!-- DataTables CSS -->
      <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

      

    <!-- Helpers -->
    <script src="{{ asset('Admin/vendor/js/helpers.js')}}"></script>



    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js')}} in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('Admin/js/config.js')}}"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
        @include('layouts.admin.sidebar')
        
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          @include('layouts.admin.navbar')

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col">
                    <h2>Tambah Data Ruangan</h2>
                    @if ($errors->any())
                                  <div class="alert alert-danger">
                                      <ul>
                                          @foreach ($errors->all() as $error)
                                              <li>{{ $error }}</li>
                                          @endforeach
                                      </ul>
                                  </div>
                            @endif
                  <form action="{{ route('ruangan.update', $ruangan->id) }}" class="form " method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <label for="" class="mt-2">Nama Gedung</label>
                    <input type="text" class="form-control" name="nama_ruangan" value="{{ $ruangan->nama_ruangan }}">

                    <label for="" class="mt-2" >Kategori</label>
                    <select name="kategori_id" id="" class="form-select ">
                        @foreach ($kategori as $kat)
                            <option value="{{ $kat->id }}" {{ $kat->id == $ruangan->kategori_id ? 'selected' : ''}} >{{ $kat->kategori }}</option>
                        @endforeach
                    </select>

                    <label for="" class="mt-2">
                         Lokasi
                    </label >
                    <select name="lantai_id" id="" class="form-select ">
                        @foreach ($lantai as $lokasi)
                            <option value="{{ $lokasi->id }}"{{ $lokasi->id == $ruangan->lantai_id  ? 'selected' : ''}}  >Lantai {{ $lokasi->lantai }}  Gedung {{ $lokasi->gedung->nama_gedung }}</option>
                        @endforeach
                    </select>
                    <label  class="mt-2">
                        Fasilitas
                    </label><br>
                    
                      @foreach ($fasilitas as $fas)
                          <input type="checkbox" 
                                class="form-checkbox mt-1" 
                                name="fasilitas_id[]" 
                                value="{{ $fas->id }}" 
                                {{ in_array($fas->id, $fasilitas_terpilih) ? 'checked' : '' }}>
                          <label>{{ $fas->nama_fasilitas }}</label>
                          <br>
                      @endforeach

                    <br>
                    <label for="" class="mt-1">
                        Deskripsi
                    </label>
                    <textarea name="deskripsi" id="" class="form-control">{{ $ruangan->deskripsi }}</textarea>

                    <label for="" class="mt-1">
                        Gambar
                    </label><br>
                    @if($ruangan->gambar)
                                <img src="{{asset('storage/'.$ruangan->gambar)  }}" class="mb-2" width="100px" height="50px" alt="">
                            @else
                                <p>Tidak Ada</p>
                            
                            @endif

                    <input type="file" class="form-control" name="gambar">
                    <label for="" class="mt-1">
                        Denah
                    </label><br>
                    @if($ruangan->denah)
                                <img src="{{asset('storage/'.$ruangan->denah)  }}" class="mb-2" width="100px" height="50px" alt="">
                            @else
                                <p>Tidak Ada</p>
                            
                            @endif
                    <input type="file" class="form-control" name="denah">
                    <button type="submit" class="btn btn-success mt-2">Edit</button>
                    <a href="{{ route('ruangan.index') }}" class="btn btn-info mt-2">Batal</a>
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
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js')}} -->
    <script src="{{ asset('Admin/vendor/libs/jquery/jquery.js')}}"></script>
    <script src="{{ asset('Admin/vendor/libs/popper/popper.js')}}"></script>
    <script src="{{ asset('Admin/vendor/js/bootstrap.js')}}"></script>
    <script src="{{ asset('Admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

    <script src="{{ asset('Admin/vendor/js/menu.js')}}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('Admin/vendor/libs/apex-charts/apexcharts.js')}}"></script>

    <!-- Main JS -->
    <script src="{{ asset('Admin/js/main.js')}}"></script>

    <!-- Page JS -->
    <script src="{{ asset('Admin/js/dashboards-analytics.js')}}"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js')}}"></script>
    
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

  </body>
</html>
