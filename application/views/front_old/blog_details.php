
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

  <?php $this->load->view('front/common/styles') ?>
  <!-- ================================================= -->
</head>

<body  class="" data-spy="scroll" data-target=".blog_details_table_content_side_bar" data-offset="70"> 
    
<?php $this->load->view('front/common/header') ?>

<section class="py-4">
  <div class="container">
    <div class="row">

      <div class="col-lg-8">
        <div class="blog_details_img_card">
        <!-- <img class="w-100" src="<?= base_url() ?>assets/images/blogs/blogs_img5.webp" alt="blogs images" /> -->
          <img class="w-100" src="<?php echo base_url('assets/images/blogs/uploads/' . $blog->image); ?>" alt="<?php echo htmlspecialchars($blog->title, ENT_QUOTES, 'UTF-8'); ?>" />
          <div class="p-3">
            <h1 class="fs-30 fw-600 my-3"><?php echo htmlspecialchars($blog->title, ENT_QUOTES, 'UTF-8'); ?></h1>
          </div>
        </div>
      </div>
      <?php //echo $blog->content; ?>

      <div class="col-lg-4">
        <div class="latest_blogs_container">
          
          <div class="social_links_share_card">
            <div class="row">
              <div class="col-7">
                <div class="social_links">
                  <a class="" href="#" target="_blank" onclick="shareOnFacebook()">
                    <i class="fs-20 bi bi-facebook"></i>
                  </a>

                  <a class="" href="#" target="_blank" onclick="shareOnLinkedIn()">
                    <i class="fs-20 bi bi-linkedin"></i>
                  </a>

                  <a class="" href="#" target="_blank" class="" onclick="shareOnInstagram()">
                    <i class="fs-20 bi bi-instagram"></i>
                  </a>
  
                  <a class="" href="#" target="_blank" onclick="shareOnTwitter()">
                    <i class="fs-20 bi bi-twitter-x"></i>
                  </a>
                </div>
              </div>
              <div class="col-5">
                <div class="d-flex align-items-center">
                  <span class="fs-14 fw-600">0</span> 
                  <span class="fs-14 fw-600 text_brand_color2 ms-1">Share</span>
                  <i class="fs-16 bi bi-share-fill ms-3"></i>
                </div>
              </div>
            </div>
            
          </div>

          <div class="row g-4 mt-1">
            <div class="col-12">
                <h3 class="fs-24 fw-600 m-0">Latest</h3>
            </div>
            <div class="latest_blogs_list">
              <?php foreach ($recentblogs as $rblog) : ?>
                <div class="col-12">
                  <div class="side_latest_blog_card">
                    <div class="row">
                      <div class="col-sm-4">
                        <img class="w-100" src="<?php echo base_url('assets/images/blogs/uploads/thumbnails/' . $rblog->thumbnail); ?>" alt="<?php echo htmlspecialchars($rblog->title, ENT_QUOTES, 'UTF-8'); ?>" />
                      </div>
                      <div class="col-sm-8">
                        <small class="fs-10 fw-400"><?php echo date('d M Y', strtotime($rblog->publish_date)); ?></small>
                        <h4 class="fs-14 fw-600"><?php echo htmlspecialchars(substr($rblog->title, 0, 49), ENT_QUOTES, 'UTF-8'); ?>...</h4>
                        <p class="fs-12 fw-400 m-0"><?php echo htmlspecialchars(substr($rblog->content, 0, 55), ENT_QUOTES, 'UTF-8'); ?>...</p>
                        <a class="fs-12 fw-500 text_brand_color2" href="<?php echo base_url('blog/' . $rblog->slug); ?>">Read More</a>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>  
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>
</section>



