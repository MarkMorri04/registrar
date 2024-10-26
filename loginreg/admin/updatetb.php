<?php
  include 'connect.php';

  $id = $_GET['id'];

  $query = "SELECT * FROM docu WHERE id='$id'";
  $data = mysqli_query($conn,$query);
  
  $result = mysqli_fetch_assoc($data);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details Submission Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            text-align: center;
        }
        form {
            display: flex;
            flex-direction: column;
            max-width: 400px;
            align-items: center;
            justify-content: center;
        }
        label {
            margin-bottom: 5px;
            margin-top: 15px;
            margin-left: 15px;
        }
        input, textarea {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 300px;
            margin-left: 15px;
            margin-right: 15px;
        }
         select {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 300px;
            margin-left: 15px;
            margin-right: 15px;
        }
        button {
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            width: 100px;
            border-radius: 25px;
            cursor: pointer;
            margin-bottom: 15px;
            margin-left: 15px;
        }
        button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    
    <h1>Update the Request</h1>
    <form action="#" method="Post">
    <div style="padding: auto; background-color: white; border: 0; border-radius: 10px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); 
    margin-left: 1060px;"><br>
        <label>Student name:</label><br>
        <input type="text" name="stname" value="<?php echo $result['stname'];?>" required><br>

        <label>Student id:</label><br>
        <input name="stid" value="<?php echo $result['stid'];?>"required>

        <label>Document type :</label><br>
        <input type="text" name="document" value="<?php echo $result['document'];?>" required><br>

        <label>Status :</label><br>
        <select name="status">
            <option>Pending</option>
            <option>Approved</option>
            <option>Not eligible</option>
        </select>
    <br>
    
        <button type="submit" name="submit">Update</button>

        </div>    
    </form>

    <?php
   if(isset($_POST['submit'])) {
    $stname = $_POST['stname'];
    $stid = $_POST['stid'];
    $document = $_POST['document'];
    $status = $_POST['status'];

    $update = "UPDATE docu SET stname='$stname',stid='$stid', document='$document',status='$status' where id='$id'";
    $up = mysqli_query($conn,$update);
    if(!$up) {
        die('wrong');
    }
    else {
        header('location:adrequest.php');
    }    
    
   }
?>
    
    <script>
        document.getElementById('detailsForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const detail = document.getElementById('detail').value;
            const description = document.getElementById('description').value;
            const amount = document.getElementById('amount').value;
            const date = document.getElementById('date').value;

            console.log('Detail:', detail);
            console.log('Description:', description);
            console.log('Amount:', amount);
            console.log('Date:', date);
        });
    </script>

</body>
</html>
