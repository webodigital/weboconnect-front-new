
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <title>WebOConnect|web development|software</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta charset="utf-8">
    <meta name="author" content="Roman Kirichik">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

  <!-- ====================== Links =========================== -->
  <?php $this->load->view('front/common/styles') ?>
  <!-- Owl Carousel CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

</head>
<body>

<?php $this->load->view('front/common/header') ?>

<section class="py-5">
  <h1 class="text-center">Case Studies</h1>

  <div class="container">
    <div class="row g-4 justify-content-center1">


      <?php foreach ($casestudies as $casestudy) : ?>
        <div class="col-md-6">
          <div class="case_study_list_card" style="background: <?php echo $casestudy->background_color; ?>;">
            <!-- #70E1E2 -->
              <div class="row">
                  <div class="col-sm-8">
                      <div>
                          <img class="work-img" src="<?php echo base_url('assets/images/case_studies/uploads/thumbnails/' . $casestudy->front_thumbnail); ?>" alt="<?php echo htmlspecialchars($casestudy->title, ENT_QUOTES, 'UTF-8'); ?>" />
                      </div>
                  </div>
                  <div class="col-sm-4">
                      <div class="case_study_list_card_cntnt">
                          <div>
                              <div class="logo_bar">
                                  <img width="" src="<?php echo base_url('assets/images/case_studies/uploads/thumbnails/' . $casestudy->front_logo); ?>" alt="<?php echo htmlspecialchars($casestudy->title, ENT_QUOTES, 'UTF-8'); ?>"  />
                              </div>
                              <p> <?php echo $casestudy->description??''; ?></p>
                          </div>
                          <a class="read_more_btn" href="<?php echo base_url('case-study-details/' . $casestudy->slug); ?>">View Case Study</a>
                      </div>
                  </div>
              </div>
          </div>
        </div>
      <?php endforeach; ?>

      <div>
          <?php echo $pagination; ?>
      </div>


      <!-- <div class="col-md-6">
          <div class="case_study_list_card" style="background: #70E1E2;">
              <div class="row">
                  <div class="col-sm-8">
                      <div>
                          <img class="work-img" src="<?= base_url() ?>assets/images/case-studies/images/nurseify.webp" alt="Web Design and Development Services" />
                      </div>
                  </div>
                  <div class="col-sm-4">
                      <div class="case_study_list_card_cntnt">
                          <div>
                              <div class="logo_bar">
                                  <img width="" src="<?= base_url() ?>assets/images/case-studies/logos/nurseify.webp" alt="Nurseify" title="Nurseify" />
                              </div>
                              <p> Empowering Nurses and Healthcare Facilities with On-Demand Gig Work</p>
                          </div>
                          <a class="read_more_btn" href="case-study-details">Read More</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-md-6">
          <div class="case_study_list_card" style="background: #41488D;">
              <div class="row">
                  <div class="col-sm-8">
                      <div>
                          <img class="work-img" src="<?= base_url() ?>assets/images/case-studies/images/ThinkndoNOW.webp" alt="Web Design and Development Services" />
                      </div>
                  </div>
                  <div class="col-sm-4">
                      <div class="case_study_list_card_cntnt">
                          <div>
                              <div class="logo_bar">
                                  <img class="" src="<?= base_url() ?>assets/images/case-studies/logos/ThinkndoNOW.webp" alt="ThinkndoNOW" title="ThinkndoNOW" />
                                  <span class="fs-10 fw-600" style="margin-left:5px;">ThinknDONOW</span>
                              </div>
                              <p>Empowering Global Giving Through Thoughtful Action</p>
                          </div>

                          <a class="read_more_btn" href="case-study-details">Read More</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-md-6">
          <div class="case_study_list_card" style="background: #249BAF;">
              <div class="row">
                  <div class="col-sm-8">
                      <div>
                          <img class="work-img" src="<?= base_url() ?>assets/images/case-studies/images/DoctorLocums.webp" alt="Web Design and Development Services" />
                      </div>
                  </div>
                  <div class="col-sm-4">
                      <div class="case_study_list_card_cntnt">
                          <div>
                              <div class="logo_bar">
                                  <img class="" src="<?= base_url() ?>assets/images/case-studies/logos/DoctorLocums.webp" alt="Doctor Locums" title="Doctor Locums" />
                              </div>
                              <p>Transforming Healthcare Staffing with AI-Powered Matching</p>
                          </div>

                          <a class="read_more_btn" href="case-study-details">Read More</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-md-6">
          <div class="case_study_list_card" style="background: #523993;">
              <div class="row">
                  <div class="col-sm-8">
                      <div>
                          <img class="work-img" src="<?= base_url() ?>assets/images/case-studies/images/Liebe.webp" alt="Web Design and Development Services" />
                      </div>
                  </div>
                  <div class="col-sm-4">
                      <div class="case_study_list_card_cntnt">
                          <div>
                              <div class="logo_bar">
                                  <img class="" src="<?= base_url() ?>assets/images/case-studies/logos/Liebe.webp" alt="Liebe" title="Liebe" />
                              </div>
                              <p>A Comprehensive Solution for Host Management and Agency Operations</p>
                          </div>

                          <a class="read_more_btn" href="case-study-details">Read More</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-md-6 ">
          <div class="case_study_list_card" style="background: #E63933;">
              <div class="row">
                  <div class="col-sm-8">
                      <div>
                          <img class="work-img" src="<?= base_url() ?>assets/images/case-studies/images/anyshift.webp" alt="Web Design and Development Services" />
                      </div>
                  </div>
                  <div class="col-sm-4">
                      <div class="case_study_list_card_cntnt">
                          <div>
                              <div class="logo_bar">
                                  <img class="" src="<?= base_url() ?>assets/images/case-studies/logos/anyshift.webp" alt="anyshift" title="anyshift" />
                              </div>
                              <p>Empowering Healthcare Professionals with OnDemand Shift Flexibility</p>
                          </div>
                          <a class="read_more_btn" href="case-study-details">Read More</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-md-6">
          <div class="case_study_list_card" style="background: #16B08A;">
              <div class="row">
                  <div class="col-sm-8">
                      <div>
                          <img class="work-img" src="<?= base_url() ?>assets/images/case-studies/images/Island.webp" alt="Web Design and Development Services" />
                      </div>
                  </div>
                  <div class="col-sm-4">
                      <div class="case_study_list_card_cntnt">
                          <div>
                              <div class="logo_bar">
                                  <img class="" src="<?= base_url() ?>assets/images/case-studies/logos/Island.webp" alt="Island" title="Island" />
                              </div>
                              <p>Your Comprehensive Guide to Lamma Island, Hong Kong</p>
                          </div>
                          <a class="read_more_btn" href="case-study-details">Read More</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>                            

      <div class="col-md-6">
          <div class="case_study_list_card" style="background: #659062;">
              <div class="row">
                  <div class="col-sm-8">
                      <div>
                          <img class="work-img" src="<?= base_url() ?>assets/images/case-studies/images/ICNA.webp" alt="Web Design and Development Services" />
                      </div>
                  </div>
                  <div class="col-sm-4">
                      <div class="case_study_list_card_cntnt">
                          <div>
                              <div class="logo_bar">
                                  <img class="" src="<?= base_url() ?>assets/images/case-studies/logos/ICNA.webp" alt="ICNA" title="ICNA" />
                              </div>
                              <p>Revolutionizing Community Engagement for American Muslims</p>
                          </div>
                          <a class="read_more_btn" href="case-study-details">Read More</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-md-6">
          <div class="case_study_list_card" style="background: #AFD1AE;">
              <div class="row">
                  <div class="col-sm-8">
                      <div>
                          <img class="work-img" src="<?= base_url() ?>assets/images/case-studies/images/Loppekortet.webp" alt="Web Design and Development Services" />
                      </div>
                  </div>
                  <div class="col-sm-4">
                      <div class="case_study_list_card_cntnt">
                          <div>
                              <div class="logo_bar">
                                  <img class="" src="<?= base_url() ?>assets/images/case-studies/logos/Loppekortet.webp" alt="Loppekortet" title="Loppekortet" />
                                  <span class="fs-14 fw-600 ml-1" style="color:#AFD1AE;">Loppekortet</span>
                              </div>
                              <p>The Ultimate App for Flea Markets and Secondhand Shopping</p>
                          </div>
                          <a class="read_more_btn" href="case-study-details">Read More</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-md-6">
          <div class="case_study_list_card" style="background: #6DEA8C;">
              <div class="row">
                  <div class="col-sm-8">
                      <div>
                          <img class="work-img" src="<?= base_url() ?>assets/images/case-studies/images/WalletCab.webp" alt="Web Design and Development Services" />
                      </div>
                  </div>
                  <div class="col-sm-4">
                      <div class="case_study_list_card_cntnt">
                          <div>
                              <div class="logo_bar">
                                  <img class="" src="<?= base_url() ?>assets/images/case-studies/logos/WalletCab.webp" alt="WalletCab" title="WalletCab" />
                              </div>
                              <p>Revolutionizing Outstation Travel with Seamless Car Booking Solutions</p>
                          </div>
                          <a class="read_more_btn" href="case-study-details">Read More</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-md-6">
          <div class="case_study_list_card" style="background: #44A12C;">
              <div class="row">
                  <div class="col-sm-8">
                      <div>
                          <img class="work-img" src="<?= base_url() ?>assets/images/case-studies/images/worktimer.webp" alt="Web Design and Development Services" />
                      </div>
                  </div>
                  <div class="col-sm-4">
                      <div class="case_study_list_card_cntnt">
                          <div>
                              <div class="logo_bar">
                                  <img class="" src="<?= base_url() ?>assets/images/case-studies/logos/worktimer.webp" alt="bookaride" title="bookaride" />
                              </div>
                              <p>Optimizing Business Efficiency with Seamless Task Management</p>
                          </div>
                          <a class="read_more_btn" href="case-study-details">Read More</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-md-6">
          <div class="case_study_list_card" style="background: #FDC648;">
              <div class="row">
                  <div class="col-sm-8">
                      <div>
                          <img class="work-img" src="<?= base_url() ?>assets/images/case-studies/images/ProRider.webp" alt="Web Design and Development Services" />
                      </div>
                  </div>
                  <div class="col-sm-4">
                      <div class="case_study_list_card_cntnt">
                          <div>
                              <div class="logo_bar">
                                  <img class="" src="<?= base_url() ?>assets/images/case-studies/logos/ProRider.webp" alt="ProRider" title="ProRider" />
                              </div>
                              <p class="fs-12 text_black">ProRider is a groundbreaking super app that connects delivery riders with companies, streamlining recruitment, job matching, and rider verification for the delivery industry.</p>
                          </div>
                          <a class="read_more_btn" href="case-study-details">Read More</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-md-6">
          <div class="case_study_list_card" style="background: #3A8CDE;">
              <div class="row">
                  <div class="col-sm-8">
                      <div>
                          <img class="work-img" src="<?= base_url() ?>assets/images/case-studies/images/airix.webp" alt="Web Design and Development Services" />
                      </div>
                  </div>
                  <div class="col-sm-4">
                      <div class="case_study_list_card_cntnt">
                          <div>
                              <div class="logo_bar">
                                  <img class="" src="<?= base_url() ?>assets/images/case-studies/logos/airix.webp" alt="Airix" title="Airix" />
                              </div>
                              <p class="fs-12">Airix is an on-demand "gig" app for connecting nurses directly with healthcare facilities, it allows the nurse to share his or her availability, experience, and hourly rate.</p>
                          </div>
                          <a class="read_more_btn" href="case-study-details">Read More</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>


      <div class="col-md-6">
          <div class="case_study_list_card" style="background: #005FD9;">
              <div class="row">
                  <div class="col-sm-8">
                      <div>
                          <img class="work-img" src="<?= base_url() ?>assets/images/case-studies/images/finowiz.webp" alt="Web Design and Development Services" />
                      </div>
                  </div>
                  <div class="col-sm-4">
                      <div class="case_study_list_card_cntnt">
                          <div>
                              <div class="logo_bar">
                                  <img class="" src="<?= base_url() ?>assets/images/case-studies/logos/finowiz.webp" alt="Finowiz" title="Finowiz" />
                              </div>
                              <p class="fs-12">Finowiz is a comprehensive forex trading app offering real-time market data, advanced trading tools, and educational resources to help both beginner and professional traders succeed.</p>
                          </div>
                          <a class="read_more_btn" href="case-study-details">Read More</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      
      <div class="col-md-6">
          <div class="case_study_list_card" style="background: #5DE094;">
              <div class="row">
                  <div class="col-sm-8">
                      <div>
                          <img class="work-img" src="<?= base_url() ?>assets/images/case-studies/images/terp2go.webp" alt="Web Design and Development Services" />
                      </div>
                  </div>
                  <div class="col-sm-4">
                      <div class="case_study_list_card_cntnt">
                          <div>
                              <div class="logo_bar" style="background: #000000;">
                                  <img class="" src="<?= base_url() ?>assets/images/case-studies/logos/terp2go.webp" alt="terp2go" title="terp2go" />
                              </div>
                              <p class="fs-12">Terp2Go provides a platform for delivering pre-recorded content in sign language, with a system to detect and correct caption error.</p>
                          </div>
                          <a class="read_more_btn" href="case-study-details">Read More</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-md-6">
          <div class="case_study_list_card" style="background: #412939;">
              <div class="row">
                  <div class="col-sm-8">
                      <div>
                          <img class="work-img" src="<?= base_url() ?>assets/images/case-studies/images/goodwork.webp" alt="Web Design and Development Services" />
                      </div>
                  </div>
                  <div class="col-sm-4">
                      <div class="case_study_list_card_cntnt">
                          <div>
                              <div class="logo_bar">
                                  <img class="" src="<?= base_url() ?>assets/images/case-studies/logos/goodwork.webp" alt="goodwork" title="goodwork" />
                              </div>
                              <p class="fs-10">Goodwork is a recruitment marketplace for the healthcare staff that connects the facilities with qualified professionals, streamlines the hiring process, and ensures compliance through automated credentialing.</p>
                          </div>
                          <a class="read_more_btn" href="case-study-details">Read More</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-md-6">
          <div class="case_study_list_card" style="background: #2B3BD8;">
              <div class="row">
                  <div class="col-sm-8">
                      <div>
                          <img class="work-img" src="<?= base_url() ?>assets/images/case-studies/images/musicfix.webp" alt="Web Design and Development Services" />
                      </div>
                  </div>
                  <div class="col-sm-4">
                      <div class="case_study_list_card_cntnt">
                          <div>
                              <div class="logo_bar">
                                  <img class="" src="<?= base_url() ?>assets/images/case-studies/logos/musicfix.webp" alt="musicfix" title="musicfix" />
                              </div>
                              <p class="fs-12">Music Fix is a service that lets artists and DJs book the services of DJs and music studios with an easy interface for artists and DJs to book studio space and services with transparent pricing and availability.</p>
                          </div>
                          <a class="read_more_btn" href="case-study-details">Read More</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-md-6">
          <div class="case_study_list_card" style="background: #47FFA9;">
              <div class="row">
                  <div class="col-sm-8">
                      <div>
                          <img class="work-img" src="<?= base_url() ?>assets/images/case-studies/images/monkeyshine.webp" alt="Web Design and Development Services" />
                      </div>
                  </div>
                  <div class="col-sm-4">
                      <div class="case_study_list_card_cntnt">
                          <div>
                              <div class="logo_bar"style="background: #000000;">
                                  <img class="" src="<?= base_url() ?>assets/images/case-studies/logos/monkeyshine.webp" alt="Monkeyshine" title="Monkeyshine" />
                              </div>
                              <p class="fs-10 text_black">Monkeyshine is a user-friendly car wash booking app that connects customers with local providers, offering a range of services and real-time scheduling. The app simplifies the booking process, enhancing efficiency for both users and car wash businesses.</p>
                          </div>
                          <a class="read_more_btn" href="case-study-details">Read More</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-md-6">
          <div class="case_study_list_card" style="background: #00504F;">
              <div class="row">
                  <div class="col-sm-8">
                      <div>
                          <img class="work-img" src="<?= base_url() ?>assets/images/case-studies/images/qoach.webp" alt="Web Design and Development Services" />
                      </div>
                  </div>
                  <div class="col-sm-4">
                      <div class="case_study_list_card_cntnt">
                          <div>
                              <div class="logo_bar">
                                  <img class="" src="<?= base_url() ?>assets/images/case-studies/logos/qoach.webp" alt="Qoach" title="Qoach" />
                              </div>
                              <p class="fs-10">Qoach.io is an AI-powered coaching marketplace that connects users with the perfect coach for their needs. It also offers a platform for experienced individuals to become coaches and grow their coaching business.</p>
                          </div>
                          <a class="read_more_btn" href="case-study-details">Read More</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-md-6">
          <div class="case_study_list_card" style="background: #518FE3;">
              <div class="row">
                  <div class="col-sm-8">
                      <div>
                          <img class="work-img" src="<?= base_url() ?>assets/images/case-studies/images/fixd.webp" alt="Web Design and Development Services" />
                      </div>
                  </div>
                  <div class="col-sm-4">
                      <div class="case_study_list_card_cntnt">
                          <div>
                              <div class="logo_bar"style="background: #000000;">
                                  <img class="" src="<?= base_url() ?>assets/images/case-studies/logos/fixd.webp" alt="Fixd" title="Fixd" />
                              </div>
                              <p class="fs-12">Fixd is the hire mechanic marketplace. It offers transparent pricing and flexible scheduling, so people can easily book a repair.</p>
                          </div>
                          <a class="read_more_btn" href="case-study-details">Read More</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-md-6">
          <div class="case_study_list_card" style="background: #2A94F8;">
              <div class="row">
                  <div class="col-sm-8">
                      <div>
                          <img class="work-img" src="<?= base_url() ?>assets/images/case-studies/images/iot.webp" alt="Web Design and Development Services" />
                      </div>
                  </div>
                  <div class="col-sm-4">
                      <div class="case_study_list_card_cntnt">
                          <div>
                              <div class="logo_bar">
                                  <img class="" src="<?= base_url() ?>assets/images/case-studies/logos/iot.webp" alt="India on Track" title="bookaride" />
                              </div>
                              <p class="fs-10">India on Track is the sports training management platform, which streamlines training schedules, tracking of athletes' performance, as well as communication between coaches, athletes, and their parents.</p>
                          </div>
                          <a class="read_more_btn" href="case-study-details">Read More</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-md-6">
          <div class="case_study_list_card" style="background: #FBCE5B;">
              <div class="row">
                  <div class="col-sm-8">
                      <div>
                          <img class="work-img" src="<?= base_url() ?>assets/images/case-studies/images/personality.webp" alt="Web Design and Development Services" />
                      </div>
                  </div>
                  <div class="col-sm-4">
                      <div class="case_study_list_card_cntnt">
                          <div>
                              <div class="logo_bar" style="background: #000000;">
                                  <img class="" src="<?= base_url() ?>assets/images/case-studies/logos/personality.webp" alt="Personality" title="Personality" />
                              </div>
                              <p class="fs-10">Personality is a dating app that focuses on meaningful connections by matching users based on personality traits and values. Its unique approach to compatibility helps users foster genuine relationships, creating a more fulfilling dating experience.</p>
                          </div>
                          <a class="read_more_btn" href="case-study-details">Read More</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      
      <div class="col-md-6">
          <div class="case_study_list_card" style="background: #014284;">
              <div class="row">
                  <div class="col-sm-8">
                      <div>
                          <img class="work-img" src="<?= base_url() ?>assets/images/case-studies/images/quality_courier.webp" alt="Web Design and Development Services" />
                      </div>
                  </div>
                  <div class="col-sm-4">
                      <div class="case_study_list_card_cntnt">
                          <div>
                              <div class="logo_bar">
                                  <img class="" src="<?= base_url() ?>assets/images/case-studies/logos/quality_courier.webp" alt="Quality Courier" title="Quality Courier" />
                              </div>
                              <p class="fs-10">Quality Courier is an activity management platform for couriers, containing the optimization of real-time tracking, route, and communication. This aims to help a company improve its delivery operation management.</p>
                          </div>
                          <a class="read_more_btn" href="case-study-details">Read More</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      
      <div class="col-md-6">
          <div class="case_study_list_card" style="background: #4768EB;">
              <div class="row">
                  <div class="col-sm-8">
                      <div>
                          <img class="work-img" src="<?= base_url() ?>assets/images/case-studies/images/vaffix.webp" alt="Web Design and Development Services" />
                      </div>
                  </div>
                  <div class="col-sm-4">
                      <div class="case_study_list_card_cntnt">
                          <div>
                              <div class="logo_bar" style="background: #000000;">
                                  <img class="" src="<?= base_url() ?>assets/images/case-studies/logos/vaffix.webp" alt="Vaffix" title="Vaffix" />
                              </div>
                              <p class="fs-10">Vaffix is a live and automated webinar hosting software with advanced presentation tools, marketing support, and performance analytics to help businesses and individuals create successful virtual events.</p>
                          </div>
                          <a class="read_more_btn" href="case-study-details">Read More</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      
      <div class="col-md-6">
          <div class="case_study_list_card" style="background: #3A8CDE;">
              <div class="row">
                  <div class="col-sm-8">
                      <div>
                          <img class="work-img" src="<?= base_url() ?>assets/images/case-studies/images/staffinc.webp" alt="Web Design and Development Services" />
                      </div>
                  </div>
                  <div class="col-sm-4">
                      <div class="case_study_list_card_cntnt">
                          <div>
                              <div class="logo_bar">
                                  <img class="" src="<?= base_url() ?>assets/images/case-studies/logos/staffinc.webp" alt="staffinc" title="staffinc" />
                              </div>
                              <p class="fs-12">This platform helps agencies boost productivity by streamlining operations and reducing manual administrative burdens.</p>
                          </div>
                          <a class="read_more_btn" href="case-study-details">Read More</a>
                      </div>
                  </div>
              </div>
          </div>
      </div> -->

    </div>
  </div>
</section>


<?php $this->load->view('front/common/footer_form') ?>
<?php $this->load->view('front/common/footer') ?>
</body> 
<?php $this->load->view('front/common/script') ?>
</html>
