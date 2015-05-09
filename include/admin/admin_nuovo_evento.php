<h1>Nuovo evento</h1>
<div class="col-md-12 divider"></div>

<div class="admin-home">
    <p><b>Inserisci i dati di un nuovo evento</p>
    <br />
    
    <form action="actions/registra.php?rl=1" method="post" name="new_user_form">
    	<label for="title">Titolo dell'evento</label>
    	<input type="text" name="title" id="title" class="form-control" required="required"/><br />
    	<!--Conferma password: <input type="password" name="p_c" id="password_confirm"/><br />-->
        <br />
        <a href="admin.php" class="btn btn-danger">Annulla</a>
		<!--<input type="submit" value="Registra" class="btn btn-info" onclick="return confirmData()"/>-->
        <input type="button" value="Registra" class="btn btn-info" onclick="formhash(this.form, this.form.password);" />
    </form>
    
    <!-- onclick="formhash(this.form, this.form.password);" -->
    <br /><br /><br /><br /><br /><br /><br /><br /><br />

</div>

