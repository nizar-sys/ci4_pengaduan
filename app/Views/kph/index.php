<?= $this->extend('templates/index'); ?>

<?= $this->section('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-900"><?= $title; ?></h1>

    <?php if (session()->getFlashdata('error-msg')) : ?>
        <div class="row">
            <div class="col-12">
                <div class="alert alert-danger" role="alert">
                    <?= session()->getFlashdata('error-msg'); ?>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('msg')) : ?>
        <div class="row">
            <div class="col-12">
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('msg'); ?>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="row">
        <div class="col-12">

            <div class="card shadow">
                <div class="card-header">
                    <a href="/getah/tambah" class="btn btn-primary"><i class="fa fa-plus"></i> Input Getah</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-main" id="tbl-getah">
                            <thead>
                            <tr>
                            <th>Tanggal</th>
                            <th>Uraian</th>
                            <th colspan="6">Lokasi Sadapan yang Diperiksa</th>
                            <th>Keterangan</th>
                            </tr>
                            <tr>
                            <th></th>
                            <th></th>
                            <th>Nama Penyadap</th>
                            <th>Petak</th>
                            <th>Luas</th>
                            <th>Jumlah Pohon</th>
                            <th>Target</th>
                            <th>Realisasi</th>
                            <th></th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>09</td>
                                    <td>uraian</td>
                                    <td>nama</td>
                                    <td>s</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>Keterangan</td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
<!-- /.container-fluid -->
<?= $this->endSection(); ?>