<!DOCTYPE html>
<html lang="en">
<head>
<?php foreach ($siteayarlar as $k) {?>

<title> <?php echo $k->title;?> </title>
<meta name="description" itemprop="description" content="<?php echo $k->description;?>" />
<meta name="keywords" content="<?php echo $k->keywords;?>">
<?php } ?>
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
<script src="<?php echo base_url();?>
/template/carrental/js/tms-0.3.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>
/template/carrental/js/tms_presets.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>
/template/carrental/js/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>
/template/carrental/js/jquery.equalheights.js" type="text/javascript"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
<![endif]-->
 <style>
 .rslides {
  position: relative;
  list-style: none;
  overflow: hidden;
  width: 100%;
  padding: 0;
  margin: 0;
  }

.rslides li {
  -webkit-backface-visibility: hidden;
  position: absolute;
  display: none;
  width: 100%;
  left: 0;
  top: 0;
  }

.rslides li:first-child {
  position: relative;
  display: block;
  float: left;
  }

.rslides img {
  display: block;
  height: auto;
  float: left;
  width: 100%;
  border: 0;
  }
 </style>
</head>
<body id="page1">
<div class="main-bg">
  <div class="bg">
    <!--==============================header=================================<h3> <?php  echo "Hoşgeldiniz,"; echo $mailadres;?> <a href="<?php echo base_url('carrental/logout');?>">Logout</a></h3>-->   
     <header>
      <div class="main">
        <div class="wrapper">
          <h3>CarRental</h3><?php  echo "Hoşgeldiniz,"; echo $mailadres;?> <a href="<?php echo base_url('carrental/logout');?>">Logout</a></h3>
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
 <!--=       <div class="slider-wrapper">
          <div class="slider">
<?php foreach ($araclar as $arac) { ?>
           
		   <ul class="items" href="<?php echo base_url('carrental/detay'); echo "/".$arac->id;?>">
            
              <li> <img src="<?php echo base_url();?>/uploads/<?php echo $arac->foto;?>"  max-height="400" max-width="900" /><\li>


            
            </ul>
			<?php } ?>   
          </div>
          <a class="prev" href="#">prev</a> <a class="next" href="#">next</a> </div>
      </div>
      -->   

<div class="slider-wrapper">
 <div class="slider">
<ul class="rslides">
   
<?php foreach ($araclar as $arac) { ?>

 <li> 
 <a href="<?php echo base_url('carrental/detay'); echo "/".$arac->id;?>" ><img src="<?php echo base_url();?>/uploads/<?php echo $arac->foto;?>" /> </a>
 </li>
      <?php } ?> 
   
</ul>
</div>
</div>


    </header>
    <!--==============================content================================-->
    <section id="content">
     <h4 align="CENTER">ARAÇLARIMIZ</h4>
            <div class="main">

        <div class="container_12">

          <div class="wrapper p5">
<?php foreach ($araclar as $arac) { ?>

          <a href="<?php echo base_url('carrental/detay'); echo "/".$arac->id;?>"/>  
          <article class="grid_4">
              
             <div class="wrapper">
               <div class="extra-wrap">
			   <?php if ($arac->foto == "") {?>
						<figure class="img-indent"><img src="<?php echo base_url();?>/template/carrental/images/404.gif"  height="200" width="480"></figure>
                  
					<?php	}else {?>
							<figure class="img-indent"><img src="<?php echo base_url();?>/uploads/<?php echo $arac->foto;?>"  height="200" width="480"></figure>
                  <?php 
						}
?>
                
                  <h4>MARKA : <?php echo $arac->marka; ?></h4>
                  <p class="p2">MODEL : <?php echo $arac->model; ?></p>
                                   
              </div>
           
          </div>   

           </article>  
            </a>
            <?php } ?>    
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
<script type="text/javascript">
$(window).load(function () {
    $('.slider')._TMS({
        duration: 1000,
        easing: 'easeOutQuint',
        preset: 'simpleFade',
        slideshow: 7000,
        banners: false,
        pauseOnHover: true,
        pagination: false,
        pagNums: false,
        nextBu: '.next',
        prevBu: '.prev'
    });
});

// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlsContainer: $(".custom-controls-container"),
    customDirectionNav: $(".custom-navigation a")
  });
});
 $(function() {
    $(".rslides").responsiveSlides();
  });
