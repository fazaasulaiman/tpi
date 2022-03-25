<?= $this->extend('template/_adminlte') ?>
<?= $this->section('content') ?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>List Laporan Harian</h1>
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
            <h3 class="card-title">Menu Pencarian</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <form method="post" id="cari">
              <?= csrf_field(); ?>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Group Riksa</label>
                    <select class="form-control" name="riksa">
                      <option selected value="">Silahkan Pilih</option>
                      <option value="Riksa I grup 1">Riksa I grup 1</option>
                      <option value="Riksa I grup 2">Riksa I grup 2</option>
                      <option value="Riksa II grup 1">Riksa II grup 1</option>
                      <option value="Riksa II grup 2">Riksa II grup 2</option>
                      <option value="Riksa III grup 1">Riksa III grup 1</option>
                      <option value="Riksa III grup 2">Riksa III grup 2</option>
                      <option value="Riksa IV grup 1">Riksa IV grup 1</option>
                      <option value="Riksa IV grup 2">Riksa IV grup 2</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-6">
                  <label>Terminal</label>
                  <div class="form-group">
                    <select class="form-control" name="terminal">
                      <option selected value="">Silahkan Pilih</option>
                      <option value="Kedatangan Internasional">Kedatangan Internasional</option>
                      <option value="Keberangkatan Internasional">Keberangkatan Internasional</option>
                      <option value="Kedatangan Selatan">Kedatangan Selatan</option>
                      <option value="Keberangkatan Selatan">Keberangkatan Selatan</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Nomer Flight</label>
                    <input type="text" class="form-control" placeholder="Enter ..." name="no_flight">
                  </div>
                </div>
                <div class="col-sm-6">
                  <label>Tanggal dan Jam</label>
                  <div class="form-group row">
                    <div class="input-group date col-sm-6" id="reservationdatetime" data-target-input="nearest">
                      <input type="text" class="form-control datetimepicker-input" placeholder="tanggal awal" data-target="#reservationdatetime" name="waktu1" />
                      <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                      </div>
                    </div>
                    <div class="input-group date col-sm-6" id="reservationdatetime2" data-target-input="nearest">
                      <input type="text" class="form-control datetimepicker-input" placeholder="tanggal akhir" data-target="#reservationdatetime2" name="waktu2" />
                      <div class="input-group-append" data-target="#reservationdatetime2" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
            <div class="col text-right">
              <a class="btn btn-secondary reset" href="#" role="button">Reset</a>
              <a class="btn btn-primary" href="#" role="button" id="filter">Submit</a>
            </div>
          </div>
          <div class="card-header">
            <h3 class="card-title"></h3>
          </div>
          <div class="card-body">
            <table id="tabel" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>No Flight</th>
                  <th>Rute</th>
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
                  <th>Rute</th>
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
    $('#filter').click(function() {
            table.ajax.reload(null, false);
        });
    table = $('#tabel').DataTable({
      processing: true,
      responsive: true,
      serverSide: true,
      columnDefs: [{
          targets: -1,
          orderable: false
        }, //target -1 means last column
      ],
      ajax: {
            url: 'lapharian/list',
            data: function (d) {
                d.cari = $('#cari').serialize();
            }
        },
    });
  });

  function hapus(id, no_flight, waktu) {

    Swal.fire({
      title: 'Apa anda yakin?',
      text: "Ingin menghapus laporan harian " + no_flight + " " + waktu,
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, hapus aja!',
      cancelButtonText: 'Tidak jadi!',
    }).then((result) => {
      if (result.isConfirmed) {
        Nloading();
        $.ajax({
          url: '/lapharian/remove',
          type: "POST",
          headers: {
            'X-Requested-With': 'XMLHttpRequest'
          },
          data: {
            id: id,
            no_flight: no_flight,
            waktu: waktu
          },
          dataType: "JSON",
          success: function(data) {
            if (data.status) {
              Nberhasil('lapoaran harian  ' + no_flight + " " + waktu + ' berhasil dihapus');
              table.ajax.reload(null, false);
            } else {
              val = '';
              $.each(data.text, function(key, value) {
                val += value + '\n';
              });
              console.log(val);
              Nwarning(val);
            }
          },
          error: function(jqXHR, textStatus, errorThrown) {
            Nerror(errorThrown)

          }
        });

      }
    })

  }
</script>
<!-- /.content -->
<?= $this->endSection() ?>