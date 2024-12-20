
<section class="awrds_section">
  <div class="container">
      <ul class="awrds_section_list">
          <li>
              <img src="<?=base_url()?>assets/images/awards/award-good-firms.webp " class="" alt="goodfirms" title="goodfirms">
          </li>
          <li>
              <img src="<?=base_url()?>assets/images/awards/award-adobe-expert.webp " class="" alt="adobe expert" title="adobe expert">
          </li>
          <li>
              <img src="<?=base_url()?>assets/images/awards/top-leader.webp " class="" alt="top leader" title="top leader">
          </li>
          <li>
              <img src="<?=base_url()?>assets/images/awards/aword-clutch.webp " class="" alt="aword clutch" title="aword clutch">
          </li>
          <li>
              <img src="<?=base_url()?>assets/images/awards/award-app-futura.webp " class="" alt="app futura" title="app futura">
          </li>
          <li>
              <img src="<?=base_url()?>assets/images/awards/it-service-provider.webp" class="" alt="it service provider" title="it service provider">
          </li>
      </ul>
  </div>
</section>

<footer class="">
  <div class="">
      <div class="container">
        <hr class="my-4">
          <div class="row">
            <div class="col-12">
              <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                  <div class="footerbtm">
                    <h4>Company</h4>
                    <ul class="links">
                      <li><a href="<?=base_url()?>about">About Us</a></li>
                      <li><a href="<?=base_url()?>our-team">Our Team</a></li>
                      <li><a href="<?=base_url()?>blogs">Blogs</a></li>
                      <li><a href="<?=base_url()?>contact">Contact Us</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                  <div class="footerbtm">
                    <h4>Insights</h4>
                    <ul class="links">
                      <li><a href="<?=base_url()?>portfolio">Portfolio</a></li>
                      <li><a href="<?=base_url()?>contact"> Contact Us</a></li>
                      <li><a href="<?=base_url()?>testimonials">Testimonials</a></li>
                      <li><a target="_blank" href="https://bihar.weboconnect.com/">Startup Bihar</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                  <div class="footerbtm">
                    <h4>Services</h4>
                    <ul class="links">
                      <li><a href="<?=base_url()?>saas-development">SaaS Development</a></li>
                      <li><a href="<?=base_url()?>mobile-app-development">Mobile App Development</a></li>
                      <li><a href="<?=base_url()?>hire-dedicated-resources">Hire Dedicated Resources</a></li>
                      <li><a href="<?=base_url()?>maintenance-and-support">Maintenance &amp; Support</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                  <div class="footerbtm">
                    <h4>E . Technologies</h4>
                    <ul class="links">
                      <li><a href="<?=base_url()?>blockchain-development">Blockchain</a></li>
                      <li><a href="<?=base_url()?>artificial-intelligence">Artificial Intelligence</a></li>
                      <li><a href="<?=base_url()?>IOT">IoT</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            
              <div class="google_ratings_bg">
                <div class="row g-3 justify-content-center justify-content-lg-between align-items-center">
                  
                <?php $this->load->view('front/common/all_reviews_ratings') ?>

                </div>
              </div>

              <hr>
            </div>
          </div>
      </div>
  </div>
  <div class="copright_sec">
    <div class="container">
        <div class="row g-4 justify-content-between">
          <div class="col col-lg-7 order-last order-sm-first">

              <div class="row align-items-center justify-content-between g-4">
                <div class="col-lg-auto col-12  order-last order-sm-first">
                  <div class="text-lg-start text-md-start text-center">
                      <p class="m-0"> Weboconnect Technologies Pvt Ltd  © All Rights Reserved 2024</p>
                  </div>
                </div>
                <div class="col-lg-auto col-12">
                  <div class="text-center">
                      <div class="footer_social_links align-items-center justify-content-between">
                          <a href="https://www.facebook.com/WeboConnect/" title="Facebook" target="_blank">
                            <i class="bi bi-facebook"></i>
                          </a>
                          <a href="https://twitter.com/weboconnect/" title="Twitter" target="_blank">
                            <i class="bi bi-linkedin"></i>
                          </a>
                          <a href="https://www.linkedin.com/in/weboconnect/" title="LinkedIn+" target="_blank">
                            <i class="bi bi-twitter-x"></i>
                          </a>
                      </div>
                  </div>
                </div>
              </div>
              
          </div>
            <div class="col-sm-12 col-lg-4">
                <div class="term_section">
                    <ul class="list-inline polices m-0 d-flex gap-2 justify-content-center justify-content-lg-end">
                        <li><a href="<?=base_url()?>careers">We are hiring</a></li>
                        <li>|</li>
                        <li><a href="<?=base_url()?>privacy-policy">Privacy Policy</a></li>
                        <li>|</li>
                        <li><a href="<?=base_url()?>refund-policy">Refund Policy</a></li>
                    </ul>
                    <!-- <div class="ftr_hr_area">
                      <a style="color:#fbaa00" href="mailto:hr@weboconnect.com">hr@weboconnect.com</a> 
                      <span style="margin:0px 10px;">|</span>
                      <a style="color:#fbaa00" href="tel:+919974149677">+919974149677</a>
                    </div> -->
                </div>
                
            </div>
        </div>
        
    </div>
  </div>
</footer>
        


<?php $this->load->view('front/common/thankyou_modal') ?>
<?php $this->load->view('front/common/lets_discuss_project_modal') ?>
<?php $this->load->view('front/common/call_popup_modal') ?>
<?php $this->load->view('front/common/need_help_modal') ?>
<?php $this->load->view('front/common/apply_now_modal') ?>

<script>
    // Get all video elements
    const videos = document.querySelectorAll('video');
    // Add click event listeners to each video
    videos.forEach(video => {
      video.addEventListener('play', () => {
        // Pause all other videos
        videos.forEach(otherVideo => {
          if (otherVideo !== video) {
            otherVideo.pause();
          }
        });
      });
    });
</script>
