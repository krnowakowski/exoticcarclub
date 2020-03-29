<!DOCTYPE html>
<html lang="pl" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
<?php
if (empty($path['call_parts'][PATH_SITE])) {
	$path['call_parts'][PATH_SITE] = '';
}
$is_vehicle = array_key_exists(PATH_SUBSITE, $path['call_parts']) ? $path['call_parts'][PATH_SUBSITE] : NULL;
?>
	<title><?=$translation->head_title($path['call_parts'][PATH_SITE], $is_vehicle)?> | Exotic Car Club</title>
	<meta name="Description" lang="pl" content="Exotic Car Club to przedsięwzięcie stworzone przez pasjonatów dla pasjonatów. Trafiają do nas wyłącznie ludzie kochający sportowe, ekskluzywne samochody, dlatego tak dobrze się rozumiemy." />
	
	<meta name="robots" content="index, follow" />
	<meta name="revisit-after" content="2 days" />
	
	<!-- Facebook OG Tags -->
	<meta property="og:title" content="Exotic Car Club" />
	<meta property="og:site_name" content="Exotic Car Club" />
	<meta property="og:url" content="http://exoticcarclub.pl" />
	<meta property="og:image" content="http://exoticcarclub.pl/img/og.jpg"/>
	<meta property="og:image:type" content="image/jpeg" />
	<meta property="og:image:width" content="1200" />
	<meta property="og:image:height" content="630" />
	<meta property="og:type" content="website" />
	<meta property="og:description" content="Exotic Car Club to przedsięwzięcie stworzone przez pasjonatów dla pasjonatów. Trafiają do nas wyłącznie ludzie kochający sportowe, ekskluzywne samochody, dlatego tak dobrze się rozumiemy." />
	
	<!--link href="//fonts.googleapis.com/css?family=Open+Sans:700,400|Open+Sans+Condensed:700,300&subset=latin,latin-ext" rel="stylesheet" type="text/css"-->
	<!--link href='//fonts.googleapis.com/css?family=Roboto:400,700,300&subset=latin,latin-ext' rel='stylesheet' type='text/css'-->
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	
	<!--link rel="stylesheet" href="/exoticcarclub/css/bootstrap.min.css"-->
	<link rel="stylesheet" type="text/css" href="/exoticcarclub/css/fullpage.css">
	<link rel="stylesheet" href="/exoticcarclub/css/style.css">

	<script>window.MSInputMethodContext && document.documentMode && document.write('<script src="/exoticcarclub/js/ie11CustomProperties.js"><\x2fscript>');</script>
</head>

<body data-barba="wrapper">

  <?php include (D_TEMPLATES.'menu.php'); ?>
  