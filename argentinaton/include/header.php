<?php
function dateqr(){
	echo '?'.date('Y_m_d_H_i');
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>

  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-36377554-9"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-36377554-9');
</script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Argentinatón | Atomic Lab</title>
    <meta name="description" content="Recorriendo toda la Argentina regalando prótesis impresas en 3D." />
    <meta name="keywords" content="manos mecánicas, manos 3D, prótesis, solidaridad, impresoras 3D, argentina, solidaridad, manos mecánicas 3D, Atomic Lab, Gino Tubaro" />

    <meta property="og:url" content="http://AtomicLab.org/Argentinaton">
    <meta property="og:title" content="#Argentinatón por Atomic Lab">
    <meta property="og:description" content="Recorriendo toda la Argentina regalando prótesis 3D.">
    <meta property="og:image" content="http://atomiclab.org/argentinaton/public/img/link.jpg">
    <meta property="og:image:type" content="image/png">
    <meta property="og:type" content="website">

	<link rel="apple-touch-icon" sizes="180x180" href="http://atomiclab.org/argentinaton/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="http://atomiclab.org/argentinaton/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="http://atomiclab.org/argentinaton/favicon-16x16.png">
<link rel="manifest" href="http://atomiclab.org/argentinaton/site.webmanifest">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">


	<!-- Style -->
  <link rel="stylesheet" href="public/css/styles.css<?php dateqr(); ?>">
	<link rel="stylesheet" href="public/css/styles2.css<?php dateqr(); ?>">

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Lato|Montserrat:300,400,500,700" rel="stylesheet">

	<!-- Scroll -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="public/js/slick.js" type="text/javascript" charset="utf-8"></script>
	<script src="public/js/parallax.js" type="text/javascript" charset="utf-8"></script>
	<script>
		$( document ).ready(function() {
			$('a[href*="#"]')
				// Remove links that don't actually link to anything
				.click(function(event) {
				// On-page links
				if (
				  location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
				  &&
				  location.hostname == this.hostname
				) {
				  // Figure out element to scroll to
				  var target = $(this.hash);
				  target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
				  // Does a scroll target exist?
				  if (target.length) {
				    // Only prevent default if animation is actually gonna happen
				    event.preventDefault();
				    $('html, body').animate({
				      scrollTop: target.offset().top
				    }, 1000, function() {
				      // Callback after animation
				      // Must change focus!
				      var $target = $(target);
				      $target.focus();
				      if ($target.is(":focus")) { // Checking if the target was focused
				        return false;
				      } else {
				        $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
				        $target.focus(); // Set focus again
				      };
				    });
				  }
				}
			});
			$(".center").slick({
		        dots: true,
		        arrows: false,
		        infinite: true,
		        centerMode: true,
		        slidesToShow: 1,
		        slidesToScroll: 4
		      });
		});
	</script>
	<script src='https://www.google.com/recaptcha/api.js?onload=loadCaptcha&render=explicit'></script>
</head>

<body class="">
