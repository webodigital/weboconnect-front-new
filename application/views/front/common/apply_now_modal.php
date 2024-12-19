<div class="modal fade apply_new_modal" id="apply_new_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
    <button type="button" class="btn_close" data-bs-dismiss="modal" aria-label="Close">
        <i class="fs-16 bi bi-x-lg"></i>
    </button>
      <div class="">
        <div class="container">
            <div class="row g-4 justify-content-between align-items-center">

                <div class="col-lg-6">
                    <div class="">
                        <div class="bg-white b_rds_20 p-4">
                            <h2 class="fs-20 fw-600">Mern Stack Developer</h2>
                            <div class="row">
                              <div class="col">
                                <h4 class="fs-18 fw-500">Experience: 2 - 5 Years</h4>
                              </div>
                              <div class="col">
                                <h4 class="fs-18 fw-500">Posted on: 18 Dec 2024</h4>
                              </div>
                            </div>
                        </div>
                        <form method="post" id="newEnquiryModalForm" action="javascript:void(0);">

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
                                    <label class="form-label" for="mobile">Phone No</label>
                                    <input id="mobile" name="phone" type="tel" class="form-control phone" placeholder="Phone Number" required />
                                    <span id="phone_err" class="error"></span>
                                </div>
                            </div>
                            <div class="col-12">
                              <div class="upload_btn_wrapper">
                                <button class="btn">Upload CV</button>
                                <input type="file" name="myfile" />
                              </div>
                            </div>
                            <div class="col-auto">
                                <div class="g-recaptcha" data-sitekey="6LeRZKkUAAAAAP6oTGBp5GVkdkz_NRx1ytqSDpGe"></div>
                            </div>
                            <div class="col-lg-3 d-grid field">
                                <button type="submit" id="submit-enquiry" class="btn btn-light fs-18 fw-600">Submit</button>
                            </div>
                        </div>
                        <p class="description successMessage" style="text-align: left;background: #3c763d;padding: 10px;display:none;color:#fff;"></p>
                        <p class="description errorMessage" style="text-align: left;background: #a94442;padding: 10px;display:none;color:#fff;"></p>
                        <!-- <p id="" class="description mt-3 successMessage" style="display:none; background:#d4edda; color:#155724;"></p>
                        <p id="" class="description mt-3 errorMessage" style="display:none; background:#f8d7da; color:#721c24;"></p> -->
                    </form>
                    </div>
                </div>

                <div class="col-lg-6">
                    <img src="<?=base_url()?>assets/images/apply_now.webp" alt="apply now" title="apply now">
                    <div class="text-center my-4">
                      <h4 class="fs-24 fw-600 text_brand_color2">Connect our HR</h4>
                    </div>
                    <div class="row justify-content-center g-4">
                      <div class="col-sm-5">
                        <div class="contact_details_list_card">
                            <div>
                              <div class="d-flex align-items-center">
                                  <span class="me-2">
                                      <img src="<?=base_url()?>assets/images/icons/text.webp" width="30" alt="call" title="call">
                                  </span>
                                  <h4 class="fs-20 fw-600">Text</h4>
                              </div>
                              <a class="d-block fs-12 fw-600" href="sms:+91 99741 49677">+91 99741 49677</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-5">
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
                    </div>
                </div>

            </div>
        </div>
      </div>
    </div>
  </div>
</div>