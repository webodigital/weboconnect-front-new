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

<section class="section_padding javascript_frmwrk_banner">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-md-6">
                <h1 class="fs-30 fw-600 text-white">JavaScript FrameWork</h1>
                <h6 class="fs-18 fw-500 text-white">Updated and advanced technologies are the most important aspect of IT industry. Here, at WebOConnect, we are proficient in working with JavaScript Framework. A JavaScript framework is an application framework written in JavaScript.</h6>
                <h6 class="fs-18 fw-500 text-white">It differs from a JavaScript library in its control flow: a library offers functions to be called by its parent code, whereas a framework defines the entire application design. Thanks to our experience and expertise, we have become one of the most prominent players when it comes to working with JavaScript Framework.</h6>
            </div>
            <div class="col-md-6">
                <img class="w-100" src="<?= base_url() ?>assets/images/javascript_frm/javascript.webp" alt="JavaScript FrameWork">
            </div>
        </div>
    </div>
</section>

<section class="section_padding technologies_frameworks">
  <div class="container">
    <div class="row justify-content-between align-items-center g-4">
      <div class="col-lg-4 col-md-12 col-12" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200">
        <h3 class="fs-24 fw-600 mb-3">Key Java Script Technology Competence</h3>
        <ul class="nav nav-flex justify-content-center nav-pills vertical_tab_nav gap-2" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="v-pills-frameworks-tab" data-bs-toggle="pill" data-bs-target="#v-pills-frameworks" type="button" role="tab" aria-controls="v-pills-frameworks" aria-selected="true">Frameworks</button>
          </li>
        
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="v-pills-CMS-tab" data-bs-toggle="pill" data-bs-target="#v-pills-CMS" type="button" role="tab" aria-controls="v-pills-CMS" aria-selected="true">Content Management Systems</button>
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

      


      <!-- Content Area -->
      <div class="col-lg-7 col-md-12 col-12" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200">
        
        <div class="tab-content" id="myTabContent">
          <!-- SaaS Development Content -->
            <div class="tab-pane fade show active" id="v-pills-frameworks" role="tabpanel" aria-labelledby="v-pills-frameworks-tab" tabindex="0">
                <div class="content-area" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200">
                    <img src="<?=base_url()?>assets/images/javascript_frm/frameworks.webp" alt="FRAMEWORKS" class="content-image w-100 rounded-5">
                    <div class="content-overlay text-start">
                        <p class="fs-16 fw-600 m-0">Angular • React • Node • Vue • Backbone</p>
                    </div>
                </div>
            </div>

          <!-- Additional Content (for each tab) -->
          <!-- Repeat the structure below for each tab -->
            <div class="tab-pane fade" id="v-pills-CMS" role="tabpanel" aria-labelledby="v-pills-CMS-tab" tabindex="0">
                <div class="content-area">
                    <img src="<?=base_url()?>assets/images/javascript_frm/cms.webp" alt="Content Management Systems" class="content-image w-100 rounded-5">
                    <div class="content-overlay text-start">
                        <p class="fs-16 fw-600 m-0">Ghost • KeystoneJS • Strapi • enduro.js • ApostropheCMS</p>
                    </div>
                </div>
            </div>
            
            <div class="tab-pane fade" id="v-pills-data-management" role="tabpanel" aria-labelledby="v-pills-data-management-tab" tabindex="0">
                <div class="content-area">
                    <img src="<?=base_url()?>assets/images/javascript_frm/data_management.webp" alt="data management" class="content-image w-100 rounded-5">
                    <div class="content-overlay text-start">
                        <p class="fs-16 fw-600 m-0">RDBMS: MySQL • PostgreSQL • Amazon RDS NoSQL: MongoDB • Amazon DynamoDB Caching: Memcached • Redis • Amazon ElastiCache Searching: Elasticsearch • Amazon CloudSearch</p>
                    </div>
                </div>
            </div>
          
            <div class="tab-pane fade" id="v-pills-queue" role="tabpanel" aria-labelledby="v-pills-queue-tab" tabindex="0">
                <div class="content-area">
                    <img src="<?=base_url()?>assets/images/javascript_frm/queue.webp" alt="Queue" class="content-image w-100 rounded-5">
                    <div class="content-overlay text-start">
                        <p class="fs-16 fw-600 m-0">RabbitMQ • Amazon SQS</p>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="v-pills-CCP" role="tabpanel" aria-labelledby="v-pills-CCP-tab" tabindex="0">
                <div class="content-area">
                    <img src="<?=base_url()?>assets/images/javascript_frm/ccp.webp" alt="Cloud Computing Platforms" class="content-image w-100 rounded-5">
                    <div class="content-overlay text-start">
                        <p class="fs-16 fw-600 m-0">Amazon Web Services (AWS) • Google Cloud</p>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="v-pills-third_party_APIs" role="tabpanel" aria-labelledby="v-pills-third_party_APIs-tab" tabindex="0">
                <div class="content-area">
                    <img src="<?=base_url()?>assets/images/javascript_frm/third_party_APIs.webp" alt="Third-Party APIs" class="content-image w-100 rounded-5">
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



