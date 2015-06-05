<h1>Aggiungi immagini</h1>
<div class="col-md-12 divider"></div>

<div class="admin-home">
    
    <br />
    
    <form action="actions/inserisci_immagine.php<?php echo"?rl=1&galleryid=".$_GET['galleryid'].""; ?>" method="post" enctype="multipart/form-data" name="image_upload_form" id="image_upload_form">
	<label>Dimensione massima dell'immagine 4MB. (Formato: jpg, gif, png)</label>
    <br />
    <br />
    <input name="image_upload_box" type="file" id="image_upload_box" size="40" required="required"/>
    <br />
    <br />
    <input type="submit" name="submit" value="Carica immagine" class="btn btn-default"/>     
   	
    <input name="max_width_box" type="hidden" id="max_width_box" value="1024" size="4">
    <input name="max_height_box" type="hidden" id="max_height_box" value="768" size="4">
	<input name="submitted_form" type="hidden" id="submitted_form" value="image_upload_form" />
          </form>
    
    <div class="col-md-12" style="height:80px;">
    </div>

</div>

