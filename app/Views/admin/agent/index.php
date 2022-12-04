<?= $this->extend('admin/layout/templateAdmin'); ?>

<?= $this->section('content'); ?>

<div class="main-panel"> 
<div class="content-wrapper">
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Daftar Agent</h4>
                  <p class="card-description">
                    Daftar agent yang tersedia
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
                          <th>
                            Foto
                          </th>
                          <th>
                            Nama
                          </th>
                          <th>
                            Jenis Kelamin
                          </th>
                          <th>
                            Terdaftar Sejak
                          </th>
                          <th>
                            Opsi
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($agent as $a) : ?>
                        <tr>
                          <td scope="row"><?= $i++; ?></td>
                          <td class="py-1">
                            <img src="/img/agent/<?= $a['foto_agent']; ?>" alt=""/>
                          </td>
                          <td><?= $a['nama_agent']; ?></td>
                          <td><?= $a['jk_agent']; ?></td>
                          <td><?= $a['created_at']; ?></td>
                          <td>
                            <a href="/agent/<?= $a['slug']; ?>" type="button" class="btn btn-inverse-primary btn-fw btn-sm">Detail</a>
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