<?php

$conn = mysqli_connect("localhost:3306","user1","Ficarfoods1234!","ficarfoo_shopping");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
 
?>