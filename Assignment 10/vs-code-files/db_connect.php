<?php
 // Connect to DB
 $conn = mysqli_connect('localhost', 'shivam', '@1SHIVAManand', 'addresses');
 if(!$conn){
 echo "Connection Error : " . mysqli_connect_error();
 }
?>
