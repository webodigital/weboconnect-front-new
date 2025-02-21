
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">

  <title><?php echo isset($meta_title) ? $meta_title : 'WebOConnect|web development|software'; ?></title>
  <meta charset="utf-8">
  <meta name="author" content="">

  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
  <meta name="description" content="<?php echo isset($meta_description) ? $meta_description : 'WebOConnect|web development|software'; ?>">
  <meta name="keywords" content="<?php echo isset($keywords) ? $keywords : 'WebOConnect, web development, software'; ?>">
  
  <!-- Twitter Card data -->
  <meta name="twitter:card" content="<?php echo isset($meta_og_img) ? $meta_og_img : ''; ?>">
  <meta name="twitter:site" content="@weboconnect">
  <meta name="twitter:title" content="<?php echo isset($meta_title) ? $meta_title : 'WebOConnect|web development|software'; ?>">
  <meta name="twitter:description" content="<?php echo isset($meta_description) ? $meta_description : 'WebOConnect|web development|software'; ?>">
  <meta name="twitter:image" content="<?php echo isset($meta_og_img) ? $meta_og_img : ''; ?>">

  <!-- Other meta tags (for example, Open Graph or Facebook) -->
  <meta property="og:site_name" content="<?php echo isset($meta_title) ? $meta_title : 'WebOConnect|web development|software'; ?>">
  <meta property="og:title" content="<?php echo isset($meta_title) ? $meta_title : 'WebOConnect|web development|software'; ?>">
  <meta property="og:type" content="website" />
  <meta property="og:description" content="<?php echo isset($meta_description) ? $meta_description : 'WebOConnect|web development|software'; ?>">
  <meta property="og:image" content="<?php echo isset($meta_og_img) ? $meta_og_img : ''; ?>">
  <meta property="og:url" content="<?php echo isset($meta_og_url) ? $meta_og_url : ''; ?>" />
  <meta property="og:image:width" content="64">
  <meta property="og:image:height" content="64">

  <!-- ====================== Links =========================== -->
  <?php $this->load->view('front/common/styles') ?>
  <!-- Owl Carousel CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

</head>
<body>

<?php $this->load->view('front/common/header') ?>

<section class="csd_banner"  style="background: <?php echo $casestudy->background_color; ?>;">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-5 h-100">
                <span class="d-md-block d-none" style="margin-left: -40px;">
                    <img src="<?=base_url()?>assets/images/shapes/4_corner.webp" alt="shapes">
                </span>
                <div class="text-white my-5">
                    <div class="d-flex align-items-center">
                        <div class="">
                            <button class="btn btn-light">
                                <i class="bi bi-chevron-left"></i>
                            </button>
                            <span class="fs-20 fw-600 ms-3">Case Studies</span>
                            <h1 class="fs-65 fw-700 my-4"><?php echo htmlspecialchars($casestudy->title, ENT_QUOTES, 'UTF-8'); ?></h1>
                            <h5 class="fs-20 fw-500"><?php echo $casestudy->description; ?>
                            <div class="d-flex align-items-center mt-4">
                                <span>
                                    <i class="fs-16 bi bi-geo-alt"></i>
                                </span>
                                <span class="fs-20 fw-500 ms-3"><?php echo htmlspecialchars($casestudy->location, ENT_QUOTES, 'UTF-8'); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 d-lg-block d-none">
                <img src="<?php echo base_url('assets/images/case_studies/uploads/' . $casestudy->background_top_img); ?>" alt="<?php echo htmlspecialchars($casestudy->title, ENT_QUOTES, 'UTF-8'); ?>">
            </div>
        </div>
    </div>
</section>



