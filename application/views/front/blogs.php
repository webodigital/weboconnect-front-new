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
<section class="section_padding">
    <div class="container">
        <div class="text-center mb-4">
            <h1 class="fs-34 fw-600 text_brand_color1">Our Blogs</h1>
        </div>
    </div>

    <div class="container">
        <div class="">
            <div class=" blogs_filter_buttons">
                <div class="owl-carousel owl-theme blog_btn_slider">
                    <div class="item">
                        <!-- <button class="btn btn-light slides_btn <?php echo ($selected_category === 'all' || empty($selected_category)) ? 'active' : ''; ?>" href="<?php echo base_url('blogs'); ?>">All</button> --> 
                        <button class="btn btn-light slides_btn <?php echo ($selected_category === 'all' || empty($selected_category)) ? 'active' : ''; ?>" onclick="filterCategory('all')">
                            All
                        </button>                       
                    </div>
                    <?php foreach ($categories as $key => $value) : ?>
                        <div class="item">
                            <button 
                                class="btn btn-light slides_btn <?php echo ($selected_category === $value['slug']) ? 'active' : ''; ?>" 
                                onclick="filterCategory('<?php echo $value['slug']; ?>')">
                                <?php print_r($value['title']); ?>
                            </button>
                        </div>
                    <?php endforeach; ?>   
                    <!-- <div class="item">
                        <button class="btn btn-light slides_btn" onclick="filterBlog('emerging_tech_trends')">Emerging Tech & Trends</button>
                    </div>
                    <div class="item">
                        <button class="btn btn-light slides_btn" onclick="filterBlog('solutions_best_practices')">Solutions & Best Practices</button>
                    </div>
                    <div class="item">
                        <button class="btn btn-light slides_btn" onclick="filterBlog('cybersecurity')">Cybersecurity</button>
                    </div>
                    <div class="item">
                        <button class="btn btn-light slides_btn" onclick="filterBlog('tech_specific_industries')">Tech for Specific Industries</button>
                    </div>
                    <div class="item">
                        <button class="btn btn-light slides_btn" onclick="filterBlog('thought_leadership_innovation')">Thought Leadership & Innovation</button>
                    </div>
                    <div class="item">
                        <button class="btn btn-light slides_btn" onclick="filterBlog('educational')">Educational</button>
                    </div>
                    <div class="item">
                        <button class="btn btn-light slides_btn" onclick="filterBlog('hire_dedicated_resources')">Hire Dedicated Resources</button>
                    </div>
                    <div class="item">
                        <button class="btn btn-light slides_btn" onclick="filterBlog('app_development')">App Development</button>
                    </div>
                    <div class="item">
                        <button class="btn btn-light slides_btn" onclick="filterBlog('web_development')">Web Development</button>
                    </div>
                    <div class="item">
                        <button class="btn btn-light slides_btn" onclick="filterBlog('language_based_apps')">Language-Based Apps</button>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row g-4">
            <?php if (!empty($blogs)) : ?>
                <?php foreach ($blogs as $blog) : ?>
                    <div class="col-lg-4 col-sm-6 blogs_item">
                        <div class="blogs_card">
                            <img class="w-100" src="<?php echo base_url('assets/images/blogs/uploads/thumbnails/' . $blog->thumbnail); ?>" alt="<?php echo htmlspecialchars($blog->title, ENT_QUOTES, 'UTF-8'); ?>" />
                            <div class="blogs_card_content">
                                <small class="fs-12 fw-400"><?php echo date('d M Y', strtotime($blog->publish_date)); ?></small>
                                <h4 class="fs-18 fw-600"><?php echo htmlspecialchars($blog->title, ENT_QUOTES, 'UTF-8'); ?></h4>
                                <p class="fs-14 fw-400"><?php echo htmlspecialchars($blog->content, ENT_QUOTES, 'UTF-8'); ?></p>
                                <a class="fs-14 fw-500" href="<?php echo base_url('blog/' . $blog->slug); ?>">Read More</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <h3>No blogs found for the selected category.</h3>
            <?php endif; ?>
        </div>
        <div class="pagination">
            <?php echo $pagination; ?>
        </div>
    </div>

    
