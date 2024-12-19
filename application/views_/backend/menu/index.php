<div class="container-fluid">
    <div class="row">
        <?php $this->load->view('frontend/common/sidemenu'); ?>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 main-content h-100 p-5" style="min-height: calc(100vh - 100px);">
            <h1 class="mb-4 fs-24">All Menus</h1>
            <div id="toaster-container"></div>
            <form id="menuForm" class="mb-4">
                <input type="hidden" name="id" id="menu_id">
                <div class="row align-items-end">
                    <div class="form-group col-lg-4 col-xxl-4 col-xl-4 col-md-4 col-sm-12 col-12 mb-2">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" class="form-control change-color-input" required>
                    </div>
                    <div class="form-group col-lg-3 col-xxl-3 col-xl-3 col-md-3 col-sm-12 col-12 mb-2">
                        <label for="url">URL:</label>
                        <input type="text" id="url" name="url" class="form-control change-color-input" required>
                    </div>
                    <div class="form-group col-lg-3 col-xxl-3 col-xl-3 col-md-3 col-sm-12 col-12 mb-2">
                        <label for="serialno">Serial No:</label>
                        <input type="text" id="serialno" name="serialno" class="form-control change-color-input" required>
                    </div>
                    <div class="form-group col-lg-2 col-xxl-2 col-xl-2 col-md-2 col-sm-12 col-12 mb-2">
                        <button type="submit" class="btn btn-primary submit-button">Submit</button>
                    </div>
                </div>
            </form>

            <h2 class="fs-20 mt-5">Menus List</h2>
            <table id="menusTable" class="table table-striped">
                <thead>
                    <tr>
                        <!-- <th>ID</th> -->
                        <th>Serial No</th>
                        <th>Name</th>
                        <th>URL</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Menu data will be dynamically loaded here -->
                </tbody>
            </table>
        </main>
    </div>
</div>

<script>
$(document).ready(function() {
    // Function to load menus data on page load
    function loadMenus() {
        $.ajax({
            url: '<?php echo base_url('menu/fetch'); ?>',
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                var rows = '';
                $.each(data, function(index, menu) {
                    rows += '<tr>' +
                                // '<td>' + menu.id + '</td>' +
                                '<td>' + menu.serialno + '</td>' +
                                '<td>' + menu.name + '</td>' +
                                '<td>' + menu.url + '</td>' +
                                '<td>' +
                                    '<button class="border-0 bg-transparent btn-edit" data-id="' + menu.id + '"><i class="fas fa-edit"></i></button> ' +
                                    '<button class="border-0 bg-transparent btn-delete" data-id="' + menu.id + '"><i class="fas fa-trash-alt"></i></button>' +
                                '</td>' +
                            '</tr>';
                });
                $('#menusTable tbody').html(rows);
            },
            error: function(xhr, status, error) {
                console.error('Error loading menus:', error);
            }
        });
    }

    // Load menus data initially
    loadMenus();

    // Handle form submission to add/edit menu
    $('#menuForm').submit(function(e) {
        e.preventDefault();
        var formData = $(this).serialize();
        var url = '<?php echo base_url('menu/add'); ?>';
        var method = 'POST';
        if ($('#menu_id').val()) {
            url = '<?php echo base_url('menu/update'); ?>/' + $('#menu_id').val();
            method = 'POST'; // Use POST instead of PUT for CodeIgniter compatibility
        }
        $.ajax({
            url: url,
            type: method,
            data: formData,
            dataType: 'json',
            success: function(response) {
                if(response.status == 'success') {
                    $('#menuForm')[0].reset();
                    $('#menu_id').val('');
                    loadMenus();
                    $('#toaster-container').html('<div class="alert alert-success toaster" role="alert">' + response.message + '</div>');
                } else {
                    $('#toaster-container').html('<div class="alert alert-danger toaster" role="alert">' + response.message + '</div>');
                }
            },
            error: function(xhr, status, error) {
                $('#toaster-container').html('<div class="alert alert-danger toaster" role="alert">Error: ' + xhr.responseText + '</div>');
            }
        });
    });

    // Handle click on edit button to populate form
    $(document).on('click', '.btn-edit', function() {
        var id = $(this).data('id');
        $.ajax({
            url: '<?php echo base_url('menu/get'); ?>/' + id,
            type: 'GET',
            dataType: 'json',
            success: function(menu) {
                $('#menu_id').val(menu.id);
                $('#name').val(menu.name);
                $('#url').val(menu.url);
                $('#serialno').val(menu.serialno);
            },
            error: function(xhr, status, error) {
                console.error('Error fetching menu:', error);
            }
        });
    });

    // Handle click on delete button
    $(document).on('click', '.btn-delete', function() {
        if (confirm('Are you sure you want to delete this menu?')) {
            var id = $(this).data('id');
            $.ajax({
                url: '<?php echo base_url('menu/delete'); ?>/' + id,
                type: 'POST', // Use POST instead of DELETE for CodeIgniter compatibility
                dataType: 'json',
                success: function(response) {
                    if(response.status == 'success') {
                        loadMenus();
                        $('#toaster-container').html('<div class="alert alert-success toaster" role="alert">' + response.message + '</div>');
                    } else {
                        $('#toaster-container').html('<div class="alert alert-danger toaster" role="alert">' + response.message + '</div>');
                    }
                },
                error: function(xhr, status, error) {
                    $('#toaster-container').html('<div class="alert alert-danger toaster" role="alert">Error: ' + xhr.responseText + '</div>');
                }
            });
        }
    });
});
</script>
