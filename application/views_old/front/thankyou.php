<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php $this->load->view('front/common/header') ?> 
<body class="appear-animate">
        
        
    <!-- Page Wrap -->
    <div class="page" id="top">
            <?php $this->load->view('front/include/page_menu')?>
            
        <section class="thankyou">
            <div class="text-center">
                <img width="300" src="<?=base_url()?>assets/images/thankyou.webp" alt="thankyou" title="thankyou" />
                <div class="mt-20">
                    <p class="m-0 text_white">We have Received your information.</p>
                    <p class="m-0 text_white">you'll be redirected to our homepage shortly.</p>
                </div>
            </div>
        </section>            

    </div>

    <?php $this->load->view('front/include/all_modal') ?>

</body>

<?php $this->load->view('front/include/footer')?>

<script type="text/javascript">
$(function () {
    $(document).ready(function(){    
        setTimeout(function(){ 
            window.location.href = "<?php echo site_url('/'); ?>";
        }, 5000);
    })
});
</script>

</html>