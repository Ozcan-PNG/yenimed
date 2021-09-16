<!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="utf-8">
	<title><?php echo $meta['sayfaAdi'] ?> | Blog Detay</title>
	<meta name="description" content="<?php echo $meta['blogDesc'] ?>">
	<meta name="keywords" content="<?php echo $meta['blogKey'] ?>">
	<?php $this->load->view('front/sabit/css.php')?>
</head>
<body>
	<?php $this->load->view('front/sabit/menu.php')?>
	    <div class="med_tittle_section">
        <div class="med_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="med_tittle_cont_wrapper">
                        <div class="med_tittle_cont">
                            <h1>Blog Kategori</h1>
                            <ol class="breadcrumb">
                                <li><a href="<?php echo base_url ('') ?>">Anasayfa</a>
                                </li>
                                <li>Blog Detay</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- med_tittle_section End -->
    <!--blog category section start-->
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
                                    <div class="blog_txt">
                                        <h1><a href="#">Çok Popüler</a></h1>
                                        <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor.</p>
                                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="right_blog_category_wrapper right_blog_1">
                                    <h4 class="med_bottompadder10">Son Gönderiler</h4>
                                    <img src="<?php echo base_url ('assets/front/') ?>images/line.png" alt="img" class="img-responsive">
                                    <div class="right_post_category_list_wrapper">
                                        <div class="gc_footer_ln_main_wrapper">
                                            <div class="gc_footer_ln_img_wrapper">
                                                <img src="<?php echo base_url ('assets/front/') ?>images/blog_post_1.jpg" class="img-responsive" alt="ln_img">
                                            </div>
                                            <div class="gc_footer_ln_cont_wrapper">
                                                <h4><a href="#">Lorem Ipsum. Proin the graida nibh vel.</a></h4>
                                            </div>
                                        </div>
                                        <div class="gc_footer_ln_main_wrapper2">
                                            <div class="gc_footer_ln_img_wrapper">
                                                <img src="<?php echo base_url ('assets/front/') ?>images/blog_post_1.jpg" class="img-responsive" alt="ln_img">
                                            </div>
                                            <div class="gc_footer_ln_cont_wrapper">
                                                <h4><a href="#">Lorem Ipsum. Proin the graida nibh vel.</a></h4>
                                            </div>
                                        </div>
                                        <div class="gc_footer_ln_main_wrapper2">
                                            <div class="gc_footer_ln_img_wrapper">
                                                <img src="<?php echo base_url ('assets/front/') ?>images/blog_post_1.jpg" class="img-responsive" alt="ln_img">
                                            </div>
                                            <div class="gc_footer_ln_cont_wrapper">
                                                <h4><a href="#">Lorem Ipsum. Proin the graida nibh vel.</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="right_blog_category_wrapper">
                                    <h4 class="med_bottompadder10">Taglar</h4>
                                    <img src="<?php echo base_url ('assets/front/') ?>images/line.png" alt="img" class="img-responsive">
                                    <div class="gc_blog_cloud_side_menu">
                                        <ul>
                                            <li><a href="#">Acil</a>
                                            </li>
                                            <li><a href="#">Ameliyat</a>
                                            </li>
                                            <li><a href="#">Estetik</a>
                                            </li>
                                            <li><a href="#">Sağlık</a>
                                            </li>
                                            <li><a href="#">Eczane</a>
                                            </li>
                                            <li><a href="#">İlçlar</a>
                                            </li>
                                            <li><a href="#">Polikinlik</a>
                                            </li>
                                            <li><a href="#">Laborotuvar</a>
                                            </li>
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