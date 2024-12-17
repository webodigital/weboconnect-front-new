<div class="container-fluid">
    <div class="row">
        <?php $this->load->view('frontend/common/sidemenu'); ?>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 main-content h-100 p-5" style="min-height: calc(100vh - 100px);">
            <div class="">
                <div class="">
                    <h2 class="fs-24 mb-3">Add Blog</h2>
                </div>
                <div id="toaster-container"></div>
                <div class="card-body">
                    <div id="responseMessage"></div>
                    <form id="blogForm" enctype="multipart/form-data">
                        <div class="row">
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
                                <textarea class="form-control" name="content" id="content" rows="5" required></textarea>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="image">Image:</label>
                                <input type="file" class="form-control" name="image" id="image" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="tags">Tags (comma-separated):</label>
                                <input type="text" class="form-control" name="tags" id="tags">
                            </div>
                            <div class="form-group col-md-6">
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
                            </div>
                            <div class="form-group col-md-6">
                                <label for="sponsor">Choose a Sponsor:</label>
                                <select name="sponsor" id="sponsor" class="form-control">
                                    <option value="">Select your sponsor...</option>
                                    <?php if (!empty($sponsors)) : ?>
                                        <?php foreach ($sponsors as $sponsor) : ?>
                                            <?php
                                            if (is_array($sponsor) && isset($sponsor['id']) && isset($sponsor['name'])) : ?>
                                                <option value="<?php echo htmlspecialchars($sponsor['id']); ?>">
                                                    <?php echo htmlspecialchars($sponsor['name']); ?>
                                                </option>
                                            <?php else : ?>
                                                <option disabled>Error: Invalid sponsor data</option>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <option disabled>No sponsors available</option>
                                    <?php endif; ?>
                                </select>
                            </div>
                            <div class="col-md-12 mt-2">
                                <h4 class="fs-18">Add Metas</h2>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="metatitle">Meta Title:</label>
                                <input type="text" class="form-control" name="metatitle" id="metatitle" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="metadescription">Meta Description:</label>
                                <input type="text" class="form-control" name="metadescription" id="metadescription" required>
                            </div>
                            <!-- <div class="col-12">
                                <button type="submit" class="btn btn-primary btn-block submit-button">Submit</button>
                            </div> -->
                            <div class="col-12">
                                <button type="submit" class="btn btn-secondary submit-button" id="saveDraft">Save as Draft</button>
                                <button type="submit" class="btn btn-primary submit-button pull-right" id="savePublish">Save and Publish/Schedule</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function () {
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
    });
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
        let status = '';

        // Attach click events to set the status variable based on the button clicked
        $('#saveDraft').click(function(event) {
            event.preventDefault();
            status = 'draft';
            $('#blogForm').submit();
        });

        $('#savePublish').click(function(event) {
            event.preventDefault();
            status = 'publish';
            $('#blogForm').submit();
        });

        $('#blogForm').submit(function(event) {
            event.preventDefault();


            // Update CKEditor textarea with the content
            for (instance in CKEDITOR.instances) {
                CKEDITOR.instances[instance].updateElement();
            }

            var formData = new FormData(this);
            formData.append('status', status);

            $.ajax({
                url: '<?php echo base_url("submit-blog"); ?>',
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