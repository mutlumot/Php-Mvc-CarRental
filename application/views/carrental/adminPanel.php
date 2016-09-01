<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="tr" lang="tr"> 
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="mutlu , motugan , official , website , motugan , mutlu motugan">
  <meta name="author" content="webthemez">
  <title>ADMIN PANELI</title>
  <!-- core CSS -->
  <link href="<?php echo base_url();?>/template/carrental/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>/template/carrental/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>/template/carrental/css/animate.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>/template/carrental/css/prettyPhoto2.css" rel="stylesheet">
  <link href="<?php echo base_url();?>/template/carrental/css/styles.css" rel="stylesheet">
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
  <link rel="shortcut icon" href="">
  <script src="<?php echo base_url();?>/ckeditor/ckeditor.js"></script>
</head>

<body id="home">
  
<header id="header">
  <nav id="main-nav" class="navbar navbar-default navbar-fixed-top" role="banner">
    <div class="container">

      <div class="collapse navbar-collapse navbar-right">
        <ul class="nav navbar-nav">
          <li class="scroll"><a href="<?php echo base_url();?>">SITEYE GIT</a></li>
          <li class="scroll"><a href="#options">SITE AYARLARI</a></li>
          <li class="scroll"><a href="#portfolio">ARACLAR</a></li>       
          <li class="scroll"><a href="#insertcar">ARAC EKLE</a></li>
        <li class="scroll"><a href="#mesajlar">MESAJLAR</a></li>
		<li class="scroll"><a href="#duyurular">DUYURULAR</a></li>
        <li class="scroll"><a href="#hakkimizda">HAKKIMIZDA</a></li>     
		<li class="scroll"><a href="<?php echo  base_url('auth/cikis'); ?>">CIKIS YAP!</a></li>

        
        </ul>
      </div>
    </div>
    <!--/.container-->
  </nav>
  <!--/nav-->
</header>

<!--/#main-slider-->

<section id="options">
  <div class="container">

    <div class="section-header">
      <h2 class="section-title wow fadeInDown animated"
          style="visibility: visible; animation-name: fadeInDown; -webkit-animation-name: fadeInDown;">Site Ayarlari</h2>
    </div>

    <div class="row">
   
		<div class="col-sm-6 wow fadeInRight animated"
           style="visibility: visible; animation-name: fadeInRight; -webkit-animation-name: fadeInRight;">
		   
<form action="<?php echo base_url('carrental/insert_metaEkle');?>" method="POST">

<div class="form">
<div class="baslik">SITE AYARLARI</div>

<div class="listele">
<li class="form_baslik">SITE BASLIGI: </li>  <input class="f_3" type="txt" name="title"  id="title"  >
</div>

<div class="listele">
<li class="form_baslik">KEYWORDS: </li>  <input class="f_3" type="txt" name="keywords" id="keywords">
</div>


<div class="listele">
<li class="form_baslik">DESCRIPTION: </li>  <input class="f_3" type="txt" name="description" id="description" >
</div>

<div class="listele">
<li class="form_baslik"></li>  
<input type="submit" class="submit" value="KAYDET" >
</div>
 
</div>
 

</form>

<form action="<?php echo base_url('carrental/delete_metaDel'); ?>" method="post">
<div class="form">
<BR><BR>
<div class="baslik">SITENIN ANLIK AYARLARI</div>

<?php foreach ($siteayarlar as $sa) { ?>
 
<div class="listeleme">
<li class="libas"><b>TITLE  :</b><?php echo $sa->title; ?></li>
<li class="libas"><b>DESCRIPTION :</b> <?php echo $sa->description; ?></li>
<li class="libas"><b>KEYWORDS : </b> <?php echo $sa->keywords; ?> </li>
<li class="islem">AYARLARI SIL<a href="<?php echo base_url('carrental/delete_metaDel'); echo "/".$sa->id; ?>"><img class="vtip" title="?ceri?i Sil" class="vtip" title="?ceri?i Sil" src="http://localhost/carrental/template/carrental/images/icon/delete.png"></a>
</li>
</div>
<?php } ?>


</div>

</form>

      </div>
    </div>
  </div>
</section>
<!--/#about-->


