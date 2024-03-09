 <?php
$username=$_POST["username"];
$password=$_POST["password"];
$con=mysqli_connect("localhost","id17602718_root2003","Admin(1234567)","id17602718_ghostpepper"); 
$stmt = $con->prepare("SELECT * FROM login WHERE username =? and password=?");
$stmt->bind_param("ss",$username,$password);
$stmt->execute();
$result = $stmt->get_result();
if($result->num_rows == 0)
{
    echo "Login Failure.... Try Again";
}
else
{
     echo '<br><br><center><h1><b>Login Sucessfull!! Please return to the main page</b></h1></center><br>
       <center> <a href=" https://ghostpepper.000webhostapp.com/index.html"><b>Go Back To Main Page</b></a><hr></center>';
}
$stmt->close();

?>