<section class="section_padding bg_azure innovation_with_enterprise">
    <div class="container position-relative" style="z-index:+1;">
        <div class="row justify-content-center g-4">
            <div class="col-11">
                <div class="text-center">
                    <h2 class="fs-30 fw-700 text_brand_color1">Our JavaScript Development Services</h2>
                </div>
            </div>
        </div>
        <div class="row align-items-center g-4 mt-4">
            <div class="col-6 col-md-4">
                <div class="innovation_with_enterprise_card">
                    <h4 class="fs-20 fw-700">Custom JavaScript Development</h4>
                    <h5 class="fs-14 fw-500">We create tailored solutions that meet your unique business requirements, from building feature-rich applications to enhancing existing systems.</h5>
                </div>
            </div>
            <div class="col-6 col-md-4">
                <div class="innovation_with_enterprise_card">
                    <h4 class="fs-20 fw-700">Full-Stack Development</h4>
                    <h5 class="fs-14 fw-500">Our expertise spans the entire stack, using JavaScript frameworks like Node.js for back-end development and React, Angular, or Vue.js for front-end excellence.</h5>
                </div>
            </div>
            <div class="col-6 col-md-4">
                <div class="innovation_with_enterprise_card">
                    <h4 class="fs-20 fw-700">TypeScript Integration</h4>
                    <h5 class="fs-14 fw-500">We incorporate TypeScript to improve code quality, enabling error prevention and scalable development.</h5>
                </div>
            </div>
            <div class="col-6 col-md-4">
                <div class="innovation_with_enterprise_card">
                    <h4 class="fs-20 fw-700">JavaScript Framework Expertise</h4>
                    <h5 class="fs-14 fw-500">We utilize modern frameworks such as React, Angular, Vue.js, and more to create high-performance, maintainable applications.</h5>
                </div>
            </div>
            <div class="col-6 col-md-4">
                <div class="innovation_with_enterprise_card">
                    <h4 class="fs-20 fw-700">Maintenance & Support</h4>
                    <h5 class="fs-14 fw-500">Our team provides ongoing support to keep your JavaScript-based applications updated, secure, and optimized for performance.</h5>
                </div>
            </div>
            <div class="col-6 col-md-4">
                <div class="d-grid">
                    <a href="" class="btn btn-md btn-rounded btn-primary">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section_padding talk_our_experts">
    <div class="container text-white">
        <h3 class="fs-24 fw-700">Want to accelerate JavaScript Development at your company? <br>
        See how we can help.</h3>
        <a href="" class="btn btn-primary btn-rounded mt-4 px-4">Talk To Our Experts</a>
    </div>
</section>

<section class="section_padding ">
    <div class="container">
        <div class="row align-items-center justify-content-between g-4">
            <div class="col-lg-6">
                <div class="b_rds_15 bg_azure p-3">
                    <h3 class="fs-30 fw-700">We are the best when it comes to working with JavaScript Framework.</h3>
                    <p class="fs-16 fw-500">WebOConnect offers a pool of certified JavaScript Framework developers who are well-versed in the technologies and methodologies your project needs to succeed. Our team is highly skilled and knowledgable when it comes to technologies like Angular, React, Native, Node, etc. Our Company has been committed to cultivating collective technical expertise. Through continuous education, mentoring, and training, we have built a unit of highly competent professionals who deliver top-notch web development services.</p>
                    <p class="fs-16 fw-500">Our technical know-how and best practices were instrumental in helping our clients to initiate and transform their online presence. Armed with this experience, we can do the same for you.</p>
                </div>
            </div>
            <div class="col-lg-5">
                <img src="<?= base_url() ?>assets/images/javascript_frm/we_r_best_javascript_worker.webp" alt="The Best SaaS & Enterprise Software Development company">
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
