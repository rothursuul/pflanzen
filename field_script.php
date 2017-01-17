<?php	$formoutput = false;
	$grownimage = "";

		//get user specific information
                                include 'mysql_conn_user.php';
                                $check = "SELECT * from $current_username where id='$field_number";
                                $result = $mysqli->query($check);
                                $row =  $result->fetch_array(MYSQLI_BOTH);
                                $current_vegtable = $row["vegtable"];
                                echo $current_vegtable;
                                $checked_time = $row["target_time"];
                                echo $checked_time;
                                $result ->free();
                                $mysqli->close();
                //check how far plant has grown
                                include 'mysql_conn_user.php';
                                $vegtable_check = "SELECT time_needed from vegtables where vegtable=$
                                $vegtable_result = $mysql->query(check);
                                $vegtable_row = $vegtable_result->fetch_array(MYSQLI_NUM);
                                $time_needed = $vegtable_row[0];
                                $vegtable_result->free();
                                $mysqli->close();
                                $zielzeit = $checked_date + $time_needed;
                                $datenowstring = date('Y-m-d H:i:sP', $aktuelleZeit);
                                $nowDatetime = new DateTime ($datenowstring);
                                $datethenstring = date('Y-m-d H:i:sP', $zielzeit);
                                $thenDatetime = new DateTime ($datethenstring);
                                $interval = $nowDatetime -> diff ( $thenDatetime);

                                switch ($aktuelleZeit){
                                        case $aktuelleZeit == $checked_date:
                                                $image = "braun.jpg";
                                                $cond = 1;
                                                break;
                                        case $aktuelleZeit <= $checked_date + $time_needed:
                                                $image = "braun.jpg";
                                                $cond = 1;
                                                break;
                                        case $aktuelleZeit <= $checked_date + $time_needed:
                                               $image = "gruen.jpg";
                                                $cond = 2;
                                                break;
                                        case $aktuelleZeit >= $checked_date + $time_needed:
                                                $cond = 3;
                                                $formoutput = true;
                                                break;
                                }

                //Set image conditions
                                if ($cond == 3){
                                                $inputimage = $current_vegtable.".txt";
                                }
                                else{
                                        $inputimage = $image;
                                }

                                if ($formoutput = true){
                                        include 'input_field.php';
                                }
                                else{
                                        echo '<div class="bootstrap">';
                                        echo "<img src=$image height=50 width=50>";
                                        echo "<div class= \"dropdown-content\">";
                                        echo "<p>Noch: ".$interval->format('%h Stunden, %i Minuten')$
                                        echo "Angepflanzt: $checked_plant</p>";
                                        echo "</div> </div>";
                                }


?>
