<?php
include 'dbconfig.php';
session_start();
$id = $_SESSION['id'];

  $liststaff = "SELECT * FROM `staff` WHERE email='".$id."'";
  $result = mysqli_query($conn,$liststaff);
  $checklist = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme Company Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="mystyle.css">
<style>
body{
  padding: 170px 10px;
}
a{
  color: white;
}
.button {
  display: inline-block;
  padding: 40px 70px;
  font-size: 20px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: black;
  background-color: white;
  border: none;
  border-radius: 15px;
  box-shadow: 0 10px #999;
}

.button:hover {background-color: yellow}

.button:active {
  background-color: #fefa78;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
.button1 {
  display: inline-block;
  padding: 30px 70px;
  font-size: 20px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: black;
  background-color: white;
  border: none;
  border-radius: 15px;
  box-shadow: 0 10px #999;
}

.button1:hover {background-color: yellow}

.button1:active {
  background-color: #fefa78;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">


<div class="container" align="center">
  <h2>Home Menu</h2>
  
  <a href="item.php"><button class="button">ITEMS</button></a>
  <a href="staff.php"><button class="button">STAFFS</button></a>
  <a href="#"><button class="button">REPORTS</button></a>
<!--   <a href="#"><button class="button1"><i class="fas fa-camera-retro fa-3x"></i></button></a>
 --> <p><br><br><br></p>
</div>
<div class="container" align="center"><p style="font-size: 20px; font-weight: blod;"><?php echo $checklist['name']; ?></p>
  <a onclick="myFunction()"><i class="fas fa-power-off fa-3x"></i><p>Logout</p></a>
</div>



</body>
</html>

<script>
function myFunction() {
    var r = confirm("Are you sure to logout?");
    if (r == true) {
        window.location = "logout.php";
    } else {
        window.location = "home.php";
    }
    document.getElementById("demo").innerHTML = txt;
}
</script>