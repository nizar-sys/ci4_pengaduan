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
                    <a href="/getah">&laquo; Kembali ke daftar getah</a>
                </div>
                <div class="card-body">
                    <?= form_open_multipart('/getah/tambah_getah'); ?>
                    <?= csrf_field(); ?>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="judul">Perihal</label>
                                <input type="text" name="judul_getah" id="judul" class="form-control <?= $validation->hasError('judul_getah') ? 'is-invalid' : ''; ?>" value="<?= old('judul_getah'); ?>" autofocus>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('judul_getah'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="isi">Jelaskan lebih rinci</label>
                                <textarea name="isi_getah" id="isi" cols="30" rows="13" class="form-control <?= $validation->hasError('isi_getah') ? 'is-invalid' : ''; ?>"><?= old('isi_getah'); ?></textarea>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('isi_getah'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Nama Pengadu</label>
                                <div class="form-check">
                                    <input class="form-check-input anonym" type="radio" name="nama_pengadu" id="nama_pengadu1" value="anonym" checked>
                                    <label class="form-check-label" for="nama_pengadu1">
                                        <span class="text-gray-800">Samarkan (anonym)</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="nama_pengadu" id="nama_pengadu2">
                                    <label class="form-check-label" for="nama_pengadu2">
                                        <span class="text-gray-800">Gunakan nama sendiri</span>
                                    </label>
                                </div>
                                <input type="text" class="form-control pengadu" value="<?= $user['nama']; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label>Upload foto bukti</label>
                                <div class="mb-3">
                                    <p class="mb-0 text-info">Aturan: wajib upload 1 gambar, maksimal 3 gambar, setiap gambar maksimal ukuran sebesar 1 MB.</p>
                                </div>
                                <hr>

                                <input type="file" name="images[]" id="images" class="p-1 form-control <?= $validation->hasError('images') ? 'is-invalid' : ''; ?>" multiple>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('images'); ?>
                                </div>
                                <?= session()->getFlashdata('err-files'); ?>
                            </div>
                        </div>
                        <button class="btn btn-block btn-primary">Tambah Data</button>
                    </div>
                    <?= form_close(); ?>
                </div>
            </div>

        </div>
    </div>

</div>
<!-- /.container-fluid -->
<?= $this->endSection(); ?>