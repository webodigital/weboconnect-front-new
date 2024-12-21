<div class="container-fluid">
    <div class="row">
        <?php $this->load->view('frontend/common/sidemenu'); ?>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 main-content h-100 p-5" style="min-height: calc(100vh - 100px);">
            <div class="d-flex alignt-items-center justify-content-between">
                <h1 class="fs-24 mb-5">All Case Studies</h1>
                <div id="toaster-container"></div>
                <div>
                    <a href="<?php echo base_url('create-case-studies'); ?>" class="btn btn-primary submit-button">Add New Case Studies</a>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($case_studies)) : ?>
                        <?php foreach ($case_studies as $key => $case_studie) : ?>
                            <tr>
                                <td><?php echo $key+1; ?></td>
                                <td><?php echo $case_studie->title; ?></td>
                                <td><?php echo substr($case_studie->description, 0, 100); ?>...</td>
                                <td><?php echo ucfirst($case_studie->status)?'Active':'Inactive'; ?></td>
                                <td><?php echo date('d-m-Y h:i A', strtotime($case_studie->created_at)); ?></td>
                                <td>
                                    <!-- <i class="fas fa-eye"></i> -->
                                    <!-- <i class="me-2 fas fa-edit edit" style="cursor: pointer;"></i> -->
                                    <i class="me-2 fas fa-file file" data-id="<?php echo $case_studie->id; ?>" style="cursor: pointer;" title="Add Details"></i>
                                    <i class="me-2 fas fa-file-o file-o" data-id="<?php echo $case_studie->id; ?>" style="cursor: pointer;" title="Add Testimonials"></i>
                                    <i class="me-2 fas fa-edit edit" data-id="<?php echo $case_studie->id; ?>" style="cursor: pointer;"></i>
                                    <i class="fas fa-trash-alt" data-id="<?php echo $case_studie->id; ?>" style="cursor: pointer;"></i>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <tr>
                            <td colspan="4">No case studie found</td>
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

<script>
    $(document).ready(function() {
        $('.fa-trash-alt').on('click', function() {
            var case_studieId = $(this).data('id');  // Retrieve the id from the data-id attribute
            // console.log(blogId); 
            if (confirm('Are you sure you want to delete this case studie?')) {
                // var blogId = $(this).closest('tr').find('td:first').text();

                $.ajax({
                    url: '<?php echo base_url("delete-case-studies"); ?>/' + case_studieId,
                    type: 'POST',
                    dataType: 'json',
                    success: function(response) {
                        if (response.status === 'success') {
                            // alert(response.message);
                            location.reload(); // Reload the page to reflect the deletion
                            showToaster('success', response.message);
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

        $('.fa-file').on('click', function() {
            var case_studieId = $(this).data('id');  // Retrieve the id from the data-id attribute
            console.log(case_studieId);  // Debugging: check the id value in the console
            window.location.href = '<?php echo base_url("case-studies-details"); ?>/' + case_studieId;
        });

        $('.fa-file-o').on('click', function() {
            var case_studieId = $(this).data('id');  // Retrieve the id from the data-id attribute
            console.log(case_studieId);  // Debugging: check the id value in the console
            window.location.href = '<?php echo base_url("case-studies-testimonials"); ?>/' + case_studieId;
        });

        $('.fa-edit').on('click', function() {
            var case_studieId = $(this).data('id');  // Retrieve the id from the data-id attribute
            console.log(case_studieId);  // Debugging: check the id value in the console
            window.location.href = '<?php echo base_url("edit-case-studies"); ?>/' + case_studieId;
        });

    });
</script>