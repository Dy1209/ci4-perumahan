<?= $this->extend('admin/layout/templateAdmin'); ?>

<?= $this->section('content'); ?>

<div class="main-panel"> 
<div class="content-wrapper">
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Daftar Admin</h4>
                  <p class="card-description">
                    Daftar admin tetap website
                  </p>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>
                            username
                          </th>
                          <th>
                            Email
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($dataadmin as $d) : ?>
                        <tr>
                          <td scope="row"><?= $i++; ?></td>
                          <td><?= $d['username']; ?></td>
                          <td><?= $d['email']; ?></td>
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