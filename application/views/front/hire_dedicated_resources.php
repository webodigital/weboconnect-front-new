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
                        <span class="fs-15 fw-600">Consultation Phase</span>
                        <strong class="fs-60 fw-700">1</strong>
                    </div>
                    <p class="fs-12 fw-400">Discuss your ideas, project requirements, and goals to set the right foundation.</p>
                </div>
            </div>

            <div class="col-6 col-lg-3">
                <div class="sphdd_card">
                    <div class="d-flex align-items-end justify-content-between">
                        <span class="fs-15 fw-600">Expert Selection</span>
                        <strong class="fs-60 fw-700">2</strong>
                    </div>
                    <p class="fs-12 fw-400">Browse and select from our highly skilled, pre-vetted talent pool.</p>
                </div>
            </div>

            <div class="col-6 col-lg-3">
                <div class="sphdd_card">
                    <div class="d-flex align-items-end justify-content-between">
                        <span class="fs-15 fw-600">Smooth Onboarding</span>
                        <strong class="fs-60 fw-700">3</strong>
                    </div>
                    <p class="fs-12 fw-400">Integrate developers into your team with efficient onboarding and communication.</p>
                </div>
            </div>

            <div class="col-6 col-lg-3">
                <div class="sphdd_card">
                    <div class="d-flex align-items-end justify-content-between">
                        <span class="fs-15 fw-600">Support & Engagement</span>
                        <strong class="fs-60 fw-700">4</strong>
                    </div>
                    <p class="fs-12 fw-400">Stay ahead with ongoing collaboration, guidance, and project support.</p>
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
                    <form method="post" action="javascript:void(0);" id="quote_calculator" class="p-4">
                        <div class="row g-4 justify-content-between align-items-center">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="">
                                        <span>
                                            <img src="<?=base_url()?>assets/images/icons/skill_requirement.webp" alt="skills">
                                        </span>
                                        Required Skills
                                    </label>
                                    <select id="required_skills" name="required_skills" class="form-select" required> 
                                        <option value="">Select Required Skills</option>
                                        <!-- <option value="Social Media Management">Social Media Management</option>
                                        <option value="Database Management">Database Management</option>
                                        <option value="Coding">Coding</option> -->
                                        <?php foreach ($skills as $skill => $technologies): ?>
                                            <option value="<?= $skill; ?>"><?= $skill; ?></option>
                                        <?php endforeach; ?>
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
                                    <select id="technology" name="technology" class="form-select" required> 
                                        <option value="">Select Technology </option>
                                        <!-- <option value="PHP">PHP</option>
                                        <option value="Angular JS">Angular JS</option>
                                        <option value="React Js">React Js</option>
                                        <option value="Python">Python</option>
                                        <option value="Laravel">Laravel</option> -->
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
                                            <input type="radio" class="btn-check" name="experience_levels" id="junior" value="Junior" autocomplete="off" checked>
                                            <label class="btn b_rds_10 btn-light btn-secondary" for="junior">Junior</label>
                                        </div>
                                        <div class="col d-grid">
                                            <input type="radio" class="btn-check" name="experience_levels" id="mid_level" value="Mid Level" autocomplete="off">
                                            <label class="btn b_rds_10 btn-light btn-secondary" for="mid_level">Mid-Level</label>
                                        </div>
                                        <div class="col d-grid">
                                            <input type="radio" class="btn-check" name="experience_levels" id="senior" value="Senior" autocomplete="off">
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
                                            <input type="radio" class="btn-check" name="time_zone" id="indian" value="Indian" autocomplete="off" checked>
                                            <label class="btn b_rds_10 btn-light btn-secondary" for="indian">Indian</label>
                                        </div>
                                        <div class="col d-grid">
                                            <input type="radio" class="btn-check" name="time_zone" id="UK_Europe" value="UK/Europe" autocomplete="off">
                                            <label class="btn b_rds_10 btn-light btn-secondary" for="UK_Europe">UK/Europe</label>
                                        </div>
                                        <div class="col d-grid">
                                            <input type="radio" class="btn-check" name="time_zone" id="usa" value="USA" autocomplete="off">
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
                                            <input type="radio" class="btn-check" name="select_premises" id="off_shore_office" autocomplete="off" value="Off-Shore Office" checked>
                                            <label class="btn b_rds_10 btn-light btn-secondary" for="off_shore_office">Off-Shore Office</label>
                                        </div>
                                        <div class="col d-grid">
                                            <input type="radio" class="btn-check" name="select_premises" id="work_from_home" autocomplete="off" value="Work From Home" >
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
                                                    <img src="<?=base_url()?>assets/images/icons/contract_period.webp" alt="contract period">
                                                </span>
                                                Contract Period
                                            </label>
                                            <select id="contract_period" name="contract_period" class="form-select" required> 
                                                <option value="1">1 Month</option>
                                                <option value="2">2 Month</option>
                                                <option value="3">3 Month</option>
                                                <option value="4">4 Month</option>
                                                <option value="5">5 Month</option>
                                                <option value="6">6 Month</option>
                                                <option value="7">7 Month</option>
                                                <option value="8">8 Month</option>
                                                <option value="9">9 Month</option>
                                                <option value="10">10 Month</option>
                                                <option value="11">11 Month</option>
                                                <option value="12">12 Month</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label" for="">
                                                <span>
                                                    <img src="<?=base_url()?>assets/images/icons/currency.webp" alt="currency">
                                                </span>
                                                Currency
                                            </label>
                                            <select id="currency" name="currency" class="form-select" required> 
                                                <option value="$">$ (Dollar)</option>
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
                                            <select id="no_of_resources" name="no_of_resources" class="form-select" required> 
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </div>
                                        <div class="col d-grid">
                                            <a href="#" class="btn b_rds_15 btn-primary-gradient" id="addToTeam">Add To The Team</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <p class="description successMessage" style="text-align: left;background: #3c763d;padding: 10px;display:none;color:#fff;"></p>
                    <p class="description errorMessage" style="text-align: left;background: #a94442;padding: 10px;display:none;color:#fff;"></p>
                </div>
                <div class="col-md-4">
                    <div class="qc_right_card">
                        <div class="p-3 hired_resources_ ">
                            <table class="table bg-transparent">
                                <tbody id="teamSummary">
                                    <tr>
                                        <td colspan="4" class="text-center fs-18">No team members added yet.</td>
                                    </tr>
                                    <!-- <tr>
                                        <td colspan="4">
                                            No Team Added!
                                        </td>
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
                                    </tr>-->
                                </tbody>
                            </table>
                        </div>
                        <div class="p-3">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <p class="m-0 fs-18 fw-600">Total Budget <!-- per Month --></p>
                                </div>
                                <div class="col-6">
                                    <div class="budget_per_month" id="total_budget">$0</div>
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
                                                <!-- <li>1 Full-time Devloper</li> -->
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center g-3 mt-1">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label" for="">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/contract_period.webp" alt="contract period">
                                            </span>
                                            Email
                                        </label>
                                        <input type="email" class="faedit form-control form-control-sm budget-input" name="email" id="email" autocomplete="off" value="" style="border: 1px solid #004489 !important;">
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="d-grid">
                                        <button class="btn btn-outline-primary btn-rounded" id="send_it_me">Send it Me</button>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="d-grid">
                                        <a href="#" class="btn btn-outline-primary btn-rounded" id="reset-button">Reset</a>
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


