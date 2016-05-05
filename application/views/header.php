<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Title of the document</title>
<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/font-awesome.min.css">

<script type="text/javascript" src="<?php echo base_url();?>assets/js/jssor.slider.min.js"></script>
<script>
        jssor_1_slider_init = function() {
            
            var jssor_1_SlideshowTransitions = [
              {$Duration:1200,$Opacity:2}
            ];
            
            var jssor_1_options = {
              $AutoPlay: true,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1000);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            //responsive code end
        };
    </script>

</head>

<div class="container_fluid top_bar">
<div class="container">
<div class="col-md-12">
<div class="social"> English | French | Portuguees</div>

</div>
</div>
</div>
<div class="container_fluid header-img white-top">
<div class="container site-header">
<div class="col-md-3 site-logo">

<img src="<?php echo base_url();?>assets/images/logo.jpg">
</div>

<div class="col-md-9">
<div class="logs"><span><a href="<?php echo base_url();?>membership/login"> Login </a></span>|<span><a href="<?php echo base_url();?>membership/register"> Signup</a></span></div>

</div>
</div>

<div class="nav">
<div class="container">
<div class="col-md-8">
<div class="nav-menu">

				
<ul>
<li class="nav_border"><a href="<?php echo base_url();?>">HOME</a></li>
<li class="nav_border"><a href="<?php echo base_url();?>researcher">RESEARCHERS</a></li>
<li class="nav_border"><a href="<?php echo base_url();?>institution">INSTITUTIONS</a></li>
<li class="nav_border"><a href="<?php echo base_url();?>search">SEARCH</a></li>
<li class="nav_border"><a href="<?php echo base_url();?>contact">CONTACT</a></li>
<li><a href="<?php echo base_url();?>admin">ADMIN</a></li>
</ul>

</div>
</div>

<div class="span12">
            <form id="custom-search-form" class="form-search form-horizontal pull-right">
                <div class="input-append span12">
                    <input type="text" class="search-query mac-style" placeholder="Search">
                    <button type="submit" class="btn"><i class="icon-search"></i></button>
                </div>
            </form>
        </div>

</div>

</div>


</div>
	
<div class="container_fluid body-home">
<div class="container body-home2 shadow ">
<div class="col-md-8">

<div class="breadcrumbs">
<?php $crumbs = explode("/",$_SERVER["REQUEST_URI"]);
foreach($crumbs as $crumb){
    echo ucfirst(str_replace(array(".php","_"),array(""," "),$crumb) . ' ');
} ?>
 