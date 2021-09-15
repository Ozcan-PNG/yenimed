<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $meta['sayfaAdi'] ?> | Galeri</title>
    <meta name="description" content="<?php echo $meta['galeriDesc'] ?>">
    <meta name="keywords" content="<?php echo $meta['galeriDesc'] ?>s">

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
                        <h1>Galeri</h1>
                        <ol class="breadcrumb">
                            <li><a href="<?php echo base_url () ?>">Anasayfa</a>
                            </li>
                            <li>Galeri</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="portfolio-area med_toppadder100">
    <div class="container">
        <div class="row three-column">
            <div id="gridWrapper" class="clearfix">
                <?php foreach ($galeris as $galeri): ?>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 portfolio-wrapper III_column" data-groups='["all", "business", "website", "photoshop"]'>
                        <div class="portfolio-thumb">
                            <div class="port_img_wrapper">
                                <img src="<?php echo base_url ($galeri['resim']) ?>" alt="<?php echo $galeri['baslik'] ?>">
                            </div>
                            <div class="portfolio_icon_wrapper_3 zoom_popup">
                                <a class="img-link" href="<?php echo base_url ($galeri['resim']) ?>"> <i class="fa fa-search-plus"></i>
                                </a>
                            </div>
                            <div class="portfolio-content">
                                <div class="portfolio-info_3">
                                    <h3><?php echo $galeri['baslik'] ?></h3>
                                    <p class="hidden-xs"><?php echo $galeri['yazi'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</section>
<?php $this->load->view('front/referanslar.php')?>
<?php $this->load->view('front/sabit/footer.php')?>
<?php $this->load->view('front/sabit/js.php')?>

</body>

</html>