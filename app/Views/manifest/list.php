<?= $this->extend('template/_adminlte') ?>
<?= $this->section('content') ?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>DataTables</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/lapharian">Laporan Harian</a></li>
          <li class="breadcrumb-item active">List</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">DataTable with minimal features & hover style</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="tabel" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>No Flight</th>
                  <th>Tgl & jam</th>
                  <th>Terminal</th>
                  <th>Kru</th>
                  <th>WNA</th>
                  <th>WNI</th>
                  <th>Keterangan</th>
                  <th>Riksa</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>

              </tbody>
              <tfoot>
                <tr>
                  <th>No Flight</th>
                  <th>Tgl & jam</th>
                  <th>Terminal</th>
                  <th>Kru</th>
                  <th>WNA</th>
                  <th>WNI</th>
                  <th>Keterangan</th>
                  <th>Riksa</th>
                  <th>Action</th>
                </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
<script>
  $(document).ready(function() {
    $('#tabel').DataTable({
        processing: true,
        responsive: true,
        serverSide: true,
        columnDefs: [
            { targets: -1, orderable: false}, //target -1 means last column
        ],
        ajax: 'lapharian/list'
    });
});
</script>
<!-- /.content -->
<?= $this->endSection() ?>