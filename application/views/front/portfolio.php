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



<section id="gallery" class="section_padding homeSection7 container">
  <div class="text-center mb-4">
    <h3 class="fs-30 fw-600">UNIQUE DESIGNS. OUTSTANDING SERVICES</h3>
    <p class="fs-20 fw-400 text_brand_color2 my-4">When excellence matters, choose WebOConnect. We combine creativity and precision to deliver superior web and mobile solutions, tailored for your success.</p>
  </div>
  
  <div class="container">
    <div class="portfolio_" id="image-gallery">
        <div class="d-none d-lg-block">
            <ul class="my-4 nav nav-pills justify-content-center" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-web-tab" data-bs-toggle="pill" data-bs-target="#pills-web" type="button" role="tab" aria-controls="pills-web" aria-selected="true">Web</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-mobile-tab" data-bs-toggle="pill" data-bs-target="#pills-mobile" type="button" role="tab" aria-controls="pills-mobile" aria-selected="false">Mobile</button>
                </li>
            </ul>

            <div class="tab-content mt-5" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-web" role="tabpanel" aria-labelledby="pills-web-tab">
                    <div class="row g-4 g-lg-5">
                        <div class="col-sm-6 image">
                            <div class="img-wrapper cursor-pointer">
                                <a href="<?=base_url()?>assets/images/portfolio/web/fundlink_web.webp">
                                    <img src="<?=base_url()?>assets/images/portfolio/web/fundlink_web.webp" class="img-responsive" />
                                </a>
                                <div class="img-overlay">
                                    <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                </div>
                                <div class="dnld_and_links">
                                    <h4 class="fs-20 fw-700">Fundlink</h4>                                    
                                    <a target="_blank" href="http://www.fundlink.co.zm/" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                        <span>
                                            <img src="<?=base_url()?>assets/images/icons/web.webp" alt="web">
                                        </span>
                                        <span class="">Web</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 image">
                            <div class="img-wrapper cursor-pointer">
                                <a href="<?=base_url()?>assets/images/portfolio/web/legacy83business_web.webp">
                                    <img src="<?=base_url()?>assets/images/portfolio/web/legacy83business_web.webp" class="img-responsive" />
                                </a>
                                <div class="img-overlay">
                                    <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                </div>
                                <div class="dnld_and_links">
                                    <h4 class="fs-20 fw-700">legacy83business</h4>                                    
                                    <a target="_blank" href="http://legacy83business.com/" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                        <span>
                                            <img src="<?=base_url()?>assets/images/icons/web.webp" alt="web">
                                        </span>
                                        <span class="">Web</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 image">
                            <div class="img-wrapper cursor-pointer">
                                <a href="<?=base_url()?>assets/images/portfolio/web/angela_web.webp">
                                    <img src="<?=base_url()?>assets/images/portfolio/web/angela_web.webp" class="img-responsive" />
                                </a>
                                <div class="img-overlay">
                                    <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                </div>
                                <div class="dnld_and_links">
                                    <h4 class="fs-20 fw-700">Angela Simeone</h4>                                    
                                    <a target="_blank" href="http://angelasimeone.com/" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                        <span>
                                            <img src="<?=base_url()?>assets/images/icons/web.webp" alt="web">
                                        </span>
                                        <span class="">Web</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 image">
                            <div class="img-wrapper cursor-pointer">
                                <a href="<?=base_url()?>assets/images/portfolio/web/cycle_exchange_web.webp">
                                    <img src="<?=base_url()?>assets/images/portfolio/web/cycle_exchange_web.webp" class="img-responsive" />
                                </a>
                                <div class="img-overlay">
                                    <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                </div>
                                <div class="dnld_and_links">
                                    <h4 class="fs-20 fw-700">Cycle Exchange</h4>                                    
                                    <a target="_blank" href="http://www.cycleexchange.co.uk/" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                        <span>
                                            <img src="<?=base_url()?>assets/images/icons/web.webp" alt="web">
                                        </span>
                                        <span class="">Web</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 image">
                            <div class="img-wrapper cursor-pointer">
                                <a href="<?=base_url()?>assets/images/portfolio/web/national_light_web.webp">
                                    <img src="<?=base_url()?>assets/images/portfolio/web/national_light_web.webp" class="img-responsive" />
                                </a>
                                <div class="img-overlay">
                                    <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                </div>
                                <div class="dnld_and_links">
                                    <h4 class="fs-20 fw-700">National Lighting</h4>                                    
                                    <a target="_blank" href="http://www.nationallighting.co.uk/" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                        <span>
                                            <img src="<?=base_url()?>assets/images/icons/web.webp" alt="web">
                                        </span>
                                        <span class="">Web</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 image">
                            <div class="img-wrapper cursor-pointer">
                                <a href="<?=base_url()?>assets/images/portfolio/web/onehopewine_web.webp">
                                    <img src="<?=base_url()?>assets/images/portfolio/web/onehopewine_web.webp" class="img-responsive" />
                                </a>
                                <div class="img-overlay">
                                    <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                </div>
                                <div class="dnld_and_links">
                                    <h4 class="fs-20 fw-700">Onehopewine</h4>                                    
                                    <a target="_blank" href="http://www.onehopewine.com/" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                        <span>
                                            <img src="<?=base_url()?>assets/images/icons/web.webp" alt="web">
                                        </span>
                                        <span class="">Web</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 image">
                            <div class="img-wrapper cursor-pointer">
                                <a href="<?=base_url()?>assets/images/portfolio/web/db_alliance_web.webp" alt="Design 7">
                                    <img src="<?=base_url()?>assets/images/portfolio/web/db_alliance_web.webp" alt="Design 7" class="img-responsive" />
                                </a>
                                <div class="img-overlay">
                                    <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                </div>
                                <div class="dnld_and_links">
                                    <h4 class="fs-20 fw-700">Db Alliance</h4>                                    
                                    <a target="_blank" href="http://www.dba.ie/" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                        <span>
                                            <img src="<?=base_url()?>assets/images/icons/web.webp" alt="web">
                                        </span>
                                        <span class="">Web</span>
                                    </a>
                                </div> 
                            </div>
                        </div>
                        <div class="col-sm-6 image">
                            <div class="img-wrapper cursor-pointer">
                                <a href="<?=base_url()?>assets/images/portfolio/web/miami_web.webp">
                                    <img src="<?=base_url()?>assets/images/portfolio/web/miami_web.webp" class="img-responsive" />
                                </a>
                                <div class="img-overlay">
                                    <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                </div>
                                <div class="dnld_and_links">
                                    <h4 class="fs-20 fw-700">Miami Tropical Plants</h4>                                    
                                    <a target="_blank" href="http://miamitropicalplants.com/" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                        <span>
                                            <img src="<?=base_url()?>assets/images/icons/web.webp" alt="web">
                                        </span>
                                        <span class="">Web</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 image">
                            <div class="img-wrapper cursor-pointer">
                                <a href="<?=base_url()?>assets/images/portfolio/web/ronlearyreach_web.webp">
                                    <img src="<?=base_url()?>assets/images/portfolio/web/ronlearyreach_web.webp" class="img-responsive" />
                                </a>
                                <div class="img-overlay">
                                    <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                </div>
                                <div class="dnld_and_links">
                                    <h4 class="fs-20 fw-700">Ronlearyreach</h4>                                    
                                    <a target="_blank" href="http://www.ronlearyreach.org/" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                        <span>
                                            <img src="<?=base_url()?>assets/images/icons/web.webp" alt="web">
                                        </span>
                                        <span class="">Web</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 image">
                            <div class="img-wrapper cursor-pointer">
                                <a href="<?=base_url()?>assets/images/portfolio/web/servare_cms_web.webp">
                                    <img src="<?=base_url()?>assets/images/portfolio/web/servare_cms_web.webp" class="img-responsive" />
                                </a>
                                <div class="img-overlay">
                                    <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                </div>
                                <div class="dnld_and_links">
                                    <h4 class="fs-20 fw-700">Servare</h4>                                    
                                     <a target="_blank" href="javascript:void(0)" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                        <span>
                                            <img src="<?=base_url()?>assets/images/icons/web.webp" alt="web">
                                        </span>
                                        <span class="">Web</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 image">
                            <div class="img-wrapper cursor-pointer">
                                <a href="<?=base_url()?>assets/images/portfolio/web/venturevell_web.webp">
                                    <img src="<?=base_url()?>assets/images/portfolio/web/venturevell_web.webp" class="img-responsive" />
                                </a>
                                <div class="img-overlay">
                                    <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                </div>
                                <div class="dnld_and_links">
                                    <h4 class="fs-20 fw-700">Venturewell</h4>                                    
                                    <a target="_blank" href="http://venturewell.org/" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                        <span>
                                            <img src="<?=base_url()?>assets/images/icons/web.webp" alt="web">
                                        </span>
                                        <span class="">Web</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 image">
                            <div class="img-wrapper cursor-pointer">
                                <a href="<?=base_url()?>assets/images/portfolio/web/terp2go_web.webp">
                                    <img src="<?=base_url()?>assets/images/portfolio/web/terp2go_web.webp" class="img-responsive" />
                                </a>
                                <div class="img-overlay">
                                    <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                </div>
                                <div class="dnld_and_links">
                                    <h4 class="fs-20 fw-700">Terp2go</h4>                                    
                                    <a target="_blank" href="http://www.terp2go.com/" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                        <span>
                                            <img src="<?=base_url()?>assets/images/icons/web.webp" alt="web">
                                        </span>
                                        <span class="">Web</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 image">
                            <div class="img-wrapper cursor-pointer">
                                <a href="<?=base_url()?>assets/images/portfolio/web/nurseify_web.webp">
                                    <img src="<?=base_url()?>assets/images/portfolio/web/nurseify_web.webp" class="img-responsive" />
                                </a>
                                <div class="img-overlay">
                                    <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                </div>
                                <div class="dnld_and_links">
                                    <h4 class="fs-20 fw-700">Nurseify</h4>                                    
                                    <a target="_blank" href="http://www.nurseify.app/" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                        <span>
                                            <img src="<?=base_url()?>assets/images/icons/web.webp" alt="web">
                                        </span>
                                        <span class="">Web</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 image">
                            <div class="img-wrapper cursor-pointer">
                                <a href="<?=base_url()?>assets/images/portfolio/web/weddingwire_web.webp">
                                    <img src="<?=base_url()?>assets/images/portfolio/web/weddingwire_web.webp" class="img-responsive" />
                                </a>
                                <div class="img-overlay">
                                    <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                </div>
                                <div class="dnld_and_links">
                                    <h4 class="fs-20 fw-700">Weddingwire</h4>                                    
                                    <a target="_blank" href="http://www.weddingwire.in/" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                        <span>
                                            <img src="<?=base_url()?>assets/images/icons/web.webp" alt="web">
                                        </span>
                                        <span class="">Web</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 image">
                            <div class="img-wrapper cursor-pointer">
                                <a href="<?=base_url()?>assets/images/portfolio/web/iot_web.webp">
                                    <img src="<?=base_url()?>assets/images/portfolio/web/iot_web.webp" class="img-responsive" />
                                </a>
                                <div class="img-overlay">
                                    <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                </div>
                                <div class="dnld_and_links">
                                    <h4 class="fs-20 fw-700">India On Track</h4>                                    
                                    <a target="_blank" href="http://indiaontrack.in/" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                        <span>
                                            <img src="<?=base_url()?>assets/images/icons/web.webp" alt="web">
                                        </span>
                                        <span class="">Web</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 image">
                            <div class="img-wrapper cursor-pointer">
                                <a href="<?=base_url()?>assets/images/portfolio/web/goodwork_web.webp">
                                    <img src="<?=base_url()?>assets/images/portfolio/web/goodwork_web.webp" class="img-responsive" />
                                </a>
                                <div class="img-overlay">
                                    <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                </div>
                                <div class="dnld_and_links">
                                    <h4 class="fs-20 fw-700">Goodwork</h4>                                    
                                    <a target="_blank" href="http://www.goodwork.com/" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                        <span>
                                            <img src="<?=base_url()?>assets/images/icons/web.webp" alt="web">
                                        </span>
                                        <span class="">Web</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 image">
                            <div class="img-wrapper cursor-pointer">
                                <a href="<?=base_url()?>assets/images/portfolio/web/vaffix_web.webp">
                                    <img src="<?=base_url()?>assets/images/portfolio/web/vaffix_web.webp" class="img-responsive" />
                                </a>
                                <div class="img-overlay">
                                    <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                </div>
                                <div class="dnld_and_links">
                                    <h4 class="fs-20 fw-700">Vaffix</h4>                                    
                                    <a target="_blank" href="http://www.vaffix.com/" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                        <span>
                                            <img src="<?=base_url()?>assets/images/icons/web.webp" alt="web">
                                        </span>
                                        <span class="">Web</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 image">
                            <div class="img-wrapper cursor-pointer">
                                <a href="<?=base_url()?>assets/images/portfolio/web/smartlinks_web.webp">
                                    <img src="<?=base_url()?>assets/images/portfolio/web/smartlinks_web.webp" class="img-responsive" />
                                </a>
                                <div class="img-overlay">
                                    <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                </div>
                                <div class="dnld_and_links">
                                    <h4 class="fs-20 fw-700">Smart Linkscs</h4>                                    
                                    <a href="http://smart-linkscs.com/" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                        <span>
                                            <img src="<?=base_url()?>assets/images/icons/web.webp" alt="web">
                                        </span>
                                        <span class="">Web</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>


                <div class="tab-pane fade" id="pills-mobile" role="tabpanel" aria-labelledby="pills-mobile-tab">
                    <div class="row g-4 g-lg-5">

                        <div class="col-sm-6 image">
                            <div class="img-wrapper cursor-pointer">
                                <a href="<?=base_url()?>assets/images/portfolio/mobile/airix.webp">
                                    <img src="<?=base_url()?>assets/images/portfolio/mobile/airix.webp" class="img-responsive" />
                                </a>
                                <div class="img-overlay">
                                    <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                </div>
                                <div class="dnld_and_links">
                                    <h4 class="fs-20 fw-700">Airix</h4>
                                    <div class="d-flex align-items-center gap-3">
                                        <a target="_blank" href="https://play.google.com/store/apps/details?id=com.airixs" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/android.webp" alt="android">
                                            </span>
                                            <span class="">Android</span>
                                        </a>
                                        
                                        <a target="_blank" href="https://apps.apple.com/us/app/talent-connects/id6736687377" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/ios.webp" alt="IOS">
                                            </span>
                                            <span class="">IOS</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-6 image">
                            <div class="img-wrapper cursor-pointer">
                                <a href="<?=base_url()?>assets/images/portfolio/mobile/wallet_cab.webp">
                                    <img src="<?=base_url()?>assets/images/portfolio/mobile/wallet_cab.webp" class="img-responsive" />
                                </a>
                                <div class="img-overlay">
                                    <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                </div>
                                <div class="dnld_and_links">
                                    <h4 class="fs-20 fw-700">wallet cab</h4>
                                    <div class="d-flex align-items-center gap-3">
                                        <a target="_blank" href="http://play.google.com/store/apps/details?id=com.walletcab_app" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/android.webp" alt="android">
                                            </span>
                                            <span class="">Android</span>
                                        </a>
                                        
                                        <a target="_blank" href="http://apps.apple.com/in/app/walletcab/id6451146646" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/ios.webp" alt="IOS">
                                            </span>
                                            <span class="">IOS</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-6 image">
                            <div class="img-wrapper cursor-pointer">
                                <a href="<?=base_url()?>assets/images/portfolio/mobile/anyshyft.webp">
                                    <img src="<?=base_url()?>assets/images/portfolio/mobile/anyshyft.webp" class="img-responsive" />
                                </a>
                                <div class="img-overlay">
                                    <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                </div>
                                <div class="dnld_and_links">
                                    <h4 class="fs-20 fw-700">anyshyft</h4>
                                    <div class="d-flex align-items-center gap-3">
                                        <a target="_blank" href="http://play.google.com/store/apps/details?id=com.weboconnect.anyshyft&hl=en_IN " class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/android.webp" alt="android">
                                            </span>
                                            <span class="">Android</span>
                                        </a>
                                        
                                        <a href="ttps://apps.apple.com/in/app/anyshyft/id6448747961 " class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/ios.webp" alt="IOS">
                                            </span>
                                            <span class="">IOS</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-6 image">
                            <div class="img-wrapper cursor-pointer">
                                <a href="<?=base_url()?>assets/images/portfolio/mobile/theIslandMarket.webp">
                                    <img src="<?=base_url()?>assets/images/portfolio/mobile/theIslandMarket.webp" class="img-responsive" />
                                </a>
                                <div class="img-overlay">
                                    <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                </div>
                                <div class="dnld_and_links">
                                    <h4 class="fs-20 fw-700">theIslandMarket</h4>
                                    <div class="d-flex align-items-center gap-3">
                                        <a target="_blank" href="http://play.google.com/store/apps/details?id=com.theislandmarket&hl=en_IN" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/android.webp" alt="android">
                                            </span>
                                            <span class="">Android</span>
                                        </a>
                                        
                                        <a target="_blank" href="http://apps.apple.com/us/app/theislandmarket/id1620663408" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/ios.webp" alt="IOS">
                                            </span>
                                            <span class="">IOS</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-6 image">
                            <div class="img-wrapper cursor-pointer">
                                <a href="<?=base_url()?>assets/images/portfolio/mobile/thinkndo.webp">
                                    <img src="<?=base_url()?>assets/images/portfolio/mobile/thinkndo.webp" class="img-responsive" />
                                </a>
                                <div class="img-overlay">
                                    <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                </div>
                                <div class="dnld_and_links">
                                    <h4 class="fs-20 fw-700">thinkndonow</h4>
                                    <div class="d-flex align-items-center gap-3">
                                        <a target="_blank" href="http://play.google.com/store/apps/details?id=com.thinkndonow" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/android.webp" alt="android">
                                            </span>
                                            <span class="">Android</span>
                                        </a>
                                        
                                        <a target="_blank" href="http://apps.apple.com/in/app/thinkndonow/id1573880094" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/ios.webp" alt="IOS">
                                            </span>
                                            <span class="">IOS</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 image">
                            <div class="img-wrapper cursor-pointer">
                                <a href="<?=base_url()?>assets/images/portfolio/mobile/nurseify.webp">
                                    <img src="<?=base_url()?>assets/images/portfolio/mobile/nurseify.webp" class="img-responsive" />
                                </a>
                                <div class="img-overlay">
                                    <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                </div>
                                <div class="dnld_and_links">
                                    <h4 class="fs-20 fw-700">nurseify</h4>
                                    <div class="d-flex align-items-center gap-3">
                                        <a target="_blank" href="http://play.google.com/store/apps/details?id=com.nurseify.app" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/android.webp" alt="android">
                                            </span>
                                            <span class="">Android</span>
                                        </a>
                                        
                                        <a target="_blank" href="http://apps.apple.com/in/app/nurseify/id1605766107" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/ios.webp" alt="IOS">
                                            </span>
                                            <span class="">IOS</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 image">
                            <div class="img-wrapper cursor-pointer">
                                <a href="<?=base_url()?>assets/images/portfolio/mobile/book_a_ride.webp">
                                    <img src="<?=base_url()?>assets/images/portfolio/mobile/book_a_ride.webp" class="img-responsive" />
                                </a>
                                <div class="img-overlay">
                                    <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                </div>
                                <div class="dnld_and_links">
                                    <h4 class="fs-20 fw-700">book a ride</h4>
                                    <div class="d-flex align-items-center gap-3">
                                        <a target="_blank" href="http://play.google.com/store/apps/details?id=com.bookride.passenger&hl=en_IN" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/android.webp" alt="android">
                                            </span>
                                            <span class="">Android</span>
                                        </a>
                                        
                                        <a target="_blank" href="http://apps.apple.com/us/app/bookaridegy/id1541296701" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/ios.webp" alt="IOS">
                                            </span>
                                            <span class="">IOS</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-6 image">
                            <div class="img-wrapper cursor-pointer">
                                <a href="<?=base_url()?>assets/images/portfolio/mobile/doctor_locam.webp">
                                    <img src="<?=base_url()?>assets/images/portfolio/mobile/doctor_locam.webp" class="img-responsive" />
                                </a>
                                <div class="img-overlay">
                                    <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                </div>
                                <div class="dnld_and_links">
                                    <h4 class="fs-20 fw-700">doctor locum</h4>
                                    <div class="d-flex align-items-center gap-3">
                                        <a target="_blank" href="http://play.google.com/store/apps/details?id=com.doctorlocums" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/android.webp" alt="android">
                                            </span>
                                            <span class="">Android</span>
                                        </a>
                                        
                                         <a target="_blank" href="https://apps.apple.com/in/app/doctor-locums/id6443468424" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/ios.webp" alt="IOS">
                                            </span>
                                            <span class="">IOS</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 image">
                            <div class="img-wrapper cursor-pointer">
                                <a href="<?=base_url()?>assets/images/portfolio/mobile/finowiz.webp">
                                    <img src="<?=base_url()?>assets/images/portfolio/mobile/finowiz.webp" class="img-responsive" />
                                </a>
                                <div class="img-overlay">
                                    <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                </div>
                                <div class="dnld_and_links">
                                    <h4 class="fs-20 fw-700">finowiz</h4>
                                    <div class="d-flex align-items-center gap-3">
                                         <a target="_blank" href="javascript:void(0)" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/android.webp" alt="android">
                                            </span>
                                            <span class="">Android</span>
                                        </a>
                                        
                                         <a target="_blank" href="javascript:void(0)" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/ios.webp" alt="IOS">
                                            </span>
                                            <span class="">IOS</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-6 image">
                            <div class="img-wrapper cursor-pointer">
                                <a href="<?=base_url()?>assets/images/portfolio/mobile/fixd.webp">
                                    <img src="<?=base_url()?>assets/images/portfolio/mobile/fixd.webp" class="img-responsive" />
                                </a>
                                <div class="img-overlay">
                                    <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                </div>
                                <div class="dnld_and_links">
                                    <h4 class="fs-20 fw-700">fixd</h4>
                                    <div class="d-flex align-items-center gap-3">
                                         <a target="_blank" href="javascript:void(0)" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/android.webp" alt="android">
                                            </span>
                                            <span class="">Android</span>
                                        </a>
                                        
                                         <a target="_blank" href="javascript:void(0)" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/ios.webp" alt="IOS">
                                            </span>
                                            <span class="">IOS</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 image">
                            <div class="img-wrapper cursor-pointer">
                                <a href="<?=base_url()?>assets/images/portfolio/mobile/golf_me.webp">
                                    <img src="<?=base_url()?>assets/images/portfolio/mobile/golf_me.webp" class="img-responsive" />
                                </a>
                                <div class="img-overlay">
                                    <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                </div>
                                <div class="dnld_and_links">
                                    <h4 class="fs-20 fw-700">golf me</h4>
                                    <div class="d-flex align-items-center gap-3">
                                         <a target="_blank" href="javascript:void(0)" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/android.webp" alt="android">
                                            </span>
                                            <span class="">Android</span>
                                        </a>
                                        
                                         <a target="_blank" href="javascript:void(0)" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/ios.webp" alt="IOS">
                                            </span>
                                            <span class="">IOS</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 image">
                            <div class="img-wrapper cursor-pointer">
                                <a href="<?=base_url()?>assets/images/portfolio/mobile/good_work.webp">
                                    <img src="<?=base_url()?>assets/images/portfolio/mobile/good_work.webp" class="img-responsive" />
                                </a>
                                <div class="img-overlay">
                                    <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                </div>
                                <div class="dnld_and_links">
                                    <h4 class="fs-20 fw-700">goodwork</h4>
                                    <div class="d-flex align-items-center gap-3">
                                         <a target="_blank" href="javascript:void(0)" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/android.webp" alt="android">
                                            </span>
                                            <span class="">Android</span>
                                        </a>
                                        
                                         <a target="_blank" href="javascript:void(0)" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/ios.webp" alt="IOS">
                                            </span>
                                            <span class="">IOS</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-6 image">
                            <div class="img-wrapper cursor-pointer">
                                <a href="<?=base_url()?>assets/images/portfolio/mobile/icna.webp">
                                    <img src="<?=base_url()?>assets/images/portfolio/mobile/icna.webp" class="img-responsive" />
                                </a>
                                <div class="img-overlay">
                                    <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                </div>
                                <div class="dnld_and_links">
                                    <h4 class="fs-20 fw-700 text-uppercase">ICNA</h4>
                                    <div class="d-flex align-items-center gap-3">
                                        <a target="_blank" href="http://play.google.com/store/apps/details?id=com.icnaapp&hl=en_IN&gl=US " class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/android.webp" alt="android">
                                            </span>
                                            <span class="">Android</span>
                                        </a>
                                        
                                        <a target="_blank" href="http://apps.apple.com/us/app/icna/id1505483881 " class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/ios.webp" alt="IOS">
                                            </span>
                                            <span class="">IOS</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
           
                        <div class="col-sm-6 image">
                            <div class="img-wrapper cursor-pointer">
                                <a href="<?=base_url()?>assets/images/portfolio/mobile/iot.webp">
                                    <img src="<?=base_url()?>assets/images/portfolio/mobile/iot.webp" class="img-responsive" />
                                </a>
                                <div class="img-overlay">
                                    <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                </div>
                                <div class="dnld_and_links">
                                    <h4 class="fs-20 fw-700">India On Track</h4>
                                    <div class="d-flex align-items-center gap-3">
                                         <a target="_blank" href="javascript:void(0)" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/android.webp" alt="android">
                                            </span>
                                            <span class="">Android</span>
                                        </a>
                                        
                                         <a target="_blank" href="javascript:void(0)" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/ios.webp" alt="IOS">
                                            </span>
                                            <span class="">IOS</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-6 image">
                            <div class="img-wrapper cursor-pointer">
                                <a href="<?=base_url()?>assets/images/portfolio/mobile/liebe_live.webp">
                                    <img src="<?=base_url()?>assets/images/portfolio/mobile/liebe_live.webp" class="img-responsive" />
                                </a>
                                <div class="img-overlay">
                                    <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                </div>
                                <div class="dnld_and_links">
                                    <h4 class="fs-20 fw-700">liebeLive</h4>
                                    <div class="d-flex align-items-center gap-3">
                                        <a target="_blank" href="http://play.google.com/store/apps/details?id=com.liebelive_agency" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/android.webp" alt="android">
                                            </span>
                                            <span class="">Android</span>
                                        </a>
                                        
                                        <!--  <a target="_blank" href="javascript:void(0)" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/ios.webp" alt="IOS">
                                            </span>
                                            <span class="">IOS</span>
                                        </a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-6 image">
                            <div class="img-wrapper cursor-pointer">
                                <a href="<?=base_url()?>assets/images/portfolio/mobile/loppekortet.webp">
                                    <img src="<?=base_url()?>assets/images/portfolio/mobile/loppekortet.webp" class="img-responsive" />
                                </a>
                                <div class="img-overlay">
                                    <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                </div>
                                <div class="dnld_and_links">
                                    <h4 class="fs-20 fw-700">loppekortet</h4>
                                    <div class="d-flex align-items-center gap-3">
                                        <a target="_blank" href="http://play.google.com/store/apps/details?id=com.fleamarket&gl=US" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/android.webp" alt="android">
                                            </span>
                                            <span class="">Android</span>
                                        </a>
                                        
                                        <a target="_blank" href="http://apps.apple.com/in/app/loppekortet/id1588266658" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/ios.webp" alt="IOS">
                                            </span>
                                            <span class="">IOS</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-6 image">
                            <div class="img-wrapper cursor-pointer">
                                <a href="<?=base_url()?>assets/images/portfolio/mobile/monkyshine.webp">
                                    <img src="<?=base_url()?>assets/images/portfolio/mobile/monkyshine.webp" class="img-responsive" />
                                </a>
                                <div class="img-overlay">
                                    <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                </div>
                                <div class="dnld_and_links">
                                    <h4 class="fs-20 fw-700">monkyshine</h4>
                                    <div class="d-flex align-items-center gap-3">
                                        <!--  <a target="_blank" href="javascript:void(0)" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/android.webp" alt="android">
                                            </span>
                                            <span class="">Android</span>
                                        </a> -->
                                        
                                        <a target="_blank" href="http://apps.apple.com/in/app/monky-shine/id1643692067" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/ios.webp" alt="IOS">
                                            </span>
                                            <span class="">IOS</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 image">
                            <div class="img-wrapper cursor-pointer">
                                <a href="<?=base_url()?>assets/images/portfolio/mobile/musicfix.webp">
                                    <img src="<?=base_url()?>assets/images/portfolio/mobile/musicfix.webp" class="img-responsive" />
                                </a>
                                <div class="img-overlay">
                                    <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                </div>
                                <div class="dnld_and_links">
                                    <h4 class="fs-20 fw-700">musicfix</h4>
                                    <div class="d-flex align-items-center gap-3">
                                         <a target="_blank" href="javascript:void(0)" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/android.webp" alt="android">
                                            </span>
                                            <span class="">Android</span>
                                        </a>
                                        
                                        <a target="_blank" href="http://apps.apple.com/in/app/musicfix-app/id6502290423" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/ios.webp" alt="IOS">
                                            </span>
                                            <span class="">IOS</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-6 image">
                            <div class="img-wrapper cursor-pointer">
                                <a href="<?=base_url()?>assets/images/portfolio/mobile/personality.webp">
                                    <img src="<?=base_url()?>assets/images/portfolio/mobile/personality.webp" class="img-responsive" />
                                </a>
                                <div class="img-overlay">
                                    <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                </div>
                                <div class="dnld_and_links">
                                    <h4 class="fs-20 fw-700">personality</h4>
                                    <div class="d-flex align-items-center gap-3">
                                         <a target="_blank" href="javascript:void(0)" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/android.webp" alt="android">
                                            </span>
                                            <span class="">Android</span>
                                        </a>
                                        
                                         <a target="_blank" href="javascript:void(0)" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/ios.webp" alt="IOS">
                                            </span>
                                            <span class="">IOS</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-6 image">
                            <div class="img-wrapper cursor-pointer">
                                <a href="<?=base_url()?>assets/images/portfolio/mobile/prorider.webp">
                                    <img src="<?=base_url()?>assets/images/portfolio/mobile/prorider.webp" class="img-responsive" />
                                </a>
                                <div class="img-overlay">
                                    <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                </div>
                                <div class="dnld_and_links">
                                    <h4 class="fs-20 fw-700">prorider</h4>
                                    <div class="d-flex align-items-center gap-3">
                                        <a target="_blank" href="http://play.google.com/store/apps/details?id=com.prorider" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/android.webp" alt="android">
                                            </span>
                                            <span class="">Android</span>
                                        </a>
                                        
                                         <a target="_blank" href="javascript:void(0)" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/ios.webp" alt="IOS">
                                            </span>
                                            <span class="">IOS</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 image">
                            <div class="img-wrapper cursor-pointer">
                                <a href="<?=base_url()?>assets/images/portfolio/mobile/qoach.webp">
                                    <img src="<?=base_url()?>assets/images/portfolio/mobile/qoach.webp" class="img-responsive" />
                                </a>
                                <div class="img-overlay">
                                    <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                </div>
                                <div class="dnld_and_links">
                                    <h4 class="fs-20 fw-700">qoach</h4>
                                    <div class="d-flex align-items-center gap-3">
                                         <a target="_blank" href="javascript:void(0)" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/android.webp" alt="android">
                                            </span>
                                            <span class="">Android</span>
                                        </a>
                                        
                                         <a target="_blank" href="javascript:void(0)" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/ios.webp" alt="IOS">
                                            </span>
                                            <span class="">IOS</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-6 image">
                            <div class="img-wrapper cursor-pointer">
                                <a href="<?=base_url()?>assets/images/portfolio/mobile/quality_couriers.webp">
                                    <img src="<?=base_url()?>assets/images/portfolio/mobile/quality_couriers.webp" class="img-responsive" />
                                </a>
                                <div class="img-overlay">
                                    <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                </div>
                                <div class="dnld_and_links">
                                    <h4 class="fs-20 fw-700">quality couriers</h4>
                                    <div class="d-flex align-items-center gap-3">
                                         <a target="_blank" href="javascript:void(0)" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/android.webp" alt="android">
                                            </span>
                                            <span class="">Android</span>
                                        </a>
                                        
                                         <a target="_blank" href="javascript:void(0)" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/ios.webp" alt="IOS">
                                            </span>
                                            <span class="">IOS</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 image">
                            <div class="img-wrapper cursor-pointer">
                                <a href="<?=base_url()?>assets/images/portfolio/mobile/staffinc.webp">
                                    <img src="<?=base_url()?>assets/images/portfolio/mobile/staffinc.webp" class="img-responsive" />
                                </a>
                                <div class="img-overlay">
                                    <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                </div>
                                <div class="dnld_and_links">
                                    <h4 class="fs-20 fw-700">staffinc</h4>
                                    <div class="d-flex align-items-center gap-3">
                                         <a target="_blank" href="javascript:void(0)" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/android.webp" alt="android">
                                            </span>
                                            <span class="">Android</span>
                                        </a>
                                        
                                         <a target="_blank" href="javascript:void(0)" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/ios.webp" alt="IOS">
                                            </span>
                                            <span class="">IOS</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-6 image">
                            <div class="img-wrapper cursor-pointer">
                                <a href="<?=base_url()?>assets/images/portfolio/mobile/terp2go.webp">
                                    <img src="<?=base_url()?>assets/images/portfolio/mobile/terp2go.webp" class="img-responsive" />
                                </a>
                                <div class="img-overlay">
                                    <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                </div>
                                <div class="dnld_and_links">
                                    <h4 class="fs-20 fw-700">terp2go</h4>
                                    <div class="d-flex align-items-center gap-3">
                                        <a target="_blank" href="https://play.google.com/store/apps/details?id=com.terp2go" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/android.webp" alt="android">
                                            </span>
                                            <span class="">Android</span>
                                        </a>
                                        
                                         <a target="_blank" href="https://apps.apple.com/us/app/terp2go/id6738675366" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/ios.webp" alt="IOS">
                                            </span>
                                            <span class="">IOS</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-6 image">
                            <div class="img-wrapper cursor-pointer">
                                <a href="<?=base_url()?>assets/images/portfolio/mobile/vafffix_app.webp">
                                    <img src="<?=base_url()?>assets/images/portfolio/mobile/vafffix_app.webp" class="img-responsive" />
                                </a>
                                <div class="img-overlay">
                                    <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                </div>
                                <div class="dnld_and_links">
                                    <h4 class="fs-20 fw-700">vafffix</h4>
                                    <div class="d-flex align-items-center gap-3">
                                        <a target="_blank" href="http://play.google.com/store/apps/details?id=com.vaffix " class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/android.webp" alt="android">
                                            </span>
                                            <span class="">Android</span>
                                        </a>
                                        
                                        <a target="_blank" href="http://apps.apple.com/in/app/vaffix/id6480494631 " class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/ios.webp" alt="IOS">
                                            </span>
                                            <span class="">IOS</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 image">
                            <div class="img-wrapper cursor-pointer">
                                <a href="<?=base_url()?>assets/images/portfolio/mobile/work_timer.webp">
                                    <img src="<?=base_url()?>assets/images/portfolio/mobile/work_timer.webp" class="img-responsive" />
                                </a>
                                <div class="img-overlay">
                                    <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                </div>
                                <div class="dnld_and_links">
                                    <h4 class="fs-20 fw-700">worktimer</h4>
                                    <div class="d-flex align-items-center gap-3">
                                        <a target="_blank" href="http://play.google.com/store/apps/details?id=com.work.timer " class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/android.webp" alt="android">
                                            </span>
                                            <span class="">Android</span>
                                        </a>
                                        
                                        <a target="_blank" href="http://apps.apple.com/in/app/worktimerapp/id6560111963 " class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/ios.webp" alt="IOS">
                                            </span>
                                            <span class="">IOS</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        

                    </div>
                </div>
            </div>
        </div>

        <div class="d-block d-lg-none">
            <ul class="my-4 nav nav-pills justify-content-center" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-m_view-web-tab" data-bs-toggle="pill" data-bs-target="#pills-m_view-web" type="button" role="tab" aria-controls="pills-m_view-web" aria-selected="true">Web</button>
                </li>
                <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-m_view-mobile-tab" data-bs-toggle="pill" data-bs-target="#pills-m_view-mobile" type="button" role="tab" aria-controls="pills-m_view-mobile" aria-selected="false">Mobile</button>
                </li>
            </ul>

        
        
            <div class="tab-content mt-5" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-m_view-web" role="tabpanel" aria-labelledby="pills-m_view-web-tab">
                
                    <div class="owl-carousel owl-theme MV_portfolio_web_carousel">
                        <div class="item">
                            <div class="image">
                                <div class="img-wrapper cursor-pointer">
                                    <a href="<?=base_url()?>assets/images/portfolio/web/fundlink_web.webp">
                                        <img src="<?=base_url()?>assets/images/portfolio/web/fundlink_web.webp" class="img-responsive" />
                                    </a>
                                    <div class="img-overlay">
                                        <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                    </div>
                                    <div class="dnld_and_links">
                                        <h4 class="fs-20 fw-700">Fundlink</h4>                                    
                                        <a target="_blank" href="http://www.fundlink.co.zm/" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/web.webp" alt="web">
                                            </span>
                                            <span class="">Web</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="image">
                                <div class="img-wrapper cursor-pointer">
                                    <a href="<?=base_url()?>assets/images/portfolio/web/legacy83business_web.webp">
                                        <img src="<?=base_url()?>assets/images/portfolio/web/legacy83business_web.webp" class="img-responsive" />
                                    </a>
                                    <div class="img-overlay">
                                        <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                    </div>
                                    <div class="dnld_and_links">
                                        <h4 class="fs-20 fw-700">legacy83business</h4>                                    
                                        <a target="_blank" href="http://www.fundlink.co.zm/" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/web.webp" alt="web">
                                            </span>
                                            <span class="">Web</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="image">
                                <div class="img-wrapper cursor-pointer">
                                    <a href="<?=base_url()?>assets/images/portfolio/web/angela_web.webp">
                                        <img src="<?=base_url()?>assets/images/portfolio/web/angela_web.webp" class="img-responsive" />
                                    </a>
                                    <div class="img-overlay">
                                        <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                    </div>
                                    <div class="dnld_and_links">
                                        <h4 class="fs-20 fw-700">Angela Simeone</h4>                                    
                                        <a target="_blank" href="http://www.fundlink.co.zm/" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/web.webp" alt="web">
                                            </span>
                                            <span class="">Web</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="image">
                                <div class="img-wrapper cursor-pointer">
                                    <a href="<?=base_url()?>assets/images/portfolio/web/cycle_exchange_web.webp">
                                        <img src="<?=base_url()?>assets/images/portfolio/web/cycle_exchange_web.webp" class="img-responsive" />
                                    </a>
                                    <div class="img-overlay">
                                        <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                    </div>
                                    <div class="dnld_and_links">
                                        <h4 class="fs-20 fw-700">cycle exchange</h4>                                    
                                        <a target="_blank" href="http://www.fundlink.co.zm/" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/web.webp" alt="web">
                                            </span>
                                            <span class="">Web</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="image">
                                <div class="img-wrapper cursor-pointer">
                                    <a href="<?=base_url()?>assets/images/portfolio/web/national_light_web.webp">
                                        <img src="<?=base_url()?>assets/images/portfolio/web/national_light_web.webp" class="img-responsive" />
                                    </a>
                                    <div class="img-overlay">
                                        <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                    </div>
                                    <div class="dnld_and_links">
                                        <h4 class="fs-20 fw-700">national light</h4>                                    
                                        <a target="_blank" href="http://www.fundlink.co.zm/" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/web.webp" alt="web">
                                            </span>
                                            <span class="">Web</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="image">
                                <div class="img-wrapper cursor-pointer">
                                    <a href="<?=base_url()?>assets/images/portfolio/web/onehopewine_web.webp">
                                        <img src="<?=base_url()?>assets/images/portfolio/web/onehopewine_web.webp" class="img-responsive" />
                                    </a>
                                    <div class="img-overlay">
                                        <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                    </div>
                                    <div class="dnld_and_links">
                                        <h4 class="fs-20 fw-700">onehopewine</h4>                                    
                                        <a target="_blank" href="http://www.fundlink.co.zm/" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/web.webp" alt="web">
                                            </span>
                                            <span class="">Web</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="image">
                                <div class="img-wrapper cursor-pointer">
                                    <a href="<?=base_url()?>assets/images/portfolio/web/db_alliance_web.webp" alt="Design 7">
                                        <img src="<?=base_url()?>assets/images/portfolio/web/db_alliance_web.webp" alt="Design 7" class="img-responsive" />
                                    </a>
                                    <div class="img-overlay">
                                        <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                    </div>
                                    <div class="dnld_and_links">
                                        <h4 class="fs-20 fw-700">DB Alliance</h4>                                    
                                        <a target="_blank" href="http://www.dba.ie/" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/web.webp" alt="web">
                                            </span>
                                            <span class="">Web</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="image">
                                <div class="img-wrapper cursor-pointer">
                                    <a href="<?=base_url()?>assets/images/portfolio/web/miami_web.webp">
                                        <img src="<?=base_url()?>assets/images/portfolio/web/miami_web.webp" class="img-responsive" />
                                    </a>
                                    <div class="img-overlay">
                                        <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                    </div>
                                    <div class="dnld_and_links">
                                        <h4 class="fs-20 fw-700">miami</h4>                                    
                                        <a target="_blank" href="http://www.fundlink.co.zm/" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/web.webp" alt="web">
                                            </span>
                                            <span class="">Web</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="image">
                                <div class="img-wrapper cursor-pointer">
                                    <a href="<?=base_url()?>assets/images/portfolio/web/ronlearyreach_web.webp">
                                        <img src="<?=base_url()?>assets/images/portfolio/web/ronlearyreach_web.webp" class="img-responsive" />
                                    </a>
                                    <div class="img-overlay">
                                        <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                    </div>
                                    <div class="dnld_and_links">
                                        <h4 class="fs-20 fw-700">ronlearyreach</h4>                                    
                                        <a target="_blank" href="http://www.fundlink.co.zm/" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/web.webp" alt="web">
                                            </span>
                                            <span class="">Web</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="image">
                                <div class="img-wrapper cursor-pointer">
                                    <a href="<?=base_url()?>assets/images/portfolio/web/servare_cms_web.webp">
                                        <img src="<?=base_url()?>assets/images/portfolio/web/servare_cms_web.webp" class="img-responsive" />
                                    </a>
                                    <div class="img-overlay">
                                        <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                    </div>
                                    <div class="dnld_and_links">
                                        <h4 class="fs-20 fw-700">servare</h4>                                    
                                        <a target="_blank" href="http://www.fundlink.co.zm/" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/web.webp" alt="web">
                                            </span>
                                            <span class="">Web</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="image">
                                <div class="img-wrapper cursor-pointer">
                                    <a href="<?=base_url()?>assets/images/portfolio/web/venturevell_web.webp">
                                        <img src="<?=base_url()?>assets/images/portfolio/web/venturevell_web.webp" class="img-responsive" />
                                    </a>
                                    <div class="img-overlay">
                                        <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                    </div>
                                    <div class="dnld_and_links">
                                        <h4 class="fs-20 fw-700">venturevell</h4>                                    
                                        <a target="_blank" href="http://www.fundlink.co.zm/" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/web.webp" alt="web">
                                            </span>
                                            <span class="">Web</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="image">
                                <div class="img-wrapper cursor-pointer">
                                    <a href="<?=base_url()?>assets/images/portfolio/web/terp2go_web.webp">
                                        <img src="<?=base_url()?>assets/images/portfolio/web/terp2go_web.webp" class="img-responsive" />
                                    </a>
                                    <div class="img-overlay">
                                        <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                    </div>
                                    <div class="dnld_and_links">
                                        <h4 class="fs-20 fw-700">terp2go</h4>                                    
                                        <a target="_blank" href="http://www.fundlink.co.zm/" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/web.webp" alt="web">
                                            </span>
                                            <span class="">Web</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="image">
                                <div class="img-wrapper cursor-pointer">
                                    <a href="<?=base_url()?>assets/images/portfolio/web/nurseify_web.webp">
                                        <img src="<?=base_url()?>assets/images/portfolio/web/nurseify_web.webp" class="img-responsive" />
                                    </a>
                                    <div class="img-overlay">
                                        <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                    </div>
                                    <div class="dnld_and_links">
                                        <h4 class="fs-20 fw-700">nurseify</h4>                                    
                                        <a target="_blank" href="http://www.fundlink.co.zm/" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/web.webp" alt="web">
                                            </span>
                                            <span class="">Web</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="image">
                                <div class="img-wrapper cursor-pointer">
                                    <a href="<?=base_url()?>assets/images/portfolio/web/weddingwire_web.webp">
                                        <img src="<?=base_url()?>assets/images/portfolio/web/weddingwire_web.webp" class="img-responsive" />
                                    </a>
                                    <div class="img-overlay">
                                        <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                    </div>
                                    <div class="dnld_and_links">
                                        <h4 class="fs-20 fw-700">weddingwire</h4>                                    
                                        <a target="_blank" href="http://www.fundlink.co.zm/" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/web.webp" alt="web">
                                            </span>
                                            <span class="">Web</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="image">
                                <div class="img-wrapper cursor-pointer">
                                    <a href="<?=base_url()?>assets/images/portfolio/web/iot_web.webp">
                                        <img src="<?=base_url()?>assets/images/portfolio/web/iot_web.webp" class="img-responsive" />
                                    </a>
                                    <div class="img-overlay">
                                        <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                    </div>
                                    <div class="dnld_and_links">
                                        <h4 class="fs-20 fw-700">India On Track</h4>                                    
                                        <a target="_blank" href="http://www.fundlink.co.zm/" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/web.webp" alt="web">
                                            </span>
                                            <span class="">Web</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="image">
                                <div class="img-wrapper cursor-pointer">
                                    <a href="<?=base_url()?>assets/images/portfolio/web/goodwork_web.webp">
                                        <img src="<?=base_url()?>assets/images/portfolio/web/goodwork_web.webp" class="img-responsive" />
                                    </a>
                                    <div class="img-overlay">
                                        <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                    </div>
                                    <div class="dnld_and_links">
                                        <h4 class="fs-20 fw-700">goodwork</h4>                                    
                                        <a target="_blank" href="http://www.fundlink.co.zm/" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/web.webp" alt="web">
                                            </span>
                                            <span class="">Web</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="image">
                                <div class="img-wrapper cursor-pointer">
                                    <a href="<?=base_url()?>assets/images/portfolio/web/vaffix_web.webp">
                                        <img src="<?=base_url()?>assets/images/portfolio/web/vaffix_web.webp" class="img-responsive" />
                                    </a>
                                    <div class="img-overlay">
                                        <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                    </div>
                                    <div class="dnld_and_links">
                                        <h4 class="fs-20 fw-700">vaffix</h4>                                    
                                        <a target="_blank" href="http://www.vaffix.com/" class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/web.webp" alt="web">
                                            </span>
                                            <span class="">Web</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="image">
                                <div class="img-wrapper cursor-pointer">
                                    <a href="<?=base_url()?>assets/images/portfolio/web/smartlinks_web.webp">
                                        <img src="<?=base_url()?>assets/images/portfolio/web/smartlinks_web.webp" class="img-responsive" />
                                    </a>
                                    <div class="img-overlay">
                                        <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                    </div>
                                    <div class="dnld_and_links">
                                        <h4 class="fs-20 fw-700">Smart Linkscs</h4>                                    
                                        <a href="http://smart-linkscs.com/ class="btn btn-sm btn_dark_primary btn-rounded px-4">
                                            <span>
                                                <img src="<?=base_url()?>assets/images/icons/web.webp" alt="web">
                                            </span>
                                            <span class="">Web</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="pills-m_view-mobile" role="tabpanel" aria-labelledby="pills-m_view-mobile-tab">
                
                    <div class="owl-carousel owl-theme MV_portfolio_mobile_carousel">
                        
                        <div class="item">
                            <div class="image">
                                <div class="img-wrapper cursor-pointer">
                                    <a href="<?=base_url()?>assets/images/portfolio/mobile/airix.webp">
                                        <img src="<?=base_url()?>assets/images/portfolio/mobile/airix.webp" class="img-responsive" />
                                    </a>
                                    <div class="img-overlay">
                                        <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                    </div>
                                    <div class="dnld_and_links">
                                        <h4 class="fs-20 fw-700">Airix</h4>
                                        <div class="d-flex align-items-center gap-3">
                                            <a target="_blank" href="https://play.google.com/store/apps/details?id=com.airixs" class="btn btn-sm btn_dark_primary btn-rounded">
                                                <span>
                                                    <img src="<?=base_url()?>assets/images/icons/android.webp" alt="android">
                                                </span>
                                            </a>
                                            <a target="_blank" href="https://apps.apple.com/us/app/talent-connects/id6736687377" class="btn btn-sm btn_dark_primary btn-rounded">
                                                <span>
                                                    <img src="<?=base_url()?>assets/images/icons/ios.webp" alt="IOS">
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="image">
                                <div class="img-wrapper cursor-pointer">
                                    <a href="<?=base_url()?>assets/images/portfolio/mobile/wallet_cab.webp">
                                        <img src="<?=base_url()?>assets/images/portfolio/mobile/wallet_cab.webp" class="img-responsive" />
                                    </a>
                                    <div class="img-overlay">
                                        <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                    </div>
                                    <div class="dnld_and_links">
                                        <h4 class="fs-20 fw-700">walletcab</h4>
                                        <div class="d-flex align-items-center gap-3">
                                            <a target="_blank" href="http://play.google.com/store/apps/details?id=com.walletcab_app" class="btn btn-sm btn_dark_primary btn-rounded">
                                                <span>
                                                    <img src="<?=base_url()?>assets/images/icons/android.webp" alt="android">
                                                </span>
                                            </a>
                                            <a target="_blank" href="http://apps.apple.com/in/app/walletcab/id6451146646" class="btn btn-sm btn_dark_primary btn-rounded">
                                                <span>
                                                    <img src="<?=base_url()?>assets/images/icons/ios.webp" alt="IOS">
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="image">
                                <div class="img-wrapper cursor-pointer">
                                    <a href="<?=base_url()?>assets/images/portfolio/mobile/anyshyft.webp">
                                        <img src="<?=base_url()?>assets/images/portfolio/mobile/anyshyft.webp" class="img-responsive" />
                                    </a>
                                    <div class="img-overlay">
                                        <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                    </div>
                                    <div class="dnld_and_links">
                                        <h4 class="fs-20 fw-700">anyshyft</h4>
                                        <div class="d-flex align-items-center gap-3">
                                            <a target="_blank" href="http://play.google.com/store/apps/details?id=com.weboconnect.anyshyft&hl=en_IN" class="btn btn-sm btn_dark_primary btn-rounded">
                                                <span>
                                                    <img src="<?=base_url()?>assets/images/icons/android.webp" alt="android">
                                                </span>
                                            </a>
                                            <a target="_blank" href="http://apps.apple.com/in/app/anyshyft/id6448747961" class="btn btn-sm btn_dark_primary btn-rounded">
                                                <span>
                                                    <img src="<?=base_url()?>assets/images/icons/ios.webp" alt="IOS">
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">                        
                            <div class="image">
                                <div class="img-wrapper cursor-pointer">
                                    <a href="<?=base_url()?>assets/images/portfolio/mobile/theIslandMarket.webp">
                                        <img src="<?=base_url()?>assets/images/portfolio/mobile/theIslandMarket.webp" class="img-responsive" />
                                    </a>
                                    <div class="img-overlay">
                                        <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                    </div>
                                    <div class="dnld_and_links">
                                        <h4 class="fs-20 fw-700">The Island Market</h4>
                                        <div class="d-flex align-items-center gap-3">
                                            <a target="_blank" href="http://play.google.com/store/apps/details?id=com.theislandmarket&hl=en_IN" class="btn btn-sm btn_dark_primary btn-rounded">
                                                <span>
                                                    <img src="<?=base_url()?>assets/images/icons/android.webp" alt="android">
                                                </span>
                                            </a>
                                            <a target="_blank" href="http://apps.apple.com/us/app/theislandmarket/id1620663408" class="btn btn-sm btn_dark_primary btn-rounded">
                                                <span>
                                                    <img src="<?=base_url()?>assets/images/icons/ios.webp" alt="IOS">
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">                        
                            <div class="image">
                                <div class="img-wrapper cursor-pointer">
                                    <a href="<?=base_url()?>assets/images/portfolio/mobile/thinkndo.webp">
                                        <img src="<?=base_url()?>assets/images/portfolio/mobile/thinkndo.webp" class="img-responsive" />
                                    </a>
                                    <div class="img-overlay">
                                        <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                    </div>
                                    <div class="dnld_and_links">
                                        <h4 class="fs-20 fw-700">thinkndoNow</h4>
                                        <div class="d-flex align-items-center gap-3">
                                            <a target="_blank" href="http://play.google.com/store/apps/details?id=com.thinkndonow" class="btn btn-sm btn_dark_primary btn-rounded">
                                                <span>
                                                    <img src="<?=base_url()?>assets/images/icons/android.webp" alt="android">
                                                </span>
                                            </a>
                                            <a target="_blank" href="http://apps.apple.com/in/app/thinkndonow/id1573880094" class="btn btn-sm btn_dark_primary btn-rounded">
                                                <span>
                                                    <img src="<?=base_url()?>assets/images/icons/ios.webp" alt="IOS">
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="image">
                                <div class="img-wrapper cursor-pointer">
                                    <a href="<?=base_url()?>assets/images/portfolio/mobile/nurseify.webp">
                                        <img src="<?=base_url()?>assets/images/portfolio/mobile/nurseify.webp" class="img-responsive" />
                                    </a>
                                    <div class="img-overlay">
                                        <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                    </div>
                                    <div class="dnld_and_links">
                                        <h4 class="fs-20 fw-700">nurseify</h4>
                                        <div class="d-flex align-items-center gap-3">
                                            <a target="_blank" href="http://play.google.com/store/apps/details?id=com.nurseify.app" class="btn btn-sm btn_dark_primary btn-rounded">
                                                <span>
                                                    <img src="<?=base_url()?>assets/images/icons/android.webp" alt="android">
                                                </span>
                                            </a>
                                            <a target="_blank" href="http://apps.apple.com/in/app/nurseify/id1605766107" class="btn btn-sm btn_dark_primary btn-rounded">
                                                <span>
                                                    <img src="<?=base_url()?>assets/images/icons/ios.webp" alt="IOS">
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">                       
                            <div class="image">
                                <div class="img-wrapper cursor-pointer">
                                    <a href="<?=base_url()?>assets/images/portfolio/mobile/book_a_ride.webp">
                                        <img src="<?=base_url()?>assets/images/portfolio/mobile/book_a_ride.webp" class="img-responsive" />
                                    </a>
                                    <div class="img-overlay">
                                        <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                    </div>
                                    <div class="dnld_and_links">
                                        <h4 class="fs-20 fw-700">book a ride</h4>
                                        <div class="d-flex align-items-center gap-3">
                                            <a target="_blank" href="http://play.google.com/store/apps/details?id=com.bookride.passenger&hl=en_IN" class="btn btn-sm btn_dark_primary btn-rounded">
                                                <span>
                                                    <img src="<?=base_url()?>assets/images/icons/android.webp" alt="android">
                                                </span>
                                            </a>
                                            <a target="_blank" href="http://apps.apple.com/us/app/bookaridegy/id1541296701" class="btn btn-sm btn_dark_primary btn-rounded">
                                                <span>
                                                    <img src="<?=base_url()?>assets/images/icons/ios.webp" alt="IOS">
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="image">
                                <div class="img-wrapper cursor-pointer">
                                    <a href="<?=base_url()?>assets/images/portfolio/mobile/doctor_locam.webp">
                                        <img src="<?=base_url()?>assets/images/portfolio/mobile/doctor_locam.webp" class="img-responsive" />
                                    </a>
                                    <div class="img-overlay">
                                        <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                    </div>
                                    <div class="dnld_and_links">
                                        <h4 class="fs-20 fw-700">doctor Locum</h4>
                                        <div class="d-flex align-items-center gap-3">
                                            <a target="_blank" href="http://play.google.com/store/apps/details?id=com.doctorlocums" class="btn btn-sm btn_dark_primary btn-rounded">
                                                <span>
                                                    <img src="<?=base_url()?>assets/images/icons/android.webp" alt="android">
                                                </span>
                                            </a>
                                             <!-- <a target="_blank" href="javascript:void(0)" class="btn btn-sm btn_dark_primary btn-rounded">
                                                <span>
                                                    <img src="<?=base_url()?>assets/images/icons/ios.webp" alt="IOS">
                                                </span>
                                            </a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="image">
                                <div class="img-wrapper cursor-pointer">
                                    <a href="<?=base_url()?>assets/images/portfolio/mobile/finowiz.webp">
                                        <img src="<?=base_url()?>assets/images/portfolio/mobile/finowiz.webp" class="img-responsive" />
                                    </a>
                                    <div class="img-overlay">
                                        <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                    </div>
                                    <div class="dnld_and_links">
                                        <h4 class="fs-20 fw-700">finowiz</h4>
                                        <div class="d-flex align-items-center gap-3">
                                             <a target="_blank" href="javascript:void(0)" class="btn btn-sm btn_dark_primary btn-rounded">
                                                <span>
                                                    <img src="<?=base_url()?>assets/images/icons/android.webp" alt="android">
                                                </span>
                                            </a>
                                             <a target="_blank" href="javascript:void(0)" class="btn btn-sm btn_dark_primary btn-rounded">
                                                <span>
                                                    <img src="<?=base_url()?>assets/images/icons/ios.webp" alt="IOS">
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">                        
                            <div class="image">
                                <div class="img-wrapper cursor-pointer">
                                    <a href="<?=base_url()?>assets/images/portfolio/mobile/fixd.webp">
                                        <img src="<?=base_url()?>assets/images/portfolio/mobile/fixd.webp" class="img-responsive" />
                                    </a>
                                    <div class="img-overlay">
                                        <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                    </div>
                                    <div class="dnld_and_links">
                                        <h4 class="fs-20 fw-700">Fixd</h4>
                                        <div class="d-flex align-items-center gap-3">
                                             <a target="_blank" href="javascript:void(0)" class="btn btn-sm btn_dark_primary btn-rounded">
                                                <span>
                                                    <img src="<?=base_url()?>assets/images/icons/android.webp" alt="android">
                                                </span>
                                            </a>
                                             <a target="_blank" href="javascript:void(0)" class="btn btn-sm btn_dark_primary btn-rounded">
                                                <span>
                                                    <img src="<?=base_url()?>assets/images/icons/ios.webp" alt="IOS">
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="image">
                                <div class="img-wrapper cursor-pointer">
                                    <a href="<?=base_url()?>assets/images/portfolio/mobile/golf_me.webp">
                                        <img src="<?=base_url()?>assets/images/portfolio/mobile/golf_me.webp" class="img-responsive" />
                                    </a>
                                    <div class="img-overlay">
                                        <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                    </div>
                                    <div class="dnld_and_links">
                                        <h4 class="fs-20 fw-700">Golf Me</h4>
                                        <div class="d-flex align-items-center gap-3">
                                             <a target="_blank" href="javascript:void(0)" class="btn btn-sm btn_dark_primary btn-rounded">
                                                <span>
                                                    <img src="<?=base_url()?>assets/images/icons/android.webp" alt="android">
                                                </span>
                                            </a>
                                             <a target="_blank" href="javascript:void(0)" class="btn btn-sm btn_dark_primary btn-rounded">
                                                <span>
                                                    <img src="<?=base_url()?>assets/images/icons/ios.webp" alt="IOS">
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="image">
                                <div class="img-wrapper cursor-pointer">
                                    <a href="<?=base_url()?>assets/images/portfolio/mobile/good_work.webp">
                                        <img src="<?=base_url()?>assets/images/portfolio/mobile/good_work.webp" class="img-responsive" />
                                    </a>
                                    <div class="img-overlay">
                                        <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                    </div>
                                    <div class="dnld_and_links">
                                        <h4 class="fs-20 fw-700">Goodwork</h4>
                                        <div class="d-flex align-items-center gap-3">
                                             <a target="_blank" href="javascript:void(0)" class="btn btn-sm btn_dark_primary btn-rounded">
                                                <span>
                                                    <img src="<?=base_url()?>assets/images/icons/android.webp" alt="android">
                                                </span>
                                            </a>
                                             <a target="_blank" href="javascript:void(0)" class="btn btn-sm btn_dark_primary btn-rounded">
                                                <span>
                                                    <img src="<?=base_url()?>assets/images/icons/ios.webp" alt="IOS">
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">                        
                            <div class="image">
                                <div class="img-wrapper cursor-pointer">
                                    <a href="<?=base_url()?>assets/images/portfolio/mobile/icna.webp">
                                        <img src="<?=base_url()?>assets/images/portfolio/mobile/icna.webp" class="img-responsive" />
                                    </a>
                                    <div class="img-overlay">
                                        <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                    </div>
                                    <div class="dnld_and_links">
                                        <h4 class="fs-20 fw-700">ICNA</h4>
                                        <div class="d-flex align-items-center gap-3">
                                            <a target="_blank" href="http://play.google.com/store/apps/details?id=com.icnaapp&hl=en_IN&gl=US\" class="btn btn-sm btn_dark_primary btn-rounded">
                                                <span>
                                                    <img src="<?=base_url()?>assets/images/icons/android.webp" alt="android">
                                                </span>
                                            </a>
                                            <a target="_blank" href="http://apps.apple.com/us/app/icna/id1505483881 " class="btn btn-sm btn_dark_primary btn-rounded">
                                                <span>
                                                    <img src="<?=base_url()?>assets/images/icons/ios.webp" alt="IOS">
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="image">
                                <div class="img-wrapper cursor-pointer">
                                    <a href="<?=base_url()?>assets/images/portfolio/mobile/iot.webp">
                                        <img src="<?=base_url()?>assets/images/portfolio/mobile/iot.webp" class="img-responsive" />
                                    </a>
                                    <div class="img-overlay">
                                        <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                    </div>
                                    <div class="dnld_and_links">
                                        <h4 class="fs-20 fw-700">India On Track</h4>
                                        <div class="d-flex align-items-center gap-3">
                                             <a target="_blank" href="javascript:void(0)" class="btn btn-sm btn_dark_primary btn-rounded">
                                                <span>
                                                    <img src="<?=base_url()?>assets/images/icons/android.webp" alt="android">
                                                </span>
                                            </a>
                                             <a target="_blank" href="javascript:void(0)" class="btn btn-sm btn_dark_primary btn-rounded">
                                                <span>
                                                    <img src="<?=base_url()?>assets/images/icons/ios.webp" alt="IOS">
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">                        
                            <div class="image">
                                <div class="img-wrapper cursor-pointer">
                                    <a href="<?=base_url()?>assets/images/portfolio/mobile/liebe_live.webp">
                                        <img src="<?=base_url()?>assets/images/portfolio/mobile/liebe_live.webp" class="img-responsive" />
                                    </a>
                                    <div class="img-overlay">
                                        <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                    </div>
                                    <div class="dnld_and_links">
                                        <h4 class="fs-20 fw-700">LiebeLive</h4>
                                        <div class="d-flex align-items-center gap-3">
                                            <a target="_blank" href="http://play.google.com/store/apps/details?id=com.liebelive_agency" class="btn btn-sm btn_dark_primary btn-rounded">
                                                <span>
                                                    <img src="<?=base_url()?>assets/images/icons/android.webp" alt="android">
                                                </span>
                                            </a>
                                             <!-- <a target="_blank" href="javascript:void(0)" class="btn btn-sm btn_dark_primary btn-rounded">
                                                <span>
                                                    <img src="<?=base_url()?>assets/images/icons/ios.webp" alt="IOS">
                                                </span>
                                            </a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">                        
                            <div class="image">
                                <div class="img-wrapper cursor-pointer">
                                    <a href="<?=base_url()?>assets/images/portfolio/mobile/loppekortet.webp">
                                        <img src="<?=base_url()?>assets/images/portfolio/mobile/loppekortet.webp" class="img-responsive" />
                                    </a>
                                    <div class="img-overlay">
                                        <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                    </div>
                                    <div class="dnld_and_links">
                                        <h4 class="fs-20 fw-700">loppekortet</h4>
                                        <div class="d-flex align-items-center gap-3">
                                            <a target="_blank" href="http://play.google.com/store/apps/details?id=com.fleamarket&gl=US" class="btn btn-sm btn_dark_primary btn-rounded">
                                                <span>
                                                    <img src="<?=base_url()?>assets/images/icons/android.webp" alt="android">
                                                </span>
                                            </a>
                                            <a target="_blank" href="http://apps.apple.com/in/app/loppekortet/id1588266658" class="btn btn-sm btn_dark_primary btn-rounded">
                                                <span>
                                                    <img src="<?=base_url()?>assets/images/icons/ios.webp" alt="IOS">
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">                        
                            <div class="image">
                                <div class="img-wrapper cursor-pointer">
                                    <a href="<?=base_url()?>assets/images/portfolio/mobile/monkyshine.webp">
                                        <img src="<?=base_url()?>assets/images/portfolio/mobile/monkyshine.webp" class="img-responsive" />
                                    </a>
                                    <div class="img-overlay">
                                        <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                    </div>
                                    <div class="dnld_and_links">
                                        <h4 class="fs-20 fw-700">monkyshine</h4>
                                        <div class="d-flex align-items-center gap-3">
                                             <!-- <a target="_blank" href="javascript:void(0)" class="btn btn-sm btn_dark_primary btn-rounded">
                                                <span>
                                                    <img src="<?=base_url()?>assets/images/icons/android.webp" alt="android">
                                                </span>
                                            </a> -->
                                            <a target="_blank" href="http://apps.apple.com/in/app/monky-shine/id1643692067" class="btn btn-sm btn_dark_primary btn-rounded">
                                                <span>
                                                    <img src="<?=base_url()?>assets/images/icons/ios.webp" alt="IOS">
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="image">
                                <div class="img-wrapper cursor-pointer">
                                    <a href="<?=base_url()?>assets/images/portfolio/mobile/musicfix.webp">
                                        <img src="<?=base_url()?>assets/images/portfolio/mobile/musicfix.webp" class="img-responsive" />
                                    </a>
                                    <div class="img-overlay">
                                        <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                    </div>
                                    <div class="dnld_and_links">
                                        <h4 class="fs-20 fw-700">musicfix</h4>
                                        <div class="d-flex align-items-center gap-3">
                                             <!-- <a target="_blank" href="javascript:void(0)" class="btn btn-sm btn_dark_primary btn-rounded">
                                                <span>
                                                    <img src="<?=base_url()?>assets/images/icons/android.webp" alt="android">
                                                </span>
                                            </a> -->
                                            <a target="_blank" href="http://apps.apple.com/in/app/musicfix-app/id6502290423" class="btn btn-sm btn_dark_primary btn-rounded">
                                                <span>
                                                    <img src="<?=base_url()?>assets/images/icons/ios.webp" alt="IOS">
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">                        
                            <div class="image">
                                <div class="img-wrapper cursor-pointer">
                                    <a href="<?=base_url()?>assets/images/portfolio/mobile/personality.webp">
                                        <img src="<?=base_url()?>assets/images/portfolio/mobile/personality.webp" class="img-responsive" />
                                    </a>
                                    <div class="img-overlay">
                                        <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                    </div>
                                    <div class="dnld_and_links">
                                        <h4 class="fs-20 fw-700">personality</h4>
                                        <div class="d-flex align-items-center gap-3">
                                             <a target="_blank" href="javascript:void(0)" class="btn btn-sm btn_dark_primary btn-rounded">
                                                <span>
                                                    <img src="<?=base_url()?>assets/images/icons/android.webp" alt="android">
                                                </span>
                                            </a>
                                             <a target="_blank" href="javascript:void(0)" class="btn btn-sm btn_dark_primary btn-rounded">
                                                <span>
                                                    <img src="<?=base_url()?>assets/images/icons/ios.webp" alt="IOS">
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">                        
                            <div class="image">
                                <div class="img-wrapper cursor-pointer">
                                    <a href="<?=base_url()?>assets/images/portfolio/mobile/prorider.webp">
                                        <img src="<?=base_url()?>assets/images/portfolio/mobile/prorider.webp" class="img-responsive" />
                                    </a>
                                    <div class="img-overlay">
                                        <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                    </div>
                                    <div class="dnld_and_links">
                                        <h4 class="fs-20 fw-700">prorider</h4>
                                        <div class="d-flex align-items-center gap-3">
                                            <a target="_blank" href="http://play.google.com/store/apps/details?id=com.prorider" class="btn btn-sm btn_dark_primary btn-rounded">
                                                <span>
                                                    <img src="<?=base_url()?>assets/images/icons/android.webp" alt="android">
                                                </span>
                                            </a>
                                             <!-- <a target="_blank" href="javascript:void(0)" class="btn btn-sm btn_dark_primary btn-rounded">
                                                <span>
                                                    <img src="<?=base_url()?>assets/images/icons/ios.webp" alt="IOS">
                                                </span>
                                            </a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="image">
                                <div class="img-wrapper cursor-pointer">
                                    <a href="<?=base_url()?>assets/images/portfolio/mobile/qoach.webp">
                                        <img src="<?=base_url()?>assets/images/portfolio/mobile/qoach.webp" class="img-responsive" />
                                    </a>
                                    <div class="img-overlay">
                                        <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                    </div>
                                    <div class="dnld_and_links">
                                        <h4 class="fs-20 fw-700">qoach</h4>
                                        <div class="d-flex align-items-center gap-3">
                                             <a target="_blank" href="javascript:void(0)" class="btn btn-sm btn_dark_primary btn-rounded">
                                                <span>
                                                    <img src="<?=base_url()?>assets/images/icons/android.webp" alt="android">
                                                </span>
                                            </a>
                                             <a target="_blank" href="javascript:void(0)" class="btn btn-sm btn_dark_primary btn-rounded">
                                                <span>
                                                    <img src="<?=base_url()?>assets/images/icons/ios.webp" alt="IOS">
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">                        
                            <div class="image">
                                <div class="img-wrapper cursor-pointer">
                                    <a href="<?=base_url()?>assets/images/portfolio/mobile/quality_couriers.webp">
                                        <img src="<?=base_url()?>assets/images/portfolio/mobile/quality_couriers.webp" class="img-responsive" />
                                    </a>
                                    <div class="img-overlay">
                                        <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                    </div>
                                    <div class="dnld_and_links">
                                        <h4 class="fs-20 fw-700">quality couriers</h4>
                                        <div class="d-flex align-items-center gap-3">
                                             <a target="_blank" href="javascript:void(0)" class="btn btn-sm btn_dark_primary btn-rounded">
                                                <span>
                                                    <img src="<?=base_url()?>assets/images/icons/android.webp" alt="android">
                                                </span>
                                            </a>
                                             <a target="_blank" href="javascript:void(0)" class="btn btn-sm btn_dark_primary btn-rounded">
                                                <span>
                                                    <img src="<?=base_url()?>assets/images/icons/ios.webp" alt="IOS">
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="image">
                                <div class="img-wrapper cursor-pointer">
                                    <a href="<?=base_url()?>assets/images/portfolio/mobile/staffinc.webp">
                                        <img src="<?=base_url()?>assets/images/portfolio/mobile/staffinc.webp" class="img-responsive" />
                                    </a>
                                    <div class="img-overlay">
                                        <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                    </div>
                                    <div class="dnld_and_links">
                                        <h4 class="fs-20 fw-700">staffinc</h4>
                                        <div class="d-flex align-items-center gap-3">
                                             <a target="_blank" href="javascript:void(0)" class="btn btn-sm btn_dark_primary btn-rounded">
                                                <span>
                                                    <img src="<?=base_url()?>assets/images/icons/android.webp" alt="android">
                                                </span>
                                            </a>
                                             <a target="_blank" href="javascript:void(0)" class="btn btn-sm btn_dark_primary btn-rounded">
                                                <span>
                                                    <img src="<?=base_url()?>assets/images/icons/ios.webp" alt="IOS">
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>                        
                        </div>
                        <div class="item">
                            <div class="image">
                                <div class="img-wrapper cursor-pointer">
                                    <a href="<?=base_url()?>assets/images/portfolio/mobile/terp2go.webp">
                                        <img src="<?=base_url()?>assets/images/portfolio/mobile/terp2go.webp" class="img-responsive" />
                                    </a>
                                    <div class="img-overlay">
                                        <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                    </div>
                                    <div class="dnld_and_links">
                                        <h4 class="fs-20 fw-700">terp2go</h4>
                                        <div class="d-flex align-items-center gap-3">
                                            <a target="_blank" href="http://play.google.com/store/apps/details?id=com.terp2go" class="btn btn-sm btn_dark_primary btn-rounded">
                                                <span>
                                                    <img src="<?=base_url()?>assets/images/icons/android.webp" alt="android">
                                                </span>
                                            </a>
                                             <!-- <a target="_blank" href="javascript:void(0)" class="btn btn-sm btn_dark_primary btn-rounded">
                                                <span>
                                                    <img src="<?=base_url()?>assets/images/icons/ios.webp" alt="IOS">
                                                </span>
                                            </a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">                        
                            <div class="image">
                                <div class="img-wrapper cursor-pointer">
                                    <a href="<?=base_url()?>assets/images/portfolio/mobile/vafffix_app.webp">
                                        <img src="<?=base_url()?>assets/images/portfolio/mobile/vafffix_app.webp" class="img-responsive" />
                                    </a>
                                    <div class="img-overlay">
                                        <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                    </div>
                                    <div class="dnld_and_links">
                                        <h4 class="fs-20 fw-700">vafffix</h4>
                                        <div class="d-flex align-items-center gap-3">
                                            <a target="_blank" href="http://play.google.com/store/apps/details?id=com.vaffix " class="btn btn-sm btn_dark_primary btn-rounded">
                                                <span>
                                                    <img src="<?=base_url()?>assets/images/icons/android.webp" alt="android">
                                                </span>
                                            </a>
                                            <a target="_blank" href="http://apps.apple.com/in/app/vaffix/id6480494631" class="btn btn-sm btn_dark_primary btn-rounded">
                                                <span>
                                                    <img src="<?=base_url()?>assets/images/icons/ios.webp" alt="IOS">
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="image">
                                <div class="img-wrapper cursor-pointer">
                                    <a href="<?=base_url()?>assets/images/portfolio/mobile/work_timer.webp">
                                        <img src="<?=base_url()?>assets/images/portfolio/mobile/work_timer.webp" class="img-responsive" />
                                    </a>
                                    <div class="img-overlay">
                                        <img src="<?=base_url()?>assets/images/icons/zoom2.webp" alt="web">
                                    </div>
                                    <div class="dnld_and_links">
                                        <h4 class="fs-20 fw-700">worktimer</h4>
                                        <div class="d-flex align-items-center gap-3">
                                            <a target="_blank" href="https://play.google.com/store/apps/details?id=com.work.timer" class="btn btn-sm btn_dark_primary btn-rounded">
                                                <span>
                                                    <img src="<?=base_url()?>assets/images/icons/android.webp" alt="android">
                                                </span>
                                            </a>
                                            <a target="_blank" href="https://apps.apple.com/in/app/worktimerapp/id6560111963" class="btn btn-sm btn_dark_primary btn-rounded">
                                                <span>
                                                    <img src="<?=base_url()?>assets/images/icons/ios.webp" alt="IOS">
                                                </span>
                                            </a>
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
    </div>



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
