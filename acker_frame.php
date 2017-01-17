<?php
	$acker_height = 10;
	$acker_width = 10;
	$css_height = 1/$acker_height * 100;
	$css_width = 1/$acker_width * 100;
	echo '<div class="frame_acker">';
	for( $x = 1; $x <= $acker_height; $x++){
		echo '<div class="frame_row" id="frame_row_$x" style="">';
			for( $y = 1; $y <= $acker_width; $y++){
				echo '<div class="frame_element" id="frame_element_$x$y" style="">';
				echo '</div>';
			}
		echo '</div>';
	}
	echo '</div>';
?>
