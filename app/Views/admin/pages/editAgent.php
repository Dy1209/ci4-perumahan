<?= $this->extend('admin/layout/templateAdmin'); ?>

<?= $this->section('content'); ?>

<div class="main-panel">        
    <div class="content-wrapper">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Ubah Data Agent</h4>
                    <p class="card-description">
                        Ubah data agent yang bisa dihubungi oleh pengunjung website
                    </p>
                        <form class="forms-sample" enctype="multipart/form-data" action="/agent/update/<?= $agent['id_agent']; ?>" method="post">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="slug" value="<?= $agent['slug']; ?>">
                        <input type="hidden" name="foto_agentLama" value="<?= $agent['foto_agent']; ?>">
                        <div class="form-group">
                            <label for="nama_agent">Nama</label>
                            <input type="text" class="form-control <?= ($validation->hasError('nama_agent')) ? 'is-invalid' : ''; ?>" id="nama_agent" placeholder="Nama Lengkap" name="nama_agent" autofocus value="<?= (old('nama_agent')) ? old('nama_agent') : $agent['nama_agent'] ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('nama_agent'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email_agent">Alamat Email</label>
                            <input type="email" class="form-control <?= ($validation->hasError('email_agent')) ? 'is-invalid' : ''; ?>" id="email_agent" placeholder="Email" name="email_agent" value="<?= (old('email_agent')) ? old('email_agent') : $agent['email_agent'] ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('email_agent'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="wa_agent">Nomor WhatsApp</label>
                            <input type="text" class="form-control <?= ($validation->hasError('wa_agent')) ? 'is-invalid' : ''; ?>" id="wa_agent" placeholder="Nomor WhatsApp" name="wa_agent" value="<?= (old('wa_agent')) ? old('wa_agent') : $agent['wa_agent'] ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('wa_agent'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jk_agent">Jenis Kelamin</label>
                                <select class="form-control <?= ($validation->hasError('jk_agent')) ? 'is-invalid' : ''; ?>" id="jk_agent" name="jk_agent" value="<?= (old('jk_agent')) ? old('jk_agent') : $agent['jk_agent'] ?>">
                                <option disabled selected>--Pilih Jenis Kelamin--</option>
                                <option>Laki-Laki</option>
                                <option>Perempuan</option>
                                </select>
                                <div class="invalid-feedback">
                                <?= $validation->getError('jk_agent'); ?>
                            </div>
                            </div>
                            <div class="form-group">
                            <label>Foto Diri</label>
                            <input type="file" name="foto_agent" class="file-upload-default" >
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info <?= ($validation->hasError('foto_agent')) ? 'is-invalid' : ''; ?>" disabled placeholder="Upload Foto" value="<?= $agent['foto_agent']; ?>">
                                <span class="input-group-append">
                                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                </span>
                            </div>
                            </div>
                            <div class="form-group">
                            <label for="alamat_agent">Alamat</label>
                            <input type="text" class="form-control <?= ($validation->hasError('alamat_agent')) ? 'is-invalid' : ''; ?>" id="alamat_agent" placeholder="Alamat" name="alamat_agent" value="<?= (old('alamat_agent')) ? old('alamat_agent') : $agent['alamat_agent'] ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('alamat_agent'); ?>
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