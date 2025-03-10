<?php
	if (session_status() !== PHP_SESSION_ACTIVE) {//Verificar se a sessão não já está aberta.
		session_start();
		//print_r($_SESSION['msg']);
	}

	//$msgRecebida = 'Teste';
	if( isset($_GET['msg']) && $_GET['msg'] != '' ){
		$msgRecebida = $_GET['msg'];
		if( $msgRecebida == 'success' ){
?>
			<script language="javascript" type="text/javascript">
				//inscricao();
				/*$(document).ready(function(){
					$('#form-enviar').on('click', () => {
						$('#toastForm').toast({delay: 20000});
						$('#toastForm').on('shown.bs.toast');
						$('#toastForm').toast('show');

					});
			});*/
				alert('Inscrição realizada com sucesso! Envie o áudio ou vídeo de sua música para o nosso whatsapp 8432046300.');	
			
			</script>";
<?php }} ?>


<!DOCTYPE html>
<html lang="pt-br">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Festival do Industriário 2025</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="">
  <meta name="generator" content="">
  
  <!-- theme meta -->
  <meta name="theme-name" content="eventre" />
  
  <!-- PLUGINS CSS STYLE -->
  <!-- Bootstrap -->
  <link href="plugins/bootstrap/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="plugins/font-awsome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Magnific Popup -->
  <link href="plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
  <!-- Slick Carousel -->
  <link href="plugins/slick/slick.css" rel="stylesheet">
  <link href="plugins/slick/slick-theme.css" rel="stylesheet">
  <!-- CUSTOM CSS -->
  <link href="css/style.css" rel="stylesheet">

  <!-- ICONS CONTACT CSS -->
	<link href="css/contact-icon.css" rel="stylesheet">

  <!-- FAVICON -->
  <link href="images/favicon.png" rel="shortcut icon">

  <!-- Bootstrap v5.2.0 -->
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>-->
	
<!-- Bootstrap CSS -->
<!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>



	
</head>

<body class="body-wrapper" id="home">
	<div class="end-0">
		<div class="toast-container p-4" style="height: 7%; text-align: center; position: fixed; width: 100%; z-index: 15; margin-top: 6rem; justify-items: end;">	
			<div class="toast bg-primary font-weight-bold border-0" id="toastInscrioes" data-autohide="true">
				<div class="toast-header">
					<svg xmlns="http://www.w3.org/2000/svg"  style="width: 2rem;" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M224 0c-17.7 0-32 14.3-32 32V51.2C119 66 64 130.6 64 208v18.8c0 47-17.3 92.4-48.5 127.6l-7.4 8.3c-8.4 9.4-10.4 22.9-5.3 34.4S19.4 416 32 416H416c12.6 0 24-7.4 29.2-18.9s3.1-25-5.3-34.4l-7.4-8.3C401.3 319.2 384 273.9 384 226.8V208c0-77.4-55-142-128-156.8V32c0-17.7-14.3-32-32-32zm45.3 493.3c12-12 18.7-28.3 18.7-45.3H224 160c0 17 6.7 33.3 18.7 45.3s28.3 18.7 45.3 18.7s33.3-6.7 45.3-18.7z"/></svg>
					<strong class="mr-auto text-primary" style="padding-left: 1rem;">ATENÇÃO!!!!!!! INSCRIÇÕES</strong>
					<!--<small class="text-muted">5 mins ago</small>-->
					<button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
				</div>
				<div class="toast-body">
				<h5>Polo Natal: 21/03</h5>
				<h5>Polo Caicó: 18/04</h5>
				<h5>Polo Mossoró: 25/04</h5>
				</div>
			</div>
		</div>
	</div>

	<div class="end-0">
		<div class="toast-container p-4" style="height: 7%; text-align: center; position: fixed; width: 100%; z-index: 15; margin-left: 6rem; margin-top: 6rem; justify-items: end;">	
			<div class="toast bg-primary font-weight-bold border-0" id="toastForm" data-autohide="true">
				<div class="toast-header">
					<svg xmlns="http://www.w3.org/2000/svg"  style="width: 2rem;" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M224 0c-17.7 0-32 14.3-32 32V51.2C119 66 64 130.6 64 208v18.8c0 47-17.3 92.4-48.5 127.6l-7.4 8.3c-8.4 9.4-10.4 22.9-5.3 34.4S19.4 416 32 416H416c12.6 0 24-7.4 29.2-18.9s3.1-25-5.3-34.4l-7.4-8.3C401.3 319.2 384 273.9 384 226.8V208c0-77.4-55-142-128-156.8V32c0-17.7-14.3-32-32-32zm45.3 493.3c12-12 18.7-28.3 18.7-45.3H224 160c0 17 6.7 33.3 18.7 45.3s28.3 18.7 45.3 18.7s33.3-6.7 45.3-18.7z"/></svg>
					<strong class="mr-auto text-primary" style="padding-left: 1rem;">PARABENS!!!!</strong>
					<!--<small class="text-muted">5 mins ago</small>-->
					<button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
				</div>
				<div class="toast-body" style="text-align: justify;">
				<h5>Seus dados foram enviados.</h5>
				<h5>Caso não tenha inserido o link de sua versão do Youtube, envie-nos o arquivo de vídeo através de nosso WHATSAPP 8432046300</h5>
				</div>
			</div>
		</div>
	</div>

	<!--<div class="row mt-5" style="margin-top: 8rem !important;">
		<div class="col">
			<h1 id="tituloTeste" class="mb-3"><?php echo $msgRecebida ?? "Toast" ?></h1>
			<form action="teste.php" method="post" enctype="multipart/form-data" class="row" style="text-align: left;">
			<div class="col-12">
						<button type="submit" class="btn btn-main-md" id="form-enviar" name="form-teste" value="ENVIAR">ENVIAR</button>
					</div>

			</form>
			</div>
	</div>-->

<!--========================================
=            Navigation Section            =
=========================================-->
<nav class="navbar main-nav border-less fixed-top navbar-expand-lg p-0">
  <div class="container-fluid p-0">
    <!-- logo -->
    <a class="navbar-brand" href="index.html">
      <img src="images/sesi-cultura.png" width="60" alt="logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#home">INÍCIO<span>/</span></a>          
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#objetivo">OBJETIVO<span>/</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#categoriapremiada">CATEGORIA PREMIADA<span>/</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#entendaofestival">ENTENDA O FESTIVAL<span>/</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#premiacao">PREMIAÇÃO<span>/</span></a>
        </li>
        <!--<li class="nav-item">
          <a class="nav-link" href="#!">SESI EXPOCULTURA<span>/</span></a>
        </li>-->
        <li class="nav-item">
          <a class="nav-link" href="#calendario">CALENDÁRIO<span>/</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#publicacoes">PUBLICAÇÕES<span>/</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#faleconosco">FALE CONOSCO</a>
        </li>
      </ul>
      <!--<a href="contact.html" class="ticket">
        <img src="images/icon/ticket.png" alt="ticket">
        <span>Buy Ticket</span>
      </a>-->
    </div>
  </div>
