<?php

$json = file_get_contents('jogos.json');
$array_jogos = json_decode($json, true);
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Resenha de Jogos</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body>

	<div id="cabecalho" >
		
		<div class="container">

		<nav class="navbar navbar-dark bg-dark ">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a href="#" class="nav-link">Início</a>
					</li>
					<li>
						<a href="#">Jogos</a>
					</li>
				</ul>
			</nav>
		</div>


		<section class="jumbotron text-center rounded-0">
        	<div class="container">
          		<h1 class="jumbotron-heading">Album de exemplo</h1>
          		<p class="lead text-muted">um texto se precisar</p>
          		
        	</div>
      	</section>
	
	</div>

	<div id="conteudo" class="container-fluid">

        <form action="buscar.php" method="get">
            <input type="text" name="campo_nome">
            <input type="button" name="Pesquisar" value="Pesquisar">
        </form>

		<div id="jogos" class="row">

			<?php foreach ($array_jogos as $jogo):; ?>
			<div class="col-md-3">
				<div class="jogo card ">
					<img src="img/<?= $jogo['img'] ?>" class="img-fluid" alt="">
					<div class="card-body">
						<h5 class="card-title"><?= $jogo['titulo'];?> </h5>
						<a href="jogo.php?id=<?= $jogo['id'];?>" class="card-link">Veja mais...</a>

					</div>
				</div>
			</div>
        <?php endforeach; ?>
		</div>
	</div>
	
</body>
</html>