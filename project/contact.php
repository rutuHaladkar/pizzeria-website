<?php
$name=$_POST["name"];    
$email=$_POST["email"];
$number=$_POST["number"];
$message=$_POST["message"];
 $con=mysqli_connect("localhost","id17602718_root2003","Admin(1234567)","id17602718_ghostpepper") or
 die("Could not connect:"); 
 $sql = $con->prepare("insert into contact(name,email,number,message) values(?,?,?,?)"); 
 $sql->bind_param("ssis",$name,$email,$number,$message);
 $sql->execute();
 $sql->close();
 header("location:contact us.html");
 ?>