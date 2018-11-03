<!DOCTYPE HTML>
<html lang="en-US">
<head>
<?php include $_SERVER['DOCUMENT_ROOT']."/gajs.php"; ?>
	<meta charset="UTF-8">
	<title>OWL's Asylum</title>
	<link rel="apple-touch-icon" sizes="57x57" href="/icons/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/icons/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/icons/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/icons/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/icons/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/icons/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/icons/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/icons/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/icons/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/icons/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/icons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/icons/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/icons/favicon-16x16.png">
	<!-- Manifest file -->
	<link rel="manifest" href="/manifest.json">
	
	<!-- CSS -->
<style type="text/css">
	<?php include './poisonforcrows.php'; ?>


</style>
	<meta name="msapplication-TileColor" content="#87af4a">
	<meta name="msapplication-TileImage" content="/icons/ms-icon-144x144.png">
	<meta name="theme-color" content="#87af4a">
	
	 <!-- Meta -->
    <meta name="author" content="Jay OWL Farand">  
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="https://owlasylum.net/icons/favicon-32x32.png"/>	
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:creator" content="@owlsasylum" />
    <meta property="twitter:site" content="@owlasylum" />  
    <!-- <meta property="og:url" content="https://owlasylum.net"> -->
	 <script>
		if ('serviceWorker' in navigator) {
		  window.addEventListener('load', function() {
			 navigator.serviceWorker.register('/sw.js').then(function(registration) {
				// Registration was successful
				console.log('ServiceWorker registration successful with scope: ', registration.scope);
			 }, function(err) {
				// registration failed :(
				console.log('ServiceWorker registration failed: ', err);
			 });
		  });
		}
		</script>
	
	<style type="text/css">
	<?php include 'style.php'; ?>
 </style>
</head>
