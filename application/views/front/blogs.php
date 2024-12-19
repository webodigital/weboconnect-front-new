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
    <div class="container d-none">
        <div class="blogs_filter_buttons">
            <button class="btn btn-light slides_btn active" onclick="filterBlog('all')">All</button>
            <button class="btn btn-light slides_btn" onclick="filterBlog('development')">Development</button>
            <button class="btn btn-light slides_btn" onclick="filterBlog('web_security')">WEB SECURITY</button>
            <button class="btn btn-light slides_btn" onclick="filterBlog('implementation')">IMPLEMENTATION</button>
            <button class="btn btn-light slides_btn" onclick="filterBlog('user_friendly')">USER-FRIENDLY INTERFACE</button>
            <button class="btn btn-light slides_btn" onclick="filterBlog('travel')">TRAVEL</button>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row g-4">

            <?php foreach ($blogs as $blog) : ?>
            <div class="col-lg-4 col-sm-6 blogs_item" data-category="development">
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

            <div>
                <?php echo $pagination; ?>
            </div>

            <!-- <div class="col-lg-4 col-sm-6 blogs_item" data-category="development">
                <div class="blogs_card">
                    <img class="w-100" src="<?= base_url() ?>assets/images/blogs/blogs_img1.webp" alt="blogs images" />
                    <div class="blogs_card_content">
                        <small class="fs-12 fw-400">21 oct 2024</small>
                        <h4 class="fs-18 fw-600">The Role Of AI In Optimizing
                        Routes And Reducing Costs Fo...</h4>
                        <p class="fs-14 fw-400">You wonder why your cab always takes the quickest route, even through a heavy rush hour. It is not by chance. At the work of Al, it optimize...</p>
                        <a class="fs-14 fw-500" href="<?= base_url() ?>blog-details">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 blogs_item" data-category="web_security">
                <div class="blogs_card">
                    <img class="w-100" src="<?= base_url() ?>assets/images/blogs/blogs_img2.webp" alt="blogs images" />
                    <div class="blogs_card_content">
                        <small class="fs-12 fw-400">04 oct 2024</small>
                        <h4 class="fs-18 fw-600">What Do You Need To Know
                        About IoT?</h4>
                        <p class="fs-14 fw-400">India is hottest among all these countries for the outsourcing services just because of availability of large number of skilled and English speakers....</p>
                        <a class="fs-14 fw-500" href="<?= base_url() ?>blog-details">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 blogs_item" data-category="implementation">
                <div class="blogs_card">
                    <img class="w-100" src="<?= base_url() ?>assets/images/blogs/blogs_img3.webp" alt="blogs images" />
                    <div class="blogs_card_content">
                        <small class="fs-12 fw-400">03 oct 2024</small>
                        <h4 class="fs-18 fw-600">What Do You Need To Know
                        About IoT?</h4>
                        <p class="fs-14 fw-400">In the present world running on high technology, filled with plentiful and sophisticated smartphones as well as other devices, you can...</p>
                        <a class="fs-14 fw-500" href="<?= base_url() ?>blog-details">Read More</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-sm-6 blogs_item" data-category="user_friendly">
                <div class="blogs_card">
                    <img class="w-100" src="<?= base_url() ?>assets/images/blogs/blogs_img4.webp" alt="blogs images" />
                    <div class="blogs_card_content">
                        <small class="fs-12 fw-400">03 oct 2024</small>
                        <h4 class="fs-18 fw-600">The Role of APIs in Modern Web
                        Development</h4>
                        <p class="fs-14 fw-400">Applications make today&#39;s world of modern web development more interconnected than ever before. Due to the presence of APIs in web.....</p>
                        <a class="fs-14 fw-500" href="<?= base_url() ?>blog-details">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 blogs_item" data-category="implementation">
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
            <div class="col-lg-4 col-sm-6 blogs_item" data-category="travel">
                <div class="blogs_card">
                    <img class="w-100" src="<?= base_url() ?>assets/images/blogs/blogs_img6.webp" alt="blogs images" />
                    <div class="blogs_card_content">
                        <small class="fs-12 fw-400">21 oct 2024</small>
                        <h4 class="fs-18 fw-600">Top 5 Programming Languages
                        for Web Development in 2024</h4>
                        <p class="fs-14 fw-400">As we enter into 2024, web development trends change very rapidly; therefore, when it comes to the choice of a programming language, it will...</p>
                        <a class="fs-14 fw-500" href="<?= base_url() ?>blog-details">Read More</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-sm-6 blogs_item" data-category="development">
                <div class="blogs_card">
                    <img class="w-100" src="<?= base_url() ?>assets/images/blogs/blogs_img7.webp" alt="blogs images" />
                    <div class="blogs_card_content">
                        <small class="fs-12 fw-400">21 oct 2024</small>
                        <h4 class="fs-18 fw-600">The Future of AI in Mobile App
                        Development</h4>
                        <p class="fs-14 fw-400">The advancement of Al in the mobile app development field is still in its growing stage which is rapidly changing the way of our...</p>
                        <a class="fs-14 fw-500" href="<?= base_url() ?>blog-details">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 blogs_item" data-category="user_friendly">
                <div class="blogs_card">
                    <img class="w-100" src="<?= base_url() ?>assets/images/blogs/blogs_img8.webp" alt="blogs images" />
                    <div class="blogs_card_content">
                        <small class="fs-12 fw-400">04 oct 2024</small>
                        <h4 class="fs-18 fw-600">Top 10 Mobile App Development
                        Trends In 2024</h4>
                        <p class="fs-14 fw-400">The world of mobile app development for phones is ever-changing at a rapid pace, driven by new tech and what people want. As we approach...</p>
                        <a class="fs-14 fw-500" href="<?= base_url() ?>blog-details">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 blogs_item" data-category="web_security">
                <div class="blogs_card">
                    <img class="w-100" src="<?= base_url() ?>assets/images/blogs/blogs_img9.webp" alt="blogs images" />
                    <div class="blogs_card_content">
                        <small class="fs-12 fw-400">03 oct 2024</small>
                        <h4 class="fs-18 fw-600">How To Make Taxi Service
                        Accessible With The Right App?</h4>
                        <p class="fs-14 fw-400">The taxi business is changing so fast, and 2025 is more important in terms of making taxi services accessible to everyone. Currently, over 2 billion...</p>
                        <a class="fs-14 fw-500" href="<?= base_url() ?>blog-details">Read More</a>
                    </div>
                </div>
            </div> -->

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
                        Development</h4>
                        <p class="fs-14 fw-400">Applications make today&#39;s world of modern web development more interconnected than ever before. Due to the presence of APIs in web.....</p>
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
                        for Web Development in 2024</h4>
                        <p class="fs-14 fw-400">As we enter into 2024, web development trends change very rapidly; therefore, when it comes to the choice of a programming language, it will...</p>
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
    function filterBlog(category) {
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
