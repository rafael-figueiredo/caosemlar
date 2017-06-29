<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="icon" href="img/logo.png" type="image/png">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<title>Cão sem lar</title>
</head>
<body>
	<?php include 'menu.php'; ?>
<article class="bg">
</article>
<!-- fecha banner -->
<article class="caixa">
<h2>Organizadores</h2>
<div class="organizadores">
	
	<img src="img/rafael.png" class="rafael" alt="user">
	<div class="texto">
	<p> Rafael
		16 anos
		Desenvolvedor do site
	</p>
	<a href="https://www.facebook.com/Rafael.Gremory1257" target="_blank"><img src="img/facebook.png" class="face" alt="facebook"></a>
	</div>
</div>
<div class="oraganizador">
	<img src="img/leticia.png" class="leticia" alt="user">
	<div class="texto2">
	<p> Letícia
		17 anos
		Desenvolvedora do site
	</p>
	<a href="https://www.facebook.com/leticia.xavier.7524" target="_blank"><img src="img/facebook.png" class="face" alt="facebook"></a>
	</div>
</div>
</article>
<!-- fecha organizadores -->
<aside>
<div>
	<h2 class="camp">Campanha</h2>
	<img src="img/campanha.png" class="campanha" alt="campanha">
	<div class="texto3">
	<p class="cartaz">Cartaz da campanha sobre Abandono de animais</p>
	<p>
		Nós somos um grupo que demonstramos a realidade dos cachorros de ruas,
		queremos fazer com que vocês repensem o que acontece quando um animal é abandonado.
	</p>
	</div>
</div>
</aside>
<aside>
	<form class="form-horizontal" name="form1" id="form1" method="POST" action="envia.php" class="">
<div class="contact"><fieldset>

<!-- Form Name -->
<legend class="text-center">Contato</legend>

<!-- Text input-->
<div class="form-group">
	<div class="nome">
  		<label class="col-md-4 control-label" for="nome">Nome:</label>  
 		 <div class="col-md-4">
  			<input id="nome" name="nome" type="text" placeholder="Digite seu nome" class="form-control input-md" required="">
 			</div> 
  	</div>
</div>

<!-- Text input-->
<div class="form-group">
	<div class="email">
 	 <label class="col-md-4 control-label" for="email">E-mail:</label>
  		<div class="col-md-4">
  			<input id="email" name="email" type="email" placeholder="Digite seu e-mail" class="form-control input-md" required="">
  		</div>
  </div>
</div>
<!-- comentario -->
<div class="form-group">
	<div class="comentario">
		<label class="col-md-4 control-label" for="comentario">Comentário</label>
		<div class="col-md-4">
		<textarea name="comentario" id="comentario" placeholder="Digite seu comentário aqui"></textarea>
		</div>
	</div>
</div>
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="enviar"></label>
  <div class="col-md-4">
    <button id="enviar" name="enviar" class="btn btn-success btn-block">Enviar</button>
  </div>
</div>
</fieldset>
</div>
</form>
  </div>
</div>
</aside>
<?php include 'footer.php';?>
</body>
</html>