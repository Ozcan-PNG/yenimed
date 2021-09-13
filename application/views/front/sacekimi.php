<!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="utf-8">
    <title>Hizmetler / Saç Ekimi </title>
    <meta name="description" content="medico">
    <meta name="keywords" content="medical/medico/hospital">
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
							<h1>Saç Ekimi</h1>
							<ol class="breadcrumb">
								  <li><a href="<?php echo base_url ('') ?>">Ana Sayfa</a></li>
								  <li>Saç Ekimi</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- med_tittle_section End -->
 <!--service section start-->
    <div class="team_wrapper med_toppadder100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 col-lg-offset-2">
                    <div class="team_heading_wrapper med_bottompadder40">
                        <h1 class="med_bottompadder20">MOST POPULAR SERVICES</h1>
                        <img src="<?php echo base_url ('assets/front/') ?>images/Icon_team.png" alt="line" class="med_bottompadder20">
                        <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit sagittis sem nibh id elit.</p>
                    </div>
                </div>
	</div>
</div>
</div>
    <!--service section end-->
	<!--ser_abt section start-->
    <div class="ser_abt">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                    <div class="ser_abt_img_resp">
                        <img src="<?php echo base_url ('assets/front/') ?>images/service_abt.jpg" alt="img" class="img-responsive">
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12 abt_section">
                    <div class="abt_txt abt_txt_resp">
                        <h3>Specialty Medicine with Compassion and Car Proin gravida nibh vel velit</h3>
                        <p class="med_toppadder20">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, aks lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate..</p>
                        <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. aks lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit.</p>
                    </div>
                    <div class="abt_chk med_toppadder30">
                        <div class="content">
                            <ul>
                                <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Health Care For All Types</span></li>
                                <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Emergency Services</span></li>
                                <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Cancer Care </span></li>
                                <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>speciality medicines for all types</span></li>
								<li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Dental Care best dentist</span></li>
                                <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>dalvictisdss Care best dentist</span></li>
                                <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>doctors services </span></li>
                                <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>24/7 Services</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--ser_abt section end-->
	<!--ser_blog section start-->
    <?php $this->load->view('front/referanslar.php')?>
    <?php $this->load->view('front/sabit/footer.php')?>
    <?php $this->load->view('front/sabit/js.php')?>

</body>

</html>