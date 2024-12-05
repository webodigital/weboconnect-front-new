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



<section class="homeSection1">
  <div class="container"  >
    <div class="row g-3 g-lg-2 align-items-center">
      <!-- Text Content Column -->
      <div class="col-lg-5 col-12" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200">
        <div class="text-center text-lg-start">
          <h1 class="fs-30 fw-700 text-uppercase">Empowering Business Through Technology</h1>
          <p class="fs-20 fw-500">Pioneering customized web and mobile application development with a focus on excellence.</p>
        
          <div class="row g-3 mb-3">
            <div class="col-sm-6 col-6">
              <div class="d-grid">
                <a href="#" class="btn btn-primary btn-md btn-rounded">Schedule a Call</a>
              </div>
            </div>
            <div class="col-sm-6 col-6">
              <div class="d-grid">   
                <a href="<?=base_url()?>case-studies" class="btn btn-outline-primary btn-md btn-rounded View">View Success Stories</a>
              </div>  
            </div>     
          </div>    
        </div>
      </div>       
      <!-- Image Column -->


      <div class="col-lg-3" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200">
        <div class="p-4 pb-0 position-relative h-100 d-lg-flex d-md-none d-none justify-content-lg-end justify-content-md-end justify-content-center align-items-center">
          <img class="max-w-100 hero" src="<?=base_url()?>assets/images/CEO.webp" alt="CEO Of WeboConnect">  
        </div>                          
      </div>  
       <div class="col-lg-4">
        <div class="row g-4 align-items-start justify-content-center">
          <div class="col-auto">
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

          <div class="col-auto">
            <div class="google_ratings_card">
              <img style="" class="w-100" height="80" src="<?=base_url()?>assets/images/weboconnect_assets/google_ratings.webp" alt="google ratings" title="google ratings">
              <div class="d-flex flex-wrap">
                <span>4.7/5</span>
                <span>.</span>
                <span>26 Google reviews</span>
              </div>
            </div>
          </div>

          <div class="col-auto">
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

          <div class="col-auto">
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
          
          <div class="col-auto">
            <div class="google_ratings_card">
                <a target="_blank" href="https://www.trustpilot.com/review/weboconnect.com">
                    <img style="" class="w-100" height="80" src="<?=base_url()?>assets/images/weboconnect_assets/design_rush.webp" alt="trustpilot" title="trustpilot">
                    <div class="d-flex flex-wrap">
                        <span>4.8</span>
                        <span>.</span>
                        <span>(8 Reviews)</span>
                    </div>
                </a>
            </div>
          </div>

        </div>
      </div>
                   
    </div>
  </div>
</section>

<section class="homeSection2 stats-section">
  <div class="container">
    <div class="row justify-content-between g-4">
      <div class="col-lg-3 col-6">
        <div class="stat-card">
          <div class="stat-content text-center">
            <div class="d-flex justify-content-center gap-4 align-items-center">
              <i class="fas fa-users mt-2"></i>
              <div class="stat-number" data-target="200">200+</div>
            </div>
            <p>Global Clients</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="stat-card">
          <div class="stat-content text-center">
          <div class="d-flex justify-content-center gap-4 align-items-center">
            <i class="fas fa-award"></i>
            <div class="stat-number" data-target="8">250+</div>
          </div>
            <p>Successfully Delivered</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="stat-card">
          <div class="stat-content text-center">
            <div class="d-flex justify-content-center gap-4 align-items-center">
              <i class="fas fa-sync-alt"></i>
              <div class="stat-number" data-target="97">8+</div>
            </div>
            <p>Years of Excellence</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-6">
        <div class="stat-card">
          <div class="stat-content text-center">
            <div class="d-flex justify-content-center gap-4 align-items-center">
              <i class="fas fa-tasks"></i>
              <div class="stat-number" data-target="250">97%</div>
            </div>
            <p>Client Retention</p>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>


