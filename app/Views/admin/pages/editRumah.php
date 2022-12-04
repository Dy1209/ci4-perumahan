<?= $this->extend('admin/layout/templateAdmin'); ?>

<?= $this->section('content'); ?>

<div class="main-panel">        
    <div class="content-wrapper">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Ubah Data Rumah</h4>
                    <p class="card-description">
                        Ubah data rumah yang dipilih
                    </p>
                    <form class="forms-sample" enctype="multipart/form-data" action="/rumah/update/<?= $rumah['id']; ?>" method="post">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="slug" value="<?= $rumah['slug']; ?>">
                        <input type="hidden" name="gambarLama" value="<?= $rumah['gambar']; ?>">
                        <div class="form-group">
                            <label for="kode_rumah">Kode Rumah</label>
                            <input type="text" class="form-control <?= ($validation->hasError('kode_rumah')) ? 'is-invalid' : ''; ?>" id="kode_rumah" placeholder="Kode Rumah" name="kode_rumah" autofocus value="<?= (old('kode_rumah')) ? old('kode_rumah') : $rumah['kode_rumah'] ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('kode_rumah'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>" id="alamat" placeholder="Alamat Rumah" name="alamat" value="<?= (old('alamat')) ? old('alamat') : $rumah['alamat'] ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('alamat'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga Rumah</label>
                            <input type="text" class="form-control <?= ($validation->hasError('harga')) ? 'is-invalid' : ''; ?>" id="harga" placeholder="contoh: 100.000.000" name="harga" value="<?= (old('harga')) ? old('harga') : $rumah['harga'] ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('harga'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="luas_area">Luas Area</label>
                            <input type="text" class="form-control <?= ($validation->hasError('luas_area')) ? 'is-invalid' : ''; ?>" id="luas_area" placeholder="Satuan meter persegi" name="luas_area" value="<?= (old('luas_area')) ? old('luas_area') : $rumah['luas_area'] ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('luas_area'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="kamar_tidur">Kamar tidur</label>
                            <input type="text" class="form-control <?= ($validation->hasError('kamar_tidur')) ? 'is-invalid' : ''; ?>" id="kamar_tidur" placeholder="Jumlah kamar tidur (contoh: 2)" name="kamar_tidur" value="<?= (old('kamar_tidur')) ? old('kamar_tidur') : $rumah['kamar_tidur'] ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('kamar_tidur'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="kamar_mandi">Kamar mandi</label>
                            <input type="text" class="form-control <?= ($validation->hasError('kamar_mandi')) ? 'is-invalid' : ''; ?>" id="kamar_mandi" placeholder="Jumlah kamar mandi (contoh: 2)" name="kamar_mandi" value="<?= (old('kamar_mandi')) ? old('kamar_mandi') : $rumah['kamar_mandi'] ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('kamar_mandi'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="garasi">Garasi</label>
                            <input type="text" class="form-control <?= ($validation->hasError('garasi')) ? 'is-invalid' : ''; ?>" id="garasi" placeholder="Jumlah garasi (contoh: 1)" name="garasi" value="<?= (old('garasi')) ? old('garasi') : $rumah['garasi'] ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('garasi'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="gambar">Gambar Rumah</label>
                            <input type="file" name="gambar" id="gambar" class="file-upload-default" >
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info <?= ($validation->hasError('gambar')) ? 'is-invalid' : ''; ?>" disabled placeholder="Upload Gambar" value="<?= $rumah['gambar']; ?>">
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                </span>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('gambar'); ?>
                                </div>
                            </div>
                            </div>
                        <button type="submit" class="btn btn-primary mr-2">Ubah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
        

<?= $this->endSection(); ?>