<nav class="col-md-2 d-none d-md-block sidebar" style="background-color: #e3e3e3;">
    <div class="sidebar-sticky px-3 py-5">
        <h5 class="sidebar-heading" style="padding: 0 15px;">Menu</h5>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('dashboard'); ?>">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('admin-enquires'); ?>">All Enquires</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('admin-blogs-category'); ?>">All Blog Category</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('admin-blogs'); ?>">All Blogs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('admin-case-studies'); ?>">All Case Studies</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('admin-careers'); ?>">All Careers</a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('admin-sponsor'); ?>">All Sponsor</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('color/admin-color-theme'); ?>">Color Theme</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('menu'); ?>">All Menu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('admin-tracking-user-details'); ?>">User Track</a>
            </li> -->
            <li class="nav-item">
                <form id="logoutForm" method="POST" action="<?php echo site_url('logout'); ?>">
                    <a class="nav-link" href="#" id="logoutuser1" onclick="document.getElementById('logoutForm').submit();">Logout</a>
                </form>
                <!-- <a class="nav-link" href="#" id="logoutuser">Logout</a> -->
            </li>
        </ul>
    </div>
</nav>