## level1  
1. 复现  
```php
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
```  
2.这段代码会将提交的文本输出到页面上，若提交`<script>alert(1)</script>`那么浏览器便直接解析代码  
## level2  
* 复现  
```php
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
```    
若提交`">`会使input标签闭合使得浏览器解析后面的代码  
## level3  
* 复现  
```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    ini_set("display_errors", 0);
    $str = $_GET["keyword"];
    echo "<h2 align=center>没有找到和" . htmlspecialchars($str) . "相关的结果.</h2>" . "<center>
<form action=index.php method=GET>
<input name=keyword  value='" .htmlspecialchars($str)."'>	
<input type=submit name=submit value=搜索 />
</form>
</center>";
    ?>    
    
</body>
</html>

```  
输入单引号提前闭合语句随后输入`onmosemove="alrt(1)"`注入xxs  
## level4   
* 复现  
```php
<!DOCTYPE html><!--STATUS OK--><html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<title>欢迎来到level4</title>
</head>
<body>
<h1 align=center>欢迎来到level4</h1>
<?php 
ini_set("display_errors", 0);
$str = $_GET["keyword"];
$str2=str_replace(">","",$str);
$str3=str_replace("<","",$str2);
echo "<h2 align=center>没有找到和".htmlspecialchars($str)."相关的结果.</h2>".'<center>
<form action=level4.php method=GET>
<input name=keyword  value="'.$str3.'">
<input type=submit name=submit value=搜索 />
</form>
</center>';
?>
<center><img src=level4.png></center>
<?php 
echo "<h3 align=center>payload的长度:".strlen($str3)."</h3>";
?>
</body>
</html>

```  
`" onmouseover=alert(1) `引号使value闭合随后后面的事件监听器插入input标签
