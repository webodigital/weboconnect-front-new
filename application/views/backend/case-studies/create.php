<div class="container-fluid">
    <div class="row">
        <?php $this->load->view('frontend/common/sidemenu'); ?>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 main-content h-100 p-5" style="min-height: calc(100vh - 100px);">
            <div class="">
                <div class="">
                    <h2 class="fs-24 mb-3">Add Case Study</h2>
                </div>
                <div id="toaster-container"></div>
                <div class="card-body">
                    <div id="responseMessage"></div>
                    <form id="blogForm" enctype="multipart/form-data">
                        <div class="row">


                            <div class="form-group col-md-6">
                                <label for="front_thumbnail">Front Thumbnail Image:</label>
                                <input type="file" class="form-control" name="front_thumbnail" id="front_thumbnail" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="front_logo">Front Logo Image:</label>
                                <input type="file" class="form-control" name="front_logo" id="front_logo" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="background_color">Background Color:</label>
                                <input type="color" class="form-control" name="background_color" id="background_color" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="background_top_img">Background Top Image:</label>
                                <input type="file" class="form-control" name="background_top_img" id="background_top_img" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="title">Title:</label>
                                <input type="text" class="form-control" name="title" id="title" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="slug">Slug:</label>
                                <input type="text" class="form-control" name="slug" id="slug">
                            </div>
                            <div class="form-group col-12">
                                <label for="content">Content:</label>
                                <textarea class="form-control" name="description" id="content" rows="5" required></textarea>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="location">Location:</label>
                                <input type="text" class="form-control" name="location" id="location" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="front_end">Front End:</label>
                                <input type="text" class="form-control" name="front_end" id="front_end" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="back_end">Back End:</label>
                                <input type="text" class="form-control" name="back_end" id="back_end" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="app_application">App Application:</label>
                                <input type="text" class="form-control" name="app_application" id="app_application" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="app_type">App Type:</label>
                                <input type="text" class="form-control" name="app_type" id="app_type" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="display_status">Display Status:</label>
                                <input type="text" class="form-control" name="display_status" id="display_status" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="android_url">Android Url:</label>
                                <input type="text" class="form-control" name="android_url" id="android_url" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="ios_url">IOS Url:</label>
                                <input type="text" class="form-control" name="ios_url" id="ios_url" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="web_url">Web Url:</label>
                                <input type="text" class="form-control" name="web_url" id="web_url" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="technologies">Technologies (comma-separated):</label>
                                <input type="text" class="form-control" name="technologies" id="tags" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="client_overview">Client Overview:</label>
                                <input type="text" class="form-control" name="client_overview" id="client_overview" required>
                            </div>


                            <div class="form-group col-md-6">
                                <label for="how_does_it_work_title">How does it work title:</label>
                                <input type="text" class="form-control" name="how_does_it_work_title" id="how_does_it_work_title">
                            </div>


                            <!-- how_does_it_work_title -->
                            <!-- <div class="accordion d-none" id="how_does_it_work_title_example" style="margin-bottom: 15px;">
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    How Does It Work
                                  </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">

                                    <div class="form-group col-md-12">
                                        <label for="how_does_it_work_title">Title:</label>
                                        <input type="text" class="form-control" name="how_does_it_work_title" id="how_does_it_work_title" required>
                                    </div>
                                    

                                    <div class="form-group col-md-12 repeater">
                                        <input data-repeater-create type="button" value="Add"/>
                                        <div data-repeater-list="how_does_it_work">
                                            <div data-repeater-item>
                                                <input type="hidden" name="type" value="how_does_it_work" />
                                                <div class="row"> 
                                                    <div class="form-group col-md-6">
                                                        <label for="img">Image:</label>
                                                        <input type="file" class="form-control" name="img" id="img" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="title">Title:</label>
                                                        <input type="text" class="form-control" name="title" id="title" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="description">Description:</label>
                                                        <input type="text" class="form-control" name="description" id="description" required>
                                                    </div>
                                                </div>
                                                <input data-repeater-delete type="button" value="Delete"/>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div> -->
                            <!-- how_does_it_work_title -->

                            <div class="form-group col-md-6">
                                <label for="image">Background Mid Banner Image:</label>
                                <input type="file" class="form-control" name="background_mid_img" id="background_mid_img" required>
                            </div>
                            <div class="form-group col-md-6">
                                <!-- <label for="tags">Tags (comma-separated):</label>
                                <input type="text" class="form-control" name="tags" id="tags"> -->
                            </div>

                            <div class="form-group col-md-6">
                                <label for="project_objectives_title">Project Objectives Title:</label>
                                <input type="text" class="form-control" name="project_objectives_title" id="project_objectives_title">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="challenges_title">Challenges Title:</label>
                                <input type="text" class="form-control" name="challenges_title" id="challenges_title">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="solution_implementation_title">Solution And Implementation Title:</label>
                                <input type="text" class="form-control" name="solution_implementation_title" id="solution_implementation_title">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="outcome_title">Outcome Title:</label>
                                <input type="text" class="form-control" name="outcome_title" id="outcome_title">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="screens_title">Screens Title:</label>
                                <input type="text" class="form-control" name="screens_title" id="screens_title">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="testimonial_title">Testimonial Title:</label>
                                <input type="text" class="form-control" name="testimonial_title" id="testimonial_title">
                            </div>

                            <!-- project_objectives_title -->
                            <!-- <div class="accordion d-none" id="project_objectives_title_example" style="margin-bottom: 15px;">
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#project_objectives_titleOne" aria-expanded="true" aria-controls="project_objectives_titleOne">
                                    Project Objectives
                                  </button>
                                </h2>
                                <div id="project_objectives_titleOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">

                                    <div class="form-group col-md-12">
                                        <label for="project_objectives_title">Title:</label>
                                        <input type="text" class="form-control" name="project_objectives_title" id="project_objectives_title" required>
                                    </div>
                                    

                                    <div class="form-group col-md-12 repeater">
                                        <input data-repeater-create type="button" value="Add"/>
                                        <div data-repeater-list="how_does_it_work">
                                            <div data-repeater-item>
                                                <input type="hidden" name="type" value="how_does_it_work" />
                                                <div class="row"> 
                                                    <div class="form-group col-md-6">
                                                        <label for="img">Image:</label>
                                                        <input type="file" class="form-control" name="img" id="img" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="title">Title:</label>
                                                        <input type="text" class="form-control" name="title" id="title" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="description">Description:</label>
                                                        <input type="text" class="form-control" name="description" id="description" required>
                                                    </div>
                                                </div>
                                                <input data-repeater-delete type="button" value="Delete"/>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div> -->
                            <!-- project_objectives_title -->

                            <!-- challenges_title -->
                            <!-- <div class="accordion d-none" id="challenges_title_example" style="margin-bottom: 15px;">
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#challenges_titleOne" aria-expanded="true" aria-controls="challenges_titleOne">
                                    Challenges
                                  </button>
                                </h2>
                                <div id="challenges_titleOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">

                                    <div class="form-group col-md-12">
                                        <label for="challenges_title">Title:</label>
                                        <input type="text" class="form-control" name="challenges_title" id="challenges_title" required>
                                    </div>
                                    

                                    <div class="form-group col-md-12 repeater">
                                        <input data-repeater-create type="button" value="Add"/>
                                        <div data-repeater-list="how_does_it_work">
                                            <div data-repeater-item>
                                                <input type="hidden" name="type" value="how_does_it_work" />
                                                <div class="row"> 
                                                    <div class="form-group col-md-6">
                                                        <label for="img">Image:</label>
                                                        <input type="file" class="form-control" name="img" id="img" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="title">Title:</label>
                                                        <input type="text" class="form-control" name="title" id="title" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="description">Description:</label>
                                                        <input type="text" class="form-control" name="description" id="description" required>
                                                    </div>
                                                </div>
                                                <input data-repeater-delete type="button" value="Delete"/>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div> -->
                            <!-- challenges_title -->

                            <!-- solution_implementation_title -->
                            <!-- <div class="accordion d-none" id="solution_implementation_title_example" style="margin-bottom: 15px;">
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#solution_implementation_titleOne" aria-expanded="true" aria-controls="solution_implementation_titleOne">
                                    Solution And Implementation
                                  </button>
                                </h2>
                                <div id="solution_implementation_titleOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">

                                    <div class="form-group col-md-12">
                                        <label for="solution_implementation_title">Title:</label>
                                        <input type="text" class="form-control" name="solution_implementation_title" id="solution_implementation_title" required>
                                    </div>
                                    

                                    <div class="form-group col-md-12 repeater">
                                        <input data-repeater-create type="button" value="Add"/>
                                        <div data-repeater-list="how_does_it_work">
                                            <div data-repeater-item>
                                                <input type="hidden" name="type" value="how_does_it_work" />
                                                <div class="row"> 
                                                    <div class="form-group col-md-6">
                                                        <label for="img">Image:</label>
                                                        <input type="file" class="form-control" name="img" id="img" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="title">Title:</label>
                                                        <input type="text" class="form-control" name="title" id="title" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="description">Description:</label>
                                                        <input type="text" class="form-control" name="description" id="description" required>
                                                    </div>
                                                </div>
                                                <input data-repeater-delete type="button" value="Delete"/>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div> -->
                            <!-- solution_implementation_title -->

                            <!-- outcome_title -->
                            <!-- <div class="accordion d-none" id="outcome_title_example" style="margin-bottom: 15px;">
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#outcome_titleOne" aria-expanded="true" aria-controls="outcome_titleOne">
                                    Outcome
                                  </button>
                                </h2>
                                <div id="outcome_titleOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">

                                    <div class="form-group col-md-12">
                                        <label for="outcome_title">Title:</label>
                                        <input type="text" class="form-control" name="outcome_title" id="outcome_title" required>
                                    </div>
                                    

                                    <div class="form-group col-md-12 repeater">
                                        <input data-repeater-create type="button" value="Add"/>
                                        <div data-repeater-list="how_does_it_work">
                                            <div data-repeater-item>
                                                <input type="hidden" name="type" value="how_does_it_work" />
                                                <div class="row"> 
                                                    <div class="form-group col-md-6">
                                                        <label for="img">Image:</label>
                                                        <input type="file" class="form-control" name="img" id="img" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="title">Title:</label>
                                                        <input type="text" class="form-control" name="title" id="title" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="description">Description:</label>
                                                        <input type="text" class="form-control" name="description" id="description" required>
                                                    </div>
                                                </div>
                                                <input data-repeater-delete type="button" value="Delete"/>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div> -->
                            <!-- outcome_title -->

                            <!-- screens_title -->
                            <!-- <div class="accordion d-none" id="screens_title_example" style="margin-bottom: 15px;">
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#screens_titleOne" aria-expanded="true" aria-controls="screens_titleOne">
                                    Screens
                                  </button>
                                </h2>
                                <div id="screens_titleOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">

                                    <div class="form-group col-md-12">
                                        <label for="screens_title">Title:</label>
                                        <input type="text" class="form-control" name="screens_title" id="screens_title" required>
                                    </div>
                                    

                                    <div class="form-group col-md-12 repeater">
                                        <input data-repeater-create type="button" value="Add"/>
                                        <div data-repeater-list="how_does_it_work">
                                            <div data-repeater-item>
                                                <input type="hidden" name="type" value="how_does_it_work" />
                                                <div class="row"> 
                                                    <div class="form-group col-md-6">
                                                        <label for="img">Image:</label>
                                                        <input type="file" class="form-control" name="img" id="img" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="title">Title:</label>
                                                        <input type="text" class="form-control" name="title" id="title" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="description">Description:</label>
                                                        <input type="text" class="form-control" name="description" id="description" required>
                                                    </div>
                                                </div>
                                                <input data-repeater-delete type="button" value="Delete"/>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div> -->
                            <!-- screens_title -->

                            <!-- testimonial_title -->
                            <!-- <div class="accordion d-none" id="testimonial_title_example" style="margin-bottom: 15px;">
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#testimonial_titleOne" aria-expanded="true" aria-controls="testimonial_titleOne">
                                    Testimonial
                                  </button>
                                </h2>
                                <div id="testimonial_titleOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">

                                    <div class="form-group col-md-12">
                                        <label for="testimonial_title">Title:</label>
                                        <input type="text" class="form-control" name="testimonial_title" id="testimonial_title" required>
                                    </div>

                                    <div class="form-group col-md-12 repeater">
                                        <input data-repeater-create type="button" value="Add"/>
                                        <div data-repeater-list="how_does_it_work">
                                            <div data-repeater-item>
                                                <input type="hidden" name="type" value="how_does_it_work" />
                                                <div class="row"> 
                                                    <div class="form-group col-md-6">
                                                        <label for="img">Image:</label>
                                                        <input type="file" class="form-control" name="img" id="img" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="name">Name:</label>
                                                        <input type="text" class="form-control" name="name" id="name" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="position">Position:</label>
                                                        <input type="text" class="form-control" name="position" id="position" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="location">Location:</label>
                                                        <input type="text" class="form-control" name="location" id="location" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="comments">Comments:</label>
                                                        <input type="text" class="form-control" name="comments" id="comments" required>
                                                    </div>
                                                </div>
                                                <input data-repeater-delete type="button" value="Delete"/>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div> -->
                            <!-- testimonial_title -->

                            <!-- <div class="form-group col-md-6">
                                <label for="publish_date">Publish Date:</label>
                                <input type="date" class="form-control" name="publish_date" id="publish_date">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="publish_time">Publish Time:</label>
                                <input type="time" class="form-control" name="publish_time" id="publish_time">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="schedule_datetime">Schedule Date and Time:</label>
                                <input type="datetime-local" class="form-control" name="schedule_datetime" id="schedule_datetime" min="<?php echo date('Y-m-d'); ?>" >
                                <span class="label label-info text-sm">*For instant publish leave it empty</span>
                            </div> -->
                            <!-- <div class="col-12">
                                <button type="submit" class="btn btn-primary btn-block submit-button">Submit</button>
                            </div> -->

                            <div class="form-group col-md-6">
                                <label for="sponsor">Status:</label>
                                <select name="status" id="status" class="form-control" required>
                                    <option value="">Select Status</option>
                                    <option value="1">Active</option>
                                    <option value="0">InActive</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <!-- <button type="submit" class="btn btn-secondary submit-button" id="saveDraft">Save as Draft</button> -->
                                <button type="submit" class="btn btn-primary submit-button pull-right" id="savePublish">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>
