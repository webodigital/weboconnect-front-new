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



<section class="section_padding homeSection1">
  <div class="container"  >
    <div class="row justify-content-between align-items-center g-4">
      <!-- Text Content Column -->
      <div class="col-lg-5 col-12" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200">
        <div class="text-center text-lg-start">
          <p class="fs-20 fw-500">OUR LEADERSHIP TEAM</p>
          <h1 class="fs-30 fw-700">Industry-recognized. <br>
          Award-winning.</h1>
  
        </div>
      </div>       
      <!-- Image Column -->



       <div class="col-lg-5">
        <div class="row g-3 align-items-start justify-content-center">
          <div class="col-6 col-lg-6 pb-4">
            <div class="google_ratings_card">
              <a href="https://www.goodfirms.co/company/weboconnect-technlogies-pvt-ltd">
                <img style="" class="w-100" height="80" src="<?=base_url()?>assets/images/weboconnect_assets/goodfirm.webp" alt="goodfirm" title="goodfirm">
                <div class="d-flex flex-wrap">
                  <span>Excellent</span>
                  <span>.</span>
                  <span>5/5</span>
                  <span>.</span>
                  <span>36 REVIEWS</span>
                </div>
              </a>
            </div>
          </div>

          <div class="col-6 col-lg-6 pb-4">
            <div class="google_ratings_card">
              <img style="" class="w-100" height="80" src="<?=base_url()?>assets/images/weboconnect_assets/google_ratings.webp" alt="google ratings" title="google ratings">
              <div class="d-flex flex-wrap">
                <span>4.7/5</span>
                <span>.</span>
                <span>26 Google reviews</span>
              </div>
            </div>
          </div>

          <div class="col-6 col-lg-6 pb-4">
            <div class="google_ratings_card">
              <a href="https://clutch.co/profile/weboconnect-technologies?utm_source=widget&amp;utm_medium=1&amp;utm_campaign=widget&amp;utm_content=num_reviews&amp;utm_term=localhost#reviews">
                <img style="" class="w-100" height="80" src="<?=base_url()?>assets/images/weboconnect_assets/clutch.webp" alt="clutch" title="clutch">
                <div class="d-flex flex-wrap">
                  <span>5/5</span>
                  <span>12 REVIEWS</span>
                </div>
              </a>
            </div>
          </div>

          <div class="col-6 col-lg-6 pb-4">
            <div class="google_ratings_card">
              <a target="_blank" href="https://www.trustpilot.com/review/weboconnect.com">
                <img style="" class="w-100" height="80" src="<?=base_url()?>assets/images/weboconnect_assets/trustpilot.webp" alt="trustpilot" title="trustpilot">
                <div class="d-flex flex-wrap">
                  <span>4.6/5</span>
                  <span>.</span>
                  <span>23 Reviews</span>
                  <span>.</span>
                  <span>Excellent</span>
                </div>
              </a>
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

<?php $this->load->view('front/common/footer_form') ?>
<?php $this->load->view('front/common/footer') ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>
  AOS.init();
</script>

</body> 
<?php $this->load->view('front/common/script') ?>
</html>
