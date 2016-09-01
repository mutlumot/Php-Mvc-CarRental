
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Ayarları - Admin</title>
 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>
/template/carrental/admin/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>
/template/carrental/admin/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>
/template/carrental/admin/css/local.css" />

    <script type="text/javascript" src="<?php echo base_url();?>
/template/carrental/admin/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>
/template/carrental/admin/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

    <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url('sayfagecis/git_pindex');?>">Back to Admin</a>
            </div>
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active"><a href="<?php echo base_url('sayfagecis/git_pindex');?>"><i class="fa fa-bullseye"></i> Messages</a></li>
                    <li><a href="<?php echo base_url('sayfagecis/git_paraclar');?>"><i class="fa fa-tasks"></i> Cars</a></li>
                    <li><a href="<?php echo base_url('sayfagecis/git_phakkimizda');?>"><i class="fa fa-globe"></i> About Us</a></li>
                    <li><a href="<?php echo base_url('sayfagecis/git_pduyuru');?>"><i class="fa fa-list-ol"></i> News</a></li>
                    <li><a href="<?php echo base_url('sayfagecis/git_paracekle');?>"><i class="fa fa-font"></i> Insert Cars</a></li>
                    <li><a href="<?php echo base_url('sayfagecis/git_payarlar');?>"><i class="fa fa-list-ol"></i> Options</a></li>
                     <li><a href="<?php echo base_url('sayfagecis/git_piletisim');?>"><i class="fa fa-list-ol"></i> Contact Options</a></li>
                   <li><a href="<?php echo base_url('sayfagecis/git_panasayfa');?>"><i class="fa fa-list-globe"></i> Go to Site!</a></li>
          
                </ul>
                <ul class="nav navbar-nav navbar-right navbar-user">
            
                     <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> ADMINISTRATION<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                         
                            <li><a href="<?php echo  base_url('auth/cikis'); ?>"><i class="fa fa-power-off"></i> Log Out</a></li>

                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
<h2>Site Ayarları</h2>

       <div id="page-wrapper">

            <div class="row">
                <div class="col-lg-6">

                    <form role="form" action="<?php echo base_url('carrental/insert_metaEkle');  echo "/3"; ?>?>" method="POST">
                      <h2>Anasayfa SEO Ayarları</h2>
                      
                      <?php foreach ($siteayarlar3 as $sa3) { ?>
                        <div class="form-group">
                            <label>Site Başlığı</label>
                            <input class="form-control" placeholder="Enter text" name="title"  id="title" value="<?php if ($sa3->id == 3) {
                               echo $sa3->title;
                            } ?>">
                        </div>

                          <div class="form-group">
                            <label>Keywords</label>
                            <input class="form-control" placeholder="Enter text" name="keywords"  id="keywords" value="<?php if ($sa3->id == 3) {
                               echo $sa3->keywords;
                            } ?>">
                        </div>
                           <div class="form-group">
                            <label>Description</label>
                            <input class="form-control" placeholder="Enter text" name="description"  id="description" value="<?php if ($sa3->id == 3) {
                               echo $sa3->description;
                            } ?>" >
                        </div>

 <?php } ?>
                          <div>
                         <button type="submit" class="btn btn-default">Ayarla</button>
                         </div>
                 </form>
      </div>
 
  <div class="col-lg-6">
     
      <h2>Üyeler</h2>
       <?php foreach ($m_uyeler as $u) { ?>
     <div class="panel panel-primary">
                        <div class="panel-heading">
                             <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Üye Bilgileri : <?php echo $u->ad; ?>&nbsp;&nbsp;<?php echo $u->soyad; ?>&nbsp;&nbsp;Ehliyet Yılı : <?php echo $u->e_yil; ?></h3>
                            <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Üye mail adresi : <?php echo $u->mail; ?></h3>
                            <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Üye kullanıcı şifresi : <?php echo $u->sifre; ?></h3>
                           <div align="right"> <a href="<?php echo  base_url('carrental/guncelle_uye'); echo "/" .$u->id; ?>"  class="btn btn-edit" style="color: #FFFFFF;" >Düzenle</a> <a  href="<?php echo base_url('carrental/delete_uyeDel'); echo "/".$u->id; ?>"><img class="vtip" title="?ceri?i Sil" class="vtip" title="icerigi Sil" src="<?php echo base_url();?>/template/carrental/images/icon/delete.png"></a></div>
                        </div> 
 
                    </div>     
                         <?php } ?>
                          
