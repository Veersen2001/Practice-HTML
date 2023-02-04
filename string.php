<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>  
    <form action="">  
    <tr><td>Name</td><td><input type="text" name="t1" placeholder="Enter string" required></td></tr>
    <tr><td>Name</td><td><input type="text" name="t2" placeholder="Enter string" required></td></tr>
    <tr><td>Name</td><td><input type="text" name="res"  ></td></tr>
    <tr><td><input type="button" name="c"  ></td></tr>
    </form>

</table>
</body>
</html>


<?php
if(isset($_POST['c']))
{
    $a=$_POST['t1'];
    $b=$_POST['t2'];
    $c=$a.$b;
    echo "$c"; 
}

?>