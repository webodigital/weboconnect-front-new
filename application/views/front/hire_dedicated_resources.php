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
<section class="section_padding hire_dedicated_resources">
  <div class="container"  >
    <div class="row justify-content-between align-items-center g-4">
      <!-- Text Content Column -->
        <div class="col-lg-6 col-12" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200">
            <div class="b_rds_15 bg-white p-4">
            <h1 class="fs-30 fw-700 text_brand_color2">Build Your Dream Team with WebOConnect's Dedicated Resources</h1>
            <ul class="text_brand_color2">
                <li class="fs-20 fw-500">Premium Developers & Designers to Elevate Your Projects</li>
                <li class="fs-20 fw-500">3+ Years of Proven Experience in Diverse Domains</li>
                <li class="fs-20 fw-500">Time Zone-Friendly Support for Maximum Productivity</li>
                <li class="fs-20 fw-500">Budget-Friendly Solutions Starting at $15/Hour</li>
                <li class="fs-20 fw-500">Efficient, Cost-Effective, and Scalable Engagements</li>
                <li class="fs-20 fw-500">Focus on Growth with Our Reliable Experts</li>
            </ul>
            <button class="btn btn-primary-gradient btn-rounded px-4" data-bs-toggle="modal" data-bs-target="#lets_discuss_project_modal">Request 3 Days Free Trial</button>
            </div>
        </div>       

        <div class="col-lg-5">
            <img style="" class="w-100" src="<?=base_url()?>assets/images/hire_dedicated/hdr_bnr.webp" alt="hire dedicated resources" title="hire dedicated resources">
        </div>
                   
    </div>
  </div>

  <div class="container mt-5">
    <div class="row g-3 align-items-start justify-content-between">
        <?php $this->load->view('front/common/all_reviews_ratings') ?>
    </div>
  </div>
</section>


<section class="section_padding best_dedicated_developers">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="text-center">
                    <h2 class="fs-30 fw-600">Partner with us to work with the best dedicated developers in the industry.</h2>
                </div>
            </div>
        </div>

        <div class="row justify-content-end mt-5 g-4">
            <div class="col">
                <div class="our_power_card">
                    <div class="">
                        <h4 class="d-flex fs-30 justify-content-center">
                            <span>
                                <img class="dark" src="<?=base_url()?>assets/images/icons/dark_it_experts.webp" alt="">
                                <img class="light" src="<?=base_url()?>assets/images/icons/it_experts.webp" alt="">
                            </span>
                            <span class="ms-2">100+</span>
                        </h4>
                        <h5 class="fs-18 fw-500">IT Experts</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="our_power_card">
                    <div class="text-center">
                        <h4 class="d-flex fs-30 justify-content-center">
                            <span>
                                <img class="dark" src="<?=base_url()?>assets/images/icons/dark_completed_projects.webp" alt="">
                                <img class="light" src="<?=base_url()?>assets/images/icons/completed_projects.webp" alt="">
                            </span>
                            <span class="ms-2">250+</span>
                        </h4>
                        <h5 class="fs-18 fw-500">Projects</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="our_power_card">
                    <div class="">
                        <h4 class="d-flex fs-30 justify-content-center">
                            <span>
                                <img class="dark" src="<?=base_url()?>assets/images/icons/dark_global_clients.webp" alt="">
                                <img class="light" src="<?=base_url()?>assets/images/icons/global_clients.webp" alt="">
                            </span>
                            <span class="ms-2">200+</span>
                        </h4>
                        <h5 class="fs-18 fw-500">Clients & Partners</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="our_power_card">
                    <div class="text-center">
                        <h4 class="d-flex fs-30 justify-content-center">
                            <span>
                                <img class="dark" src="<?=base_url()?>assets/images/icons/dark_yrs_experiences.webp" alt="">
                                <img class="light" src="<?=base_url()?>assets/images/icons/yrs_experiences.webp" alt="">
                            </span>
                            <span class="ms-2">8+</span>
                        </h4>
                        <h5 class="fs-18 fw-500">Years Of Experiences</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="our_power_card">
                    <div class="">
                        <h4 class="d-flex fs-30 justify-content-center">
                            <span>
                                <img class="dark" src="<?=base_url()?>assets/images/icons/dark_client_retention.webp" alt="">
                                <img class="light" src="<?=base_url()?>assets/images/icons/client_retention.webp" alt="">
                            </span>
                            <span class="ms-2">97%</span>
                        </h4>
                        <h5 class="fs-18 fw-500">Client Retention</h5>
                    </div>
                </div>
            </div>
        </div>
        

    </div>
