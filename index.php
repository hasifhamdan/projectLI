<?php
include 'dbconfig.php';


if(isset($_POST['login']))
{
  $email = $_POST['email'];

  $liststaff = "SELECT * FROM `staff`";
  $result = mysqli_query($conn,$liststaff);
  $checklist = mysqli_fetch_assoc($result);

  if($checklist['email'] == $email){
    header("Location: login.php?id=$email");
  }else{
    ?><script>
      alert("Please insert valid email address!!!")
    </script>
    <?php
  }

  mysqli_close($conn);

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme Company Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="mystyle.css">

</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">


<div class="text-center">
  <h1 style="font-weight: bold;">Tuah Packet Sdn Bhd</h1> 
  <p>Track Your Item Here, Login First</p> 
  <form method="post">
    <div class="container input-group col-md-12" >
      <div class="col-md-3"></div>
        <div class="col-md-6">
          <input name="email" type="email" class="form-control" placeholder="Email Address" required>
        </div>
      <div class="col-md-3"></div>
    </div>
    <div class="input-group-btn"><p></p>
     <button type="submit" class="btn btn-danger" name="login">LOGIN</button>
    </div>
  </form>
</div>

</body>
</html>
