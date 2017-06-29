<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Galeria</title>
	<link rel="icon" href="img/logo.png" type="image/png">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
	<script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
</head>
<body>
<?php include 'menu.php'; ?>
<article class="imagens">
		<h2>
			<p class="galeria">Galeria</p>
		</h2>
	<div class="fotorama"
		data-width="600"
     	data-height="400"
		data-nav="thumbs"
		data-loop="true"
		data-autoplay="1500">
  <a href="img/01.jpg"></a><img src="img/01_thumb.jpg" alt="01">
  <a href="img/02/jpg"></a><img src="img/02_thumb.jpg" alt="02">
  <a href="img/03.jpg"></a><img src="img/03_thumb.jpg" alt="03">
  <a href="img/04.jpg"></a><img src="img/04_thumb.jpg" alt="04">
  <a href="img/05.jpg"></a><img src="img/05_thumb.jpg" alt="05">
  <a href="img/06.jpg"></a><img src="img/06_thumb.jpg" alt="06">
  <a href="img/07.jpg"></a><img src="img/07_thumb.jpg" alt="07">
  <a href="img/08.jpg"></a><img src="img/08_thumb.jpg" alt="08">
  <a href="img/09.jpg"></a><img src="img/09_thumb.jpg" alt="09">
  <a href="img/10.jpg"></a><img src="img/10_thumb.jpg" alt="10">
</div>
</article>
<?php include 'footer.php'; ?>
</body>
</html>