</section>

<section class="section_padding tech-stack-section homeSection6" >
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-9">
        <h2 class="fs-30 fw-600">We Master Every Corner of Technology</h2>
        <p class="fs-20 fw-300">With expertise in almost every programming language, our 4,000+ team delivers dynamic solutions that align with modern business demands.</p>
      </div>
    </div>
  </div>
  <div class="container d-lg-block d-none">
    <div class="row g-4 g-lg-5 my-5">

      <div class="col-lg-3 col-sm-6 col-6">
        <div class="tech-item text-center">
          <img src="<?=base_url()?>assets/images/icons/nodejs.webp" alt="Node Js Logo">
          <p class="fs-20 fw-600">Node Js</p>   
        </div>
      </div>
      
      <div class="col-lg-3 col-sm-6 col-6">
        <div class="tech-item text-center">
          <img src="<?=base_url()?>assets/images/icons/react.webp" alt="React Js Logo">
          <p class="fs-20 fw-600">React Js</p>
        </div>
      </div>

      <div class="col-lg-3 col-sm-6 col-6">
        <div class="tech-item text-center">
          <img src="<?=base_url()?>assets/images/icons/laravel.webp" alt="Laravel Logo">
          <p class="fs-20 fw-600">Laravel</p>
        </div>
      </div>

      <div class="col-lg-3 col-sm-6 col-6">
        <div class="tech-item text-center">
          <img src="<?=base_url()?>assets/images/icons/python.webp" alt="Python Logo">
          <p class="fs-20 fw-600">Python</p>
        </div>
      </div>

      <div class="col-lg-3 col-sm-6 col-6">
        <div class="tech-item text-center">
          <img src="<?=base_url()?>assets/images/icons/flutter.webp" alt="Flutter Logo">
          <p class="fs-20 fw-600">Flutter</p>
        </div>
      </div>

      <div class="col-lg-3 col-sm-6 col-6">
        <div class="tech-item text-center">
          <img src="<?=base_url()?>assets/images/icons/java.webp" alt="Java Logo">
          <p class="fs-20 fw-600">Java</p>
        </div>
      </div>

      <div class="col-lg-3 col-sm-6 col-6">
        <div class="tech-item text-center">
          <img src="<?=base_url()?>assets/images/icons/swift.webp" alt="Swift Logo">
          <p class="fs-20 fw-600">Swift</p>
        </div>
      </div>

      <div class="col-lg-3 col-sm-6 col-6">
        <div class="tech-item text-center">
          <img src="<?=base_url()?>assets/images/icons/codeigniter.webp" alt="Codeigniter Logo">
          <p class="fs-20 fw-600">Codeigniter</p>
        </div>
      </div>

      <div class="col-lg-3 col-sm-6 col-6">
        <div class="tech-item text-center">
          <img src="<?=base_url()?>assets/images/icons/ai.webp" alt="Artificial Intelligence Logo">
          <p class="fs-20 fw-600">Artificial Intelligence</p>
        </div>
      </div>

      <div class="col-lg-3 col-sm-6 col-6">
        <div class="tech-item text-center">
          <img src="<?=base_url()?>assets/images/icons/machine_learning.webp" alt="Machine Learning Logo">
          <p class="fs-20 fw-600">Machine Learning</p>
        </div>
      </div>

      <div class="col-lg-3 col-sm-6 col-6">
        <div class="tech-item text-center">
          <img src="<?=base_url()?>assets/images/icons/kotlin.webp" alt="Kotlin Logo">
          <p class="fs-20 fw-600">Kotlin</p>
        </div>
      </div>

      <div class="col-lg-3 col-sm-6 col-6">
        <div class="tech-item text-center">
          <img src="<?=base_url()?>assets/images/icons/react.webp" alt="React Native Logo">
          <p class="fs-20 fw-600">React Native</p>
        </div>
      </div>
    </div>
  </div>


  <div class="container d-block d-lg-none">
    <div class="owl-carousel owl-theme single_slider">
      <div class="item">
        <div class="row g-4 my-5">

          <div class="col-lg-3 col-sm-6 col-6">
            <div class="tech-item text-center">
              <img src="<?=base_url()?>assets/images/icons/nodejs.webp" alt="Node Js Logo">
              <p class="fs-20 fw-600">Node Js</p>   
            </div>
          </div>
          
          <div class="col-lg-3 col-sm-6 col-6">
            <div class="tech-item text-center">
              <img src="<?=base_url()?>assets/images/icons/react.webp" alt="React Js Logo">
              <p class="fs-20 fw-600">React Js</p>
            </div>
          </div>

          <div class="col-lg-3 col-sm-6 col-6">
            <div class="tech-item text-center">
              <img src="<?=base_url()?>assets/images/icons/laravel.webp" alt="Laravel Logo">
              <p class="fs-20 fw-600">Laravel</p>
            </div>
          </div>

          <div class="col-lg-3 col-sm-6 col-6">
            <div class="tech-item text-center">
              <img src="<?=base_url()?>assets/images/icons/python.webp" alt="Python Logo">
              <p class="fs-20 fw-600">Python</p>
            </div>
          </div>


        </div>
      </div>
      <div class="item">
        <div class="row g-4 my-5">

          <div class="col-lg-3 col-sm-6 col-6">
            <div class="tech-item text-center">
              <img src="<?=base_url()?>assets/images/icons/flutter.webp" alt="Flutter Logo">
              <p class="fs-20 fw-600">Flutter</p>
            </div>
          </div>

          <div class="col-lg-3 col-sm-6 col-6">
            <div class="tech-item text-center">
              <img src="<?=base_url()?>assets/images/icons/java.webp" alt="Java Logo">
              <p class="fs-20 fw-600">Java</p>
            </div>
          </div>


          <div class="col-lg-3 col-sm-6 col-6">
            <div class="tech-item text-center">
              <img src="<?=base_url()?>assets/images/icons/swift.webp" alt="Swift Logo">
              <p class="fs-20 fw-600">Swift</p>
            </div>
          </div>

          <div class="col-lg-3 col-sm-6 col-6">
            <div class="tech-item text-center">
              <img src="<?=base_url()?>assets/images/icons/codeigniter.webp" alt="Codeigniter Logo">
              <p class="fs-20 fw-600">Codeigniter</p>
            </div>
          </div>

        </div>
      </div>
      <div class="item">
        <div class="row g-4 my-5">

          <div class="col-lg-3 col-sm-6 col-6">
            <div class="tech-item text-center">
              <img src="<?=base_url()?>assets/images/icons/ai.webp" alt="Artificial Intelligence Logo">
              <p class="fs-20 fw-600">Artificial Intelligence</p>
            </div>
          </div>

          <div class="col-lg-3 col-sm-6 col-6">
            <div class="tech-item text-center">
              <img src="<?=base_url()?>assets/images/icons/machine_learning.webp" alt="Machine Learning Logo">
              <p class="fs-20 fw-600">Machine Learning</p>
            </div>
          </div>

          <div class="col-lg-3 col-sm-6 col-6">
            <div class="tech-item text-center">
              <img src="<?=base_url()?>assets/images/icons/kotlin.webp" alt="Kotlin Logo">
              <p class="fs-20 fw-600">Kotlin</p>
            </div>
          </div>

          <div class="col-lg-3 col-sm-6 col-6">
            <div class="tech-item text-center">
              <img src="<?=base_url()?>assets/images/icons/react.webp" alt="React Native Logo">
              <p class="fs-20 fw-600">React Native</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <button class="btn btn-light fs-18 fw-600 px-5 btn-rounded mt-3"  data-bs-toggle="modal" data-bs-target="#lets_discuss_project_modal">Discuss Your Project</button>
