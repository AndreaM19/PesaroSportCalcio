<?php
include 'include/db/db_data.php';
include 'include/db/db_function.php';
sec_session_start(); // usiamo la nostra funzione per avviare una sessione php sicura
if(isset($_POST['email'], $_POST['p'])) { 
	$mysqli = new mysqli($HOST, $USER, $PASSWORD, $DB);
   	$email = $_POST['email'];
   	$password = $_POST['p']; // Recupero la password criptata.
   	if(login($email, $password, $mysqli) == true) {
      	// Login eseguito
     	echo 'Success: You have been logged in!';
		echo"<script>location.href='admin.php'</script>";
   	}
	else {
      // Login fallito
      header('Location: ./login.php?error=1');
   	}
} 
else { 
   	// Le variabili corrette non sono state inviate a questa pagina dal metodo POST.
   	echo 'Invalid Request';
}
?>