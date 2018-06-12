<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
<body onload="myFunction()" style="margin:0;">

<div id="loader"></div>

<p align="center">Please Wait a Minute</p>


<script>
var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 3000);
}

function showPage() {
  window.location = "login.php?id=try";
  document.getElementById("loader").style.display = "none";
  document.getElementById("try").style.display = "block";
}
</script>

</body>
</html>
