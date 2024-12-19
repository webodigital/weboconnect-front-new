<div class="bg-body-tertiary blog-section blog">
    <div class="container py-5">
        <div class="row">
            <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-7 col-sm-12 col-12">
                <img src="<?php echo base_url('assets/images/blogs/uploads/' . $blog->image); ?>" alt="<?php echo htmlspecialchars($blog->title, ENT_QUOTES, 'UTF-8'); ?>" class="w-100">
                <div class="mt-4">
                    <h1 class="fw-700 fs-32"><?php echo htmlspecialchars($blog->title, ENT_QUOTES, 'UTF-8'); ?></h2>
                    <div class="mb-4 mt-4 border-bottom pb-3 d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <img src="https://w7.pngwing.com/pngs/910/606/png-transparent-head-the-dummy-avatar-man-tie-jacket-user.png" alt="Blog Author" width="50px" height="50px" class="object-fit-cover rounded-circle">
                            <div class="ms-2">
                                <span class="fs-18 fw-500 text-dark d-block"><?php echo htmlspecialchars($blog->author_name, ENT_QUOTES, 'UTF-8'); ?></span>
                                <p class="fs-12 m-0 text-body-tertiary">
                                    <b>Published Date: </b>
                                    <i><?php echo date('d M Y', strtotime($blog->publish_date)); ?>,</i>
                                    <!--<i><?php echo $blog->publish_time; ?></i>-->
                                </p>
                            </div>
                        </div>
                        <div>
                            <div class="d-flex align-items-center justify-content-between position-relative blog-like-share">
                                <div class="">
                                    <button type="button" class="btn" id="likeBtn">
                                        <!-- <svg width="20px" height="20px" class="me-2" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.5817 3.18042C12.5817 1.71045 11.1294 0.730469 9.99454 0.730469C9.20468 0.730469 9.14294 1.33022 9.02142 2.51403C8.96752 3.03342 8.90284 3.66453 8.75977 4.4054C8.38149 6.36732 7.0742 8.87411 5.82374 9.62379V15.4302C5.81982 17.6351 6.55481 18.3701 9.73975 18.3701H13.4372C15.5697 18.3701 16.0861 16.9658 16.2782 16.4454L16.2909 16.4102C16.4026 16.1103 16.6417 15.8741 16.9161 15.6066C17.2199 15.3067 17.5669 14.9666 17.8246 14.4502C18.1294 13.8397 18.0892 13.2968 18.0529 12.8136C18.0304 12.5206 18.0098 12.2501 18.0696 12.0002C18.1323 11.7356 18.2127 11.5348 18.2901 11.3427C18.4302 10.9938 18.5596 10.6704 18.5596 10.0403C18.5596 8.57031 17.8265 7.59229 16.2909 7.59229H12.1897C12.1897 7.59229 12.5817 4.65039 12.5817 3.18042ZM2.38989 8.57031C2.00003 8.57031 1.62614 8.72518 1.35047 9.00086C1.07479 9.27653 0.919922 9.65042 0.919922 10.0403V16.9001C0.919922 17.29 1.07479 17.6639 1.35047 17.9396C1.62614 18.2152 2.00003 18.3701 2.38989 18.3701C2.77975 18.3701 3.15365 18.2152 3.42932 17.9396C3.70499 17.6639 3.85986 17.29 3.85986 16.9001V10.0403C3.85986 9.65042 3.70499 9.27653 3.42932 9.00086C3.15365 8.72518 2.77975 8.57031 2.38989 8.57031Z" fill="#aaa">
                                                
                                            </path>
                                        </svg> -->
                                        <svg fill="#aaa" class="me-2" height="20px" width="20px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 288.397 288.397" xml:space="preserve">
                                            <path d="M203.524,12.832c-22.569,0-43.743,8.976-59.325,24.197c-15.582-15.222-36.756-24.197-59.326-24.197
                                                C38.074,12.832,0,50.906,0,97.706c0,37.748,13.759,71.203,43.298,105.287c18.269,21.079,59.21,50.817,81.989,66.669
                                                c5.655,3.936,12.284,5.903,18.912,5.903c6.627,0,13.254-1.967,18.909-5.901c22.777-15.849,63.717-45.585,81.992-66.671
                                                c29.539-34.084,43.297-67.54,43.297-105.287C288.397,50.906,250.323,12.832,203.524,12.832z" />
                                        </svg>
                                        <span id="likebtncount">0</span>
                                    </button>
                                    <button type="button" class="btn">
                                        <svg width="20px" height="20px" class="me-2" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.961 10.3227H6.66664C6.26075 10.3227 5.93133 9.99405 5.93133 9.58742C5.93133 9.18153 6.26075 8.85211 6.66664 8.85211H16.961C17.3669 8.85211 17.6963 9.18153 17.6963 9.58742C17.6963 9.99405 17.3669 10.3227 16.961 10.3227ZM15.4904 14.7346H8.13727C7.73137 14.7346 7.40195 14.4059 7.40195 13.9993C7.40195 13.5927 7.73137 13.264 8.13727 13.264H15.4904C15.8963 13.264 16.2257 13.5927 16.2257 13.9993C16.2257 14.4059 15.8963 14.7346 15.4904 14.7346ZM11.8138 0.763672C5.31661 0.763672 0.0488281 5.37335 0.0488281 11.058C0.0488281 14.3074 1.77314 17.2009 4.4607 19.0869V24.2937L9.61451 21.1664C10.3278 21.284 11.0616 21.3524 11.8138 21.3524C18.3111 21.3524 23.5788 16.7435 23.5788 11.058C23.5788 5.37335 18.3111 0.763672 11.8138 0.763672Z" fill="black">

                                            </path>
                                        </svg>
                                        <span class="commentbtncount">0</span>
                                    </button>
                                    <a href="#sharebtn" type="button" class="btn">
                                        <svg width="20px" height="20px" class="me-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.803 5.33333C13.803 3.49238 15.3022 2 17.1515 2C19.0008 2 20.5 3.49238 20.5 5.33333C20.5 7.17428 19.0008 8.66667 17.1515 8.66667C16.2177 8.66667 15.3738 8.28596 14.7671 7.67347L10.1317 10.8295C10.1745 11.0425 10.197 11.2625 10.197 11.4872C10.197 11.9322 10.109 12.3576 9.94959 12.7464L15.0323 16.0858C15.6092 15.6161 16.3473 15.3333 17.1515 15.3333C19.0008 15.3333 20.5 16.8257 20.5 18.6667C20.5 20.5076 19.0008 22 17.1515 22C15.3022 22 13.803 20.5076 13.803 18.6667C13.803 18.1845 13.9062 17.7255 14.0917 17.3111L9.05007 13.9987C8.46196 14.5098 7.6916 14.8205 6.84848 14.8205C4.99917 14.8205 3.5 13.3281 3.5 11.4872C3.5 9.64623 4.99917 8.15385 6.84848 8.15385C7.9119 8.15385 8.85853 8.64725 9.47145 9.41518L13.9639 6.35642C13.8594 6.03359 13.803 5.6896 13.803 5.33333Z" fill="#1C274C">

                                            </path>
                                        </svg>
                                        <!-- <span>0</span> -->
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <b class="me-2">Tags:</b>
                        <!-- <i><?php echo $blog->tags; ?></i> -->
                        <?php 
                            $tags = explode(', ', $blog->tags); 
                            foreach($tags as $tag) { 
                                echo '<i class="alert alert-primary px-3 py-2 border-0 me-2 fs-14 mb-2 d-inline-block">' . htmlspecialchars($tag) . '</i>'; 
                            }
                        ?>
                    </div>
                    <div>
                        <?php echo $blog->content ?>
                    </div>
                    <div class="mb-4 border-top pt-3 mt-3">
                        <div class="d-flex align-items-center justify-content-between position-relative blog-like-share">
                            <div class="">
                                <button type="button" class="btn" id="likeBtn">
                                    <svg fill="#aaa" class="me-2" height="20px" width="20px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 288.397 288.397" xml:space="preserve">
                                        <path d="M203.524,12.832c-22.569,0-43.743,8.976-59.325,24.197c-15.582-15.222-36.756-24.197-59.326-24.197
                                                C38.074,12.832,0,50.906,0,97.706c0,37.748,13.759,71.203,43.298,105.287c18.269,21.079,59.21,50.817,81.989,66.669
                                                c5.655,3.936,12.284,5.903,18.912,5.903c6.627,0,13.254-1.967,18.909-5.901c22.777-15.849,63.717-45.585,81.992-66.671
                                                c29.539-34.084,43.297-67.54,43.297-105.287C288.397,50.906,250.323,12.832,203.524,12.832z" />
                                    </svg>
                                    <span id="likebtncount">0</span>
                                </button>
                                <button type="button" class="btn">
                                    <svg width="20px" height="20px" class="me-2" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.961 10.3227H6.66664C6.26075 10.3227 5.93133 9.99405 5.93133 9.58742C5.93133 9.18153 6.26075 8.85211 6.66664 8.85211H16.961C17.3669 8.85211 17.6963 9.18153 17.6963 9.58742C17.6963 9.99405 17.3669 10.3227 16.961 10.3227ZM15.4904 14.7346H8.13727C7.73137 14.7346 7.40195 14.4059 7.40195 13.9993C7.40195 13.5927 7.73137 13.264 8.13727 13.264H15.4904C15.8963 13.264 16.2257 13.5927 16.2257 13.9993C16.2257 14.4059 15.8963 14.7346 15.4904 14.7346ZM11.8138 0.763672C5.31661 0.763672 0.0488281 5.37335 0.0488281 11.058C0.0488281 14.3074 1.77314 17.2009 4.4607 19.0869V24.2937L9.61451 21.1664C10.3278 21.284 11.0616 21.3524 11.8138 21.3524C18.3111 21.3524 23.5788 16.7435 23.5788 11.058C23.5788 5.37335 18.3111 0.763672 11.8138 0.763672Z" fill="black">

                                        </path>
                                    </svg>
                                    <span class="commentbtncount">0</span>
                                </button>
                                <a href="#sharebtn" type="button" class="btn">
                                    <svg width="20px" height="20px" class="me-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.803 5.33333C13.803 3.49238 15.3022 2 17.1515 2C19.0008 2 20.5 3.49238 20.5 5.33333C20.5 7.17428 19.0008 8.66667 17.1515 8.66667C16.2177 8.66667 15.3738 8.28596 14.7671 7.67347L10.1317 10.8295C10.1745 11.0425 10.197 11.2625 10.197 11.4872C10.197 11.9322 10.109 12.3576 9.94959 12.7464L15.0323 16.0858C15.6092 15.6161 16.3473 15.3333 17.1515 15.3333C19.0008 15.3333 20.5 16.8257 20.5 18.6667C20.5 20.5076 19.0008 22 17.1515 22C15.3022 22 13.803 20.5076 13.803 18.6667C13.803 18.1845 13.9062 17.7255 14.0917 17.3111L9.05007 13.9987C8.46196 14.5098 7.6916 14.8205 6.84848 14.8205C4.99917 14.8205 3.5 13.3281 3.5 11.4872C3.5 9.64623 4.99917 8.15385 6.84848 8.15385C7.9119 8.15385 8.85853 8.64725 9.47145 9.41518L13.9639 6.35642C13.8594 6.03359 13.803 5.6896 13.803 5.33333Z" fill="#1C274C">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h3 class="fs-18 mb-2">Comments</h3>
                        <div id="toaster-container"></div>
                        <div>
                            <!-- <form action="<?php echo base_url('add-blog-comment'); ?>" method="post" class="mb-3">
                                <div class="form-group">
                                    <textarea name="comment" id="comment" rows="5" cols="80" placeholder="Write your comment here...."></textarea>
                                </div>
                            </form> -->
                            <form id="commentForm" class="mb-3">
                                <div class="form-group">
                                    <textarea name="comment" id="comment" class="form-control" rows="5" placeholder="Write your comment here...." required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary bg-dark mt-2 mb-4 submit-button">Submit</button>
                            </form>
                            <div id="commentsContainer"></div>
                            <!-- <div class="d-flex align-items-top bg-body-secondary p-3 rounded mb-3">
                                <img src="https://w7.pngwing.com/pngs/910/606/png-transparent-head-the-dummy-avatar-man-tie-jacket-user.png" alt="user" width="50px" height="50px" class="object-fit-cover rounded-circle">
                                <div class="ms-2">
                                    <span class="fs-16 fw-500 text-dark d-block">Deepansh Pandey</span>
                                    <p class="fs-14 m-0 text-body">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores fugiat, aliquid quaerat eos expedita harum veritatis omnis at provident maxime magni sequi cupiditate odit numquam recusandae blanditiis maiores quisquam nostrum.
                                    </p>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-5 col-sm-12 col-12 ps-4" id="sharebtn">
                <div class="mb-3 bg-white py-4 social-tags-list">
                    <h3 class="text-center fs-20 mb-4">Share</h3>
                    <div>
                        <div class="social_link text-center">
                            <a class="" href="#" target="_blank" onclick="shareOnFacebook()">
                                <svg width="20" height="20" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.14269 13.8502V7.03605H7.19067L7.46214 4.63778H5.14269L5.14613 3.43734C5.14613 2.81181 5.20948 2.4768 6.16733 2.4768H7.44778V0.078125H5.39934C2.9388 0.078125 2.07289 1.24149 2.07289 3.19818V4.63796H0.539062V7.03645H2.07289V13.7536C2.67043 13.8653 3.28818 13.9243 3.92069 13.9243C4.3293 13.9243 4.73748 13.8996 5.14269 13.8502Z" fill="#000">
                                    </path>
                                </svg>
                            </a>
                            <a class="" href="#" target="_blank" onclick="shareOnTwitter()">
                                <svg width="20" height="20" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.0761719 1.68652C0.0761719 1.22031 0.239898 0.835691 0.567336 0.53267C0.894774 0.229636 1.32046 0.078125 1.84436 0.078125C2.35892 0.078125 2.77523 0.2273 3.09332 0.525677C3.42076 0.83337 3.58449 1.23429 3.58449 1.72847C3.58449 2.17603 3.42545 2.54898 3.10736 2.84736C2.77992 3.15505 2.34956 3.30889 1.8163 3.30889H1.80226C1.28771 3.30889 0.871395 3.15505 0.553303 2.84736C0.235211 2.53966 0.0761719 2.15271 0.0761719 1.68652ZM0.258604 13.9243V4.58162H3.37399V13.9243H0.258604ZM5.10008 13.9243H8.21546V8.7075C8.21546 8.38115 8.25289 8.1294 8.32773 7.95225C8.4587 7.63523 8.65751 7.36716 8.92414 7.14806C9.19078 6.92894 9.52523 6.81938 9.92752 6.81938C10.9753 6.81938 11.4992 7.52334 11.4992 8.93127V13.9243H14.6146V8.56764C14.6146 7.18768 14.2872 6.14106 13.6323 5.42778C12.9774 4.71449 12.112 4.35785 11.0362 4.35785C9.82929 4.35785 8.88906 4.87533 8.21546 5.91029V5.93827H8.20143L8.21546 5.91029V4.58162H5.10008C5.11879 4.87999 5.12815 5.80772 5.12815 7.36484C5.12815 8.92194 5.11879 11.1084 5.10008 13.9243Z" fill="#000">
                                    </path>
                                </svg>
                            </a>
                            <a class="" href="#" target="_blank" onclick="shareOnLinkedIn()">
                                <svg width="20" height="20" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18 1.7173C17.3306 1.99528 16.6174 2.17954 15.8737 2.26901C16.6388 1.83659 17.2226 1.15706 17.4971 0.338007C16.7839 0.74061 15.9964 1.02499 15.1571 1.18369C14.4799 0.500965 13.5146 0.078125 12.4616 0.078125C10.4186 0.078125 8.77387 1.64807 8.77387 3.57268C8.77387 3.8496 8.79862 4.11588 8.85938 4.36937C5.7915 4.22771 3.07687 2.83564 1.25325 0.715048C0.934875 1.23801 0.748125 1.83659 0.748125 2.48097C0.748125 3.69091 1.40625 4.76345 2.38725 5.3844C1.79437 5.37375 1.21275 5.21079 0.72 4.9541C0.72 4.96475 0.72 4.9786 0.72 4.99244C0.72 6.6902 1.99912 8.10037 3.6765 8.42523C3.37612 8.50298 3.04875 8.54025 2.709 8.54025C2.47275 8.54025 2.23425 8.52747 2.01038 8.48061C2.4885 9.86416 3.84525 10.8813 5.4585 10.9143C4.203 11.8442 2.60888 12.4044 0.883125 12.4044C0.5805 12.4044 0.29025 12.3916 0 12.3565C1.63462 13.3545 3.57188 13.9243 5.661 13.9243C12.4515 13.9243 16.164 8.59883 16.164 3.98274C16.164 3.8283 16.1584 3.67919 16.1505 3.53114C16.8829 3.03907 17.4982 2.42452 18 1.7173Z" fill="#000">
                                    </path>
                                </svg>
                            </a>
                            <a class="" href="#" target="_blank" class="" onclick="shareOnInstagram()">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram">
                                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5" fill="transparent" stroke="#000">
                                    </rect>
                                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37zM17.5 6.5" stroke="#000">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="mb-3 border-bottom pb-2 ">
                    <h3 class="fs-20 mb-4">Latest Blogs</h3>
                    <!-- <div class="mb-4">
                        <a href="blog" class="card blog-card border-0 h-100 text-decoration-none">
                            <img src="https://www.pingpongmoments.in/blog/wp-content/uploads/2022/09/corporate-events-3.jpg" alt="event">
                            <div class="p-3">
                                <h3 class="fs-20 fw-700">Live Songs</h3>
                                <p class="fs-14 text-secondary p-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore, unde blanditiis. Est, reiciendis provident quaerat mollitia amet doloremque accusantium soluta voluptates expedita maiores nesciunt saepe! Delectus commodi porro quia ullam!</p>
                                <div class="d-flex align-items-center justify-content-between mt-3">
                                    <div class="d-flex align-items-center">
                                        <img src="https://w7.pngwing.com/pngs/910/606/png-transparent-head-the-dummy-avatar-man-tie-jacket-user.png" alt="user" width="30px" height="30px" class="object-fit-cover rounded-circle">
                                        <span class="fs-14 ms-2 fw-500 text-body-secondary">Deepansh Pandey</span>
                                    </div>
                                    <i class="fs-12 text-secondary">06/06/2024</i>
                                </div>
                            </div>
                        </a>
                    </div> -->
                    <?php foreach ($recentblogs as $blog) : ?>
                        <div class="mb-4">
                            <a href="<?php echo base_url('blog/' . $blog->slug); ?>" class="card blog-card border-0 text-decoration-none">
                                <img src="<?php echo base_url('assets/images/blogs/uploads/thumbnails/' . $blog->thumbnail); ?>" alt="<?php echo htmlspecialchars($blog->title, ENT_QUOTES, 'UTF-8'); ?>" height="200px" class="object-fit-cover">
                                <div class="p-3">
                                    <h3 class="fs-20 fw-700"><?php echo htmlspecialchars($blog->title, ENT_QUOTES, 'UTF-8'); ?></h3>
                                    <p class="fs-14 text-secondary p-0"><?php echo htmlspecialchars(substr($blog->content, 0, 100), ENT_QUOTES, 'UTF-8'); ?>...</p>
                                    <div class="d-flex align-items-center justify-content-between mt-3">
                                        <div class="d-flex align-items-center">
                                            <img src="https://w7.pngwing.com/pngs/910/606/png-transparent-head-the-dummy-avatar-man-tie-jacket-user.png" alt="Blog Author" width="30px" height="30px" class="object-fit-cover rounded-circle">
                                            <span class="fs-14 ms-2 fw-500 text-body-secondary"><?php echo htmlspecialchars($blog->author_name, ENT_QUOTES, 'UTF-8'); ?></span>
                                        </div>
                                        <div>
                                            <i class="fs-12 text-secondary"><?php echo date('d M Y', strtotime($blog->publish_date)); ?>,</i>
                                            <i class="fs-12 text-secondary"><?php echo $blog->publish_time; ?></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
                <?php
                if ($sponsor) { ?>
                    <div class="mb-3 border-bottom pb-2 ">
                        <h3 class="fs-20 mb-4">Sponsor</h3>
                        <a href="<?php echo $sponsor->redirection_url ? $sponsor->redirection_url : '#'; ?>" target="_blank" rel="noopener noreferrer">
                            <img src="<?php echo $sponsor->image_url; ?>" alt="Blog Sponsor" class="w-100">
                        </a>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- <script>
    CKEDITOR.replace('comment');
</script> -->
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
                var commentElement = `
                <div class="d-flex align-items-top bg-body-secondary p-3 rounded mb-3">
                    <img src="https://w7.pngwing.com/pngs/910/606/png-transparent-head-the-dummy-avatar-man-tie-jacket-user.png" alt="user" width="50px" height="50px" class="object-fit-cover rounded-circle">
                    <div class="ms-2">
                        <span class="fs-16 fw-500 text-dark d-block">${comment.user_name}</span>
                        <p class="fs-14 m-0 text-body">
                            ${comment.comment}
                        </p>
                    </div>
                </div>`;
                commentsContainer.append(commentElement);
            });
        }

        $('#likeBtn').click(function() {
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