<?php
	include'login_check.php';
        $current_username = $_SESSION["current_username"];
        include 'header.php';
	include 'navigation.php';
?>
<main>
	<div class="row">
		<div class="col-2 col-m-2">
			<div class="content">
				<h2 class="sub_title">Produkte</h2>
			</div>
		</div>

		<div class="col-8 col-m-8">
			<div class="content">
				<h2 class="sub_title">Ausgewähltes Produkt</h2>
			</div>
		</div>

		<div class="col-2 col-m-2">
				<div class="content">
					<h2 class="sub_title">Aktueller Handel</h2>
				</div>
		</div>
</main>
</html>
