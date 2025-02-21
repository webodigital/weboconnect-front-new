
<div class="container d-lg-block d-none">
    <div class="row justify-content-center g-4 g-lg-5 mt-5">
      <?php foreach ($blogs as $blog) : ?>
        <div class="col-lg-4 col-sm-6">
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
      <!-- <div class="col-lg-4 col-sm-6">
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
      </div> -->
    </div>
  </div>
  <div class="container d-block d-lg-none">
    <div class="owl-carousel owl-theme single_slider">
      <?php foreach ($blogs as $blog) : ?>
        <div class="item">
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
      <!-- <div class="item">
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
      <div class="item">
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
      <div class="item">
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
      </div> -->
    </div>
  </div>

  <div class="container">
    <div class="row mt-4">
      <div class="col-12 text-center">
          <a class="btn view_all_button fs-16 fw-600 " href="<?= base_url() ?>blogs">View All</a>
      </div>
    </div>
  </div>