<?php if($g_uye != NULL){ foreach ($g_uye as $g_u) { ?>
<form action="<?php echo base_url('carrental/uyeGuncelle'); echo "/".$g_u->id; ?>" method="POST"  enctype="multipart/form-data">

                  <h2>Uye Güncelle</h2>
          <div style="float: left; clear: both;">
            <label for="uad" class="col-md-2">
                Ad:
            </label>
            <div class="col-md-9">
                <input type="text" class="form-control" id="uad" name="uad" value="<?php echo $g_u->ad;?>">
            </div>
             
        </div>        
        <div style="float: left;">
            <label for="usoyad" class="col-md-2">
                Soyad:
            </label>
            <div class="col-md-9">
                <input type="text" class="form-control" id="usoyad" name="usoyad" value="<?php echo $g_u->soyad;?>">
            </div>
             
        </div>
              <div style="float: left;">
            <label for="ueyil" class="col-md-2">
                Ehliyet Yılı:
            </label>
            <div class="col-md-9">
                <input type="text" class="form-control" id="ueyil" name="ueyil" value="<?php echo $g_u->e_yil;?>">
            </div>
             
        </div>
              <div style="float: left;">
            <label for="umail" class="col-md-2">
                Mail:
            </label>
            <div class="col-md-9">
                <input type="text" class="form-control" id="umail" name="umail" value="<?php echo $g_u->mail;?>">
            </div>
             
        </div>
              <div style="float: left;">
            <label for="usifre" class="col-md-2">
                Şifre:
            </label>
            <div class="col-md-9">
                <input type="text" class="form-control" id="usifre" name="usifre" value="<?php echo $g_u->sifre;?>">
            </div>
             
        </div>
 

<div >
<li class="form_baslik"></li>  
<input type="submit" class="submit" value="Güncelle"  >
</div>
 
</form>
<?php } }?>

</div> 
                <div class="col-lg-6">
      <form action="<?php echo base_url('carrental/insert_adminEkle');?>" method="POST">

                    <h2>Admin Ekle</h2>
                           <div class="form-group">
                            <label>Username</label>
                            <input class="form-control" placeholder="Enter text"name="a_isim"  id="a_isim">
                        </div>
                         <div class="form-group">
                            <label>Password</label>
                            <input class="form-control" placeholder="Enter password"name="a_sifre"  id="a_sifre">
                        </div>
 <div>
      <button type="submit" class="btn btn-default">Ekle</button>
      </div>

</form>
       <br>
      <h2>Adminler</h2>
      <?php foreach ($kullanicilar as $k) { ?>

           <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> <?php echo $k->ad; ?></h3> şifre:<?php echo $k->sifre; ?>
                           <div align="right"> <a href="<?php echo  base_url('carrental/guncelle_admin'); echo "/" .$k->id; ?>"  class="btn btn-edit" style="color: #FFFFFF;" >Düzenle</a> <a href="<?php echo base_url('carrental/delete_adminDel'); echo "/".$k->id; ?>"><img class="vtip" title="?ceri?i Sil" class="vtip" title="icerigi Sil" src="<?php echo base_url();?>/template/carrental/images/icon/delete.png"></a></div>
                        </div>  
 
                    </div>     
                        
<?php } ?>

<?php if($g_admin != NULL){ foreach ($g_admin as $g_a) { ?>
<form action="<?php echo base_url('carrental/adminGuncelle'); echo "/".$g_a->id; ?>" method="POST"  enctype="multipart/form-data">

                  <h2>Admin Güncelle</h2>
          <div style="float: left; clear: both;">
            <label for="ad" class="col-md-2">
                Ad:
            </label>
            <div class="col-md-9">
                <input type="text" class="form-control" id="ad" name="ad" value="<?php echo $g_a->ad;?>">
            </div>
             
        </div>        
        <div style="float: left;">
            <label for="sifre" class="col-md-2">
                Şifre:
            </label>
            <div class="col-md-9">
                <input type="text" class="form-control" id="sifre" name="sifre" value="<?php echo $g_a->sifre;?>">
            </div>
             
        </div>
 

<div >
<li class="form_baslik"></li>  
<input type="submit" class="submit" value="Güncelle"  >
</div>
 
</form>
<?php } }?>

                </div>
                </div>
            
            </div> 
    </div>    

</body>
</html>
