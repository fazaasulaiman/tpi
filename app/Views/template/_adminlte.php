<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TPI| Ngurah Rai</title>
  
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/lte/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="/lte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="/lte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="/lte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="/lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/lte/assets/css/adminlte.min.css">
  <!-- jQuery -->
<script src="/lte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/lte/index3.html" class="brand-link">
      <img src="/lte/assets/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">TPI NGR</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/lte/assets/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div> -->

      <!-- SidebarSearch Form -->
      <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Laporan Harian
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/lapharian/tambah" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/lapharian" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Harian</p>
                </a>
              </li>
            </ul>
            <li class="nav-item">
                <a href="/home/logout" class="nav-link">
                <i class="nav-icon fas fa-sign-out"></i>
                  <p>Log Out</p>
                </a>
              </li>
          </li>
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
     <?= $this->renderSection('content') ?>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 0.0.0.0.1
    </div>
    <strong>Copyright &copy; 2022 <a href="https://adminlte.io">TPI NGR</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<script src="/lte/plugins/moment/moment.min.js"></script>
<script src="/lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.js"></script>
<!-- DataTables  & Plugins -->
<script src="/lte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/lte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="/lte/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="/lte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="/lte/plugins/jszip/jszip.min.js"></script>
<script src="/lte/plugins/pdfmake/pdfmake.min.js"></script>
<script src="/lte/plugins/pdfmake/vfs_fonts.js"></script>
<script src="/lte/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="/lte/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="/lte/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="/lte/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="/lte/assets/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/lte/assets/js/demo.js"></script>
<!-- swall alert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
<!-- Page specific script -->

<script>
  function removeError(param) {
    console.log(param)
      $('input[name="' + param + '"],select[name="' + param + '"],radio[name="' + param + '"]').removeClass('is-invalid')
    }
  $(function () {
    $(".reset").click(function() {
      $(".error,#alert-error-tambah").empty();
      $('#customFile').next('label').html('Select a file');
      $("input[type=text], textarea,input[type=password], select").val("");
      $('input[name="riksa"]').prop('checked', false);
      $('input[name="terminal"]').prop('checked', false);
      $('#tambah input[name],#tambah select').removeClass('is-invalid');
    });
    bsCustomFileInput.init();
    $('#reservationdatetime,#reservationdatetime2').datetimepicker({ 
      format: 'DD-MM-YYYY HH:mm',
      icons: { time: 'far fa-clock' }
     });
    
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
  function reset() {
      $("input[type=text], textarea,input[type=password],select").val("");
    }

    function Nberhasil(text) {
      Swal.fire({
        icon: 'success',
        title: text,
        showConfirmButton: false,
        timer: 1500
      })
    }

    function Nloading() {
      Swal.fire({
        title: "Loading...",
        text: "",
        imageUrl: "/lte/assets/img/loading.gif",
        showConfirmButton: false,
        allowOutsideClick: false
      });
    }

    function Nwarning(text) {
      Swal.fire({
        icon: 'warning',
        title: 'Oops...',
        text: text
      })
    }

    function Nerror(text) {
      Swal.fire({
        icon: 'error',
        title: 'Error !!!',
        text: text
      })
    }
</script>
</body>
</html>
