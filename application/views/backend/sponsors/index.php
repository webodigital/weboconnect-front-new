<div class="container-fluid">
    <div class="row">
        <?php $this->load->view('frontend/common/sidemenu'); ?>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 main-content h-100 p-5" style="min-height: calc(100vh - 100px);">
            <h1 class="mb-4 fs-24">Sponsors</h1>
            <form id="sponsorForm" class="mb-4">
                <input type="hidden" name="id" id="sponsor_id">
                <div class="row align-items-end">
                    <div class="form-group col-lg-4 col-xxl-4 col-xl-4 col-md-4 col-sm-12 col-12 mb-2">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" class="form-control" required>
                    </div>
                    <div class="form-group col-lg-3 col-xxl-3 col-xl-3 col-md-3 col-sm-12 col-12 mb-2">
                        <label for="image_url">Image URL:</label>
                        <input type="text" id="image_url" name="image_url" class="form-control" required>
                    </div>
                    <div class="form-group col-lg-3 col-xxl-3 col-xl-3 col-md-3 col-sm-12 col-12 mb-2">
                        <label for="redirection_url">Redirection URL:</label>
                        <input type="text" id="redirection_url" name="redirection_url" class="form-control" required>
                    </div>
                    <div class="form-group col-lg-2 col-xxl-2 col-xl-2 col-md-2 col-sm-12 col-12 mb-2">
                        <button type="submit" class="btn btn-primary submit-button">Submit</button>
                    </div>
                </div>
            </form>

            <h2 class="fs-20 mt-5">Sponsors List</h2>
            <table id="sponsorsTable" class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Redirection URL</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </main>
    </div>
</div>
<script>
    $(document).ready(function() {
        function loadSponsors() {
            $.ajax({
                url: '<?php echo base_url("get-sponsors"); ?>',
                type: 'GET',
                dataType: 'json',
                success: function(sponsors) {
                    var rows = '';
                    sponsors.forEach(function(sponsor) {
                        rows += `
                                <tr>
                                    <td>${sponsor.id}</td>
                                    <td>${sponsor.name}</td>
                                    <td><img src="${sponsor.image_url}" alt="Sponsor Image" width="100"></td>
                                    <td><a href="${sponsor.redirection_url}" target="_blank">${sponsor.redirection_url}</a></td>
                                    <td>${sponsor.created_at}</td>
                                    <td>
                                        <i class="fas fa-edit" data-id="${sponsor.id}"></i>
                                        <i class="fas fa-trash-alt" data-id="${sponsor.id}"></i>
                                    </td>
                                </tr>
                            `;
                    });
                    $('#sponsorsTable tbody').html(rows);
                }
            });
        }

        loadSponsors();

        $('#sponsorForm').on('submit', function(event) {
            event.preventDefault();

            var formData = $(this).serialize();
            var url = $('#sponsor_id').val() ? '<?php echo base_url("update-sponsor"); ?>' : '<?php echo base_url("add-sponsor"); ?>';

            $.ajax({
                url: url,
                type: 'POST',
                data: formData,
                dataType: 'json',
                success: function(response) {
                    alert(response.message);
                    if (response.status === 'success') {
                        $('#sponsorForm')[0].reset();
                        $('#sponsor_id').val('');
                        loadSponsors();
                    }
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                    alert('An error occurred while submitting the form.');
                }
            });
        });

        $(document).on('click', '.fa-edit', function() {
            console.log('1111111');
            var id = $(this).data('id');
            $.ajax({
                url: '<?php echo base_url("get-sponsor/"); ?>' + id,
                type: 'GET',
                dataType: 'json',
                success: function(sponsor) {
                    $('#sponsor_id').val(sponsor.id);
                    $('#name').val(sponsor.name);
                    $('#image_url').val(sponsor.image_url);
                    $('#redirection_url').val(sponsor.redirection_url);
                }
            });
        });

        $(document).on('click', '.fa-trash-alt', function() {
            if (confirm('Are you sure you want to delete this sponsor?')) {
                var id = $(this).data('id');
                $.ajax({
                    url: '<?php echo base_url("delete-sponsor/"); ?>' + id,
                    type: 'POST',
                    dataType: 'json',
                    success: function(response) {
                        alert(response.message);
                        if (response.status === 'success') {
                            loadSponsors();
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                        alert('An error occurred while deleting the sponsor.');
                    }
                });
            }
        });
    });
</script>