    <!-- footer wrapper start-->
    <div class="footer_wrapper">
        <div class="container">
            <div class="box_1_wrapper">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="address_main">
                            <div class="footer_widget_add">
                                <a href="">
                                    <img src="<?php echo base_url ('assets/front/') ?>images/footer_logo.png" class="img-responsive" alt="<?php echo $meta['sayfaAdi'] ?>"></a>
                                    <p><?php echo word_limiter($hakkimizda['yazi'],12) ?> </p>
                                    <a href="<?php echo base_url('hakkimizda') ?>">Daha Fazla<i class="fa fa-long-arrow-right"></i></a>
                                </div>
                                <div class="footer_box_add">
                                    <ul>
                                      <li><i class="fa fa-map-marker" aria-hidden="true"></i><span>Address : </span><?php echo $iletisim['adres'] ?></li>
                                      <li><i class="fa fa-phone" aria-hidden="true"></i><span>Call us : </span><?php echo $iletisim['tel'] ?></li>
                                      <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="#"><span>Email :</span> <?php echo $iletisim['mail'] ?></a></li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!--footer_1-->
              <div class="booking_box_div">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="footer_main_wrapper">
                         
                     <!--footer_2-->
                     <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 respons_footer_nav hidden-xs">
                        <div class="footer_heading footer_menu">
                            <h1 class="med_bottompadder10">BAĞLANTILAR</h1>
                            <img src="<?php echo base_url ('assets/front/') ?>images/line.png" class="img-responsive" alt="img">
                        </div>
                        <div class="footer_ul_wrapper">
                            <ul>
                                <li><i class="fa fa-caret-right" aria-hidden="true"></i> <a href="#">home</a></li>
                                <li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="#">about us</a></li>
                                <li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="#">services</a></li>
                                <li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="#">doctors</a></li>
                                <li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="#">blog</a></li>
                                <li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="#">contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--footer_3-->
                    <div class="col-lg-5 col-md-5 col-sm-6 col-xs-6 contact_last_div">
                        <div class="footer_heading">
                            <h1 class="med_bottompadder10">Opening Hours</h1>
                            <img src="<?php echo base_url ('assets/front/') ?>images/line.png" class="img-responsive" alt="img">
                        </div>
                        <div class="footer_cnct">
                            <?php foreach ($calisma_saatleri as $key): ?>
                               <p><?php echo $key['gun'] ?><span><?php echo $key['saat'] ?></span></p>
                           <?php endforeach ?>
                       </div>
                   </div>
                   <!--footer_4-->
               </div>
           </div>
           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="footer_botm_wrapper">
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="bottom_footer_copy_wrapper">
                   <span>Copyright © <?php echo date('Y') ?> <?php echo $meta['sayfaAdi'] ?> | Coded by <a href="https://www.pngyazilim.com/">Png Yazılım.</a></span>
               </div>
               <div class="footer_btm_icon">
                <ul>
                   <?php foreach ($sosyal_medya as $key): ?>
                    <li>
                        <a target="_blank" href="<?php echo $key['url'] ?>"><i class="fa fa-<?php echo $key['sef'] ?>" aria-hidden="true">
                        </i>
                    </a>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
</div>
</div>
</div>
<!--footer_5-->
</div>
</div>
</div>
<div class="container-fluid">
    <div class="up_wrapper">
        <a href="javascript:" id="return-to-top"><i class="fa fa-arrow-circle-o-up" aria-hidden="true"></i></a>
    </div>
</div>
</div>
    <!--footer wrapper end-->