</nav>

<!--====  End of Navigation Section  ====-->


<!--============================
=            Banner            =
=============================-->

<section class="banner bg-banner-one overlay">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<!-- Content Block -->
				<div class="block text-center" style="min-height:350px; padding-top:0px">
					
					<div class="row">
						<div class="col-sm-12 col-md-6 col-lg-6">							
							<img src="images/festival.png" class="img-fluid">
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 col-md-6 col-lg-6">
							<img src="images/rn-festival-ind.png" class="img-fluid">
						</div>
						<div class="col-sm-12 col-md-6 col-lg-6" style="padding-top:0px">
							<img src="images/entoando.png" class="img-fluid"><br><br>
							<a href="#inscricao" class="btn btn-white-md">QUERO ME INSCREVER</a><br><br>
							<img src="images/inscricoes.png" class="img-fluid"><br><br>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</section>
	
<!--====  End of Banner  ====-->

<!--===========================
=            About            =
============================-->

<section class="section about" id="objetivo">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6 align-self-center">
				<div class="image-block bg-about">
					<img class="img-fluid" src="images/sobre.png" alt="">
				</div>
			</div>
			<div class="col-lg-8 col-md-6 align-self-center">
				<div class="content-block">
					<h2>Objetivo <span class="alternate"></span></h2>
					<div class="description-one">
						<p>
							FESTIVAL DO INDUSTRIÁRIO 2025 – SESI ENTOANDO CANÇÕES
						</p>
					</div>
					<div class="description-two">
						<p>
							O Festival de música SESI Entoando Canções, tem como objetivo celebrar o dia da indústria, estimular a criação artística do trabalhador, descobrir novos talentos e promover a interação entre as empresas e os industriários do Rio Grande do Norte, fomentando e difundindo a produção musical do país, fortalecendo o SESI como protagonista na construção do futuro do trabalho.
						</p>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</section>

<!--====  End of About  ====-->

<!--==============================
=            Speakers            =
===============================-->

<section class="section speakers bg-speaker overlay-lighter" id="categoriapremiada">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<!-- Section Title -->
				<div class="section-title white">
					<h3>Categoria <span class="alternate">Única</span></h3>
					<p style="text-align: justify;">
						Na categoria interpretação, convidamos você a apresentar a sua música, focando na expressividade e na emoção que deseja transmitir ao público. 
						A técnica vocal ou instrumental é importante, claro! Mas também a sua capacidade de conectar-se com a canção e com a audiência, trazendo sua própria personalidade e estilo à performance.<br>
						É uma oportunidade para você mostrar a sua criatividade e originalidade ao interpretar as obras.
					</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-6">
				<!-- Speaker 1 -->
				<div class="speaker-item">
					<div class="image">
						<img src="images/interpretacao.jpg" alt="speaker" class="img-fluid">
					</div>
					<div class="content text-center">
						<h5><a href="#">INTERPRETAÇÃO<br>&nbsp;</a></h5>
						<p></p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6">
				<!-- Speaker 2 -->
				<div class="speaker-item">
					<div class="image">
						<img src="images/musicainedita.jpg" alt="speaker" class="img-fluid">
					</div>
					<div class="content text-center">
						<h5><a href="#">MÚSICAS INÉDITAS E NÃO INÉDITAS</a></h5>
						<p></p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6">
				<!-- Speaker 3 -->
				<div class="speaker-item">
					<div class="image">
						<img src="images/musicaeditada.jpg" alt="speaker" class="img-fluid">
					</div>
					<div class="content text-center">
						<h5><a href="#">MÚSICAS JÁ GRAVADAS E EDITADAS</a></h5>
						<p></p>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</section>

<!--====  End of Speakers  ====-->



<section class="section single-speaker" id="entendaofestival">
	<div class="container">
		<div class="block">
			<div class="row">
				<div class="col-lg-5 col-md-6 align-self-md-center">
					<div class="image-block">
						<img src="images/entenda.jpg" class="img-fluid" alt="Festival">
					</div>
				</div>
				<div class="col-lg-7 col-md-6 align-self-center">
					<div class="content-block">
						<div class="name">
							<h3>Entenda o Festival</h3>
						</div>
						<div class="profession">
							<p>O Festival do Industriário 2025 – SESI Entoando Canções será dividido em duas etapas.</p>
						</div>						
						<div class="block-2" style=" margin-top:-50px">
						<div class="row">
							<div class="col-md-12">
								<div class="personal-info">
									<strong>Etapa Preliminar</strong>
									<p>Virtual, composta por um júri especializado, que selecionará o material enviado no ato da inscrição.</p>
									
									<strong>Etapa Final</strong>
									<p>Presencial e regional, onde os selecionados farão suas apresentações ao vivo, nas fases semifinais regionais e final.</p>
									
									<p>O primeiro passo para a sua participação como candidato no Festival do Industriário 2025 - SESI Entoando Canções é o Edital de seleção!<br>
									Você pode se inscrever online, na sua empresa ou ainda no SESI Solar Bela Vista, de acordo com o caledário abaixo:</p>
									<ul class="m-0 p-0">
										<li>Polo Natal:  21/03</li>
										<li>Polo Caicó: 18/04</li>
										<li>Polo Mossoro: 25/04</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</section>

<!--=================================
=            Teaser 2024            =
==================================-->

<section class="section speakers bg-speaker overlay-lighter" id="teaser">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<!-- Section Title -->
				<div class="section-title white">
					<h3>Festival do Industriário 2024 <span class="alternate">SESI Entoando Canções</span></h3>
					<h3>Sinta a atmosfera do Festival</h3>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<!-- Speaker 1 -->
				<div class="speaker-item">					
					<div class="image">
						<div class="embed-responsive embed-responsive-16by9">
							<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/2JVOtS6RJ74?rel=0" allowfullscreen></iframe>
						</div>
					</div>
				</div>				
			</div>
		</div>
	</div>
