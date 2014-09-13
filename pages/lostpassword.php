<?php
	
	require_once("include/header.php");
	
	if (isset($_POST["lostpass"]))
	{
		if (lostPassword($_POST["username"], $_POST["email"]))
		{
			echo "The password has been reset. An email containing the new password has been sent to $email.<br />
			<a href='index.php'>Return to homepage.</a>";
		} else
		{
			echo "Username or email was incorrect.";
			show_lostpassword_form();
		}
	} else
	{
		//user has not pressed the button
		show_lostpassword_form();
	}
	
	require_once("include/footer.php");
	
?>