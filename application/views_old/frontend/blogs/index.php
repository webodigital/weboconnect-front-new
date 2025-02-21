<div class="bg-body-tertiary blog-section">
    <div class="pt-5 text-center">
        <h1 class=" mb-0">Blogs</h1>
    </div>
    <!--<div class="container mt-5">-->
    <!--    <div class="row">-->
    <!--        <?php foreach ($blogs as $blog) : ?>-->
    <!--            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mb-4">-->
    <!--                <a href="<?php echo base_url('blog/' . $blog->slug); ?>" class="card blog-card border-0 h-100 text-decoration-none">-->
    <!--                    <img src="<?php echo base_url('assets/images/blogs/uploads/' . $blog->image); ?>" alt="<?php echo htmlspecialchars($blog->title, ENT_QUOTES, 'UTF-8'); ?>" height="200px" class="object-fit-cover">-->
    <!--                    <div class="p-3">-->
    <!--                        <h3 class="fs-20 fw-600 mb-2"><?php echo htmlspecialchars($blog->title, ENT_QUOTES, 'UTF-8'); ?></h3>-->
    <!--                        <p class="fs-14 text-secondary p-0"><?php echo htmlspecialchars(substr($blog->content, 0, 100), ENT_QUOTES, 'UTF-8'); ?>...</p>-->
    <!--                        <div class="d-flex align-items-center justify-content-between mt-3">-->
    <!--                            <div class="d-flex align-items-center">-->
    <!--                                <img src="https://w7.pngwing.com/pngs/910/606/png-transparent-head-the-dummy-avatar-man-tie-jacket-user.png" alt="user" width="30px" height="30px" class="object-fit-cover rounded-circle">-->
    <!--                                <span class="fs-14 ms-2 fw-500 text-body-secondary"><?php echo htmlspecialchars($blog->author_name, ENT_QUOTES, 'UTF-8'); ?></span>-->
    <!--                            </div>-->
    <!--                            <div>-->
    <!--                                <i class="fs-10 text-secondary"><?php echo date('d M Y', strtotime($blog->publish_date)); ?>,</i>-->
    <!--                                <i class="fs-10 text-secondary"><?php echo $blog->publish_time; ?></i>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </a>-->
    <!--            </div>-->
    <!--        <?php endforeach; ?>-->
    <!--    </div>-->
    <!--    <div class="pagination-links">-->
    <!--        <?php echo $pagination; ?>-->
    <!--    </div>-->
    <!--</div>-->
    <div class="container pt-5">
        <div class="row">
            <?php foreach ($blogs as $blog) : ?>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mb-4">
                    <a href="<?php echo base_url('blog/' . $blog->slug); ?>" class="card blog-card border-0 h-100 text-decoration-none">
                        <img src="<?php echo base_url('assets/images/blogs/uploads/thumbnails/' . $blog->thumbnail); ?>" alt="<?php echo htmlspecialchars($blog->title, ENT_QUOTES, 'UTF-8'); ?>" height="200px" class="object-fit-cover">
                        <!--<img src="<?php echo base_url('assets/images/blogs/uploads/' . $blog->image); ?>" alt="<?php echo htmlspecialchars($blog->title, ENT_QUOTES, 'UTF-8'); ?>" height="200px" class="object-fit-cover">-->
                        <div class="p-3">
                            <h3 class="fs-20 fw-600 mb-2"><?php echo htmlspecialchars($blog->title, ENT_QUOTES, 'UTF-8'); ?></h3>
                            <p class="fs-14 text-secondary p-0"><?php echo htmlspecialchars($blog->content, ENT_QUOTES, 'UTF-8'); ?><span class="text-primary fs-12 read-more"><i class="me-1 text-secondary">. . .</i> Read More</span></p>
                            <div class="d-flex align-items-center justify-content-between mt-3">
                                <div class="d-flex align-items-center">
                                    <!-- <img src="https://w7.pngwing.com/pngs/910/606/png-transparent-head-the-dummy-avatar-man-tie-jacket-user.png" alt="user" width="30px" height="30px" class="object-fit-cover rounded-circle"> -->
                                    <img src="https://w7.pngwing.com/pngs/910/606/png-transparent-head-the-dummy-avatar-man-tie-jacket-user.png" alt="user" width="30px" height="30px" class="object-fit-cover rounded-circle">
                                    <span class="fs-14 ms-2 fw-500 text-body-secondary"><?php echo htmlspecialchars($blog->author_name, ENT_QUOTES, 'UTF-8'); ?></span>
                                </div>
                                <div>
                                    <i class="fs-10 text-secondary"><?php echo date('d M Y', strtotime($blog->publish_date)); ?></i>
                                    <!-- <i class="fs-10 text-secondary"><?php echo $blog->publish_time; ?></i> -->
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="pagination-links">
            <?php echo $pagination; ?>
        </div>
    </div>

</div>