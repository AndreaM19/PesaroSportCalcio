<h1>Modifica utente</h1>
<div class="col-md-12 divider"></div>

<div class="admin-home">
    <p><b>Seleziona l'utente da modificare dall'elenco</b></p>
    <br />
    
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Titolo</th>
                    <th>Descrizione</th>
                    <th>Sport</th>
                    <th>Tipologia</th>
                    <th>Actions</th>
                </tr>
            </thead>
			<?php
			
            $queryText=$SHOW_ALL_SPORT_EVENTS;
            $query = queryToDB ($conn, $queryText);
            while ($row = mysqli_fetch_array($query)){
				echo"<tr>";
					echo"<td>".$row['event_date']."</td>";
					echo"<td>".$row['event_title']."</td>";
					echo"<td>".$row['event_description']."</td>";
					echo"<td>".$row['sport_name']."</td>";
					echo"<td>".$row['event_type_name']."</td>";
					echo"<td>
							<a href='admin.php?loc=edituser&userid=".$row['id_event']."'><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span></a>
							&nbsp;&nbsp;
							<a href='actions/rimuovi_utente.php?rl=1&userid=".$row['id_event']."' onclick='return confirmAction()'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></a>
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
