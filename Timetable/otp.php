<?php
	if(isset($_POST)) {
		$rand = rand(1000,9999);
		if(mail($_POST['email'],"VERIFICATION",rand(1000,9999))){
			echo "MAIL send";
		} else{
			echo "Failed";
		}
	}
?>
