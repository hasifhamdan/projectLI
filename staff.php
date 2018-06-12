<?php

  include 'dbconfig.php';
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
  
  table{
    color: black;
  }



/*  button 1  */
.button1 {
  display: inline-block;
  border-radius: 4px;
  background-color: blue;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 18px;
/*  padding: 20px;
*/  width: 100px;
  transition: all 0.5s;
  cursor: pointer;
/*  margin: 5px;
*/}

.button1 span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button1 span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button1:hover span {
  padding-right: 25px;
}

.button1:hover span:after {
  opacity: 1;
  right: 0;
}


/*  button 2  */

  .button {
  display: inline-block;
/*  padding: 40px 70px;*/
  font-size: 12px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: black;
  background-color: white;
  border-radius: 15px;
  box-shadow: 0 5px #999;
  border: 2px solid #555555;
}

.button:hover {background-color: yellow}

.button:active {
  background-color: #fefa78;
  box-shadow: 0 3px #666;
  transform: translateY(1px);
}
</style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<div class="container">
  <h2>List of Staff Tuah Packet SDN BHD</h2>
  <p>You able tu edit details or delete staff from list by clicking "edit" button</p> 
</div>


<div class="container" style="background-color:white;"> 
  <table class="table table-striped">
    <thead>
    <tr style="background-color:transparent">
    <th><a href="home.php"><button class="button1" style="vertical-align:middle"><span>BACK</span></button></a></th>
    <th></th>
    <th></th>
    <th></th>
    <th><a href="addstaff.php"><button class="button1" style="vertical-align:right"><span>ADD</span></button></a>
</th>
    </tr>
      <tr>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>PHONE NUM</th>
        <th>POSITION</th>
        <th>ACTION</th>
      </tr>
    </thead>
      
    <tbody>
    <?php
        $liststaff = "SELECT * FROM `staff`";
        $result = mysqli_query($conn,$liststaff);
        while ($checklist = mysqli_fetch_assoc($result)) {
          
      ?>
      <tr>
        <td><?php echo $checklist['name'] ?></td>
        <td><?php echo $checklist['email'] ?></td>
        <td>0<?php echo $checklist['pnum'] ?></td>
        <td><?php echo $checklist['position'] ?></td>
        <td><a href="editStaff.php?email=<?php echo $checklist['email'] ?>"><button class="button">EDIT</button></a></td>
      </tr>
      <?php }?>
    </tbody>
  </table>
</div>




</body>
</html>
