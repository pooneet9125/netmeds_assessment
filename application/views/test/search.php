<?php $this->load->view('layout/head'); ?>
<?php $this->load->view('layout/header'); ?>




<main>
  <div class="profilePage">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <center><h2>Search Results</h2></center>
        </div>
      </div>
    </div>
    <!-- /container -->
    <div class="full-width margin_50_0 bg_color_1">
      <div class="container">
       
        <?php foreach ($test as $key => $value) { ?>
          <div class="item col-xs-4">
            <div class="thumbnail">
                <img class="group list-group-image" src="<?php echo asset_url();?>images/labtest.jpg" alt=""  />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading"><?= $value->testName ?><?= $value->labName ?></h4>
                    <p class="group inner list-group-item-text">
                      <?= $value->labName ?><br>
                      Fasting Required - <?php if($value->labName == 0){echo "NO";}else{echo "YES";} ?><br>
                      Total Number of Test - <?= $value->testCount ?>
                    </p>
                    <br><br>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead"><?= $value->minPrice ?>&#8377;</p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <form action="<?php echo base_url(); ?>cart/add" method="POST">
                              <input type="hidden" name="test_id" value="<?= $value->id ?>">
                              <button class="btn_1" type="submit">Add to cart</button>
                           </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       <?php } ?>
      </div>
    </div>
  </div>
</main>


<script>
  $( function() {
    var availableTags = [<?= $search_array ?>];
    $( ".search" ).autocomplete({
      source: availableTags
    });
  } );

</script>


<?php $this->load->view('layout/footer'); ?>
