<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php $this->load->view('layout/head'); ?>
<?php $this->load->view('layout/header'); ?>

<main>
    <section class="profilePage">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-xl-5">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h5>Use Credentials To Login In.</h5><br>
                            <p>Email Address : ervineet.k2591@gmail.com</p>
                            <p>Password : netmeds </p>
                        </div>
                    </div>
                    <div class="banner_img">
                        <img src="<?php echo asset_url();?>images/login_page.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-7">
                    <br />
                    <h3 align="center">Login Form</h3>
                    <br />
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <?php
                            if($this->session->flashdata('message'))
                            {
                                echo '
                                <div class="alert alert-success">
                                    '.$this->session->flashdata("message").'
                                </div>
                                ';
                            }
                            ?>
                            <form method="post" action="<?php echo base_url(); ?>login/validation">
                                <div class="form-group">
                                    <label>Enter Your Email Address</label>
                                    <input type="text" name="user_email" class="form-control" value="<?php echo set_value('user_email'); ?>" />
                                    <span class="text-danger"><?php echo form_error('user_email'); ?></span>
                                </div>
                                <div class="form-group">
                                    <label>Enter Your Password</label>
                                    <input type="password" name="user_password" class="form-control" value="<?php echo set_value('user_password'); ?>" />
                                    <span class="text-danger"><?php echo form_error('user_password'); ?></span>
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="login" value="Login" class="btn btn-login" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </section>
  <!-- /header-video -->  
</main>
<!-- /main -->

<style>
    .profilePage {
        padding: 200px 0px 50px !important;
    }
</style>

<?php $this->load->view('layout/footer'); ?>
