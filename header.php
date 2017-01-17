<!doctype html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.php">
    <title>Pflanzen, Pflegen, Ernten</title>
	<?php
		echo "<style>";
		$server = $_SERVER["PHP_SELF"];
		switch ($server){
			case $server == "/pflanzen/home.php":
			include 'styles_home.css';
			break;
			case $server == "/pflanzen/betriebe.php":
			include 'styles_betriebe.css';
			break;
			case $server == "/pflanzen/shop.php":
			include 'styles_shop.css';
			break;
			case $server == "/pflanzen/shop_local.php":
			include 'styles_shop.css';
			break;
			case $server == "/pflanzen/shop_international.php":
			include 'styles_shop.css';
			break;
			case $server == "/pflanzen/map.php":
			include 'styles_map.css';
			break;
			case $server == "/pflanzen/markets.php":
			include 'styles_markets.css';
			break;
			case $server == "/pflanzen/news.php":
			include 'styles_news.css';
			break;
		}
		echo "</style>";
	?>
  </head>

