<div class="container-fluid Product">
    <div class="row">
        <div class="col-lg-12">
            <div class="col-md-4 col-sm-offset-4">
                <h2>Product</h2>
                <span><i class="fa fa-map-marker"></i> <a href="<?php echo base_url('home'); ?>">Home</a> » Product </span>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid feed">
    <div class="row">
        <div class="container">
            <div class="col-lg-6 col-sm-offset-3">
                <div class="col-md-4">
                    <a href="#">
                        <div class="col-sm-12">
                            <img src="<?php echo base_url() ?>assets/frontend/img/food-and-restaurant.png" class="img-responsive" />
                            <h3>Food</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#">
                        <div class="col-sm-12">
                            <img src="<?php echo base_url() ?>assets/frontend/img/cow.png" class="img-responsive" />
                            <h3>Feed</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <div class="col-sm-12">
                        <img src="<?php echo base_url() ?>assets/frontend/img/multimedia-option.png" class="img-responsive" />
                        <h3>Other</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid food">
    <div class="row">
        <div class="container">
            <h1 class="sec-tit" data-txt="Food"><span><?php echo $this->uri->segment(2); ?></span></h1>
            <div class="col-lg-10 col-sm-offset-1">
                <ul>
			<?php	/*	foreach ($allsubcat as $scat) : ?>
			
              <li><a href="#"><?php echo $scat->subcat_name?></a> / </li>
             <?php endforeach; */?>
            </div>
            <div class="col-lg-12">
                <?php 
				if($allPro): 
				
				foreach ($allPro as $pro) : ?>
                    <div class="col-md-3">
                        <img src="<?php echo base_url() ?>uploads/products/<?php print_r(getProImg($pro->id)); ?>" class="img-responsive" />
                        <div class="col-sm-12">
                            <a href="<?php echo base_url() . 'product/' . $pro->url ?>"><?php echo $pro->title ?></a>
                            <p> <span>E No. | </span><?php echo $pro->eno ?></p>
                            <p> <span>CAS No. | </span><?php echo $pro->casno ?> </p>
                            <p> <span>Min. Order | </span><?php echo $pro->qty ?> </p>
                        </div>
                    </div>
                <?php endforeach; ?>
<?php else: echo "<h3>No Products Listed  Currently" ?>
<?php endif; ?>

                <!--   <button class="btn-default">Food More+</button>-->
            </div>
        </div>
    </div>
</div>