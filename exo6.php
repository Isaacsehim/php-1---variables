<?php
$title = "GTA VI";
$description = " Bienvenue à Leonida<br>
					Grand Theft Auto VI s'installe dans l'État de Leonida, qui abrite les rues baignées par les néons de Vice City et plus encore.<br>
					Cet opus, le plus imposant et le plus immersif de la série des Grand Theft Auto à ce jour, sera disponible en 2025 sur PlayStation 5 et Xbox Series X|S.";
$studio = "Rockstar Games";
$image = "img/gtacat6.webp";
$link = "https://www.rockstargames.com/fr/VI";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<title>Card test</title>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col s12 m6 offset-m3">
			<div class="card" style="height: auto;">
				<div class="card-image waves-effect waves-block waves-light">
					<img class="activator" src="<?= $image ?>">
				</div>
				<div class="card-content">
					<span class="card-title activator grey-text text-darken-4"> <?= $title ?> <i class="material-icons right"> <?= $studio ?> </i></span>
					<p><a href="#"></a><?= $link ?></p>
				</div>
				<div class="card-reveal">
					<span class="card-title grey-text text-darken-4"> <?= $title ?> <i class="material-icons right">🔙</i></span>
					<p><?= $description ?></p>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>