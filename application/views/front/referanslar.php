<div class="partner_wrapper med_bottompadder80 med_toppadder80">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="partner_slider_img">
                    <div class="owl-carousel owl-theme">
                      <?php foreach ($referanslar as $referans): ?>
                       <div class="item">
                        <img src="<?php echo base_url ($referans['resim']) ?>" class="img-responsive" alt="<?php echo $meta['sayfaAdi'] ?>">
                    </div>
                <?php endforeach ?>                    
            </div>
        </div>
    </div>
</div>
</div>
</div>