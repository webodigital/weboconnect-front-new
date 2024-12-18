<script>
              new WOW().init();
              </script>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script> -->

<script src="<?=base_url()?>assets/js/jquery.min.js"></script>



<script src="<?=base_url()?>assets/js/popper.min.js"></script>
<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>assets/js/owl.carousel.js"></script>   
<script src="<?=base_url()?>assets/js/navigation.js"></script>
<script src="<?=base_url()?>assets/js/header.js"></script> 
<script src="<?=base_url()?>assets/js/main.js"></script>


<script src="<?=base_url()?>assets/jquery-validate/jquery.validate.min.js"></script>
<script src='https://www.google.com/recaptcha/api.js' async defer></script>


<!-- <script src="<?=base_url()?>assets/js/jquery_slider/jquery.mobile.custom.min.js"></script> -->


<script type="text/javascript">
/*New Equiry footer form*/
$('#newEnquiryForm').validate({
    rules: {
        first_name: {
            required: true,
            minlength: 2
        },
        last_name: {
            required: true,
            minlength: 2
        },
        email: {
            required: true,
            email: true
        },
        phone: {
            required: true,
            minlength: 10 // Adjust as per your phone number length requirement
        },
        development: {
            required: true
        },
        message: {
            required: true
        }
    },
    messages: {
        first_name: {
            required: "Please enter your first name.",
            minlength: "Your first name must be at least 2 characters long."
        },
        last_name: {
            required: "Please enter your last name.",
            minlength: "Your last name must be at least 2 characters long."
        },
        email: {
            required: "Please enter your email address.",
            email: "Please enter a valid email address."
        },
        phone: {
            required: "Please enter your phone number.",
            minlength: "Your phone number must be at least 10 digits long."
        },
        development: {
            required: "Please specify the development."
        },
        message: {
            required: "Please enter your message."
        }
    },
    //errorElement: 'small',
    submitHandler: function (form) {
        $('.successMessage').html('');
        $('.errorMessage').html('');
        
        // Create a FormData object from the form
        var formData = new FormData(form);

        $.ajax({
            url: '<?php echo base_url('new-submit-enquiry'); ?>',
            type: 'POST',
            data: formData, //$(form).serialize(),
            cache: false,
            processData: false,
            contentType: false,
            success: function (res) {
                console.log(res);
                if (res.s == 's') {
                    $(form)[0].reset();
                    //window.location.href = "<?php echo site_url('thank-you'); ?>";
                    $('#thankyou_modal').modal('show');
                    $('.successMessage').show().html("<i>"+ res.m +"</i>");
                    setTimeout(function(){ 
                        $('.successMessage').hide(); 
                        $('#thankyou_modal').modal('hide');
                    }, 5000);
                } else if (res.error) {
                    var erros = '';
                    $.each(res.error,function(i,v){
                        //erros +='<small><b>'+i+'</b>: '+v+'</small><br>';
                        erros += v+'<br>';
                    });
                    console.log(erros);
                    $('.errorMessage').show().html("<i>"+erros+"</i>");
                    setTimeout(function(){ $('.errorMessage').hide(); }, 5000);
                    //swal({html: true,title:"Warning!", text:erros, icon:"warning"});
                } else {
                    //swal("Error!", res.m, "error");
                    $('.errorMessage').show().html("<i>"+ res.m +"</i>");
                    setTimeout(function(){ $('.errorMessage').hide(); }, 5000);
                }
            }
        });
    }
});

$('#newEnquiryModalForm').validate({
    rules: {
        first_name: {
            required: true,
            minlength: 2
        },
        last_name: {
            required: true,
            minlength: 2
        },
        email: {
            required: true,
            email: true
        },
        phone: {
            required: true,
            minlength: 10 // Adjust as per your phone number length requirement
        },
        development: {
            required: true
        },
        message: {
            required: true
        }
    },
    messages: {
        first_name: {
            required: "Please enter your first name.",
            minlength: "Your first name must be at least 2 characters long."
        },
        last_name: {
            required: "Please enter your last name.",
            minlength: "Your last name must be at least 2 characters long."
        },
        email: {
            required: "Please enter your email address.",
            email: "Please enter a valid email address."
        },
        phone: {
            required: "Please enter your phone number.",
            minlength: "Your phone number must be at least 10 digits long."
        },
        development: {
            required: "Please specify the development."
        },
        message: {
            required: "Please enter your message."
        }
    },
    //errorElement: 'small',
    submitHandler: function (form) {
        ///alert('dddd');
        $('#newEnquiryModalForm .successMessage').html('');
        $('#newEnquiryModalForm .errorMessage').html('');
        
        // Create a FormData object from the form
        var formData = new FormData(form);

        $.ajax({
            url: '<?php echo base_url('new-submit-enquiry'); ?>',
            type: 'POST',
            data: formData, //$(form).serialize(),
            cache: false,
            processData: false,
            contentType: false,
            success: function (res) {
                console.log(res);
                if (res.s == 's') {
                    $(form)[0].reset();
                    //window.location.href = "<?php echo site_url('thank-you'); ?>";
                    $('#lets_discuss_project_modal').modal('hide');
                    $('#thankyou_modal').modal('show');
                    $('#newEnquiryModalForm .successMessage').show().html("<i>"+ res.m +"</i>");
                    setTimeout(function(){ 
                        $('#newEnquiryModalForm .successMessage').hide(); 
                        $('#thankyou_modal').modal('hide');
                    }, 5000);
                } else if (res.error) {
                    var erros = '';
                    $.each(res.error,function(i,v){
                        //erros +='<small><b>'+i+'</b>: '+v+'</small><br>';
                        erros += v+'<br>';
                    });
                    console.log(erros);
                    $('#newEnquiryModalForm .errorMessage').show().html("<i>"+erros+"</i>");
                    setTimeout(function(){ $('#newEnquiryModalForm .errorMessage').hide(); }, 5000);
                    //swal({html: true,title:"Warning!", text:erros, icon:"warning"});
                } else {
                    //swal("Error!", res.m, "error");
                    $('#newEnquiryModalForm .errorMessage').show().html("<i>"+ res.m +"</i>");
                    setTimeout(function(){ $('#newEnquiryModalForm .errorMessage').hide(); }, 5000);
                }
            }
        });
    }
});
</script>