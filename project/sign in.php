<?php
 $username=$_POST["username"];    
 $password=$_POST["password"];
 $number=$_POST["number"];
 $address=$_POST["address"]; 
$con=mysqli_connect("localhost","id17602718_root2003","Admin(1234567)","id17602718_ghostpepper")  
 or
 die('Could not connect:');  
 $sql = $con->prepare("insert into login(username,password,number,address) values(?,?,?,?)");  
 $sql->bind_param("ssis",$username,$password,$number,$address);  
 $sql->execute();
 $sql->close();
 header("location:https://ghostpepper.000webhostapp.com/index.html");
 ?>