</div>

<script type="text/javascript" src="<?= base_url() ?>assets/js/repeater.js"></script>
<script>
    /*document.addEventListener('DOMContentLoaded', function () {
        const scheduleDateInput = document.getElementById('schedule_datetime');
        
        const oldScheduleDateInput = scheduleDateInput.value;

        // Set minimum date dynamically
        const today = new Date().toISOString().split('T')[0];
        scheduleDateInput.setAttribute('min', today);
        
        // Add event listener for validation
        scheduleDateInput.addEventListener('input', function () {
            const selectedDate = new Date(scheduleDateInput.value);
            const currentDate = new Date(today);

            if (selectedDate < currentDate) {
                alert("Please select a future date!");
                scheduleDateInput.value = oldScheduleDateInput;//""; // Clear invalid input
            }
        });
    });*/
</script>
<script>
    CKEDITOR.replace('content', {
        toolbar: [{
                name: 'document',
                items: ['Source', '-', 'NewPage', 'Preview', '-', 'Templates']
            },
            {
                name: 'clipboard',
                items: ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo']
            },
            {
                name: 'editing',
                items: ['Find', 'Replace', '-', 'SelectAll', '-', 'Scayt']
            },
            '/',
            {
                name: 'basicstyles',
                items: ['Bold', 'Italic', 'Underline', 'Strike', '-', 'Subscript', 'Superscript', '-', 'RemoveFormat']
            },
            {
                name: 'paragraph',
                items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock']
            },
            {
                name: 'links',
                items: ['Link', 'Unlink', 'Anchor']
            },
            {
                name: 'insert',
                items: ['Image', 'Table', 'HorizontalRule', 'SpecialChar', 'PageBreak']
            },
            '/',
            {
                name: 'styles',
                items: ['Styles', 'Format', 'Font', 'FontSize']
            },
            {
                name: 'colors',
                items: ['TextColor', 'BGColor']
            },
            {
                name: 'tools',
                items: ['Maximize', 'ShowBlocks']
            }
        ],
        format_tags: 'p;h1;h2;h3;h4;h5;h6;pre;address',
        fontSize_sizes: '8/8px;9/9px;10/10px;11/11px;12/12px;14/14px;16/16px;18/18px;20/20px;22/22px;24/24px;26/26px;28/28px;36/36px;48/48px;72/72px'
    });
