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

<section class="section_padding php_framework_banner">
    <div class="container">
        <div class="row align-items-center justify-content-between g-4">
            <div class="col-md-6">
                <h1 class="fs-30 fw-600 text-white">Php FrameWork</h1>
                <h6 class="fs-18 fw-500 text-white">At Weboconnect, we leverage the power of PHP frameworks to deliver efficient, scalable, and secure web applications. Our expert team has extensive experience in working with top-tier PHP frameworks, enabling us to tailor solutions to your specific business needs.</h6>
            </div>
            <div class="col-md-5">
                <img class="w-100" src="<?= base_url() ?>assets/images/php_framework/php.webp" alt="JavaScript FrameWork">
            </div>
        </div>
    </div>
</section>

<section class="section_padding technologies_frameworks">
  <div class="container">
    <div class="row justify-content-between align-items-center g-4">
      <div class="col-lg-4 col-md-12 col-12" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200">
        <h3 class="fs-24 fw-600 mb-3">Key Java Script Technology Competence</h3>
        <div class="overflow_x_auto">
            <ul class="scroll_horizontal_m_screen mx-auto nav nav-flex justify-content-center nav-pills vertical_tab_nav gap-2" id="v-pills-tab" role="tablist" aria-orientation="vertical">
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
      </div>

      


      <!-- Content Area -->
      <div class="col-lg-7 col-md-12 col-12" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200">
        
        <div class="tab-content" id="myTabContent">
          <!-- SaaS Development Content -->
            <div class="tab-pane fade show active" id="v-pills-frameworks" role="tabpanel" aria-labelledby="v-pills-frameworks-tab" tabindex="0">
                <div class="content-area" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200">
                    <img src="<?=base_url()?>assets/images/php_framework/frameworks.webp" alt="FRAMEWORKS" class="content-image w-100 rounded-5">
                    <div class="content-overlay text-start">
                        <p class="fs-16 fw-600 m-0">Angular • React • Node • Vue • Backbone</p>
                    </div>
                </div>
            </div>

          <!-- Additional Content (for each tab) -->
          <!-- Repeat the structure below for each tab -->
            <div class="tab-pane fade" id="v-pills-CMS" role="tabpanel" aria-labelledby="v-pills-CMS-tab" tabindex="0">
                <div class="content-area">
                    <img src="<?=base_url()?>assets/images/php_framework/cms.webp" alt="Content Management Systems" class="content-image w-100 rounded-5">
                    <div class="content-overlay text-start">
                        <p class="fs-16 fw-600 m-0">Ghost • KeystoneJS • Strapi • enduro.js • ApostropheCMS</p>
                    </div>
                </div>
            </div>
            
            <div class="tab-pane fade" id="v-pills-data-management" role="tabpanel" aria-labelledby="v-pills-data-management-tab" tabindex="0">
                <div class="content-area">
                    <img src="<?=base_url()?>assets/images/php_framework/data_management.webp" alt="data management" class="content-image w-100 rounded-5">
                    <div class="content-overlay text-start">
                        <p class="fs-16 fw-600 m-0">RDBMS: MySQL • PostgreSQL • Amazon RDS NoSQL: MongoDB • Amazon DynamoDB Caching: Memcached • Redis • Amazon ElastiCache Searching: Elasticsearch • Amazon CloudSearch</p>
                    </div>
                </div>
            </div>
          
            <div class="tab-pane fade" id="v-pills-queue" role="tabpanel" aria-labelledby="v-pills-queue-tab" tabindex="0">
                <div class="content-area">
                    <img src="<?=base_url()?>assets/images/php_framework/queue.webp" alt="Queue" class="content-image w-100 rounded-5">
                    <div class="content-overlay text-start">
                        <p class="fs-16 fw-600 m-0">RabbitMQ • Amazon SQS</p>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="v-pills-CCP" role="tabpanel" aria-labelledby="v-pills-CCP-tab" tabindex="0">
                <div class="content-area">
                    <img src="<?=base_url()?>assets/images/php_framework/ccp.webp" alt="Cloud Computing Platforms" class="content-image w-100 rounded-5">
                    <div class="content-overlay text-start">
                        <p class="fs-16 fw-600 m-0">Amazon Web Services (AWS) • Google Cloud</p>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="v-pills-third_party_APIs" role="tabpanel" aria-labelledby="v-pills-third_party_APIs-tab" tabindex="0">
                <div class="content-area">
                    <img src="<?=base_url()?>assets/images/php_framework/third_party_APIs.webp" alt="Third-Party APIs" class="content-image w-100 rounded-5">
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
                    <h2 class="fs-30 fw-700 text_brand_color1">Why Choose Our PHP Framework Services?</h2>
                </div>
            </div>
        </div>
        <div class="row align-items-center g-4 mt-4">
            <div class="col-6 col-md-4">
                <div class="innovation_with_enterprise_card">
                    <h4 class="fs-20 fw-700">Rapid Development</h4>
                    <h5 class="fs-14 fw-500">Our frameworks provide pre-built components and libraries, significantly reducing development time.</h5>
                </div>
            </div>
            <div class="col-6 col-md-4">
                <div class="innovation_with_enterprise_card">
                    <h4 class="fs-20 fw-700">Enhanced Security</h4>
                    <h5 class="fs-14 fw-500">Benefit from built-in security features and regular updates to protect your applications.</h5>
                </div>
            </div>
            <div class="col-6 col-md-4">
                <div class="innovation_with_enterprise_card">
                    <h4 class="fs-20 fw-700">Scalability</h4>
                    <h5 class="fs-14 fw-500">Our solutions can easily adapt to growing user bases and increasing data volumes.</h5>
                </div>
            </div>
            <div class="col-6 col-md-4">
                <div class="innovation_with_enterprise_card">
                    <h4 class="fs-20 fw-700">Cost-Effective</h4>
                    <h5 class="fs-14 fw-500">Reduce development and maintenance costs with our efficient frameworks.</h5>
                </div>
            </div>
            <div class="col-6 col-md-4">
                <div class="innovation_with_enterprise_card">
                    <h4 class="fs-20 fw-700">Expert Support</h4>
                    <h5 class="fs-14 fw-500">Our dedicated team offers comprehensive support and maintenance services.</h5>
                </div>
            </div>
            <div class="col-6 col-md-4">
                <div class="d-grid">
                    <a href="<?=base_url()?>contact" class="btn btn-md btn-rounded btn-primary">Contact Us</a>
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
                    <h3 class="fs-30 fw-700">Mastering PHP for Optimal
                    Web Solutions</h3>
                    <p class="fs-16 fw-500">Our team's expertise extends beyond framework knowledge. We're adept at working with various data management tools, ensuring seamless integration and efficient data handling.</p>
                    <p class="fs-16 fw-500">What sets us apart is not just our technical prowess, but our ability to deliver tailored solutions that align with your specific business needs. Our experienced developers can leverage the right tools and techniques to create scalable, secure, and high-performance web applications.</p>
                </div>
            </div>
            <div class="col-lg-5">
                <img src="<?= base_url() ?>assets/images/php_framework/mastering_php.webp" alt="Mastering PHP for Optimal
                    Web Solutions">
            </div>
        </div>
    </div>
