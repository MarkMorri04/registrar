<?php
 include 'connect.php';
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
    <title>Admin page</title>
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
        <a href="dash.php" style="font-size: 15px; color: whitesmoke; margin-left: 5px;"><img src="" style="width: 10%; margin-left: -10px; background: none; background-color: rgba(0,0,0,0);">&nbsp;&nbsp;SMS Profile </a><br><br>
         
        <p style="font-size: 13px; margin-left: 15px; color: blue; font-weight: bold; background-color: rgba(0,0,0,0);">REGISTRAR</p>
        <p style="font-size: 12px; margin-left: 15px; color: grey; margin-top: -7px; font-weight: bold;  background-color: rgba(0,0,0,0);">Tracking and Document Request </p>
        <a href="adrequest.php" style="font-size: 15px; color: whitesmoke; margin-left: 5px;"><img src="" style="width: 10%; margin-left: -10px; background: none; background-color: rgba(0,0,0,0);">&nbsp;&nbsp;Document Request</a><br>
        
    </div>
<div id="main">
  <button href="javascript:void(0)" class="openbtn" onclick="openNav()" style="position: sticky; top: 0; margin-left: -40px; border-radius: 0; 
  width: 1540px; margin-top: -70px;">☰</button> 
     <div type="container" style="margin-top: 3px; background-color: white; width: 1510px; font-size: 35px; padding: 15px; margin-left: -33px;
      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.1); border: none; font-weight: bold; "><p style="font-size: 13px; color: blue; margin-top: -1px;">
      &nbsp;Dashboard&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Document Request</p>
      <p style="font-size: 35px; margin-top: 5px; margin-left: 15px;">Document Request</p>
    </div><br><br>
    <style>
        table {
        width: 90%;
        border-collapse: collapse;
        margin: 20px 0;
        margin-left: 53px;
    }
    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }
    th {
        background-color: #f2f2f2;
    }
    @media (max-width: 600px) {
        table, thead, tbody, th, td, tr {
            display: block;
        }
        th {
            display: none;
        }
        tr {
            margin-bottom: 15px;
        }
        td {
            text-align: right;
            position: relative;
            padding-left: 50%;
        }
        td::before {
            content: attr(data-label);
            position: absolute;
            left: 0;
            width: 50%;
            padding-left: 10px;
            text-align: left;
            font-weight: bold;
        }
    }
       </style>
<div style="padding: auto; background-color: white; border-radius: 25px;"><br><br>
<p style="font-size: 25px; text-align:center; font-weight: bold;">Tracking Detail</p>
    <table id="requestTable">
    <thead>
          <tr>
              <th>Student name</th>
              <th>Student id</th>
              <th>Document type</th>
              <th>Status</th>
              <th>Action</th>
          </tr>
    </thead>
      <?php
         $add = "SELECT * FROM docu";
         $sql = mysqli_query($conn,$add);
         while($row = mysqli_fetch_assoc($sql)) {
          echo "<tbody>";
               echo "<tr>";
               echo "<td>".$row['stname']."</td>";
               echo "<td>".$row['stid']."</td>";
               echo "<td>".$row['document']."</td>";
               echo "<td>".$row['status']."</td>";
               echo '<td><a href="updatetb.php?id='.$row['id'].'"><button id="myBtn" style="width: 100px; border: none; border-radius: 10px; color: white;
              background-color: skyline; margin-left: 15px; margin-top: -3px;">Edit</button></a>';
          echo "</tbody>";    
         }
      ?>
    </table><br><br>
</div>
    

    <script>
     
    </script>

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