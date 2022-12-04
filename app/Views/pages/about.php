<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<main id="main">

<!-- ======= Intro Single ======= -->
<section class="intro-single">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-8">
        <div class="title-single-box">
          <h1 class="title-single">Let's find your dream house</h1>
        </div>
      </div>
      <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="<?= base_url('/'); ?>">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  About
                </li>
              </ol>
            </nav>
          </div>
    </div>
  </div>
</section><!-- End Intro Single-->

<!-- ======= About Section ======= -->
<section class="section-about">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 position-relative">
        <div class="about-img-box">
          <img src="/img/dream.jpg" alt="" class="img-fluid">
        </div>
        <div class="sinse-box">
          <h3 class="sinse-title">GOSIPP
            <span></span>
            <br> Since 2020
          </h3>
          <p>Premium Residence</p>
        </div>
      </div>
      <div class="col-md-12 section-t8 position-relative">
        <div class="row">
          <div class="col-md-6 col-lg-5">
            <img src="/img/about-2.jpg" alt="" class="img-fluid">
          </div>
          <div class="col-lg-2  d-none d-lg-block position-relative">
            <div class="title-vertical d-flex justify-content-start">
              <span>GOSIPP</span>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 section-md-t3">
            <div class="title-box-d">
              <h3 class="title-d">Our
                <span class="color-d">Journey</span>
              </h3>
            </div>
            <p class="color-text-a">
              Dipertemukan di perguruan tinggi dengan situasi dan mimpi yang sama, memotivasi kami untuk memulai bisnis bersama. Tentunya banyak hal yang dilalui, hingga kami bisa melayani saudara dalam memilih tempat tinggal terbaik. 
            </p>
            <p class="color-text-a">
              Dengan mengutamakan kenyamanan kami menyediakan pelayanan terbaik untuk saudara. Kami juga sangat berharap pelayanan kami dapat membantu saudara dalam menemukan tempat tinggal sesuai yang saudara impikan!
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- =======Team Section ======= -->
<section class="section-agents section-t8">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="title-wrap d-flex justify-content-between">
          <div class="title-box">
            <h2 class="title-a">Meet Our Team</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="row">

        <!-- =======Azmi ======= -->

      <div class="col-md-4">
        <div class="card-box-d">
          <div class="card-img-d">
            <img src="/img/azmi.jpeg" alt="" class="img-d img-fluid">
          </div>
          <div class="card-overlay card-overlay-hover">
            <div class="card-header-d">
              <div class="card-title-d align-self-center">
                <h3 class="title-d">
                  <a href="agent-single.html" class="link-two">Azmi Taqiyudin
                  </a>
                </h3>
              </div>
            </div>
            <div class="card-body-d">
              <p class="content-d color-text-a">
                20 Tahun, Purwokerto
              </p>
              <div class="info-agents color-a">
                <p>
                  <strong>Phone: </strong> +62 895 7043 17298
                </p>
                <p>
                  <strong>Email: </strong> azmi.taqiyudin@mhs.unsoed.ac.id
                </p>
              </div>
            </div>
            <div class="card-footer-d">
              <div class="socials-footer d-flex justify-content-center">
                <ul class="list-inline">
                  <li class="list-inline-item">
                    <a href="https://web.facebook.com/profile.php?id=100005414059253" class="link-one">
                      <i class="bi bi-facebook" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="https://twitter.com/azmitaqiyudin" class="link-one">
                      <i class="bi bi-twitter" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="https://www.instagram.com/aztaqiyudin/" class="link-one">
                      <i class="bi bi-instagram" aria-hidden="true"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

          <!-- =======Putri ======= -->

      <div class="col-md-4">
        <div class="card-box-d">
          <div class="card-img-d">
            <img src="/img/putri.png" alt="" class="img-d img-fluid">
          </div>
          <div class="card-overlay card-overlay-hover">
            <div class="card-header-d">
              <div class="card-title-d align-self-center">
                <h3 class="title-d">
                  <a href="agent-single.html" class="link-two">Putri Alviany 
                  <br> Dyah Prameswari</a>
                </h3>
              </div>
            </div>
            <div class="card-body-d">
              <p class="content-d color-text-a">
                19 Tahun, Pemalang  
              </p>
              <div class="info-agents color-a">
                <p>
                  <strong>Phone: </strong> +62 896 6615 0147
                </p>
                <p>
                  <strong>Email: </strong> alviany.prameswari@mhs.unsoed.ac.id
                </p>
              </div>
            </div>
            <div class="card-footer-d">
              <div class="socials-footer d-flex justify-content-center">
                <ul class="list-inline">
                  <li class="list-inline-item">
                    <a href="https://web.facebook.com/putri.dyah.372" class="link-one">
                      <i class="bi bi-facebook" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="https://twitter.com/Alvianyputri01" class="link-one">
                      <i class="bi bi-twitter" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="https://www.instagram.com/ptrdyp/" class="link-one">
                      <i class="bi bi-instagram" aria-hidden="true"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

              <!-- =======Diva ======= -->

      <div class="col-md-4">
        <div class="card-box-d">
          <div class="card-img-d">
            <img src="/img/diva.png" alt="" class="img-d img-fluid">
          </div>
          <div class="card-overlay card-overlay-hover">
            <div class="card-header-d">
              <div class="card-title-d align-self-center">
                <h3 class="title-d">
                  <a href="agent-single.html" class="link-two">Diva Kirana
                    <br> Perwirani</a>
                </h3>
              </div>
            </div>
            <div class="card-body-d">
              <p class="content-d color-text-a">
                20 Tahun, Purwokerto  
              </p>
              <div class="info-agents color-a">
                <p>
                  <strong>Phone: </strong> +62 213 7433 532
                </p>
                <p>
                  <strong>Email: </strong> diva.perwiani@mhs.unsoed.ac.id
                </p>
              </div>
            </div>
            <div class="card-footer-d">
              <div class="socials-footer d-flex justify-content-center">
                <ul class="list-inline">
                  <li class="list-inline-item">
                    <a href="https://web.facebook.com/kirana.perwirani/" class="link-one">
                      <i class="bi bi-facebook" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="https://twitter.com/divakir" class="link-one">
                      <i class="bi bi-twitter" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="https://www.instagram.com/diva_kiranaaa/" class="link-one">
                      <i class="bi bi-instagram" aria-hidden="true"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- End About Section-->

</main><!-- End #main -->

<?= $this->endSection(); ?>