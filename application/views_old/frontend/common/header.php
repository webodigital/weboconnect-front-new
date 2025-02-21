
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Blog Admin</title>
    <meta name="description" content="">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/font-admin.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style-admin.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/blogstyle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- <link rel="stylesheet" href="<?php //echo base_url('color/get-color-codes'); ?>"> -->
    <link rel="stylesheet" type="text/css" href="<?php //echo site_url('styles/dynamic.css'); ?>">

    <style>
        .header {
            background-color: <?php echo ($header_background)?$header_background:'#001431'; ?>;
        }
    </style>
</head>

<body>
    <header class="header">
        <nav class="navbar py-3">
            <div class="container-flex px-5 w-100">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <a class="navbar-brand border-0" href="<?php echo base_url('/'); ?>">
                            <img src="<?= base_url() ?>assets/images/logo.png" width="100%" height="50px" alt="logo" title="logo">
                        </a>
                    </div>
                    <div>
                        
                    </div>

                </div>
            </div>
        </nav>
    </header>