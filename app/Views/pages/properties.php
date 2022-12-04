<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Our Amazing Properties</h1>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="<?= base_url('/'); ?>">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Properties
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= Property Grid ======= -->
    <section class="property-grid grid">
      <div class="container">
        <div class="row">
          <?php foreach($rumah as $r) : ?>
          <div class="col-md-4">
            <div class="card-box-a card-shadow">
              <div class="img-box-a">
                <img src="<?= base_url(); ?>/img/rumah/<?= $r['gambar']; ?>" alt="" class="img-a img-fluid">
              </div>
              <div class="card-overlay">
                <div class="card-overlay-a-content">
                  <div class="card-header-a">
                    <h2 class="card-title-a">
                      <a href="#"><?= $r['kode_rumah']; ?> Gosipp
                        <br /></a>
                    </h2>
                  </div>
                  <div class="card-body-a">
                    <div class="price-box d-flex">
                      <span class="price-a">Harga | Rp<?= $r['harga']; ?></span>
                    </div>
                    <a href="/pages/detail/<?= $r['slug']; ?>" class="link-a">Click here to view
                      <span class="bi bi-chevron-right"></span>
                    </a>
                  </div>
                  <div class="card-footer-a">
                    <ul class="card-info d-flex justify-content-around">
                      <li>
                        <h4 class="card-info-title">Luas Area</h4>
                        <span><?= $r['luas_area']; ?>m
                          <sup>2</sup>
                        </span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Kamar Tidur</h4>
                        <span><?= $r['kamar_tidur']; ?></span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Kamar Mandi</h4>
                        <span><?= $r['kamar_mandi']; ?></span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Garasi</h4>
                        <span><?= $r['garasi']; ?></span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section><!-- End Property Grid Single-->

  </main><!-- End #main -->

<?= $this->endSection(); ?>