</section>


<section class="section_padding why_hire_from_weboconnect">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-md-6">
                <h3 class="fs-30 fw-700">Why Hire From Weboconnect?</h3>
                <div class="b_rds_15 bg_dark_gradient p-4 text-white mt-5">
                    <h4 class="fs-30 fw-700">Our Resource Hiring Models</h4>
                    <p class="fs-18 fw-500">WebOConnect offers flexible and tailored hiring models to suit your business needs, ensuring you have the right expertise, the right way.</p>
                </div>
            </div>
            <div class="col-md-6">
                <ul class="whfw_card_list">
                    <li class="">
                        <div class="whfw_card">
                            <div>
                                <h4 class="fs-14 fw-600">Full-Time Hiring</h4>
                                <h6 class="fs-12 fw-400">Hire dedicated resources who work exclusively on your project with complete commitment and guaranteed productivity.</h6>
                            </div>
                        </div>
                    </li>
                    <li class="">
                        <div class="whfw_card">
                            <div>
                                <h4 class="fs-14 fw-600">Part-Time Hiring</h4>
                                <h6 class="fs-12 fw-400">Opt for resources who offer flexibility and focused contributions based on your specific project requirements.</h6>
                            </div>
                        </div>
                    </li>
                    <li class="">
                        <div class="whfw_card">
                            <div>
                                <h4 class="fs-14 fw-600">Hourly Hiring</h4>
                                <h6 class="fs-12 fw-400">Engage skilled professionals on an hourly basis to manage tasks efficiently, providing cost-effective solutions.</h6>
                            </div>
                        </div>
                    </li>
                    <li class="">
                        <div class="whfw_card">
                            <div>
                                <h4 class="fs-14 fw-600">Project-Based Hiring</h4>
                                <h6 class="fs-12 fw-400">Get dedicated resources aligned with specific milestones and deliverables for your project’s success.</h6>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="section_padding bg_dark">
    <div class="container">
        <div class="text-center">
            <h2 class="fs-30 fw-700 text-white">Trusted By Top Companies</h2>
        </div>
    </div>
    <div class="ccontainer-fluid mt-3">
        <?php $this->load->view('front/common/trusted_top_company') ?>
    </div>
