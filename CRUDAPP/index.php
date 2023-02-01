<?php
   include("function.php");

   $objcrudAdmin = new crudapp();
   if(isset($_POST['add_info'])){
     $return_msg = $objcrudAdmin->add_data($_POST);
   }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" ></script>
    <title>CRUD APP</title>
</head>
<body>
    <div class="container my-5 p-4 shadow">

    <h2 style="text-align:center;"><a style="text-decoration :none;" href="index.php">Student Database</a></h2>

   
    <form action="" method="POST" enctype="multipart/form-data">
    <?php
            if(isset($return_msg)){
                echo $return_msg;
            }     
    ?>
        <input class= "form-control mb-2" type="text"name="std_name" placeholder = "Enter Your Name" >
        <input class= "form-control mb-2" type="text"name="std_roll" placeholder = "Enter Your Roll Number" >
        <label for="image">Upload Your Image</label>
        <input class="form-control mb-2" type="file" name="std_img">
        <input style= "text-align: center" class= "form-control bg-warning" type="submit"name="add_info" value= "Add Information" >
    </form>

    </div>
    <div class="container my-5 p-4 shadow">

    <table class="table table-responsive">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Roll</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Shadman</td>
                <td>191-15-12355</td>
                <td></td>
                <td>
                    <a class="btn btn-success" href="#">Edit</a>
                    <a class="btn btn-warning" href="#">Delete</a>
                </td>
            </tr>
        </tbody>
       

    </table>

    

    </div>
</body>
</html>