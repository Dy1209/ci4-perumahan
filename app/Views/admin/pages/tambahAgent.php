<?= $this->extend('admin/layout/templateAdmin'); ?>

<?= $this->section('content'); ?>

<div class="main-panel">        
    <div class="content-wrapper">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tambah Agent</h4>
                    <p class="card-description">
                        Tambah agent yang bisa dihubungi oleh pengunjung website
                    </p>
                        <form class="forms-sample" enctype="multipart/form-data" action="/agent/save" method="post">
                        <?= csrf_field(); ?>
                        <div class="form-group">
                            <label for="nama_agent">Nama</label>
                            <input type="text" class="form-control <?= ($validation->hasError('nama_agent')) ? 'is-invalid' : ''; ?>" id="nama_agent" placeholder="Nama Lengkap" name="nama_agent" autofocus>
                            <div class="invalid-feedback">
                                <?= $validation->getError('nama_agent'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email_agent">Alamat Email</label>
                            <input type="email" class="form-control <?= ($validation->hasError('email_agent')) ? 'is-invalid' : ''; ?>" id="email_agent" placeholder="Email" name="email_agent">
                            <div class="invalid-feedback">
                                <?= $validation->getError('email_agent'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="wa_agent">Nomor WhatsApp</label>
                            <input type="text" class="form-control <?= ($validation->hasError('wa_agent')) ? 'is-invalid' : ''; ?>" id="wa_agent" placeholder="Nomor WhatsApp" name="wa_agent">
                            <div class="invalid-feedback">
                                <?= $validation->getError('wa_agent'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jk_agent">Jenis Kelamin</label>
                                <select class="form-control <?= ($validation->hasError('jk_agent')) ? 'is-invalid' : ''; ?>" id="jk_agent" name="jk_agent">
                                <option disabled selected>--Pilih Jenis Kelamin--</option>
                                <option>Laki-Laki</option>
                                <option>Perempuan</option>
                                </select>
                                <div class="invalid-feedback">
                                <?= $validation->getError('jk_agent'); ?>
                            </div>
                            </div>
                            <div class="form-group">
                                <label for="foto_agent">Foto Agent</label>
                                <input type="file" name="foto_agent" id="foto_agent" class="file-upload-default" >
                                <div class="input-group col-xs-12">
                                    <input type="text" class="form-control file-upload-info <?= ($validation->hasError('foto_agent')) ? 'is-invalid' : ''; ?>" disabled placeholder="Upload foto agent" value="<?= old('foto_agent'); ?>">
                                    <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                    </span>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('foto_agent'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                            <label for="alamat_agent">Alamat</label>
                            <input type="text" class="form-control <?= ($validation->hasError('alamat_agent')) ? 'is-invalid' : ''; ?>" id="alamat_agent" placeholder="Alamat" name="alamat_agent">
                            <div class="invalid-feedback">
                                <?= $validation->getError('alamat_agent'); ?>
                            </div>    
                        </div>
                            <button type="submit" class="btn btn-primary mr-2">Tambah Data</button>
                            <button class="btn btn-light" type="reset">Batal</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
        

<?= $this->endSection(); ?>