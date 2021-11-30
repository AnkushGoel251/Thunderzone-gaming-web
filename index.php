<!doctype html>

<?php
$server="localhost";
$username="root";
$password="Ankshi#251";
$database="game_web";
$conn=mysqli_connect($server,$username,$password,$database,"8111");

session_start();


?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="icon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
<link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
<script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
    <title>Thunderzone</title>
  </head>
  <body>
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

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://media.contentapi.ea.com/content/dam/gin/images/2019/04/star-wars-jedi-home-hero-large-xl.jpg.adapt.crop1x1.767p.jpg" class="d-block w-100" alt="..." id="images">
          <div class="carousel-caption d-none d-md-block">
            <h3>Action</h3>
            <p>Gaming experience you never had.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://www.goodwood.com/globalassets/.road--racing/race/modern/2020/4-april/best-sim-racing-games/the-seven-best-sim-racing-games-list-goodwood-01042020.jpg?crop=(0,0,2600,1463)&width=1600" class="d-block w-100" alt="..." id="images">
          <div class="carousel-caption d-none d-md-block">
          <h3>Racing games</h3>
          <p>Drive your way to the final.</p>
        </div>
        </div>
        <div class="carousel-item">
          <img src="fight.jpg" class="d-block w-100" alt="..." id="images">
          <div class="carousel-caption d-none d-md-block">
            <h3>Fantasy</h3>
            <p>Fight the evil and bring the balance.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <p id="info"> Play the very best of soccer, football, ice hockey, golf, basketball, Formula 1® and MMA games with Thunderzone titles. Dominate the World's Game in our FIFA games, rise to gridiron greatness in the Madden NFL series, hit the ice with hockey gameplay so authentic you might want to bring a mouth guard with our NHL games, and more!</p>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    <form class="d-flex searchl" style="margin-bottom: 5%;"  method="POST" >
      <input class="form-control me-2 " type="search" #id="sno" name="sno" placeholder="Add Game to your list just enter serial number here" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Add</button>
      <?php
      if($_SERVER["REQUEST_METHOD"]=="POST"){
  
        $sno=$_POST["sno"];
    
    $email=$_SESSION[`email_id`];
   
    $sql=" INSERT INTO `favourite` (`email_id`, `sno`) VALUES ('$email', '$sno')";
    $result=mysqli_query($conn,$sql);
    
  }
      ?>
    </form>
    
  <form method="post">
    <div style="margin-top: 5%; margin-bottom: 5%; margin-left: 5%;margin-right:5% ;">
    <table class="table" id="myTable">
  <thead>
    <tr>
      <th scope="col" >S.NO</th>
      <th scope="col">Game</th>
      <th scope="col">Release Year</th>
      <th scope="col">Category</th>
      <!-- <th scope="col">Add to your list</th> -->
    </tr>
  </thead>
  <tbody>
  <?php
   
   
   
  //  $sno=$_POST[`name`];
  //  $game_name=$_POST[`game_name`];
  //  $release_year=$_POST[`release_year`];
  //  $category=$_POST[`category`];
   $sql="SELECT * FROM `game_data`";
   $result=mysqli_query($conn,$sql);
   
   while($row = mysqli_fetch_assoc($result)){
     echo "<tr>
    <th scope='row' >".$row['sno']."</th>
    <td>".$row['game_name']."</td>
    <td  >".$row['release_year']."</td>
    <td>".$row['category']."</td>
    
     </tr>";
   
   }
   
    $conn->close();
  ?>
   
  </tbody>
</table>
</div>
</form>  


    <div class="footer">
      <p class="owner">Contact owner of this website</p>
      <a  class="lowa" href="http://www.linkedin.com/in/ankush-goel-822733211">LinkedIn</a>
      <a class="lowa" href="https://github.com/AnkushGoel251">GitHub</a>
      <a class="lowa" href="mailto:ankushgoel253@gmail.com">Gmail</a>
    </div>
  </body>
</html>
