<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
  	 $dbServername = "localhost";
     $dbUsername = "root";
     $dbPassword = "";
     $dbName = "tripplanner";
     $conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
     if($conn -> connect_error){
	    die("Connection failed :".$conn -> connect_error);
     }
     $name = $_POST["username"];
	 setcookie("user-name", $name, time() + (86400 * 30), "/");
     $password = $_POST["password"];
     $position = $_POST["choice"];
     $sql = "SELECT * from user;";
     $result = mysqli_query($conn,$sql);
     $resultCheck = mysqli_num_rows($result);
     if($resultCheck > 0){
     	while($row = mysqli_fetch_assoc($result)){
     		if($name == $row["First_name"]." ".$row["last_name"]){
     			if($password == $row["pass"]){
     				if($position == "Administrator"){
                         header("Location:admin.php");
						 //echo "<script> window.open('admin.php') ;</script>";
						 //echo "hello";
     				}
     				else if($position == "Employee"){

     				}
     				else{

     				}
     			}
     		}
     	}
     	echo "Entered Username/password is invalid";
     }
  }