<?php
		$con = mysqli_connect('127.0.0.1', 'root','','Instagram');

 		mysqli_query($con, "UPDATE posts SET text = '{$_GET["text"]}'  WHERE id = '{$_GET["id"]}' " );
		header("location:index.php");	
	?>
