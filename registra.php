<?php
include 'include/db/db_data.php';
if(@$_GET['rl']==1){
	$mysqli = new mysqli($HOST, $USER, $PASSWORD, $DB);
	// Recupero la password criptata dal form di inserimento.
	$password = $_POST['p']; 
	$email=$_POST['email'];
	$username=$email;
	// Crea una chiave casuale
	$random_salt = hash('sha512', uniqid(mt_rand(1, mt_getrandmax()), true));
	// Crea una password usando la chiave appena creata.
	$password = hash('sha512', $password.$random_salt);
	// Inserisci a questo punto il codice SQL per eseguire la INSERT nel tuo database
	// Assicurati di usare statement SQL 'prepared'.
	if ($insert_stmt = $mysqli->prepare("INSERT INTO members (username, email, password, salt) VALUES (?, ?, ?, ?)")) {    
		$insert_stmt->bind_param('ssss', $username, $email, $password, $random_salt); 
		// Esegui la query ottenuta.
		$insert_stmt->execute();
	}
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script type="text/javascript" src="js/sha512.js"></script>
<script type="text/javascript" src="js/forms.js"></script>
<title>PHP auth example</title>
</head>

<body>
	<center>
	<h1>Registra utente</h1>
    <br />
    <form action="registra.php?rl=1" method="post" name="new_user_form">
       Email: <input type="text" name="email" /><br />
       Password: <input type="password" name="p" id="password"/><br />
       <!--Conferma password: <input type="password" name="p_c" id="password_confirm"/><br />-->
       <input type="button" value="Registra" onclick="formhash(this.form, this.form.password);" />
    </form>
    </center>
</body>
</html>
