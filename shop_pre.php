<?php
	include'login_check.php';
        $current_username = $_SESSION["current_username"];
        include 'header.php';
	include 'navigation.php';
?>
<main>
	<div class="row">
		<div class="col-6 col-m-6">
			<a href="shop.php">
			<div class="content">
			<h2 class="sub_title">Lokale Produkte</h2>
			</div>
			</a>
		</div>

		<div class="col-6 col-m-6">
			<a href="shop.php">
			<div class="content">
			<h2 class="sub_title">Internationale Produkte</h2>
			</div>
			</a>
		</div>

	</div>

	<div class="row">
		<div class="col-12 col-m-12">
			<a href="news.php">
			<div class="content">
			<h2 class="sub_title">Zu den News</h2>
			</div>
			</a>
		</div>
	</div>
</main>
</html>
