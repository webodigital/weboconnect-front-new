<div class="container-fluid">
    <div class="row">
        <?php $this->load->view('frontend/common/sidemenu'); ?>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 main-content h-100 p-5" style="min-height: calc(100vh - 100px);">
            <div class="">
                <div class="">
                    <h2 class="fs-24 mb-3">Edit Case Study</h2>
                </div>
                <div id="toaster-container"></div>
                <div class="card-body">
                    <div id="responseMessage"></div>
                    <form id="editForm" enctype="multipart/form-data">
                        <div class="row">
                            <input type="hidden" class="form-control" name="id" value="<?php echo $case_studies->id; ?>">

                            <div class="form-group col-md-6">
                                <img src="<?php echo ($case_studies->front_thumbnail)?base_url('assets/images/case_studies/uploads/thumbnails/' . $case_studies->front_thumbnail):base_url('assets/images/default-thumbnail.png'); ?>" 
                                    height="100px" 
                                    alt="banner" 
                                    class="d-block mb-2"
                                    onerror="this.onerror=null; this.src='<?php echo base_url('assets/images/default-thumbnail.png'); ?>';"
                                >
                                <label for="front_thumbnail">Front Thumbnail Image:</label>
                                <input type="file" class="form-control" name="front_thumbnail" id="front_thumbnail">
                            </div>


                            <div class="form-group col-md-6">
                                <img src="<?php echo ($case_studies->front_logo)?base_url('assets/images/case_studies/uploads/thumbnails/' . $case_studies->front_logo):base_url('assets/images/default-thumbnail.png'); ?>" height="100px" alt="banner" class="d-block mb-2" onerror="this.onerror=null; this.src='<?php echo base_url('assets/images/default-thumbnail.png'); ?>';">
                                <label for="front_logo">Front Logo Image:</label>
                                <input type="file" class="form-control" name="front_logo" id="front_logo">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="background_color">Background Color:</label>
                                <input type="text" class="form-control" name="background_color" id="background_color" value="<?php echo $case_studies->background_color; ?>" required>
                            </div>
                            <div class="form-group col-md-6">
                                <img src="<?php echo ($case_studies->background_top_img)?base_url('assets/images/case_studies/uploads/thumbnails/' . $case_studies->background_top_img):base_url('assets/images/default-thumbnail.png'); ?>" height="100px" alt="banner" class="d-block mb-2" onerror="this.onerror=null; this.src='<?php echo base_url('assets/images/default-thumbnail.png'); ?>';">
                                <label for="background_top_img">Background Top Image:</label>
                                <input type="file" class="form-control" name="background_top_img" id="background_top_img" >
                            </div>

                            <div class="form-group col-md-6">
                                <label for="title">Title:</label>
                                <input type="text" class="form-control" name="title" id="title" value="<?php echo $case_studies->title; ?>" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="slug">Slug:</label>
                                <input type="text" class="form-control" name="slug" id="slug" value="<?php echo $case_studies->slug; ?>">
                            </div>
                            <div class="form-group col-12">
                                <label for="content">Content:</label>
                                <textarea class="form-control" name="description" id="content" rows="5" required><?php echo $case_studies->description; ?></textarea>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="location">Location:</label>
                                <input type="text" class="form-control" name="location" id="location" value="<?php echo $case_studies->location; ?>" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="front_end">Front End:</label>
                                <input type="text" class="form-control" name="front_end" id="front_end" value="<?php echo $case_studies->front_end; ?>" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="back_end">Back End:</label>
                                <input type="text" class="form-control" name="back_end" id="back_end" value="<?php echo $case_studies->back_end; ?>" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="app_application">App Application:</label>
                                <input type="text" class="form-control" name="app_application" id="app_application" value="<?php echo $case_studies->app_application; ?>" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="app_type">App Type:</label>
                                <input type="text" class="form-control" name="app_type" id="app_type" value="<?php echo $case_studies->app_type; ?>"required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="display_status">Display Status:</label>
                                <input type="text" class="form-control" name="display_status" id="display_status" value="<?php echo $case_studies->display_status; ?>" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="android_url">Android Url:</label>
                                <input type="text" class="form-control" name="android_url" id="android_url" value="<?php echo $case_studies->android_url; ?>" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="ios_url">IOS Url:</label>
                                <input type="text" class="form-control" name="ios_url" id="ios_url" value="<?php echo $case_studies->ios_url; ?>" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="web_url">Web Url:</label>
                                <input type="text" class="form-control" name="web_url" id="web_url" value="<?php echo $case_studies->web_url; ?>" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="technologies">Technologies (comma-separated):</label>
                                <input type="text" class="form-control" name="technologies" id="tags" value="<?php echo $case_studies->technologies; ?>" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="client_overview">Client Overview:</label>
                                <input type="text" class="form-control" name="client_overview" id="client_overview" value="<?php echo $case_studies->client_overview; ?>" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="how_does_it_work_title">How does it work title:</label>
                                <input type="text" class="form-control" name="how_does_it_work_title" id="how_does_it_work_title" value="<?php echo $case_studies->how_does_it_work_title; ?>">
                            </div>

                            <div class="form-group col-md-6">
                                <img src="<?php echo ($case_studies->background_mid_img)?base_url('assets/images/case_studies/uploads/thumbnails/' . $case_studies->background_mid_img):base_url('assets/images/default-thumbnail.png'); ?>" height="100px" alt="banner" class="d-block mb-2" onerror="this.onerror=null; this.src='<?php echo base_url('assets/images/default-thumbnail.png'); ?>';">
                                <label for="image">Background Mid Banner Image:</label>
                                <input type="file" class="form-control" name="background_mid_img" id="background_mid_img">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="project_objectives_title">Project Objectives Title:</label>
                                <input type="text" class="form-control" name="project_objectives_title" id="project_objectives_title" value="<?php echo $case_studies->project_objectives_title; ?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="challenges_title">Challenges Title:</label>
                                <input type="text" class="form-control" name="challenges_title" id="challenges_title" value="<?php echo $case_studies->challenges_title; ?>">
                            </div>
                            <div class="form-group col-md-6">
                                <img src="<?php echo ($case_studies->challenges_img)?base_url('assets/images/case_studies/uploads/thumbnails/' . $case_studies->challenges_img):base_url('assets/images/default-thumbnail.png'); ?>" height="100px" alt="banner" class="d-block mb-2" onerror="this.onerror=null; this.src='<?php echo base_url('assets/images/default-thumbnail.png'); ?>';">
                                <label for="challenges_img">Challenges Image:</label>
                                <input type="file" class="form-control" name="challenges_img" id="challenges_img">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="solution_implementation_title">Solution And Implementation Title:</label>
                                <input type="text" class="form-control" name="solution_implementation_title" id="solution_implementation_title" value="<?php echo $case_studies->solution_implementation_title; ?>">
                            </div>                            
                            <div class="form-group col-md-6">
                                <img src="<?php echo ($case_studies->solution_implementation_img)?base_url('assets/images/case_studies/uploads/thumbnails/' . $case_studies->solution_implementation_img):base_url('assets/images/default-thumbnail.png'); ?>" height="100px" alt="banner" class="d-block mb-2" onerror="this.onerror=null; this.src='<?php echo base_url('assets/images/default-thumbnail.png'); ?>';">
                                <label for="solution_implementation_img">Solution And Implementation Image:</label>
                                <input type="file" class="form-control" name="solution_implementation_img" id="solution_implementation_img">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="outcome_title">Outcome Title:</label>
                                <input type="text" class="form-control" name="outcome_title" id="outcome_title" value="<?php echo $case_studies->outcome_title; ?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="screens_title">Screens Title:</label>
                                <input type="text" class="form-control" name="screens_title" id="screens_title" value="<?php echo $case_studies->screens_title; ?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="testimonial_title">Testimonial Title:</label>
                                <input type="text" class="form-control" name="testimonial_title" id="testimonial_title" value="<?php echo $case_studies->testimonial_title; ?>">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="sponsor">Status:</label>
                                <select name="status" id="status" class="form-control" required>
                                    <option value="">Select Status</option>
                                    <option value="1" <?php echo ($case_studies->status)?'selected':''; ?>>Active</option>
                                    <option value="0" <?php echo ($case_studies->status)?'':'selected'; ?>>InActive</option>
                                </select>
                            </div>
                            
                            <div class="col-12">
                                <!-- <button type="submit" class="btn btn-secondary submit-button" id="saveDraft">Update as Draft</button> -->
                                <button type="submit" class="btn btn-primary submit-button pull-right" id="savePublish">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>