</section>

<!--====  Teaser 2024  ====-->

<!--=================================
=            Testimonial            =
==================================-->

<section class="section testimonial">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title">
					<h3>Inscrições Regionais</h3>
				</div>
			</div>
		</div>
		<div class="row mt-20">
			<!--<div class="col-lg-4 col-md-6 mb-20">-->
				<div class="col-lg-6 col-md-auto mb-20">
				<!-- Testimonial -->
				<div class="testimonial-item">
					<!-- Given Comment -->
					<div class="comment">
						<p>9 candidatos por polo concorrem nas semifinais,  em Natal, Mossoró e Caicó .</p>
					</div>
				</div>
			</div>
			<!--<div class="col-lg-4 col-md-6">-->
			<div class="col-lg-6 col-md-auto mb-20">
				<!-- Testimonial -->
				<div class="testimonial-item">
					<!-- Given Comment -->
					<div class="comment">
						<p>3 Semifinalistas por região são premiados e classificados para a grande final.</p>
					</div>
				</div>
			</div>
			<!--<div class="col-lg-4 col-md-6">-->
			<div class="col-lg-6 col-md-auto mb-20">
				<!-- Testimonial -->
				<div class="testimonial-item">
					<!-- Given Comment -->
					<div class="comment">
						<p>Oficinas de preparacão vocal e cênica são oferecidas para os Semifinalistas.</p>
					</div>
				</div>
			</div>
			<!--<div class="col-lg-4 col-md-6">-->
			<div class="col-lg-6 col-md-auto mb-20">
				<!-- Testimonial -->
				<div class="testimonial-item">
					<!-- Given Comment -->
					<div class="comment" style="min-height: 8rem;">
						<p>A grande final em Natal premia 3 finalistas da categoria única.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="gallery-full section pb-0">
	<div class="container-fluid p-0">
		<div class="row no-gutters">
			<!-- Gallery Image -->
			<div class="col-lg-3 col-md-4">
				<div class="image">
					<img src="images/gallery/foto1.jpg" alt="gallery-image" class="img-fluid">
					<div class="primary-overlay">
						<a class="image-popup" data-effect="mfp-with-zoom" href="images/gallery/foto1.jpg"><i
								class="fa fa-picture-o"></i></a>
					</div>
				</div>
			</div>
			<!-- Gallery Image -->
			<div class="col-lg-3 col-md-4">
				<div class="image">
					<img src="images/gallery/foto2.jpg" alt="gallery-image" class="img-fluid">
					<div class="primary-overlay">
						<a class="image-popup" data-effect="mfp-with-zoom" href="images/gallery/foto2.jpg"><i
								class="fa fa-picture-o"></i></a>
					</div>
				</div>
			</div>
			<!-- Gallery Image -->
			<div class="col-lg-3 col-md-4">
				<div class="image">
					<img src="images/gallery/foto3.jpg" alt="gallery-image" class="img-fluid">
					<div class="primary-overlay">
						<a class="image-popup" data-effect="mfp-with-zoom" href="images/gallery/foto3.jpg"><i
								class="fa fa-picture-o"></i></a>
					</div>
				</div>
			</div>
			<!-- Gallery Image -->
			<div class="col-lg-3 col-md-4">
				<div class="image">
					<img src="images/gallery/foto4.jpg" alt="gallery-image" class="img-fluid">
					<div class="primary-overlay">
						<a class="image-popup" data-effect="mfp-with-zoom" href="images/gallery/foto4.jpg"><i
								class="fa fa-picture-o"></i></a>
					</div>
				</div>
			</div>
			<!-- Gallery Image -->
			<div class="col-lg-3 col-md-4">
				<div class="image">
					<img src="images/gallery/foto5.jpg" alt="gallery-image" class="img-fluid">
					<div class="primary-overlay">
						<a class="image-popup" data-effect="mfp-with-zoom" href="images/gallery/foto5.jpg"><i
								class="fa fa-picture-o"></i></a>
					</div>
				</div>
			</div>
			<!-- Gallery Image -->
			<div class="col-lg-3 col-md-4">
				<div class="image">
					<img src="images/gallery/foto6.jpg" alt="gallery-image" class="img-fluid">
					<div class="primary-overlay">
						<a class="image-popup" data-effect="mfp-with-zoom" href="images/gallery/foto6.jpg"><i
								class="fa fa-picture-o"></i></a>
					</div>
				</div>
			</div>
			<!-- Gallery Image -->
			<div class="col-lg-3 col-md-4">
				<div class="image">
					<img src="images/gallery/foto7.jpg" alt="gallery-image" class="img-fluid">
					<div class="primary-overlay">
						<a class="image-popup" data-effect="mfp-with-zoom" href="images/gallery/foto7.jpg"><i
								class="fa fa-picture-o"></i></a>
					</div>
				</div>
			</div>
			<!-- Gallery Image -->
			<div class="col-lg-3 col-md-4">
				<div class="image">
					<img src="images/gallery/foto8.jpg" alt="gallery-image" class="img-fluid">
					<div class="primary-overlay">
						<a class="image-popup" data-effect="mfp-with-zoom" href="images/gallery/foto8.jpg"><i
								class="fa fa-picture-o"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="section pricing" id="premiacao">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title">
					<h3>Premiação <span class="alternate"></span></h3>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<!-- Pricing Item -->
				<div class="pricing-item">
					<div class="pricing-body">
						<!-- Feature List -->
						<ul class="feature-list m-0 p-0">
							<li><p><span class="fa fa-check-circle available"></span>9 Finalistas premiados nos pólos Natal, Mossoró e Caicó</p></li>
							<li><p><span class="fa fa-check-circle available"></span>3 Finalistas Premiados na Grande Final </p></li>
							<li><p><span class="fa fa-check-circle available"></span>3 Indústrias premiadas como finalistas na Grande Final</p></li>
							<li><p><span class="fa fa-check-circle available"></span>3 Indústrias premiadas com o maior número de inscritos no Festival</p></li>
							<li><p><span class="fa fa-check-circle available"></span>4 torcidas premiadas como melhor Torcida</p></li>
						</ul>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</section>

