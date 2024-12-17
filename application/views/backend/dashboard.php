
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <!-- <nav class="col-md-2 d-none d-md-block sidebar">
                <div class="sidebar-sticky">
                    <h5 class="sidebar-heading">Menu</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('admin-blogs'); ?>">All Blogs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('admin-sponsor'); ?>">All Sponsor</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('color/admin-color-theme'); ?>">Color Theme</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="logout">Logout</a>
                        </li>
                    </ul>
                </div>
            </nav> -->
            <?php $this->load->view('frontend/common/sidemenu'); ?>

            <!-- Main Content -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 main-content h-100 p-5" style="min-height: calc(100vh - 100px);">
                <h1 class="fs-24">Dashboard</h1>
                <p>Welcome to the dashboard.</p>
                <!-- Your dashboard content here -->
            </main>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#logout').click(function(event) {
                event.preventDefault(); // Prevent the default anchor click behavior
                console.log('Starting logout process...');
                $.ajax({
                    url: '<?php echo site_url('logout'); ?>',
                    type: 'POST',
                    dataType: 'json',
                    beforeSend: function() {
                        console.log('Before sending AJAX request...');
                    },
                    success: function(response) {
                        console.log('AJAX request successful.');
                        if (response.status === 'success') {
                            alert(response.message);
                            console.log('Redirecting to login page...');
                            window.location.href = '<?php echo site_url('auth/login'); ?>'; // Redirect to login page or homepage
                        } else {
                            console.log('Logout failed.');
                            alert('Logout failed');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.log('AJAX request error.');
                        console.error(status);
                        console.error(error);
                        console.error(xhr.responseText);
                        alert('An error occurred while logging out');
                    }
                });
            });
        });
    </script>
