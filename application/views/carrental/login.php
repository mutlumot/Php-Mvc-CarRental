<!DOCTYPE html>
<html lang="en">
<head> 
<title>Üye Girişi</title>

 
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
                      <h3 class="p1">Uye Girisi</h3>
                      <form id="contact-form" action="<?php echo base_url('carrental/login'); ?>" method="post" enctype="multipart/form-data">
                        <fieldset>
                         <label><span class="text-form">Email:</span>
                            <input name="mail" type="text" id="mail" />
                          </label>
                          <label><span class="text-form">Sifre:</span>
                            <input name="password" type="password" id="password"/>
                          </label>
                          <div class="buttons">   <input type="submit" value="Giriş"> </div>
                        </fieldset>
                      </form>
                    </div>
                  </article>
                  </br></br></br></br></br>
                   <article class="grid_8">
                    <div class="indent-left">
                      <h3 class="p1">Uye OL!</h3>
                      <form id="contact-form" action="<?php echo base_url('carrental/insert_uyeEkle'); ?>" method="post" enctype="multipart/form-data">
                        <fieldset>
                         <label><span class="text-form">Ad:</span>
                            <input name="ad2" type="text" id="ad2" />
                          </label>
                          <label><span class="text-form">Soyad:</span>
                            <input name="soyad2" type="text" id="soyad2" />
                          </label>
                          <label><span class="text-form">Ehliyet Yılı:</span>
                            <input name="eyas2" type="text" id="eyas2" />
                          </label>
                         <label><span class="text-form">Email:</span>
                            <input name="mail2" type="text" id="mail2" />
                          </label>
                          <label><span class="text-form">Sifre:</span>
                            <input name="password2" type="password" id="password2"/>
                          </label>
                          <div class="buttons">   <input type="submit" value="Kayıt Ol!"> </div>
                         
                        </fieldset>
                      </form>
                    </div>
                  </article>
                  </br></br></br></br></br>
                   <article class="grid_8">
                    <div class="indent-left">
                      <h3 class="p1">Sifremi Unuttum!</h3>
                      <form id="contact-form" action="<?php echo base_url('carrental/sifremiunuttum'); ?>" method="post" enctype="multipart/form-data">
                        <fieldset>
                         <label><span class="text-form">Email:</span>
                            <input name="mail3" type="text" id="mail3" />
                          </label>
                           
                          <div class="buttons">   <input type="submit" value="Şifremi Mail Olarak Gönder"> </div>
                         
                        </fieldset>
                      </form>
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