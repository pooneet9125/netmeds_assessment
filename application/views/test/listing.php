<?php $this->load->view('layout/head'); ?>
<?php $this->load->view('layout/header'); ?>
<main>
  <div class="profilePage">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <center><h2>Tests/Packages</h2></center>
        </div>
      </div>
    </div>
    <!-- /container -->
    <div class="full-width margin_50_0 bg_color_1">
      <div class="container">
        <div class="tabs tabs-bordered">
          <!-- /.nav-tabs -->
          <div class="tab-content lg-top">
            <div class="accordion" id="accordionExample">
              <div class="tab-pane card" id="topdoc-tab-bordered-1">
                <div class="well well-sm card-header" id="headingOne">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="float: left;">
                      Lab Test Packages
                  </button>
                  <div class="btn-group list-grid">
                      <a href="#" id="list_grid" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list">
                      </span>List</a> <a href="#" id="grid_grid" class="btn btn-default btn-sm"><span
                          class="glyphicon glyphicon-th"></span>Grid</a>
                  </div>
                </div>
                <div id="collapseOne" class="collapse row" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <?php foreach ($package as $key => $value) { ?>
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
              <div class="tab-pane active card" id="clinic-tab-bordered-1">
                <div class="well well-sm card-header" id="headingTwo">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="float:left;">
                      Lab Test
                  </button>
                  <div class="btn-group list-grid">
                      <a href="#" id="list" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list">
                      </span>List</a> <a href="#" id="grid" class="btn btn-default btn-sm"><span
                          class="glyphicon glyphicon-th"></span>Grid</a>
                  </div>
                </div>

                <div id="collapseTwo" class="collapse row" aria-labelledby="headingTwo" data-parent="#accordionExample">
                  <div class="col-lg-12">
                    <div class="isotope-wrapper">
                      <div class="row clinic_list_filtered">
                      </div>
                      <div class="row" id="labtest">
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
                </div>
                <!-- end row -->
              </div>
            </div>
          </div>
        </div>
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

  $(document).ready(function() {
    $('#list').click(function(event){
      event.preventDefault();
      $('#labtest .item').addClass('list-group-item');
    });
    $('#grid').click(function(event){
      event.preventDefault();
      $('#labtest .item').removeClass('list-group-item');
      $('#labtest .item').addClass('grid-group-item');
    });
    $('#list_grid').click(function(event){
      event.preventDefault();
      $('#collapseOne .item').addClass('list-group-item');
    });
    $('#grid_grid').click(function(event){
      event.preventDefault();
      $('#collapseOne .item').removeClass('list-group-item');
      $('#collapseOne .item').addClass('grid-group-item');
    });
  });
  </script>


<?php $this->load->view('layout/footer'); ?>