<section class="section schedule" id="calendario">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title">
					<h3>Calendário<span class="alternate"></span></h3>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">				
				<div class="schedule-contents bg-schedule">
					<div class="tab-content" id="pills-tabContent">
					  <div class="tab-pane fade show active schedule-item" id="nov20">
					  	<!-- Headings -->
					  	<ul class="m-0 p-0">
					  		<li class="headings">
					  			<div class="time">Data</div>
					  			<div class="speaker">Etapa</div>
					  		</li>
					  		<!-- Schedule Details -->
					  		<li class="schedule-details">
					  			<div class="block">
					  				<!-- time -->
							  		<div class="time">
							  			<i class="fa fa-calendar"></i>
							  			<span class="time">21 de Março</span>
							  		</div>
							  		<!-- Speaker -->
							  		<div class="speaker">
										<span class="name">Data limite para inscrições online e presencial para o Polo Natal.</span>
							  		</div>
					  			</div>
					  		</li>
					  		<!-- Schedule Details -->
					  		<li class="schedule-details">
					  			<div class="block">
						  			<!-- time -->
							  		<div class="time">
							  			<i class="fa fa-calendar"></i>
							  			<span class="time">12 de Abril</span>
							  		</div>
							  		<!-- Speaker -->
							  		<div class="speaker">
										<span class="name">Fase semifinal Natal, no SESI Escola São Gonçalo do Amarante.</span>
							  		</div>
					  			</div>
					  		</li>
					  		<!-- Schedule Details -->
					  		<li class="schedule-details">
					  			<div class="block">
						  			<!-- time -->
							  		<div class="time">
							  			<i class="fa fa-calendar"></i>
							  			<span class="time">18 de Abril</span>
							  		</div>
							  		<!-- Speaker -->
							  		<div class="speaker">
										<span class="name">Data limite para inscrições online e presencial para o Polo Caicó.</span>
							  		</div>
					  			</div>
					  		</li>
					  		<!-- Schedule Details -->
					  		<li class="schedule-details">
					  			<div class="block">
						  			<!-- time -->
							  		<div class="time">
							  			<i class="fa fa-calendar"></i>
							  			<span class="time">27 de Abril</span>
							  		</div>
							  		<!-- Speaker -->
							  		<div class="speaker">
										<span class="name">Data limite para inscrições online e presencial para o Polo Mossoró.</span>
							  		</div>
					  			</div>
					  		</li>
					  		<!-- Schedule Details -->
					  		<li class="schedule-details">
					  			<div class="block">
						  			<!-- time -->
							  		<div class="time">
							  			<i class="fa fa-calendar"></i>
							  			<span class="time">10 de Maio</span>
							  		</div>
							  		<!-- Speaker -->
							  		<div class="speaker">
										<span class="name">Fase Semifinal em Caicó, no Centro Cultural Adjuto Dias.</span>
							  		</div>
					  			</div>
					  		</li>
					  		<!-- Schedule Details -->
					  		<li class="schedule-details">
					  			<div class="block">
						  			<!-- time -->
							  		<div class="time">
							  			<i class="fa fa-calendar"></i>
							  			<span class="time">17 de Maio</span>
							  		</div>
							  		<!-- Speaker -->
							  		<div class="speaker">
										<span class="name">Fase Semifinal em Mossoró, no SESI Escola Mossoró.</span>
							  		</div>
					  			</div>
					  		</li>
					  		<!-- Schedule Details -->
					  		<li class="schedule-details">
					  			<div class="block">
						  			<!-- time -->
							  		<div class="time">
							  			<i class="fa fa-calendar"></i>
							  			<span class="time">26 a 28 de Maio</span>
							  		</div>
							  		<!-- Speaker -->
							  		<div class="speaker">
										<span class="name">Cursos de preparação vocal e cênica para os finalistas, em Natal.</span>
							  		</div>
					  			</div>
					  		</li>
					  		<!-- Schedule Details -->
					  		<li class="schedule-details">
					  			<div class="block">
						  			<!-- time -->
							  		<div class="time">
							  			<i class="fa fa-calendar"></i>
							  			<span class="time">29 de Maio</span>
							  		</div>
							  		<!-- Speaker -->
							  		<div class="speaker">
										<span class="name">Grande Final, no Teatro Riachuelo, em Natal.</span>
							  		</div>
					  			</div>
					  		</li>
					  		
					  	</ul>
					  </div>
					  
					</div>
				</div>
				
			</div>
		</div>
	</div>
</section>


<section class="cta-ticket bg-ticket overlay-dark">
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<!-- Get ticket info -->
				<div class="content-block">
					<h2><span class="alternate">INSCREVA-SE AGORA!</span></h2>
					<h2>Mostre o seu talento para o mundo</h2>
				</div>
			</div>
		</div>
	</div>
	<div class="image-block"><img src="images/speakers/speaker-ticket.png" alt="" class="img-fluid"></div>
</section>

<!--====  End of Call to Action Ticket  ====-->

<!--==============================
=            Publicações          =
===============================-->