</section>

<!-- <section class="section_padding stay_up_to_date">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6">
                <h3 class="fs-40 fw-700 text-white mb-4">Stay up to date</h3>
                <p class="fs-20 fw-600 text-white">Business, technology, and innovation insights. Written by experts. Delivered weekly.</p>
            </div>
            <div class="col-lg-5">
                <form class="row g-3">
                    <div class="col">
                        <input type="text" class="form-control fs-14 fw-400" id="" placeholder="Enter your email">
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-light px-4">Subscribe</button>
                    </div>
                    <p class="fs-10 fw-400 text-white">By clicking Sign Up you're confirming that you agree with our Terms and Conditions.</p>
                </form>
            </div>
        </div>
    </div>
</section> -->

<!-- <section class="section_padding">
    <div class="container">
        <div class="row justify-content-center g-4 mt-5">
            <div class="col-lg-4 col-sm-6">
                <div class="blogs_card">
                    <img class="w-100" src="<?= base_url() ?>assets/images/blogs/blogs_img5.webp" alt="blogs images" />
                    <div class="blogs_card_content">
                        <small class="fs-12 fw-400">04 oct 2024</small>
                        <h4 class="fs-18 fw-600">How to Build a Scalable Web
                        Application</h4>
                        <p class="fs-14 fw-400">In this digital world, any business organization requires scalable web applications that erfectly with its user base. Whenever an application fails...</p>
                        <a class="fs-14 fw-500" href="<?= base_url() ?>blog-details">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="blogs_card">
                    <img class="w-100" src="<?= base_url() ?>assets/images/blogs/blogs_img4.webp" alt="blogs images" />
                    <div class="blogs_card_content">
                        <small class="fs-12 fw-400">03 oct 2024</small>
                        <h4 class="fs-18 fw-600">The Role of APIs in Modern Web
                        emerging_tech_trends</h4>
                        <p class="fs-14 fw-400">Applications make today&#39;s world of modern web emerging_tech_trends more interconnected than ever before. Due to the presence of APIs in web.....</p>
                        <a class="fs-14 fw-500" href="<?= base_url() ?>blog-details">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="blogs_card">
                    <img class="w-100" src="<?= base_url() ?>assets/images/blogs/blogs_img6.webp" alt="blogs images" />
                    <div class="blogs_card_content">
                        <small class="fs-12 fw-400">21 oct 2024</small>
                        <h4 class="fs-18 fw-600">Top 5 Programming Languages
                        for Web emerging_tech_trends in 2024</h4>
                        <p class="fs-14 fw-400">As we enter into 2024, web emerging_tech_trends trends change very rapidly; therefore, when it comes to the choice of a programming language, it will...</p>
                        <a class="fs-14 fw-500" href="<?= base_url() ?>blog-details">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<?php $this->load->view('front/common/footer_form') ?>
<?php $this->load->view('front/common/footer') ?>

</body> 
<?php $this->load->view('front/common/script') ?>

<script>

    function filterCategory(category) {
        const baseUrl = "<?php echo base_url('blogs'); ?>";
        const url = new URL(baseUrl, window.location.origin);
        url.searchParams.set('category', category);
        window.location.href = url.toString();
    }

    function filterBlog1(category) {
        const items = document.querySelectorAll('.blogs_item');
        const btns_items = document.querySelectorAll('.slides_btn');
        items.forEach(item => {
            if (category === 'all' || item.getAttribute('data-category') === category) {
            item.style.display = 'block';
            } else {
            item.style.display = 'none';
            }
        });
    }

    $('.slides_btn').on('click', function(){
        $('.slides_btn').removeClass('active');
        $(this).addClass('active');
    });

</script>
</html>
