<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
 if( isset($_POST["s1"]) ) 
 { 
 echo "Welcome ". $_POST['name']. "<br />"; 
 echo "You are ". $_POST['age']. " years old.";
 } 
?> 
<html> 
 <body> 
 <form action="<?php $_PHP_SELF?>" method="POST"> 
 Name: <input type="text" name="name" /><br> 
 Age: <input type="text" name="age" /><br> 
 <input type="submit" name="s1" value="Ok"/> 
 </form> 
 </body> 
</html> 
</body>
</html>