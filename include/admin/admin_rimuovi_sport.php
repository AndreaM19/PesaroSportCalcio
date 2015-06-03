<h1>Elimina sport</h1>
<div class="col-md-12 divider"></div>

<div class="admin-home">
    <p><b>Seleziona lo sport da eliminare dall'elenco</b></p>
    <br />
    
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Sport</th>
                    <th>Actions</th>
                </tr>
            </thead>
			<?php
			
            $queryText=$SHOW_SPORT_LIST;
            $query = queryToDB ($conn, $queryText);
            while ($row = mysqli_fetch_array($query)){
				echo"<tr>";
					echo"<td>".$row['sport_name']."</td>";
					echo"<td>
							<a href='actions/rimuovi_sport.php?rl=1&sportid=".$row['id_sport']."' title='".$DELETE_EVENT."' onclick='return confirmAction()'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></a>
						</td>";
				echo"</tr>";
			}	
			freeMemoryAfterQuery($query)
			
            ?>
            </tbody>
        </table>
    </div>   
    <br /><br /><br /><br /><br /><br /><br /><br /><br />

</div>
