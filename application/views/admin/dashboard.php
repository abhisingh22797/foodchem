<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard
        <small>Control panel</small>
      </h1>
    </section>
    
    <section class="content">
        <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3><?php print_r($ct_request); ?></h3>
                  <p>Contact Requests</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="<?php echo base_url('admin/reports/')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            
          </div>
    </section>
</div>