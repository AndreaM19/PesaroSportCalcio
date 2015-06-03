<h1>Galleria fotografica</h1>
<div class="col-md-12 divider"></div>

<div class="admin-home">
    <div class="col-md-12 gallery">
		<?php
        $queryText=$SHOW_GALLERY;
        $query=queryToDB($conn,$queryText);
		$counter=0;
		$row=NULL;
        while ($row=mysqli_fetch_array($query)){
			echo"<div class='col-md-9'><h3>Galleria: ".$row['gallery_name']."</h3></div>";
			echo"<div class='col-md-3'><br><a href='actions/rimuovi_gallery.php?rl=1&galleryid=".$row['id_event_gallery']."' onclick='return confirmAction()' class='btn btn-danger btn-xs'>Elimina la galleria</a></div>";
			$counter++;
		}
        freeMemoryAfterQuery($query);
		
		if($counter==0){
			echo"<h5>Nessuna galleria fotografica per questo evento</h5>";
			echo"<br>";
			echo"<a href='admin.php?loc=addgallery&eventid=".$_GET['eventid']."' class='btn btn-info btn-xs' id='addGallery'>Aggiungi una galleria</a>";
		}
        ?>
    </div>
    
    <?php
	if($counter!=0){
		echo"<div class='col-md-12 table-responsive'>";
			echo"<table class='table table-striped'>";
				echo"<thead>";
					echo"<tr>";
						echo"<th>Preview</th>";
						echo"<th>Nome immagine</th>";
						echo"<th class='text-center'>Azioni</th>";
					echo"</tr>";
				echo"</thead>";
				
				
				$queryText=$SHOW_EVENT_GALLERY;
				$query = queryToDB ($conn, $queryText);
				$counter=0;
				while ($row = mysqli_fetch_array($query)){
					echo"<tr>";
						echo"<td><img src='files/gallery/".$row['image_path']."' class='image-responsive' style='max-width:80px;'></td>";
						echo"<td>".$row['image_path']."</td>";
						echo"<td class='text-center'>
								<a href='actions/rimuovi_immagine.php?rl=1&imageid=".$row['id_event_image']."' title='".$DELETE_IMAGE."' onclick='return confirmAction()'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></a>
							</td>";
					echo"</tr>";
					$counter++;
				}
				if($counter==0){
					echo "<td colspan='3'><h6>Non ci sono immagini da mostrare per questa galleria</h6></td>";
				}
				freeMemoryAfterQuery($query);
				
				echo"</tbody>";
			echo"</table>";
		echo"</div>";
	}
    ?>
    <div class="col-md-12" style="height:80px;">
    </div>

</div>

