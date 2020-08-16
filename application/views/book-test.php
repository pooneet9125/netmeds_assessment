<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<?php $this->load->view('layout/head'); ?>
<?php $this->load->view('layout/header'); ?>




<main>
  <section class="profilePage">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
              <h2>Book Tests</h2>
          </div>
          <div class="full-width margin_20_0 bg_color_1 mt-4">
              <div class="col-md-12 col-lg-10 mx-auto">
                <div class="row">

                                        <div class="col-sm-6 col-md-6 col-lg-6">
                        <a href="<?php echo base_url(); ?>" class="mdl-1">
                          <div class="left-user">
                               <img src="<?php echo asset_url();?>images/1583731845.jpg" class="resp-img" alt="img" width="" height="">
                               <div class="radius-btn">
                                <div class="box-shadow">Book Laboratory Tests</div>
                              </div>
                           </div>  
                        </a>   
                    </div>
                                        <div class="col-sm-6 col-md-6 col-lg-6">
                        <a href="<?php echo base_url(); ?>" class="mdl-1">
                          <div class="left-user">
                               <img src="<?php echo asset_url();?>images/1583731845.jpg" class="resp-img" alt="img" width="" height="">
                               <div class="radius-btn">
                                <div class="box-shadow">Book Family Package</div>
                              </div>
                           </div>  
                        </a>   
                    </div>
                    
               
                </div>      
              </div>
          </div>  
      </div>
    </div>
  </section>
  <!-- /header-video -->  
</main>
<!-- /main -->

<?php $this->load->view('layout/footer'); ?>