<section class="">
  <div class="container">

    <div class="row">

    <div class="col-lg-4">
      <div class="blog_details_table_content_side_bar">
        <h4 class="fs-28 fw-700">Table of Contents</h4>
        <nav class="table_of_contents">
          <!-- <ul id="list-example">
              <a href="#introduction">Introduction</a>
              <a href="#what_is_cloud_computing">What Is Cloud Computing?</a>
              <a href="#modern_web_development">Modern Web Development with Cloud: Build Better, Faster</a>
              <a href="#cloud_solutions_for_developers">Cloud Solutions for Developers: A Toolbox of Possibilities</a>
              <a href="#conclusion">Conclusion</a>
              <a href="#faqs">FAQs </a>
          </ul> -->
          
          <?php echo $toc; ?>

        </nav>
      </div>
    </div>
      <div class="col-lg-8">
        <div class="blog_details_content"  data-bs-spy="scroll" data-bs-target="#table_of_contents" data-bs-offset="100" tabindex="0">
          
          <div class="row align-items-center g-4 mt-1">
            <div class="col">
              <div class="d-flex align-items-center">
                <span class="webo_logo">
                  <img src="<?= base_url() ?>assets/images/thnk_logo.webp" alt="logo" />
                </span>
                <div class="ms-3">
                  <h3 class="fs-24 fw-600 m-0"><?php echo htmlspecialchars($blog->author_name, ENT_QUOTES, 'UTF-8'); ?></h3>
                  <small class="fs-12 fw-400"><?php echo date('d M Y', strtotime($blog->publish_date)); ?></small>
                </div>
              </div>
            </div>
            <div class="col-auto">
              <div class="likes_cmnt_card">
                <div class="d-flex flex-wrap align-items-center likeBtn">
                  <i class="text_brand_color2 fs-16 bi bi-hand-thumbs-up-fill"></i>
                  <span class="fs-12 fw-500 ms-2 likebtncount">0</span>
                </div>
                <div class="d-flex flex-wrap align-items-center">
                  <i class="text-black fs-16 bi bi-chat-text-fill"></i>
                  <span class="fs-12 fw-500 ms-2">0</span>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <div class="d-flex flex-wrap gap-2 mt-4">
                <!-- <span class="badge fs-14 fw-400">Technology</span>
                <span class="badge fs-14 fw-400">CLOUD COMPUTING</span>
                <span class="badge fs-14 fw-400">MODERN WEB DEVELOPMENT</span>
                <span class="badge fs-14 fw-400">Business</span>
                <span class="badge fs-14 fw-400">Productivity</span>
                <span class="badge fs-14 fw-400">Art</span>
                <span class="badge fs-14 fw-400">Mindfullness</span> -->
                <?php 
                  $tags = explode(', ', $blog->tags); 
                  foreach($tags as $tag) { 
                      echo '<span class="badge fs-14 fw-400">' . htmlspecialchars($tag) . '</span>'; 
                  }
                ?>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <div class="mt-4">
                <?php //echo $blog->content ?>
                <?php echo $content ?>
              </div>
            </div>
          </div>


          <div class="row align-items-center g-4 mt-1 d-none">
            <div class="col">
              <div class="d-flex align-items-center">
                <h3 class="fs-24 fw-600 m-0">Comments</h3>
                <span class="badge py-3 ms-3" style="background: #01458E;">
                  <i class="text-white fs-16 bi bi-pencil-square"></i>
                </span>
              </div>
            </div>
            <div class="col-auto">
              <div class="likes_cmnt_card">
                <div class="d-flex flex-wrap align-items-center likeBtn">
                  <i class="text_brand_color2 fs-16 bi bi-hand-thumbs-up-fill"></i>
                  <span class="fs-12 fw-500 ms-2 likebtncount">0</span>
                </div>
                <div class="d-flex flex-wrap align-items-center">
                  <i class="text-black fs-16 bi bi-chat-text-fill"></i>
                  <span class="fs-12 fw-500 ms-2" id="commentbtncount">0</span>
                </div>
              </div>
            </div>
          </div>

          <div class="row g-4 mt-4">

            <!-- <div class="col-12">
              <div class="comments_card">
                <div class="row">
                  <div class="col-auto">
                    <div class="user" style="width:50px;">
                      <span>
                        <img src="<?= base_url() ?>assets/images/icons/user.webp" alt="Outsource Project">
                      </span>
                    </div>
                  </div>
                  <div class="col">
                    <p class="fs-18 fw-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ligula nibh, interdum non enim sit amet, iaculis aliquet nunc.</p>
                  </div>
                </div>

                <div class="row">
                  <div class="col-auto">
                    <div class="" style="width:50px;">
                      <h5 class="fs-18 fw-400">user</h5>
                    </div>
                  </div>
                  <div class="col">
                      <div class="d-flex">
                        <h5 class="fs-18 fw-600 text_gray">Reply</h5>
                        <span class="fs-18 fw-400 text_brand_color3 ms-3">a min ago</span>
                      </div>
                    </div>
                </div>
              </div>
            </div>

            <div class="col-12">
              <div class="comments_card">
                <div class="row">
                  <div class="col-auto">
                    <div class="user" style="width:50px;">
                      <span>
                        <img src="<?= base_url() ?>assets/images/icons/user.webp" alt="Outsource Project">
                      </span>
                    </div>
                  </div>
                  <div class="col">
                    <p class="fs-18 fw-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ligula nibh, interdum non enim sit amet, iaculis aliquet nunc.</p>
                  </div>
                </div>

                <div class="row">
                  <div class="col-auto">
                    <div class="" style="width:50px;">
                      <h5 class="fs-18 fw-400">user</h5>
                    </div>
                  </div>
                  <div class="col">
                      <div class="d-flex">
                        <h5 class="fs-18 fw-600 text_gray">Reply</h5>
                        <span class="fs-18 fw-400 text_brand_color3 ms-3">a min ago</span>
                      </div>
                    </div>
                </div>
              </div>
            </div>

            <div class="col-12">
              <div class="comments_card">
                <div class="row">
                  <div class="col-auto">
                    <div class="user" style="width:50px;">
                      <span>
                        <img src="<?= base_url() ?>assets/images/icons/user.webp" alt="Outsource Project">
                      </span>
                    </div>
                  </div>
                  <div class="col">
                    <p class="fs-18 fw-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ligula nibh, interdum non enim sit amet, iaculis aliquet nunc.</p>
                  </div>
                </div>

                <div class="row">
                  <div class="col-auto">
                    <div class="" style="width:50px;">
                      <h5 class="fs-18 fw-400">user</h5>
                    </div>
                  </div>
                  <div class="col">
                      <div class="d-flex">
                        <h5 class="fs-18 fw-600 text_gray">Reply</h5>
                        <span class="fs-18 fw-400 text_brand_color3 ms-3">a min ago</span>
                      </div>
                    </div>
                </div>
              </div>
            </div>

            <div class="col-12 text-center my-4">
              <a class="btn view_all_button fs-16 fw-600 " href="<?= base_url() ?>">View All</a>
            </div> -->

            <div id="commentsContainer"></div>

          </div>

        </div>
      </div>


      <!-- <div class="col-lg-4">
        <div class="latest_blogs_container">
          
          <div class="social_links_share_card">
            <div class="row">
              <div class="col-7">
                <div class="social_links">
                  <a class="" href="#" target="_blank" onclick="shareOnFacebook()">
                    <i class="fs-20 bi bi-facebook"></i>
                  </a>

                  <a class="" href="#" target="_blank" onclick="shareOnLinkedIn()">
                    <i class="fs-20 bi bi-linkedin"></i>
                  </a>

                  <a class="" href="#" target="_blank" class="" onclick="shareOnInstagram()">
                    <i class="fs-20 bi bi-instagram"></i>
                  </a>

                  <a class="" href="#" target="_blank" onclick="shareOnTwitter()">
                    <i class="fs-20 bi bi-twitter-x"></i>
                  </a>
                </div>
              </div>
              <div class="col-5">
                <div class="d-flex align-items-center">
                  <span class="fs-14 fw-600">0</span> 
                  <span class="fs-14 fw-600 text_brand_color2 ms-1">Share</span>
                  <i class="fs-16 bi bi-share-fill ms-3"></i>
                </div>
              </div>
            </div>
            
          </div>

          <div class="row g-4 mt-1">
            <div class="col-12">
                <h3 class="fs-24 fw-600 m-0">Latest</h3>
            </div>
            <div class="latest_blogs_list">
              <?php foreach ($recentblogs as $blog) : ?>
                <div class="col-12">
                  <div class="side_latest_blog_card">
                    <div class="row align-items-center">
                      <div class="col-sm-4">
                        <img class="w-100" src="<?php echo base_url('assets/images/blogs/uploads/thumbnails/' . $blog->thumbnail); ?>" alt="<?php echo htmlspecialchars($blog->title, ENT_QUOTES, 'UTF-8'); ?>" />
                      </div>
                      <div class="col-sm-8">
                        <small class="fs-10 fw-400"><?php echo date('d M Y', strtotime($blog->publish_date)); ?></small>
                        <h4 class="fs-14 fw-600"><?php echo htmlspecialchars($blog->title, ENT_QUOTES, 'UTF-8'); ?></h4>
                        <p class="fs-12 fw-400 m-0"><?php echo htmlspecialchars(substr($blog->content, 0, 100), ENT_QUOTES, 'UTF-8'); ?>...</p>
                        <a class="fs-12 fw-500 text_brand_color2" href="<?php echo base_url('blog/' . $blog->slug); ?>">Read More</a>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>  
            </div>
          </div>
        </div>
      </div> -->


      </div>
  </div>
