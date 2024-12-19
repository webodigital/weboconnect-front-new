    <footer class="footer text-center p-3">
        <span class="">Copyright @Web0connect 2024</span>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script>
    /*$(document).ready(function() {
        $('#logoutuser').click(function(event) {
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
                        window.location.href = '<?php echo site_url('login'); ?>'; // Redirect to login page or homepage
                    } else {
                        console.log('Logout failed.');
                        alert('Logout failed');
                    }
                },
                error: function(xhr, status, error) {
                    console.log('AJAX request error.');
                    console.error(status);
                    console.error(error);
                    //console.error(xhr.responseText);
                    alert('An error occurred while logging out');
                }
            });
        });
    });*/

    $(document).ready(function () {
    $('#logoutuser').click(function (event) {
        event.preventDefault(); // Prevent default anchor click behavior
        console.log('Starting logout process...');
        $.ajax({
    url: '<?php echo site_url('logout'); ?>',
    type: 'POST',
    dataType: 'json',
    success: function (response) {
        console.log('Logout response received.');
        if (response.status === 'success') {
            alert(response.message);
            window.location.href = '<?php echo site_url('login'); ?>';
        } else {
            alert('Logout failed: ' + (response.message || 'Unknown error.'));
        }
    },
    error: function (xhr, status, error) {
        console.error('Error occurred during AJAX request.');
        console.error('Status:', status);
        console.error('Error:', error);
        console.error('Response Text:', xhr.responseText);
        if (status === 'parsererror') {
            alert('The server returned an invalid response. Please try again.');
        } else {
            alert('An error occurred: ' + (error || 'Unknown error.'));
        }
    }
});

    });
});


</script>

</html>