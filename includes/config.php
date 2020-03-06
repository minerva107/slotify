<?php
	ob_start();
	session_start();

	$timezone = date_default_timezone_set("Europe/London");

	$con = mysqli_connect("ftp.gear.host", "simonify", "jEbpvW9mBLMlFQFWRN34k3NmkwMnAJpNEJg1nKQRsFFkdjP3bkhvAoHwrihv", "slotify");

	if(mysqli_connect_errno()) {
		echo "Failed to connect: " . mysqli_connect_errno();
	}
?>
