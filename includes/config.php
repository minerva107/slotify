<?php
	ob_start();
	session_start();

	$timezone = date_default_timezone_set("Europe/London");

	$con = mysqli_connect("den1.mysql2.gear.host", "slotify2", "Qn7hF90eB~z-", "slotify2");

	if(mysqli_connect_errno()) {
		echo "Failed to connect: " . mysqli_connect_errno();
	}
?>
