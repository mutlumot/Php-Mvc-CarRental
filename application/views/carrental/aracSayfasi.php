<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="tr" lang="tr"> 
<head> 
 <?php foreach ($araclar as $sa7) { ?>
<title><?php echo $sa7->title; ?></title>
<meta name="description" itemprop="description" content="<?php echo $sa7->desc;?>" />
<meta name="keywords" content="<?php echo $sa7->keywords;?>">


<?php   }?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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

       
 <?php foreach ($araclar as $d) { 
		if ($d->foto == "") {?>
						<figure class="img-indent"><img src="<?php echo base_url();?>/template/carrental/images/404.gif"  height="200" width="480"></figure>
					<?php	}else {?>
							<figure class="img-indent"><img src="<?php echo base_url();?>/uploads/<?php echo $d->foto;?>"  height="200" width="480"></figure>
                  <?php 
						}
?>
                 <h4> Marka:  <?php echo $d->marka; ?></h4>
                  <p class="p2"> Model: <?php echo $d->model; ?></p>
                  <p class="p2"> Model Yılı: <?php echo $d->modelYili; ?></p>
                  <H4>FİYAT : <?php echo $d->fiyat; ?> TL</H4>
                   <p class="p2"> Detay: <?php echo $d->detay; ?></p>
                 
          <?php } ?>

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