<section class="homeSection3 section_padding">
  <div class="container">
    <div class="row justify-content-between align-items-center g-4">
      <div class="col-lg-4 col-md-12 col-12" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200">
        <ul class="nav nav-flex justify-content-center nav-pills sidebar gap-2" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="saas-tab1" data-bs-toggle="tab" data-bs-target="#saas1" type="button" role="tab" aria-controls="saas1" aria-selected="true">
              <i class="fas fa-cloud"></i> SaaS Development
            </button>
          </li>
        
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="web-mobile-tab" data-bs-toggle="tab" data-bs-target="#web-mobile1" type="button" role="tab" aria-controls="web-mobile1" aria-selected="false">
              <i class="fas fa-laptop-code"></i> Web & Mobile Application Development
            </button>
          </li>
        
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="healthcare-tab" data-bs-toggle="tab" data-bs-target="#healthcare1" type="button" role="tab" aria-controls="healthcare1" aria-selected="false">
              <i class="fas fa-user-md"></i> Healthcare Staffing App Development
            </button>
          </li>
        
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="maintenance-tab" data-bs-toggle="tab" data-bs-target="#maintenance1" type="button" role="tab" aria-controls="maintenance1" aria-selected="false">
              <i class="fas fa-tools"></i> Maintenance & Support
            </button>
          </li>
          
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="hire-tab1" data-bs-toggle="tab" data-bs-target="#hire1" type="button" role="tab" aria-controls="hire" aria-selected="false">
              <i class="fas fa-users"></i> Hire Dedicated Resources
            </button>
          </li>
        
        </ul>
      </div>


      <!-- Content Area -->
      <div class="col-lg-7 col-md-12 col-12" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200">
        <div class="tab-content" id="myTabContent">
          <!-- SaaS Development Content -->
          <div class="tab-pane fade show active" id="saas1" role="tabpanel" aria-labelledby="saas-tab1">
            <div class="content-area" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200">
              <img src="<?=base_url()?>assets/images/saas.png" alt="SaaS Development" class="content-image w-100 rounded-5">
              <div class="content-overlay text-start">
                <p>Our team specializes in creating seamless and efficient SaaS solutions that redefine how businesses operate. With a focus on precision, reliability, and industry best practices, we deliver systems that drive performance and success.</p>
                <button class="btn btn-outline-primary btn-rounded">View More</button>
                <button class="btn btn-primary btn-rounded">View Portfolio</button>
              </div>
            </div>
          </div>

          <!-- Additional Content (for each tab) -->
          <!-- Repeat the structure below for each tab -->
          <div class="tab-pane fade" id="web-mobile1" role="tabpanel" aria-labelledby="web-mobile-tab1">
            <div class="content-area">
              <img src="<?=base_url()?>assets/images/network.webp" alt="Web & Mobile Application Development" class="content-image w-100 rounded-5">
              <div class="content-overlay text-start">
                <p>Our custom web and mobile applications enhance operational efficiency, improve user interaction, and deliver impactful digital experiences tailored to your business goals and ever-evolving market demands.</p>
                <button class="btn btn-outline-primary btn-rounded">View More</button>
                <button class="btn btn-primary btn-rounded">View Portfolio</button>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="healthcare1" role="tabpanel" aria-labelledby="healthcare1">
            <div class="content-area">
              <img src="<?=base_url()?>assets/images/techno.webp" alt="Healthcare Staffing App Development" class="content-image w-100 rounded-5">
              <div class="content-overlay text-start">
                <p>From recruitment to resource allocation, our healthcare staffing apps optimize every aspect of workforce management, enabling organizations to meet growing demands while focusing on patient care.</p>
                <button class="btn btn-outline-primary btn-rounded">View More</button>
                <button class="btn btn-primary btn-rounded">View Portfolio</button>
              </div>
            </div>
          </div>
          
          <div class="tab-pane fade" id="maintenance1" role="tabpanel" aria-labelledby="maintenance1">
            <div class="content-area">
              <img src="<?=base_url()?>assets/images/tech.webp" alt="Maintenance & Support" class="content-image w-100 rounded-5">
              <div class="content-overlay text-start">
                <p>We provide continuous system monitoring, timely updates, and expert issue resolution, ensuring your digital platforms operate seamlessly with maximum uptime and minimal disruptions.</p>
                <button class="btn btn-outline-primary btn-rounded">View More</button>
                <button class="btn btn-primary btn-rounded">View Portfolio</button>
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="hire1" role="tabpanel" aria-labelledby="hire-tab1">
            <div class="content-area">
              <img src="<?=base_url()?>assets/images/handshake.webp" alt="Hire Dedicated Resources" class="content-image w-100 rounded-5">
              <div class="content-overlay text-start">
                <p>Our dedicated resources provide the focus and technical expertise you need to drive project success, meeting goals faster and delivering results that exceed expectations.</p>
                <button class="btn btn-outline-primary btn-rounded">View More</button>
                <button class="btn btn-primary btn-rounded">View Portfolio</button>
              </div>
            </div>
          </div>

          <!-- Repeat similar structure for each tab -->
        </div>
      </div>
    </div>
  </div>
</section>



