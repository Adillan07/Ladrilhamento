<html>
<head>
<title>Calculadora de ângulos</title>
<link rel="icon" href="favicon.ico"/>
<meta charset="utf-8" />
<style>
	*{
		margin: 0;
		padding: 0;
		box-sizing:border-box;
		font-family: Tahoma;
	}

	.body{
		width: 100%;
		height: 100%;
		margin: 0;
		padding: 0;
		background-color: #0007;
	}
	body{
		background-image: url('https://cdn.leroymerlin.com.br/products/papel_de_parede_3d_cubos_cinza_para_areas_de_lazer_ou_externa_1567643063_e5a6_600x600.jpg');
		background-size: 100%;
	}
	header{
		width: 100%;
		height: 100px;
		color: #000;
		text-shadow: 3px 3px 5px #eee;
		display: flex;
		justify-content: center;
		align-items: center;
		background-color: #FDFD00;
	}

	main{
		display: flex;
		justify-content: center;
		align-items: center;
		position: relative;
		top: 37.5%;
		transform: translateY(-50%);
	}

	form{
		width: 55%;
		height: 340px;
		padding: 20px;
		min-width: 700px;
		background-color: #fdfdfd;
		border: 3px solid #ccc;
		border-radius: 8px;
	}
	form h1{
		margin-bottom: 15px;
	}
	
	form div{
		position: relative;
		left: 50%;
		transform: translateX(-25%);
	}

	.resultado{
		padding: 5px;
		font-size: 22px;
	}
	form input[type=number]{
		width: 200px;
		height: 75px;
		font-size: 40px;
		padding: 20px;
		border-radius: 8px;
	}
	form input[type=submit]{
		position: relative;
		top: -3px;
		font-size: 35px;
		height: 75px;
		width: 125px;
		border-radius: 8px;
		cursor: pointer;
		margin-bottom: 15px;
	}

	footer{
		height: 90px;
		margin: -55px 0 0 0;
		background-color: #FDFD00;
		color: #000;
		text-shadow: 3px 3px 5px #eee;
		font-size: 16px;
		display: flex;
		justify-content: space-around;
		align-items: center;
		position: relative;
		top: 44%;
		transform: translateY(-50%);
	}
</style>
</head>
<body>
<div class="body">
<header>
	<figure><img src="ladrilho.png" width="130"/></figure>
	<h1>Calculadora de Ângulos Automática</h1>
</header>
<main>
<form method="post">
	<h1>Insira o número de lados do polígono que desejar: </h1>
	<div>
	<input type="number" min="3" name="lado" placeholder="Lados"/>
	<input type="submit" href="#" value="Enviar" name="acao"/>
	</div>
	<?php
	if(isset($_POST['acao'])){
		$lado = $_POST['lado'];
		if($lado < 3){
			echo "<br><span style='border-radius:8px; border-left: 2px solid black; border-top: 2px solid black; border-bottom: 2px solid #888; border-right: 2px solid #888;' class='resultado'>Valor incompatível. O mínimo de lados possíveis são 3.</span>";
		}
		else{
		$soma = ($lado - 2) * 180;
		$valor = $soma / $lado;
		$valorArredondado = number_format($valor,2,',','');
		$diagonal = ($lado * ($lado - 3)) / 2;
		echo "<br><span style='border-radius: 8px 0 0 8px; border-top: 2px solid black; border-left: 2px solid black; border-bottom: 2px solid #888' class='resultado'>A soma dos ângulos internos dessa figura é igual a</span>","<span style='border-bottom: 2px solid #888; border-top: 2px solid black;' class='resultado'>".$soma."</span>","<span style='border-radius: 0 8px 8px 0; border-top: 2px solid black; border-bottom: 2px solid #888; border-right: 2px solid #888;' class='resultado'>graus.</span><br><br>";
		echo "<span style='border-radius: 8px 0 0 8px; border-top: 2px solid black; border-left: 2px solid black; border-bottom: 2px solid #888' class='resultado'>O valor de cada ângulo interno dessa figura é</span>","<span style='border-bottom: 2px solid #888; border-top: 2px solid black;' class='resultado'>".$valorArredondado."</span>","<span style='border-radius: 0 8px 8px 0; border-top: 2px solid black; border-bottom: 2px solid #888; border-right: 2px solid #888;' class='resultado'>graus.</span><br><br>";
		echo "<span style='border-radius: 8px 0 0 8px; border-top: 2px solid black; border-left: 2px solid black; border-bottom: 2px solid #888' class='resultado'>Essa figura possui</span>","<span style='border-bottom: 2px solid #888; border-top: 2px solid black;' class='resultado'>".$diagonal."</span>","<span style='border-radius: 0 8px 8px 0; border-top: 2px solid black; border-bottom: 2px solid #888; border-right: 2px solid #888;' class='resultado'>diagonais.</span>";
		}
	}
?>
</form>
</main>
<footer>
	<figure><img src="ladrilho.png" width="80"/></figure>
	<p style="position: relative; left: 1.7em;;">Ádillan Wasilewski Soares</p>
	<p>&copy; Todos os direitos reservados.</p>
</footer>
</div><!--body-->
</body>
</html>

	
