<?= $this->extend('admin/layout/templateAdmin'); ?>

<?= $this->section('content'); ?>

<div class="main-panel"> 
<div class="content-wrapper">
  <h2 class="mt-2 mb-2">Detail Agent</h2>
<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="/img/agent/<?= $agent['foto_agent']; ?>" class="img-fluid rounded-start card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?= $agent['nama_agent']; ?></h5>
        <p class="card-text"><strong>Email :</strong> <?= $agent['email_agent']; ?></p>
        <p class="card-text"><strong>Nomor WhatsApp :</strong> <?= $agent['wa_agent']; ?></p>
        <p class="card-text"><strong>Jenis Kelamin :</strong> <?= $agent['jk_agent']; ?></p>
        <p class="card-text"><strong>Alamat :</strong> <?= $agent['alamat_agent']; ?></p>
        <p class="card-text"><small class="text-muted">Terdaftar sejak <?= $agent['created_at']; ?></small></p>
        <a href="/agent/edit/<?= $agent['slug']; ?>" type="button" class="btn btn-inverse-success btn-fw btn-sm">Edit</a>
        
        <form action="/agent/<?= $agent['id_agent']; ?>" method="post" class="d-inline">
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit" class="btn btn-inverse-danger btn-fw btn-sm" onclick="return confirm('yakin ingin menghapus data agent ini?');"> Hapus</button>
        </form>

        <br><br>
        <a href="/agent">Kembali ke daftar agent</a>
      </div>
    </div>
  </div>
</div>
</div>
</div>

<?= $this->endSection(); ?>