<section class="section_padding clients-section  homeSection4">
 <div class="container w-100" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200">
 <h1><b>WE UNDERSTAND OUR CLIENTS</b></h1>
  <div class="row g-5 w-100 justify-content-center mt-2">
    <div class="col-lg-3 col-md-4 col-6">
      <div class="icon-box" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="100" >
          <img class="px-5 mb-3" src="https://weboconnect.com/assets/images/icon/Listen.png" alt="">
          <h5 class="">We Listen and Understand</h5>
          <p class="">Your goals shape our solutions.</p>
        </div>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
        <div class="icon-box" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="100">
          <img class="px-5 mb-3" src="https://weboconnect.com/assets/images/icon/Focus.png" alt="">
          <h5 class="">We Offer Real Solutions</h5>
          <p>Smart ideas that deliver real-world impact.</p>
        </div>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <div class="icon-box" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="100">
        <img class="px-5 mb-3" src="https://weboconnect.com/assets/images/icon/create-stratgies.png" alt=""> 
        <h5 class="">We Prioritize Strategic Thinking</h5>
        <p>Strong foundations lead to stronger outcomes.</p>
        <p></p>
      </div>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <div class="icon-box" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="100">
        <img class="px-5 mb-3" src="https://weboconnect.com/assets/images/icon/Deliver.png" alt="">  
        <h5 class="">We Deliver Without Compromise</h5>
        <p>Results that exceed expectations every time.</p>
      </div>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <div class="icon-box" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="100">
        <img class="px-5 mb-3" src="https://weboconnect.com/assets/images/icon/Teamwork.png" alt="">  
          <h5 class="">We Believe in Unified Efforts</h5>
          <p>Collaboration is key to innovation.</p>
      </div>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <div class="icon-box" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="100">
        <img class="px-5 mb-3" src="https://weboconnect.com/assets/images/icon/Friendly.png" alt="">  
        <h5 class="">We Are Supportive and Accessible</h5>
        <p>Always here to guide and help.</p>
      </div>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <div class="icon-box" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="100">
        <img class="px-5 mb-3" src="https://weboconnect.com/assets/images/icon/logical.png" alt="">
        <h5 class="">We Think Strategically and Logically</h5>
        <p>Balanced approaches to tackle challenges effectively.</p>              
      </div>
    </div>
  <div>

  </div>
 </div>
</section>
<section class="pt-5 tyir_ bg-white">
    <div class="container">
        <div class="row align-items-center justify-content-center g-4">
            <div class="col-lg-8">
                <div class=" text-center text-lg-start">
                    <h2 class="fs-30 fw-700 text_brand_color2">Transform Your Ideas into Reality</h2>
                    <h6 class="fs-18 fw-500 text_brand_color2 mb-3">Dive into the digital era with Weboconnect, where your vision meets our mobile app development expertise. Let's create something extraordinary together and set new benchmarks in the app world.</h6>
                    <a href="" class="btn btn-outline-primary btn-rounded">Contact Us</a>
                </div>
            </div>
            <div class="col-lg-4">
                <img class="w-100" src="<?= base_url() ?>assets/images/mob_app_devl/transform_ur_ideas.webp" alt="Transform Your Ideas into Reality" />
            </div>
        </div>
    </div>
</section>        

