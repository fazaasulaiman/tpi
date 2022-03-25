<?= $this->extend('template/_adminlte') ?>
<?= $this->section('content') ?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Laporan Harian</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/lapharian">Laporan Harian</a></li>
                    <li class="breadcrumb-item active">Tambah</li>
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
                        <h3 class="card-title">Tambah Laporan Harian</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div id="alert-error-tambah">

                        </div>
                        <form method="post" id="tambah" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Group Riksa</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="riksa" value="Riksa I grup 1">
                                            <label class="form-check-label">Riksa I grup 1</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="riksa" value="Riksa I grup 2">
                                            <label class="form-check-label">Riksa I grup 2</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="riksa" value="Riksa II grup 1">
                                            <label class="form-check-label">Riksa II grup 1</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="riksa" value="Riksa II grup 2">
                                            <label class="form-check-label">Riksa II grup 2</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="riksa" value="Riksa III grup 1">
                                            <label class="form-check-label">Riksa III grup 1</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="riksa" value="Riksa III grup 2">
                                            <label class="form-check-label">Riksa III grup 2</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="riksa" value="Riksa IV grup 1">
                                            <label class="form-check-label">Riksa IV grup 1</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="riksa" value="Riksa IV grup 2">
                                            <label class="form-check-label">Riksa IV grup 2</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label>Terminal</label>
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="terminal" value="Kedatangan Internasional">
                                            <label class="form-check-label">Kedatangan Internasional</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="terminal" value="Keberangkatan Internasional">
                                            <label class="form-check-label">Keberangkatan Internasional</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="terminal" value="Kedatangan Selatan">
                                            <label class="form-check-label">Kedatangan Selatan</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="terminal" value="Keberangkatan Selatan">
                                            <label class="form-check-label">Keberangkatan Selatan</label>
                                        </div>

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
                                    <div class="form-group">
                                        <label>Tanggal dan Jam</label>
                                        <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" data-target="#reservationdatetime" name="waktu" />
                                            <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Rute</label>
                                        <input type="text" class="form-control" rows="3" placeholder="Rute ..." name="rute">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>KRU</label>
                                        <input type="text" class="form-control" rows="3" placeholder="Jumlah Kru ..." name="kru">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>WNA</label>
                                        <input type="text" class="form-control" rows="3" placeholder="Jumlah WNA ..." name="wna">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>WNI</label>
                                        <input type="text" class="form-control" rows="3" placeholder="Jumlah WNI ..." name="wni">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Lampiran</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile" name="doc" accept="application/pdf">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Keterangan</label>
                                        <textarea class="form-control" rows="3" placeholder="Enter ..." name="keterangan"></textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="col text-right">
                            <a class="btn btn-secondary reset" href="#" role="button">Reset</a>
                            <a class="btn btn-primary" href="#" role="button" id="validate">Submit</a>
                        </div>
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
    $(function() {
        $("#validate").click(function(e) {
            Nloading();
            submit();
            e.preventDefault();
        });
    });

    function submit() {
        $("#validate").addClass('disabled');
        var formData = new FormData($('#tambah').get(0));
        $.ajax({
            context: this,
            url: "/lapharian/process",
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            },
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            dataType: "JSON",
            success: function(data) {
                if (data.status) {
                    reset();
                    $('#customFile').next('label').html('Select a file');
                    $('input[name="riksa"]').prop('checked', false);
                    $('input[name="terminal"]').prop('checked', false);
                    $('#validate').text('Submit');
                    $("#validate").removeClass('disabled');
                    Nberhasil('Berhasil Menambahkan data');
                } else {
                    html = '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h5><i class="icon fas fa-ban"></i> Alert!</h5>';
                    Nwarning('Input data sesuai dengan yang diminta');
                    $.each(data.text, function(key, value) {
                        $('input[name="' + key + '"],select[name="' + key + '"],radio[name="' + key + '"]').addClass('is-invalid');
                        html += value + '<br>';
                    });
                    html += '</div>';
                    console.log(html);
                    $("#alert-error-tambah").append(html);
                    $("#validate").removeClass('disabled');
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                Nerror(errorThrown)
                $("#validate").removeClass('disabled');

            }
        });

    }
</script>
<!-- /.content -->
<?= $this->endSection() ?>