(function(c,I,B){c.fn.responsiveSlides=function(l){var a=c.extend({auto:!0,speed:500,timeout:4E3,pager:!1,nav:!1,random:!1,pause:!1,pauseControls:!0,prevText:"Previous",nextText:"Next",maxwidth:"",navContainer:"",manualControls:"",namespace:"rslides",before:c.noop,after:c.noop},l);return this.each(function(){B++;var f=c(this),s,r,t,m,p,q,n=0,e=f.children(),C=e.size(),h=parseFloat(a.speed),D=parseFloat(a.timeout),u=parseFloat(a.maxwidth),g=a.namespace,d=g+B,E=g+"_nav "+d+"_nav",v=g+"_here",j=d+"_on",
w=d+"_s",k=c("<ul class='"+g+"_tabs "+d+"_tabs' />"),x={"float":"left",position:"relative",opacity:1,zIndex:2},y={"float":"none",position:"absolute",opacity:0,zIndex:1},F=function(){var b=(document.body||document.documentElement).style,a="transition";if("string"===typeof b[a])return!0;s=["Moz","Webkit","Khtml","O","ms"];var a=a.charAt(0).toUpperCase()+a.substr(1),c;for(c=0;c<s.length;c++)if("string"===typeof b[s[c]+a])return!0;return!1}(),z=function(b){a.before(b);F?(e.removeClass(j).css(y).eq(b).addClass(j).css(x),
n=b,setTimeout(function(){a.after(b)},h)):e.stop().fadeOut(h,function(){c(this).removeClass(j).css(y).css("opacity",1)}).eq(b).fadeIn(h,function(){c(this).addClass(j).css(x);a.after(b);n=b})};a.random&&(e.sort(function(){return Math.round(Math.random())-0.5}),f.empty().append(e));e.each(function(a){this.id=w+a});f.addClass(g+" "+d);l&&l.maxwidth&&f.css("max-width",u);e.hide().css(y).eq(0).addClass(j).css(x).show();F&&e.show().css({"-webkit-transition":"opacity "+h+"ms ease-in-out","-moz-transition":"opacity "+
h+"ms ease-in-out","-o-transition":"opacity "+h+"ms ease-in-out",transition:"opacity "+h+"ms ease-in-out"});if(1<e.size()){if(D<h+100)return;if(a.pager&&!a.manualControls){var A=[];e.each(function(a){a+=1;A+="<li><a href='#' class='"+w+a+"'>"+a+"</a></li>"});k.append(A);l.navContainer?c(a.navContainer).append(k):f.after(k)}a.manualControls&&(k=c(a.manualControls),k.addClass(g+"_tabs "+d+"_tabs"));(a.pager||a.manualControls)&&k.find("li").each(function(a){c(this).addClass(w+(a+1))});if(a.pager||a.manualControls)q=
k.find("a"),r=function(a){q.closest("li").removeClass(v).eq(a).addClass(v)};a.auto&&(t=function(){p=setInterval(function(){e.stop(!0,!0);var b=n+1<C?n+1:0;(a.pager||a.manualControls)&&r(b);z(b)},D)},t());m=function(){a.auto&&(clearInterval(p),t())};a.pause&&f.hover(function(){clearInterval(p)},function(){m()});if(a.pager||a.manualControls)q.bind("click",function(b){b.preventDefault();a.pauseControls||m();b=q.index(this);n===b||c("."+j).queue("fx").length||(r(b),z(b))}).eq(0).closest("li").addClass(v),
a.pauseControls&&q.hover(function(){clearInterval(p)},function(){m()});if(a.nav){g="<a href='#' class='"+E+" prev'>"+a.prevText+"</a><a href='#' class='"+E+" next'>"+a.nextText+"</a>";l.navContainer?c(a.navContainer).append(g):f.after(g);var d=c("."+d+"_nav"),G=d.filter(".prev");d.bind("click",function(b){b.preventDefault();b=c("."+j);if(!b.queue("fx").length){var d=e.index(b);b=d-1;d=d+1<C?n+1:0;z(c(this)[0]===G[0]?b:d);if(a.pager||a.manualControls)r(c(this)[0]===G[0]?b:d);a.pauseControls||m()}});
a.pauseControls&&d.hover(function(){clearInterval(p)},function(){m()})}}if("undefined"===typeof document.body.style.maxWidth&&l.maxwidth){var H=function(){f.css("width","100%");f.width()>u&&f.css("width",u)};H();c(I).bind("resize",function(){H()})}})}})(jQuery,this,0);

$(".rslides").responsiveSlides({
  auto: true,             // Boolean: Animate automatically, true or false
  speed: 1000,            // Integer: Speed of the transition, in milliseconds
  timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
  pager: false,           // Boolean: Show pager, true or false
  nav: false,             // Boolean: Show navigation, true or false
  random: false,          // Boolean: Randomize the order of the slides, true or false
  pause: false,           // Boolean: Pause on hover, true or false
  pauseControls: true,    // Boolean: Pause when hovering controls, true or false
  prevText: "Previous",   // String: Text for the "previous" button
  nextText: "Next",       // String: Text for the "next" button
  maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
  navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
  manualControls: "",     // Selector: Declare custom pager navigation
  namespace: "rslides",   // String: Change the default namespace used
  before: function(){},   // Function: Before callback
  after: function(){}     // Function: After callback
});
</script>
</body>
</html>