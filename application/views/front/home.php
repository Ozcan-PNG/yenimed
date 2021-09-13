<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <title>Hospital</title>

   
    <meta name="description" content="medico">
    <meta name="keywords" content="medical/medico/hospital">
    <?php $this->load->view('front/sabit/css.php')?>
    
</head>

<body>

    <?php $this->load->view('front/sabit/menu.php')?>

    <!--slider wrapper start-->
    <div class="slider_main_wrapper">
        <div class="cc_slider_img_section">
            <div class="owl-carousel owl-theme">
                <?php foreach ($sliders as $slider): ?>
                   <div class="item cc_main_slide1">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                                <div class="cc_slider_cont1_wrapper">
                                    <div class="cc_slider_cont1">
                                        <h2 data-animation-in="fadeInDown" data-animation-out="animate-out fadeOutDown"><?php echo $slider['baslik'] ?></h2>
                                        <p data-animation-in="zoomIn" data-animation-out="animate-out zoomIn"><?php echo word_limiter($slider['yazi'],10); //yazıyı kısaltmak için wordlimiter ?></p>
                                        <ul>
                                            <li data-animation-in="bounceInLeft" data-animation-out="animate-out bounceOutLeft"><a href="<?php echo base_url('sliderDetay'.$slider['sef']) ?>">DEVAMINI OKU</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                <?php endforeach ?>               
            </div>
        </div>
    </div>
    <!--slider wrapper end-->
    
    <!--category wrapper start-->
    <div class="category_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="cat_about">
                        <div class="icon_wrapper">
                            <img src="<?php echo base_url ('assets/front/') ?>images/icon1.png" alt="img" class="img-responsive">
                        </div>
                        <div class="cat_img">
                            <img src="<?php echo base_url ('assets/front/') ?>images/icon_11.png" alt="img" class="img-responsive">
                        </div>
                        <div class="cat_txt">
                            <h1>Kalp Ameliyatı</h1>
                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin at the good health for you.</p>
                            <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="cat_about">
                        <div class="icon_wrapper">
                            <img src="<?php echo base_url ('assets/front/') ?>images/icon2.png" alt="img" class="img-responsive">
                        </div>
                        <div class="cat_img">
                            <img src="<?php echo base_url ('assets/front/') ?>images/icon_2.png" alt="img" class="img-responsive">
                        </div>
                        <div class="cat_txt">
                            <h1>Acil Bakım</h1>
                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin at the good health for you.</p>
                            <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="cat_about">
                        <div class="icon_wrapper">
                            <img src="<?php echo base_url ('assets/front/') ?>images/icon3.png" alt="img" class="img-responsive">
                        </div>
                        <div class="cat_img cat_img_3">
                            <img src="<?php echo base_url ('assets/front/') ?>images/icon_3.png" alt="img" class="img-responsive">
                        </div>
                        <div class="cat_txt">
                            <h1>Diş Bakımı</h1>
                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin at the good health for you.</p>
                            <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--category wrapper end-->
    <!--about us wrapper start-->
    <div class="about_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="abt_img abt_box">
                        <img src="<?php echo base_url ('assets/front/') ?>images/abt_img.jpg" alt="img">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 abt_section">
                    <div class="abt_heading_wrapper">
                        <h1 class="med_bottompadder20">Tıp Hakkında</h1>
                        <img src="<?php echo base_url ('assets/front/') ?>images/line.png" alt="title" class="med_bottompadder20">
                    </div>
                    <div class="abt_txt">
                        <h3>Specialty Medicine with Compassion and Car Proin gravida nibh vel velit</h3>
                        <p class="med_toppadder20">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, aks lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate..</p>
                        <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit.</p>
                    </div>
                    <div class="abt_chk med_toppadder30">
                        <div class="content">
                            <ul>
                                <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Health Care For All Types</span></li>
                                <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Emergency Services</span></li>
                                <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Dental Care Dentist.</span></li>
                                <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>24/7 Services</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--about us wrapper end-->
    <!--appoint wrapper start-->
    <div class="container">
        <div class="appoint_wrapper">
            <div class="appoint_overlay"></div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 resp_apoint">
                <div class="appoint_icon">
                    <img src="<?php echo base_url ('assets/front/') ?>images/Icon_clock.png" alt="img" class="img-responsive">
                </div>
                <div class="appoint_box">
                    <h1 class="med_bottompadder30">Opening Hours</h1>
                    <p>Monday – Friday ---------------------------<span>09:00-17:00</span></p>
                    <p>Saturday --------------------------------------<span>09:30-17:00</span></p>
                    <p>Sunday ----------------------------------------<span>10:30-18:00</span></p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 resp_apoint_1">
                <div class="appoint_box box_2">
                    <h1 class="med_bottompadder30">BOOK AN APPOINTMENT</h1>
                    <div class="appoint_form">
                        <ul>
                            <li><a href="#">Email : hospital@example.com</a></li>
                            <li> Fax : 1800 1245 1253</li>
                        </ul>
                    </div>
                    <h2><i class="flaticon-24-hours-phone-service"></i>
												Emergency Call +1 800-123-132</h2>
                </div>
            </div>
        </div>
    </div>
    <!--appoint wrapper end-->
    <!--choose wrapper start-->
    <div class="choose_wrapper med_toppadder100">
        <div class="choose_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="choose_heading_wrapper">
                        <h1 class="med_bottompadder20">Neden Bizi Seçmelisiniz</h1>
                        <img src="<?php echo base_url ('assets/front/') ?>images/line.png" alt="title" class="med_bottompadder30">
                    </div>
                    <div class="sidebar_wrapper">
                        <div class="accordionFifteen">
                            <div class="panel-group" id="accordionFifteenLeft" role="tablist">
                                <div class="panel panel-default sidebar_pannel">
                                    <div class="panel-heading desktop">
                                        <h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordionFifteenLeft" href="#collapseFifteenLeftone" aria-expanded="false">- We are always carefull to our patient  and service</a>
												</h4>
                                    </div>
                                    <div id="collapseFifteenLeftone" class="panel-collapse collapse in" aria-expanded="true" role="tabpanel">
                                        <div class="panel-body">
                                            <div class="panel_cont">
                                                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, aks lorem quis bibendum auctor, nisi elit c nibh vulputate..</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.panel-default -->
                                <div class="panel panel-default sidebar_pannel">
                                    <div class="panel-heading horn">
                                        <h4 class="panel-title">
													<a class="collapsed" data-toggle="collapse" data-parent="#accordionFifteenLeft" href="#collapseFifteenLeftTwo" aria-expanded="false">- Who has access to my Health Records</a>
												</h4>
                                    </div>
                                    <div id="collapseFifteenLeftTwo" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;" role="tabpanel">
                                        <div class="panel-body">
                                            <div class="panel_cont">
                                                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, aks lorem quis bibendum auctor, nisi elit c nibh vulputate..</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.panel-default -->
                                <div class="panel panel-default sidebar_pannel">
                                    <div class="panel-heading bell">
                                        <h4 class="panel-title">
													<a class="collapsed" data-toggle="collapse" data-parent="#accordionFifteenLeft" href="#collapseFifteenLeftThree" aria-expanded="false">- We are always carefull to our patient  and service</a>
												</h4>
                                    </div>
                                    <div id="collapseFifteenLeftThree" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;" role="tabpanel">
                                        <div class="panel-body">
                                            <div class="panel_cont">
                                                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, aks lorem quis bibendum auctor, nisi elit c nibh vulputate..</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.panel-default -->
                                <div class="panel panel-default sidebar_pannel">
                                    <div class="panel-heading bell">
                                        <h4 class="panel-title">
													<a class="collapsed" data-toggle="collapse" data-parent="#accordionFifteenLeft" href="#collapseFifteenLeftFour" aria-expanded="false">- We are always carefull to our patient  and service</a>
												</h4>
                                    </div>
                                    <div id="collapseFifteenLeftFour" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;" role="tabpanel">
                                        <div class="panel-body">
                                            <div class="panel_cont">
                                                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, aks lorem quis bibendum auctor, nisi elit c nibh vulputate..</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.panel-default -->
                                <div class="panel panel-default sidebar_pannel">
                                    <div class="panel-heading bell">
                                        <h4 class="panel-title">
													<a class="collapsed" data-toggle="collapse" data-parent="#accordionFifteenLeft" href="#collapseFifteenLeftfive" aria-expanded="false">- We are always carefull to our patient  and service</a>
												</h4>
                                    </div>
                                    <div id="collapseFifteenLeftfive" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;" role="tabpanel">
                                        <div class="panel-body">
                                            <div class="panel_cont">
                                                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, aks lorem quis bibendum auctor, nisi elit c nibh vulputate..</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.panel-default -->
                                <div class="panel panel-default sidebar_pannel">
                                    <div class="panel-heading bell">
                                        <h4 class="panel-title">
													<a class="collapsed" data-toggle="collapse" data-parent="#accordionFifteenLeft" href="#collapseFifteenLeftsix" aria-expanded="false">- We are always carefull to our patient  and service</a>
												</h4>
                                    </div>
                                    <div id="collapseFifteenLeftsix" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;" role="tabpanel">
                                        <div class="panel-body">
                                            <div class="panel_cont">
                                                <p>Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.panel-default -->
                            </div>
                            <!--end of /.panel-group-->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="owl_box">
                        <div class="med_slider_img">
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <img src="<?php echo base_url ('assets/front/') ?>images/chs_slider_img.jpg" class="img-responsive" alt="story_img">
                                </div>
                                <div class="item">
                                    <img src="<?php echo base_url ('assets/front/') ?>images/chs_slider_img.jpg" class="img-responsive" alt="story_img">
                                </div>
                                <div class="item">
                                    <img src="<?php echo base_url ('assets/front/') ?>images/chs_slider_img.jpg" class="img-responsive" alt="story_img">
                                </div>
                                <div class="item">
                                    <img src="<?php echo base_url ('assets/front/') ?>images/chs_slider_img.jpg" class="img-responsive" alt="story_img">
                                </div>
                                <div class="item">
                                    <img src="<?php echo base_url ('assets/front/') ?>images/chs_slider_img.jpg" class="img-responsive" alt="story_img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--choose wrapper end-->
    <!--vedio wrapper start-->
    <div class="vedio_wrapper">
        <div class="vedio_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="vedio_heading_wrapper wow fadeInDown" data-wow-delay="0.5s">
                        <h1 class="med_bottompadder20">Welcome to Hospital</h1>
                        <img src="<?php echo base_url ('assets/front/') ?>images/Icon_team.png" alt="line" class="med_bottompadder20">
                        <p>We Care about everything what you want</p>
                        <h4><a class="popup-youtube" href="../../../embed/xImpyYRVGOc.html"><img src="<?php echo base_url ('assets/front/') ?>images/Play-Icon.png" alt="Play"> play video</a></h4>
                        <div class="video_btn_wrapper right">
                            <ul>
                                <li><a class="btn" href="#">About Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--vedio wrapper end-->
    <!-- counter wrapper start-->
    <div class="counter_section">
        
    </div>
    <?php $this->load->view('front/referanslar.php')?>
    <?php $this->load->view('front/sabit/footer.php')?>
    <?php $this->load->view('front/sabit/js.php')?>
</body>

</html>