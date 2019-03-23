<!DOCTYPE html>
<html>
<head>
	<title>Login form</title>
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>-->
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
   	#ui label,h1{
   		color:#fff;
   	}
   </style>
</head>
<body>
		<nav class="navbar navbar-default" style="background-color: #add8e6;">
  	<div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Trip Planner</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
	</nav>
	 <div class="list-group" id="try">

	<div class = "container">
		<div class = "row">
			<div class = "col-lg-3"></div>
			<div class = "col-lg-6">
				<div id = "ui">
					<h1 class = "text-center">Login form</h1>
					<form class = "form-group text-center" action = "log1.php" method = "POST">
						<div class = "row">
							<label>Username:</label>
							<input type="text" name="username" placeholder = "Enter your name" class = "form-control">
						</div>
                        <div class = "row">
							<label>Password:</label>
							<input type="password" name="password" placeholder = "Enter your password" class = "form-control">
						</div>
						<br>
						<br>
						<select class = "form-control" name = "choice">
							<option value = "val1">Position</option>
							<option value = "Administrator">Administrator</option>
							<option value = "Employee">Employee</option>
							<option value = "User">User</option>
						</select>
						<br>
						<input type="submit" name="submit" value = "submit" class = "btn btn-primary btn-block">
						<label>Not Registerd ? <a href="registration.php">Sign up</a></label>
					</form>
				</div>
			</div>
			<div class = "col-lg-3"></div>
		</div>
	</div>
</body>
</html>
</html>
