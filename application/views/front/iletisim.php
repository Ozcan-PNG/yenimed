<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <title>İletişim </title>
    <meta name="description" content="medico">
    <meta name="keywords" content="medical/medico/hospital">
    <?php $this->load->view('front/sabit/css.php')?>
</head>

<body>

    <?php $this->load->view('front/sabit/menu.php')?>
    <?php $this->load->view('front/sabit/whatsapp.php')?>

    <!-- med_tittle_section-->
    <div class="med_tittle_section">
        <div class="med_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="med_tittle_cont_wrapper">
                        <div class="med_tittle_cont">
                            <h1>Bizimle İletişime Geçin</h1>
                            <ol class="breadcrumb">
                                <li><a href="<?php echo base_url () ?>">Anasayfa</a>
                                </li>
                                <li>İletişim</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- med_tittle_section End-->
    <!--contact us section start -->
    <div class="contact_us_section med_toppadder100 med_bottompadder70">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="choose_heading_wrapper med_bottompadder30">
                        <h1 class="med_bottompadder20">Bize Ulaşın</h1>
                        <img src="<?php echo base_url ('assets/front/') ?>images/line.png" alt="title" class="med_bottompadder20">
                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate.</p>
                    </div>
                    <div class="row">
					<form>
					<div class="cont_main_section">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="contect_form1 dc_cont_div">
                                <input type="text" name="full_name" placeholder="Ad Soyad" class="require">								
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="contect_form1 dc_cont_div">
                                <input type="text" name="email" placeholder="E-mail" class="require" data-valid="email" data-error="Email should be valid.">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="contect_form1 dc_cont_div">
                               <input type="text" name="contact_no" placeholder="Telefon Numarası" class="require">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="contect_form1 dc_cont_div">
                               <input type="text" name="subject" placeholder="Ders">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="contect_form4 dc_cont_div">
                                 <textarea rows="5" name="message" placeholder="İleti" class="require"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="response"></div>			
                            <div class="contact_btn_wrapper med_toppadder30">
                                <button type="button" class="submitForm" form-type="contact">Gönder</button>
                            </div>
                        </div>
                    </div>
					</form>
                </div>
                </div>
            </div>

        </div>
    </div>
    <!--contact us section end-->
    <!-- dc category section start-->
    <div class="category_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="cat_about cont_cat_abt">
                        <div class="icon_wrapper dc_icon_section">
                            <img src="<?php echo base_url ('assets/front/') ?>images/icon_map.png" alt="img" class="img-responsive">
                        </div>

                        <div class="cat_txt cont_cat_txt">
                            <h1>22, margatnet. 2212</h1>
                            <p>Marylebone,London</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="cat_about cont_cat_abt">
                        <div class="icon_wrapper dc_icon_section">
                            <img src="<?php echo base_url ('assets/front/') ?>images/icon_call.png" alt="img" class="img-responsive">
                        </div>


                        <div class="cat_txt cont_cat_txt">
                            <h1>+1800 1256-12365</h1>
                            <p>Mon-Fri 8:30am - 9:30pm</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="cat_about cont_cat_abt">
                        <div class="icon_wrapper dc_icon_section">
                            <img src="<?php echo base_url ('assets/front/') ?>images/icon_envelope.png" alt="img" class="img-responsive">
                        </div>

                        <div class="cat_txt cont_cat_txt cont_last_child">
                            <a href="#"><h1>dummy@exmaple.com</h1></a>
                            <p>24 / 7online help support</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="map_main_wrapper cont_dc_map">
            <!--<div id="map" style="width:100%; float:left; height:600px;"></div>-->

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d102101.87502647699!2d30.647893558600455!3d36.89791689482761!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c39aaeddadadc1%3A0x95c69f73f9e32e33!2sAntalya!5e0!3m2!1str!2str!4v1630455491813!5m2!1str!2str" id="map" height="600px" style="width:100%; float:left;"></iframe>


        </div>
    </div>
    <!-- dc category section end-->
    <?php $this->load->view('front/referanslar.php')?>
    <?php $this->load->view('front/sabit/footer.php')?>
    <?php $this->load->view('front/sabit/js.php')?>

</body>

</html>