</section>




<section class="section_padding stay_up_to_date">
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
                    <!-- <p class="fs-10 fw-400 text-white">By clicking Sign Up you're confirming that you agree with our Terms and Conditions.</p> -->
                </form>
            </div>
        </div>
    </div>
</section>


<section class="section_padding">
    <div class="container">
      <div class="text-center">
        <h2 class="fs-30 fw-600 text_brand_color1">Our latest Blogs</h2>
      </div>
        <div class="row">
          <?php foreach ($bottom_blogs as $bblog) : ?>
            <div class="col-lg-4 col-sm-6">
                <div class="blogs_card">
                    <img class="w-100" src="<?php echo base_url('assets/images/blogs/uploads/thumbnails/' . $bblog->thumbnail); ?>" alt="<?php echo htmlspecialchars($bblog->title, ENT_QUOTES, 'UTF-8'); ?>" />
                    <div class="blogs_card_content">
                        <small class="fs-12 fw-400"><?php echo date('d M Y', strtotime($bblog->publish_date)); ?></small>
                        <h4 class="fs-18 fw-600"><?php echo htmlspecialchars($bblog->title, ENT_QUOTES, 'UTF-8'); ?></h4>
                        <p class="fs-14 fw-400"><?php echo htmlspecialchars(substr($bblog->content, 0, 100), ENT_QUOTES, 'UTF-8'); ?>...</p>
                        <a class="fs-14 fw-500" href="<?php echo base_url('blog/' . $bblog->slug); ?>">Read More</a>
                    </div>
                </div>
            </div>
          <?php endforeach; ?>
        </div>
    </div>
