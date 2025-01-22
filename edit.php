<?php


$conn=new mysqli('localhost','root','','revision_crud');
$id=$_GET['id'];
$sql="select * from crud where id='$id'";
$q=mysqli_query($conn,$sql);
if ($row=mysqli_fetch_assoc($q)) {
    


}   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .form-container {
            background-color: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 1.5rem;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            color: #666;
        }

        input {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1rem;
        }

        button {
            width: 100%;
            padding: 0.75rem;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

        @media (max-width: 480px) {
            .form-container {
                padding: 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Registration Form</h2>
        <form method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="name" name="name" value="<?php echo $row['name'] ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="<?php echo $row['email'] ?>" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" value="<?php echo $row['password'] ?>" required>
            </div>
          
            <button type="submit" name="submit">Update</button>
        </form>
    </div>
</body>
</html>



<?php

if (isset($_POST['submit'])) {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $conn=new mysqli('localhost','root','','revision_crud');
    $sql="UPDATE `crud` SET `name`='$name',`email`='$email',`password`='$password' WHERE id='$id'";
    $q=mysqli_query($conn,$sql);
    if ($q) {
        // echo "connection is successful";
        // header('location:display.php');  
        echo "<script>
        alert('data updated successfully');
        window.location.href = 'display.php'; 
      </script>";
      exit();
    }else{
        echo "<script>alert('There was an error')</script>";
        
    }
      

    }


?>