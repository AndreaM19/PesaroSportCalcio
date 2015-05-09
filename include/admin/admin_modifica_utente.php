<h1>Modifica utente</h1>
<div class="col-md-12 divider"></div>

<div class="admin-home">
    <p><b>Modifica i dati utente</b></p>
    <br />
    
    <?php
	$queryText=$GET_USER_DATA;
	$query = queryToDB ($conn, $queryText);
	while ($row = mysqli_fetch_array($query)){
		$array = array($row['id'], $row['email'], $row['name'], $row['surname']);
	}	
	freeMemoryAfterQuery($query)
	?>
    
    <form action="actions/" method="post" name="new_user_form">
    	<label for="name">Nome</label>
    	<input type="text" name="name" id="name" class="form-control" value="<?php echo $array[2] ?>" required="required"/><br />
        <label for="surname">Cognome</label>
    	<input type="text" name="surname" id="surname" class="form-control" value="<?php echo $array[3] ?>" required="required"/><br />
        <label for="mail">Email</label>
    	<input type="email" name="email" id="mail" class="form-control" value="<?php echo $array[1] ?>" required="required"/><br />
        
        <br />
        <a href="admin.php" class="btn btn-warning btn-lg">Modifica Password</a>
        <br />
        <br />
        <br />
        <a href="admin.php?loc=manageuser" class="btn btn-danger">Annulla</a>
		<!--<input type="submit" value="Registra" class="btn btn-info" onclick="return confirmData()"/>-->
        <input type="submit" value="Conferma modifiche" class="btn btn-info" onclick="" />
    </form>
    
    <!-- onclick="formhash(this.form, this.form.password);" -->
    <br /><br /><br /><br /><br /><br /><br /><br /><br />

</div>