</section>



<?php $this->load->view('front/common/footer_form') ?>
<?php $this->load->view('front/common/footer') ?>

</body> 
<?php $this->load->view('front/common/script') ?>

<script>
document.querySelectorAll('a[href^="#section"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});
</script>

<script>

    $(document).ready(function() {

        var comments = <?php echo json_encode($comments); ?>;
        if (comments && comments.length > 0) {
            displayComments(comments);
        }

        function getIdFromUrl() {
            const url = window.location.href;
            const parts = url.split('/');
            return parts[parts.length - 1]; // Assuming the ID is the last part of the URL
        }

        const blogId = getIdFromUrl();

        $('#commentForm').submit(function(event) {
            event.preventDefault();
            var formData = {
                comment: $('#comment').val(),
                blog_id: blogId
            };

            $.ajax({
                url: '<?php echo base_url("blog/addBlogComment"); ?>',
                type: 'POST',
                data: formData,
                dataType: 'json',
                success: function(response) {
                    if (response.status === 'success') {
                        showToaster('success', response.message);
                        $('#commentForm')[0].reset();
                        displayComments(response.comments);
                    } else if (response.status === 'error') {
                        showToaster('error', response.message);
                    }
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                    showToaster('error', 'An error occurred while submitting the form.');
                }
            });
        });

        function showToaster(type, message) {
            var toaster = $('<div class="toaster toaster-' + type + '">' + message + '</div>');
            $('#toaster-container').append(toaster);
            toaster.fadeIn(400).delay(3000).fadeOut(400, function() {
                $(this).remove();
            });
        }

        function displayComments(comments) {
            console.log(comments);
            var commentsContainer = $('#commentsContainer');
            commentsContainer.empty(); // Clear existing comments

            comments.forEach(function(comment) {
                /*var commentElement = `
                <div class="d-flex align-items-top bg-body-secondary p-3 rounded mb-3">
                    <img src="https://w7.pngwing.com/pngs/910/606/png-transparent-head-the-dummy-avatar-man-tie-jacket-user.png" alt="user" width="50px" height="50px" class="object-fit-cover rounded-circle">
                    <div class="ms-2">
                        <span class="fs-16 fw-500 text-dark d-block">${comment.user_name}</span>
                        <p class="fs-14 m-0 text-body">
                            ${comment.comment}
                        </p>
                    </div>
                </div>`;*/
                var commentElement = `<div class="col-12">
                  <div class="comments_card">
                    <div class="row">
                      <div class="col-auto">
                        <div class="user" style="width:50px;">
                          <span>
                            <img src="<?= base_url() ?>assets/images/icons/user.webp" alt="Outsource Project">
                          </span>
                        </div>
                      </div>
                      <div class="col">
                        <p class="fs-18 fw-400">${comment.comment}</p>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-auto">
                        <div class="" style="width:50px;">
                          <h5 class="fs-18 fw-400">${comment.user_name}</h5>
                        </div>
                      </div>
                      <div class="col">
                          <div class="d-flex">
                            <h5 class="fs-18 fw-600 text_gray">Reply</h5>
                            <span class="fs-18 fw-400 text_brand_color3 ms-3">a min ago</span>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>`;
                commentsContainer.append(commentElement);
            });
        }

        $('.likeBtn').click(function() {
            $.ajax({
                url: '<?php echo base_url("toggle-like"); ?>',
                type: 'POST',
                data: {
                    blog_id: blogId
                },
                dataType: 'json',
                success: function(response) {
                    // if (response.liked) {
                    //     console.log(response.likecount);
                    //     $('#likebtncount').text(response.likecount);
                    //     } else {
                    //     console.log(response.likecount);
                    //     $('#likebtncount').text(response.likecount);
                    // }
                    if (response.likecount !== undefined) {
                        // $('#likebtncount').text(response.likecount);
                        // document.getElementById('likebtncount').textContent = response.likecount;
                        document.getElementById('likebtncount').innerHTML = response.likecount;
                        console.log(response.likecount);
                    }
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                    alert('An error occurred while processing the request.');
                }
            });
        });

    });

    function shareOnFacebook() {
        const url = encodeURIComponent(window.location.href);
        const shareUrl = `https://www.facebook.com/sharer/sharer.php?u=${url}`;
        window.open(shareUrl, '_blank');
    }

    function shareOnTwitter() {
        const url = encodeURIComponent(window.location.href);
        const text = encodeURIComponent(document.title);
        const shareUrl = `https://twitter.com/intent/tweet?url=${url}&text=${text}`;
        window.open(shareUrl, '_blank');
    }

    function shareOnLinkedIn() {
        const url = encodeURIComponent(window.location.href);
        const shareUrl = `https://www.linkedin.com/shareArticle?mini=true&url=${url}`;
        window.open(shareUrl, '_blank');
    }

    function shareOnInstagram() {
        alert("Instagram does not support direct URL sharing. You can share this page by copying the URL and pasting it in your Instagram bio or story.");
    }
</script>
</html>

