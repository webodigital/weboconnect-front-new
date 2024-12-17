<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Weboconnect</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <?php $this->load->view('front/common/styles') ?>
  <!-- ================================================= -->
</head>

<body>

<?php $this->load->view('front/common/header') ?>


<section class="section_padding white_label_partnership_banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="fs-30 fw-600 text-white mb-4">White Label Partnership</h1>
                <h6 class="fs-18 fw-500 text-white mb-4">Want to move ahead with your IT business without spending on technical set up? Then, our White Label Partnership is for you.</h6>
                <h6 class="fs-18 fw-500 text-white mb-4">We come up with an amazing idea that collaborates your branding and our proven technology and team in the same wing. Get everything you need to run your own profitable software business from technical support to development team in a jaw-dropping cost. Sell skillfully developed products under your name and enjoy the benefits.</h6>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-2 col-md-3 d-grid">
                <a href="<?=base_url()?>case-studies" class="btn btn-md btn-light btn-rounded">View Case studies</a>
            </div>
        </div>
    </div>
</section>

<section class="section_padding bg_azure">
    <div class="container">
        <div class="row align-items-center justify-content-between g-4">
            <div class="col-lg-5">
                <img class="w-100" src="<?= base_url() ?>assets/images/white_label_partnership/how_does_partnership.webp" alt="The Best SaaS & Enterprise Software Development company">
            </div>
            <div class="col-lg-6">
                <div class="b_rds_15 bg-white p-3">
                    <h3 class="fs-26 fw-700">How does this partnership move ahead ?</h3>
                    <ul>
                        <li class="fs-18 fw-500">After discussion and mutual agreement, we will sign an Agreement or NDA.</li>
                        <li class="fs-18 fw-500">We will get back to you with our portfolio, team, expertise, presentation, demo, documentation & proposal under your brand name.</li>
                        <li class="fs-18 fw-500">As soon as you get a client and you settle on a certain price with them, we finalize price and payment terms with you.</li>
                        <li class="fs-18 fw-500">We will then start developing and deliver it as per the deal with your client.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>





<section class="section_padding pg_bnr bg-white back_cover back_center" style="background-image: url('<?= base_url() ?>assets/images/pg_bnr/white_label_partnership.webp'); min-height:300px;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="text-center text-md-start">
                    <h3 class="fs-24 fw-700 text-white">Let's Build Your Next Project Together</h3>
                    <h6 class="fs-18 fw-500 text-white">Ready to take your web development to the next level?</h6>
                    <h6 class="fs-18 fw-500 text-white">Contact us today to discuss your PHP development requirements.</h6>
                    <a href="" class="btn btn-primary btn-rounded mt-4 px-4">Contact us</a>
                </div>
            </div>
        </div>
    </div>
</section>  

<section class="section_padding bg_azure">
    <?php $this->load->view('front/common/our_clients_videos') ?>
</section>


<?php $this->load->view('front/common/footer_form') ?>
<?php $this->load->view('front/common/footer') ?>

</body> 
<?php $this->load->view('front/common/script') ?>





</html>
