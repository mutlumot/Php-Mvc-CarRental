
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Araç Ekle -  Admin</title>
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

       <div class="col-md-4">
        <div class="row text-center" style="float: left;">
            <h2>Yeni Araç</h2>
        </div>
        
        <form action="<?php echo base_url('carrental/insert_aracEkle'); ?>" method="POST" enctype="multipart/form-data">

        <div style="float: left; clear: both;">
            <label for="marka" class="col-md-2">
                Marka:
            </label>
            <div class="col-md-9">
                <input type="text" class="form-control" id="marka" name="marka">
            </div>
             
        </div>        
        <div style="float: left;">
            <label for="model" class="col-md-2">
                Model:
            </label>
            <div class="col-md-9">
                <input type="text" class="form-control" id="model" name="model">
            </div>
             
        </div>
        <div style="float: left;">
            <label for="modelYili" class="col-md-2">
                Model Yılı:
            </label>
            <div class="col-md-9">
                <input type="text" class="form-control" id="modelYili" name="modelYili">
               
            </div>
              
        </div>
        <div style="float: left;">
            <label for="fiyat" class="col-md-2">
                Kira Ücreti:
            </label>
            <div class="col-md-9">
                <input type="text" class="form-control" id="fiyat" name="fiyat">
              
            </div>
             
        </div>
        <div style="float: left;">
          <label for="detay" class="col-md-2">
               Detay:
            </label>
          <div class="col-md-9">
          
            <textarea name="detay" id="detay" rows="10" cols="80">
                
            </textarea>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'detay' );
            </script>
              </div>
        </div>

        <div style="float: left;">
            <label for="userfile" class="col-md-2">
                Fotoğraf Link:
            </label>
            <div class="col-md-9">
                <input type="file" class="form-control" id="userfile" name="userfile">
            </div>
             
        </div>
         <div style="float: left;">
            <label for="title" class="col-md-2">
               Title:
            </label>
            <div class="col-md-9">
                <input type="text" class="form-control" id="title" name="title">
               
            </div>
              
        </div>
          <div style="float: left;">
            <label for="keywords" class="col-md-2">
                keywords:
            </label>
            <div class="col-md-9">
                <input type="text" class="form-control" id="keywords" name="keywords">
               
            </div>
              
        </div>
          <div style="float: left;">
            <label for="description" class="col-md-2">
               description:
            </label>
            <div class="col-md-9">
                <input type="text" class="form-control" id="description" name="description">
               
            </div>
              
        </div>
        <div style="float: left;">
      <button type="submit" class="btn btn-default">Aracı Filoya Ekle</button>
      </div>
       </form>
    </div>  
    </div>

</body>
</html>
