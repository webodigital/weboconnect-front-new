<div class="container-fluid">
    <div class="row">
        <?php $this->load->view('frontend/common/sidemenu'); ?>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 main-content h-100 p-5" style="min-height: calc(100vh - 100px);">
            <div class="d-flex alignt-items-center justify-content-between">
                <h1 class="fs-24 mb-5">All Careers</h1>
                <div id="toaster-container"></div>
                <div>
                    <!-- <a href="<?php echo base_url('create-blog'); ?>" class="btn btn-primary submit-button">Add New Blog</a> -->
                </div>
            </div>
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Job Title</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Resume</th>
                        <!-- <th>Message</th>
                        <th>Status</th> -->
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($careers)) : ?>
                        <?php foreach ($careers as $key => $career) : ?>
                            <tr>
                                <td><?php echo $key+1; ?></td>
                                <td><?php echo $career->job_title; ?></td>
                                <td><?php echo $career->name; ?></td>
                                <td><?php echo $career->email; ?></td>
                                <td><?php echo $career->phone; ?></td>
                                <td><a href="<?php echo base_url('/uploads/careers/').$career->resume; ?>" target="_blank">View Resume</a></td>
                                <td><?php echo substr($career->message, 0, 100); ?>...</td>
                                <!-- <td><?php echo ucfirst($career->contact_status); ?></td> -->
                                <td><?php echo date('d-m-Y h:i A', strtotime($career->created_at)); ?></td>
                                <td>
                                    <a href="<?php echo base_url("view-career").'/'.$career->career_id ?>"><i class="fas fa-eye"></i></a>
                                    <!-- <i class="me-2 fas fa-edit edit" style="cursor: pointer;"></i> -->
                                    <!-- <i class="me-2 fas fa-edit edit" data-id="<?php //echo $blog->id; ?>" style="cursor: pointer;"></i>
                                    <i class="fas fa-trash-alt" data-id="<?php //echo $blog->id; ?>" style="cursor: pointer;"></i> -->
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <tr>
                            <td colspan="4">No careers found</td>
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
            var blogId = $(this).data('id');  // Retrieve the id from the data-id attribute
            // console.log(blogId); 
            if (confirm('Are you sure you want to delete this blog?')) {
                // var blogId = $(this).closest('tr').find('td:first').text();

                $.ajax({
                    url: '<?php echo base_url("delete-blog"); ?>/' + blogId,
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
        $('.fa-edit').on('click', function() {
            var blogId = $(this).data('id');  // Retrieve the id from the data-id attribute
            console.log(blogId);  // Debugging: check the id value in the console
            window.location.href = '<?php echo base_url("edit-blog"); ?>/' + blogId;
        });
    });
</script>