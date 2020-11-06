<?php
	$con = mysqli_connect('127.0.0.1', 'root','','Instagram');
	mysqli_query($con, "UPDATE posts SET user = 'alesha' WHERE id=2 ");
?>