<section id="portfolio">
  <div class="container">
    <div class="section-header">
      <h2 class="section-title wow fadeInDown animated"
          style="visibility: visible; animation-name: fadeInDown; -webkit-animation-name: fadeInDown;">ARACLAR</h2>

    </div>


    <div class="portfolio-items isotope" style="position: relative; overflow: hidden; height: 400px;">
      <div class="portfolio-item designing isotope-item"
           style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px);">
        <div class="portfolio-item-inner">

          <div>
            <table width="500" border="0" text-align="center" style="text-align: center;">
  <tr>
    <th scope="col">ID</th>
    <th scope="col">FOTO</th>
    <th scope="col">MARKA</th>
    <th scope="col">MODEL</th>
    <th scope="col">MODEL YILI</th>
    <th scope="col">FIYAT</th>
    <th scope="col">ISLEM</th>
  </tr>
  <tr>
    <th><br></th>
  </tr>
  <?php foreach ($araclar as $arac) { ?>
 
  <tr>
    <td><?php echo $arac->id; ?></td>
    <td><img src="<?php echo $arac->foto; ?>" height="20" width="30" ></td>
    <td><?php echo $arac->marka;?></td>
    <td><?php echo $arac->model;?></td>
    <td><?php echo $arac->modelYili;?></td>
    <td><?php echo $arac->fiyat;?></td>
    <td><a href="<?php echo base_url('carrental/delete_aracDel'); echo "/".$arac->id; ?>"><img class="vtip" title="?ceri?i Sil" class="vtip" title="?ceri?i Sil" src="http://localhost/carrental/template/carrental/images/icon/delete.png"></a></td>
  </tr>

    <?php } ?>
</table>
                      </div>
        </div>
      </div>
      <!--/.portfolio-item-->

      
    </div>
  </div>
  <!--/.container-->
</section>
<!--/#portfolio-->



<section id="insertcar">
<div class="container">
  <div class="section-header">
      <h2 class="section-title wow fadeInDown animated"
          style="visibility: visible; animation-name: fadeInDown; -webkit-animation-name: fadeInDown;">ARAC EKLE</h2>

    </div>
  <div class="container">
    <div class="container contact-info">
      <div class="row">
        
<form action="<?php echo base_url('carrental/insert_aracEkle'); ?>" method="POST">

<div class="form" align="center">
 
<div class="listele">
<li class="form_baslik">ARAC MARKASI: </li>  <input class="f_4" type="txt" name="marka"  id="marka"  >
</div>

<div class="listele">
<li class="form_baslik">ARAC MODELI: </li>  <input class="f_4" type="txt" name="model" id="model">
</div>


<div class="listele">
<li class="form_baslik">ARAC MODEL YILI: </li>  <input class="f_4" type="txt" name="modelYili" id="modelYili" >
</div>


<div class="listele">
<li class="form_baslik">ARAC KIRA FIYATI: </li>  <input class="f_4" type="txt" name="fiyat" id="fiyat"  >
</div>

<div class="listele">
<li class="form_baslik">ARAC FOTO LINK: </li>  <input class="f_5" type="txt" name="foto"  id="foto"></input>
</div>

<div class="listele">
<li class="form_baslik"></li>  
<input type="submit" class="submit" value="EKLE" >
</div>
 
</div>

</form>
	
		</div>
    </div>
  </div>
</div>
</section>


<section id="mesajlar">
<div class="container">
  <div class="section-header">
      <h2 class="section-title wow fadeInDown animated"
          style="visibility: visible; animation-name: fadeInDown; -webkit-animation-name: fadeInDown;">MESAJLAR</h2>

    </div>
  <div class="container">
    <div class="container contact-info">
      <div class="row">
        
<form action="<?php echo base_url('carrental/delete_mesajDel'); ?>" method="post">
<div class="form">
<div class="baslik">MESAJLAR</div>


<div class="tablolar">
<div>
<li class="libas">ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ISIM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MAIL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MESAJ</li>

</div>
</div>
<br>
<?php foreach ($mesajlar as $mesaj) { ?>
 
<div class="listeleme">
<li class="libas"><?php echo $mesaj->id; ?>&nbsp;&nbsp;&nbsp;<?php echo $mesaj->ad; ?>&nbsp;&nbsp;&nbsp;<?php echo $mesaj->mail;?>&nbsp;&nbsp;&nbsp;<?php echo $mesaj->mesaj;?>
 
<a href="<?php echo base_url('carrental/delete_mesajDel'); echo "/".$mesaj->id; ?>"><img class="vtip" title="?ceri?i Sil" class="vtip" title="?ceri?i Sil" src="http://localhost/carrental/template/carrental/images/icon/delete.png"></a>
</li>
</div>
<?php } ?>


