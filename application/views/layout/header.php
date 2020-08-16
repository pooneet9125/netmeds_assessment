<!-- body -->   
<body>
<!-- page -->    
<div id="page">
<!-- header -->  
<header class="header menu_fixed" id="header">
  <div id="preloader"><div data-loader="circle-side"></div></div><!-- /Page Preload -->
  <div class="container">
    <!-- top_menu -->
    <div class="col-md-12">
      <!-- logo -->
      <div class="logo col-sm-2">
        <a href="<?= base_url(); ?>">
          <img src="<?php echo asset_url();?>images/logo.jpg" width="50" height="auto" data-retina="true" alt="" class="logo_normal">
          <img src="<?php echo asset_url();?>images/logo.jpg" width="50" height="auto" data-retina="true" alt="" class="logo_sticky">
        </a>
      </div>
      <!-- /logo -->

      <!-- Search -->
      <div class="search col-sm-7">
        <?php if($this->session->userdata('id')){ ?>
         <form class="w-100" action="<?php echo base_url(); ?>test/search" method="POST">
            <div class="">
              <div class="">
                <div class="row no-gutters">
                  <div class="col-12 col-sm-9 col-lg-9 col-lg-9 col-xl-9">
                    <div class="form-group">
                      <input class="form-control search" name="search" type="text" placeholder="Search Tests & Packages..." data-type="" data-id="" style="height: 38px;">
                    </div>
                    <div class="search-suggestion-list"> 
                    </div>
                  </div>
                  <div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                    <input type="submit" class="btn_1" value="Search">
                  </div>
                </div>
              </div>
            </div>
          </form>
          <?php } ?>
      </div>
      <!-- /Search -->

      <!-- login -->
      <div class="loginbtn col-sm-2">
        <ul id="top_menu">
            
          <?php if($this->session->userdata('id')){ ?>
            <li><a href="<?= base_url() ?>testlab/logout" class="btn_2 rounded btn-log"><i class="icon-login"></i> Logout</a></li>

          <?php }else{ ?>
            <li><a href="<?= base_url() ?>login" class="btn_2 rounded btn-log"><i class="icon-login"></i> Login</a></li>
          <?php } ?>
             
        </ul>
      </div>
      <!-- /login -->

      <!-- Cart -->
      <div class="cart col-sm-1">
        <nav id="menu" class="main-menu">
          <ul>
              <li><span style="color: black" ><a href="<?= base_url() ?>cart"><i class="fa fa-shopping-cart" style="font-size:24px;color:black"></i> &nbsp;<?php echo $this->session->userdata('basket_count'); ?></a> </span></li>
          </ul>
        </nav>
      </div>
      <!-- /cart -->

    </div>

    <!-- /top_menu -->

  </div>
</header>
<!-- header -->
