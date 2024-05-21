<html>
    <body>
        <?php
        setcookie('name',$_POST["name"]);
        setcookie('ph-no',$_POST["ph-no"]);
        setcookie('address',$_POST["address"]);
        echo"Hello".$_POST["name"]."!Enter Details... <br>";
        ?>
        <form method="POST" action="third.php">
          <table border="1">
            <tr><td>Product name</td></tr><input type="text" name="pname"></td></tr>
            <tr><td>qty</td></tr><input type="text" name="qty"></td></tr>
            <tr><td>raet</td></tr><input type="text" name="rate"></td></tr>
            <tr><td></td></tr><input type="submit" name="submit" value="DISPLAY"></td></tr>
          </table>
        </form>
    </body>
</html>
        