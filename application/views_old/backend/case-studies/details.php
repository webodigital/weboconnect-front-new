<div class="container-fluid">
    <div class="row">
        <?php $this->load->view('frontend/common/sidemenu'); ?>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 main-content h-100 p-5" style="min-height: calc(100vh - 100px);">
            <h2>Case Studies Details</h2>
            <div class="d-flex alignt-items-center justify-content-between">
                <h2 class="fs-24 mb-5">
                    <a href="<?php echo site_url('admin-case-studies'); ?>"><i class="me-2 fas fa-list" style="cursor: pointer;"></i></a>
                </h2> 
                <h5>Case Studies <?php echo $case_studies->title; ?></h5>

                <div id="toaster-container"></div>
                <div>
                    <a href="#" class="btn btn-primary submit-button" data-bs-toggle="modal" data-bs-target="#exampleModal">Add New</a>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label>Select Type</label>
                <form method="POST" id="detailsForm">
                    <select name="details_set" id="details_set" class="form-control" onchange="document.getElementById('detailsForm').submit();">            
                        <?php if (!empty($details_set)) : ?>
                            <?php foreach ($details_set as $key => $value) : ?>
                                <option value="<?php echo $key; ?>" <?php echo ($key == $selected_detail) ? 'selected' : ''; ?>>
                                    <?php echo $value; ?>
                                </option>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <option disabled>No types available</option>
                        <?php endif; ?>
                    </select>
                </form>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Description</th>
                        <!-- <th>Status</th>
                        <th>Date</th> -->
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($case_studies_details)) : ?>
                        <?php foreach ($case_studies_details as $key => $case_studies_detail) : ?>
                            <tr>
                                <td><?php echo $key+1; ?></td>
                                <td>
                                    <img src="<?php echo ($case_studies_detail->img)?base_url('assets/images/case_studies/uploads/thumbnails/' . $case_studies_detail->img):base_url('assets/images/default-thumbnail.png'); ?>" height="70px" alt="banner" class="d-block mb-2" onerror="this.onerror=null; this.src='<?php echo base_url('assets/images/default-thumbnail.png'); ?>';">
                                </td>
                                <td><?php echo $case_studies_detail->title; ?></td>
                                <td><?php echo substr($case_studies_detail->description, 0, 100); ?>...</td>
                                <!-- <td><?php //echo ucfirst($case_studies_detail->status)?'Active':'Inactive'; ?></td>
                                <td><?php //echo date('d-m-Y h:i A', strtotime($case_studies_detail->created_at)); ?></td> -->
                                <td>
                                    <!-- <i class="fas fa-eye"></i> -->
                                    <!-- <i class="me-2 fas fa-edit edit" style="cursor: pointer;"></i> -->
                                    <i class="me-2 fas fa-edit edit" data-id="<?php echo $case_studies_detail->id; ?>" style="cursor: pointer;"></i>
                                    <i class="fas fa-trash-alt" data-id="<?php echo $case_studies_detail->id; ?>" style="cursor: pointer;"></i>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <tr>
                            <td colspan="4">No case studies detail found</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
            <div>
                <?php echo $pagination; ?>
            </div>
        </main>
    </div>
</div>

<!-- Add/Edit Modal -->
<div class="modal fade" id="caseStudyModal" tabindex="-1" aria-labelledby="caseStudyModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <form id="caseStudyForm">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="caseStudyModalLabel">Modal title</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <input type="hidden" id="case_studies_details_id" name="case_studies_details_id" value="">
            <input type="hidden" id="case_studies_id" name="case_studies_id" value="<?php echo $case_studies->id; ?>">
            <input type="hidden" id="type" name="type" value="<?php echo $selected_detail; ?>">
            <input type="hidden" id="status" name="status" value="1">
            <div class="form-group">
                <img id="img_url" src="<?php echo base_url('assets/images/default-thumbnail.png'); ?>" height="100px" alt="banner" class="d-block mb-2" onerror="this.onerror=null; this.src='<?php echo base_url('assets/images/default-thumbnail.png'); ?>';">
                <label for="img">Image</label>
                <input type="file" class="form-control" id="img" name="img" accept="image/*">
            </div>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>
    </div>
  </div>
