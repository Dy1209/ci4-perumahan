<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<main id="main">
<!-- ======= Intro Single ======= -->
<section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single"><?= $rumah['kode_rumah']; ?></h1>
              <span class="color-text-a"><?= $rumah['alamat']; ?></span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="<?= base_url("/"); ?>">Home</a>
                </li>
                <li class="breadcrumb-item">
                  <a href="<?= base_url(); ?>/pages/properties">Properties</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  <?= $rumah['kode_rumah']; ?>
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= Property Single ======= -->
    <section class="property-single nav-arrow-b">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div id="property-single-carousel" class="swiper">
              <div class="swiper-wrapper">
                <div class="carousel-item-b swiper-slide">
                  <img src="<?= base_url(); ?>/img/rumah/<?= $rumah['gambar']; ?>" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
        <br><br>

        <div class="row">
          <div class="col-sm-12">
            <div class="row justify-content-between">
              <div class="col-md-5 col-lg-5">
                <div class="property-price d-flex justify-content-center foo">
                  <div class="card-header-c d-flex">
                    <div class="card-box-ico">
                    </div>
                    <div class="card-title-c align-self-center">
                      <h5 class="title-c">Rp<?= $rumah['harga']; ?></h5>
                    </div>
                  </div>
                </div>
                <div class="property-summary">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="title-box-d section-t4">
                        <h3 class="title-d">Ringkasan</h3>
                      </div>
                    </div>
                  </div>
                  <div class="summary-list">
                    <ul class="list">
                      <li class="d-flex justify-content-between">
                        <strong>Kode Rumah:</strong>
                        <span><?= $rumah['kode_rumah']; ?></span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Alamat:</strong>
                        <span><?= $rumah['alamat']; ?></span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Tipe Property:</strong>
                        <span>Rumah</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Status:</strong>
                        <span>-</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Luas Area:</strong>
                        <span><?= $rumah['luas_area']; ?>m
                        <sup>2</sup>
                        </span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Kamar Tidur:</strong>
                        <span><?= $rumah['kamar_tidur']; ?></span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Kamar Mandi:</strong>
                        <span><?= $rumah['kamar_mandi']; ?></span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Garasi:</strong>
                        <span><?= $rumah['garasi']; ?></span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-7 col-lg-7 section-md-t3">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="title-box-d">
                      <h3 class="title-d">Deskripsi Property</h3>
                    </div>
                  </div>
                </div>
                <div class="property-description">
                  <p class="description color-text-a">
                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit
                    neque, auctor sit amet
                    aliquam vel, ullamcorper sit amet ligula. Cras ultricies ligula sed magna dictum porta.
                    Curabitur aliquet quam id dui posuere blandit. Mauris blandit aliquet elit, eget tincidunt
                    nibh pulvinar quam id dui posuere blandit.
                  </p>
                  <p class="description color-text-a no-margin">
                    Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Donec rutrum congue leo eget
                    malesuada. Quisque velit nisi,
                    pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Property Single-->

  </main><!-- End #main -->
  
<?= $this->endSection(); ?>
