
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Admin</title>

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

    <!-- you need to include the shieldui css and js assets in order for the charts to work -->
    <link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css" />
    <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
    <script type="text/javascript" src="http://www.prepbootstrap.com/Content/js/gridData.js"></script>
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
                <a class="navbar-brand" href="<?php echo base_url('sayfagecis/git_pindex');?>">Admin Panel</a>
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

        <div id="page-wrapper">
           
            <div class="row">
                <div class="col-lg-8">
                    <?php foreach ($mesaj as $m) { ?>
				   <div class="panel panel-primary" <?php if ($m->okundu == 1) { ?> style="background-color: #66FF66;" <?php }?>>
                        <div class="panel-heading"<?php if ($m->okundu == 1) { ?> style="background-color: #66FF66;" <?php }?>>
                            <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> <?php echo $m->ad; ?></h3> 
                            <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> <?php echo $m->mail; ?></h3> 
                            <div align="right"><a href="<?php echo base_url('carrental/okundu'); echo "/".$m->id; ?>"><img class="vtip" title="?ceri?i Sil" class="vtip" title="icerigi Sil" src="<?php echo base_url();?>/template/carrental/images/icon/okundu.png"></a>
                            <a href="<?php echo base_url('carrental/delete_mesajDel'); echo "/".$m->id; ?>"><img class="vtip" title="?ceri?i Sil" class="vtip" title="icerigi Sil" src="<?php echo base_url();?>/template/carrental/images/icon/delete.png"></a></div>
                        </div>
                        <div class="panel-body">
                       


                           <div class="panel-element">
                               
<li class="libas"><?php echo $m->id; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $m->mesaj;?>
 
 
</li>


                           </div>



                        </div>
                    </div>
					<?php } ?>
                </div>
            
            </div>

      
        </div>
    </div>
    <!-- /#wrapper -->

    <script type="text/javascript">
        jQuery(function ($) {
            var performance = [12, 43, 34, 22, 12, 33, 4, 17, 22, 34, 54, 67],
                visits = [123, 323, 143, 132, 274, 223, 143, 156, 223, 223],
                budget = [23, 19, 11, 34, 42, 52, 35, 22, 37, 45, 55, 57],
                sales = [11, 9, 31, 34, 42, 52, 35, 22, 37, 45, 55, 57],
                targets = [17, 19, 5, 4, 62, 62, 75, 12, 47, 55, 65, 67],
                avrg = [117, 119, 95, 114, 162, 162, 175, 112, 147, 155, 265, 167];

            $("#shieldui-chart1").shieldChart({
                primaryHeader: {
                    text: "Visitors"
                },
                exportOptions: {
                    image: false,
                    print: false
                },
                dataSeries: [{
                    seriesType: "area",
                    collectionAlias: "Q Data",
                    data: performance
                }]
            });

            $("#shieldui-chart2").shieldChart({
                primaryHeader: {
                    text: "Login Data"
                },
                exportOptions: {
                    image: false,
                    print: false
                },
                dataSeries: [
                    {
                        seriesType: "polarbar",
                        collectionAlias: "Logins",
                        data: visits
                    },
                    {
                        seriesType: "polarbar",
                        collectionAlias: "Avg Visit Duration",
                        data: avrg
                    }
                ]
            });

            $("#shieldui-chart3").shieldChart({
                primaryHeader: {
                    text: "Sales Data"
                },
                dataSeries: [
                    {
                        seriesType: "bar",
                        collectionAlias: "Budget",
                        data: budget
                    },
                    {
                        seriesType: "bar",
                        collectionAlias: "Sales",
                        data: sales
                    },
                    {
                        seriesType: "spline",
                        collectionAlias: "Targets",
                        data: targets
                    }
                ]
            });

            $("#shieldui-grid1").shieldGrid({
                dataSource: {
                    data: gridData
                },
                sorting: {
                    multiple: true
                },
                paging: {
                    pageSize: 7,
                    pageLinksCount: 4
                },
                selection: {
                    type: "row",
                    multiple: true,
                    toggle: false
                },
                columns: [
                    { field: "id", width: "70px", title: "ID" },
                    { field: "name", title: "Person Name" },
                    { field: "company", title: "Company Name" },
                    { field: "email", title: "Email Address", width: "270px" }
                ]
            });
        });
    </script>
</body>
</html>
