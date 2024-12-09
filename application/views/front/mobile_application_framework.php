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
                <h1 class="fs-30 fw-600 text-white">Mobile Application FrameWork</h1>
                <h6 class="fs-18 fw-500 text-white">With the digital world available in the grasp of your customers, why not make it easy for them to interact you? The Mobile apps are a great and easy way for your customers to show interest in your business and multiply your revenues. Our easy to use, customized and interactive apps are developed keeping your business in our hearts.</h6>
                <h6 class="fs-18 fw-500 text-white">The result- you have beautiful apps which not only engage your customers but also promote your brand. Our mobile app developers are dedicated to deliver the best quality results which help you to make your brand more recognized. We are not only capable but also extremely talented when it comes to developing Android as well as IOS apps.</h6>
            </div>
            <div class="col-md-5">
                <img class="w-100" src="<?= base_url() ?>assets/images/mobile_app_framework/mob_app.webp" alt="JavaScript FrameWork">
            </div>
        </div>
    </div>
</section>

<section class="section_padding technologies_frameworks">
  <div class="container">
    <div class="text-center mb-4">
        <h2 class="fs-30 fw-600">Key Mobile App Technology Competence</h2>
    </div>
    <div class="row">
        <div class="col-12">
            <ul class="native_hybrid_nav nav nav-pills justify-content-center mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-native-tab" data-bs-toggle="pill" data-bs-target="#pills-native" type="button" role="tab" aria-controls="pills-native" aria-selected="true">Native</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-hybrid-tab" data-bs-toggle="pill" data-bs-target="#pills-hybrid" type="button" role="tab" aria-controls="pills-hybrid" aria-selected="false">Hybrid</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-native" role="tabpanel" aria-labelledby="pills-native-tab" tabindex="0">
                    <div class="row justify-content-between align-items-center g-4 mt-4">
                        <div class="col-lg-4 col-md-12 col-12" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200">
                            <h3 class="fs-24 fw-600 mb-3">
                                <span><img width="50" src="<?= base_url() ?>assets/images/icons/android_card.png" alt="Android"></span> Android
                            </h3>
                            <ul class="nav nav-flex justify-content-center nav-pills vertical_tab_nav gap-2" id="v-pills_native_android-tab" role="tablist" aria-orientation="vertical">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="v-pills_native_android-SDK-tab" data-bs-toggle="pill" data-bs-target="#v-pills_native_android-SDK" type="button" role="tab" aria-controls="v-pills_native_android-SDK" aria-selected="true">Software Development Kit</button>
                                </li>
                                
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="v-pills_native_android-AADT-tab" data-bs-toggle="pill" data-bs-target="#v-pills_native_android-AADT" type="button" role="tab" aria-controls="v-pills_native_android-AADT" aria-selected="true">Android App Designing Tools</button>
                                </li>
                                
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="v-pills_native_android-MAAPL-tab" data-bs-toggle="pill" data-bs-target="#v-pills_native_android-MAAPL" type="button" role="tab" aria-controls="v-pills_native_android-MAAPL" aria-selected="true">Major Android App Programming (development) Languages</button>
                                </li>
                                
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="v-pills_native_android-MAATT-tab" data-bs-toggle="pill" data-bs-target="#v-pills_native_android-MAATT" type="button" role="tab" aria-controls="v-pills_native_android-MAATT" aria-selected="true">Major Android App Testing Tools</button>
                                </li>
                                
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="v-pills_native_android-emulator-tab" data-bs-toggle="pill" data-bs-target="#v-pills_native_android-emulator" type="button" role="tab" aria-controls="v-pills_native_android-emulator" aria-selected="true">Emulator</button>
                                </li>
                            </ul>
                        </div>

                        <div class="col-lg-7 col-md-12 col-12" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200">
            
                            <div class="tab-content" id="myTabContent">
                            <!-- SaaS Development Content -->
                                <div class="tab-pane fade show active" id="v-pills_native_android-SDK" role="tabpanel" aria-labelledby="v-pills_native_android-SDK-tab" tabindex="0">
                                    <div class="content-area" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200">
                                        <img src="<?=base_url()?>assets/images/mobile_app_framework/android/software_development_kit.webp" alt="Software Development Kit" class="content-image w-100 rounded-5">
                                        <div class="content-overlay text-start">
                                            <p class="fs-16 fw-600 m-0">
                                            Android SDK</p>
                                        </div>
                                    </div>
                                </div>

                            <!-- Additional Content (for each tab) -->
                            <!-- Repeat the structure below for each tab -->
                                <div class="tab-pane fade" id="v-pills_native_android-AADT" role="tabpanel" aria-labelledby="v-pills_native_android-AADT-tab" tabindex="0">
                                    <div class="content-area">
                                        <img src="<?=base_url()?>assets/images/mobile_app_framework/android/android_app_designing_tools.webp" alt="Content Management Systems" class="Android App Designing Tools">
                                        <div class="content-overlay text-start">
                                            <p class="fs-16 fw-600 m-0">Marvel • Invision • Sketch • Figma</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="tab-pane fade" id="v-pills_native_android-MAAPL" role="tabpanel" aria-labelledby="v-pills_native_android-MAAPL-tab" tabindex="0">
                                    <div class="content-area">
                                        <img src="<?=base_url()?>assets/images/mobile_app_framework/android/major_android_app.webp" alt="Major Android App Programming (development) Languages" class="content-image w-100 rounded-5">
                                        <div class="content-overlay text-start">
                                            <p class="fs-16 fw-600 m-0">Java • C • C++ • Phonegap</p>
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="tab-pane fade" id="v-pills_native_android-MAATT" role="tabpanel" aria-labelledby="v-pills_native_android-MAATT-tab" tabindex="0">
                                    <div class="content-area">
                                        <img src="<?=base_url()?>assets/images/mobile_app_framework/android/major_android_app_testing_tools.webp" alt="Major Android App Testing Tools" class="content-image w-100 rounded-5">
                                        <div class="content-overlay text-start">
                                            <p class="fs-16 fw-600 m-0">
                                            Google Android Emulator • The official Android SDK</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="v-pills_native_android-emulator" role="tabpanel" aria-labelledby="v-pills_native_android-emulator-tab" tabindex="0">
                                    <div class="content-area">
                                        <img src="<?=base_url()?>assets/images/mobile_app_framework/android/emulator.webp" alt="Emulator" class="content-image w-100 rounded-5">
                                        <div class="content-overlay text-start">
                                            <p class="fs-16 fw-600 m-0">MobiOne • eggplan</p>
                                        </div>
                                    </div>
                                </div>


                            <!-- Repeat similar structure for each tab -->
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-between align-items-center g-4 mt-5">

                        <div class="col-lg-7 order-last order-sm-first" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200">
            
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="v-pills_native_IOS-SDK" role="tabpanel" aria-labelledby="v-pills_native_IOS-SDK-tab" tabindex="0">
                                    <div class="content-area" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200">
                                        <img src="<?=base_url()?>assets/images/mobile_app_framework/ios/software_development_kit.webp" alt="Software Development Kit" class="content-image w-100 rounded-5">
                                        <div class="content-overlay text-start">
                                            <p class="fs-16 fw-600 m-0">
                                            Android SDK</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="v-pills_native_IOS-AADT" role="tabpanel" aria-labelledby="v-pills_native_IOS-AADT-tab" tabindex="0">
                                    <div class="content-area">
                                        <img src="<?=base_url()?>assets/images/mobile_app_framework/ios/IOS_app_designing_tools.webp" alt="IOS App Designing Tools" class="Android App Designing Tools">
                                        <div class="content-overlay text-start">
                                            <p class="fs-16 fw-600 m-0">Marvel • Invision • Sketch</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="tab-pane fade" id="v-pills_native_IOS-MAAPL" role="tabpanel" aria-labelledby="v-pills_native_IOS-MAAPL-tab" tabindex="0">
                                    <div class="content-area">
                                        <img src="<?=base_url()?>assets/images/mobile_app_framework/ios/programming_languages.webp" alt="Programming languages" class="content-image w-100 rounded-5">
                                        <div class="content-overlay text-start">
                                            <p class="fs-16 fw-600 m-0">Objective-C, Swift</p>
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="tab-pane fade" id="v-pills_native_IOS-MAATT" role="tabpanel" aria-labelledby="v-pills_native_IOS-MAATT-tab" tabindex="0">
                                    <div class="content-area">
                                        <img src="<?=base_url()?>assets/images/mobile_app_framework/ios/toolkit.webp" alt="toolkit" class="content-image w-100 rounded-5">
                                        <div class="content-overlay text-start">
                                            <p class="fs-16 fw-600 m-0">Apple Xcode</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="v-pills_native_IOS-emulator" role="tabpanel" aria-labelledby="v-pills_native_IOS-emulator-tab" tabindex="0">
                                    <div class="content-area">
                                        <img src="<?=base_url()?>assets/images/mobile_app_framework/ios/major_IOS_app_testing_tools.webp" alt="Major IOS App Testing Tools" class="content-image w-100 rounded-5">
                                        <div class="content-overlay text-start">
                                            <p class="fs-16 fw-600 m-0">Appium • Calabash • XCTest/XCUITest • Bugfender</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="v-pills_native_IOS-CCP" role="tabpanel" aria-labelledby="v-pills_native_IOS-CCP-tab" tabindex="0">
                                    <div class="content-area">
                                        <img src="<?=base_url()?>assets/images/mobile_app_framework/ios/ccp.webp" alt="Emulator" class="content-image w-100 rounded-5">
                                        <div class="content-overlay text-start">
                                            <p class="fs-16 fw-600 m-0">Amazon Web Services (AWS) • Google Cloud</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="v-pills_native_IOS-third_party_APIs" role="tabpanel" aria-labelledby="v-pills_native_IOS-third_party_APIs-tab" tabindex="0">
                                    <div class="content-area">
                                        <img src="<?=base_url()?>assets/images/mobile_app_framework/ios/third_party_APIs.webp" alt="Third-Party APIs" class="content-image w-100 rounded-5">
                                        <div class="content-overlay text-start">
                                            <p class="fs-16 fw-600 m-0">Analytics: Google • NPAW • comScore Payment: PayPal • Stripe • Authorize.Net • Braintree Social: Facebook • Twitter • Youtube • Instagram Geolocation: Google Maps • Bing Maps File storage: Dropbox • ownCloud • Google Drive</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="col-lg-4" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200">
                            <h3 class="fs-24 fw-600 mb-3">
                                <span><img width="50" src="<?= base_url() ?>assets/images/icons/ios_card.png" alt="IOS"></span> IOS
                            </h3>
                            <ul class="nav nav-flex justify-content-center nav-pills vertical_tab_nav gap-2" id="v-pills_native_IOS-tab" role="tablist" aria-orientation="vertical">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="v-pills_native_IOS-SDK-tab" data-bs-toggle="pill" data-bs-target="#v-pills_native_IOS-SDK" type="button" role="tab" aria-controls="v-pills_native_IOS-SDK" aria-selected="true">Software Development Kit</button>
                                </li>
                                
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="v-pills_native_IOS-AADT-tab" data-bs-toggle="pill" data-bs-target="#v-pills_native_IOS-AADT" type="button" role="tab" aria-controls="v-pills_native_IOS-AADT" aria-selected="true">IOS App Designing Tools</button>
                                </li>
                                
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="v-pills_native_IOS-MAAPL-tab" data-bs-toggle="pill" data-bs-target="#v-pills_native_IOS-MAAPL" type="button" role="tab" aria-controls="v-pills_native_IOS-MAAPL" aria-selected="true">Programming languages</button>
                                </li>
                                
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="v-pills_native_IOS-MAATT-tab" data-bs-toggle="pill" data-bs-target="#v-pills_native_IOS-MAATT" type="button" role="tab" aria-controls="v-pills_native_IOS-MAATT" aria-selected="true">Toolkit</button>
                                </li>
                                
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="v-pills_native_IOS-emulator-tab" data-bs-toggle="pill" data-bs-target="#v-pills_native_IOS-emulator" type="button" role="tab" aria-controls="v-pills_native_IOS-emulator" aria-selected="true">Major IOS App Testing Tools</button>
                                </li>

                                
                                
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="v-pills_native_IOS-CCP-tab" data-bs-toggle="pill" data-bs-target="#v-pills_native_IOS-CCP" type="button" role="tab" aria-controls="v-pills_native_IOS-CCP" aria-selected="true">Cloud Computing Platforms</button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="v-pills_native_IOS-third_party_APIs-tab" data-bs-toggle="pill" data-bs-target="#v-pills_native_IOS-third_party_APIs" type="button" role="tab" aria-controls="v-pills_native_IOS-third_party_APIs" aria-selected="true">Third-Party APIs</button>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="pills-hybrid" role="tabpanel" aria-labelledby="pills-hybrid-tab" tabindex="0">
                    
                    <div class="row justify-content-between align-items-center g-4 mt-5">

                        <div class="col-lg-4" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200">
                            <ul class="nav nav-flex justify-content-center nav-pills vertical_tab_nav gap-2" id="v-pills_hybrid-tab" role="tablist" aria-orientation="vertical">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="v-pills_hybrid-designing_tools-tab" data-bs-toggle="pill" data-bs-target="#v-pills_hybrid-designing_tools" type="button" role="tab" aria-controls="v-pills_hybrid-designing_tools" aria-selected="true">Designing Tools</button>
                                </li>
                                
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="v-pills_hybrid-programming_languages-tab" data-bs-toggle="pill" data-bs-target="#v-pills_hybrid-programming_languages" type="button" role="tab" aria-controls="v-pills_hybrid-programming_languages" aria-selected="true">Programming languages</button>
                                </li>
                                
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="v-pills_hybrid-programming_framework-tab" data-bs-toggle="pill" data-bs-target="#v-pills_hybrid-programming_framework" type="button" role="tab" aria-controls="v-pills_hybrid-programming_framework" aria-selected="true">Programming Framework</button>
                                </li>
                                
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="v-pills_hybrid-testing_tools-tab" data-bs-toggle="pill" data-bs-target="#v-pills_hybrid-testing_tools" type="button" role="tab" aria-controls="v-pills_hybrid-testing_tools" aria-selected="true">Testing Tools</button>
                                </li>
                                

                                
                                
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="v-pills_hybrid-CCP-tab" data-bs-toggle="pill" data-bs-target="#v-pills_hybrid-CCP" type="button" role="tab" aria-controls="v-pills_hybrid-CCP" aria-selected="true">Cloud Computing Platforms</button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="v-pills_hybrid-third_party_APIs-tab" data-bs-toggle="pill" data-bs-target="#v-pills_hybrid-third_party_APIs" type="button" role="tab" aria-controls="v-pills_hybrid-third_party_APIs" aria-selected="true">Third-Party APIs</button>
                                </li>
                            </ul>
                        </div>

                        <div class="col-lg-7" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200">

                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="v-pills_hybrid-designing_tools" role="tabpanel" aria-labelledby="v-pills_hybrid-designing_tools-tab" tabindex="0">
                                    <div class="content-area" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200">
                                        <img src="<?=base_url()?>assets/images/mobile_app_framework/hybrid/designing_tools.webp" alt="Designing Tools" class="content-image w-100 rounded-5">
                                        <div class="content-overlay text-start">
                                            <p class="fs-16 fw-600 m-0">
                                            Marvel • Invision • Sketch</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="v-pills_hybrid-programming_languages" role="tabpanel" aria-labelledby="v-pills_hybrid-programming_languages-tab" tabindex="0">
                                    <div class="content-area">
                                        <img src="<?=base_url()?>assets/images/mobile_app_framework/hybrid/programming_languages.webp" alt="IOS App Designing Tools" class="Programming languages">
                                        <div class="content-overlay text-start">
                                            <p class="fs-16 fw-600 m-0">HTML5 and JavaScript</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="tab-pane fade" id="v-pills_hybrid-programming_framework" role="tabpanel" aria-labelledby="v-pills_hybrid-programming_framework-tab" tabindex="0">
                                    <div class="content-area">
                                        <img src="<?=base_url()?>assets/images/mobile_app_framework/hybrid/programming_framework.webp" alt="Programming Framework" class="content-image w-100 rounded-5">
                                        <div class="content-overlay text-start">
                                            <p class="fs-16 fw-600 m-0">React Native • PhoneGap • Xamarin • Titanium</p>
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="tab-pane fade" id="v-pills_hybrid-testing_tools" role="tabpanel" aria-labelledby="v-pills_hybrid-testing_tools-tab" tabindex="0">
                                    <div class="content-area">
                                        <img src="<?=base_url()?>assets/images/mobile_app_framework/hybrid/testing-tools.webp" alt="testing tools" class="content-image w-100 rounded-5">
                                        <div class="content-overlay text-start">
                                            <p class="fs-16 fw-600 m-0">Appium • Calabash</p>
                                        </div>
                                    </div>
                                </div>


                                <div class="tab-pane fade" id="v-pills_hybrid-CCP" role="tabpanel" aria-labelledby="v-pills_hybrid-CCP-tab" tabindex="0">
                                    <div class="content-area">
                                        <img src="<?=base_url()?>assets/images/mobile_app_framework/hybrid/ccp.webp" alt="Cloud Computing Platforms" class="content-image w-100 rounded-5">
                                        <div class="content-overlay text-start">
                                            <p class="fs-16 fw-600 m-0">Amazon Web Services (AWS) • Google Cloud Platform (GCP)</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="v-pills_hybrid-third_party_APIs" role="tabpanel" aria-labelledby="v-pills_hybrid-third_party_APIs-tab" tabindex="0">
                                    <div class="content-area">
                                        <img src="<?=base_url()?>assets/images/mobile_app_framework/hybrid/third_party_APIs.webp" alt="Third-Party APIs" class="content-image w-100 rounded-5">
                                        <div class="content-overlay text-start">
                                            <p class="fs-16 fw-600 m-0">Analytics: Google • NPAW • comScore • Nielsen • Crashlytics Payment: PayPal • Stripe • Authorize.Net • Cleeng • Vindicia Social: Facebook • Twitter • Google+ Geolocation: Google Maps • Bing Maps File storage: Dropbox • Box • ownCloud • Google Drive</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="row justify-content-between align-items-center g-4">
        <div class="col-lg-4 col-md-12 col-12" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200">
            
        </div>

      

            
        <!-- Content Area -->
        <div class="col-lg-7 col-md-12 col-12" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200">
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

<section class="section_padding ">
    <div class="container">
        <div class="row align-items-center justify-content-between g-4">
            <div class="col-lg-6">
                <div class="b_rds_15 bg_azure p-3">
                    <h3 class="fs-26 fw-700">We build beautiful, engaging, robust and interactive apps.</h3>
                    <p class="fs-16 fw-500">At WebOConnect, we build apps which can make your users fall in love with. Our developers are skilled in various Mobile apps technologies for both Android and IOS like Android SDK, Invasion, Marvel, Sketch , IOS SDK, Swift and Apple Xcode to name a few. Our developers go extra mile to ensure that apps are error free, swift and responsive as the way your users will like them.</p>
                    <p class="fs-16 fw-500">We have a team of skilled App developers who are creative and use innovative and updated technologies to make your app safe, secure and convenient.</p>
                </div>
            </div>
            <div class="col-lg-5">
                <img src="<?= base_url() ?>assets/images/mobile_app_framework/build_beautiful_apps.webp" alt="The Best SaaS & Enterprise Software Development company">
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
