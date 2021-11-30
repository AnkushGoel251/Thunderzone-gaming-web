<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<!DOCTYPE html>
<html>
<head>
	<title>SignUp Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body class="log">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="nv">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php" id="thund" style="color:red;" >Thunderzone</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              
            </li>
            
            <!-- <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li> -->
            <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Catergories
              </a> -->
              <!-- <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Sports</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">others</a></li>
              </ul>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="signup.php">Signup</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Login.php">Login</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="#">Logout</a>
            </li> -->
            <!-- <li class="nav-item">
              <a class="nav-link" href="mylist.php">Mylist</a>
            </li> -->
            <li><a class="navbar-brand" href="mylist.php" style="color: red;" ><?php if(isset($_SESSION[`loggedin`]))echo $_SESSION[`name`];?></a></li>
          </ul>
          
        </div>
      </div>
    </nav>

<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign up</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
			</div>
			<div class="card-body">
            <?php
   
               $server="localhost";
               $username="root";
               $password="Ankshi#251";
               $database="game_web";
               $conn=mysqli_connect($server,$username,$password,$database,"8111");
               if($_SERVER["REQUEST_METHOD"]=="POST"){
               $user=$_POST["user"];
               $email=$_POST["email"];
               $age=$_POST["age"];
               
               $sql=" INSERT INTO `user_data` (`email_id`, `name`, `age`) VALUES ('$email', '$user', '$age')";
               $result=mysqli_query($conn,$sql);
               
               }
            ?>
				<form action="index.php" method="post">
				<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="E-mail" name="email" #id="email">
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="username" name="user" #id="user">
						
					</div>
					
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Age" name="age" #id=age>
					</div>
					
					<div class="form-group">
						<input type="submit" value="Signup" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<!-- <div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="#">Sign Up</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#">Forgot your password?</a>
				</div>
			</div> -->
		</div>
	</div>
</div>
</body>
</html>