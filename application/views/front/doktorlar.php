<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <title><?php echo $meta['sayfaAdi'] ?> | Doktorlarımız</title>
    <meta name="description" content="<?php echo $meta['doktorlarDesc'] ?>">
    <meta name="keywords" content="<?php echo $meta['doktorlarKey'] ?>">
    <?php $this->load->view('front/sabit/css.php')?>
</head>

<body>
    <?php $this->load->view('front/sabit/menu.php')?>
    <?php $this->load->view('front/sabit/banner.php')?>
    <div class="med_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="med_tittle_cont_wrapper">
                    <div class="med_tittle_cont">
                        <h1>Doktorlarımız</h1>
                        <ol class="breadcrumb">
                            <li><a href="<?php echo base_url () ?>">Anasayfa</a>
                            </li>
                            <li>Doktorlarımız</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio_section med_toppadder100 med_bottompadder70">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 col-lg-offset-2">
                <div class="team_heading_wrapper med_bottompadder40">
                    <h1 class="med_bottompadder20">UZAMANLARIMIZLA TANIŞIN</h1>
                    <img src="<?php echo base_url ('assets/front/') ?>images/Icon_team.png" alt="line" class="med_bottompadder20">
                </div>
            </div>
        </div>
    </div>
    <section class="portfolio-area">
        <div class="container">
            <div class="row">
                <div id="gridWrapper" class="clearfix">
                   <?php foreach ($doktorlar as $doktor): ?>
                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 portfolio-wrapper III_column med_bottompadder30 resp_div_img" data-groups='["all", "website", "logo"]'>
                        <div class="team_about our_doc_main dc_porftfolio_img">
                            <div class="team_icon_wrapper">
                                <img src="<?php echo base_url ('assets/front/') ?>images/001-time.png" alt="img" class="img-responsive">
                            </div>
                            <div class="team_img special_team_img_mn">
                                <img src="<?php echo base_url ($doktor['resim']) ?>" alt="<?php echo $doktor['adSoyad'] ?>" class="img-responsive">
                            </div>
                            <div class="team_txt">
                                <h1><a href="#"><?php echo $doktor['adSoyad'] ?></a></h1>
                                <p><?php echo $doktor['alani'] ?></p>
                            </div>
                        </div>

                    </div>

                <?php endforeach ?>
            </div>
        </div>
    </div>
</section>
</div>

<?php $this->load->view('front/referanslar.php')?>
<?php $this->load->view('front/sabit/footer.php')?>
<?php $this->load->view('front/sabit/js.php')?>

</body>

</html>