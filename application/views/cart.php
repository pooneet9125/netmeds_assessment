<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<?php $this->load->view('layout/head'); ?>
<?php $this->load->view('layout/header'); ?>




<main>
  <section class="profilePage">
    <div class="container">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
         <h3 align="center">Your Cart</h3>
        <br />
        <div class="panel panel-default">
            <div class="panel-body">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Test Name</th>
                    <th>Count</th>
                    <th>Price</th>
                    <th>&nbsp;</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $total_amount = 0;
                $total_count = 0;
                foreach ($cart_data as $key => $value) { 
                    
                $total_amount += $value->count*$value->minPrice;
                $total_count += $value->count; ?>
                <tr>
                    <td><?= $value->testName ?></td>
                    <td><input style="width: 25px;text-align: center;" type="text" name="count_<?=$value->test_id ?>" value= "<?= $value->count ?>"></td>
                    <td><?= $value->count*$value->minPrice ?></td>
                    <td><a href="<?=base_url() ?>cart/remove/<?= $value->id ?>" style="background-color: #1976d2;color: white" class="btn">Remove</a></td>
                    
                </tr>
                <?php } ?>
                <tr>
                    <td>Total</td>
                    <td><?= $total_count ?></td>
                    <td><?= $total_amount ?></td>
                    <td><a href="<?= base_url() ?>cart/order"  style="background-color: #1976d2;color: white" class="btn">Pay Now</a></td>
                    
                </tr>

                </tbody>
            </table>
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
