               $server = $_SERVER["PHP_SELF"];
                echo "<div class=bootstrap> <form method=post action=$server>
                      <input type=hidden name=aktuellesFeld value=$feld>
                      <input type=hidden name=zeit value=$aktuelleZeit>
                      <input type=hidden name=grown_vegtable value=$checked_plant>";
                echo "<input id=formimage type=image src=$inputimage  width=50 height=50 border=0/>
                <div class=\"form-group\">
                                <label><button type=submit name=angebaut value=Kartoffel />
                                        <span>Kartoffel</span>
                                </label>

                                <label><button type=submit name=angebaut value=Karotte />
                                        <span>Karotte</span>
                                        </label>

                                <label><button type=submit name=angebaut value=Gurke />
                                        <span>Gurke</span></label>
                </div>";
                echo"</div></form>";


