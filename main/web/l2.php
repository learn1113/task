<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $named=$_GET['name'];
    
   '
    <div>
    <form action="level2.php" method="get">

        <input type="text" name="name" value="'.$named.'">
        <input type="submit" value="提交">
    </form>
    </div>'
    ?>
   
</body>
</html>