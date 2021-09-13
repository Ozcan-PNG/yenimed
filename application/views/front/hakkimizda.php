<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <title>Hakkımızda</title>
    <meta name="description" content="<?php echo $hakkimizda['desc'] ?>">
    <meta name="keywords" content="<?php echo $hakkimizda['desc'] ?>">
    <?php $this->load->view('front/sabit/css.php')?>
</head>

<body>

    <?php $this->load->view('front/sabit/menu.php')?>
    <?php $this->load->view('front/sabit/whatsapp.php')?>

    <!--med_tittle_section-->
    <?php $this->load->view('front/sabit/banner.php')?>
    <div class="med_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="med_tittle_cont_wrapper">
                    <div class="med_tittle_cont">
                        <h1>Hakkımızda</h1>
                        <ol class="breadcrumb">
                            <li><a href="<?php echo base_url () ?>">Anasayfa</a>
                            </li>
                            <li>Hakkımızda</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- med_tittle_section End -->
<!--about us section start-->
<div class="about_us_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="about_img">
                    <img src="<?php echo base_url ().$hakkimizda['resim'] ?>" alt="<?php echo $meta['sayfaAdi'] ?>" class="img-responsive">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 med_toppadder70">
                <div class="abt_heading_wrapper abt_2_heading">
                    <h1 class="med_bottompadder20">Hakkımızda</h1>
                    <img src="<?php echo base_url ('assets/front/') ?>images/line.png" alt="<?php echo $meta['sayfaAdi'] ?>" class="med_bottompadder20">
                </div>
                <div class="abt_txt">
                  <?php echo $hakkimizda['yazi'] ?>
              </div>

          </div>
      </div>
  </div>
</div>
<!--about us section end-->



<!-- counter wrapper start-->
<div class="top_service_wrapper">
 <!-- bu divi silince sayfa siyaha dönüyor -->
</div>
<!-- top service wrapper end-->



<?php $this->load->view('front/referanslar.php')?>
<?php $this->load->view('front/sabit/footer.php')?>
<?php $this->load->view('front/sabit/js.php')?>
</body>

</html>