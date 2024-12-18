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

<section class="section_padding python_framework_banner">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-md-6">
                <h1 class="fs-30 fw-600 text-white">Python FrameWork</h1>
                <h6 class="fs-18 fw-500 text-white">Solid technology background and smooth communication are equally important. Here, at Weboconnect, we are proficient in working with technology stack required by our partners and providing consulting services for developing cost-effective, quick, and quality custom software.</h6>
                <h6 class="fs-18 fw-500 text-white">During the last six years, we have developed countless business software that becomes reliable and indispensable companions for small, medium, and enterprise-size companies. Eastern-Europe location of our R&D center allows us to deliver software and services of a superior quality at a competitive cost.</h6>
            </div>
            <div class="col-md-6">
                <img class="w-100" src="<?= base_url() ?>assets/images/python_framework/python.webp" alt="JavaScript FrameWork">
            </div>
        </div>
    </div>
</section>

<section class="section_padding technologies_frameworks">
  <div class="container">
    <div class="row justify-content-between align-items-center g-4">
      <div class="col-lg-4 col-md-12 col-12" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200">
        <h3 class="fs-24 fw-600 mb-3">Key Python Technology Competence</h3>
        <div class="overflow_x_auto">
            <ul class="scroll_horizontal_m_screen mx-auto nav nav-flex justify-content-center nav-pills vertical_tab_nav gap-2" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="v-pills-frameworks-tab" data-bs-toggle="pill" data-bs-target="#v-pills-frameworks" type="button" role="tab" aria-controls="v-pills-frameworks" aria-selected="true">Frameworks</button>
            </li>
            
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="v-pills-data-management-tab" data-bs-toggle="pill" data-bs-target="#v-pills-data-management" type="button" role="tab" aria-controls="v-pills-data-management" aria-selected="true">Data Management</button>
            </li>
            
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="v-pills-queue-tab" data-bs-toggle="pill" data-bs-target="#v-pills-queue" type="button" role="tab" aria-controls="v-pills-queue" aria-selected="true">Queue</button>
            </li>
            
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="v-pills-CCP-tab" data-bs-toggle="pill" data-bs-target="#v-pills-CCP" type="button" role="tab" aria-controls="v-pills-CCP" aria-selected="true">Cloud Computing Platforms</button>
            </li>
            
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="v-pills-third_party_APIs-tab" data-bs-toggle="pill" data-bs-target="#v-pills-third_party_APIs" type="button" role="tab" aria-controls="v-pills-third_party_APIs" aria-selected="true">Third-Party APIs</button>
            </li>
            
            </ul>
        </div>
      </div>

      


      <!-- Content Area -->
      <div class="col-lg-7 col-md-12 col-12" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200">
        
        <div class="tab-content" id="myTabContent">
          <!-- SaaS Development Content -->
            <div class="tab-pane fade show active" id="v-pills-frameworks" role="tabpanel" aria-labelledby="v-pills-frameworks-tab" tabindex="0">
                <div class="content-area" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200">
                    <img src="<?=base_url()?>assets/images/python_framework/frameworks.webp" alt="FRAMEWORKS" class="content-image w-100 rounded-5">
                    <div class="content-overlay text-start">
                        <p class="fs-16 fw-600 m-0">
                        Django • Flask</p>
                    </div>
                </div>
            </div>
            
            <div class="tab-pane fade" id="v-pills-data-management" role="tabpanel" aria-labelledby="v-pills-data-management-tab" tabindex="0">
                <div class="content-area">
                    <img src="<?=base_url()?>assets/images/python_framework/data_management.webp" alt="data management" class="content-image w-100 rounded-5">
                    <div class="content-overlay text-start">
                        <p class="fs-16 fw-600 m-0">RDBMS: MySQL • PostgreSQL • Amazon RDS NoSQL: MongoDB • Amazon DynamoDB Caching: Memcached • Redis • Amazon ElastiCache Searching: Elasticsearch • Amazon CloudSearch</p>
                    </div>
                </div>
            </div>
          
            <div class="tab-pane fade" id="v-pills-queue" role="tabpanel" aria-labelledby="v-pills-queue-tab" tabindex="0">
                <div class="content-area">
                    <img src="<?=base_url()?>assets/images/python_framework/queue.webp" alt="Queue" class="content-image w-100 rounded-5">
                    <div class="content-overlay text-start">
                        <p class="fs-16 fw-600 m-0">RabbitMQ • Amazon SQS</p>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="v-pills-CCP" role="tabpanel" aria-labelledby="v-pills-CCP-tab" tabindex="0">
                <div class="content-area">
                    <img src="<?=base_url()?>assets/images/python_framework/ccp.webp" alt="Cloud Computing Platforms" class="content-image w-100 rounded-5">
                    <div class="content-overlay text-start">
                        <p class="fs-16 fw-600 m-0">Amazon Web Services (AWS) • Google Cloud</p>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="v-pills-third_party_APIs" role="tabpanel" aria-labelledby="v-pills-third_party_APIs-tab" tabindex="0">
                <div class="content-area">
                    <img src="<?=base_url()?>assets/images/python_framework/third_party_APIs.webp" alt="Third-Party APIs" class="content-image w-100 rounded-5">
                    <div class="content-overlay text-start">
                        <p class="fs-16 fw-600 m-0">Analytics: Google • comScore Payment: PayPal • Stripe • Authorize.Net • Braintree Social: Facebook • Twitter • Youtube • Instagram Geolocation: Google Maps • Bing Maps File storage: Dropbox • ownCloud • Google Drive</p>
                    </div>
                </div>
            </div>

          <!-- Repeat similar structure for each tab -->
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section_padding pg_bnr bg-white back_cover" style="background-image: url('<?= base_url() ?>assets/images/pg_bnr/python_framework.webp');">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="text-center text-lg-start">
                    <h2 class="fs-24 fw-700 text-white">Want to accelerate Python developement at your company? See how we can help.</h2>
                    <a href="<?= base_url() ?>contact" class="btn btn-primary-gradient btn-rounded px-5 mt-4">Talk To Our Experts</a>
                </div>
            </div>
        </div>
    </div>
</section> 


<section class="section_padding ">
    <div class="container">
        <div class="row align-items-center justify-content-between g-4">
            <div class="col-lg-6">
                <div class="b_rds_15 bg_azure p-3">
                    <h3 class="fs-30 fw-700">Why are we the most sought after Python developers?</h3>
                    <p class="fs-16 fw-500">Working with Python is not everybody’s cup of tea. While Python may be an easy language to learn, it takes much of experience to master the same. We have a team of highly efficient Python developers who have experience in working with Frameworks like Django, Pyramid, TurboGas, Web2py Flask, Sanic, CherryPy,etc. Along with Pythin Frameworks, we are also competent with various Data Management tools.</p>
                    <p class="fs-16 fw-500">It’s not just the knowledge but the experience and the ability to work on different frameworks which sets us apart from the rest of Python development companies.</p>
                </div>
            </div>
            <div class="col-lg-5">
                <img src="<?= base_url() ?>assets/images/python_framework/why_sought_ python.webp" alt="The Best SaaS & Enterprise Software Development company">
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
