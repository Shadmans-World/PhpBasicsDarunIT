<?php

   if(isset($_POST['btn'])){
    $usrnm = $_POST["user_name"];
    $email =$_POST["email"];
    $id = $_POST["id"];
   } ?>
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
    <title>Document</title>
    
    <link rel="stylesheet" href="ex.css
    ">
</head>
<body>
    <div class="top">
         <h1>Your Id Card</h1>
    </div>

    <container>

    <div class="row">

        <div >

            <h2>Name: <?php 
    
    
            if(isset($usrnm)){
            echo $usrnm;
            }
            ?>
    
           </h2>
           <h2>Your Id: <?php
          if(isset($id)){
             echo $id;
             }
             ?>

          </h2>
          <h2>Email: <?php
    
         if(isset($email)){
            echo $email;
              }
           ?>
           </h2>
    

    
        </div>
        <div >
    
        <img  src="Upload/<?php if(isset($img_name)){
            echo $img_name;
           }?>
           " alt="Uploaded Photo">:

     </div>
    
       

    </div>
    
    
    
     
     
</container>
    
</body>
</html>