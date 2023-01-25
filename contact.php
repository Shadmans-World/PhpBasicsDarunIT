<?php
if(isset($_POST['btn'])){
    $username =$_POST['user_name'];
    $email =$_POST['email'];
    $id =$_POST['id'];
}
?>
<?php
    if(isset($_POST["btn"])){
        $img_name= $_FILES['upload_img']['name'];
        $tmp_name = $_FILES['upload_img']['tmp_name'];
        move_uploaded_file($tmp_name, "Upload/".$img_name);
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="id.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="idcard">
        <div>
            <header>
                <h2>Student ID Card</h2>
            </header>
            <div class="information">
                <div class="row1">
                <img src="Upload/<?php if(isset($img_name)){
                    echo $img_name;
                }?>
                    " alt="Uploaded Photo">
                </div>
                <div class="row2">
                    <div class="details">
                        <h2>Student  Name: <?php 
                        if(isset($username)){
                            echo $username;
                        }
                        ?>
                        <br>
                        <div class="point_details">
                            <ul>
                                <li>Gmail-<?php if(isset($email)){
                                    echo $email;
                                } ?></li>
                                <li>ID Number-<?php if(isset($id)){
                                    echo $id;
                                } ?></li>

                            </ul>
                        </div>

                        </h2>
                    </div>
                </div>
                    </div>
                </div>
            </div>
            
</div>
    </div>
</div>    
</body>
</html>