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
    echo "Hello $named";
    ?>
    <div>
        <form action="level1.php" method="get">
            <input type="text" name="name">
            <input type="submit" value="提交">
        </form>
    </div>
  
    
</body>
</html>