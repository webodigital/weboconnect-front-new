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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

</head>
<body>

<?php $this->load->view('front/common/header') ?>

<section class="csd_banner">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-5 h-100">
                <span style="margin-left: -40px;">
                    <img src="<?=base_url()?>assets/images/shapes/4_corner.webp" alt="shapes">
                </span>
                <div class="text-white my-5">
                    <div class="d-flex align-items-center">
                        <div class="">
                            <button class="btn btn-light">
                                <i class="bi bi-chevron-left"></i>
                            </button>
                            <span class="fs-16 fw-600 ms-3">Case Studies</span>
                            <h1 class="fs-65 fw-700 my-4">Nurseify</h1>
                            <h5 class="fs-24 fw-500">Empowering Nurses and Healthcare Facilities with On-Demand Gig Work</h5>
                            <div class="d-flex align-items-center mt-4">
                                <span>
                                    <i class="fs-16 bi bi-geo-alt"></i>
                                </span>
                                <span class="fs-14 fw-600 ms-3">USA</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <img src="<?=base_url()?>assets/images/case-studies/details/nurseify_banner.webp" alt="nurseify">
            </div>
        </div>
    </div>
</section>



<section class="bg_azure section_padding">
    <div class="container-fluid over_banner">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="over_banner_card">
                        <span>
                            <img height="60" src="<?=base_url()?>assets/images/icons/front_end.webp" alt="front end">
                        </span>
                        <div class="text_brand_color1 ms-4">
                            <h5 class="fs-24 fw-600 m-0">Front-end</h5>
                            <h6 class="fs-16 fw-600 m-0">Kotlin, Swift</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="over_banner_card">
                        <span>
                            <img height="60" src="<?=base_url()?>assets/images/icons/back_end.webp" alt="front end">
                        </span>
                        <div class="text_brand_color1 ms-4">
                            <h5 class="fs-24 fw-600 m-0">Back-end</h5>
                            <h6 class="fs-16 fw-600 m-0"> Node.js, Express</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="over_banner_card">
                        <span>
                            <img height="60" src="<?=base_url()?>assets/images/icons/app_type.webp" alt="front end">
                        </span>
                        <div class="text_brand_color1 ms-4">
                            <h5 class="fs-24 fw-600 m-0">App Type</h5>
                            <h6 class="fs-16 fw-600 m-0">Web and Mobile Application</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="bg-white app_status p-lg-5 p-sm-4">
            <div class="row justify-content-between align-items-center my-3">
                <div class="col-auto">
                    <div>
                        <h4 class="fs-34 fw-600">App Type</h4>
                        <h5 class="fs-24 fw-500">On-Demand Nurse Staffing Platform</h5>
                    </div>
                </div>
                <div class="col-auto">
                    <div>
                        <h4 class="fs-34 fw-600">Status</h4>
                        <h5 class="fs-24 fw-500">Live</h5>
                    </div>
                </div>
                <div class="col-auto">
                    <div>
                        <h4 class="fs-34 fw-600">Available Now</h4>
                        <div>
                            
                            <a href="" class="btn btn_dark_primary btn-rounded px-4">
                                <span>
                                    <img height="30" src="<?=base_url()?>assets/images/icons/android.webp" alt="android">
                                </span>
                                <span class="fs-20 fw-500">Android</span>
                            </a>
                            
                            <a href="" class="btn btn_dark_primary btn-rounded px-4">
                                <span>
                                    <img height="30" src="<?=base_url()?>assets/images/icons/ios.webp" alt="IOS">
                                </span>
                                <span class="fs-20 fw-500">IOS</span>
                            </a>
                            
                            <a href="" class="btn btn_dark_primary btn-rounded px-4">
                                <span>
                                    <img height="30" src="<?=base_url()?>assets/images/icons/web.webp" alt="web">
                                </span>
                                <span class="fs-20 fw-500">Web</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between align-items-center my-3">
                <div class="col-12">
                    <div>
                        <h4 class="fs-34 fw-600">Technologies</h4>
                        <h5 class="fs-20 fw-500">Mobile App (React Native), Backend (Node.js, Express), Database (PostgreSQL), AI Matching Logic, Cloud Services (AWS), APIs (Stripe or PayPal for payments)</h5>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between align-items-center my-3">
                <div class="col-12">
                    <div>
                        <h4 class="fs-34 fw-600">Client Overview</h4>
                        <h5 class="fs-20 fw-500">Nurseify is an innovative on-demand platform designed to connect nurses directly with healthcare facilities, enabling a flexible, gig-based approach to nursing work. By allowing nurses to share their experience, availability, and hourly rates, Nurseify empowers healthcare professionals to take control of their careers. Simultaneously, healthcare facilities benefit by bypassing traditional staffing agencies, resulting in more efficient and cost-effective hiring.</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="bg-white how_does_work p-lg-5 p-sm-4">
            <div class="row">
                <div class="col-12">
                    <h2 class="fs-34 fw-600">How Does It Work?</h2>
                </div>
            </div>
            <div class="row align-items-center my-1 g-3">
                <div class="col-md-3">
                    <div class="d-grid">
                        <a href="" class="btn btn_outline_dark_primary btn-rounded fs-20 fw-600">Registration</a>
                    </div>
                </div>
                <div class="col-md-9">
                    <p class="fs-20 fw-500 m-0">Nurses create profiles with qualifications and availability.</p>
                </div>
            </div>

            <div class="row align-items-center my-1 g-3">
                <div class="col-md-3">
                    <div class="d-grid">
                        <a href="" class="btn btn_outline_dark_primary btn-rounded fs-20 fw-600">Job Requests</a>
                    </div>
                </div>
                <div class="col-md-9">
                    <p class="fs-20 fw-500 m-0">Healthcare facilities post staffing needs.</p>
                </div>
            </div>

            <div class="row align-items-center my-1 g-3">
                <div class="col-md-3">
                    <div class="d-grid">
                        <a href="" class="btn btn_outline_dark_primary btn-rounded fs-20 fw-600">AI Matching</a>
                    </div>
                </div>
                <div class="col-md-9">
                    <p class="fs-20 fw-500 m-0">The platform uses AI to connect nurses with jobs.</p>
                </div>
            </div>

            <div class="row align-items-center my-1 g-3">
                <div class="col-md-3">
                    <div class="d-grid">
                        <a href="" class="btn btn_outline_dark_primary btn-rounded fs-20 fw-600">Booking & Payment</a>
                    </div>
                </div>
                <div class="col-md-9">
                    <p class="fs-20 fw-500 m-0">Nurses accept offers, and payments are processed securely.</p>
                </div>
            </div>

            <div class="row align-items-center my-1 g-3">
                <div class="col-md-3">
                    <div class="d-grid">
                        <a href="" class="btn btn_outline_dark_primary btn-rounded fs-20 fw-600">Reviews</a>
                    </div>
                </div>
                <div class="col-md-9">
                    <p class="fs-20 fw-500 m-0">Both parties rate each other post-assignment for trust.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="bg-white section_padding">
    <div class="container">
        <img src="<?=base_url()?>assets/images/case-studies/details/nurseify_2.webp" alt="nurseify">
    </div>
