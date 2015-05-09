<h1>Nuovo utente</h1>
<div class="col-md-12 divider"></div>

<div class="admin-home">
    <p><b>Inserisci i dati di un nuovo utente</b></p>
    <br />
    
    <form action="actions/registra.php?rl=1" method="post" name="new_user_form">
    	<label for="name">Nome</label>
    	<input type="text" name="name" id="name" class="form-control" required="required"/><br />
        <label for="surname">Cognome</label>
    	<input type="text" name="surname" id="surname" class="form-control" required="required"/><br />
        <label for="mail">Email</label>
    	<input type="email" name="email" id="mail" class="form-control" required="required"/><br />
        <label for="password">Password</label>
    	<input type="password" name="p" id="password" class="form-control" required="required"/><br />
    	<!--Conferma password: <input type="password" name="p_c" id="password_confirm"/><br />-->
        <br />
        <a href="admin.php" class="btn btn-danger">Annulla</a>
		<!--<input type="submit" value="Registra" class="btn btn-info" onclick="return confirmData()"/>-->
        <input type="button" value="Registra" class="btn btn-info" onclick="formhash(this.form, this.form.password);" />
    </form>
    
    <!-- onclick="formhash(this.form, this.form.password);" -->
    <br /><br /><br /><br /><br /><br /><br /><br /><br />

</div>