<section class="section schedule" id="publicacoes">
	<div class="container">
		<!--<div class="row">
			<div class="col-12">
				<div class="section-title">
					<h3>Event <span class="alternate">Schedule</span></h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusm tempor incididunt ut labore</p>
				</div>
			</div>
		</div>-->
		<div class="row">
			<div class="col-12">
				<div class="schedule-tab">
					<ul class="nav nav-pills text-center">
						<li class="nav-item">
							<a class="nav-link active" href="#guia-public" data-toggle="pill">
							Edital e Publicações
							<!--<span>20 November 2017</span>-->
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#forms" data-toggle="pill">
							Formulários
							<!--<span>21 November 2017</span>-->
							</a>
						</li>
						<!--<li class="nav-item">
							<a class="nav-link" href="#nov22" data-toggle="pill">
							Day-03
							<span>22 November 2017</span>
							</a>
						</li>-->
					</ul>
				</div>
				<div class="schedule-contents bg-schedule">
					<div class="tab-content" id="pills-tabContent">
						<div class="tab-pane fade show active schedule-item" id="guia-public">
							<!-- Headings -->
							<ul class="m-0 p-0">
								<li class="headings">
									<div class="time">Documentos</div>
									<!--<div class="speaker">Download</div>-->
								</li>
								<!-- Schedule Details -->
								<li class="schedule-details">
									<div class="block">
										<!-- time -->
										<!--<div class="time">
											<i class="fa fa-clock-o"></i>
											<span class="time">9.00 AM</span>
										</div>-->
										<!-- Speaker -->
										<div class="speaker">
											<a href="files/docs/Edital Festival do Industriário 2025.pdf" target="_blank" rel="noopener noreferrer">EDITAL FESTIVAL DO INDUSTRIÁRIO 2025 - Publicado em 18/02/2025</a>
											<!--<img src="images/speakers/speaker-thumb-one.jpg" alt="speaker-thumb-one">
											<span class="name">Samanta Doe</span>-->
										</div>
									</div>
								</li>
								<!-- Schedule Details -->
								<!--<li class="schedule-details">
									<div class="block"> -->
										<!-- time -->
										<!--<div class="time">
											<i class="fa fa-clock-o"></i>
											<span class="time">10.00 AM</span>
										</div> -->
										<!-- Speaker -->
										<!--<div class="speaker">
											<img src="images/speakers/speaker-thumb-two.jpg" alt="speaker-thumb-two">
											<span class="name">Zerad Pawel</span>
										</div> -->
										<!-- Subject -->
										<!--<div class="subject">Principle of Wp</div> -->
										<!-- Venue -->
										<!--<div class="venue">Auditorium B</div>
									</div>
								</li> -->
							</ul>
						</div>
						<div class="tab-pane fade schedule-item" id="forms">
							<!-- Headings -->
							<ul class="m-0 p-0">
								<li class="headings">
									<div class="time">Documentos</div>
								</li>
								<!-- Schedule Details -->
								<li class="schedule-details">
									<div class="block">
										<div class="speaker">
											<a href="files/docs/Declaração de vedação ao nepotismo.pdf" target="_blank" rel="noopener noreferrer">DECLARAÇÃO DE VEDAÇÃO AO NEPOTISMO - Publicado em 21/02/2025</a>
										</div>
									</div>
								</li>
								<!-- Schedule Details -->
								<li class="schedule-details">
									<div class="block">
										<div class="speaker">
											<a href="files/docs/Termo de autorização de gravação musicale uso de imagem" target="_blank" rel="noopener noreferrer">TERMO DE AUTORIZAÇÃO DE GRAVAÇÃO DE MÚSICA E USO DE IMAGEM - Publicado em 21/02/2025</a>
										</div>
									</div>
								</li>
								<!-- Schedule Details -->
								<li class="schedule-details">
									<div class="block">
										<div class="speaker">
											<a href="files/docs/Termo de Confidencialidade.pdf" target="_blank" rel="noopener noreferrer">TERMO DE CONFIDENCIALIDADE - Publicado em 21/02/2025</a>
										</div>
									</div>
								</li>
								<!-- Schedule Details -->
								<li class="schedule-details">
									<div class="block">
										<div class="speaker">
											<a href="files/docs/Termo de consentimento para tratamento de dados pessoais LGPD.pdf" target="_blank" rel="noopener noreferrer">TERMO DE CONSENTIMENTO PARA TRATAMENTO DE DADOS PESSOAIS LGPD - Publicado em 21/02/2025</a>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--====  End of Publicações  ====-->