</div>
</form>

        
      </div>
    </div>
  </div>
    </div>
</section>

<section id="duyurular">
<div class="container">
  <div class="section-header">
      <h2 class="section-title wow fadeInDown animated"
          style="visibility: visible; animation-name: fadeInDown; -webkit-animation-name: fadeInDown;">DUYURULAR</h2>

    </div>
  <div class="container">
    <div class="container contact-info">
      <div class="row">
 
 
<form action="<?php echo base_url('carrental/insert_duyuruEkle'); ?>" method="POST">

<div class="form">
<div class="baslik">DUYURU EKLE</div>

<div class="listele">
        
            <textarea name="editor1" id="editor1" rows="10" cols="80">
                 
            </textarea>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>
              
</div>

<div class="listele">
<li class="form_baslik"></li>  
<input type="submit" class="submit"  >
</div>
 
</div>
</form>

<br><br><br>

<form action="<?php echo base_url('carrental/delete_duyuruDel'); ?>" method="post">
<div class="form">
<div class="baslik">DUYURULAR</div>


<div class="tablolar">
<div>
<li class="libas">ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DUYURU</li>
 
</div>
</div>
<br>
<?php foreach ($m_duyuru as $d) { ?>
<div class="listeleme">
<li class="libas"><?php echo $d->id; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $d->duyuru; ?> 
<a href="<?php echo base_url('carrental/delete_duyuruDel'); echo "/".$d->id; ?>"><img class="vtip" title="?ceri?i Sil" class="vtip" title="?ceri?i Sil" src="http://localhost/carrental/template/carrental/images/icon/delete.png"></a>
</li>
</div>
<?php } ?>
</div>

</form>
 
      </div>
    </div>
  </div>
    </div>
</section>

<section id="hakkimizda">
<div class="container">
  <div class="section-header">
      <h2 class="section-title wow fadeInDown animated"
          style="visibility: visible; animation-name: fadeInDown; -webkit-animation-name: fadeInDown;">HAKKIMIZDA</h2>

    </div>
  <div class="container">
    <div class="container contact-info">
      <div class="row">
	  
	  

<form action="<?php echo base_url('carrental/insert_aboutEkle'); ?>" method="POST">

<div class="form">
<div class="baslik">HAKKIMIZDA SAYFASINA ICEERIK YAZ</div>

<div class="listele">
            <textarea name="detay" id="detay" rows="10" cols="80">
                 
            </textarea>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'detay' );
            </script>
</div>

<div class="listele">
<li class="form_baslik"></li>  
<input type="submit" class="submit"  >
</div>
 
</div>
</form>
<br><br><br>
<form action="<?php echo base_url('carrental/delete_aboutDel'); ?>" method="post">
<div class="form">
<div class="baslik">HAKKIMIZDA</div>


<div class="tablolar">
<div> 
<li class="libas">ID &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  HAKKIMIZDA</li>
 
</div>
</div>
<br>
<?php foreach ($m_about as $a) { ?>
 
<div class="listeleme"> 
<li class="libas"><?php echo $a->id; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $a->about; ?> 
<a href="<?php echo base_url('carrental/delete_aboutDel'); echo "/".$a->id; ?>"><img class="vtip" title="?ceri?i Sil" class="vtip" title="?ceri?i Sil" src="http://localhost/carrental/template/carrental/images/icon/delete.png"></a>
</li>
</div>
<?php } ?>


</div>

</form>
	  
        </div>
    </div>
  </div>
    </div>
</section>
<!--/#bottom-->

<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        2015 MUTLU MOTUGAN
      </div>
      <div class="col-sm-6">
        
        <ul class="social-icons">
          <li><a href="https://www.facebook.com/mmotugan"><i class="fa fa-facebook"></i></a></li>
		  <li><a href="https://www.instagram.com/mutlumotugan/"><i class="fa fa-instagram"></i></a></li>
          <li><a href="https://twitter.com/mutlumotugan"><i class="fa fa-twitter"></i></a></li>
          <li><a href="https://tr.linkedin.com/in/mutlu-motugan-9a51b198"><i class="fa fa-linkedin"></i></a></li>
		  </ul>    
      </div>
    </div>
  </div>
</footer>
<!--/#footer-->

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/mousescroll.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/jquery.prettyPhoto2.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/jquery.inview.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom-scripts.js"></script>

</body>
</html>