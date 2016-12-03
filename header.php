<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vedkrishna
 */

?><!DOCTYPE HTML>
<html class="no-js">

<!-- Mirrored from preview.imithemes.com/born-to-give/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Feb 2016 13:04:08 GMT -->
<head>
<!-- Basic Page Needs
  ================================================== -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Born to give - Charity/Crowdfunding HTML5 Template</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<!-- Mobile Specific Metas
  ================================================== -->
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="format-detection" content="telephone=no">
<!-- CSS
  ================================================== -->
<link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="<?php bloginfo('template_directory'); ?>/css/bootstrap-theme.css" rel="stylesheet" type="text/css">
<link href="<?php bloginfo('template_directory'); ?>/style.css" rel="stylesheet" type="text/css">
<link href="<?php bloginfo('template_directory'); ?>/vendor/magnific/magnific-popup.css" rel="stylesheet" type="text/css">
<link href="<?php bloginfo('template_directory'); ?>/vendor/owl-carousel/css/owl.carousel.css" rel="stylesheet" type="text/css">
<link href="<?php bloginfo('template_directory'); ?>/vendor/owl-carousel/css/owl.theme.css" rel="stylesheet" type="text/css">
<!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" /><![endif]-->
<link href="<?php bloginfo('template_directory'); ?>/css/custom.css" rel="stylesheet" type="text/css"><!-- CUSTOM STYLESHEET FOR STYLING -->
<!-- Color Style -->
<link class="alt" href="<?php bloginfo('template_directory'); ?>/colors/color1.css" rel="stylesheet" type="text/css">
<!--<link href="<?php bloginfo('template_directory'); ?>/style-switcher/css/style-switcher.css" rel="stylesheet" type="text/css">
-->
<!-- SCRIPTS
  ================================================== -->
<script src="<?php bloginfo('template_directory'); ?>/js/modernizr.js"></script><!-- Modernizr -->
<!-- <?php wp_head(); ?> -->
 <script type="text/javascript">
  var hash = '<?php echo $hash ?>';
  function submitPayuForm() {
    if(document.getElementById("hash"))
      hash = document.getElementById("hash").value;
    if(hash == '') {
      return;
    }
    var payuForm = document.forms.payuForm;
    //var payuForm = document.getElementById("payuForm");
    payuForm.submit();
  }
</script>
<?php wp_head(); ?>
</head>
<body class="home" onload="submitPayuForm()">
<script type="text/javascript">
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-88012898-1', 'auto');
  ga('send', 'pageview');

</script>
<!--[if lt IE 7]>
	<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->
<div class="body">
	<!-- Site Header Wrapper -->
    <div class="site-header-wrapper">
        <!-- Site Header -->
        <header class="site-header">
            <div class="container">
                <div class="site-logo">
                    <a href="index-2.html" class="default-logo"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="Logo"></a>
                    <a href="index-2.html" class="default-retina-logo"><img src="<?php bloginfo('template_directory'); ?>/images/logo%402x.png" alt="Logo" width="199" height="30"></a>
                    <a href="index-2.html" class="sticky-logo"><img src="<?php bloginfo('template_directory'); ?>/images/sticky-logo.png" alt="Logo"></a>
                    <a href="index-2.html" class="sticky-retina-logo"><img src="<?php bloginfo('template_directory'); ?>/images/sticky-logo%402x.png" alt="Logo" width="199" height="30"></a>
                </div>
             	<a href="#" class="visible-sm visible-xs" id="menu-toggle"><i class="fa fa-bars"></i></a>
                <div class="header-info-col"><i class="fa fa-phone"></i> 9810869242</div>
                <ul class="sf-menu dd-menu pull-right" role="menu">
                    <li>
                      <a href="<?php bloginfo('url'); ?>/">
                                                   <span class="label-nav">
                                                     Home</span></a>
                                </li>


                    <li> <a href="<?php bloginfo('url'); ?>/about">
                                            <span class="label-nav">
                                              About Us
                                            </span></a>
                                            </li>
                    		<li> <a href="<?php bloginfo('url'); ?>/causes">
                                            <span class="label-nav">
                                              Causes</span></a></li>
                    		<li> <a href="<?php bloginfo('url'); ?>/events">
                                            <span class="label-nav">
                                              Events</span></a></li>
                    		<li> <a href="<?php bloginfo('url'); ?>/our-impact">
                                            <span class="label-nav">
                                              Our Impact</span></a></li>
                        <li> <a href="<?php bloginfo('url'); ?>/blog">
                                            <span class="label-nav">
                                              Blog</span></a></li>
                    		<li> <a href="<?php bloginfo('url'); ?>/contact">
                                            <span class="label-nav">
                                              Contact Us</span></a></li>
                        </ul>
            </div>
        </header>
    </div>
