<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <title><?php echo $meta['sayfaAdi'] ?> | Randevu Al</title>
    <meta name="description" content="<?php echo $meta['anaSayfaDesc'] ?>">
    <meta name="keywords" content="<?php echo $meta['anaSayfaKey'] ?>">
    <?php $this->load->view('front/sabit/css.php')?>
</head>

<body>

    <?php $this->load->view('front/sabit/menu.php')?>
    
    <!-- med_tittle_section -->
    <?php $this->load->view('front/sabit/banner.php')?>
        <div class="med_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="med_tittle_cont_wrapper">
                        <div class="med_tittle_cont">
                            <h1>RANDEVU</h1>
                            <ol class="breadcrumb">
                                <li><a href="<?php echo base_url () ?>">Anasayfa</a>
                                </li>
                                <li>Randevu</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- med_tittle_section End -->
    <!-- appoint_section start -->
    <div class="booking_wrapper book_section med_toppadder100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 col-lg-offset-2">
                    <div class="team_heading_wrapper med_bottompadder50">
                        <h1 class="med_bottompadder20">RANDEVU AL</h1>
                        <img src="<?php echo base_url ('assets/front/') ?>images/Icon_team.png" alt="line" class="med_bottompadder20">
                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="booking_box">
                <div class="row">
                    <form>
                    <div class="box_side_icon">
                        <img src="<?php echo base_url ('assets/front/') ?>images/Icon_bk.png" alt="img">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="contect_form1">
                                <input type="text" name="full_name" placeholder="Full Name" class="require">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="contect_form1">
                                <input type="text" name="email" placeholder="Email" class="require" data-valid="email" data-error="Email should be valid.">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="contect_form1">
                                <input type="text" name="contact_no" placeholder="Phone" class="require">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="contect_form1">
                                <input type="text" name="subject" placeholder="Subject">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="contect_form3">
                                <input type="text" name="date" placeholder="Date" class="require"><i class="fa fa-calendar-o" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="contect_form3">
                                <input type="text" name="time" placeholder="Time" class="require"><i class="fa fa-clock-o" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="contect_form4">
                                <textarea rows="4" name="message" placeholder="Message" class="require"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="response"></div>                            
                            <div class="contect_btn">
                               <button type="button" class="submitForm" form-type="inquiry">Send a Message</button>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
            </div>
            <div class="chat_box chat_box_clr">
                <div class="row">
                    <div class="booking_box_2">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="booking_box_img">
                                <img src="images/booking_call.png" alt="img" class="img-circle">
                            </div>
                            <div class="booking_chat">
                                <h1>+1 800 383 88 90</h1>
                                <p>if urgent. Your personal case manager will ensure that you receive the best possible care.</p>
                            </div>
                            <div class="booking_btn book_btn_resp_1">
                                <ul>
                                    <li><a href="#">LIVE CHAT</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--appoint_section end-->
    <!--available_section start-->
    <div class="booking_wrapper avail_section med_bottompadder90">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 col-lg-offset-2">
                    <div class="team_heading_wrapper med_bottompadder50 wow fadeInDown" data-wow-delay="0.4s">
                        <h1 class="med_bottompadder20">Musait Randevular</h1>
                        <img src="<?php echo base_url ('assets/front/') ?>images/Icon_team.png" alt="line" class="med_bottompadder20">
                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate.</p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="app">
                        <div class="app__main">
                            <div class="calendar">
                                <div id="calendar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('front/referanslar.php')?>
    <?php $this->load->view('front/sabit/footer.php')?>
    <?php $this->load->view('front/sabit/js.php')?>

</body>

</html>