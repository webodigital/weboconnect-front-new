<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Weboconnect</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- ====================== Links =========================== -->
  <?php $this->load->view('front/common/styles') ?>
  <!-- Owl Carousel CSS -->
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"> -->

</head>
<body>

<?php $this->load->view('front/common/header') ?>



<section class="section_padding our_team_banner">
  <div class="container"  >
    <div class="row justify-content-center align-items-center g-4">
      <!-- Text Content Column -->
      <div class="col-md-6" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200">
        <div class="text-center">
          <p class="fs-20 fw-500">Our Leadership Team</p>
          <h1 class="fs-30 fw-600">It's about the thoughts and souls
          that work behind Konstant</h1>
  
        </div>
      </div>       
      <!-- Image Column -->



       <!-- <div class="col-lg-5">
        <div class="row g-3 align-items-start justify-content-center">
          <?php $this->load->view('front/common/all_reviews_ratings') ?>
        </div>
      </div> -->
                   
    </div>
  </div>
</section>

<section class="section_padding meet_our_leader">
  <div class="container">
    <div class="text-center">
      <h2 class="fs-34 fw-700 text_brand_color1">Meet our leaders</h2>
      <h6 class="fs-20 fw-600 text_brand_color1">Under their stewardship, we secured many industry-recognized accolades.</h6>
    </div>
    <div class="row justify-content-center mt-5">
      <div class="col-xl-10">

        <div class="row justify-content-center g-4">
          <div class="col-6 col-lg-3">
            <div class="management_team_card">
              <img class="" src="<?= base_url() ?>assets/images/about/gaurav.webp" alt="Gaurav" />
              <div class="management_team_content">
                <div>
                  <h5 class="fs-14 fw-700">Gaurav Kumar</h5>
                  <h6 class="fs-12 fw-500">CEO, MD & FOUNDER</h6>
                </div>
              </div>
            </div>
          </div>

          <div class="col-6 col-lg-3">
            <div class="management_team_card">
              <img class="" src="<?= base_url() ?>assets/images/about/rajiv.webp" alt="Rajiv" />
              <div class="management_team_content">
                <div>
                  <h5 class="fs-14 fw-700">Rajiv Ranjan Kumar</h5>
                  <h6 class="fs-12 fw-500">COO, CFO, MD & CO-FOUNDER</h6>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-6 col-lg-3">
            <div class="management_team_card">
              <img class="" src="<?= base_url() ?>assets/images/about/mlc.webp" alt="Gaurav" />
              <div class="management_team_content">
                <div>
                  <h5 class="fs-14 fw-700">Mikkel Lund Christensen</h5>
                  <h6 class="fs-12 fw-500">CMO & Co-Founder(Europe)</h6>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-6 col-lg-3">
            <div class="management_team_card">
              <img class="" src="<?= base_url() ?>assets/images/about/nirbhay.webp" alt="Gaurav" />
              <div class="management_team_content">
                <div>
                  <h5 class="fs-14 fw-700">Nirbhay Kant</h5>
                  <h6 class="fs-12 fw-500">CTO, MD & CO-FOUNDER</h6>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>
</section>

<section class="section_padding our_team">
    <div class="container">
        <div class="text-center">
            <h2 class="fs-34 fw-600">Our Team</h2>
        </div>

        <div class="row g-4 mt-4">
            <div class="col-md-3 col-6">
                <div class="our_team_card">
                    <div class="teammates_img">
                        <img src="<?= base_url() ?>assets/images/our_team/servesh.webp" alt="servesh Chauhan">
                    </div>
                    <div class="teammates_details">
                        <h4 class="fs-18 fw-600 m-0">Sarvesh chauhan</h4>
                        <h6 class="fs-14 fw-400 m-0">Technical Team Lead</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="our_team_card">
                    <div class="teammates_img">
                        <img src="<?= base_url() ?>assets/images/our_team/sanjeev.webp" alt="Sanjeev Sajjan">
                    </div>
                    <div class="teammates_details">
                        <h4 class="fs-18 fw-600 m-0">Sanjeev Sajjan</h4>
                        <h6 class="fs-14 fw-400 m-0">UX/UI designer</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="our_team_card">
                    <div class="teammates_img">
                        <img src="<?= base_url() ?>assets/images/our_team/arun.webp" alt="Sanjeev Sajjan">
                    </div>
                    <div class="teammates_details">
                        <h4 class="fs-18 fw-600 m-0">Arun Singh</h4>
                        <h6 class="fs-14 fw-400 m-0">UX/UI designer</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="our_team_card">
                    <div class="teammates_img">
                        <img src="<?= base_url() ?>assets/images/our_team/swapnil.webp" alt="Sanjeev Sajjan">
                    </div>
                    <div class="teammates_details">
                        <h4 class="fs-18 fw-600 m-0">Swapnil Lengure</h4>
                        <h6 class="fs-14 fw-400 m-0">Android Developer</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section_padding pg_bnr bg-white back_cover" style="background-image: url('<?= base_url() ?>assets/images/pg_bnr/our_team.webp');">
    <div class="container">
        <div class="row align-items-center justify-content-end">
            <div class="col-lg-5">
                <div class="text-center text-lg-end">
                    <h2 class="fs-24 fw-700 text-white">Partner with us to work with the best dedicated developers in the industry.</h2>
                    <a href="<?= base_url() ?>contact" class="btn btn-primary-gradient btn-rounded px-5">Hire Us</a>
                </div>
            </div>
        </div>
    </div>
</section> 


<section class="section_padding bg-white">
    <?php $this->load->view('front/common/our_clients_videos') ?>
</section>

<?php $this->load->view('front/common/footer_form') ?>
<?php $this->load->view('front/common/footer') ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>
  AOS.init();
</script>

</body> 
<?php $this->load->view('front/common/script') ?>
</html>