<!-- <div class="section_padding testimonials-section  homeSection5" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200">
  <div class="container">   
    <h1>Reviews/Testimonials</h1>                                      
      <h1><b>What Our Clients Say About Us</b></h1>
      <div class="arrow_nav_slider">
        <div class="owl-carousel owl-theme what_our_clients_say_carousel position-relative">
                
          <div class="item">
            <div class="testimonial-item">
              <div class="testimonial-header">
                <img src="<?=base_url()?>assets/images/david.png" alt="Profile Picture">
                <div>
                  <div class="name">XAVIER GOULA</div>
                  <div class="title">Architectural Travel</div>
                </div>
              </div>
                <p class="description text-center">During the project flow we were very pleased by the work of Weboconnect’s business analysts and developers, who demonstrated high level of skills and competence. They made many significant contributions to our products both in terms of functionality and quality.</p>
              <div class="testimonial-rating fs-2">★★★★☆</div>
            </div>
          </div> 
          <div class="item">
            <div class="testimonial-item">
              <div class="testimonial-header">
                <img src="<?=base_url()?>assets/images/david.png" alt="Profile Picture">
                <div>
                  <div class="name">XAVIER GOULA</div>
                  <div class="title">Architectural Travel</div>
                </div>
              </div>
                <p class="description text-center">During the project flow we were very pleased by the work of Weboconnect’s business analysts and developers, who demonstrated high level of skills and competence. They made many significant contributions to our products both in terms of functionality and quality.</p>
              <div class="testimonial-rating fs-2">★★★★☆</div>
            </div>
          </div>       
          <div class="item">
            <div class="testimonial-item">
              <div class="testimonial-header">
                <img src="<?=base_url()?>assets/images/david.png" alt="Profile Picture">
                <div>
                  <div class="name">XAVIER GOULA</div>
                  <div class="title">Architectural Travel</div>
                </div>
              </div>
                <p class="description text-center">During the project flow we were very pleased by the work of Weboconnect’s business analysts and developers, who demonstrated high level of skills and competence. They made many significant contributions to our products both in terms of functionality and quality.</p>
              <div class="testimonial-rating fs-2">★★★★☆</div>
            </div>
          </div>      
          <div class="item">
            <div class="testimonial-item">
              <div class="testimonial-header">
                <img src="<?=base_url()?>assets/images/david.png" alt="Profile Picture">
                <div>
                  <div class="name">XAVIER GOULA</div>
                  <div class="title">Architectural Travel</div>
                </div>
              </div>
                <p class="description text-center">During the project flow we were very pleased by the work of Weboconnect’s business analysts and developers, who demonstrated high level of skills and competence. They made many significant contributions to our products both in terms of functionality and quality.</p>
              <div class="testimonial-rating fs-2">★★★★☆</div>
            </div>
          </div>      
          <div class="item">
            <div class="testimonial-item">
              <div class="testimonial-header">
                <img src="<?=base_url()?>assets/images/david.png" alt="Profile Picture">
                <div>
                  <div class="name">XAVIER GOULA</div>
                  <div class="title">Architectural Travel</div>
                </div>
              </div>
                <p class="description text-center">During the project flow we were very pleased by the work of Weboconnect’s business analysts and developers, who demonstrated high level of skills and competence. They made many significant contributions to our products both in terms of functionality and quality.</p>
              <div class="testimonial-rating fs-2">★★★★☆</div>
            </div>
          </div>

        </div>
      </div>
  </div>   
</div> -->

<section class="section_padding tech-stack-section homeSection6" >
  <div class="container">
    <h1>We Master Every Corner of Technology</h1>
    <p>With expertise in almost every programming language, our 4,000+ team delivers dynamic solutions that align with modern business demands.</p>
    <div class="row g-4 my-5">

      <div class="col-lg-3 col-sm-6 col-6">
        <div class="tech-item text-center"  data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="400" >
          <img src="https://img.icons8.com/windows/32/node-js.png" alt="Node Js Logo">
          <p>Node Js</p>   
        </div>
      </div>
      
      <div class="col-lg-3 col-sm-6 col-6">
        <div class="tech-item text-center">
          <img src="https://img.icons8.com/external-kmg-design-flat-kmg-design/32/external-atom-education-kmg-design-flat-kmg-design.png" alt="React Js Logo">
          <p>React Js</p>
        </div>
      </div>

      <div class="col-lg-3 col-sm-6 col-6">
        <div class="tech-item text-center">
          <img src="https://img.icons8.com/fluency/48/laravel.png" alt="Laravel Logo">
          <p>Laravel</p>
        </div>
      </div>

      <div class="col-lg-3 col-sm-6 col-6">
        <div class="tech-item text-center">
          <img src="https://img.icons8.com/color/48/python--v1.png" alt="Python Logo">
          <p>Python</p>
        </div>
      </div>

      <div class="col-lg-3 col-sm-6 col-6">
        <div class="tech-item text-center">
          <img src="https://img.icons8.com/color/48/flutter.png" alt="Flutter Logo">
          <p>Flutter</p>
        </div>
      </div>

      <div class="col-lg-3 col-sm-6 col-6">
        <div class="tech-item text-center">
          <img src="https://img.icons8.com/3d-fluency/94/java-coffee-cup-logo.png" alt="Java Logo">
          <p>Java</p>
        </div>
      </div>

      <div class="col-lg-3 col-sm-6 col-6">
        <div class="tech-item text-center">
          <img src="https://img.icons8.com/fluency/48/swift.png" alt="Swift Logo">
          <p>Swift</p>
        </div>
      </div>

      <div class="col-lg-3 col-sm-6 col-6">
        <div class="tech-item text-center">
          <img src="https://img.icons8.com/external-tal-revivo-color-tal-revivo/24/external-codeigniter-is-an-open-source-software-rapid-development-web-framework-logo-color-tal-revivo.png" alt="Codeigniter Logo">
          <p>Codeigniter</p>
        </div>
      </div>

      <div class="col-lg-3 col-sm-6 col-6">
        <div class="tech-item text-center">
          <img src="https://img.icons8.com/external-vectorslab-glyph-vectorslab/50/external-29-data-science-and-big-data-vectorslab-glyph-vectorslab.png" alt="Artificial Intelligence Logo">
          <p>Artificial Intelligence</p>
        </div>
      </div>

      <div class="col-lg-3 col-sm-6 col-6">
        <div class="tech-item text-center">
          <img src="https://img.icons8.com/external-soft-fill-juicy-fish/60/external-machine-voice-technology-soft-fill-soft-fill-juicy-fish.png" alt="Machine Learning Logo">
          <p>Machine Learning</p>
        </div>
      </div>

      <div class="col-lg-3 col-sm-6 col-6">
        <div class="tech-item text-center">
          <img src="https://img.icons8.com/external-tal-revivo-color-tal-revivo/24/external-kotlin-a-cross-platform-statically-typed-general-purpose-programming-language-with-type-inference-logo-color-tal-revivo.png" alt="Kotlin Logo">
          <p>Kotlin</p>
        </div>
      </div>

      <div class="col-lg-3 col-sm-6 col-6">
        <div class="tech-item text-center">
          <img src="https://img.icons8.com/cute-clipart/64/react-native.png" alt="React Native Logo">
          <p>React Native</p>
        </div>
      </div>

    </div>

    <button data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="100" class="btn btn-light fs-18 fw-600 px-5 btn-rounded">Discuss Your Project</button>
  </div>

