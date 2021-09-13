<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <title>Hakkımızda</title>
    <meta name="description" content="medico">
    <meta name="keywords" content="medical/medico/hospital">
    <?php $this->load->view('front/sabit/css.php')?>
</head>

<body>

    <?php $this->load->view('front/sabit/menu.php')?>
    <?php $this->load->view('front/sabit/whatsapp.php')?>

      <!--med_tittle_section-->
    <div class="med_tittle_section">
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
                        <img src="<?php echo base_url ('assets/front/') ?>images/about_us_bg.jpg" alt="img" class="img-responsive">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 med_toppadder70">
                    <div class="abt_heading_wrapper abt_2_heading">
                        <h1 class="med_bottompadder20">Tıp Hakkında</h1>
                        <img src="<?php echo base_url ('assets/front/') ?>images/line.png" alt="title" class="med_bottompadder20">
                    </div>
                    <div class="abt_txt">
                        <h3>Specialty Medicine with Compassion and Car Proin gravida nibh vel velit</h3>
                        <p class="med_toppadder20">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, aks lorem quis bibendum auctor, nisi el ipsum, nec sagittis sem nibh id elit. Dui Duis sed odiit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate..</p>
                    </div>
                    <div class="abt_chk med_toppadder30">
                        <div class="content">
                            <ul>
                                <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Health Care For All Types</span>
                                </li>
                                <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Emergency Services</span>
                                </li>
                                <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Dental Care Dentist.</span>
                                </li>
                                <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>24/7 Services</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="abt_heading_wrapper abt_2_heading_mn">
                        <h1 class="med_bottompadder20">Misyonumuz </h1>
                        <img src="<?php echo base_url ('assets/front/') ?>images/line.png" alt="title" class="med_bottompadder20">
                    </div>
                    <div class="abt_txt">
                        <p class="med_toppadder20">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, aks lorem quis bibendum auctoruis sed odio sit amet nibh vulputate..</p>
                        <p class="med_toppadder10">Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum  ipsum, nec sagittis sem nibh id elit. Dui Duis sed odi consequat ipsum, nec sagittis sem nibh id elit. Dui Duis sed odio sit.</p>
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