
<section class="py-lg-5 p-0 webo_form_sec" id="ss_Enquiry">
    <div class="container">
        <div class="row g-4 justify-content-between align-items-center">
            <div class="col-lg-6">
                <div class="text-center d-block d-lg-none">
                    <h2 class="fs-30 fw-600 text-white">Ready to Build Something Extraordinary?</h2>
                    <h6 class="fs-18 fw-600 text-white">Join hands with our expert team to create impactful, cutting-edge applications that redefine excellence.</h6>
                </div>
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
                    <!-- <p id="" class="description mt-3 successMessage" style="display:none; background:#d4edda; color:#155724;"></p>
                    <p id="" class="description mt-3 errorMessage" style="display:none; background:#f8d7da; color:#721c24;"></p> -->
                </form>
            </div>
            <!-- Additional Information Section -->

            <div class="col-lg-6">
                <div class="contact_details">
                    <div class="text-center d-none d-lg-block">
                        <h2 class="fs-30 fw-600 text-white">Ready to Build Something Extraordinary?</h2>
                        <h6 class="fs-18 fw-600 text-white">Join hands with our expert team to create impactful, cutting-edge applications that redefine excellence.</h6>
                    </div>
                    <div class="row justify-content-center g-4 mt-3">
                        <div class="col-lg-5 col-6">
                            <div class="contact_details_list_card">
                                <div>
                                  <div class="d-flex align-items-center">
                                      <span class="me-2">
                                          <img src="<?=base_url()?>assets/images/icons/text.webp" width="30" alt="call" title="call">
                                      </span>
                                      <h4 class="fs-20 fw-600">Text</h4>
                                  </div>
                                  <!-- <a href="tel:+1 419 405 7399">+1 419 405 7399</a>
                                  <a href="tel:+91 8076 654 834">+91 8076 654 834</a> -->
                                  <a class="d-block fs-12 fw-600" href="sms:+1 419 405 7399">+1 419 405 7399</a>
                                  <a class="d-block fs-12 fw-600" href="sms:+91 8076 654 834">+91 8076 654 834</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-6">
                            <div class="contact_details_list_card">
                              <div>
                                <div class="d-flex align-items-center">
                                    <span class="me-2">
                                        <img src="<?=base_url()?>assets/images/icons/whatsapp.webp " width="30" alt="whatsapp" title="whatsapp">
                                    </span>
                                    <h4 class="fs-20 fw-600">Whatsapp</h4>
                                  </div>
                                  <a class="d-block fs-12 fw-600" href="https://wa.me/+14194057399?text=Hello%20there!">+1 419 405 7399</a>
                                  <a  class="d-block fs-12 fw-600" href="https://wa.me/+918076654834?text=Hello%20there!">+91 8076 654 834</a>
                              </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-6">
                            <div class="contact_details_list_card">
                              <div>
                                  <div class="d-flex align-items-center">
                                      <span class="me-2">
                                          <img src="<?=base_url()?>assets/images/icons/telegram.webp " width="30" alt="Telegram" title="Telegram">
                                      </span>
                                      <h4 class="fs-20 fw-600">Telegram</h4>
                                  </div>
                                  <a class="d-block fs-12 fw-600" href="https://t.me/weboconnect">+1 419 405 7399</a>
                                  <!-- <a href="https://t.me/+1 419 405 7399">+1 419 405 7399</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-6">
                            <div class="contact_details_list_card">
                                <div>
                                  <div class="d-flex align-items-center">
                                      <span class="me-2">
                                          <img src="<?=base_url()?>assets/images/icons/email.webp " width="30" alt="Email" title="Email">
                                      </span>
                                      <h4 class="fs-20 fw-600">Email us</h4>
                                  </div>
                                  <a class="d-block fs-12 fw-600" href="mailto:Info@weboconnect.com">Info@weboconnect.com</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <p class="text_white fs-20 fw-600 text-white">OR</p>
                            <a href="https://calendly.com/schedulemeetingwithweboconnect/30min?back=1&month=2024-11" class="btn schedule_call_btn d-inline-flex align-items-center" style="backgroung:#FF492C;">
                                <span class="text_white ml-1">Schedule A Call </span>
                            </a>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
