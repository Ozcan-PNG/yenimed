    <div id="preloader">
      <div id="status"><img src="<?php echo base_url ('assets/front/') ?>images/preloader.gif" id="preloader_image" alt="loader">
      </div>
    </div>
    <!--top header start-->
    <!--<div class="top_header_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="top_header_add">
                        <ul>
                            <li><i class="fa fa-map-marker" aria-hidden="true"></i><span>Address :</span> -512/fonia,canada</li>
                            <li><i class="fa fa-phone" aria-hidden="true"></i><span>Call us :</span> +61 5001444-122</li>
                            <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="#"><span>Email :</span> dummy@example.com</a></li>
                        </ul>
                    </div>
                    <div class="top_login">
                        <ul>
                            <li><i class="fa fa-sign-in" aria-hidden="true"></i><a href="#">Log In / Sign Up    </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
      </div>-->
      <div class="menu_wrapper header-area hidden-menu-bar stick">
        <div class="container">
          <div class="row">
            <div class="col-lg-2 col-md-3 col-sm-2 col-xs-12 wow bounceInDown" data-wow-delay="0.6s">
              <div class="header_logo">
                <a href="<?php echo base_url () ?>" class="hidden-xs"><img src="<?php echo base_url ('assets/front/') ?>images/logo.png" alt="logo" title="logo" class="img-responsive"></a>
              </div>
            </div>
            <div class="col-lg-10 col-md-9 col-sm-10 col-xs-12">
              <nav class="navbar hidden-xs">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                </div>
                <div class="collapse navbar-collapse respose_nav" id="bs-example-navbar-collapse-1">

                  <ul class="nav navbar-nav" id="nav_filter">
                    <li><a href="<?php echo base_url () ?>">Ana Sayfa</a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hizmetler</a>
                      <ul class="dropdown-menu hovr_nav_tab"> 
                        <?php foreach ($hizmet_kategoriler as $kategori): ?>
                         <li><a href="<?php echo base_url ('kategori/'.$kategori['sef']) ?>"><?php echo $kategori['adi'] ?></a></li>
                       <?php endforeach ?>
                     </ul>
                   </li>
                   <li><a href="<?php echo base_url ('doktorlar') ?>">Doktorlarımız</a></li>
                   <li><a href="<?php echo base_url ('galeri') ?>">Galeri</a></li>
                   <li><a href="<?php echo base_url ('blog') ?>">Blog</a></li>
                   <li><a href="<?php echo base_url ('hakkimizda') ?>">Hakkımızda</a></li>
                   <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">İletişim</a>
                    <ul class="dropdown-menu hovr_nav_tab">
                      <li><a href="<?php echo base_url ('iletisim') ?>">Bize Ulaşın</a></li>
                      <li><a href="<?php echo base_url ('randevu') ?>">Randevu Al</a></li>
                      <li><a href="<?php echo base_url ('canlidestek') ?>">CANLI DESTEK</a></li>
                    </ul>
                  </li>
                  <li class="dropdown open">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><span class="flag-icon flag-icon-tr"></span> TÜRKÇE
                      <span class="caret"></span></a>
                      <div class="">
                        <ul class="dropdown-menu hovr_nav_tab">
                          <li style="list-style: none;">
                            <a  href="/en"><span class="flag-icon flag-icon-gb"></span> ENGLISH</a></li>
                            <li style="list-style: none;"><a href="/de"><span class="flag-icon flag-icon-de"></span> Deutsch</a></li>
                            <li style="list-style: none;"><a href="/fr"><span class="flag-icon flag-icon-fr"></span> FRANCE</a></li>
                            <li style="list-style: none;"><a href="/de"><span class="flag-icon flag-icon-ar"></span> عربي</a></li>
                          </ul>
                        </div>
                      </li>
                    </li>
                  </ul>
                </div>
              </nav>
              <div class="rp_mobail_menu_main_wrapper visible-xs">
                <div class="row">
                  <div class="col-xs-6">
                    <div class="gc_logo logo_hidn">
                      <h1><a href="#">LIFE<span>LINE</span></a></h1>
                    </div>
                  </div>
                  <div class="col-xs-6">
                    <div id="toggle">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewbox="0 0 31.177 31.177" style="enable-background:new 0 0 31.177 31.177;" xml:space="preserve" width="25px" height="25px">
                        <g>
                          <g>
                            <path class="menubar" d="M30.23,1.775H0.946c-0.489,0-0.887-0.398-0.887-0.888S0.457,0,0.946,0H30.23    c0.49,0,0.888,0.398,0.888,0.888S30.72,1.775,30.23,1.775z" fill="#2ec8a6"></path>
                          </g>
                          <g>
                            <path class="menubar" d="M30.23,9.126H12.069c-0.49,0-0.888-0.398-0.888-0.888c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,8.729,30.72,9.126,30.23,9.126z" fill="#2ec8a6"></path>
                          </g>
                          <g>
                            <path class="menubar" d="M30.23,16.477H0.946c-0.489,0-0.887-0.398-0.887-0.888c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,16.079,30.72,16.477,30.23,16.477z" fill="#2ec8a6"></path>
                          </g>
                          <g>
                            <path class="menubar" d="M30.23,23.826H12.069c-0.49,0-0.888-0.396-0.888-0.887c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,23.43,30.72,23.826,30.23,23.826z" fill="#2ec8a6"></path>
                          </g>
                          <g>
                            <path class="menubar" d="M30.23,31.177H0.946c-0.489,0-0.887-0.396-0.887-0.887c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.398,0.888,0.888C31.118,30.78,30.72,31.177,30.23,31.177z" fill="#2ec8a6"></path>
                          </g>
                        </g>
                      </svg>
                    </div>
                  </div>
                </div>
                <div id="sidebar">
                  <h1>LIFE<span>LINE</span></h1>
                  <div id="toggle_close">&times;</div>
                  <div id='cssmenu' class="wd_single_index_menu">
                    <ul>
                      <li><a href='<?php echo base_url () ?>'>Ana Sayfa</a></li> 
                      <li class='has-sub'><a href='<?php echo base_url ('') ?>'>Hizmetler</a>
                        <ul> 
                         <li><a href="<?php echo base_url () ?>">SAÇ EKİMİ</a></li>
                         <li><a href="<?php echo base_url () ?>">AĞIZ VE DİŞ SAĞLIĞI</a></li>
                         <li><a href="<?php echo base_url () ?>">ESTETİK CERRAHI</a></li>
                         <li><a href="<?php echo base_url () ?>">MİDE KÜÇÜLTME</a></li>
                         <li><a href="<?php echo base_url () ?>">GÖZ</a></li>
                       </ul>
                     </li>

                     <li><a href='<?php echo base_url ('doktorlar') ?>'>doktorlarımız</a></li>

                     <li><a href='<?php echo base_url ('galeri') ?>'>Galeri</a></li>

                     <li><a href='<?php echo base_url ('blog') ?>'>blog</a></li>

                     <li><a href="<?php echo base_url ('hakkimizda') ?>">Hakkımızda</a></li>

                     <li class='has-sub'><a href="#">iletişim</a>
                       <ul>
                         <li><a href="<?php echo base_url ('iletisim') ?>">bize ulaşın</a></li>
                         <li><a href="<?php echo base_url ('randevu') ?>">Randevu Al </a></li>
                       </ul>
                     </li>
                     <li class="has-sub">
                      <a href="#" class="dropdown-toggle" aria-expanded="true"><span class="flag-icon flag-icon-tr"></span> TÜRKÇE</a>
                      <ul>
                        <li style="list-style: none;">
                          <a  href="/en"><span class="flag-icon flag-icon-gb"></span> ENGLISH</a></li>
                          <li style="list-style: none;"><a href="/de"><span class="flag-icon flag-icon-de"></span> Deutsch</a></li>
                          <li style="list-style: none;"><a href="/fr"><span class="flag-icon flag-icon-fr"></span> FRANCE</a></li>
                          <li style="list-style: none;"><a href="/de"><span class="flag-icon flag-icon-ar"></span> عربي</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>