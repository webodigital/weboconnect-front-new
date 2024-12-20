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

<section class="section_padding mob_app_framework_banner">
    <div class="container">
        <div class="row justify-content-between align-items-center g-4">
            <div class="col-md-6">
                <h1 class="fs-30 fw-600 text-white">Weboconnect Careers</h1>
                <h6 class="fs-18 fw-500 text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</h6>
            </div>
            <div class="col-md-5">
                <img class="w-100" src="<?= base_url() ?>assets/images/mobile_app_framework/mob_app.webp" alt="JavaScript FrameWork">
            </div>
        </div>
    </div>
</section>

<section class="section_padding technologies_frameworks">
  <div class="container">
    <!-- <div class="text-center mb-4">
        <h2 class="fs-30 fw-600">Key Mobile App Technology Competence</h2>
    </div> -->
    <div class="row">
        <div class="col-12">

          <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-native" role="tabpanel" aria-labelledby="pills-native-tab" tabindex="0">
                  <div class="row justify-content-between g-4 mt-4">
                      <div class="col-lg-12 col-md-12 col-12" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200">
                          <!-- <h3 class="fs-24 fw-600 mb-3">
                              <span><img width="50" src="<?= base_url() ?>assets/images/icons/android_card.webp" alt="Android"></span> Android
                          </h3> -->
                          <div class="overflow_x_auto">
                            <ul class="scroll_horizontal_m_screen mx-auto nav nav-flex justify-content-center nav-pills vertical_tab_nav gap-2" id="v-pills_native_android-tab" role="tablist" aria-orientation="vertical">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="v-pills_native_android-SDK-tab" data-bs-toggle="pill" data-bs-target="#v-pills_native_android-SDK" type="button" role="tab" aria-controls="v-pills_native_android-SDK" aria-selected="true">Mern Stack Developer</button>
                                </li>
                                
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="v-pills_native_android-AADT-tab" data-bs-toggle="pill" data-bs-target="#v-pills_native_android-AADT" type="button" role="tab" aria-controls="v-pills_native_android-AADT" aria-selected="true">Php Developer</button>
                                </li>
                                
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="v-pills_native_android-MAAPL-tab" data-bs-toggle="pill" data-bs-target="#v-pills_native_android-MAAPL" type="button" role="tab" aria-controls="v-pills_native_android-MAAPL" aria-selected="true">Wordpress Developer</button>
                                </li>
                                
                                <!-- <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="v-pills_native_android-MAATT-tab" data-bs-toggle="pill" data-bs-target="#v-pills_native_android-MAATT" type="button" role="tab" aria-controls="v-pills_native_android-MAATT" aria-selected="true">Major Android App Testing Tools</button>
                                </li>
                                
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="v-pills_native_android-emulator-tab" data-bs-toggle="pill" data-bs-target="#v-pills_native_android-emulator" type="button" role="tab" aria-controls="v-pills_native_android-emulator" aria-selected="true">Emulator</button>
                                </li> -->
                            </ul>
                          </div>
                      </div>

                      <div class="col-lg-12 col-md-12 col-12" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200">
          
                          <div class="tab-content" id="myTabContent">
                          <!-- SaaS Development Content -->
                              <div class="tab-pane fade show active" id="v-pills_native_android-SDK" role="tabpanel" aria-labelledby="v-pills_native_android-SDK-tab" tabindex="0">
                                  <div class="content-area" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200">
                                      <div class="text-start">
                                        <div class="row">
                                           <div class="col-md-3 col-xl-2">
                                            <h5 class="fs-16 fw-700">Job Title :</h5>
                                          </div>
                                          <div class="col">
                                            <p class="fs-16 fw-400">Mern Stack Developer</p>
                                          </div>
                                        </div>

                                        <div class="row">
                                           <div class="col-md-3 col-xl-2">
                                            <h5 class="fs-16 fw-700">Job position :</h5>
                                          </div>
                                          <div class="col">
                                            <p class="fs-16 fw-400">Mern Stack Developer</p>
                                          </div>
                                        </div>
                                        
                                        <div class="row">
                                           <div class="col-md-3 col-xl-2">
                                            <h5 class="fs-16 fw-700">Job Location :</h5>
                                          </div>
                                          <div class="col">
                                            <p class="fs-16 fw-400">Delhi</p>
                                          </div>
                                        </div>
                                        
                                        <div class="row">
                                           <div class="col-md-3 col-xl-2">
                                            <h5 class="fs-16 fw-700">Experience :</h5>
                                          </div>
                                          <div class="col">
                                            <p class="fs-16 fw-400">2 - 5 Years</p>
                                          </div>
                                        </div>
                                        
                                        <div class="row">
                                          <div class="col-md-3 col-xl-2">
                                            <h5 class="fs-16 fw-700">Responsibilities and Duties :</h5>
                                          </div>
                                          <div class="col">
                                            <p class="fs-16 fw-400">Proficiency in server-side programming with Node.js and working with NoSQL databases</p>
                                            <p class="fs-16 fw-400">Experience in building and consuming REST API</p>
                                            <p class="fs-16 fw-400">Worked as Full stack developer with NodeJS, React or Angular JS, NoSQL DB</p>
                                            <p class="fs-16 fw-400">Is comfortable with Agile development.</p>
                                            <p class="fs-16 fw-400">Good knowledge of Javascript, JSON, GIT</p>
                                            <p class="fs-16 fw-400">Enthusiasm in writing scalable code</p>
                                            <p class="fs-16 fw-400">Sound knowledge of data structures, algorithms, and system design</p>
                                            <p class="fs-16 fw-400">Troubleshoot and debug applications</p>
                                            <p class="fs-16 fw-400">Develop functional and sustainable web or mobile applications with clean codes</p>
                                          </div>
                                          <div class="col-12 text-center mt-4">
                                            <button class="btn btn-outline-primary px-5" data-bs-toggle="modal" data-bs-target="#apply_new_modal">Apply</button>
                                          </div>
                                        </div>
                                        
                                      </div>
                                  </div>
                              </div>

                          <!-- Additional Content (for each tab) -->
                          <!-- Repeat the structure below for each tab -->
                              <div class="tab-pane fade" id="v-pills_native_android-AADT" role="tabpanel" aria-labelledby="v-pills_native_android-AADT-tab" tabindex="0">
                                  <div class="content-area" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200">
                                    <div class="text-start">
                                      <div class="row">
                                          <div class="col-md-3 col-xl-2">
                                          <h5 class="fs-16 fw-700">Job Title :</h5>
                                        </div>
                                        <div class="col">
                                          <p class="fs-16 fw-400">PHP Developer</p>
                                        </div>
                                      </div>

                                      <div class="row">
                                          <div class="col-md-3 col-xl-2">
                                          <h5 class="fs-16 fw-700">Job position :</h5>
                                        </div>
                                        <div class="col">
                                          <p class="fs-16 fw-400">PHP Developer - Trainee/Software Engineer/Sr.Software Engineer</p>
                                        </div>
                                      </div>
                                      
                                      <div class="row">
                                          <div class="col-md-3 col-xl-2">
                                          <h5 class="fs-16 fw-700">Job Location :</h5>
                                        </div>
                                        <div class="col">
                                          <p class="fs-16 fw-400">Delhi</p>
                                        </div>
                                      </div>
                                      
                                      <div class="row">
                                          <div class="col-md-3 col-xl-2">
                                          <h5 class="fs-16 fw-700">Experience :</h5>
                                        </div>
                                        <div class="col">
                                          <p class="fs-16 fw-400">1 - 5 Years</p>
                                        </div>
                                      </div>
                                      
                                      <div class="row">
                                        <div class="col-md-3 col-xl-2">
                                          <h5 class="fs-16 fw-700">Responsibilities and Duties :</h5>
                                        </div>
                                        <div class="col">
                                          <p class="fs-16 fw-400">Executing full life-cycle software development </p>
                                          <p class="fs-16 fw-400">Writing well designed, testable, efficient code</p>
                                          <p class="fs-16 fw-400">Documenting and maintaining software functionality</p>
                                          <p class="fs-16 fw-400">Complying with project plans and industry standards</p>
                                          <p class="fs-16 fw-400">Experience in MVC Framework , YII Framework, Core PHP, JQuery and MySql</p>
                                          <p class="fs-16 fw-400">Ability to research and modify/customize plug-ins.</p>
                                          <p class="fs-16 fw-400">Understands responsive design and CSS3/HTML5 technologies.</p>
                                          <p class="fs-16 fw-400">Good hands on experience in XAMPP/WAMP technologies, integrating 3rd party Web Service using SOAP, Rest-full API, oAuth</p>
                                          <p class="fs-16 fw-400">Positive Attitude, Great problem solving skills</p>
                                          <p class="fs-16 fw-400">Self-starter with high standards, able to work independently or on a team and open about offering options/solutions.</p>
                                        </div>
                                        <div class="col-12 text-center mt-4">
                                          <button class="btn btn-outline-primary px-5" data-bs-toggle="modal" data-bs-target="#apply_new_modal">Apply</button>
                                        </div>
                                      </div>
                                      
                                    </div>
                                  </div>
                              </div>
                              
                              <div class="tab-pane fade" id="v-pills_native_android-MAAPL" role="tabpanel" aria-labelledby="v-pills_native_android-MAAPL-tab" tabindex="0">
                                  <div class="content-area" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200">
                                    <div class="text-start">
                                      <div class="row">
                                          <div class="col-md-3 col-xl-2">
                                          <h5 class="fs-16 fw-700">Job Title :</h5>
                                        </div>
                                        <div class="col">
                                          <p class="fs-16 fw-400">WordPress Developer</p>
                                        </div>
                                      </div>

                                      <div class="row">
                                          <div class="col-md-3 col-xl-2">
                                          <h5 class="fs-16 fw-700">Job position :</h5>
                                        </div>
                                        <div class="col">
                                          <p class="fs-16 fw-400">WordPress Developer</p>
                                        </div>
                                      </div>
                                      
                                      <div class="row">
                                          <div class="col-md-3 col-xl-2">
                                          <h5 class="fs-16 fw-700">Job Location :</h5>
                                        </div>
                                        <div class="col">
                                          <p class="fs-16 fw-400">Delhi</p>
                                        </div>
                                      </div>
                                      
                                      <div class="row">
                                          <div class="col-md-3 col-xl-2">
                                          <h5 class="fs-16 fw-700">Experience :</h5>
                                        </div>
                                        <div class="col">
                                          <p class="fs-16 fw-400">2 - 4 Years</p>
                                        </div>
                                      </div>
                                      
                                      <div class="row">
                                        <div class="col-md-3 col-xl-2">
                                          <h5 class="fs-16 fw-700">Responsibilities and Duties :</h5>
                                        </div>
                                        <div class="col">
                                          <p class="fs-16 fw-400">CMS, Wordpress, Plugin Customization, website speed optimization</p>
                                          <p class="fs-16 fw-400">Develop new user-facing features</p>
                                          <p class="fs-16 fw-400">Must know responsive html/ css and wordpress (CMS)</p>
                                          <p class="fs-16 fw-400">Must have Strong knowledge of PHP and Mysql, HTML5, JavaScript, jQuery and ajax.</p>
                                          <p class="fs-16 fw-400">Form validation through PHP & Java Script</p>
                                          <p class="fs-16 fw-400">Self-starter with high standards, ability to work independently or on a team and open about offering options/solutions.</p>
                                          <p class="fs-16 fw-400">Word press plugin customization, theme development and creating widgets.</p>
                                          <p class="fs-16 fw-400">Correctly employ design pattern.</p>
                                          <p class="fs-16 fw-400">Develop new user-facing features</p>
                                        </div>
                                        <div class="col-12 text-center mt-4">
                                          <button class="btn btn-outline-primary px-5" data-bs-toggle="modal" data-bs-target="#apply_new_modal">Apply</button>
                                        </div>
                                      </div>
                                      
                                    </div>
                                  </div>
                              </div>
                          
                              <!-- <div class="tab-pane fade" id="v-pills_native_android-MAATT" role="tabpanel" aria-labelledby="v-pills_native_android-MAATT-tab" tabindex="0">
                                  <div class="content-area">
                                      <img src="<?=base_url()?>assets/images/mobile_app_framework/android/major_android_app_testing_tools.webp" alt="Major Android App Testing Tools" class="content-image w-100 rounded-5">
                                      <div class="content-overlay text-start">
                                          <p class="fs-16 fw-400">
                                          Google Android Emulator • The official Android SDK</p>
                                      </div>
                                  </div>
                              </div>

                              <div class="tab-pane fade" id="v-pills_native_android-emulator" role="tabpanel" aria-labelledby="v-pills_native_android-emulator-tab" tabindex="0">
                                  <div class="content-area">
                                      <img src="<?=base_url()?>assets/images/mobile_app_framework/android/emulator.webp" alt="Emulator" class="content-image w-100 rounded-5">
                                      <div class="content-overlay text-start">
                                          <p class="fs-16 fw-400">MobiOne • eggplan</p>
                                      </div>
                                  </div>
                              </div> -->


                          <!-- Repeat similar structure for each tab -->
                          </div>
                      </div>
                  </div>


              </div>
          </div>

        </div>
    </div>
  </div>
</section>


<section class="section_padding pg_bnr bg-white back_cover" style="background-image: url('<?= base_url() ?>assets/images/pg_bnr/mob_app_devlp.webp'); min-height:300px;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class=" text-center text-lg-start">
                    <h2 class="fs-30 fw-700 text-white">Transform Your Ideas into Reality</h2>
                    <h6 class="fs-18 fw-500 text-white mb-3">Dive into the digital era with Weboconnect, where your vision meets our mobile app development expertise. Let's create something extraordinary together and set new benchmarks in the app world.</h6>
                    <a href="<?= base_url() ?>contact" class="btn btn-outline-light btn-rounded">Contact Us</a>
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
