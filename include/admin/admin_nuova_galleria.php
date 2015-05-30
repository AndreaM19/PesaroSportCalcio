<h1>Nuova galleria fotografica</h1>
<div class="col-md-12 divider"></div>

<div class="admin-home">
    
    <br />
    
    <form action="actions/inserisci_gallery.php?rl=1<?php echo"&eventid=".$_GET['eventid'].""?>" method="post" name="new_user_form">
    	<div class="col-md-12">
            <label for="title">Titolo della galleria</label>
            <input type="text" name="title" id="title" class="form-control" maxlength="100" required="required"/><br />
            <br />     
        </div>
        
        <div class="col-md-12">
        	<br />
        	<a href="admin.php" class="btn btn-danger">Annulla</a>
			<!--<input type="submit" value="Registra" class="btn btn-info" onclick="return confirmData()"/>-->
        	<input type="submit" value="Inserisci galleria" class="btn btn-info" />
        </div>
    </form>
    
    <div class="col-md-12" style="height:80px;">
    </div>

</div>