<script>

    // Static mapping of skills to technologies
    const skillsTechnologies = <?= json_encode($skills); ?>;

    // Populate technologies dropdown based on selected skill
    document.getElementById('required_skills').addEventListener('change', function() {
        const selectedSkill = this.value;
        const techDropdown = document.getElementById('technology');

        // Clear the current technologies dropdown
        techDropdown.innerHTML = '<option value="">Select Technology</option>';

        // Populate with relevant technologies
        if (skillsTechnologies[selectedSkill]) {
            skillsTechnologies[selectedSkill].forEach(tech => {
                techDropdown.innerHTML += `<option value="${tech}">${tech}</option>`;
            });
        }
    });

    $(document).ready(function () {

        // Attach hideError to all relevant input fields
        $('input, select').on('focus input', function () {
            hideError(this);
        });

        const localStorageKey = 'teamDetails';

        // Function to retrieve data from localStorage
        function getTeamDetails() {
            return JSON.parse(localStorage.getItem(localStorageKey)) || [];
        }

        // Function to save data to localStorage
        function saveTeamDetails(details) {
            localStorage.setItem(localStorageKey, JSON.stringify(details));
        }

        // Function to display team summary
        function renderTeamSummary() {
            const teamDetails = getTeamDetails();
            let responseHtml = '';
            let totalBudget = 0;
            let currency = '$';
            let freebiesHtml = '';

            teamDetails.forEach((item, index) => {

                // Generate freebies HTML if freebies array is not empty
                if (item.freebies && item.freebies.length > 0) {
                    freebiesHtml = `
                        <ul>
                            ${item.freebies.map(freebie => `<li>${freebie}</li>`).join('')}
                        </ul>
                    `;
                }

                totalBudget += parseFloat(item.final_budget);

                responseHtml += `
                    <tr data-index="${index}">
                        <td scope="col" class="fs-14 fw-500">${item.skills}</td>
                        <td scope="col" class="fs-14 fw-500">${item.resources}</td>
                        <td scope="col" class="fs-14 fw-500 editable" data-index="${index}">
                            ${item.currency}${item.final_budget}
                        </td>
                        <td scope="col">
                            <button class="edit-button btn btn-sm btn-warning" data-index="${index}">
                                <img width="20" src="<?=base_url()?>assets/images/icons/edit.webp" alt="edit">
                            </button>
                            <button class="delete-button btn btn-sm btn-danger" data-index="${index}">
                                <img width="20" src="<?=base_url()?>assets/images/icons/delete.webp" alt="delete">
                            </button>
                        </td>
                    </tr>
                `;
                currency = item.currency;
            });

            /*responseHtml += `
                <tr>
                    <td colspan="2" class="text-end fs-14 fw-700">Total Budget:</td>
                    <td colspan="2" class="fs-14 fw-700">${teamDetails[0]?.currency || ''}${totalBudget.toFixed(2)}</td>
                </tr>
            `;*/

            if(!responseHtml){
                responseHtml = '<tr><td colspan="4" class="text-center">No team members added yet.</td></tr>';
            }

            $('#teamSummary').html(responseHtml);

            $('#total_budget').html(currency+''+totalBudget.toFixed(2));

            $('.freebies_card').html(freebiesHtml);
        }

        // Initialize the team summary
        renderTeamSummary();

        // Inline Edit Budget Price
        $('#teamSummary').on('click', '.editable', function () {
            const index = $(this).data('index');
            const teamDetails = getTeamDetails();
            const currentItem = teamDetails[index];

            // Convert cell to input for inline editing
            const currentBudget = currentItem.final_budget;
            $(this).html(`
                <input type="number" class="faedit form-control form-control-sm budget-input btn b_rds_10 btn-light btn-secondary" value="${currentBudget}" data-index="${index}">
            `);

            // Focus on the input field
            $(this).find('.budget-input').focus();
        });

        // Save updated budget on blur or Enter key
        $('#teamSummary').on('blur keyup', '.budget-input', function (e) {
            if (e.type === 'blur' || (e.type === 'keyup' && e.key === 'Enter')) {
                const index = $(this).data('index');
                const newBudget = parseFloat($(this).val()) || 0;
                const teamDetails = getTeamDetails();

                // Update the budget in localStorage
                teamDetails[index].final_budget = newBudget.toFixed(2);
                saveTeamDetails(teamDetails);

                // Re-render the summary table
                renderTeamSummary();
            }
        });

        // Handle Delete button click
        $('#teamSummary').on('click', '.delete-button', function () {
            const index = $(this).data('index');
            const teamDetails = getTeamDetails();

            teamDetails.splice(index, 1);
            saveTeamDetails(teamDetails);
            renderTeamSummary();
        });

        $('#reset-button').on('click', function (e) {

            e.preventDefault(); // Prevent the default anchor behavior

            // Clear local storage
            localStorage.removeItem('teamDetails');

            // Clear the team summary table
            $('#teamSummary').html('<tr><td colspan="4" class="text-center">No team members added yet.</td></tr>');
            $('#total_budget').html('$0.00');
            $('.freebies_card').html('');
        });

        // Function to show error message after an element
        function showError1(element, message) {
            const errorHtml = `<p class="error-message text-danger error">${message}</p>`;
            if (element.next('.error-message').length === 0) {
                element.after(errorHtml);
            }
        }

        function hideError(input) {
            const errorElement = $(input).next('.error-message');
            if (errorElement.length) {
                errorElement.remove(); // Remove the error message element
            }
            $(input).removeClass('is-invalid'); // Remove invalid styling if any
        }


        // Show error helper function
        function showError(input, message) {
            hideError(input); // Remove any existing errors
            $(input).addClass('is-invalid'); // Add invalid class for styling
            $(input).after(`<span class="error-message text-danger error">${message}</span>`); // Add error message
        }

        // Utility function to validate email
        function isValidEmail(email) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }

        $('#addToTeam').on('click', function (e) {
            e.preventDefault();

            // Clear previous error messages
            $('.error-message').remove();

            let isValid = true;

            // Check Required Skills
            if ($('#required_skills').val() === '') {
                isValid = false;
                showError($('#required_skills'), 'Please select a required skill.');
            }

            // Check Technology
            /*if ($('#technology').val() === '') {
                isValid = false;
                showError($('#technology'), 'Please select a technology.');
            }*/

            // Check Experience Levels
            if (!$('input[name="experience_levels"]:checked').val()) {
                isValid = false;
                showError($('input[name="experience_levels"]').closest('.form-group'), 'Please select an experience level.');
            }

            // Check Time Zone
            if (!$('input[name="time_zone"]:checked').val()) {
                isValid = false;
                showError($('input[name="time_zone"]').closest('.form-group'), 'Please select a time zone.');
            }

            // Check Engagement Model
            if (!$('input[name="engagement_model"]:checked').val()) {
                isValid = false;
                showError($('input[name="engagement_model"]').closest('.form-group'), 'Please select an engagement model.');
            }

            // Check Premises
            if (!$('input[name="select_premises"]:checked').val()) {
                isValid = false;
                showError($('input[name="select_premises"]').closest('.form-group'), 'Please select a premises option.');
            }

            // Check Contract Period
            if ($('#contract_period').val() === '') {
                isValid = false;
                showError($('#contract_period'), 'Please select a contract period.');
            }

            // Check Currency
            if ($('#currency').val() === '') {
                isValid = false;
                showError($('#currency'), 'Please select a currency.');
            }

            // Check Number of Resources
            if ($('#no_of_resources').val() === '') {
                isValid = false;
                showError($('#no_of_resources'), 'Please select the number of resources.');
            }

            // If all fields are valid, proceed with the AJAX request
            if (isValid) {
                const formData = {
                    skills: $('#required_skills').val(),
                    technology: $('#technology').val(),
                    experience_levels: $('input[name="experience_levels"]:checked').attr('value'),
                    time_zone: $('input[name="time_zone"]:checked').attr('value'),
                    engagement_model: $('input[name="engagement_model"]:checked').attr('value'),
                    select_premises: $('input[name="select_premises"]:checked').attr('value'),
                    contract_period: $('#contract_period').val(),
                    currency: $('#currency').val(),
                    resources: $('#no_of_resources').val(),
                };

                $.ajax({
                    url: '<?=base_url()?>calculator/calculate_budget',
                    type: 'POST',
                    data: formData,
                    success: function (response) {
                        const data = JSON.parse(response);
                        //renderTeamSummary(data);
                        //saveToLocalStorage(data);

                        if(data.skills){

                            const teamDetails = getTeamDetails();

                            // Extract freebies from the data and ensure they're unique
                            let newFreebies = data.freebies || [];
                            if (!Array.isArray(newFreebies)) {
                                newFreebies = [];
                            }

                            // Ensure the freebies array only contains unique items
                            const existingFreebies = teamDetails.flatMap(item => item.freebies || []);
                            const uniqueFreebies = [...new Set([...existingFreebies, ...newFreebies])];

                            teamDetails.push({
                                base_budget: data.base_budget,
                                total_discount: data.total_discount,
                                final_budget: data.final_budget,
                                freebies: data.freebies,
                                currency: data.currency, // Include currency in the response
                                skills: data.skills,
                                technology: data.technology,
                                experience_levels: data.experience_levels,
                                resources: data.resources,
                                contract_period: data.contract_period,
                                time_zone: data.time_zone,
                                engagement_model: data.engagement_model,
                                premises: data.premises,
                                currency: data.currency,
                                additional_costs: data.additional_costs,
                                freebies: uniqueFreebies, // Save the updated unique freebies
                            });
                            saveTeamDetails(teamDetails);
                            renderTeamSummary();
                        }
                    },
                    error: function () {
                        $('#teamSummary').html('<p class="text-danger">An error occurred while calculating the budget.</p>');
                    }
                });
            }
        });

        $('#send_it_me').on('click', function (e) {
            e.preventDefault();

            // Retrieve all data from localStorage
            const teamDetails = JSON.parse(localStorage.getItem('teamDetails')) || [];

            if (teamDetails.length === 0) {
                //alert('No team details found to send.');
                $(' .errorMessage').show().html("<i>No team details found to send. Please add some team first!</i>");
                setTimeout(function(){ $('.errorMessage').hide(); }, 5000);
                return;
            }

            /*// Collect additional form data if needed
            const additionalData = {
                user_email: $('#email').val(), // Example: email input field (add it to your form)
            };*/


            // Clear previous error messages
            $('.error-message').remove();

            let isValid = true;

            // Check email
            if ($('#email').val() === '') {
                isValid = false;
                showError($('#email'), 'Please required an email.');
            }

            // Check if email is valid
            if (!isValidEmail($('#email').val())) {
                showError('#email', 'Please enter a valid email address.');
                return;
            }

            if(isValid){
                // Combine local storage data and additional form data
                const formData = {
                    user_email: $('#email').val(),
                    form_data: teamDetails
                };

                // Send data to the server
                $.ajax({
                    url: '<?=base_url()?>calculator/send_team_details', // Replace with your server endpoint
                    type: 'POST',
                    data: formData,
                    /*cache: false,
                    contentType: false,
                    processData: false,*/
                    success: function (response) {
                        const res = typeof response === "string" ? JSON.parse(response) : response;
                        console.log(res);
                        if (res.s == 's') {
                            $("#quote_calculator")[0].reset();
                            $('.successMessage').show().html("<i>"+ res.m +"</i>");
                            $('#email').val('');
                            // Clear local storage
                            localStorage.removeItem('teamDetails');
                            renderTeamSummary();
                            setTimeout(function(){ 
                                $('.successMessage').hide();
                            }, 5000);
                            //swal("Success!", res.m, "success");
                        } else if (res.error) {
                            var erros = '';
                            $.each(res.error,function(i,v){
                                erros +='<small><b>'+i+'</b>: '+v+'</small><br>';
                            });
                           // swal({html: true,title:"Warning!", text:erros, icon:"warning"});
                            $('.errorMessage').show().html("<i>"+erros+"</i>");
                            setTimeout(function(){ $('.errorMessage').hide(); }, 5000);
                        } else {
                            $(' .errorMessage').show().html("<i>"+ res.m +"</i>");
                            setTimeout(function(){ $('.errorMessage').hide(); }, 5000);
                            //swal("Error!", res.m, "error");
                        }
                    },
                    error: function(response) { console.log(response); }
                });
            }  
        });

    });
</script>


</html>
