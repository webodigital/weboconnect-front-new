<div class="container-fluid">
    <div class="row">
        <?php $this->load->view('frontend/common/sidemenu'); ?>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 main-content h-100 p-5" style="min-height: calc(100vh - 100px);">
            <div class="">
                <div class="">
                    <h2 class="fs-24 mb-3">View Enquiry</h2>
                </div>
                <div id="toaster-container"></div>
                <div class="card-body">
                    <div id="responseMessage"></div>
                    <form id="editForm" enctype="multipart/form-data">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="hidden" class="form-control" name="id" value="<?php echo $enquiry->id; ?>">
                                <label for="title">Name:</label>
                                <!-- <input type="text" class="form-control" id="title" name="title" value=""> -->
                                <?php echo $enquiry->name; ?>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="slug">Email:</label>
                                <!-- <input type="text" class="form-control" id="slug" name="slug" value=""> -->
                                <?php echo $enquiry->email; ?>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="content">Phone:</label>
                                <!-- <textarea id="content" class="form-control" name="content" rows="5"></textarea> -->
                                <?php echo $enquiry->phone; ?>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="content">Purpose:</label>
                                <!-- <textarea id="content" class="form-control" name="content" rows="5"></textarea> -->
                                <?php echo $enquiry->purpose; ?>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="content">Message:</label>
                                <!-- <textarea id="content" class="form-control" name="content" rows="5"></textarea> -->
                                <?php echo $enquiry->message; ?>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="publish_date">Enquiry Date:</label>
                                <!-- <input type="date" class="form-control" name="publish_date" id="publish_date" value=""> -->
                                <?php echo $enquiry->created_at; ?>
                            </div>
                            <!-- <div class="col-12">
                                <button type="submit" class="btn btn-secondary submit-button" id="saveDraft">Update as Draft</button>
                                <button type="submit" class="btn btn-primary submit-button pull-right" id="savePublish">Update and Publish/Schedule</button>
                            </div> -->
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

        // Define status variable to track which button was clicked
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
        });

        $('#editForm').on('submit', function(event) {
            event.preventDefault();

            // Update CKEditor textarea with the content
            for (instance in CKEDITOR.instances) {
                CKEDITOR.instances[instance].updateElement();
            }

            var formData = new FormData(this);
            formData.append('status', status);

            $.ajax({
                url: '<?php echo base_url("update-blog"); ?>',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                dataType: 'json',
                success: function(response) {
                    if (response.status === 'success') {
                        // alert(response.message);
                        showToaster('success', response.message);
                        // window.location.href = '<?php echo base_url("admin-blogs"); ?>';
                    } else {
                        // alert(response.message);
                        showToaster('error', 'response.message');
                    }
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                    showToaster('error', 'An error occurred while updating the blog.');
                    // alert('An error occurred while updating the blog.');
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