</section>

<section id="gallery" class="section_padding homeSection7 container" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="400" >
  <div class="text-center mb-4">
    <h3 class="fs-30 fw-600">UNIQUE DESIGNS. OUTSTANDING SERVICES</h3>
    <p class="fs-20 fw-400 text_brand_color2">When excellence matters, choose WebOConnect. We combine creativity and precision to deliver superior web and mobile solutions, tailored for your success.</p>
  </div>
  
  <?php $this->load->view('front/common/portfolio') ?>

  <div class="text-center">
    <a href="#" class="btn btn-primary btn-rounded px-5 my-5">VIEW ALL</a>
  </div>

</section>

<section class="trusted-alliances homeSection8 py-5 text-white">
  <div class="container">
    <h2 class="text-center mb-4">Our Trusted Alliances</h2>
               
    <div class="row align-items-center justify-content-between" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200">
      
      <div class="col-lg-5 mb-4" data-aos="flip-right" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200">
        <div class="text-center text-lg-start">
          <h3>Your Trust, Our Strength</h3>
          <p class="my-4">Every partnership reflects the trust and confidence our clients place in us. Together, we create impactful solutions that inspire growth and pave the way for long-term success.</p>
          <div class="d-none d-lg-block">
          <a class="btn btn-light btn-rounded px-4 mt-3 ">Discuss Your Next Project</a>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="row text-center align-items-center justify-content-center g-4">        
          <div data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200" class="col-6 col-md-4">
            <img src="<?=base_url()?>assets/images/trusted_partners/Trusted Alliances1.png" alt="Angela Simeone" class="alliance-logo img-fluid">
          </div>
          <div data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200" class="col-6 col-md-4">
            <img src="<?=base_url()?>assets/images/trusted_partners/Trusted Alliances2.jpg" alt="One Hope" class="alliance-logo img-fluid">
          </div>
          <div data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200" class="col-6 col-md-4">
            <img src="<?=base_url()?>assets/images/trusted_partners/Trusted Alliances3.svg" alt="Pro Rider" class="alliance-logo img-fluid">
          </div>
          <div data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200" class="col-6 col-md-4">
            <img src="<?=base_url()?>assets/images/trusted_partners/Trusted Alliances4.jpg" alt="LuLu Diamonds" class="alliance-logo img-fluid">
          </div>
          <div data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200" class="col-6 col-md-4">
            <img src="<?=base_url()?>assets/images/trusted_partners/Trusted Alliances5.svg" alt="Philcoin" class="alliance-logo img-fluid">
          </div>
          <div data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200" class="col-6 col-md-4">
            <img src="<?=base_url()?>assets/images/trusted_partners/Trusted Alliances6.svg" alt="Wallet Cab" class="alliance-logo img-fluid">
          </div>
          <div data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200" class="col-6 col-md-4">
            <img src="<?=base_url()?>assets/images/trusted_partners/Trusted Alliances7.svg" alt="Venturewell" class="alliance-logo img-fluid">
          </div>
          <div data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200" class="col-6 col-md-4">
            <img src="<?=base_url()?>assets/images/trusted_partners/Trusted Alliances8.svg" alt="Nurseify" class="alliance-logo img-fluid">
          </div>
          <div data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200" class="col-6 col-md-4">
            <img src="<?=base_url()?>assets/images/trusted_partners/Trusted Alliances9.svg" alt="ICNA" class="alliance-logo img-fluid">
          </div>
        </div>
      </div>
      <div class="col-12 text-center mt-3 d-clock d-lg-none">
        <a class="btn btn-light btn-rounded px-4">Discuss Your Next Project</a>
      </div>

    </div>
  </div>
