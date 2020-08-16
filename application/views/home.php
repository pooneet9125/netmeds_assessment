<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<?php $this->load->view('layout/head'); ?>
<?php $this->load->view('layout/header'); ?>




<main>
  <section class="profilePage">
    <div class="container">
      <div class="row align-items-center">
        
          <?php if($this->session->userdata('id')){ ?>
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <u><h2>ASSESSMENT TEST</h2></u>
            </div>

            <div class="full-width margin_20_0 bg_color_1 mt-4">
                <div class="col-md-12 col-lg-10 mx-auto">
                  <div class="row">

                    <div class="col-sm-3 col-md-3 col-lg-3">
                          
                      </div>

                                          <div class="col-sm-6 col-md-6 col-lg-6">
                          <a href="<?php echo base_url(); ?>test/list" class="mdl-1">
                            <div class="left-user">
                                 <img src="<?php echo asset_url();?>images/1583731845.jpg" class="resp-img" alt="img" width="" height="">
                                 <div class="radius-btn">
                                  <div class="box-shadow">Book Tests / Packages</div>
                                </div>
                             </div>  
                          </a>   
                      </div>
                                          
                      
                 
                  </div>      
                </div>
            </div>
          </div> 
        <?php }else{ ?>
            <div class="col-lg-5 col-xl-5">
            <div class="banner_text">
            <div class="banner_text_iner">
            <h5>We are here for your care</h5>
            <h1>Best Care &
            Better Doctor</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing
            elit sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua. Quis ipsum suspendisse ultrices gravida.Risus cmodo viverra </p>
            <a href="<?= base_url() ?>login" class="btn_2">Book Lab Test/Package</a>
            </div>
            </div>
            </div>
            <div class="col-lg-7">
            <div class="banner_img">
            <img src="<?php echo asset_url();?>images/index.png" alt="">
            </div>
            </div>
        <?php } ?>
      
    </div>
  </section>
  <!-- /header-video -->  
</main>
<!-- /main -->

<?php $this->load->view('layout/footer'); ?>
