<?php
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$proses = $_POST['login'];

	if( 
		$email == 'admin' &&
		$pass == 'admin'
		){
			header("Location: ../admin/index.php", true, 301);
            exit();
	}else{
		header("Location: index.php?hal=login", true, 301);
        exit();
	}


	?>