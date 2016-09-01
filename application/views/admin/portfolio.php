
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filo -   Admin</title>

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

    <style>
        img {
            filter: gray; /* IE6-9 */
            -webkit-filter: grayscale(1); /* Google Chrome, Safari 6+ & Opera 15+ */
            -webkit-box-shadow: 0px 2px 6px 2px rgba(0,0,0,0.75);
            -moz-box-shadow: 0px 2px 6px 2px rgba(0,0,0,0.75);
            box-shadow: 0px 2px 6px 2px rgba(0,0,0,0.75);
            margin-bottom: 20px;
        }
        img:hover {
            filter: none; /* IE6-9 */
            -webkit-filter: grayscale(0); /* Google Chrome, Safari 6+ & Opera 15+ */
        }
    </style>
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

        <hr />

        <div class="container">
            <div class="row">
                <div class="text-center">
                    <h1>Araç Filosu</h1>
                </div>
                       <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                     <th>Foto</th>
                                    <th>Marka</th>
                                    <th>Model</th>
                                    <th>Model Yılı</th>
                                    <th>Fiyat</th>
                    <th>Detay</th>
                    <th>İşlem</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($araclar as $adm){?>
                                <tr>
                                     <td><?php if ($adm->foto == "") {?>
                                <img  class="thumbnail img-responsive" alt="Bootstrap template" src="<?php echo base_url();?>/template/carrental/images/404.gif" />
                  
                    <?php   }else {?>
                            <img  class="thumbnail img-responsive" alt="Bootstrap template" src="<?php echo base_url();?>/uploads/<?php echo $adm->foto; ?>" />
                  <?php 
                        }?></td>
                                    <td><?php echo $adm->marka; ?></td>
                                    <td><?php echo $adm->model; ?></td>
                                     <td><?php echo $adm->modelYili?></td>
                                    <td><?php echo $adm->fiyat; ?> TL</td>
                                   <td><?php echo $adm->detay; ?></td>
                                   
                    <td><a href="<?php echo base_url('carrental/delete_aracDel'); echo "/".$adm->id; ?>"><img class="vtip" title="?ceri?i Sil" class="vtip" title="?ceri?i Sil" src="<?php echo base_url();?>/template/carrental/images/icon/delete.png"></a></td>
                                    <td><a href="<?php echo  base_url('carrental/guncelle_arac'); echo "/" .$adm->id; ?>" class="btn btn-edit">Düzenle</a></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table> 
          

 <?php if($g_araclar != NULL){ foreach ($g_araclar as $g) { ?>
<form action="<?php echo base_url('carrental/aracGuncelle'); echo "/".$g->id; ?>" method="POST"  enctype="multipart/form-data">

                  <h2>Araç Güncelle</h2>
          <div style="float: left; clear: both;">
            <label for="marka" class="col-md-2">
                Marka:
            </label>
            <div class="col-md-9">
                <input type="text" class="form-control" id="marka" name="marka" value="<?php echo $g->marka;?>">
            </div>
             
        </div>        
        <div style="float: left;">
            <label for="model" class="col-md-2">
                Model:
            </label>
            <div class="col-md-9">
                <input type="text" class="form-control" id="model" name="model" value="<?php echo $g->model;?>">
            </div>
             
        </div>
        <div style="float: left;">
            <label for="modelYili" class="col-md-2">
                Model Yılı:
            </label>
            <div class="col-md-9">
                <input type="text" class="form-control" id="modelYili" name="modelYili" value="<?php echo $g->modelYili;?>">
               
            </div>
              
        </div>
        <div style="float: left;">
            <label for="fiyat" class="col-md-2">
                Kira Ücreti:
            </label>
            <div class="col-md-9">
                <input type="text" class="form-control" id="fiyat" name="fiyat" value="<?php echo $g->fiyat;?>">
              
            </div>
             
        </div>
        <div style="float: left;">
            <label for="userfile" class="col-md-2">
                Fotoğraf:
            </label>
            <div class="col-md-9">
                <input type="file" class="form-control" id="userfile" name="userfile" value="<?php echo base_url();?>/uploads/<?php echo $g->foto; ?>">
            </div>
             
        </div>

<div>
        
            <textarea name="detay3" id="detay3" rows="10" cols="80">
                 <?php echo $g->detay;?>
            </textarea>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'detay3' );
            </script>
              
</div>
 <div style="float: left; clear: both;">
            <label for="title" class="col-md-2">
                Title:
            </label>
            <div class="col-md-9">
                <input type="text" class="form-control" id="title" name="title" value="<?php echo $g->title;?>">
            </div>
             
        </div>         
        <div style="float: left; clear: both;">
            <label for="keywords" class="col-md-2">
                keywords:
            </label>
            <div class="col-md-9">
                <input type="text" class="form-control" id="keywords" name="keywords" value="<?php echo $g->keywords;?>">
            </div>
             
        </div>       
          <div style="float: left; clear: both;">
            <label for="desc" class="col-md-2">
                description:
            </label>
            <div class="col-md-9">
                <input type="text" class="form-control" id="desc" name="desc" value="<?php echo $g->desc;?>">
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

</body>
</html>
