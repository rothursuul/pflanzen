<?php
	include'login_check.php';
        $current_username = $_SESSION["current_username"];
        include 'header.php';
	include 'navigation.php';
?>
	<main class="penis">
		<div class="row">
			<div class="col-2 col-m-2">
				<div id="licence" class="content">
				<h2 class="small_header">Lizenzen</h2>
					<div id="sub_navigation">
					<ul>
						<?php
							$link_cond == "false";
							if($link_cond == "true"){
						$link_start_1 = $link_start_2 = $link_start_3 = $link_start_4 = $link_start_5 = $_SERVER["PHP_SELF"];
							}
						echo
						$link_start_1.'<li>1. Betrieb</li>'.$link_end.
						$link_start_2.'<li>2. Betrieb</li>'.$link_end.
						$link_start_3.'<li>3. Betrieb</li>'.$link_end.
						$link_start_4.'<li>4. Betrieb</li>'.$link_end.
						$link_start_5.'<li>5. Betrieb</li>'.$link_end
						;?>
					</ul>
					</div>
				</div>
			</div>
			<div class="col-6 col-m-6">
				<div id="business" class="content">
				<h2 class="small_header">Aktueller Betrieb</h2>
				<div class="inside_content">
					<?php include 'acker_frame.php'; ?>
				</div>
				</div>
			</div>
			<div class="col-4 col-m-4">
				<div id="inventory" class="content">
				<h2 class="small_header">Inventar</h2>
				</div>
			</div>
		</div>
	</main>
</html> 
