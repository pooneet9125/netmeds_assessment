<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<?php $this->load->view('layout/head'); ?>
<?php $this->load->view('layout/header'); ?>




<main>
  <section class="profilePage">
    <div class="container">
      
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
         <h3 align="center" style="color: #239b27">ORDER PLACED</h3>
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
                    <td><?= $value->count ?></td>
                    <td><?= $value->count*$value->minPrice ?></td>
                    <td></td>
                    
                </tr>
                <?php } ?>
                <tr>
                    <td>Total</td>
                    <td><?= $total_count ?></td>
                    <td><?= $total_amount ?></td>
                    <td style="color: #239b27" >PAID</td>
                    
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
