<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f4f4f4;
            /* margin: 0; */
            padding: 20px;
            margin-top:50px;

        }

        .container {

            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        h1 {
            text-align: center;
            padding: 20px 0;
            margin: 0;
            background-color: #007bff;
            color: #fff;
        }

        .table-container {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f8f9fa;
            font-weight: bold;
            text-transform: uppercase;
            font-size: 14px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e6f2ff;
        }

        .password {
            font-family: monospace;
            background-color: #eee;
            padding: 2px 4px;
            border-radius: 3px;
        }

        @media screen and (max-width: 600px) {
            table {
                font-size: 14px;
            }

            th, td {
                padding: 8px 10px;
            }

            .password {
                font-size: 12px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>User Data</h1>
        <div class="table-container">
            <button class="btn btn-primary my-2 mx-5" ><a href="index.php"  style="color:white;">Add</a></button>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  <?php

                  $conn=new mysqli('localhost','root','','revision_crud');
                  $sql="select * from crud";
                  $q=mysqli_query($conn,$sql);                  
                  while ($row=mysqli_fetch_assoc($q)) {
                    


                  
            
                  ?>
                  <tr>
                    <td><?php echo $row['id']  ?></td>
                    <td><?php echo $row['name']  ?></td>
                    <td><?php echo $row['email']  ?></td>
                    <td><?php echo $row['password']  ?></td>
                    <td><button class="btn btn-success" ><a href="edit.php?id=<?php  echo $row['id']  ?>" style="color:white">Edit</a></button>
                        <button class="btn btn-danger" ><a href="delete.php?id=<?php  echo $row['id']  ?>" style="color:white">Delete</a></button</td>

                  </tr>

                  <?php

                  }
                  
                  ?>
                   
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>