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


<section class="section_padding webo_contact_form_sec" id="">
  <div class="container">
    <div class="row justify-content-between align-items-center g-5">
      <div class="col-lg-7  order-last order-sm-first">
        <form method="post" id="newEnquiryForm" action="javascript:void(0);">
          <div class="row g-4 justify-content-between align-items-center">
              <div class="col-sm-6">
                  <div class="form-group">
                      <label class="form-label" for="fname">First Name</label>
                      <input type="text" id="fname" class="form-control" placeholder="First Name*" name="first_name" required />
                      <span id="fname_err" class="error"></span>
                  </div>
              </div>
              <div class="col-sm-6">
                  <div class="form-group">
                      <label class="form-label" for="lname">Last Name</label>
                      <input type="text" id="lname" class="form-control" placeholder="Last Name*" name="last_name" />
                      <span id="lname_err" class="error"></span>
                  </div>
              </div>
              <div class="col-sm-6">
                  <div class="form-group">
                      <label class="form-label" for="email">Email</label>
                      <input type="text" class="form-control" id="email" placeholder="Email*" name="email" required />
                      <span id="email_err" class="error"></span>
                  </div>
              </div>
              <div class="col-sm-6">
                  <div class="form-group">
                      <label class="form-label" for="mobile">Phone No. With Country Code</label>
                      <input id="mobile" name="phone" type="tel" class="form-control phone" placeholder="Phone Number" required />
                      <span id="phone_err" class="error"></span>
                  </div>
              </div>
              <div class="col-sm-12">
                  <div class="form-group">
                      <label class="form-label" for="development">Select Service Interest In</label>
                      <select id="development" name="development" class="form-select" required> 
                          <option value="">Select Service Interested In</option>
                          <option value="Saas Development">Saas Development</option>
                          <option value="Mobile Application Development">Mobile Application Development</option>
                          <option value="Web Application Development">Web Application Development</option>
                          <option value="Hire Dedicated Resources">Hire Dedicated Resources</option>
                          <option value="Automation">Automation</option>
                          <option value="Other">Other</option>
                      </select>
                      <span id="development_err" class="error"></span>
                  </div>
              </div>
              <div class="col-sm-12">
                  <div class="form-group">
                      <label class="form-label" for="message">Brief About Your Project</label>
                      <textarea class="form-control" id="message" placeholder="Please provide details" name="message" rows="4" required></textarea>
                      <span id="message_err" class="error"></span>
                  </div>
              </div>
              <div class="col-md-8">
                  <div class="g-recaptcha" data-sitekey="6LeRZKkUAAAAAP6oTGBp5GVkdkz_NRx1ytqSDpGe"></div>
              </div>
              <div class="col-sm-3 field">
                  <button type="submit" id="submit-enquiry" class="btn btn-light fs-18 fw-600 px-5">Submit</button>
              </div>
          </div>
          <p class="description successMessage" style="text-align: left;background: #3c763d;padding: 10px;display:none;color:#fff;"></p>
          <p class="description errorMessage" style="text-align: left;background: #a94442;padding: 10px;display:none;color:#fff;"></p>
        </form>
      </div>

      <div class="col-lg-5">
          <div class="contact_details">
            <div class="text-center" style="margin-bottom: 150px;">
              <h1 class="fs-34 fw-600 text-white">Contact Us</h1>
            </div>
            <div class="contact_details_content">
              <div class="row justify-content-center g-4">
                <div class="col-lg-5 col-6">
                    <div class="contact_details_card">
                        <div class="text-center">
                          <div class="d-flex align-items-center justify-content-center">
                              <span class="me-2">
                                  <img src="<?=base_url()?>assets/images/icons/wht_text.webp" width="30" alt="call" title="call">
                              </span>
                              <h4 class="fs-20 fw-600">Text</h4>
                          </div>
                          <a class="d-block fs-14 fw-600" href="sms:+1 419 405 7399">+1 419 405 7399</a>
                          <a class="d-block fs-14 fw-600" href="sms:+91 8076 654 834">+91 8076 654 834</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-6">
                    <div class="contact_details_card">
                      <div class="text-center">
                        <div class="d-flex align-items-center justify-content-center">
                            <span class="me-2">
                                <img src="<?=base_url()?>assets/images/icons/whatsapp.webp " width="30" alt="whatsapp" title="whatsapp">
                            </span>
                            <h4 class="fs-20 fw-600">Whatsapp</h4>
                          </div>
                          <a class="d-block fs-14 fw-600" href="https://wa.me/+14194057399?text=Hello%20there!">+1 419 405 7399</a>
                          <a  class="d-block fs-14 fw-600" href="https://wa.me/+918076654834?text=Hello%20there!">+91 8076 654 834</a>
                      </div>
                    </div>
                </div>
                <div class="col-lg-5 col-6">
                    <div class="contact_details_card">
                      <div class="text-center">
                          <div class="d-flex align-items-center justify-content-center">
                              <span class="me-2">
                                  <img src="<?=base_url()?>assets/images/icons/telegram.webp " width="30" alt="Telegram" title="Telegram">
                              </span>
                              <h4 class="fs-20 fw-600">Telegram</h4>
                          </div>
                          <a class="d-block fs-14 fw-600" href="https://t.me/weboconnect">+1 419 405 7399</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-6">
                    <div class="contact_details_card">
                        <div class="text-center">
                          <div class="d-flex align-items-center justify-content-center">
                              <span class="me-2">
                                  <img src="<?=base_url()?>assets/images/icons/wht_email.webp " width="30" alt="Email" title="Email">
                              </span>
                              <h4 class="fs-20 fw-600">Email us</h4>
                          </div>
                          <a class="d-block fs-14 fw-600" href="mailto:Info@weboconnect.com">Info@weboconnect.com</a>
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

