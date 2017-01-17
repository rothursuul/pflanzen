<?php
	include'login_check.php';
        $current_username = $_SESSION["current_username"];
        include 'header.php';
	include 'navigation.php';
?>
<main>
	<div class="row">
		<div class="col-9 col-m-9">
			<div id="products" class="main content">
			<h2 class="sub_title">Deine Produkte</h2>
			<div class="inside_content">
			</div>
			</div>
		</div>

		<div class="col-3 col-m-3">
			<div id="betriebe" class="main content">
			<h2 class="sub_title">Deine Betriebe</h2>
			<div class="inside_content">
				<div class="container">
				<?php for($x=1; $x<=4; $x++){
						echo "<a href=\"betriebe.php\" class=\"link_box\"><div id=\"betriebe_sub\">".$x.". Betrieb</div></a>";
					} ?>
				</div>
			</div>
			</div>
		</div>

	</div>

	<div class="row">
		<div class="col-6 col-m-6">
			<div id="finances" class="main content">
			<h2 class="sub_title">Finanzen</h2>
			<div class="inside_content">
			</div>
			</div>
		</div>
		<div class="col-6 col-m-6">
			<div id="go_to" class="main content">
			<h2 class="sub_title">Links</h2>
			<div class="inside_content">
			</div>
			</div>
		</div>
	</div>
</main>
</html>
