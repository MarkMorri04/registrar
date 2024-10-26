<?php
 include 'connect.php';
 include'auth.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="style3.css">
    <title>try1</title>
</head>
<body>
    <!DOCTYPE html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div id="mySidebar" class="sidebar">
      <img src="blogo.png" style="width: 40%; margin-left: 25%; background-color: rgba(0,0,0,0);"><br><br>
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="background: none; text-align: right; font-size: 30px;color: white; font-weight: bold;">x</a>
        <br>
        
        <p style="font-size: 13px; margin-left: 15px; color: blue; font-weight: bold; background-color: rgba(0,0,0,0);">REGISTRAR</p>
        <p style="font-size: 12px; margin-left: 15px; color: grey; margin-top: -7px; font-weight: bold; background-color: rgba(0,0,0,0);">Menu</p>
        
        <a href="dash.php" style="font-size: 15px; color: whitesmoke; margin-left: 5px;"><img src="" style="width: 11%; margin-left: -10px; background: none; background-color: rgba(0,0,0,0);">&nbsp;&nbsp;Dashboard</a>
        <a href="" style="font-size: 15px; color: whitesmoke; margin-left: 5px;"><img src="" style="width: 10%; margin-left: -10px; background: none; background-color: rgba(0,0,0,0);">&nbsp;&nbsp;SMS Profile </a><br><br>
         
        <p style="font-size: 13px; margin-left: 15px; color: blue; font-weight: bold; background-color: rgba(0,0,0,0);">REGISTRAR</p>
        <p style="font-size: 12px; margin-left: 15px; color: grey; margin-top: -7px; font-weight: bold;  background-color: rgba(0,0,0,0);">Tracking and Document Request </p>
        <a href="request.php" style="font-size: 15px; color: whitesmoke; margin-left: 5px;"><img src="" style="width: 10%; margin-left: -10px; background: none; background-color: rgba(0,0,0,0);">&nbsp;&nbsp;Document Request</a><br>
    </div>
<div id="main">
  <button href="javascript:void(0)" class="openbtn" onclick="openNav()" style="position: sticky; top: 0; margin-left: -40px; border-radius: 0; 
  width: 1540px; margin-top: -70px;">☰</button> 
     <div type="container" style="margin-top: 3px; background-color: white; width: 1500px; font-size: 35px; padding: 10px; margin-left: -35px;
      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.1); border: none; font-weight: bold;"><p style="font-size: 15px; color: blue; margin-top: 25px;">&nbsp;Dashboard</p>Announcements<br><br></bdir></div><br><br>
   
<div style="padding: auto; background-color: white; border-radius: 25px;"><br><br>
<p style="font-size: 20px; text-align:left; font-weight: bold; margin-left: 20px; margin-top: -10px ;">Announcement</p><br><br>
</div>

<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "280px";
  document.getElementById("main").style.marginLeft = "280px";
}
function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
   
</body>
</html> 

</body>
</html>