<section class="bg_azure section_padding">
    <div class="container-fluid over_banner">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="over_banner_card">
                        <span>
                            <img height="60" src="<?=base_url()?>assets/images/icons/front_end.webp" alt="front end">
                        </span>
                        <div class="text_brand_color1 ms-4">
                            <h5 class="fs-24 fw-600 m-0">Front-end</h5>
                            <h6 class="fs-20 fw-500 m-0"><?php echo htmlspecialchars($casestudy->front_end, ENT_QUOTES, 'UTF-8'); ?></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="over_banner_card">
                        <span>
                            <img height="60" src="<?=base_url()?>assets/images/icons/back_end.webp" alt="front end">
                        </span>
                        <div class="text_brand_color1 ms-4">
                            <h5 class="fs-24 fw-600 m-0">Back-end</h5>
                            <h6 class="fs-20 fw-500 m-0"><?php echo htmlspecialchars($casestudy->back_end, ENT_QUOTES, 'UTF-8'); ?></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="over_banner_card">
                        <span>
                            <img height="60" src="<?=base_url()?>assets/images/icons/app_type.webp" alt="front end">
                        </span>
                        <div class="text_brand_color1 ms-4">
                            <h5 class="fs-24 fw-600 m-0">App Type</h5>
                            <h6 class="fs-20 fw-500 m-0"><?php echo htmlspecialchars($casestudy->app_application, ENT_QUOTES, 'UTF-8'); ?></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="bg-white app_status p-lg-5 p-4">
            <div class="row justify-content-between align-items-center my-3">
                <div class="col-auto">
                    <div>
                        <h4 class="fs-30 fw-600">App Type</h4>
                        <h5 class="fs-20 fw-500"><?php echo htmlspecialchars($casestudy->app_type, ENT_QUOTES, 'UTF-8'); ?></h5>
                    </div>
                </div>
                <div class="col-auto">
                    <div>
                        <h4 class="fs-30 fw-600">Status</h4>
                        <h5 class="fs-20 fw-500"><?php echo htmlspecialchars($casestudy->display_status, ENT_QUOTES, 'UTF-8'); ?></h5>
                    </div>
                </div>
                <div class="col-auto">
                    <div>
                        <h4 class="fs-30 fw-600">Available Now</h4>
                        <div>
                            
                            <a href="<?php echo $casestudy->android_url; ?>" class="btn btn_dark_primary btn-rounded px-4">
                                <span>
                                    <img height="30" src="<?=base_url()?>assets/images/icons/android.webp" alt="android">
                                </span>
                                <span class="fs-20 fw-500">Android</span>
                            </a>
                            
                            <a href="<?php echo $casestudy->ios_url; ?>" class="btn btn_dark_primary btn-rounded px-4">
                                <span>
                                    <img height="30" src="<?=base_url()?>assets/images/icons/ios.webp" alt="IOS">
                                </span>
                                <span class="fs-20 fw-500">IOS</span>
                            </a>
                            
                            <a href="<?php echo $casestudy->web_url; ?>" class="btn btn_dark_primary btn-rounded px-4">
                                <span>
                                    <img height="30" src="<?=base_url()?>assets/images/icons/web.webp" alt="web">
                                </span>
                                <span class="fs-20 fw-500">Web</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between align-items-center my-3">
                <div class="col-12">
                    <div>
                        <h4 class="fs-30 fw-600">Technologies</h4>
                        <h5 class="fs-20 fw-500"><?php echo $casestudy->technologies??''; ?></h5>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between align-items-center my-3">
                <div class="col-12">
                    <div>
                        <h4 class="fs-30 fw-600">Client Overview</h4>
                        <h5 class="fs-20 fw-500"><?php echo $casestudy->client_overview??''; ?></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="bg-white how_does_work p-lg-5 p-4">
            <div class="row">
                <div class="col-12">
                    <h2 class="fs-30 fw-600">How Does It Work?</h2>
                </div>
            </div>

            <?php foreach ($how_does_it_work as $hdiw) : ?>
                <div class="row my-1 g-3">
                    <div class="col-md-3">
                        <div class="d-grid">
                            <button href="" class="btn btn_outline_dark_primary btn-rounded fs-20 fw-600"><?php echo $hdiw->title??''; ?></button>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <p class="fs-20 fw-500 m-0"><?php echo $hdiw->description??''; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>

<section class="bg-white section_padding">
    <div class="container">
        <img src="<?php echo base_url('assets/images/case_studies/uploads/' . $casestudy->background_mid_img); ?>" alt="<?php echo htmlspecialchars($casestudy->title, ENT_QUOTES, 'UTF-8'); ?>">
    </div>
