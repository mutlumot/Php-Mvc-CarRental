<!DOCTYPE html>
<html lang="en">
<head>
 <?php foreach ($siteayarlar4 as $sa4) { ?>
<title><?php echo $sa4->title; ?></title>
<meta name="description" itemprop="description" content="<?php echo $sa4->description;?>" />
<meta name="keywords" content="<?php echo $sa4->keywords;?>">


<?php   }?>
<meta charset="utf-8">
<link rel="stylesheet" href="<?php echo base_url();?>
/template/carrental/css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="<?php echo base_url();?>
/template/carrental/css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="<?php echo base_url();?>
/template/carrental/css/grid.css" type="text/css" media="screen">
<script src="<?php echo base_url();?>
/template/carrental/js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>
/template/carrental/js/cufon-yui.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>
/template/carrental/js/cufon-replace.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>
/template/carrental/js/Vegur_300.font.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>
/template/carrental/js/Vegur_500.font.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>
/template/carrental/js/FF-cash.js" type="text/javascript"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
<![endif]-->
</head>
<body id="page2">
<div class="main-bg">
  <div class="bg">
    <!--==============================header=================================-->
    <header>
      <div class="main">
        <div class="wrapper">
          <h3>CarRental</h1>
          <div class="fright">
             
          </div>
        </div>
        <nav>
          <ul class="menu">
            <li><a class="active" href="<?php echo base_url('sayfagecis/git_home');?>">Home</a></li>
            <li><a href="<?php echo base_url('sayfagecis/git_about');?>">HAKKIMIZDA</a></li>
            <li><a href="<?php echo base_url('sayfagecis/git_duyurular');?>">DUYURULAR</a></li>
            <li><a href="<?php echo base_url('sayfagecis/git_contact');?>">İLETİŞİM</a></li>
            <li><a href="<?php echo base_url('sayfagecis/git_login');?>">LOGIN</a></li>
        <li><a href="<?php echo base_url('sayfagecis/git_adminPanel');?>">ADMİN PANELİ</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <!--==============================content================================-->
    <section id="content">
      <div class="main">
        <div class="container_12">
          <div class="wrapper p5">
             
          </div>
          <div class="container-bot">
            <div class="container-top">
              <div class="container">
                <div class="wrapper">
                  <article class="grid_8">
                    <div class="indent-left">
                      <div class="wrapper border-bot2">
                         
                         
                      </div>
                      <h3 class="prev-indent-bot">CAR RENTAL</h3>
                      <div class="wrapper img-indent-bot">
                         
                        <div class="extra-wrap">
                         <?php foreach ($m_about as $a) { ?>

                          <h4><?php echo $a->about; ?> </h4>
                          
                          <?php } ?>
                            </div>
                      </div>
                       
                       
                      <div class="wrapper">
                        <div class="col-1">
                            
                           </div>
                        <div class="col-1">
                           
                          </div>
                        <div class="col-2">
                          
                            </div>
                      </div>
                    </div>
                  </article>
                  <article class="grid_4">
             
                      <div class="indent-left">
                        <h3 class="p0">Neden Biz?</h3>
                        <ul class="list-1">
                          <li><a href="#">Güvenilir</a></li>
                          <li><a href="#">Kaliteli</a></li>
                          <li><a href="#">Ucuz </a></li>
                          <li><a href="#">Sigorta ve Kasko</a></li>
                          <li><a href="#">Sadelik ve Özgüven</a></li>
                        </ul>
                      </div>
                    </div>
                  </article>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--==============================footer=================================-->
    <footer>
      <div class="main"> <span>Copyright &copy; <a href="https://www.mutlumotugan.com">MUTLU MOTUĞAN</a> All Rights Reserved</span>   </div>
    </footer>
  </div>
</div>
<script type="text/javascript">Cufon.now();</script>
</body>
</html>