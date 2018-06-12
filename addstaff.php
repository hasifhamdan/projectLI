<?php  
include 'dbconfig.php';

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $notel = $_POST['notel'];
  $position =$_POST['position'];

  $insert = "INSERT INTO staff (`email`,`name`,`pnum`,`position`)VALUES('".$email."','".$name."','".$notel."','".$position."') ";
  if (mysqli_query($conn, $insert)) {
     ?>
    <script type="text/javascript">
      alert("Data has been added");
    </script>
    <?php
  }else{
    ?>
    <script type="text/javascript">
      alert("Error");
    </script>
    <?php
  }
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
<style>

body{
        padding: 100px 25px;
}
.button {
  display: inline-block;
  padding: 10px 50px;
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
  transform: translateY(5px);
}
</style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<div class="container"><div class="col-md-3"></div>
<div class="col-md-6">
  <h2>Add New Staff</h2>
  <form method="post">
    <div class="form-group">
      <label for="email">Name :</label>
      <input type="text" class="form-control" placeholder="Ali bin Bakar" name="name" required>
    </div>
    <div class="form-group">
      <label for="email">Email :</label>
      <input type="email" class="form-control" placeholder="example@gmail.com" name="email" required>
    </div>
    <div class="form-group">
      <label for="email">No Tel :</label>
      <input type="text" class="form-control" placeholder="0123456789" name="notel">
    </div>
    <div class="form-group">
      <label for="email">Position :</label>
      <select class="form-control" name="position">
        <option value="-">-Select Position-</option>
        <option value="Managing Director">Managing Director</option>
        <option value="Technical Director">Technical Director</option>
        <option value="Support Engineer">Support Engineer</option>
        <option value="Engineer">Engineer</option>
      </select>
    </div>    

    
    <button type="submit" class="button" name="submit">Submit</button>&nbsp;
    <a href="#"><button class="button" name="reset">Reset</button></a>&nbsp;
    <a href="staff.php"><button class="button" name="back">Back</button></a>
  </form>
  </div><div class="col-md-3"></div>
</div>

</body>
</html>