</section>


<section class="section_padding sphdd_">
    <div class="container sphdd_container ">
        <div class="row justify-content-center">
            <div class="col-sm-9">
                <div class="text-center text-white">
                    <h2 class="fs-30 fw-600">Effortless Hiring Process for Dedicated Teams</h2>
                    <h6 class="fs-18 fw-500">With WebOConnect, finding and hiring the right developers is easier than ever. Follow our structured process to kick-start your project.</h6>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-4">

            <div class="col-6 col-lg-3">
                <div class="sphdd_card">
                    <div class="d-flex align-items-end justify-content-between">
                        <span class="fs-14 fw-600">Consultation Phase</span>
                        <strong class="fs-60 fw-700">1</strong>
                    </div>
                    <p>Discuss your ideas, project requirements, and goals to set the right foundation.</p>
                </div>
            </div>

            <div class="col-6 col-lg-3">
                <div class="sphdd_card">
                    <div class="d-flex align-items-end justify-content-between">
                        <span class="fs-14 fw-600">Expert Selection</span>
                        <strong class="fs-60 fw-700">2</strong>
                    </div>
                    <p>Browse and select from our highly skilled, pre-vetted talent pool.</p>
                </div>
            </div>

            <div class="col-6 col-lg-3">
                <div class="sphdd_card">
                    <div class="d-flex align-items-end justify-content-between">
                        <span class="fs-14 fw-600">Smooth Onboarding</span>
                        <strong class="fs-60 fw-700">3</strong>
                    </div>
                    <p>Integrate developers into your team with efficient onboarding and communication.</p>
                </div>
            </div>

            <div class="col-6 col-lg-3">
                <div class="sphdd_card">
                    <div class="d-flex align-items-end justify-content-between">
                        <span class="fs-14 fw-600">Support & Engagement</span>
                        <strong class="fs-60 fw-700">4</strong>
                    </div>
                    <p>Stay ahead with ongoing collaboration, guidance, and project support.</p>
                </div>
            </div>

            
        </div>

        <div class="row justify-content-center g-4 mt-5">
            <div class="col-2 d-grid">
                <a href="" class="btn btn-rounded btn-md btn-light px-5">Hire Now</a>
            </div>
        </div>
    </div>
