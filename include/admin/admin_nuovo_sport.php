<h1>Nuovo sport</h1>
<div class="col-md-12 divider"></div>

<div class="admin-home">
    
    <br />
    
    <form action="actions/inserisci_sport.php?rl=1" method="post" name="new_sport_form">
    	<div class="col-md-12">
            <label for="title">Nome sport</label>
            <input type="text" name="title" id="title" class="form-control" maxlength="100" required="required"/><br />
            <br />     
        </div>
        
        <div class="col-md-12">
        	<br />
        	<a href="admin.php" class="btn btn-danger">Annulla</a>
			<!--<input type="submit" value="Registra" class="btn btn-info" onclick="return confirmData()"/>-->
        	<input type="submit" value="Inserisci il nuovo sport" class="btn btn-info" />
        </div>
    </form>
    
    <div class="col-md-12" style="height:80px;">
    </div>

</div>