</section>

<section class="section_padding project_objectives">
    <div class="container">
        <div class="text-center">
            <h2 class="fs-30 fw-600 text_brand_color1">Project Objectives</h2>
            <h6 class="fs-20 fw-600 text_brand_color1">The main goals of the Nurseify app were to</h6>
        </div>
        
        <div class="row justify-content-center g-4 g-lg-5 mt-5">
            <div class="col-lg-6">
                <div class="project_objectives_card">
                    <h5 class="fs-20 fw-600 text_brand_color1">Facilitate Direct Connections</h5>
                    <p class="fs-14 fw-500 text_brand_color1">Create a platform that allows healthcare facilities to connect directly with available nurses, eliminating the need for costly and time-consuming agency intermediaries.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="project_objectives_card">
                    <h5 class="fs-20 fw-600 text_brand_color1">Empower Nurses</h5>
                    <p class="fs-14 fw-500 text_brand_color1">Provide nurses with a flexible platform where they can control their work schedules, set their hourly rates, and showcase their professional experience.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="project_objectives_card">
                    <h5 class="fs-20 fw-600 text_brand_color1">Streamline Hiring Processes</h5>
                    <p class="fs-14 fw-500 text_brand_color1">Simplify and speed up the process for healthcare facilities to find and hire qualified nurses on-demand, particularly in times of high need.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-white section_padding">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6">
                <div class="">
                    <h2 class="fs-30 fw-600 text_brand_color1">Challenges</h2>
                </div>
                <div class="row g-4 mt-3">
                    <div class="col-12 ">
                        <h4 class="fs-20 fw-600 text_brand_color1">User Experience for Two Audiences</h4>
                        <p class="fs-14 fw-500 text_brand_color1">Design an intuitive interface that could cater to the needs of nurses and healthcare facilities, so they are motivated to go through a streamlined experience to post jobs, apply, or communicate.</p>
                    </div>
                    <div class="col-12">
                        <h4 class="fs-20 fw-600 text_brand_color1">Trust and Reliability</h4>
                        <p class="fs-14 fw-500 text_brand_color1">This includes trust and reliability, ensuring that the information offered by the nurses and facilities is reliable to ensure a safe environment for everyone.</p>
                    </div>
                    <div class="col-12">
                        <h4 class="fs-20 fw-600 text_brand_color1">Competitive Market</h4>
                        <p class="fs-14 fw-500 text_brand_color1">Differentiating Nurseify in the sea of gig platforms and healthcare staffing solutions.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="">
                    <img src="<?=base_url()?>assets/images/case-studies/details/challenges.webp" alt="nurseify challenges">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section_padding solution_implementation">
    <div class="container">
        
        <div class="row align-items-center justify-content-center g-4">
            <div class="12">
                <h2 class="fs-30 fw-600 text_brand_color1">Solution & Implementation</h2>
                <h6 class="fs-20 fw-600 text_brand_color1">To meet these objectives and overcome challenges, we developed the Nurseify platform with key features that included</h6>
            </div>
            <div class="col-lg-6">
                <div class="">
                    <img src="<?=base_url()?>assets/images/case-studies/details/nurseify_solution_implementation.webp" alt="nurseify Solution & Implementation">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="bg-white b_rds_20 p-4">
                    <div class="row g-4">
                        <div class="col-12 ">
                            <h4 class="fs-20 fw-600 text_brand_color1">Nurse Profiles & Ratings</h4>
                            <p class="fs-14 fw-500 text_brand_color1"> Nurses can maintain rich profiles that emphasize experience, certifications, and availability.</p>
                        </div>
                        <div class="col-12">
                            <h4 class="fs-20 fw-600 text_brand_color1">Direct Booking System</h4>
                            <p class="fs-14 fw-500 text_brand_color1">Direct booking system allows the healthcare facilities to browse through nurse profiles, see their availability and book them directly without the traditional agencies and trimming down hiring time.</p>
                        </div>
                        <div class="col-12">
                            <h4 class="fs-20 fw-600 text_brand_color1">Flexible Work Options</h4>
                            <p class="fs-14 fw-500 text_brand_color1">The app allows the nurses to come up with their very own independent hourly rates and select shift work that falls within their available working hours to ensure a flexible yet balanced working-to-life arrangement.</p>
                        </div>
                        <div class="col-12">
                            <h4 class="fs-20 fw-600 text_brand_color1">Securing Messaging and Transactions</h4>
                            <p class="fs-14 fw-500 text_brand_color1">The secure messaging and payment processing on the platform ensure safe and transparent transactions and communications.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section_padding bg-white">
    <div class="container">
        <div class="text-center">
            <h2 class="fs-30 fw-600 text_brand_color1">Outcome</h2>
            <h6 class="fs-20 fw-600 text_brand_color1">Since its launch, Nurseify has achieved the following Nurseify app were to</h6>
        </div>
        
        <div class="row align-items-center justify-content-center g-4 mt-5">
            <div class="col-lg-6">
                <div class="project_objectives_card">
                    <h5 class="fs-20 fw-600 text_brand_color1">Increased Autonomy for Nurses</h5>
                    <p class="fs-14 fw-500 text_brand_color1">The nurses had greater control over shift and pay, and most of the nurses felt that the flexibility of this application was very helpful.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="project_objectives_card">
                    <h5 class="fs-20 fw-600 text_brand_color1">Lower Cost in Staffing</h5>
                    <p class="fs-14 fw-500 text_brand_color1">Health care institutions responded that there were substantial savings in cost as they could recruit directly through Nurseify. This is on the basis of no commission paid to the staffing agencies.</p>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="project_objectives_card">
                    <h5 class="fs-20 fw-600 text_brand_color1">Good Market Acceptance</h5>
                    <p class="fs-14 fw-500 text_brand_color1">The ease of use of the application and value to the users by both the nurses and the health care facilities have been well appreciated.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section_padding case_study_mob_slider_bg">
    <div class="container-fluid">
        <div class="owl-carousel owl-theme case_study_mob_slider">
            <div class="item">
                <img src="<?=base_url()?>assets/images/case-studies/details/nurseify_mob1.webp" alt="nurseify">
            </div>
            <div class="item">
                <img src="<?=base_url()?>assets/images/case-studies/details/nurseify_mob2.webp" alt="nurseify">
            </div>
            <div class="item">
                <img src="<?=base_url()?>assets/images/case-studies/details/nurseify_mob3.webp" alt="nurseify">
            </div>
            <div class="item">
                <img src="<?=base_url()?>assets/images/case-studies/details/nurseify_mob4.webp" alt="nurseify">
            </div>
            <div class="item">
                <img src="<?=base_url()?>assets/images/case-studies/details/nurseify_mob5.webp" alt="nurseify">
            </div>
            <div class="item">
                <img src="<?=base_url()?>assets/images/case-studies/details/nurseify_mob1.webp" alt="nurseify">
            </div>
            <div class="item">
                <img src="<?=base_url()?>assets/images/case-studies/details/nurseify_mob2.webp" alt="nurseify">
            </div>
            <div class="item">
                <img src="<?=base_url()?>assets/images/case-studies/details/nurseify_mob3.webp" alt="nurseify">
            </div>
            <div class="item">
                <img src="<?=base_url()?>assets/images/case-studies/details/nurseify_mob4.webp" alt="nurseify">
            </div>
            <div class="item">
                <img src="<?=base_url()?>assets/images/case-studies/details/nurseify_mob5.webp" alt="nurseify">
            </div>
        </div>
    </div>
</section>

<?php $this->load->view('front/common/testimonials') ?>
<?php $this->load->view('front/common/footer_form') ?>
<?php $this->load->view('front/common/footer') ?>
</body> 
<?php $this->load->view('front/common/script') ?>
</html>
