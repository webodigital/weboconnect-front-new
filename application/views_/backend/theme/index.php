<div class="container-fluid">
    <div class="row">
        <?php $this->load->view('frontend/common/sidemenu'); ?>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 main-content h-100 p-5" style="min-height: calc(100vh - 100px);">
            <h1 class="fs-24"><?php echo $title; ?></h1>
            <div id="toaster-container"></div>
            <!-- <form id="headerBackground" class="row">
                <div class="form-group col-md-3">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" class="form-control" value="header-background" readonly required>
                </div>
                <div class="form-group col-md-3">
                    <label for="favcolor">Select your favorite color:</label>
                    <input type="color" id="favcolor" name="favcolor" value="#212529" class="form-control"><br><br>
                </div>
                <div class="form-group col-md-3">
                    <label for="colorcode">Selected color hashcode:</label>
                    <input type="text" id="colorcode" name="colorcode" value="#212529" class="form-control" readonly><br><br>
                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-primary">Save Color</button>
                </div>
            </form>
            <form id="headerText" class="row">
                <div class="form-group col-md-3">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" class="form-control" value="header-text" readonly required>
                </div>
                <div class="form-group col-md-3">
                    <label for="favcolor">Select your favorite color:</label>
                    <input type="color" id="favcolor" name="favcolor" value="#ffffff" class="form-control"><br><br>
                </div>
                <div class="form-group col-md-3">
                    <label for="colorcode">Selected color hashcode:</label>
                    <input type="text" id="colorcode" name="colorcode" value="#ffffff" class="form-control" readonly><br><br>
                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-primary">Save Color</button>
                </div>
            </form>
            <form id="footerBackground" class="row">
                <div class="form-group col-md-3">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" class="form-control" value="footer-background" readonly required>
                </div>
                <div class="form-group col-md-3">
                    <label for="favcolor">Select your favorite color:</label>
                    <input type="color" id="favcolor" name="favcolor" value="#212529" class="form-control"><br><br>
                </div>
                <div class="form-group col-md-3">
                    <label for="colorcode">Selected color hashcode:</label>
                    <input type="text" id="colorcode" name="colorcode" value="#212529" class="form-control" readonly><br><br>
                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-primary">Save Color</button>
                </div>
            </form>
            <form id="footerText" class="row">
                <div class="form-group col-md-3">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" class="form-control" value="footer-text" readonly required>
                </div>
                <div class="form-group col-md-3">
                    <label for="favcolor">Select your favorite color:</label>
                    <input type="color" id="favcolor" name="favcolor" value="#ffffff" class="form-control"><br><br>
                </div>
                <div class="form-group col-md-3">
                    <label for="colorcode">Selected color hashcode:</label>
                    <input type="text" id="colorcode" name="colorcode" value="#ffffff" class="form-control" readonly><br><br>
                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-primary">Save Color</button>
                </div>
            </form> -->
            <?php foreach ($colors as $color) : ?>
                <form id="<?php echo $color['name']; ?>Form" class="row align-items-end mb-4">
                    <div class="form-group col-md-3 m-0">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" class="form-control" value="<?php echo $color['name']; ?>" readonly required>
                    </div>
                    <div class="form-group col-md-3 m-0">
                        <label for="favcolor">Select your favorite color:</label>
                        <input type="color" id="favcolor" name="favcolor" value="<?php echo $color['color']; ?>" class="form-control change-color-input">
                    </div>
                    <div class="form-group col-md-3 m-0">
                        <label for="colorcode">Selected color hashcode:</label>
                        <input type="text" id="colorcode" name="colorcode" value="<?php echo $color['color']; ?>" class="form-control" readonly>
                    </div>
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-primary submit-button">Save Color</button>
                    </div>
                </form>
            <?php endforeach; ?>
        </main>
    </div>
</div>
<script>
    $(document).ready(function() {
        // Function to handle form submission
        function handleFormSubmission(formId) {
            $(formId).on('submit', function(event) {
                event.preventDefault(); // Prevent the default form submission

                $.ajax({
                    url: '<?php echo site_url('color/save'); ?>',
                    type: 'POST',
                    data: $(this).serialize(),
                    dataType: 'json',
                    success: function(response) {
                        if (response.status === 'success') {
                            showToaster('success', response.message);
                        } else {
                            showToaster('error', 'Failed to save color.');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                        showToaster('error', 'An error occurred while saving the color.');
                    }
                });
            });
        }

        // Function to update color code input when color input changes
        function updateColorCode(colorInputId, colorCodeInputId) {
            $(colorInputId).on('input', function() {
                $(colorCodeInputId).val(this.value);
            });
        }

        // Handle form submissions for each form
        handleFormSubmission('#header-backgroundForm');
        handleFormSubmission('#header-textForm');
        handleFormSubmission('#footer-backgroundForm');
        handleFormSubmission('#footer-textForm');

        // Update color codes for each form
        updateColorCode('#header-backgroundForm #favcolor', '#header-backgroundForm #colorcode');
        updateColorCode('#header-textForm #favcolor', '#header-textForm #colorcode');
        updateColorCode('#footer-backgroundForm #favcolor', '#footer-backgroundForm #colorcode');
        updateColorCode('#footer-textForm #favcolor', '#footer-textForm #colorcode');

        function showToaster(type, message) {
            var toaster = $('<div class="toaster toaster-' + type + '">' + message + '</div>');
            $('#toaster-container').append(toaster);
            toaster.fadeIn(400).delay(3000).fadeOut(400, function() {
                $(this).remove();
            });
        }
    });
</script>