<section class="section contact-form" id="inscricao">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			<div class="block">				
				<div class="row">
					<div class="col-12">
						<div class="section-title">
							<h3>Formulário de <span class="alternate">Inscrição</span></h3>
						</div>
					</div>
				</div>
				<form action="enviar.php" method="post" enctype="multipart/form-data" class="row" style="text-align: left;">
					<!-- <input type="text" class="form-control main" placeholder="Your Name" required> -->
					<div class="col-md-4">
						<div class="form-group">
							<!--<select class="form-control main" id="categoria" onchange="onChangeCategoria(this)" name="categoria" title="Selecione a categoria de inscrição." readonly disabled="true" required>
								<option value="">CATEGORIA</option>
								<option value="CATEGORIA I">CATEGORIA I - Interpretação</option>
								<option value="CATEGORIA II">CATEGORIA II - Música Autoral</option>
							</select> -->
							<font class="titulo">CATEGORIA</font>
							<input type="text" class="form-control main" id="categoria" name="categoria" disabled="true" value="CATEGORIA - Interpretação" placeholder="Categoria única - Interpretação - Músicas não inéditas - Músicas já gravadas e editadas" required>
						</div>
					</div>
					<!-- <input type="text" class="form-control main" placeholder="Your Name" required> -->
					<div class="col-md-4">
						<div class="form-group">
							<font class="titulo">POLO</font>
							<select class="form-control main" id="polo" name="polo" title="Selecione o polo de inscrição." required>
								<option value="">POLO</option>
								<option value="NATAL">NATAL</option>
								<option value="MOSSORO">MOSSORÓ</option>
								<option value="CAICO">CAICÓ</option>
							</select>
						</div>
					</div>
					<!-- <input type="text" class="form-control main" placeholder="Your Name" required> -->
					<div class="col-md-4">
						<div class="form-group">
							<font class="titulo">TIPO DE INSCRIÇÃO</font>
							<select class="form-control main" id="tipo_inscricao" name="tipo_inscricao" title="Selecione o tipo de inscricão" onchange="onChangeTipoInscricao(this)" required>
								<option value="">TIPO DE INSCRIÇÃO</option>
								<option value="EMPREGADOR">EMPREGADOR</option>
								<option value="INDUSTRIARIO">INDUSTRIÁRIO</option>
								<option value="DEPENDENTE">DEPENDENTE</option>
								<option value="CONJUGE">CÔNJUGE</option>
							</select>
						</div>
					</div>

					<div class="col-md-6">
						<font class="titulo">NOME</font>
						<input type="text" class="form-control main" name="nome" placeholder="Nome" title="Insira seu nome completo." required>
					</div>
					<div class="col-md-6">
						<font class="titulo">NOME ARTÍSTICO</font>
						<input type="text" class="form-control main" name="nome_artistico" placeholder="Nome Artístico" title="Insira seu nome artístico." required>
					</div>
					<div class="col-md-3">
						<font class="titulo">CPF</font>
						<input type="text" class="form-control main" name="cpf" id="cpf" placeholder="CPF" maxlength="14" max="14" title="Insira o seu CPF" required>
					</div>
					<div class="col-md-3">
						<font class="titulo">DATA DE NASCIMENTO</font>
						<input type="text" class="form-control main" name="data_nascimento" id="data_nascimento" placeholder="Data Nascimento" maxlength="10" max="10" title="Insira sua data de nascimento" required>
					</div>
					<div class="col-md-3">
						<font class="titulo">TELEFONE</font>
						<input type="text" class="form-control main" name="telefone" id="telefone" placeholder="Telefone" maxlength="14" max="14" title="Insira seu telefone" required>
					</div>
					<div class="col-md-3">
						<font class="titulo">EMAIL</font>
						<input type="email" class="form-control main" name="email" placeholder="Email" title="Insira seu email" required>
					</div>
					<div class="col-md-6">
						<font class="titulo">ENDEREÇO</font>
						<input type="text" class="form-control main" name="endereco" placeholder="Endereço" title="Insira seu endereço" required>
					</div>
					<div class="col-md-6">
						<font class="titulo">EMPRESA</font>
						<input type="text" class="form-control main" name="empresa" placeholder="Empresa" title="Insira o nome da empresa" required>
					</div>
					<div class="col-md-6">
						<font class="titulo">CARGO</font>
						<input type="text" class="form-control main" name="cargo" id="cargo" placeholder="Cargo" title="Insira seu cargo" disabled="true">
					</div>
					<div class="col-md-6">
						<font class="titulo">MATRÍCULA</font>
						<input type="text" class="form-control main" name="matricula" id="matricula" placeholder="Matrícula" title="Insira sua matrícula" disabled="true">
					</div>
					<div class="col-md-6">
						<font class="titulo">MÚSICA</font>
						<input type="text" class="form-control main" name="musica" placeholder="Música" title="Nome da Música" required>
					</div>
					<div class="col-md-6">
						<font class="titulo">COMPOSITOR</font>
						<input type="text" class="form-control main" name="compositor" placeholder="Compositor" title="Insira o nome do compositor da música" required>
					</div>
					<div class="col-md-6">
						<font class="titulo">LINK DO YOUTUBE OU ENVIAR VÍDEO PELO WHATSAPP 8432046300</font>
						<input type="text" class="form-control main" name="link_youtube" placeholder="" title="Insira link da sua versão do vídeo do Youtube ou enviar o vídeo através do Whatsapp 8432046300">
					</div>
					<div class="col-md-6" id="contrato_social" onchange="return validarArquivo(this)">
						<font class="titulo">CONTRATO SOCIAL</font>
						<input type="file" class="form-control main" name="contrato_social" id="contrato_social_arquivo" accept="application/pdf" title="Cópia do Contrato social da empresa, quando o candidato for empregador." disabled="true">
					</div>
					<div class="col-md-6" id="dependente" onchange="return validarArquivo(this)">
						<font class="titulo">DOCUMENTO DEPENDENTE</font>
						<input type="file" class="form-control main" name="doc_dependente" id="dependente_arquivo" title="Cópia da Carteira de Identidade do dependente (filho ou cônjuge) ou cópia da Certidão de Nascimento ou cópia da Certidão de Casamento (cônjuge) ou Declaração convivência marital autenticada em Cartório (cônjuge)." disabled="true">
					</div>
					<div class="col-md-6" id="identidade_profissional" onchange="return validarArquivo(this)">
						<font class="titulo">COMPROVANTE DE VÍNCULO EMPREGATÍCIO</font>
						<input type="file" class="form-control main" name="id_profissional" id="identidade_profissional_arquivo" title="Cópia da carteira de trabalho ou Contracheque ou Contrato de trabalho ou Crachá." required>
					</div>
					<div class="col-md-6" id="rg_cnh" onchange="return validarArquivo(this)">
						<font class="titulo">RG OU CNH</font>
						<input type="file" class="form-control main" multiple="multiple" name="rg_cnh[]" id="rg_cnh_arquivo" title="Seleciona os arquivos da Cédula de identidade ou Carteira Nacional de Habilitação (CNH)." required>
					</div>
					<div class="col-md-6" id="comprovante_residencia" onchange="return validarArquivo(this)">
						<font class="titulo">COMPROVANTE DE RESIDÊNCIA</font>
						<input type="file" class="form-control main" name="comprovante_residencia" id="comprovante_residencia_arquivo" title="Comprovante de residência com data inferior a três meses." required>
					</div>
					<!--<div class="col-md-6" id="letra_cifrada" onchange="return validarArquivo(this)" style="display: none;">
						<font class="titulo">LETRA CIFRADA (OPCIONAL)</font>
						<input type="file" class="form-control main" name="letra_cifrada" id="letra_cifrada_arquivo" title="Para músicas autorais, letra cifrada (opcional).">
					</div> -->
					<!--<div class="col-md-6">
						<label>
							<input type="checkbox" required>
								<font color="#000">
									Estou ciente de que, para concluir minha inscrição, enviarei o áudio ou vídeo da música através do número de WhatsApp fornecido nesta página após a submissão do formulário.
								</font>
						</label>
					</div> -->

					<div class="col-md-6">
						<label>
							<input type="checkbox" required>
								<font color="#000">
									Está ciente da obrigatoriedade do uso da banda base disponibilizada pelo SESI/RN?
								</font>
						</label>
					</div>

					
					<div class="col-12">
						<button type="submit" class="btn btn-main-md" id="form-enviar" name="form-enviar" value="ENVIAR">ENVIAR</button>
					</div>
				</form>
			</div>
			</div>
		</div>		
	</div>

	
</section>

<section id="faleconosco">
	<footer class="footer-main">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="block text-center">
						<!--<div class="row">
							<div class="col mt-20" style="text-align: end; padding: 0.6rem;">
								<div class="footer-logo">
									<img src="images/sesi-cultura-branco.png" width="100" alt="SESI Cultura" class="img-fluid">
								</div>
							</div>
							<div class="col" style="text-align: left;">
								<div class="footer-logo">
									<img src="images/fiern.png" alt="Co Produção FIERN" class="img-fluid">
								</div>
							</div>
						</div>-->

						<div class="row">
							<div class="col">
								<div class="footer-logo">
									<img src="images/sesi-fiern.png" alt="Co Produção FIERN" class="img-fluid">
								</div>
							</div>
						</div>
					  
						
						<div class="row">
								<div class="col-md-4 col-sm-12 col-lg-4 mt-20">									
									<div class="row">
										<div class="col-3">
											<div class="social-circle">
												<font><i class="fa fa-instagram"></i></font>
											</div>											
										</div>
										<div class="col-9 text-left">
											<a style="text-decoration: none;" href="https://www.instagram.com/sesirn/">
												<h5><font color="#FFF">Instagram</font></h5>
												<p>@SESIRN</p>
											</a>
										</div>
									</div>									
								</div>
								<div class="col-md-4 col-sm-12 col-lg-4 mt-20">									
									<div class="row">
										<div class="col-3">
											<div class="social-circle">
												<font><i class="fa fa-envelope"></i></font>
											</div>											
										</div>
										<div class="col-9 text-left">
											<a style="text-decoration: none;" href="mailto:festivaldoindustriario@rn.sesi.org.br">
												<h5><font color="#FFF">E-mail</font></h5>
												<p>festivaldoindustriario@rn.sesi.org.br</p>
											</a>
										</div>
									</div>									
								</div>
								<div class="col-md-4 col-sm-12 col-lg-4 mt-20">									
									<div class="row">
										<div class="col-3">
											<div class="social-circle">
												<font><i class="fa fa-whatsapp"></i></font>
											</div>											
										</div>
										<div class="col-9 text-left">
											<a style="text-decoration: none;" href="https://api.whatsapp.com/send?phone=5584322046300">
												<h5><font color="#FFF">Telefone e WhatsApp</font></h5>
												<p>84 3220-0465 e 84 32204-6300</p>
												<p>Atendimento de segunda a sexta, das 8h às 17h</p>
											</a>
										</div>
									</div>									
								</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Subfooter -->
	<footer class="subfooter">
		<div class="container">
			<div class="row">
				<div style="align-content: center;" class="">
					<div style="align-content: center;" class="copyright-text">
						<p>Av. Senador Salgado Filho, 2860 - Lagoa Nova - Natal/RN - CEP: 59075-900</p>
						<p class="mbr-text mb-0 mbr-fonts-style display-7">Desenvolvido por&nbsp;<strong>GCTI - FIERN</strong></p>
					</div>
				</div>
			</div>
		</div>		
	</footer>