</section>

<section class="why-choose-us homeSection9 py-5">
  <div class="container">
    <h1 class="text-center"><b>Why Trust Us?</b></h1>
    <div class="row justify-content-center gx-4 accordion mt-5" id="whyChooseAccordion">
      <!-- First Column -->
      <div class="col-md-6">
        <div data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200" class="accordion-item mb-4">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button fs-4 collapsed rounded-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
              <i class="fas fa-users me-2"></i>Deep Expertise
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#whyChooseAccordion">
            <div class="accordion-body fs-4">Pioneering innovative solutions with technical excellence.</div>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200" class="accordion-item mb-4">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed fs-4 rounded-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              <i class="fas fa-clock me-2"></i>Round-the-Clock Communication
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#whyChooseAccordion">
            <div class="accordion-body fs-4">We’re here for you, 24/7.</div>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200" class="accordion-item mb-4">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed fs-4 rounded-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              <i class="fas fa-heart me-2"></i>Proven Results
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#whyChooseAccordion">
            <div class="accordion-body fs-4">A portfolio that speaks for itself.</div>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200" class="accordion-item mb-4">
          <h2 class="accordion-header" id="headingFour">
            <button class="accordion-button collapsed fs-4 rounded-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
              <i class="fas fa-lightbulb me-2"></i>Strategic Technical Insights
            </button>
          </h2>
          <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#whyChooseAccordion">
            <div class="accordion-body fs-4">Every solution is tailored for impact.</div>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200" class="accordion-item mb-4">
          <h2 class="accordion-header" id="headingFive">
            <button class="accordion-button collapsed fs-4 rounded-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
              <i class="fas fa-dollar-sign me-2"></i>Efficient & Affordable
            </button>
          </h2>
          <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#whyChooseAccordion">
            <div class="accordion-body fs-4">Smart solutions for your time and money.</div>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200" class="accordion-item mb-4">
          <h2 class="accordion-header" id="headingSix">
            <button class="accordion-button collapsed fs-4 rounded-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
              <i class="fas fa-briefcase me-2"></i>Diverse Capabilities
            </button>
          </h2>
          <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#whyChooseAccordion">
            <div class="accordion-body fs-4">From ideation to execution, we do it all.</div>
          </div>
        </div>
      </div>
      
      <!-- Second Column -->
      <div class="col-md-6">
        <div data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200" class="accordion-item mb-4">
          <h2 class="accordion-header" id="headingSeven">
            <button class="accordion-button collapsed fs-4 rounded-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
              <i class="fas fa-users-cog me-2"></i>Bold Leadership
            </button>
          </h2>
          <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#whyChooseAccordion">
            <div class="accordion-body fs-4">Transformative strategies from experienced visionaries.</div>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200" class="accordion-item mb-4">
          <h2 class="accordion-header" id="headingEight">
            <button class="accordion-button collapsed fs-4 rounded-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
              <i class="fas fa-cogs me-2"></i>Industry Knowledge
            </button>
          </h2>
          <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#whyChooseAccordion">
            <div class="accordion-body fs-4">Specialized solutions for every domain.</div>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200" class="accordion-item mb-4">
          <h2 class="accordion-header" id="headingNine">
            <button class="accordion-button collapsed fs-4 rounded-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
              <i class="fas fa-tasks me-2"></i>Decades of Expertise
            </button>
          </h2>
          <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#whyChooseAccordion">
            <div class="accordion-body fs-4">A history of consistent success.</div>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200" class="accordion-item mb-4">
          <h2 class="accordion-header" id="headingTen">
            <button class="accordion-button collapsed fs-4 rounded-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
              <i class="fas fa-thumbs-up me-2"></i>Inspired Team
            </button>
          </h2>
          <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#whyChooseAccordion">
            <div class="accordion-body fs-4">Passionate experts ready to innovate.</div>
          </div>
        </div> 
      </div>

      <div class="col-md-6"> 
        <div data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200" class="accordion-item mb-4">
          <h2 class="accordion-header" id="headingEleven">
            <button class="accordion-button collapsed fs-4 rounded-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
              <i class="fas fa-thumbs-up me-2"></i>Personalized Flexibility
            </button>
          </h2>
          <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven" data-bs-parent="#whyChooseAccordion">
            <div class="accordion-body fs-4">Your needs define our approach.</div>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200" class="accordion-item mb-4">
          <h2 class="accordion-header" id="headingTwelve">
            <button class="accordion-button collapsed fs-4 rounded-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
              <i class="fas fa-thumbs-up me-2"></i>Smart Management
            </button>
          </h2>
          <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve" data-bs-parent="#whyChooseAccordion">
            <div class="accordion-body fs-4">Delivering clarity and results, every time.</div>
          </div>
        </div> 
      </div>

      <div class="col-md-6"> 
        <div data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200" class="accordion-item mb-4">
          <h2 class="accordion-header" id="headingThirteen">
            <button class="accordion-button collapsed fs-4 rounded-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
              <i class="fas fa-thumbs-up me-2"></i>Result-Oriented Project Managers
            </button>
          </h2>
          <div id="collapseThirteen" class="accordion-collapse collapse" aria-labelledby="headingThirteen" data-bs-parent="#whyChooseAccordion">
            <div class="accordion-body fs-4">Focusing only on what matters—your success.</div>
          </div>
        </div>  
      </div>

      <div class="col-md-6"> 
        <div data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200" class="accordion-item mb-4">
          <h2 class="accordion-header" id="headingFourteen">
            <button class="accordion-button collapsed fs-4 rounded-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
              <i class="fas fa-thumbs-up me-2"></i>Affordable Excellence
            </button>
          </h2>
          <div id="collapseFourteen" class="accordion-collapse collapse" aria-labelledby="headingFourteen" data-bs-parent="#whyChooseAccordion">
            <div class="accordion-body fs-4">Delivering exceptional value within your budget.</div>
          </div>
        </div>  
      </div>



      <div class="col-md-6"> 
        <div data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200" class="accordion-item mb-4">
          <h2 class="accordion-header" id="headingFifteen">
            <button class="accordion-button collapsed fs-4 rounded-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">
              <i class="fas fa-thumbs-up me-2"></i>Attention That Matters
            </button>
          </h2>
          <div id="collapseFifteen" class="accordion-collapse collapse" aria-labelledby="headingFifteen" data-bs-parent="#whyChooseAccordion">
            <div class="accordion-body fs-4">Your project is always our top priority.</div>
          </div>
        </div>  
      </div>


      <div class="col-md-6"> 
        <div data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200" class="accordion-item mb-4">
          <h2 class="accordion-header" id="headingSixteen">
            <button class="accordion-button collapsed fs-4 rounded-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSixteen" aria-expanded="false" aria-controls="collapseSixteen">
              <i class="fas fa-thumbs-up me-2"></i>Cutting-Edge Technology
            </button>
          </h2>
          <div id="collapseSixteen" class="accordion-collapse collapse" aria-labelledby="headingSixteen" data-bs-parent="#whyChooseAccordion">
            <div class="accordion-body fs-4">Solutions powered by the latest innovations.</div>
          </div>
        </div>  
      </div>

    </div>
  </div>
