<?php
include '../include/db/db_data.php';
if(@$_GET['rl']==1){
	$mysqli = new mysqli($HOST, $USER, $PASSWORD, $DB);
	// Recupero la password criptata dal form di inserimento.
	$password = $_POST['p']; 
	$email=$_POST['email'];
	$username=$email;
	$name=$_POST['name'];
	$surname=$_POST['surname'];
	//echo $name." ".$surname;
	// Crea una chiave casuale
	$random_salt = hash('sha512', uniqid(mt_rand(1, mt_getrandmax()), true));
	// Crea una password usando la chiave appena creata.
	$password = hash('sha512', $password.$random_salt);
	// Inserisci a questo punto il codice SQL per eseguire la INSERT nel tuo database
	// Assicurati di usare statement SQL 'prepared'.
	if ($insert_stmt = $mysqli->prepare("INSERT INTO members (username, email, password, salt, name, surname) VALUES (?, ?, ?, ?, ?, ?)")) {    
		$insert_stmt->bind_param('ssssss', $username, $email, $password, $random_salt, $name, $surname); 
		// Esegui la query ottenuta.
		$insert_stmt->execute();
		echo"<script>location.href='../admin.php?loc=message&msg=2000'</script>";
	}
	else echo"<script>location.href='../admin.php?loc=message&msg=1002'</script>";
}
?>
