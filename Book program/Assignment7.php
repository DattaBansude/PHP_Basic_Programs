<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programing Languages</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="GET"> 
 Select Programming Languages:<br /> 
 <input type="checkbox" name="languages[]" value="c">C 
 <input type="checkbox" name="languages[]" value="c++">C++ 
 <input type="checkbox" name="languages[]" value="php">PHP 
 <input type="checkbox" name="languages[]" value="perl">Perl 
 <br> 
 <input type="submit" name="s" value="Ok" /> 
 </form> 
 <?php 
 if(isset($_GET['s'])) 
 { 
 $lan = $_GET['languages']; 
 echo "You selected<br>"; 
 foreach($lan as $k=>$v) 
 echo "$v "; 
 } 
 ?> 
</body>
</html>