</section>

<section class="section_padding quote_calculator">
    <div class="container qc_container">
        <div class="text-center">
            <h2 class="fs-30 fw-600 text_brand_color2">Quote Calculator</h2>
        </div>
        
        
    <div class="qc_container_card">
        <div class="row">
            <div class="col-md-8">
                <form action="javascript:void(0);" class="p-4">

                    <div class="row g-4 justify-content-between align-items-center">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label" for="">
                                    <span>
                                        <img src="<?=base_url()?>assets/images/icons/skill_requirement.webp" alt="skills">
                                    </span>
                                    Required Skills
                                </label>
                                <select id="development" name="development" class="form-select" required> 
                                    <option value="">Select Required Skills</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label" for="lname">
                                    <span>
                                        <img src="<?=base_url()?>assets/images/icons/code.webp" alt="Technology">
                                    </span>
                                    Technology
                                </label>
                                <select id="development" name="development" class="form-select" required> 
                                    <option value="">Select Technology </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label" for="">
                                    <span>
                                        <img src="<?=base_url()?>assets/images/icons/experience_level.webp" alt="Experience Level">
                                    </span>
                                    Experience Level
                                </label>
                                <div class="row g-3">
                                    <div class="col d-grid">
                                        <input type="radio" class="btn-check" name="experience_level" id="junior" autocomplete="off" checked>
                                        <label class="btn b_rds_10 btn-light btn-secondary" for="junior">Junior</label>
                                    </div>
                                    <div class="col d-grid">
                                        <input type="radio" class="btn-check" name="experience_level" id="mid_level" autocomplete="off">
                                        <label class="btn b_rds_10 btn-light btn-secondary" for="mid_level">Mid-Level</label>
                                    </div>
                                    <div class="col d-grid">
                                        <input type="radio" class="btn-check" name="experience_level" id="senior" autocomplete="off">
                                        <label class="btn b_rds_10 btn-light btn-secondary" for="senior">Senior</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label" for="">
                                    <span>
                                        <img src="<?=base_url()?>assets/images/icons/clock.webp" alt="Time Zone">
                                    </span>
                                    Time Zone
                                </label>
                                <div class="row g-3">
                                    <div class="col d-grid">
                                        <input type="radio" class="btn-check" name="time_zone" id="indian" autocomplete="off" checked>
                                        <label class="btn b_rds_10 btn-light btn-secondary" for="indian">Indian</label>
                                    </div>
                                    <div class="col d-grid">
                                        <input type="radio" class="btn-check" name="time_zone" id="UK_Europe" autocomplete="off">
                                        <label class="btn b_rds_10 btn-light btn-secondary" for="UK_Europe">UK/Europe</label>
                                    </div>
                                    <div class="col d-grid">
                                        <input type="radio" class="btn-check" name="time_zone" id="usa" autocomplete="off">
                                        <label class="btn b_rds_10 btn-light btn-secondary" for="usa">USA</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label" for="">
                                    <span>
                                        <img src="<?=base_url()?>assets/images/icons/time_attack.webp" alt="Engagement Model">
                                    </span>
                                    Engagement Model
                                </label>
                                <div class="row g-3">
                                    <div class="col d-grid">
                                        <input type="radio" class="btn-check" name="engagement_model" id="part_time" autocomplete="off" checked>
                                        <label class="btn b_rds_10 btn-light btn-secondary" for="part_time">Part-Time</label>
                                    </div>
                                    <div class="col d-grid">
                                        <input type="radio" class="btn-check" name="engagement_model" id="full_time" autocomplete="off">
                                        <label class="btn b_rds_10 btn-light btn-secondary" for="full_time">Full-Time</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label" for="">
                                    <span>
                                        <img src="<?=base_url()?>assets/images/icons/office_chair.webp" alt="Premises">
                                    </span>
                                    Select Premises
                                </label>
                                <div class="row g-3">
                                    <div class="col d-grid">
                                        <input type="radio" class="btn-check" name="select_premises" id="off_shore_office" autocomplete="off" checked>
                                        <label class="btn b_rds_10 btn-light btn-secondary" for="off_shore_office">Off-Shore Office</label>
                                    </div>
                                    <div class="col d-grid">
                                        <input type="radio" class="btn-check" name="select_premises" id="work_from_home" autocomplete="off">
                                        <label class="btn b_rds_10 btn-light btn-secondary" for="work_from_home">Work From Home</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="form-label" for="">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/contract_period.webp" alt="Premises">
                                            </span>
                                            Contract Period
                                        </label>
                                        <select id="development" name="development" class="form-select" required> 
                                            <option value="">1 Month</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="form-label" for="">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/currency.webp" alt="Premises">
                                            </span>
                                            Currency
                                        </label>
                                        <select id="development" name="development" class="form-select" required> 
                                            <option value="">$ (Dollar)</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label" for="">
                                    Number Of Resources 
                                </label>
                                <div class="row g-3">
                                    <div class="col">
                                        <select id="development" name="development" class="form-select" required> 
                                            <option value="">1</option>
                                        </select>
                                    </div>
                                    <div class="col d-grid">
                                        <a href="" class="btn b_rds_15 btn-primary-gradient">Add To The Team</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <div class="qc_right_card">
                    <div class="p-3 hired_resources_ ">
                        <table class="table bg-transparent">
                            <tbody>
                                <tr>
                                    <td scope="col" class="fs-14 fw-500">Front-end Developer</td>
                                    <td scope="col" class="fs-14 fw-500">1</td>
                                    <td scope="col" class="fs-14 fw-500">$15/Hr</td>
                                    <td scope="col">
                                        <button class="">
                                            <img width="20" src="<?=base_url()?>assets/images/icons/edit.webp" alt="edit">
                                        </button>
                                        <button class="">
                                            <img width="20" src="<?=base_url()?>assets/images/icons/delete.webp" alt="delete">
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <p class="m-0 fs-18 fw-600">Budget per Month</p>
                            </div>
                            <div class="col-6">
                                <div class="budget_per_month">$0</div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="">
                                        <span>
                                            <img src="<?=base_url()?>assets/images/icons/freebies.webp" alt="freebies">
                                        </span>
                                        Freebies
                                    </label>
                                    <div class="freebies_card">
                                        <ul>
                                            <li>1 Full-time Devloper</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center g-3 mt-1">
                            <div class="col-5">
                                <div class="d-grid">
                                    <a href=""  class="btn btn-outline-primary btn-rounded" >Send it Me</a>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="d-grid">
                                    <a href=""  class="btn btn-outline-primary btn-rounded" >Reset</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="container"></div>
</section>


<section class="section_padding bg-white">
    <div class="container data_security_card">
        <div class="row align-items-center g-4">
            <div class="col-md-7">
                <h3 class="fs-30 fw-600">Data Security and NDA</h3>
                <h5 class="fs-16 fw-700">We prioritize your project’s confidentiality and security. All our engagements are backed by strict non-disclosure agreements to ensure your intellectual property is protected.</h5>
            </div>
            <div class="col-md-5 position-relative" style="z-index: +1">
                <img src="<?=base_url()?>assets/images/hire_dedicated/data_security.png" alt="Data Security and NDA">
            </div>
        </div>
    </div>
</section>


<section class="section_padding pg_bnr bg-white back_cover" style="background-image: url('<?= base_url() ?>assets/images/pg_bnr/h_d_r.webp');">
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


<section class="section_padding bg_azure">
    <?php $this->load->view('front/common/our_clients_videos') ?>
</section>


<?php $this->load->view('front/common/footer_form') ?>
<?php $this->load->view('front/common/footer') ?>

</body> 
<?php $this->load->view('front/common/script') ?>





</html>
