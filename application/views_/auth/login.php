
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <h1 class="m-0">Login</h1>
            </div>
            <div class="card-body">
                <?php if($this->session->flashdata('error')): ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $this->session->flashdata('error'); ?>
                </div>
                <?php endif; ?>
                <?php echo form_open('login/authenticate'); ?>
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
                <button type="submit" class="btn btn-primary btn-block submit-button">Login</button>
                <?php echo form_close(); ?>
                <!--<p class="mt-3 text-center">Create new account? <a href="<?php echo base_url('register'); ?>">Register here</a>.</p>-->
            </div>
        </div>
    </div>

