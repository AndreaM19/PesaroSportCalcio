<h1>Sponsor</h1>
<div class="col-md-12 divider"></div>

<div class="admin-home">
    <div class="col-md-12 gallery">
    
    	<form action="actions/inserisci_sponsor.php?rl=1<?php echo"&eventid=".$_GET['eventid'].""?>" method="post" name="new_sponsor_form">
            <div class="col-md-7">
                <label for="title">Nome sponsor</label>
                <input type="text" name="title" id="title" class="form-control" maxlength="100" required="required"/><br />
                <br />     
            </div>
            
            <div class="col-md-5">
            <br />
                <input type="submit" value="Inserisci sponsor" class="btn btn-info" />
            </div>
        </form>
	
    </div>
    
    <?php
	echo"<div class='col-md-12 table-responsive'>";
		echo"<table class='table table-striped'>";
			echo"<thead>";
				echo"<tr>";
					echo"<th>Nome Sponsor</th>";
					echo"<th class='text-center'>Azioni</th>";
				echo"</tr>";
			echo"</thead>";
			
			
			$queryText=$SHOW_SPONSOR;
			$query = queryToDB ($conn, $queryText);
			$counter=0;
			while ($row = mysqli_fetch_array($query)){
				echo"<tr>";
					echo"<td>".$row['sponsor_name']."</td>";
					echo"<td class='text-center'>
							<a href='actions/rimuovi_sponsor.php?rl=1&sponsorid=".$row['id_sponsor']."' title='".$DELETE_SPONSOR."' onclick='return confirmAction()'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></a>
						</td>";
				echo"</tr>";
				$counter++;
			}
			if($counter==0){
				echo "<td colspan='3'><h6>Non ci sono sponsor per questo evento</h6></td>";
			}
			freeMemoryAfterQuery($query);
			
			echo"</tbody>";
		echo"</table>";
	echo"</div>";
    ?>
    <div class="col-md-12" style="height:80px;">
    </div>

</div>