</script>
<!-- Bootstrap JS and dependencies -->
<script>
    $(document).ready(function() {

        // Define status variable to track which button was clicked
        //let status = '';

        // Attach click events to set the status variable based on the button clicked
        /*$('#saveDraft').click(function(event) {
            event.preventDefault();
            status = 'draft';
            $('#blogForm').submit();
        });

        $('#savePublish').click(function(event) {
            event.preventDefault();
            status = 'publish';
            $('#blogForm').submit();
        });*/

        $('#blogForm').submit(function(event) {
            event.preventDefault();


            // Update CKEditor textarea with the content
            for (instance in CKEDITOR.instances) {
                CKEDITOR.instances[instance].updateElement();
            }

            var formData = new FormData(this);
            //formData.append('status', status);

            $.ajax({
                url: '<?php echo base_url("submit-case-studies"); ?>',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                dataType: 'json',
                success: function(response) {
                    if (response.status === 'success') {
                        // $('#responseMessage').html('<div class="alert alert-success">' + response.message + '</div>');
                        $('#blogForm')[0].reset();
                        showToaster('success', response.message);
                    } else if (response.status === 'error') {
                        // $('#responseMessage').html('<div class="alert alert-danger">' + response.message + '</div>');
                        showToaster('error', response.message);
                    }
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                    // $('#responseMessage').html('<div class="alert alert-danger">An error occurred while submitting the form.</div>');
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
    });
</script>
<script>
    // Function to pad single digit numbers with a leading zero
    function padToTwoDigits(num) {
        return num.toString().padStart(2, '0');
    }

    // Function to set the current date and time
    function setCurrentDateTime() {
        var now = new Date();

        var year = now.getFullYear();
        var month = padToTwoDigits(now.getMonth() + 1); // Months are zero-indexed
        var day = padToTwoDigits(now.getDate());
        var hours = padToTwoDigits(now.getHours());
        var minutes = padToTwoDigits(now.getMinutes());

        var currentDate = `${year}-${month}-${day}`;
        var currentTime = `${hours}:${minutes}`;

        document.getElementById('publish_date').value = currentDate;
        document.getElementById('publish_time').value = currentTime;
    }

    // Set the slug value based on the title
    document.getElementById('title').addEventListener('input', function() {
        var title = this.value;
        var slug = title.toLowerCase()
            .replace(/[^a-z0-9\s-]/g, '')
            .replace(/[\s-]+/g, '-')
            .replace(/^-+|-+$/g, '');
        document.getElementById('slug').value = slug;
    });

    // Set the current date and time when the page loads
    window.onload = setCurrentDateTime;
</script>