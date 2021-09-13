<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $meta['sayfaAdi'] ?> | Galeri</title>
    <meta name="description" content="<?php echo $meta['galeriDesc'] ?>">
    <meta name="keywords" content="<?php echo $meta['galeriDesc'] ?>">

    <?php $this->load->view('front/sabit/css.php')?>

</head>

<body>

    <?php $this->load->view('front/sabit/menu.php')?>

    <!--med_tittle_section-->
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
    <!-- med_tittle_section End -->
    <!-- portfolio-section start -->
    <section class="portfolio-area med_toppadder100">
        <div class="container">
            <div class="row three-column">
                <div id="gridWrapper" class="clearfix">
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 portfolio-wrapper III_column" data-groups='["all", "website", "photoshop"]'>
                        <div class="portfolio-thumb">
                            <div class="port_img_wrapper">
                                <img src="<?php echo base_url ('assets/front/') ?>images/dc_galry_img_1.jpg" alt="filter_img">
                            </div>
                            <div class="portfolio_icon_wrapper_3 zoom_popup">
                                <a class="img-link" href="<?php echo base_url ('assets/front/') ?><?php echo base_url ('assets/front/') ?>images/dc_galry_img_1.jpg">
                                    <i class="fa fa-search-plus"></i>
                                </a>
                            </div>

                            <div class="portfolio-content">
                                <div class="portfolio-info_3">
                                    <h3>Satisfied Patients</h3>
                                   <p class="hidden-xs">Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh elit. </p>
                                </div>
                                <!-- portfolio-info -->


                            </div>
                            <!-- portfolio-content -->

                        </div>
                        <!-- /.portfolio-thumb -->
                    </div>


                </div>
                <!--/#gridWrapper-->
            </div>
        </div>
        <!-- /.container -->
    </section>
    
    <?php $this->load->view('front/referanslar.php')?>
    <?php $this->load->view('front/sabit/footer.php')?>
    <?php $this->load->view('front/sabit/js.php')?>

</body>

</html>