<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <title><?php echo $meta['sayfaAdi'] ?> | Canlı Destek</title>
    <meta name="description" content="<?php echo $meta['anaSayfaDesc'] ?>">
    <meta name="keywords" content="<?php echo $meta['anaSayfaKey'] ?>">
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
                            <h1>Canlı Destek</h1>
                            <ol class="breadcrumb">
                                <li><a href="<?php echo base_url ('') ?>">Anasayfa</a>
                                </li>
                                <li>Canlı Destek</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<div class="blog_section med_toppadder100 med_bottompadder100">
	<div class="container">
		<div class="row">
			<div class="blog_category_main_wrapper">
				<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="blog_about">
							<div class="blog_img blog_post_img">
								<figure>
									<img src="<?php echo base_url ('assets/front/') ?>images/blog_bg_1.jpg" alt="img" class="img-responsive">
								</figure>
                        </div>
                        <div class="blog_comment">
                            <ul>
                                <li><a href=""><i class="fa fa-comment" aria-hidden="true"></i>50</a></li>
                                <li><a href=""><i class="fa fa-thumbs-up" aria-hidden="true"></i>98</a></li>
                            </ul>
                        </div>
                        <div class="blog_txt">
                            <h1><a href="#">Very popular during</a></h1>
                            <div class="blog_txt_info">
                                <ul>
                                    <li>BY ADMIN</li>
                                    <li>SEPT.29,2016</li>
                                </ul>
                            </div>
                            <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed
								odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt
								auctor a ornare odio. Sed non  mauris vitae erat consequat auctor.</p>
                            <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                        </div>
						</div>
					</div>
				</div>
				</div>
				
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    </div>

								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="right_blog_category_wrapper">
							<h4 class="med_bottompadder10">tags</h4>
							<img src="<?php echo base_url ('assets/front/') ?>images/line.png" alt="img" class="img-responsive">
							<div class="gc_blog_cloud_side_menu">
								<ul>
									<li><a href="#">java srcipt</a></li>
									<li><a href="#">Html</a></li>
									<li><a href="#">dmax</a></li>
									<li><a href="#">money</a></li>
									<li><a href="#">theme</a></li>
									<li><a href="#">insta</a></li>
									<li><a href="#">jquery</a></li>
									<li><a href="#">Money</a></li>
									<li><a href="#">update</a></li>
									
								</ul>
									</div>
									</div>
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