<!DOCTYPE html>
<html lang="en">
<head>
 <?php foreach ($siteayarlar6 as $sa6) { ?>
<title><?php echo $sa6->title; ?></title>
<meta name="description" itemprop="description" content="<?php echo $sa6->description;?>" />
<meta name="keywords" content="<?php echo $sa6->keywords;?>">


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
/template/carrental/js/Vegur_500.font.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>
/template/carrental/js/FF-cash.js" type="text/javascript"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
<![endif]-->
</head>
<body id="page6">
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
           
          <div class="container-bot">
            <div class="container-top">
              <div class="container">
                <div class="wrapper">
                  <article class="grid_8">
                    <div class="indent-left">
                      <h3 class="p1">BIZE YAZIN</h3>
                      <form id="contact-form" action="<?php echo base_url('carrental/insert_mesajEkle'); ?>" method="post" enctype="multipart/form-data">
                        <fieldset>
                          <label><span class="text-form">İSİM:</span>
                            <input name="ad" type="text" id="ad" />
                          </label>
                          <label><span class="text-form">Email:</span>
                            <input name="mail" type="text" id="mail" />
                          </label>
                          <label><span class="text-form">TELEFON:</span>
                            <input name="tel" type="text" id="tel"/>
                          </label>
                          <div class="wrapper">
                            <div class="text-form">MESAJ:</div>
                            <div class="extra-wrap">
                              <textarea name="mesaj" id="mesaj"></textarea>
                              <div class="clear"></div>
                              <div class="buttons">   <input type="submit" value="Gönder"> </div>
                            </div>
                          </div>
                        </fieldset>
                      </form>
                    </div>
                  </article>
                  <article class="grid_4">
                   <BR>
                        <b><h2>Irtibat :</h2></b> <BR>
<BR><?php foreach ($iletisim as $i) { ?>
                        <b>TEL :</b> <?php echo $i->tel;?><BR>
                        <BR><b>Adres :</b> <?php echo $i->adres;?><br> <BR> <BR>
                         <figure class="indent-bot">
                      
                        <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:272px;width:300px;'><div id='gmap_canvas' style='height:440px;width:700px;'></div><div><small><a href="http://embedgooglemaps.com">                 embed google map              </a></small></div><div><small><a href="https://googlemapsgenerator.com">embed google maps</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:12,center:new google.maps.LatLng(41.220025,32.65118580000001),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(41.220025,32.65118580000001)});infowindow = new google.maps.InfoWindow({content:'<strong>MUTLU MOTUĞAN</strong><br>ÜNİVERSİTE MAHALLESİ UZUNER SOKAK KARABÜK<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
                      </figure>
                       <?php } ?>
                     
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