<?= $this->extend('admin/layout/templateAdmin'); ?>

<?= $this->section('content'); ?>

<div class="main-panel"> 
<div class="content-wrapper">
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Daftar Rumah</h4>
                  <p class="card-description">
                    Daftar Rumah yang terdaftar
                  </p>
                  <?php if(session()->getFlashdata('pesan')) : ?>
                  <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                  </div>
                  <?php endif; ?>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Kode Rumah</th>
                          <th>
                            Gambar Rumah
                          </th>
                          <th>
                            Alamat
                          </th>
                          <th>
                            Harga
                          </th>
                          <th>
                            Opsi
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($rumah as $r) : ?>
                        <tr>
                          <td scope="row"><?= $i++; ?></td>
                          <td><?= $r['kode_rumah']; ?></td>
                          <td class="py-1">
                            <img src="/img/rumah/<?= $r['gambar']; ?>" alt=""/>
                          </td>
                          <td><?= $r['alamat']; ?></td>
                          <td><?= $r['harga']; ?></td>
                          <td>
                            <a href="/rumah/<?= $r['slug']; ?>" type="button" class="btn btn-inverse-primary btn-fw btn-sm">Detail</a>
                          </td>
                        </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
</div>
</div>
        

<?= $this->endSection(); ?>