</section>

<section class="section_padding project_objectives">
    <div class="container">
        <div class="text-center">
            <h2 class="fs-30 fw-600 text_brand_color1">Project Objectives</h2>
            <h6 class="fs-20 fw-600 text_brand_color1"><?php echo $casestudy->project_objectives_title??'The main goals of the Nurseify app were to'; ?></h6>
        </div>
        <div class="row align-items-center justify-content-center g-4 mt-5">

            <?php foreach ($project_objectives as $po) : ?>
                <div class="col-lg-6">
                    <div class="project_objectives_card">
                        <h5 class="fs-20 fw-600 text_brand_color1"><?php echo $po->title??''; ?></h5>
                        <p class="fs-14 fw-500 text_brand_color1"><?php echo $po->description??''; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="bg-white section_padding">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6">
                <div class="">
                    <h2 class="fs-30 fw-600 text_brand_color1">Challenges</h2>
                </div>
                <div class="row g-4 mt-3">
                    <?php foreach ($challenges as $challenge) : ?>
                        <div class="col-12 ">
                            <h4 class="fs-20 fw-500 text_brand_color1"><?php echo $challenge->title??''; ?></h4>
                            <p class="fs-15 fw-500 text_brand_color1"><?php echo $challenge->description??''; ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="">
                    <img src="<?php echo base_url('assets/images/case_studies/uploads/' . $casestudy->challenges_img); ?>" alt="<?php echo (!empty($casestudy->challenges_title))?$casestudy->challenges_title:'Challenges'; ?>">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section_padding solution_implementation">
    <div class="container">
        
        <div class="row align-items-center justify-content-center g-4">
            <div class="12">
                <h2 class="fs-30 fw-600 text_brand_color1">Solution & Implementation</h2>
                <h6 class="fs-20 fw-500 text_brand_color1"><?php echo $casestudy->solution_implementation_title??'To meet these objectives and overcome challenges, we developed the Nurseify platform with key features that included'; ?></h6>
            </div>
            <div class="col-lg-6">
                <div class="">
                    <img src="<?php echo base_url('assets/images/case_studies/uploads/' . $casestudy->solution_implementation_img); ?>" alt="<?php echo $casestudy->solution_implementation_title??'Solution & Implementation'; ?>">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="bg-white b_rds_20 p-4">
                    <div class="row g-4">
                        <?php foreach ($solution_implementation as $solution_imp) : ?>
                            <div class="col-12 ">
                                <h4 class="fs-20 fw-600 text_brand_color1"><?php echo $solution_imp->title??''; ?></h4>
                                <p class="fs-14 fw-500 text_brand_color1"><?php echo $solution_imp->description??''; ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section_padding bg-white">
    <div class="container">
        <div class="text-center">
            <h2 class="fs-30 fw-600 text_brand_color1">Outcome</h2>
            <h6 class="fs-20 fw-500 text_brand_color1"><?php echo $casestudy->solution_implementation_title??'Since its launch, Nurseify has achieved the following Nurseify app were to'; ?></h6>
        </div>
        
        <div class="row align-items-center justify-content-center g-4 mt-5">
            <?php foreach ($outcome as $outc) : ?>
                <div class="col-lg-6">
                    <div class="project_objectives_card">
                        <h5 class="fs-20 fw-600 text_brand_color1"><?php echo $outc->title??''; ?></h5>
                        <p class="fs-15 fw-500 text_brand_color1"><?php echo $outc->description??''; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section_padding case_study_mob_slider_bg">
    <div class="container-fluid">
        <div class="owl-carousel owl-theme case_study_mob_slider">
            <?php foreach ($screens as $screen) : ?>
                <div class="item">
                    <img src="<?php echo base_url('assets/images/case_studies/uploads/' . $screen->img); ?>" alt="<?php echo htmlspecialchars($screen->title, ENT_QUOTES, 'UTF-8'); ?>">
                </div>
            <?php endforeach; ?>
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