</div>

<script>
    $(document).ready(function() {

        $('.fa-trash-alt').on('click', function() {
            var case_studieId = $(this).data('id');  // Retrieve the id from the data-id attribute
            // console.log(blogId); 
            if (confirm('Are you sure you want to delete this case studies details?')) {
                // var blogId = $(this).closest('tr').find('td:first').text();

                $.ajax({
                    url: '<?php echo base_url("delete-case-studies-details"); ?>/' + case_studieId,
                    type: 'POST',
                    dataType: 'json',
                    success: function(response) {
                        if (response.status === 'success') {
                            // alert(response.message);
                            showToaster('success', response.message);
                            location.reload(); // Reload the page to reflect the deletion
                        } else {
                            // alert(response.message);
                            showToaster('error', response.message);
                        }
                    },
                    error: function(xhr, status, error) {
                        // console.error(xhr.responseText);
                        showToaster('error', 'An error occurred while deleting the blog.');
                        // alert('An error occurred while deleting the blog.');
                    }
                });
            }
        });

        function showToaster(type, message) {
            var toaster = $('<div class="toaster toaster-' + type + '">' + message + '</div>');
            $('#toaster-container').append(toaster);
            toaster.fadeIn(400).delay(3000).fadeOut(400, function() {
                $(this).remove();
            });
        }
        /*$('.fa-edit').on('click', function() {
            var case_studieId = $(this).data('id');  // Retrieve the id from the data-id attribute
            console.log(case_studieId);  // Debugging: check the id value in the console
            window.location.href = '<?php echo base_url("edit-case-studies"); ?>/' + case_studieId;
        });*/

        $('.fa-file').on('click', function() {
            var case_studieId = $(this).data('id');  // Retrieve the id from the data-id attribute
            console.log(case_studieId);  // Debugging: check the id value in the console
            window.location.href = '<?php echo base_url("case-studies-details"); ?>/' + case_studieId;
        });

        ///////////////
        // Open modal for "Add New"
        $('.submit-button').on('click', function () {
            $('#caseStudyModalLabel').text('Add New Case Study Details');
            $('#img_url').attr("src",'');
            $('#caseStudyForm')[0].reset(); // Reset the form
            $('#case_studies_details_id').val(''); // Clear ID field for new entry
            $('#caseStudyModal').modal('show');
        });

        // Open modal for "Edit"
        $('.fa-edit').on('click', function () {
            var caseStudyId = $(this).data('id');
            // Fetch data for the selected case study
            var base_url = '<?php echo base_url('assets/images/case_studies/uploads/thumbnails/'); ?>';
            $.ajax({
                url: '<?php echo base_url("case-studies-detailsbyid"); ?>/' + caseStudyId,
                type: 'GET',
                dataType: 'json',
                success: function (response) {
                    if (response.status === 'success') {
                        $('#caseStudyModalLabel').text('Edit Case Study');
                        $('#case_studies_details_id').val(response.data.id);
                        $('#type').val(response.data.type);
                        $('#title').val(response.data.title);
                        $('#description').val(response.data.description);
                        $('#img_url').attr("src",base_url+''+response.data.img);
                        $('#caseStudyModal').modal('show');
                    } else {
                        alert(response.message);
                    }
                },
                error: function (xhr, status, error) {
                    console.error(xhr.responseText);
                    alert('An error occurred while fetching the case study details.');
                }
            });
        });

        // Submit form data (Add/Edit)
        $('#caseStudyForm').on('submit', function (e) {
            e.preventDefault();
            var formData = new FormData(this);

            $.ajax({
                url: '<?php echo base_url("submit-case-studies-details"); ?>',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                dataType: 'json',
                success: function(response) {
                    if (response.status === 'success') {
                        $('#caseStudyModal').modal('hide');
                        $('#caseStudyForm')[0].reset();
                        showToaster('success', response.message);
                        location.reload(); // Reload the page to reflect the deletion
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
    });
</script>