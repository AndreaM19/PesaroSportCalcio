<h1>Modifica utente</h1>
<div class="col-md-12 divider"></div>

<div class="admin-home">
    <p><b>Seleziona l'utente dall'elenco</b></p>
    <br />
    
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Cognome</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
			<?php
            $queryText=$GET_USERS_DATA;
            $query = queryToDB ($conn, $queryText);
            while ($row = mysqli_fetch_array($query)){
				echo"<tr>";
					echo"<td>".$row['id']."</td>";
					echo"<td>".$row['name']."</td>";
					echo"<td>".$row['surname']."</td>";
					echo"<td><a href='mailto:".$row['email']."' target='_blank'>".$row['email']."</a></td>";
					echo"<td>
							<a href='admin.php?loc=edituser&userid=".$row['id']."'><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span></a>
							&nbsp;&nbsp;
							<a href='actions/rimuovi_utente.php?rl=1&userid=".$row['id']."' onclick='return confirmAction()'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></a>
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