</section>


<div class="industries-section">
  <div class="container">
    <h2 class="fs-30 fw-600 text-center text-white mb-4">Industries We Serve</h2>
    <div class="row">
        <!-- Healthcare Card -->
        <div class="col-md-3 col-sm-6 col-6 mb-4" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200">
            <div class="industry-card">
                <img src="<?=base_url()?>assets/images/icons/dr.png" alt="Healthcare Icon">
                <p>Healthcare</p>
            </div>
        </div>
        
        <!-- Finance Card -->
        <div class="col-md-3 col-sm-6 col-6 mb-4" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200">
            <div class="industry-card">
                <img src="<?=base_url()?>assets/images/icons/business.png" alt="Finance Icon">
                <p>Finance</p>
            </div>
        </div>
        
        <!-- Retail & E-commerce Card -->
        <div class="col-md-3 col-sm-6 col-6 mb-4" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200">
            <div class="industry-card">
                <img src="<?=base_url()?>assets/images/icons/ecommerce-website.png" alt="Retail & E-commerce Icon">
                <p>Retail & E-commerce</p>
            </div>
        </div>
        
        <!-- Education Card -->
        <div class="col-md-3 col-sm-6 col-6 mb-4" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200">
            <div class="industry-card">
                <img src="<?=base_url()?>assets/images/icons/education.png" alt="Education Icon">
                <p>Education</p>
            </div>
        </div>
        
        <!-- Travel & Tourism Card -->
        <div class="col-md-3 col-sm-6 col-6 mb-4" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200">
            <div class="industry-card">
                <img src="<?=base_url()?>assets/images/icons/travel.png" alt="Travel & Tourism Icon">
                <p>Travel & Tourism</p>
            </div>
        </div>
        
        <!-- Real Estate Card -->
        <div class="col-md-3 col-sm-6 col-6 mb-4" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200">
            <div class="industry-card">
                <img src="<?=base_url()?>assets/images/icons/home.png" alt="Real Estate Icon">
                <p>Real Estate</p>
            </div>
        </div>
        
        <!-- Media & Entertainment Card -->
        <div class="col-md-3 col-sm-6 col-6 mb-4" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200">
            <div class="industry-card">
                <img src="<?=base_url()?>assets/images/icons/avatar.png" alt="Media & Entertainment Icon">
                <p>Media & Entertainment</p>
            </div>
        </div>
        
        <!-- Automotive Card -->
        <div class="col-md-3 col-sm-6 col-6 mb-4" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200">
            <div class="industry-card">
                <img src="<?=base_url()?>assets/images/icons/car_svg.png" alt="Automotive Icon">
                <p>Automotive</p>
            </div>
        </div>
        
        <div class="col-md-3 col-sm-6 col-6 mb-4" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200">
            <div class="industry-card">
                <img src="<?=base_url()?>assets/images/icons/lifestyle.png" alt="Lifestyle">
                <p>Lifestyle</p>
            </div>
        </div>
        
        <!-- Real Estate Card -->
        <div class="col-md-3 col-sm-6 col-6 mb-4" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200">
            <div class="industry-card">
                <img src="<?=base_url()?>assets/images/icons/productivity.png" alt="Productivity">
                <p>Productivity</p>
            </div>
        </div>
        
        <!-- Media & Entertainment Card -->
        <div class="col-md-3 col-sm-6 col-6 mb-4" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200">
            <div class="industry-card">
                <img src="<?=base_url()?>assets/images/icons/beauty.png" alt="Beauty Icon">
                <p>Beauty</p>
            </div>
        </div>
        
        <!-- Automotive Card -->
        <div class="col-md-3 col-sm-6 col-6 mb-4" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200">
            <div class="industry-card">
            <img src="<?= base_url() ?>/assets/images/icons/communication.png" alt="Communication">
                <p>Communication</p>
            </div>
        </div>
    </div>
    <div class="text-center mt-4">
        <button class="btn btn-custom">Discuss Your Project</button>
    </div>
  </div>
