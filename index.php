<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9"> <![endif]-->
<!--[if gt IE 8]> <html> <![endif]-->
<!--[if !IE]><!--><html lang="en"><!-- <![endif]-->
<head>
	<title>Happy Birthday</title>
	<meta charset="UTF-8" />
	<meta name="description" content="Happy Birthday Xola">
	<meta name="robots" content="index, follow" />
	<link rel="author" href="https://plus.google.com/u/1/+AyushSharma1/" /> 
    <meta name="keywords" content="Birthday, Happy">
    <!-- Strat of Facebook Meta -->
    <meta property="og:type" content="E-Greeting" />
    <meta property="og:image" content="favicon.ico" />
    <meta property="og:description" content="Wish you a very Happy Birthday">
    <!-- End of Facebook Meta Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<link rel="stylesheet" type="text/css" href="loading.css">
	<link href='http://fonts.googleapis.com/css?family=Signika' rel='stylesheet' type='text/css'>
	<!-- <link href='http://fonts.googleapis.com/css?family=Nunito' rel='stylesheet' type='text/css'> -->
	<link rel="stylesheet/less" href="cake.less">
	<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.1.0/less.min.js"></script>
</head>

<body>
	<div class="loading"></div>
	<audio class="song" controls loop>
        <source src="hbd.mp3"></source>
	   Your browser isn't invited for super fun audio time.
	</audio>
	<div style="margin-left:50px;">
		<div class="balloons text-center" id="b1">
			<h2 style="color:#F2B300;">N</h2>
		</div>
		<div class="balloons text-center" id="b2">
			<h2 style="color:#0719D4;">U</h2>
		</div>
		<div class="balloons text-center" id="b3">
			<h2 style="color:#D14D39;">R</h2>
		</div>
		<div class="balloons text-center" id="b4">
			<h2 style="color:#8FAD00;">U</h2>
		</div>
		<div class="balloons text-center" id="b5">
			<h2 style="color:#8377E4;">L</h2>
		</div>
	</div>

    <img src="Balloon-Border.png" width="100%" class="balloon-border">
 

	<div class="container">
		
		<div class="row">
			<div class="col-md-2 col-xs-2 bulb-holder">
				<div class="bulb" id="bulb_yellow"></div>
			</div>
			<div class="col-md-2 col-xs-2 bulb-holder">
				<div class="bulb" id="bulb_red"></div>
			</div>
			<div class="col-md-2 col-xs-2 bulb-holder">
				<div class="bulb" id="bulb_blue"></div>
			</div>
			<div class="col-md-2 col-xs-2 bulb-holder">
				<div class="bulb" id="bulb_green"></div>
			</div>
			<div class="col-md-2 col-xs-2 bulb-holder">
				<div class="bulb" id="bulb_pink"></div>
			</div>
			<div class="col-md-2 col-xs-2 bulb-holder">
				<div class="bulb" id="bulb_orange"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 text-center">
				<img src="banner.png" class="bannar">
			</div>
		</div>
		<!-- <div class="row message">
			<div class="col-md-12"><p>Khushbu</p></div>
		</div> -->
		<div class="row cake-cover">
			<div class="col-md-12 texr-center">
				<div class="cake">
				  <div class="velas">
				    <div class="fuego"></div>
				    <div class="fuego"></div>
				    <div class="fuego"></div>
				    <div class="fuego"></div>
				    <div class="fuego"></div>
				  </div>
				  <div class="cobertura"></div>
				  <div class="bizcocho"></div>
				</div>
			</div>
		</div>
		<div class="row message">
			<div class="col-md-12">
				<p>Selamat Ulang Tahun Oi....</p>
				<p>Semoga Panjang Umur</p>
				<p>Sehat Selalu</p>
				<p>Dilancarkan Rejekinya</p>
				<p>ohh iya jangan lupa bahagia</p>
				<p>Dahlah itu aja lagi males mikir pula :v</p>
				<p>Wish You All The Best</p>
			</div>
		</div>
		<div class="navbar navbar-fixed-bottom">
			<div class="row">
				<div class="col-md-6 text-center col-md-offset-3">
					<button class="btn btn-primary" id="turn_on">Nyalakan Lampu</button>
					<button class="btn btn-primary" id="play">Play Music</button>
					<button class="btn btn-primary" id="bannar_coming">Tampilkan Dekorasi</button>
					<button class="btn btn-primary" id="balloons_flying">Tampilkan Balon</button>
					<button class="btn btn-primary" id="cake_fadein">ohh iya kuenya</button>
					<button class="btn btn-primary" id="light_candle"> Nyalakan Lilin</button>
					<button class="btn btn-primary" id="wish_message">Happy Birthday</button>
					<button class="btn btn-primary" id="story">Pesan</button>
					<!-- <button class="btn btn-primary" id="cake_cut">Lrt's Cut the Cake</button> -->
				</div>
			</div>
			<!-- <div class="col-md-2">
			</div>
			<div class="col-md-2">
			</div>
			<div class="col-md-2">
			</div>
			<div class="col-md-2">
			</div>
			<div class="col-md-2">
			</div> -->
		</div>


	</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script src="effect.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-58229732-1', 'auto');
  ga('send', 'pageview');

</script>
</html>
