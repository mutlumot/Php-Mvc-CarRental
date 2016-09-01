
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Duyurular - Admin</title>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>
/template/carrental/admin/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>
/template/carrental/admin/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>
/template/carrental/admin/css/local.css" />
<script src="<?php echo base_url();?>/ckeditor/ckeditor.js"></script>
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

      <div class="container">
            <div class="row">
                 <div class="col-lg-6">
      <form role="form" action="<?php echo base_url('carrental/insert_metaEkle'); echo "/5"; ?>?>" method="POST">
      <h2>Duyurular SEO Ayarları</h2>
       <?php foreach ($siteayarlar5 as $sa5) { ?>
  <div class="form-group">
                            <label>Site Başlığı</label>
                            <input class="form-control" placeholder="Enter text" name="title"  id="title" value="<?php if ($sa5->id == 5) {
                               echo $sa5->title;
                            } ?>">
                        </div>

                          <div class="form-group">
                            <label>Keywords</label>
                            <input class="form-control" placeholder="Enter text" name="keywords"  id="keywords" value="<?php if ($sa5->id == 5) {
                               echo $sa5->keywords;
                            } ?>">
                        </div>
                           <div class="form-group">
                            <label>Description</label>
                            <input class="form-control" placeholder="Enter text" name="description"  id="description" value="<?php if ($sa5->id == 5) {
                               echo $sa5->description;
                            } ?>" >
                        </div>
                         <?php } ?>
                         <div>
                         <button type="submit" class="btn btn-default">Ayarla</button>
                         </div>
                 </form>

</div>
 
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-lg-8">
                            <h2>Duyurular</h2>
                             <?php foreach ($m_duyuru as $d) { ?>
				   <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> <?php echo $d->id; ?></h3>
                            <div align="right"><a style="color: #FFFFFF;" href="<?php echo base_url('carrental/guncelle'); echo "/".$d->id; ?>">Güncelle</a> <a href="<?php echo base_url('carrental/delete_duyuruDel'); echo "/".$d->id; ?>"><img class="vtip" title="?ceri?i Sil" class="vtip" title="icerigi Sil" src="<?php echo base_url();?>/template/carrental/images/icon/delete.png"></a> </div>
                        </div>
                        <div class="panel-body">
                       


                           <div class="panel-element">
                               
<li class="libas"><?php echo $d->duyuru;?>
 

</li>
                           </div>
                        </div>
                    </div>
					<?php } ?>
                     
                    <hr />

 <?php if($g_duyuru != NULL){ foreach ($g_duyuru as $g) { ?>
<form action="<?php echo base_url('carrental/duyuruGuncelle'); echo "/".$g->id;  ?>" method="POST">

                  <h2>DUYURU Güncelle</h2>
                 
<div>
        
            <textarea name="editor2" id="editor2" rows="" cols="80">
                 <?php echo $g->duyuru;?>
            </textarea>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor2' );
            </script>
              
</div>

<div >
<li class="form_baslik"></li>  
<input type="submit" class="submit" value="Güncelle"  >
</div>
 
</form>
<?php } }?>

     <hr />

<form action="<?php echo base_url('carrental/insert_duyuruEkle'); ?>" method="POST">

 
                 <h2>DUYURU EKLE</h2>
<div >
        
            <textarea name="editor1" id="editor1" rows="10" cols="80">
                 
            </textarea>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>
              
</div>

<div >
<li class="form_baslik"></li>  
<input type="submit" class="submit"  >
</div>
 
</form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
