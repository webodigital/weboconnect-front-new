
<section class="section_padding testimonials">
    <div class="container">
        <h5 class="fs-20 fw-600 text_brand_color2">Testimonials</h5>
        <h5 class="fs-40 fw-600 text_brand_color2"><?php echo $casestudy->testimonial_title??'What our clients say about us'; ?></h5>

        <div class="owl-carousel owl-theme testimonials_slider mt-5">
            <?php foreach ($testimonials as $testimonial) : ?>
                <div class="item">
                    <div class="row align-items-center justify-content-center g-4">
                        <div class="col-md-4">
                            <div class="client_info">
                                <img src="<?php echo base_url('assets/images/case_studies/uploads/' . $testimonial->img); ?>" alt="<?php echo htmlspecialchars($screen->title, ENT_QUOTES, 'UTF-8'); ?>" />
                                <h5 class="fs-32 fw-500 text_brand_color2"><?php echo $testimonial->name??''; ?></h5>
                                <h6 class="fs-24 fw-500 text_brand_color2"><?php echo $testimonial->position??''; ?> <br> <?php echo $testimonial->location??''; ?></h6>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="client_words">
                                <span>
                                    <img height="60" src="<?=base_url()?>assets/images/icons/quote_up.webp" alt="quotes" />
                                </span>
                                <p class="fs-24 fw-500"><?php echo $testimonial->comments??''; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <!-- <div class="item">
                <div class="row align-items-center justify-content-center g-4">
                    <div class="col-md-4">
                        <div class="client_info">
                            <img src="<?=base_url()?>assets/images/clients/vlad.png" alt="nurseify" />
                            <h5 class="fs-32 fw-500 text_brand_color2">Vlad Tamas</h5>
                            <h6 class="fs-24 fw-500 text_brand_color2">CEO & Founder, MSAT, <br> Romania</h6>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="client_words">
                            <span>
                                <img height="60" src="<?=base_url()?>assets/images/icons/quote_up.webp" alt="quotes" />
                            </span>
                            <p class="fs-24 fw-500">Since hiring team from Weboconnect  , we've seen a significant increase in productivity and a reduction in errors. We couldn't be happier with the results.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="row align-items-center justify-content-center g-4">
                    <div class="col-md-4">
                        <div class="client_info">
                            <img src="<?=base_url()?>assets/images/clients/vlad.png" alt="nurseify" />
                            <h5 class="fs-32 fw-500 text_brand_color2">Vlad Tamas</h5>
                            <h6 class="fs-24 fw-500 text_brand_color2">CEO & Founder, MSAT, <br> Romania</h6>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="client_words">
                            <span>
                                <img height="60" src="<?=base_url()?>assets/images/icons/quote_up.webp" alt="quotes" />
                            </span>
                            <p class="fs-24 fw-500">Since hiring team from Weboconnect  , we've seen a significant increase in productivity and a reduction in errors. We couldn't be happier with the results.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="row align-items-center justify-content-center g-4">
                    <div class="col-md-4">
                        <div class="client_info">
                            <img src="<?=base_url()?>assets/images/clients/vlad.png" alt="nurseify" />
                            <h5 class="fs-32 fw-500 text_brand_color2">Vlad Tamas</h5>
                            <h6 class="fs-24 fw-500 text_brand_color2">CEO & Founder, MSAT, <br> Romania</h6>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="client_words">
                            <span>
                                <img height="60" src="<?=base_url()?>assets/images/icons/quote_up.webp" alt="quotes" />
                            </span>
                            <p class="fs-24 fw-500">Since hiring team from Weboconnect  , we've seen a significant increase in productivity and a reduction in errors. We couldn't be happier with the results.</p>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>