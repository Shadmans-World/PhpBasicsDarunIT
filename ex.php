<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="ex.css">

</head>
<body>
<div class="form">
        <form action="exdetails.php" method="POST" enctype="multipart/form-data">
            <label>Username</label>
            <input type="text" name="user_name"><br>
            <br>
            <label>Email</label>
            <input type="email" name="email"><br>
            <br>
            <label for="">Id</label>
            <input type="text" name="id"><br>
            <br>
            <input type="file" name="upload_img"><br>
            <br>
            <input type="submit" value="submit data" name="btn">
    
        </form>
</div>   
    
</body>
</html>