</div>

<section class="section_padding">
  <div class="container">
    <h2 class="fs-30 fw-700 text-uppercase text-center">OUR LATEST BLOGS</h2>
    <div class="row justify-content-center g-4 mt-5">
        <div class="col-lg-4 col-sm-6">
            <div class="blogs_card">
                <img class="w-100" src="<?= base_url() ?>assets/images/blogs/blogs_img5.webp" alt="blogs images" />
                <div class="blogs_card_content">
                    <small class="fs-12 fw-400">04 oct 2024</small>
                    <h4 class="fs-18 fw-600">How to Build a Scalable Web
                    Application</h4>
                    <p class="fs-14 fw-400">In this digital world, any business organization requires scalable web applications that erfectly with its user base. Whenever an application fails...</p>
                    <a class="fs-14 fw-500" href="<?= base_url() ?>blog-details">Read More</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6">
            <div class="blogs_card">
                <img class="w-100" src="<?= base_url() ?>assets/images/blogs/blogs_img4.webp" alt="blogs images" />
                <div class="blogs_card_content">
                    <small class="fs-12 fw-400">03 oct 2024</small>
                    <h4 class="fs-18 fw-600">The Role of APIs in Modern Web
                    Development</h4>
                    <p class="fs-14 fw-400">Applications make today&#39;s world of modern web development more interconnected than ever before. Due to the presence of APIs in web.....</p>
                    <a class="fs-14 fw-500" href="<?= base_url() ?>blog-details">Read More</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6">
            <div class="blogs_card">
                <img class="w-100" src="<?= base_url() ?>assets/images/blogs/blogs_img6.webp" alt="blogs images" />
                <div class="blogs_card_content">
                    <small class="fs-12 fw-400">21 oct 2024</small>
                    <h4 class="fs-18 fw-600">Top 5 Programming Languages
                    for Web Development in 2024</h4>
                    <p class="fs-14 fw-400">As we enter into 2024, web development trends change very rapidly; therefore, when it comes to the choice of a programming language, it will...</p>
                    <a class="fs-14 fw-500" href="<?= base_url() ?>blog-details">Read More</a>
                </div>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>
  AOS.init();
</script>

</body> 
<?php $this->load->view('front/common/script') ?>
</html>
