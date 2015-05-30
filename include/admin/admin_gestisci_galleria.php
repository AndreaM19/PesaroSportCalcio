<h1>Galleria fotografica</h1>
<div class="col-md-12 divider"></div>

<div class="admin-home">
    <p><b>Inserisci i dati di un nuovo evento</p>
    <br />
    
    <div class="col-md-12 gallery">
		<?php
        $queryText=$SHOW_GALLERY;
        $query=queryToDB($conn,$queryText);
		$counter=0;
        while ($row=mysqli_fetch_array($query)){
			echo"<h5>Galleria: ".$row['gallery_name']."</h5>";
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
    
    <div class="col-md-12" style="height:80px;">
    </div>

</div>

