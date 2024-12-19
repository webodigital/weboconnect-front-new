
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <h1 class="m-0">Register</h1>
            </div>
            <div class="card-body">
                <?php if($this->session->flashdata('success')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
                <?php endif; ?>
                <form id="registerForm">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" class="form-control" name="email" id="email" value="<?php echo set_value('email'); ?>">
                        <?php echo form_error('email', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" name="password" id="password">
                        <?php echo form_error('password', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="password_confirm">Confirm Password:</label>
                        <input type="password" class="form-control" name="password_confirm" id="password_confirm">
                        <?php echo form_error('password_confirm', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block submit-button">Register</button>
                </form>
                <p class="mt-3 text-center">Already have an account? <a href="<?php echo base_url('login'); ?>">Login here</a>.</p>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#registerForm').on('submit', function(e) {
                e.preventDefault(); // Prevent default form submission

                $.ajax({
                    url: '<?php echo base_url('register/store'); ?>', // Your controller method URL
                    type: 'POST',
                    data: $(this).serialize(), // Serialize the form data
                    dataType: 'json',
                    success: function(response) {
                        if (response.status == 'success') {
                            alert('Registration successful!');
                            // Redirect or perform any other action upon successful registration
                        } else {
                            alert('Registration failed! Please try again.');
                        }
                    },
                    error: function(xhr, status, error) {
                        alert('An error occurred while processing your request. Please try again.');
                    }
                });
            });
        });
    </script>
