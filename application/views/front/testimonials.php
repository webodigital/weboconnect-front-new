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


<section class="section_padding">
    <div class="arrow_nav_slider">
        <div class="container">
            <div class="row align-items-center justify-cotent-center g-4">
                <div class="col-12 text-center">
                    <h2 class="fs-24 fw-700 text_brand_color1 m-0">Testimonials</h2>
                    <h6 class="fs-20 fw-400 text_brand_color1 m-0">Our clients love us! Here is what they have to say</h6>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12 webo_testimonials">
                    <div class="overflow_x_auto">
                        <ul class="scroll_horizontal_m_screen mx-auto nav nav-pills justify-content-center gap-4 mt-4" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-weboconnect-tab" data-bs-toggle="pill" data-bs-target="#pills-weboconnect" type="button" role="tab" aria-controls="pills-weboconnect" aria-selected="true">
                                    <img src="<?=base_url()?>assets/images/weboconnect_assets/webo_logo.webp" alt="weboconnect testimonials">
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-goodfirm-tab" data-bs-toggle="pill" data-bs-target="#pills-goodfirm" type="button" role="tab" aria-controls="pills-goodfirm" aria-selected="false">
                                    <img src="<?=base_url()?>assets/images/weboconnect_assets/goodfirm_logo.webp" alt="weboconnect testimonials">
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-trustpilot-tab" data-bs-toggle="pill" data-bs-target="#pills-trustpilot" type="button" role="tab" aria-controls="pills-trustpilot" aria-selected="false">
                                    <img src="<?=base_url()?>assets/images/weboconnect_assets/trustpilot_logo.webp" alt="weboconnect testimonials">
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-clutch-tab" data-bs-toggle="pill" data-bs-target="#pills-clutch" type="button" role="tab" aria-controls="pills-clutch" aria-selected="false">
                                    <img src="<?=base_url()?>assets/images/weboconnect_assets/clutch_logo.webp" alt="weboconnect testimonials">
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-google-tab" data-bs-toggle="pill" data-bs-target="#pills-google" type="button" role="tab" aria-controls="pills-google" aria-selected="false">
                                    <img src="<?=base_url()?>assets/images/weboconnect_assets/google_logo.webp" alt="weboconnect testimonials">
                                </button>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-weboconnect" role="tabpanel" aria-labelledby="pills-weboconnect-tab">

                            <div class="list_testimonial my-5">
                                <div class="row justify-content-center g-4">
                                    <div class="col-sm-6">
                                        <div class="testimonial_video_card">
                                            <video controls="" name="media" poster="<?=base_url()?>assets/images/clients/nicholas_video_poster.webp">
                                                <source src="<?=base_url()?>assets/images/clients/nicholas_andrews_testimonial.mp4" type="video/mp4">
                                            </video>
                                            <!-- <div class="">
                                                <h5>Nicholas Andrew,Ceo & Founder, Testd Inc</h5>
                                            </div> -->
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="testimonial_video_card">
                                            <video controls="" name="media" poster="<?=base_url()?>assets/images/clients/garry_video_poster.webp">
                                                <source src="<?=base_url()?>assets/images/clients/gary_baldwin_testimonial.mp4" type="video/mp4">
                                            </video>
                                            <!-- <div class="">
                                                <h5>Gary Baldwin, Founder & CEO,  Freedom Walk (USA)</h5>
                                            </div> -->
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        <div class="testimonial_video_card">
                                            <video controls="" name="media" poster="<?=base_url()?>assets/images/clients/dale_video_poster.webp">
                                                <source src="<?=base_url()?>assets/images/clients/WeboConnect_Testimonial.mp4" type="video/mp4">
                                            </video>
                                            <!-- <div class="">
                                                <h5>Dale Parker, Founder, DelmarvaBIZ</h5>
                                            </div> -->
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="testimonial_video_card">
                                            <video controls="" name="media" poster="<?=base_url()?>assets/images/clients/icy_video_poster.webp">
                                                <source src="<?=base_url()?>assets/images/clients/icy_testimonial.mp4" type="video/mp4">
                                            </video>
                                            <!-- <div class="">
                                                <h5>Icy Williams, President & CEO, Legacy 83 Business</h5>
                                            </div> -->
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mx-auto">
                                        <div class="testimonial_video_card">
                                            <video controls="" name="media" poster="<?=base_url()?>assets/images/clients/david_video_poster.webp">
                                                <source src="<?=base_url()?>assets/images/clients/david_testimonial.mp4" type="video/mp4" />
                                            </video>
                                            <!-- <div class="">
                                                <h5>David Criswell, President,ThinknDoNow</h5>
                                            </div> -->
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6 mx-auto">
                                        <div class="testimonial_txt_card">
                                            <div class="client_bio">
                                                <div class="d-flex align-items-center">
                                                    <span class="client_img">
                                                        <img src="<?=base_url()?>assets/images/clients/xavier_goula.jpg" alt="client testimonial image" title="client testimonial">
                                                    </span>
                                                    <div class="">
                                                        <h4 class="m-0">XAVIER GOULA</h4>
                                                        <h5 class="m-0">Architectural Travel</h5>
                                                    </div>
                                                </div>
                                                <div class="">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <!-- <i class="fa fa-star-half-o"></i> -->
                                                </div>
                                            </div>
                                            <div class="client_words">
                                                <span class="quotes">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes.webp" alt="quotes" title="quotes">
                                                </span>
                                                <p>During the project flow we were very pleased by the work of Weboconnect’s business analysts and developers, who demonstrated high level of skills and competence. They made many significant contributions to our products both in terms of functionality and quality.</p>
                                                <span class="quotes quotes_rev">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes_rev.webp" alt="quotes" title="quotes">
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- <div class="col-sm-12 mb-3">
                                        <img class="w-100" src="<?=base_url()?>assets/images/goodfirm_review.webp" alt="goodfirm review" title="goodfirm review">
                                    </div> -->
                                    
                                    <div class="col-sm-6 mx-auto">
                                        <div class="testimonial_txt_card">
                                            <div class="client_bio">
                                                <div class="d-flex align-items-center">
                                                    <span class="client_img">
                                                        <img src="<?=base_url()?>assets/images/clients/Dale-parker.jpg" alt="client testimonial image" title="client testimonial">
                                                    </span>
                                                    <div class="">
                                                        <h4 class="m-0">Dale Parker</h4>
                                                        <h5 class="m-0">Founder, DelmarvaBIZ</h5>
                                                    </div>
                                                </div>
                                                <div class="">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <!-- <i class="fa fa-star-half-o"></i> -->
                                                </div>
                                            </div>
                                            <div class="client_words">
                                                <span class="quotes">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes.webp" alt="quotes" title="quotes">
                                                </span>
                                                <p>Weboconnect is a highly skilled and uniquely capable firm
                                                with multitudes of talent on-board. We have collaborated
                                                on a number of diverse projects over the years all of which
                                                have been utmost success for both us and our clients. We
                                                are working to expand our collaboration with them and
                                                highly recommend them to others as well.</p>
                                                <span class="quotes quotes_rev">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes_rev.webp" alt="quotes" title="quotes">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6 mx-auto">
                                        <div class="testimonial_txt_card">
                                            <div class="client_bio">
                                                <div class="d-flex align-items-center">
                                                    <span class="client_img">
                                                        <img src="<?=base_url()?>assets/images/clients/Khaja.jpg" alt="client testimonial image" title="client testimonial">
                                                    </span>
                                                    <div class="">
                                                        <h4 class="m-0">Khaja Najmuddin</h4>
                                                        <h5 class="m-0">Salah Certifed</h5>
                                                    </div>
                                                </div>
                                                <div class="">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <!-- <i class="fa fa-star"></i> -->
                                                <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                            <div class="client_words">
                                                <span class="quotes">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes.webp" alt="quotes" title="quotes">
                                                </span>
                                                <p>Weboconnect designed and developed a native iOS app
                                                that offers a Step by Step Salah meant for instructing
                                                Muslims all over the world about how to effectively offer
                                                prayers (Namaz) along with all the essential information.
                                                I've incorporated my idea in a docs and the Weboconnect's
                                                technical team implemented it to mobile realm. I was
                                                impressed with the excellent level of responsibility,
                                                communication skills and mobile competences of both the
                                                management team and developers.</p>
                                                <span class="quotes quotes_rev">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes_rev.webp" alt="quotes" title="quotes">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6 mx-auto">
                                        <div class="testimonial_txt_card">
                                            <div class="client_bio">
                                                <div class="d-flex align-items-center">
                                                    <span class="client_img">
                                                        <img src="<?=base_url()?>assets/images/clients/Nichloas-andrew.jpg" alt="client testimonial image" title="client testimonial">
                                                    </span>
                                                    <div class="">
                                                        <h4 class="m-0">Nicholas Andrew</h4>
                                                        <h5 class="m-0">Aeryus Inc</h5>
                                                    </div>
                                                </div>
                                                <div class="">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <!-- <i class="fa fa-star-half-o"></i> -->
                                                </div>
                                            </div>
                                            <div class="client_words">
                                                <span class="quotes">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes.webp" alt="quotes" title="quotes">
                                                </span>
                                                <p>Weboconnect's blockchain experience proved to be quite
                                                useful. They contributed to the general system architecture,
                                                showing us how something could be done better or faster.
                                                After a few weeks, we didn't feel like we were working with
                                                external developers. It felt like we had an in-house team
                                                working with us in the same office. Weboconnect's top-
                                                notch deliverables, reliability, and seamless collaboration
                                                made them a valuable partner, while their niche expertise
                                                contributed to a superior product.</p>
                                                <span class="quotes quotes_rev">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes_rev.webp" alt="quotes" title="quotes">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6 mx-auto">
                                        <div class="testimonial_txt_card">
                                            <div class="client_bio">
                                                <div class="d-flex align-items-center">
                                                    <span class="client_img">
                                                        <img src="<?=base_url()?>assets/images/clients/suzzane.jpg" alt="client testimonial image" title="client testimonial">
                                                    </span>
                                                    <div class="">
                                                        <h4 class="m-0">Suzanne Mulvehill</h4>
                                                        <h5 class="m-0">Miami Tropical Plants</h5>
                                                    </div>
                                                </div>
                                                <div class="">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <!-- <i class="fa fa-star"></i> -->
                                                </div>
                                            </div>
                                            <div class="client_words">
                                                <span class="quotes">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes.webp" alt="quotes" title="quotes">
                                                </span>
                                                <p>Weboconnect is one of the rare providers who can
                                                transform a pure idea that started on a napkin into a
                                                custom software that meets all needs. Their reach technical
                                                and business expertise allowed them to come up with
                                                suggestions that added significant value to the final results.
                                                The project was completed on the tight schedule and
                                                without exceeding the budget. I would definitely
                                                recommend Weboconnect as a reliable adviser and
                                                executor for all your software initiatives.</p>
                                                <span class="quotes quotes_rev">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes_rev.webp" alt="quotes" title="quotes">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6 mx-auto">
                                        <div class="testimonial_txt_card">
                                            <div class="client_bio">
                                                <div class="d-flex align-items-center">
                                                    <span class="client_img">
                                                        <img src="<?=base_url()?>assets/images/clients/lauralee.jpg" alt="client testimonial image" title="client testimonial">
                                                    </span>
                                                    <div class="">
                                                        <h4 class="m-0">LAURALEE HITES</h4>
                                                        <h5 class="m-0">Stateline Medical Equipment</h5>
                                                    </div>
                                                </div>
                                                <div class="">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <!-- <i class="fa fa-star-half-o"></i> -->
                                                </div>
                                            </div>
                                            <div class="client_words">
                                                <span class="quotes">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes.webp" alt="quotes" title="quotes">
                                                </span>
                                                <p>Weboconnect team successfully perfomed business
                                                analysis in Document Management system notably
                                                migration to updated systems in order to improve service
                                                quality and provide verification of all the documentation.
                                                Weboconnect has high technological competances to
                                                implement the needed specification as well as relevant
                                                domain experience (in this case nuclear filed) so that the
                                                developers and testers can correctly interpret the guideline.</p>
                                                <span class="quotes quotes_rev">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes_rev.webp" alt="quotes" title="quotes">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6 mx-auto">
                                        <div class="testimonial_txt_card">
                                            <div class="client_bio">
                                                <div class="d-flex align-items-center">
                                                    <span class="client_img">
                                                        <img src="<?=base_url()?>assets/images/clients/vlad.webp" alt="client testimonial image" title="client testimonial">
                                                    </span>
                                                    <div class="">
                                                        <h4 class="m-0">VLAD TÄMAS</h4>
                                                        <h5 class="m-0">CEO & Founder ,Purpley</h5>
                                                    </div>
                                                </div>
                                                <div class="">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <!-- <i class="fa fa-star-half-o"></i> -->
                                                </div>
                                            </div>
                                            <div class="client_words">
                                                <span class="quotes">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes.webp" alt="quotes" title="quotes">
                                                </span>
                                                <p>From start to finish, their commitment to understanding
                                                our unique needs and delivering a tailored solution was
                                                exceptional. We've achieved unprecedented growth thanks
                                                to their innovative software.</p>
                                                <span class="quotes quotes_rev">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes_rev.webp" alt="quotes" title="quotes">
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- <div class="col-sm-12 mb-3">
                                        <img class="w-100" src="<?=base_url()?>assets/images/banking_system.webp" alt="goodfirm review" title="goodfirm review">
                                    </div> -->
                                    
                                    <div class="col-sm-6 mx-auto">
                                        <div class="testimonial_txt_card">
                                            <div class="client_bio">
                                                <div class="d-flex align-items-center">
                                                    <span class="client_img">
                                                        <img src="<?=base_url()?>assets/images/clients/wojciech_lewandowski.jpg" alt="client testimonial image" title="client testimonial">
                                                    </span>
                                                    <div class="">
                                                        <h4 class="m-0">WOJCIECH LEWANDOWSKI</h4>
                                                        <h5 class="m-0">COO Monarch club</h5>
                                                    </div>
                                                </div>
                                                <div class="">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <!-- <i class="fa fa-star-half-o"></i> -->
                                                </div>
                                            </div>
                                            <div class="client_words">
                                                <span class="quotes">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes.webp" alt="quotes" title="quotes">
                                                </span>
                                                <p>The custom software solution they developed has
                                                streamlined our operations beyond our expectations. Their
                                                team's technical expertise and collaborative approach
                                                made working with them a truly rewarding experience.</p>
                                                <span class="quotes quotes_rev">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes_rev.webp" alt="quotes" title="quotes">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6 mx-auto">
                                        <div class="testimonial_txt_card">
                                            <div class="client_bio">
                                                <div class="d-flex align-items-center">
                                                    <span class="client_img">
                                                        <img src="<?=base_url()?>assets/images/clients/sarah_thompson.jpeg" alt="client testimonial image" title="client testimonial">
                                                    </span>
                                                    <div class="">
                                                        <h4 class="m-0">SARAH THOMPSON</h4>
                                                        <h5 class="m-0">CTO</h5>
                                                    </div>
                                                </div>
                                                <div class="">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <!-- <i class="fa fa-star-half-o"></i> -->
                                                </div>
                                            </div>
                                            <div class="client_words">
                                                <span class="quotes">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes.webp" alt="quotes" title="quotes">
                                                </span>
                                                <p>The custom software solution they developed has
                                                streamlined our operations beyond our expectations. Their
                                                team's technical expertise and collaborative approach
                                                made working with them a truly rewarding experience.</p>
                                                <span class="quotes quotes_rev">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes_rev.webp" alt="quotes" title="quotes">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6 mx-auto">
                                        <div class="testimonial_txt_card">
                                            <div class="client_bio">
                                                <div class="d-flex align-items-center">
                                                    <span class="client_img">
                                                        <img src="<?=base_url()?>assets/images/clients/FAS-LEBBIE.jpg" alt="client testimonial image" title="client testimonial">
                                                    </span>
                                                    <div class="">
                                                        <h4 class="m-0">FAS LEBBIE</h4>
                                                        <h5 class="m-0">Servare</h5>
                                                    </div>
                                                </div>
                                                <div class="">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <!-- <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star"></i> -->
                                                </div>
                                            </div>
                                            <div class="client_words">
                                                <span class="quotes">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes.webp" alt="quotes" title="quotes">
                                                </span>
                                                <p>Amazing team to work with! I have collaborate with them
                                                on multiple projects and we continue to engage for all our
                                                Web and Mobile apps requirements.</p>
                                                <span class="quotes quotes_rev">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes_rev.webp" alt="quotes" title="quotes">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6 mx-auto">
                                        <div class="testimonial_txt_card">
                                            <div class="client_bio">
                                                <div class="d-flex align-items-center">
                                                    <span class="client_img">
                                                        <img src="<?=base_url()?>assets/images/clients/ali.jpg" alt="client testimonial image" title="client testimonial">
                                                    </span>
                                                    <div class="">
                                                        <h4 class="m-0">ALI HUSAIN</h4>
                                                        <h5 class="m-0">Textresturant</h5>
                                                    </div>
                                                </div>
                                                <div class="">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <!-- <i class="fa fa-star-half-o"></i> -->
                                                </div>
                                            </div>
                                            <div class="client_words">
                                                <span class="quotes">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes.webp" alt="quotes" title="quotes">
                                                </span>
                                                <p>All discussed and required elements were delivered
                                                satisfactorily... They have qualified experts for every job.</p>
                                                <span class="quotes quotes_rev">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes_rev.webp" alt="quotes" title="quotes">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6 mx-auto">
                                        <div class="testimonial_txt_card">
                                            <div class="client_bio">
                                                <div class="d-flex align-items-center">
                                                    <span class="client_img">
                                                        <img src="<?=base_url()?>assets/images/clients/hugh-twomey.jpg" alt="client testimonial image" title="client testimonial">
                                                    </span>
                                                    <div class="">
                                                        <h4 class="m-0">HUGH TWOMEY</h4>
                                                        <h5 class="m-0">DB Alliance</h5>
                                                    </div>
                                                </div>
                                                <div class="">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <!-- <i class="fa fa-star"></i> -->
                                                </div>
                                            </div>
                                            <div class="client_words">
                                                <span class="quotes">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes.webp" alt="quotes" title="quotes">
                                                </span>
                                                <p>We would definitely recommend Weboconnect as skilled
                                                and trustworthy consulting and development partner.</p>
                                                <span class="quotes quotes_rev">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes_rev.webp" alt="quotes" title="quotes">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6 mx-auto">
                                        <div class="testimonial_txt_card">
                                            <div class="client_bio">
                                                <div class="d-flex align-items-center">
                                                    <span class="client_img">
                                                        <img src="<?=base_url()?>assets/images/clients/HAARIS.jpg" alt="client testimonial image" title="client testimonial">
                                                    </span>
                                                    <div class="">
                                                        <h4 class="m-0">HAARIS AHMED</h4>
                                                        <h5 class="m-0">Frontizo Care</h5>
                                                    </div>
                                                </div>
                                                <div class="">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <!-- <i class="fa fa-star-half-o"></i> -->
                                                </div>
                                            </div>
                                            <div class="client_words">
                                                <span class="quotes">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes.webp" alt="quotes" title="quotes">
                                                </span>
                                                <p>I’m so impressed with Weboconnect's work that I’m
                                                continuing to work with them on further enhancements to
                                                the application, and plan re-engage them on other separate
                                                projects as well</p>
                                                <span class="quotes quotes_rev">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes_rev.webp" alt="quotes" title="quotes">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6 mx-auto">
                                        <div class="testimonial_txt_card">
                                            <div class="client_bio">
                                                <div class="d-flex align-items-center">
                                                    <span class="client_img">
                                                        <img src="<?=base_url()?>assets/images/clients/emily_davis.jpeg" alt="client testimonial image" title="client testimonial">
                                                    </span>
                                                    <div class="">
                                                        <h4 class="m-0">EMILY DAVIS</h4>
                                                        <h5 class="m-0">COO</h5>
                                                    </div>
                                                </div>
                                                <div class="">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <!-- <i class="fa fa-star-half-o"></i> -->
                                                </div>
                                            </div>
                                            <div class="client_words">
                                                <span class="quotes">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes.webp" alt="quotes" title="quotes">
                                                </span>
                                                <p>WebOConnect's professionalism, transparency, and
                                                dedication to quality are second to none. The software they
                                                built for us has revolutionized our processes and given us a
                                                significant competitive advantage.</p>
                                                <span class="quotes quotes_rev">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes_rev.webp" alt="quotes" title="quotes">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6 mx-auto">
                                        <div class="testimonial_txt_card">
                                            <div class="client_bio">
                                                <div class="d-flex align-items-center">
                                                    <span class="client_img">
                                                        <img src="<?=base_url()?>assets/images/clients/david_lee.jpeg" alt="client testimonial image" title="client testimonial">
                                                    </span>
                                                    <div class="">
                                                        <h4 class="m-0">DR. DAVID LEE</h4>
                                                        <h5 class="m-0">CMO</h5>
                                                    </div>
                                                </div>
                                                <div class="">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <!-- <i class="fa fa-star"></i> -->
                                                </div>
                                            </div>
                                            <div class="client_words">
                                                <span class="quotes">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes.webp" alt="quotes" title="quotes">
                                                </span>
                                                <p>As a healthcare provider, we needed a robust solution that
                                                could enhance patient care while optimizing our workflows.
                                                Their deep industry knowledge and cutting-edge software
                                                have exceeded our expectations.</p>
                                                <span class="quotes quotes_rev">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes_rev.webp" alt="quotes" title="quotes">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6 mx-auto">
                                        <div class="testimonial_txt_card">
                                            <div class="client_bio">
                                                <div class="d-flex align-items-center">
                                                    <span class="client_img">
                                                        <img src="<?=base_url()?>assets/images/clients/amara_chinyere.jpg" alt="client testimonial image" title="client testimonial">
                                                    </span>
                                                    <div class="">
                                                        <h4 class="m-0">AMARA CHINYERE NWACHUKWU</h4>
                                                        <h5 class="m-0">President luku diamonds</h5>
                                                    </div>
                                                </div>
                                                <div class="">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <!-- <i class="fa fa-star-half-o"></i> -->
                                                </div>
                                            </div>
                                            <div class="client_words">
                                                <span class="quotes">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes.webp" alt="quotes" title="quotes">
                                                </span>
                                                <p>What impressed us most was their collaborative approach
                                                and willingness to go the extra mile. The software they
                                                developed has streamlined our operations and boosted our
                                                bottom line.</p>
                                                <span class="quotes quotes_rev">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes_rev.webp" alt="quotes" title="quotes">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6 mx-auto">
                                        <div class="testimonial_txt_card">
                                            <div class="client_bio">
                                                <div class="d-flex align-items-center">
                                                    <span class="client_img">
                                                        <img src="<?=base_url()?>assets/images/clients/osei_mensah.jpg" alt="client testimonial image" title="client testimonial">
                                                    </span>
                                                    <div class="">
                                                        <h4 class="m-0">OSEI MENSAH</h4>
                                                        <h5 class="m-0">Co-Founder Community social</h5>
                                                    </div>
                                                </div>
                                                <div class="">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <!-- <i class="fa fa-star-half-o"></i> -->
                                                </div>
                                            </div>
                                            <div class="client_words">
                                                <span class="quotes">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes.webp" alt="quotes" title="quotes">
                                                </span>
                                                <p>Their passion for innovation and ability to deliver future-
                                                proof solutions have been invaluable assets. We now have
                                                a competitive edge thanks to their cutting-edge software.</p>
                                                <span class="quotes quotes_rev">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes_rev.webp" alt="quotes" title="quotes">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6 mx-auto">
                                        <div class="testimonial_txt_card">
                                            <div class="client_bio">
                                                <div class="d-flex align-items-center">
                                                    <span class="client_img">
                                                        <img src="<?=base_url()?>assets/images/clients/daniel_rivera.jpeg" alt="client testimonial image" title="client testimonial">
                                                    </span>
                                                    <div class="">
                                                        <h4 class="m-0">DANIEL RIVERA</h4>
                                                        <h5 class="m-0">CEO</h5>
                                                    </div>
                                                </div>
                                                <div class="">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <!-- <i class="fa fa-star-half-o"></i> -->
                                                </div>
                                            </div>
                                            <div class="client_words">
                                                <span class="quotes">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes.webp" alt="quotes" title="quotes">
                                                </span>
                                                <p>The custom software they developed has streamlined our
                                                operations and helped us achieve unprecedented growth
                                                and efficiency, exceeding our expectations.</p>
                                                <span class="quotes quotes_rev">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes_rev.webp" alt="quotes" title="quotes">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6 mx-auto">
                                        <div class="testimonial_txt_card">
                                            <div class="client_bio">
                                                <div class="d-flex align-items-center">
                                                    <span class="client_img">
                                                        <img src="<?=base_url()?>assets/images/clients/samantha_taylor.jpeg" alt="client testimonial image" title="client testimonial">
                                                    </span>
                                                    <div class="">
                                                        <h4 class="m-0">SAMANTHA TAYLOR</h4>
                                                        <h5 class="m-0">Product Manager</h5>
                                                    </div>
                                                </div>
                                                <div class="">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <!-- <i class="fa fa-star-half-o"></i> -->
                                                </div>
                                            </div>
                                            <div class="client_words">
                                                <span class="quotes">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes.webp" alt="quotes" title="quotes">
                                                </span>
                                                <p>From start to finish, their customer service and attention to
                                                detail were truly exceptional. The software they built has
                                                transformed our business and exceeded our wildest
                                                expectations.</p>
                                                <span class="quotes quotes_rev">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes_rev.webp" alt="quotes" title="quotes">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6 mx-auto">
                                        <div class="testimonial_txt_card">
                                            <div class="client_bio">
                                                <div class="d-flex align-items-center">
                                                    <span class="client_img">
                                                        <img src="<?=base_url()?>assets/images/clients/jagannath_poddar.jpg" alt="client testimonial image" title="client testimonial">
                                                    </span>
                                                    <div class="">
                                                        <h4 class="m-0">JAGANNATH PODDAR</h4>
                                                        <h5 class="m-0">Editor-in-cheif Vrindavan today</h5>
                                                    </div>
                                                </div>
                                                <div class="">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <!-- <i class="fa fa-star"></i> -->
                                                </div>
                                            </div>
                                            <div class="client_words">
                                                <span class="quotes">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes.webp" alt="quotes" title="quotes">
                                                </span>
                                                <p>Their ability to translate our vision into a custom software
                                                solution has been game-changing for our business. We've
                                                achieved operational efficiencies and cost savings that have
                                                improved our bottom line.</p>
                                                <span class="quotes quotes_rev">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes_rev.webp" alt="quotes" title="quotes">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6 mx-auto">
                                        <div class="testimonial_txt_card">
                                            <div class="client_bio">
                                                <div class="d-flex align-items-center">
                                                    <span class="client_img">
                                                        <img src="<?=base_url()?>assets/images/clients/daniel_moore.jpeg" alt="client testimonial image" title="client testimonial">
                                                    </span>
                                                    <div class="">
                                                        <h4 class="m-0">DANIEL MOORE</h4>
                                                        <h5 class="m-0">VP of Marketing</h5>
                                                    </div>
                                                </div>
                                                <div class="">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <!-- <i class="fa fa-star-half-o"></i> -->
                                                </div>
                                            </div>
                                            <div class="client_words">
                                                <span class="quotes">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes.webp" alt="quotes" title="quotes">
                                                </span>
                                                <p>WebOConnect's deep understanding of the retail industry
                                                and e-commerce trends allowed them to develop a robust
                                                platform that has significantly boosted our online sales and
                                                customer satisfaction</p>
                                                <span class="quotes quotes_rev">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes_rev.webp" alt="quotes" title="quotes">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6 mx-auto">
                                        <div class="testimonial_txt_card">
                                            <div class="client_bio">
                                                <div class="d-flex align-items-center">
                                                    <span class="client_img">
                                                        <img src="<?=base_url()?>assets/images/clients/jaxon_blaze.jpg" alt="client testimonial image" title="client testimonial">
                                                    </span>
                                                    <div class="">
                                                        <h4 class="m-0">JAXON BLAZE</h4>
                                                        <h5 class="m-0">Founder/CEO venture well</h5>
                                                    </div>
                                                </div>
                                                <div class="">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <!-- <i class="fa fa-star-half-o"></i> -->
                                                </div>
                                            </div>
                                            <div class="client_words">
                                                <span class="quotes">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes.webp" alt="quotes" title="quotes">
                                                </span>
                                                <p>Their ability to translate our vision into a custom software
                                                solution has been game-changing for our business. We've
                                                achieved operational efficiencies we never thought
                                                possible.</p>
                                                <span class="quotes quotes_rev">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes_rev.webp" alt="quotes" title="quotes">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6 mx-auto">
                                        <div class="testimonial_txt_card">
                                            <div class="client_bio">
                                                <div class="d-flex align-items-center">
                                                    <span class="client_img">
                                                        <img src="<?=base_url()?>assets/images/clients/osei_mensah.jpg" alt="client testimonial image" title="client testimonial">
                                                    </span>
                                                    <div class="">
                                                        <h4 class="m-0">OSEI MENSAH</h4>
                                                        <h5 class="m-0">CEO GZAVALINI logistics company</h5>
                                                    </div>
                                                </div>
                                                <div class="">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <!-- <i class="fa fa-star-half-o"></i> -->
                                                </div>
                                            </div>
                                            <div class="client_words">
                                                <span class="quotes">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes.webp" alt="quotes" title="quotes">
                                                </span>
                                                <p>Transparent communication and timely delivery are just a
                                                few of the qualities that make them stand out. The software
                                                they developed has transformed our operations and given
                                                us a competitive advantage.</p>
                                                <span class="quotes quotes_rev">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes_rev.webp" alt="quotes" title="quotes">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6 mx-auto">
                                        <div class="testimonial_txt_card">
                                            <div class="client_bio">
                                                <div class="d-flex align-items-center">
                                                    <span class="client_img">
                                                        <img src="<?=base_url()?>assets/images/clients/olivia_martinez.jpeg" alt="client testimonial image" title="client testimonial">
                                                    </span>
                                                    <div class="">
                                                        <h4 class="m-0">OLIVIA MARTINEZ</h4>
                                                        <h5 class="m-0">COO</h5>
                                                    </div>
                                                </div>
                                                <div class="">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <!-- <i class="fa fa-star-half-o"></i> -->
                                                </div>
                                            </div>
                                            <div class="client_words">
                                                <span class="quotes">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes.webp" alt="quotes" title="quotes">
                                                </span>
                                                <p>WebOConnect's expertise in the insurance industry and
                                                commitment to quality have been instrumental in
                                                developing a solution that has streamlined our claims
                                                processing and improved customer satisfaction.</p>
                                                <span class="quotes quotes_rev">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes_rev.webp" alt="quotes" title="quotes">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6 mx-auto">
                                        <div class="testimonial_txt_card">
                                            <div class="client_bio">
                                                <div class="d-flex align-items-center">
                                                    <span class="client_img">
                                                        <img src="<?=base_url()?>assets/images/clients/james_rodriguez.jpeg" alt="client testimonial image" title="client testimonial">
                                                    </span>
                                                    <div class="">
                                                        <h4 class="m-0">JAMES RODRIGUEZ</h4>
                                                        <h5 class="m-0">VP of IT</h5>
                                                    </div>
                                                </div>
                                                <div class="">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-0"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <!-- <i class="fa fa-star"></i> -->
                                                </div>
                                            </div>
                                            <div class="client_words">
                                                <span class="quotes">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes.webp" alt="quotes" title="quotes">
                                                </span>
                                                <p>Not only are they technically brilliant, but their collaborative
                                                and responsive approach ensured our project's success
                                                every step of the way</p>
                                                <span class="quotes quotes_rev">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes_rev.webp" alt="quotes" title="quotes">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6 mx-auto">
                                        <div class="testimonial_txt_card">
                                            <div class="client_bio">
                                                <div class="d-flex align-items-center">
                                                    <span class="client_img">
                                                        <img src="<?=base_url()?>assets/images/clients/jakub_kowalski.jpg" alt="client testimonial image" title="client testimonial">
                                                    </span>
                                                    <div class="">
                                                        <h4 class="m-0">JAKUB KOWALSKI</h4>
                                                        <h5 class="m-0">President GPS ploter</h5>
                                                    </div>
                                                </div>
                                                <div class="">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <!-- <i class="fa fa-star-half-o"></i> -->
                                                </div>
                                            </div>
                                            <div class="client_words">
                                                <span class="quotes">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes.webp" alt="quotes" title="quotes">
                                                </span>
                                                <p>The custom software they developed has streamlined our
                                                operations and helped us achieve unprecedented efficiency
                                                and cost savings, exceeding our expectations.</p>
                                                <span class="quotes quotes_rev">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes_rev.webp" alt="quotes" title="quotes">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6 mx-auto">
                                        <div class="testimonial_txt_card">
                                            <div class="client_bio">
                                                <div class="d-flex align-items-center">
                                                    <span class="client_img">
                                                        <img src="<?=base_url()?>assets/images/clients/tom_wilkinson.jpg" alt="client testimonial image" title="client testimonial">
                                                    </span>
                                                    <div class="">
                                                        <h4 class="m-0">TOM WILKINSON</h4>
                                                        <h5 class="m-0">CEO/Founder The president club</h5>
                                                    </div>
                                                </div>
                                                <div class="">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <!-- <i class="fa fa-star-half-o"></i> -->
                                                </div>
                                            </div>
                                            <div class="client_words">
                                                <span class="quotes">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes.webp" alt="quotes" title="quotes">
                                                </span>
                                                <p>Their deep industry knowledge and ability to deliver
                                                tailored solutions have given us a cutting-edge software
                                                that has transformed our business processes.</p>
                                                <span class="quotes quotes_rev">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes_rev.webp" alt="quotes" title="quotes">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6 mx-auto">
                                        <div class="testimonial_txt_card">
                                            <div class="client_bio">
                                                <div class="d-flex align-items-center">
                                                    <span class="client_img">
                                                        <img src="<?=base_url()?>assets/images/clients/sophia_perez.jpeg" alt="client testimonial image" title="client testimonial">
                                                    </span>
                                                    <div class="">
                                                        <h4 class="m-0">SOPHIA PEREZ</h4>
                                                        <h5 class="m-0">VP of Product Development</h5>
                                                    </div>
                                                </div>
                                                <div class="">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <!-- <i class="fa fa-star-half-o"></i> -->
                                                </div>
                                            </div>
                                            <div class="client_words">
                                                <span class="quotes">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes.webp" alt="quotes" title="quotes">
                                                </span>
                                                <p>WebOConnect's passion for innovation and commitment to
                                                staying ahead of the curve have given us a truly future-
                                                proof solution that has set us apart from our competitors.</p>
                                                <span class="quotes quotes_rev">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes_rev.webp" alt="quotes" title="quotes">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6 mx-auto">
                                        <div class="testimonial_txt_card">
                                            <div class="client_bio">
                                                <div class="d-flex align-items-center">
                                                    <span class="client_img">
                                                        <img src="<?=base_url()?>assets/images/clients/tariq_malik.jpg" alt="client testimonial image" title="client testimonial">
                                                    </span>
                                                    <div class="">
                                                        <h4 class="m-0">TARIQ MALIK IBRAHIM</h4>
                                                        <h5 class="m-0">Director 106 reforestration</h5>
                                                    </div>
                                                </div>
                                                <div class="">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <!-- <i class="fa fa-star-half-o"></i> -->
                                                </div>
                                            </div>
                                            <div class="client_words">
                                                <span class="quotes">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes.webp" alt="quotes" title="quotes">
                                                </span>
                                                <p>From start to finish, their commitment to quality and
                                                attention to detail were truly exceptional. The software they
                                                developed has transformed our operations and exceeded
                                                our wildest expectations.</p>
                                                <span class="quotes quotes_rev">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes_rev.webp" alt="quotes" title="quotes">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6 mx-auto">
                                        <div class="testimonial_txt_card">
                                            <div class="client_bio">
                                                <div class="d-flex align-items-center">
                                                    <span class="client_img">
                                                        <img src="<?=base_url()?>assets/images/clients/isabella_torres.jpeg" alt="client testimonial image" title="client testimonial">
                                                    </span>
                                                    <div class="">
                                                        <h4 class="m-0">ISABELLA TORRES</h4>
                                                        <h5 class="m-0">VP of Operations</h5>
                                                    </div>
                                                </div>
                                                <div class="">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <!-- <i class="fa fa-star-half-o"></i> -->
                                                </div>
                                            </div>
                                            <div class="client_words">
                                                <span class="quotes">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes.webp" alt="quotes" title="quotes">
                                                </span>
                                                <p>Transparent communication and timely delivery are just a
                                                few of the qualities that make them stand out. The software
                                                they developed has streamlined our operations and given
                                                us a competitive advantage.</p>
                                                <span class="quotes quotes_rev">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes_rev.webp" alt="quotes" title="quotes">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6 mx-auto">
                                        <div class="testimonial_txt_card">
                                            <div class="client_bio">
                                                <div class="d-flex align-items-center">
                                                    <span class="client_img">
                                                        <img src="<?=base_url()?>assets/images/clients/emily_charlotte.jpg" alt="client testimonial image" title="client testimonial">
                                                    </span>
                                                    <div class="">
                                                        <h4 class="m-0">EMILY CHARLOTTE</h4>
                                                        <h5 class="m-0">Vice President Reach Foundation The president club</h5>
                                                    </div>
                                                </div>
                                                <div class="">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <!-- <i class="fa fa-star-half-o"></i> -->
                                                </div>
                                            </div>
                                            <div class="client_words">
                                                <span class="quotes">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes.webp" alt="quotes" title="quotes">
                                                </span>
                                                <p>WebOConnect's expertise in the insurance industry and
                                                commitment to quality have been instrumental in
                                                developing a robust solution that has streamlined our
                                                claims processing and improved customer satisfaction.</p>
                                                <span class="quotes quotes_rev">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes_rev.webp" alt="quotes" title="quotes">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6 mx-auto">
                                        <div class="testimonial_txt_card">
                                            <div class="client_bio">
                                                <div class="d-flex align-items-center">
                                                    <span class="client_img">
                                                        <img src="<?=base_url()?>assets/images/clients/isabella_mary.jpg" alt="client testimonial image" title="client testimonial">
                                                    </span>
                                                    <div class="">
                                                        <h4 class="m-0">ISABELLA MARY JOHNSON</h4>
                                                        <h5 class="m-0">Chief Operating Officer canvas XO</h5>
                                                    </div>
                                                </div>
                                                <div class="">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <!-- <i class="fa fa-star-half-o"></i> -->
                                                </div>
                                            </div>
                                            <div class="client_words">
                                                <span class="quotes">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes.webp" alt="quotes" title="quotes">
                                                </span>
                                                <p>Their deep industry knowledge and ability to deliver
                                                tailored solutions have given us a cutting-edge software
                                                that has transformed our business processes and boosted
                                                our bottom line.</p>
                                                <span class="quotes quotes_rev">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes_rev.webp" alt="quotes" title="quotes">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6 mx-auto">
                                        <div class="testimonial_txt_card">
                                            <div class="client_bio">
                                                <div class="d-flex align-items-center">
                                                    <span class="client_img">
                                                        <img src="<?=base_url()?>assets/images/clients/benjamin_gomez.jpeg" alt="client testimonial image" title="client testimonial">
                                                    </span>
                                                    <div class="">
                                                        <h4 class="m-0">BENJAMIN GOMEZ</h4>
                                                        <h5 class="m-0">CEO</h5>
                                                    </div>
                                                </div>
                                                <div class="">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <!-- <i class="fa fa-star-half-o"></i> -->
                                                </div>
                                            </div>
                                            <div class="client_words">
                                                <span class="quotes">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes.webp" alt="quotes" title="quotes">
                                                </span>
                                                <p>The innovative software they developed has given us a
                                                competitive edge and helped us achieve unprecedented
                                                growth and market share.</p>
                                                <span class="quotes quotes_rev">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes_rev.webp" alt="quotes" title="quotes">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6 mx-auto">
                                        <div class="testimonial_txt_card">
                                            <div class="client_bio">
                                                <div class="d-flex align-items-center">
                                                    <span class="client_img">
                                                        <img src="<?=base_url()?>assets/images/clients/olivia_grace.jpg" alt="client testimonial image" title="client testimonial">
                                                    </span>
                                                    <div class="">
                                                        <h4 class="m-0">OLIVIA GRACE</h4>
                                                        <h5 class="m-0">Co-Founder state medical equipement</h5>
                                                    </div>
                                                </div>
                                                <div class="">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <!-- <i class="fa fa-star-half-o"></i> -->
                                                </div>
                                            </div>
                                            <div class="client_words">
                                                <span class="quotes">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes.webp" alt="quotes" title="quotes">
                                                </span>
                                                <p>The custom software they developed has streamlined our
                                                operations and helped us achieve unprecedented growth
                                                and efficiency, exceeding our expectations.</p>
                                                <span class="quotes quotes_rev">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes_rev.webp" alt="quotes" title="quotes">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6 mx-auto">
                                        <div class="testimonial_txt_card">
                                            <div class="client_bio">
                                                <div class="d-flex align-items-center">
                                                    <span class="client_img">
                                                        <img src="<?=base_url()?>assets/images/clients/reginald_arthur.jpg" alt="client testimonial image" title="client testimonial">
                                                    </span>
                                                    <div class="">
                                                        <h4 class="m-0">REGINALD ARTHUR</h4>
                                                        <h5 class="m-0">Founder/CEO BIGZ equipment</h5>
                                                    </div>
                                                </div>
                                                <div class="">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <!-- <i class="fa fa-star-half-o"></i> -->
                                                </div>
                                            </div>
                                            <div class="client_words">
                                                <span class="quotes">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes.webp" alt="quotes" title="quotes">
                                                </span>
                                                <p>WebOConnect's expertise in the healthcare industry and
                                                commitment to quality have been instrumental in
                                                developing a robust solution that has improved patient
                                                care and streamlined our operations.</p>
                                                <span class="quotes quotes_rev">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes_rev.webp" alt="quotes" title="quotes">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6 mx-auto">
                                        <div class="testimonial_txt_card">
                                            <div class="client_bio">
                                                <div class="d-flex align-items-center">
                                                    <span class="client_img">
                                                        <img src="<?=base_url()?>assets/images/clients/jacob_reyes.jpeg" alt="client testimonial image" title="client testimonial">
                                                    </span>
                                                    <div class="">
                                                        <h4 class="m-0">JACOB REYES</h4>
                                                        <h5 class="m-0">CIO</h5>
                                                    </div>
                                                </div>
                                                <div class="">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <!-- <i class="fa fa-star-half-o"></i> -->
                                                </div>
                                            </div>
                                            <div class="client_words">
                                                <span class="quotes">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes.webp" alt="quotes" title="quotes">
                                                </span>
                                                <p>Their deep industry knowledge and ability to deliver
                                                tailored solutions have given us a cutting-edge software
                                                that has transformed our business processes and boosted
                                                our bottom line.</p>
                                                <span class="quotes quotes_rev">
                                                    <img width="30" src="<?=base_url()?>assets/images/icons/quotes_rev.webp" alt="quotes" title="quotes">
                                                </span>
                                            </div>
                                        </div>
                                    </div>



                                    
                                    


                                </div>
                            </div>

                        </div>

                        <div class="tab-pane fade" id="pills-goodfirm" role="tabpanel" aria-labelledby="pills-goodfirm-tab">
                            <div class="row my-5 g-4">
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/goodfirm_reveiw1.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/goodfirm_reveiw2.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/goodfirm_reveiw3.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/goodfirm_reveiw4.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/goodfirm_reveiw5.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/goodfirm_reveiw6.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/goodfirm_reveiw7.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/goodfirm_reveiw8.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/goodfirm_reveiw9.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/goodfirm_reveiw10.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/goodfirm_reveiw11.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/goodfirm_reveiw12.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/goodfirm_reveiw13.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/goodfirm_reveiw14.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/goodfirm_reveiw15.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/goodfirm_reveiw16.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/goodfirm_reveiw17.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/goodfirm_reveiw18.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/goodfirm_reveiw19.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/goodfirm_reveiw20.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/goodfirm_reveiw21.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/goodfirm_reveiw22.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/goodfirm_reveiw23.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/goodfirm_reveiw24.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/goodfirm_reveiw25.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/goodfirm_reveiw26.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/goodfirm_reveiw27.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/goodfirm_reveiw28.webp" alt="weboconnect testimonials">
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-trustpilot" role="tabpanel" aria-labelledby="pills-trustpilot-tab">
                            <div class="row my-5 g-4">
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/trustpilot_review1.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/trustpilot_review2.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/trustpilot_review3.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/trustpilot_review4.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/trustpilot_review5.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/trustpilot_review6.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/trustpilot_review7.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/trustpilot_review8.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/trustpilot_review9.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/trustpilot_review10.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/trustpilot_review11.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/trustpilot_review12.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/trustpilot_review13.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/trustpilot_review14.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/trustpilot_review15.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/trustpilot_review16.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/trustpilot_review17.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/trustpilot_review18.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/trustpilot_review19.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/trustpilot_review20.webp" alt="weboconnect testimonials">
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-clutch" role="tabpanel" aria-labelledby="pills-clutch-tab">
                            <div class="row my-5 g-4">
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/clutch_review1.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/clutch_review2.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/clutch_review3.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/clutch_review4.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/clutch_review5.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/clutch_review6.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/clutch_review7.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/clutch_review8.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/clutch_review9.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/clutch_review10.webp" alt="weboconnect testimonials">
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-google" role="tabpanel" aria-labelledby="pills-google-tab">
                            <div class="row my-5 g-4">
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/google_review1.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/google_review2.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/google_review3.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/google_review4.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/google_review5.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/google_review6.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/google_review7.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/google_review8.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/google_review9.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/google_review10.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/google_review11.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/google_review12.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/google_review13.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/google_review14.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/google_review15.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/google_review16.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/google_review17.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/google_review18.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/google_review19.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/google_review20.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/google_review21.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/google_review22.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/google_review23.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/google_review24.webp" alt="weboconnect testimonials">
                                </div>
                                <div class="col-12">
                                    <img class="w-100" src="<?=base_url()?>assets/images/weboconnect_assets/google_review25.webp" alt="weboconnect testimonials">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-12 text-center">
                    <a class="btn view_all_button fs-16 fw-600 " href="<?= base_url() ?>testimonials">View All</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $this->load->view('front/common/footer_form') ?>
<?php $this->load->view('front/common/footer') ?>

</body> 
<?php $this->load->view('front/common/script') ?>




</html>
