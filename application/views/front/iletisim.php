<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <title><?php echo $meta['sayfaAdi'] ?> | İletişim </title>
    <meta name="description" content="<?php echo $iletisim['desc'] ?>">
    <meta name="keywords" content="<?php echo $iletisim['key'] ?>">
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
<div class="contact_us_section med_toppadder100 med_bottompadder70">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="choose_heading_wrapper med_bottompadder30">
                    <h1 class="med_bottompadder20">Bize Ulaşın</h1>
                    <img src="<?php echo base_url ('assets/front/') ?>images/line.png" alt="title" class="med_bottompadder20">
                    <p><?php echo $iletisim['yazi'] ?></p>
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
                                <input type="text" name="email" placeholder="E-Posta" class="require" data-valid="email" data-error="Email should be valid.">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="contect_form1 dc_cont_div">
                             <input type="text" name="contact_no" placeholder="Telefon Numarası" class="require">
                         </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="contect_form1 dc_cont_div">
                         <input type="text" name="subject" placeholder="Konu">
                     </div>
                 </div>
                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="contect_form4 dc_cont_div">
                       <textarea rows="5" name="message" placeholder="Mesaj" class="require"></textarea>
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
<div class="category_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="cat_about cont_cat_abt">
                    <div class="icon_wrapper dc_icon_section">
                        <img src="<?php echo base_url ('assets/front/') ?>images/icon_map.png" alt="img" class="img-responsive">
                    </div>

                    <div class="cat_txt cont_cat_txt">
                        <h1>Adres</h1>
                        <p><?php echo $iletisim['adres'] ?></p>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="cat_about cont_cat_abt">
                    <div class="icon_wrapper dc_icon_section">
                        <img src="<?php echo base_url ('assets/front/') ?>images/icon_call.png" alt="img" class="img-responsive">
                    </div>


                    <div class="cat_txt cont_cat_txt">
                        <h1>Telefon</h1>
                        <p><a href="tel:<?php echo $iletisim['tel'] ?>"><?php echo $iletisim['tel'] ?>s</a></p>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="cat_about cont_cat_abt">
                    <div class="icon_wrapper dc_icon_section">
                        <img src="<?php echo base_url ('assets/front/') ?>images/icon_envelope.png" alt="img" class="img-responsive">
                    </div>

                    <div class="cat_txt cont_cat_txt cont_last_child">
                        <h1>E-Posta</h1>
                        <p><a href="tel:<?php echo $iletisim['mail'] ?>"><?php echo $iletisim['mail'] ?></a></p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="map_main_wrapper cont_dc_map">

        <?php echo $iletisim['map'] ?>


    </div>
</div>
<?php $this->load->view('front/referanslar.php')?>
<?php $this->load->view('front/sabit/footer.php')?>
<?php $this->load->view('front/sabit/js.php')?>

</body>

</html>