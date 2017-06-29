<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Formulário</title>

<link rel="icon" href="img/logo.png" type="image/png">
<link rel="stylesheet" type="text/css" href="css/tcc.css">
<link rel="stylesheet" href="css/normalize.css"> 
</head>
<body>

<div class="tudo">
<?php include 'menu.php'; ?>
<form action="#" name="form_tcc" method="post"></form>
<div class="form-group row">
<legend>Cadastro de Abandono de Animais</legend>
<div class="form-group row">
    <label for="nome">Nome:</label>
    <input type="text" class="nome form-control input-md" required placeholder="Digite seu nome">
  </div>
<div class="form-group row">
    <label for="data">Data de nascimento:</label>
    <input type="date" name="date form-control input-md" required class="date form-control input-md">
  </div>
</div>
<div>
    <form>
    <div class="form-group row">
    <div class="indentifique">
    <label for="indentifique">Identifique seu sexo:</label>
    </div>
    </div>
      <div class="genero">
        <input type="radio" name="gender" value="male" class="genero" checked> Feminino<br>
        <input type="radio" name="gender" value="female" class="genero"> Masculino<br>
        <input type="radio" name="gender" value="other" class="genero"> Outros  
      </div>
    </form> 
  </div>
  <div class="form-group row">
    <div class="telefone">
    <label for="tel">Telefone</label>
    <input type="tel" name="tel" class="tel" required placeholder="+55 (11) 0000-0000">
    </div>
  </div>
<div class="form-group row"> 
  <div class="mail"> 
    <label for="email">E-mail:</label>
    <input type="email" name="email" class="email" required placeholder="Digite seu email">
    </div>
  </div>

<legend class="questionario">Questionário sobre abandono de animais</legend>
<div class="form-group row">
    <p>
    <label for="unica" class="perg">1. Já abandonou algum animal?</label>
    <div class="responde">
    <p><input type="radio" name="gender" value="sim" class="unica" required>Sim
    <input type="radio" name="gender" value="nao" class="unica1">Não</p>
    </div>
  </div>

  <div class="form-group row">
      <label for="unica" class="perg">2. Conhece alguém que já abandonou?</label>
      <div class="responde">
      <p><input type="radio" name="1" value="sim" class="unica" >Sim
      <input type="radio" name="1" value="nao" class="unica1">Não</p>
      </div>
  </div>
<div class="form-group row">
      <label for="unica" class="perg">3. Já viu algum animal sendo mal tratado?</label>
      <div class="responde">
      <p><input type="radio" name="2" value="true" class="unica">Sim
      <input type="radio" name="2" value="false" class="unica1">Não</p>
      </div>
      </div>
<div class="form-group row">
    <label for="option" class="perg">4. O que você faria para ajudar os animais?</label>
    <select name="option" id="opcao">
      <option value="denuncia"><p class="">Denúncia</p></option>
      <option value="darracao">Dar ração</option>
      <option value="redesocial">Ajudar Divulgar nas redes sociais</option>
      <option value="abrigo">Levar para um abrigo</option>
    </select>
  </div>
<div class="form-group row">
  <p>
    <label for="text" class="perg">5. O que você faria para as pessoas mudar suas atitudes de abandonar os animais?</label>
    </p>
    <div class="opiniao">
    <textarea id="comentario" name="comentario" placeholder="Digite sua resposta"></textarea>
    </div>
  </div>
<div class="form-group row">
<div class="perguntas">
    <label for="mudarasituacao" class="pergunta">6. O que pode ser feito para mudar a situação dos animais abandonados nas ruas? </label>
    <div class="respostas">
    <p class="quest"><input type="checkbox" name="abrigo" value="abrigo" class="genero">Levar para um abrigo</p>
    <p class="quest"><input type="checkbox" name="campanhas" value="campanhas" class="genero">Campanhas para combater o abandono de animais</p>
    <p class="quest"><input type="checkbox" name="doar" value="doar" class="genero">Doar para algum conhecido</p>
    <p class="quest"><input type="checkbox" name="conscientizar" value="conscientizar" class="genero">Conscientizar as pessoas antes de adotar algum animal</p>
    </div>
    </div>
    <div class="botao">
    <div class="btn-group">
    <button type="button" class="botao">Enviar</button>
</div>
</form>
</div>
</div>
</body>
</html>