</section>

<!-- <section class="section_padding talk_our_experts" >
    <div class="container text-white">
        <div class="row align-items-center">
            <div class="col-md-7">
                <div class="text-center text-md-start">
                    <h3 class="fs-24 fw-700">Let's Build Your Next Project Together</h3>
                    <h6 class="fs-18 fw-500">Ready to take your web development to the next level?</h6>
                    <h6 class="fs-18 fw-500">Contact us today to discuss your PHP development requirements.</h6>
                    <a href="<?=base_url()?>contact" class="btn btn-primary btn-rounded mt-4 px-4">Contact us</a>
                </div>
            </div>
            
            <div class="col-md-5">
                <img src="<?= base_url() ?>assets/images/php_framework/php_.webp" alt="JavaScript FrameWork">
            </div>
        </div>
    </div>
</section> -->

<section class="section_padding pg_bnr bg-white back_cover" style="background-image: url('<?= base_url() ?>assets/images/pg_bnr/php-framework.webp'); min-height:300px;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="text-center text-md-start">
                    <h3 class="fs-24 fw-700 text-white">Let's Build Your Next Project Together</h3>
                    <h6 class="fs-18 fw-500 text-white">Ready to take your web development to the next level?</h6>
                    <h6 class="fs-18 fw-500 text-white">Contact us today to discuss your PHP development requirements.</h6>
                    <a href="<?=base_url()?>contact" class="btn btn-primary btn-rounded mt-4 px-4">Contact us</a>
                </div>
            </div>
        </div>
    </div>
