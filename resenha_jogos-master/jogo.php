<?php

$json = file_get_contents('jogos.json');
$array_jogos = json_decode($json, true);

$id = $_GET['id'];//necessário testar se o campo não está vazio
$jogo_encontrado=null;

foreach ( $array_jogos as $jogo){
    if ($jogo['id']==$id){
        $jogo_encontrado = $jogo;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Nome do Site</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" ></script>
</head>
<body>
	<div id="cabecalho" >

		<div class="container">
			<nav class="navbar">

			</nav>
		</div>
		
		<section class="jumbotron text-center rounded-0">
        	<div class="container">
          		<h1 class="jumbotron-heading">Album de exemplo</h1>
          		<p class="lead text-muted">um texto se precisar</p>
          		
        	</div>
      	</section>
	
	</div>

	<div id="conteudo" class="">
		<div class="">
			<div class="">
				<h3 class="">
					<?= $jogo_encontrado['titulo'];?>
				</h3>
			</div>

			<div class="">
				<img src="img/<?= $jogo_encontrado['img'];?>" class="" alt="">
			</div>

			<div class="">
                <?= $jogo_encontrado['sinopse'];?>
			</div>

		</div>
	</div>
	
</body>
</html>