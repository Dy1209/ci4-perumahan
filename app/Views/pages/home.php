<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

  <!-- ======= Intro Section ======= -->
  <div class="intro intro-carousel swiper position-relative">
    <div class="swiper-wrapper">

      <?php foreach($rumah as $r) : ?>
      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(/img/rumah/<?= $r['gambar']; ?>)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top"><?= $r['alamat']; ?>
                      <br> <?= $r['kode_rumah']; ?>
                    </p>
                    <h1 class="intro-title mb-4 ">
                      <span class="color-b"><?= $r['kode_rumah']; ?> </span> 
                      <br> Gosipp
                    </h1>
                    <p class="intro-subtitle intro-price">
                      <a href="https://wa.me/081547895642"><span class="price-a">Harga | Rp<?= $r['harga']; ?></span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
    </div>
    <div class="swiper-pagination"></div>
  </div><!-- End Intro Section -->

  <main id="main">

    <!-- ======= Services Section ======= -->
    <section class="section-services section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Our Services</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card-box-c foo">
              <div class="card-header-c d-flex">
                <div class="card-box-ico">
                  <span class="bi bi-cart"></span>
                </div>
                <div class="card-title-c align-self-center">
                  <h2 class="title-c">Lifestyle</h2>
                </div>
              </div>
              <div class="card-body-c">
                <p class="content-c">
                  Rumah yang terdaftar di Gosipp merupakan rumah dengan model terbaru dan terupdate.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card-box-c foo">
              <div class="card-header-c d-flex">
                <div class="card-box-ico">
                  <span class="bi bi-calendar4-week"></span>
                </div>
                <div class="card-title-c align-self-center">
                  <h2 class="title-c">Loans</h2>
                </div>
              </div>
              <div class="card-body-c">
                <p class="content-c">
                Rumah yang terdaftar di Gosipp memiliki harga yang terjangkau sehingga bisa menjadi pilihan terbaik bagi keluarga anda
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card-box-c foo">
              <div class="card-header-c d-flex">
                <div class="card-box-ico">
                  <span class="bi bi-card-checklist"></span>
                </div>
                <div class="card-title-c align-self-center">
                  <h2 class="title-c">Sell</h2>
                </div>
              </div>
              <div class="card-body-c">
                <p class="content-c">
                  Pembelian rumah akan dilayani langsung oleh Agen kami melalui chatting pribadi menggunakan aplikasi WhatsApp sehingga percakapan bisa menjadi lebih intens dan personal.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Latest Properties Section ======= -->
    <section class="section-property section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Terbaru</h2>
              </div>
            </div>
          </div>
        </div>

        <div id="property-carousel" class="swiper">
          <div class="swiper-wrapper">

          <?php foreach($rumah as $r) : ?>
            <div class="carousel-item-b swiper-slide">
              <div class="card-box-a card-shadow">
                <div class="img-box-a ">
                  <img src="img/rumah/<?= $r['gambar']; ?>" alt="" class="img-a img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a href="property-single.html"><?= $r['kode_rumah']; ?> Gosipp
                          <br /> </a>
                      </h2>
                    </div>
                    <div class="card-body-a">
                      <div class="price-box d-flex">
                        <span class="price-a">Harga | Rp<?= $r['harga']; ?></span>
                      </div>
                      <a href="/pages/detail/<?= $r['slug']; ?>" class="link-a">More info
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
                          <h4 class="card-info-title">Kamar tidur</h4>
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
            </div><!-- End carousel item -->

          <?php endforeach; ?>
          </div>
        </div>
        <div class="propery-carousel-pagination carousel-pagination"></div>

      </div>
    </section><!-- End Latest Properties Section -->

    <!-- ======= Agents Section ======= -->
    <section class="section-agents section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Agents</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <?php foreach($agent as $a) : ?>
          <div class="col-md-4">
            <div class="card-box-d">
              <div class="card-img-d">
                <img src="<?= base_url(); ?>/img/agent/<?= $a['foto_agent']; ?>" alt="" class="img-d img-fluid">
              </div>
              <div class="card-overlay card-overlay-hover">
                <div class="card-header-d">
                  <div class="card-title-d align-self-center">
                    <h3 class="title-d">
                      <a href="agent-single.html" class="link-two"><?= $a['nama_agent']; ?>
                        <br></a>
                    </h3>
                  </div>
                </div>
                <div class="card-body-d">
                  <p class="content-d color-text-a">
                    Alamat : <?= $a['alamat_agent']; ?>
                  </p>
                  <div class="info-agents color-a">
                    <p>
                      <strong>WhatsApp: </strong> <?= $a['wa_agent']; ?>
                    </p>
                    <p>
                      <strong>Email: </strong> <?= $a['email_agent']; ?>
                    </p>
                  </div>
                </div>
                <div class="card-footer-d">
                  <div class="socials-footer d-flex justify-content-center">
                    <ul class="list-inline">
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-facebook" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-twitter" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-instagram" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-linkedin" aria-hidden="true"></i>
                        </a>
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
    </section><!-- End Agents Section -->

    <!-- ======= Testimonials Section ======= -->
    <section class="section-testimonials section-t8 nav-arrow-a">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Testimoni</h2>
              </div>
            </div>
          </div>
        </div>

        <div id="testimonial-carousel" class="swiper">
          <div class="swiper-wrapper">

            <div class="carousel-item-a swiper-slide">
              <div class="testimonials-box">
                <div class="row">
                  <div class="col-sm-12 col-md-6">
                    <div class="testimonial-img">
                      <img src="img/testimonial-1.jpg" alt="" class="img-fluid">
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-6">
                    <div class="testimonial-ico">
                      <i class="bi bi-chat-quote-fill"></i>
                    </div>
                    <div class="testimonials-content">
                      <p class="testimonial-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, cupiditate ea nam praesentium
                        debitis hic ber quibusdam
                        voluptatibus officia expedita corpori.
                      </p>
                    </div>
                    <div class="testimonial-author-box">
                      <img src="img/mini-testimonial-1.jpg" alt="" class="testimonial-avatar">
                      <h5 class="testimonial-author">Albert & Erika</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

            <div class="carousel-item-a swiper-slide">
              <div class="testimonials-box">
                <div class="row">
                  <div class="col-sm-12 col-md-6">
                    <div class="testimonial-img">
                      <img src="img/testimonial-2.jpg" alt="" class="img-fluid">
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-6">
                    <div class="testimonial-ico">
                      <i class="bi bi-chat-quote-fill"></i>
                    </div>
                    <div class="testimonials-content">
                      <p class="testimonial-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, cupiditate ea nam praesentium
                        debitis hic ber quibusdam
                        voluptatibus officia expedita corpori.
                      </p>
                    </div>
                    <div class="testimonial-author-box">
                      <img src="img/mini-testimonial-2.jpg" alt="" class="testimonial-avatar">
                      <h5 class="testimonial-author">Pablo & Emma</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

          </div>
        </div>
        <div class="testimonial-carousel-pagination carousel-pagination"></div>

      </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->

<?= $this->endSection(); ?>