</div>
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
    // CKEDITOR.replace('content');
    CKEDITOR.replace('content', {
        toolbar: [
            { name: 'document', items: ['Source', '-', 'NewPage', 'Preview', '-', 'Templates'] },
            { name: 'clipboard', items: ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo'] },
            { name: 'editing', items: ['Find', 'Replace', '-', 'SelectAll', '-', 'Scayt'] },
            '/',
            { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'Strike', '-', 'Subscript', 'Superscript', '-', 'RemoveFormat'] },
            { name: 'paragraph', items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock'] },
            { name: 'links', items: ['Link', 'Unlink', 'Anchor'] },
            { name: 'insert', items: ['Image', 'Table', 'HorizontalRule', 'SpecialChar', 'PageBreak'] },
            '/',
            { name: 'styles', items: ['Styles', 'Format', 'Font', 'FontSize'] },
            { name: 'colors', items: ['TextColor', 'BGColor'] },
            { name: 'tools', items: ['Maximize', 'ShowBlocks'] }
        ],
        format_tags: 'p;h1;h2;h3;h4;h5;h6;pre;address'
    });
    
    $(document).ready(function() {

        /*// Define status variable to track which button was clicked
        let status = '';

        // Attach click events to set the status variable based on the button clicked
        $('#saveDraft').click(function(event) {
            event.preventDefault();
            status = 'draft';
            $('#editForm').submit();
        });

        $('#savePublish').click(function(event) {
            event.preventDefault();
            status = 'publish';
            $('#editForm').submit();
        });*/

        $('#editForm').on('submit', function(event) {
            event.preventDefault();

            // Update CKEditor textarea with the content
            for (instance in CKEDITOR.instances) {
                CKEDITOR.instances[instance].updateElement();
            }

            var formData = new FormData(this);
            //formData.append('status', status);

            $.ajax({
                url: '<?php echo base_url("update-case-studies"); ?>',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                dataType: 'json',
                success: function(response) {
                    if (response.status === 'success') {
                        // alert(response.message);
                        showToaster('success', response.message);
                        setTimeout(function() {
                            window.location.reload();
                        }, 2000);
                        // window.location.href = '<?php echo base_url("admin-case-studies"); ?>';
                    } else {
                        // alert(response.message);
                        showToaster('error', response.message);
                    }
                },
                error: function(xhr, status, error) {
                    console.error(xhr);
                    showToaster('error', 'An error occurred while updating the case studies.');
                    // alert('An error occurred while updating the case studies.');
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

    // Set the slug value based on the title
    document.getElementById('title').addEventListener('input', function() {
        var title = this.value;
        var slug = title.toLowerCase()
            .replace(/[^a-z0-9\s-]/g, '')
            .replace(/[\s-]+/g, '-')
            .replace(/^-+|-+$/g, '');
        document.getElementById('slug').value = slug;
    });
</script>