</section>
<!-- BEGIN GADWP v5.1.1.1 Universal Analytics - https://deconf.com/google-analytics-dashboard-wordpress/ -->
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
	ga('create', 'UA-5520715-2', 'auto');
	ga('send', 'pageview');
</script>
<!-- END GADWP Universal Analytics -->

<!--<script type='text/javascript'>
	//alert('ATENÇÃO!!!! ESTÁ DISPONÍVEL O RESULTADO DAS SEMIFINAIS DO POLO NATAL');
	window.onload = (event) => {
		let myAlert = document.querySelector('.toast');
		let bsAlert = new bootstrap.Toast(myAlert);

		bsAlert.show();
	}
</script>-->

<script>
	$(document).ready(function(){
		$('#toastInscrioes').toast({delay: 10000});
		$('#toastInscrioes').on('shown.bs.toast');
		$('#toastInscrioes').toast('show');


		/*$('.toast').on('shown.bs.toast', function(){
		alert('The toast is now fully shown.');
	  });*/
	});

	function inscricao(){
		$(document).ready(function(){
			$('#form-teste').on('click', () => {
				$('#toastForm').toast({delay: 20000});
				$('#toastForm').on('shown.bs.toast');
				$('#toastForm').toast('show');

			});
		});
	}

</script>