</section>  


<section class="section_padding vsai_">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="text-center">
                    <h2 class="fs-30 fw-700 text-white">Industry Expertise</h2>
                    <h6 class="fs-18 fw-500 text-white mb-3">We believe, in focusing and delivering best-in-class solutions as our esteemed clients need to meet the business objectives. Whether it's a small startup to enterprise-level level organization, We are serving every industry vertical with expertise across the globe.</h6>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-4">
            <div class="col-lg-3 col-6">
                <div class="vsai_card">
                    <span>
                        <img src="<?= base_url() ?>/assets/images/icons/dr.webp" alt="Healthcare">
                    </span>
                    <h5 class="fs-18 fw-500 text_brand_color1 mb-0">Healthcare</h5>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="vsai_card">
                    <span>
                        <img src="<?= base_url() ?>/assets/images/icons/business.webp" alt="Finance">
                    </span>
                    <h5 class="fs-18 fw-500 text_brand_color1 mb-0">Finance</h5>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="vsai_card">
                    <span>
                        <img src="<?= base_url() ?>/assets/images/icons/ecommerce-website.webp" alt="Retail & E-commerce">
                    </span>
                    <h5 class="fs-18 fw-500 text_brand_color1 mb-0">Retail &
                    E-commerce</h5>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="vsai_card">
                    <span>
                        <img src="<?= base_url() ?>/assets/images/icons/education.webp" alt="Education">
                    </span>
                    <h5 class="fs-18 fw-500 text_brand_color1 mb-0">Education</h5>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="vsai_card">
                    <span>
                        <img src="<?= base_url() ?>/assets/images/icons/travel.webp" alt="Travel & Tourism">
                    </span>
                    <h5 class="fs-18 fw-500 text_brand_color1 mb-0">Travel & Tourism</h5>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="vsai_card">
                    <span>
                        <img src="<?= base_url() ?>/assets/images/icons/home.webp" alt="Real Estate">
                    </span>
                    <h5 class="fs-18 fw-500 text_brand_color1 mb-0">Real Estate</h5>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="vsai_card">
                    <span>
                        <img src="<?= base_url() ?>/assets/images/icons/media_entertainment.webp" alt="Media & Entertainment">
                    </span>
                    <h5 class="fs-18 fw-500 text_brand_color1 mb-0">Media & Entertainment</h5>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="vsai_card">
                    <span>
                        <img src="<?= base_url() ?>/assets/images/icons/car_svg.webp" alt="Automotive">
                    </span>
                    <h5 class="fs-18 fw-500 text_brand_color1 mb-0">Automotive</h5>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="vsai_card">
                    <span>
                        <img src="<?= base_url() ?>/assets/images/icons/lifestyle.webp" alt="Lifestyle">
                    </span>
                    <h5 class="fs-18 fw-500 text_brand_color1 mb-0">Lifestyle</h5>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="vsai_card">
                    <span>
                        <img src="<?= base_url() ?>/assets/images/icons/dating.webp" alt="Productivity">
                    </span>
                    <h5 class="fs-18 fw-500 text_brand_color1 mb-0">Productivity</h5>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="vsai_card">
                    <span>
                        <img src="<?= base_url() ?>/assets/images/icons/beauty.webp" alt="Beauty">
                    </span>
                    <h5 class="fs-18 fw-500 text_brand_color1 mb-0">Beauty</h5>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="vsai_card">
                    <span>
                        <img src="<?= base_url() ?>/assets/images/icons/communication.webp" alt="Communication">
                    </span>
                    <h5 class="fs-18 fw-500 text_brand_color1 mb-0">Communication</h5>
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
