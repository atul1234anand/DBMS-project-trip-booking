<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style type="text/css">
     body{
      background-image:url(plan.jpg);
      background-size:cover;
      background-position:center;
    }
    #ui{
      background-color:#333;
      padding:30px;
      margin-top:60px;
      border-radius:10px;
      opacity:0.9;
    }
    #ui label,h1,h3,.list-group{
      color:#fff;
    }
  </style>
</head>
<body>

	<nav class="navbar navbar-default" style="background-color: #add8e6;">
  	<div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Tripplanner</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="admin.php">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="login.php">Logout</a></li>
    </ul>
  </div>
	</nav>

  <h3>Employees under you</h3>
  <div class="list-group" id="try">
  
</div>

<!-- Modal -->
<div class = "container">
    <div class = "row">
      <div class = "col-lg-3"></div>
      <div class = "col-lg-6">
        <div id = "ui">
          <h1 class = "text-center">Employee form</h1>
          <form class = "form-group text-center" action = "add_emp.php" method = "POST">
            <div class = "row">
              <div class = "col - md - 6">
                <label>Id-number: </label>
                <input type="text" name="id" class = "form-control" placeholder = "Enter Id">
              </div>
              <div class = "col - md - 6">
                <label>Name: </label>
                <input type="text" name="name" class = "form-control" placeholder = "Enter your name">
              </div>
            </div>
            <br>
                        <label>Username:</label>
                        <input type="text" name="uname" placeholder = "Enter your name" class = "form-control"><br>
                        <div class = "row">
              <div class = "col - md - 6">
                <label>Password : </label>
                <input type="text" name="password" class = "form-control" placeholder = "Enter new password">
              </div>
              <div class = "col - md - 6">
                <label>Salary: </label>
                <input type="text" name="sal" class = "form-control" placeholder = "Enter salary">
              </div>
            </div>
            <br>
            <select class = "form-control" name = "gender">
              <option>Choose Gender</option>
              <option value = "Male">Male</option>
              <option value = "female">female</option>
              <option value = "others">others</option>
            </select>
            <br>
            <Label>Adress :</Label>
            <input type="text" name="adress" class = "form-control" placeholder = "Enter your address">
            <br>
            <Label>Phone No:</Label>
            <input type="number" name="Pno" class = "form-control" placeholder = "Phone no">
            <br>
            <Label>Admin Id:</Label>
            <input type="text" name="ad_id" class = "form-control" placeholder = "Admin Id">
            <br>
            <input type="submit" name="submit" value = "submit" class = "btn btn-primary btn-block" >
          </form>
        </div>
      </div>
      <div class = "col-lg-3"></div>
    </div>
  <



<?php

    $db= mysqli_connect("localhost","root","","tripplanner") or die("Connection not established");
    $name="Aluino Worgan";//$_COOKIE['user-name'];
    $res=mysqli_query($db,"select E.Name from administrator as A,employee as E where A.Id_number=E.admin_id and A.Name='".$name."';");
    if(mysqli_num_rows($res))
    {

      //print_r(mysqli_fetch_assoc($res)['Name']);
      $row=mysqli_fetch_assoc($res);
      //print_r($row);
      $i=0;
      while($row)
      {
        //print_r(mysqli_fetch_assoc($res)['Name']);
        //print_r($row);
        echo "<script type='text/javascript'> 
                       var t=document.getElementById('try');
                       
                       
                       var a=document.createElement('a');
                       a.innerText='".$row['Name']."';
                       a.className='list-group-item';
                       a.style='font-size:18px;';
                       
                       
                       t.appendChild(a);
                       var b=document.createElement('button');
                       b.innerText='view more';
                       a.appendChild(b);
                       b.className='btn btn-info openBtn';
                       b.style='position:absolute;bottom:2px;left:90%;';</script>";

        $row=mysqli_fetch_assoc($res);  

      }
      mysqli_close($db);  
    } 



?>

  <script type="text/javascript">
   function goModal(e){
        var str=e.target.parentNode.textContent;
        
        str=str.slice(0,str.length-9);
        console.log(str);
      document.cookie='user='+str+';';      
      window.open('home.php','_self');
        // e.target.className='add_post';
  //          var xhttp = new XMLHttpRequest();
  // xhttp.onreadystatechange = function() {
  //   if (this.readyState == 4 && this.status == 200) {

  //     var str = this.responseText;
  //     var tar=document.getElementById("demo");
  //     console.log(tar);
  //   }
    
  // };
  // xhttp.open("POST", "demo.php", true);
  // xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  // xhttp.send("name="+str);
//}
          
    

//    var btns=document.querySelectorAll('button');
//    console.log(btns);
    //console.log("punit");
   // for(i=0;i<btns.length;i++){
      //btns[i].addEventListener("click",goModal);
//       $('.openBtn').on('click',function(){
//     $('.modal-body').load('getContent.php?name='+str,function(){
//         $('#myModal').modal({show:true});
//     });
// });
//});
//      })
    } 
 var btns=document.querySelectorAll('button');   
 for(i=0;i<btns.length;i++)
      btns[i].addEventListener("click",goModal);



  </script>
    




</body>
</html>