<?php
if (!($database = @mysqli_connect('localhost', 'app', 'password', 'CEH')))
	die("Couldn't connect");
else
	print ("connected");
?>