<script type='text/javascript' /*src='js/jquery.js'*/>
	
	// OBSOLETA
	function onChangeCategoria( categoriaSelect ){
		if( categoriaSelect.value == 'CATEGORIA II' ){
			let letra_cifrada = document.getElementById('letra_cifrada');
			letra_cifrada.style.display = 'block';

		}else{
			let letra_cifrada = document.getElementById('letra_cifrada');
			letra_cifrada.style.display = 'none';

		}
	}

	function onChangeTipoInscricao( tipoInscricaoSelect ){
		if( tipoInscricaoSelect.value == 'INDUSTRIARIO' ){
			document.getElementById('cargo').disabled = false;
			document.getElementById('cargo').required = true;
			document.getElementById('cargo').value = "";

			document.getElementById('matricula').disabled = false;
			document.getElementById('matricula').required = true;
			document.getElementById('matricula').value = "";

			document.getElementById('contrato_social_arquivo').disabled = true;
			document.getElementById('contrato_social_arquivo').required = false;

			document.getElementById('dependente_arquivo').disabled = true;
			document.getElementById('dependente_arquivo').required = false;
			
		}else if( tipoInscricaoSelect.value == 'EMPREGADOR' ){
			document.getElementById('cargo').disabled = false;
			document.getElementById('cargo').required = true;
			document.getElementById('cargo').value = "";

			document.getElementById('matricula').disabled = false;
			document.getElementById('matricula').required = true;
			document.getElementById('matricula').value= "";

			document.getElementById('contrato_social_arquivo').disabled = false;
			document.getElementById('contrato_social_arquivo').required = true;

			document.getElementById('dependente_arquivo').disabled = true;
			document.getElementById('dependente_arquivo').required = false;
			
						
		}else if( tipoInscricaoSelect.value == 'DEPENDENTE' || tipoInscricaoSelect.value == 'CONJUGE' ){
			document.getElementById('cargo').disabled = true;
			document.getElementById('cargo').required = false;
			document.getElementById('cargo').value = "NÃO SE APLICA";

			document.getElementById('matricula').disabled = true;
			document.getElementById('matricula').required = false;
			document.getElementById('matricula').value = "NÃO SE APLICA";

			document.getElementById('contrato_social_arquivo').disabled = true;
			document.getElementById('contrato_social_arquivo').required = false;

			document.getElementById('dependente_arquivo').disabled = false;
			document.getElementById('dependente_arquivo').required = true;

		}else{
			document.getElementById('cargo').disabled = true;
			document.getElementById('cargo').required = false;
			document.getElementById('cargo').value = "NÃO SE APLICA";

			document.getElementById('matricula').disabled = true;
			document.getElementById('matricula').required = false;
			document.getElementById('matricula').value = "NÃO SE APLICA";

			document.getElementById('contrato_social_arquivo').disabled = true;
			document.getElementById('contrato_social_arquivo').required = false;

			document.getElementById('dependente_arquivo').disabled = false;
			document.getElementById('dependente_arquivo').required = true;

		}
	}
	
	function validarArquivo( elemento ){
		
		const TAM_PDF_PERMITIDO = 4 * 1024 * 1024;
		const TAM_IMAGEM_PERMITIDO = 4 * 1024 * 1024;
		const TAM_VIDEO_PERMITIDO = 20 * 1024 * 1024;

		//console.log(elemento.getAttribute('id'));

		var arquivoInput = '';
		//var extensoesPermitidas = /(.jpg|.jpeg|.png|.gif)$/i;
		var extensoesPermitidas = /(.jpg|.jpeg|.png|.pdf)$/i;;
		var msgErroExt = "Por favor envie um arquivo que tenha a extensão .pdf, .jpg, .jpeg ou .png .";
		var msgErroTamArq = "Tamanho máximo do arquivo deve ser 4 MB!";
		var tamanhoPermitido = TAM_IMAGEM_PERMITIDO;

		if( elemento.getAttribute('id') == 'contrato_social' ){
			arquivoInput = document.getElementById('contrato_social_arquivo');
			extensoesPermitidas = /(.pdf)$/i;
			tamanhoPermitido = TAM_PDF_PERMITIDO;

			// MENSAGENS SE ERRO
			msgErroExt = 'Por favor envie um arquivo que tenha a extensão .pdf .';
			msgErroTamArq = "Tamanho máximo do arquivo deve ser 1 MB!";

		}else if( elemento.getAttribute('id') == 'identidade_profissional' ){
			arquivoInput = document.getElementById('identidade_profissional_arquivo');
			//var extensoesPermitidas = /(.pdf)$/i;
			//tamanhoPermitido = TAM_IMAGEM_PERMITIDO;

			// MENSAGENS SE ERRO
			//var msgErroExt = 'Por favor envie um arquivo que tenha a extensão .pdf .';
			//msgErroTamArq = "Tamanho máximo do arquivo deve ser 1 MB!";

		}else if( elemento.getAttribute('id') == 'rg_cnh' ){
			arquivoInput = document.getElementById('rg_cnh_arquivo');
			//var extensoesPermitidas = /(.pdf)$/i;
			//tamanhoPermitido = TAM_IMAGEM_PERMITIDO;

			// MENSAGENS SE ERRO
			//var msgErroExt = 'Por favor envie um arquivo que tenha a extensão .pdf .';
			//msgErroTamArq = "Tamanho máximo do arquivo deve ser 1 MB!";

		}else if( elemento.getAttribute('id') == 'comprovante_residencia' ){
			arquivoInput = document.getElementById('comprovante_residencia_arquivo');
			//var extensoesPermitidas = /(.pdf)$/i;
			//tamanhoPermitido = TAM_IMAGEM_PERMITIDO;

			// MENSAGENS SE ERRO
			//var msgErroExt = 'Por favor envie um arquivo que tenha a extensão .pdf .';
			//msgErroTamArq = "Tamanho máximo do arquivo deve ser 1 MB!";
		}else if( elemento.getAttribute('id') == 'video_candidato' ){
			arquivoInput = document.getElementById('video_candidato_arquivo');
			extensoesPermitidas = /(.mp4)$/i;
			tamanhoPermitido = TAM_VIDEO_PERMITIDO;

			// MENSAGENS SE ERRO
			msgErroExt = 'Por favor envie um arquivo que tenha a extensão .mp4 .';
			msgErroTamArq = "Tamanho máximo do arquivo deve ser 20 MB!";

		}else if( elemento.getAttribute('id') == 'dependente' ){
			arquivoInput = document.getElementById('dependente_arquivo');
			//var extensoesPermitidas = /(.pdf)$/i;
			//tamanhoPermitido = TAM_IMAGEM_PERMITIDO;

			// MENSAGENS SE ERRO
			//var msgErroExt = 'Por favor envie um arquivo que tenha a extensão .pdf .';
			//msgErroTamArq = "Tamanho máximo do arquivo deve ser 1 MB!";

		}else if( elemento.getAttribute('id') == 'letra_cifrada' ){
			arquivoInput = document.getElementById('letra_cifrada_arquivo');
			extensoesPermitidas = /(.pdf)$/i;
			tamanhoPermitido = TAM_PDF_PERMITIDO;

			// MENSAGENS SE ERRO
			msgErroExt = 'Por favor envie um arquivo que tenha a extensão .pdf .';
			msgErroTamArq = "Tamanho máximo do arquivo deve ser 1 MB!";
		}

		var caminhoArquivo = arquivoInput.value;

		if( !extensoesPermitidas.exec(caminhoArquivo) ){

			//alert('Por favor envie um arquivo que tenha as extensões.jpeg/.jpg/.png/.gif .');
			alert( msgErroExt );

			arquivoInput.value = '';

			return false;

		}else{

			if ( arquivoInput.files && arquivoInput.files[0] ) {

				/*var reader = new FileReader();

				reader.onload = function(e) {

					document.getElementById('visualizarImagem').innerHTML = '';

				};

				reader.readAsDataURL(arquivoInput.files[0]);

				console.log(arquivoInput.files[0].size / 1024 / 1024);

				console.log(arquivoInput.files[0].size);*/

				if (arquivoInput.files[0].size > tamanhoPermitido) { 

					alert( msgErroTamArq );

					arquivoInput.value = '';

					return false;

				}

			}

		}

	}

	const campoCpf = document.getElementById('cpf');
	campoCpf.addEventListener('keyup', formatarCPF);

	function formatarCPF(e){
		var v=e.target.value.replace(/\D/g,"");
		v=v.replace(/(\d{3})(\d)/,"$1.$2");
		v=v.replace(/(\d{3})(\d)/,"$1.$2");
		v=v.replace(/(\d{3})(\d{1,2})$/,"$1-$2");
		e.target.value = v;
	}

	const campoDataNascimento = document.getElementById('data_nascimento');
	campoDataNascimento.addEventListener('keyup', formatarData);

	function formatarData(e){
		var v=e.target.value.replace(/\D/g,"");
		v=v.replace(/(\d{2})(\d)/,"$1/$2") 
		v=v.replace(/(\d{2})(\d)/,"$1/$2") 
		e.target.value = v;
	}

	const campoTelefone = document.getElementById('telefone');
	campoTelefone.addEventListener('keyup', formatarTelefone);

	function formatarTelefone(e){
		var v=e.target.value.replace(/\D/g,"");
		v=v.replace(/^(\d\d)(\d)/g,"($1)$2"); 
		v=v.replace(/(\d{5})(\d)/,"$1-$2");    
		e.target.value = v;
	}

</script>



  <!-- JAVASCRIPTS -->
  <!-- jQuey -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/bootstrap.min.js"></script>
  <!-- Shuffle -->
  <script src="plugins/shuffle/shuffle.min.js"></script>
  <!-- Magnific Popup -->
  <script src="plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
  <!-- Slick Carousel -->
  <script src="plugins/slick/slick.min.js"></script>
  <!-- SyoTimer -->
  <script src="plugins/syotimer/jquery.syotimer.min.js"></script>
  <!-- Google Mapl -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU"></script>
  <script src="plugins/google-map/gmap.js"></script>
  <!-- Custom Script -->
  <script src="js/script.js"></script>
</body>

</html>