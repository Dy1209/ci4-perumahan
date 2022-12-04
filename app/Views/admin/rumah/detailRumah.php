<?= $this->extend('admin/layout/templateAdmin'); ?>

<?= $this->section('content'); ?>

<div class="main-panel"> 
<div class="content-wrapper">
  <h2 class="mt-2 mb-2">Detail Rumah</h2>
<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="/img/rumah/<?= $rumah['gambar']; ?>" class="img-fluid rounded-start card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?= $rumah['kode_rumah']; ?></h5>
        <p class="card-text"><strong>Alamat :</strong> <?= $rumah['alamat']; ?></p>
        <p class="card-text"><strong>Harga</strong> <?= $rumah['harga']; ?></p>
        <p class="card-text"><strong>Luas Area</strong> <?= $rumah['luas_area']; ?></p>
        <p class="card-text"><strong>Kamar Tidur</strong> <?= $rumah['kamar_tidur']; ?></p>
        <p class="card-text"><strong>Kamar Mandi</strong> <?= $rumah['kamar_mandi']; ?></p>
        <p class="card-text"><strong>Garasi</strong> <?= $rumah['garasi']; ?></p>
        <p class="card-text"><small class="text-muted">Terakhir diperbarui <?= $rumah['created_at']; ?></small></p>
        
        <a href="/rumah/edit/<?= $rumah['slug']; ?>" type="button" class="btn btn-inverse-success btn-fw btn-sm">Edit</a>
        
        <form action="/rumah/<?= $rumah['id']; ?>" method="post" class="d-inline">
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit" class="btn btn-inverse-danger btn-fw btn-sm" onclick="return confirm('yakin ingin menghapus data rumah ini?');"> Hapus</button>
        </form>

        <br><br>
        <a href="/rumah">Kembali ke daftar rumah</a>
      </div>
    </div>
  </div>
</div>
</div>
</div>

<?= $this->endSection(); ?>