<section class="section_padding our_global_presence">
  <div class="container">
    <div class="text-center">
      <h2 class="fs-34 fw-700 text_brand_color1">Our Global Presence </h2>
    </div>
    <div class="row g-4">

      <div class="col-lg-4">
        <div class="our_global_presence_img_card">
          <h5 class="headquarter fs-24 fw-600 text-white">Headquarter</h5>
          <img class="w-100" src="<?= base_url() ?>assets/images/contact_us/new_delhi.webp" alt="headquarter" />
          <div class="our_global_presence_content">
            <i class="fs-20 fw-600 text-white m-0 bi bi-geo-alt"></i>
            <p class="fs-16 fw-600 text-white m-0">T 93/1 GF, Press Enclave <br> RoadMalviya Nagar, New Delhi, <br> Delhi 110017</p>
          </div>
        </div>
      </div>
      
      <div class="col-lg-4">
        <div class="our_global_presence_img_card">
          <img class="w-100" src="<?= base_url() ?>assets/images/contact_us/bloomington.webp" alt="bloomington" />
          <div class="our_global_presence_content">
            <i class="fs-20 fw-600 text-white m-0 bi bi-geo-alt"></i>
            <p class="fs-16 fw-600 text-white m-0">352. E. Cardinal Glen Dr, <br>
            Bloomington N 4741, USA</p>
          </div>
        </div>
      </div>
      
      <div class="col-lg-4">
        <div class="our_global_presence_img_card">
          <img class="w-100" src="<?= base_url() ?>assets/images/contact_us/denmark.webp" alt="Denmark" />
          <div class="our_global_presence_content">
            <i class="fs-20 fw-600 text-white m-0 bi bi-geo-alt"></i>
            <p class="fs-16 fw-600 text-white m-0">Fjordparken 262.8700 Horsens. <br>
            Denmark</p>
          </div>
        </div>
      </div>
      
      <div class="col-lg-6">
        <div class="our_global_presence_img_card">
          <img class="w-100" src="<?= base_url() ?>assets/images/contact_us/bank_road.webp" alt="Bank Road" />
          <div class="our_global_presence_content">
            <i class="fs-20 fw-600 text-white m-0 bi bi-geo-alt"></i>
            <p class="fs-16 fw-600 text-white m-0">House no - 24-C 1st Floor, Bank Road</p>
          </div>
        </div>
      </div>
      
      <div class="col-lg-6">
        <div class="our_global_presence_img_card">
          <img class="w-100" src="<?= base_url() ?>assets/images/contact_us/jodhpur.webp" alt="Jodhpur Rajasthan" />
          <div class="our_global_presence_content">
            <i class="fs-20 fw-600 text-white m-0 bi bi-geo-alt"></i>
            <p class="fs-16 fw-600 text-white m-0">Office no - 6, 7 2nd Floor, Utakarsh Plaza <br>Jodhpur, Rajasthan - 342001, India</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<section class="section_padding thankyou">
  <div class="thankyou_content">
    <div class="container">
      <div class="row g-lg-5 g-4">
        <div class="col-12 text-center">
          <h2 class="fs-45 fw-600 text-white">
            <i>Thank you</i>
          </h2>
        </div>
        <div class="col-12 text-center">
          <img src="<?= base_url() ?>assets/images/thnk_logo.png" alt="logo" />
        </div>
        <div class="col-12 text-center">
          <a href="https://calendly.com/schedulemeetingwithweboconnect/30min?back=1&month=2024-11" class="fs-24 fw-600 btn btn-primary px-5">Schedule a call</a>
        </div>
        <div class="col-12 text-center">
          <p class="fs-20 fw-600 text-white">Empowered 200 + Businesses | Delivered 250+ Projects | Serving From 8+ Years</p>
        </div>
      </div>
    </div>
  </div>
</section>


<?php $this->load->view('front/common/footer') ?>

</body> 
<?php $this->load->view('front/common/script') ?>





</html>
