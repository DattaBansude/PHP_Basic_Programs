<html>
    <body>
        <?php
        echo" <b>customer Details</b><br>";
        echo"<table border='1'>";
        echo"<tr><td>";
        echo"customerName:".$_COOKIE["name"]."<br>";
        echo"</tr></td>";
        echo"</tr></td>";
        
        echo"customerphone:".$_COOKIE["ph-no"]."<br>";
        echo"</tr></td>";
        echo"</tr></td>";
        
        echo"customer address:-".$_COOKIE["address"]."<br>";
        echo"</tr></td>";
        echo"</tr></td>";
        echo"<b>customer bill</b> <br>";

        echo"</tr></td>";
        echo"</tr></td>";
        echo"pname:".$_REQUEST["pname"];
        echo"</tr></td>";
        echo"</tr></td>";
        echo"qty:".$_REQUEST["rate"];
        echo"</tr></td>";
        echo"</table>";
        if(isset($_POST['submit']))
        {
            $qty=(int)$_POST['qty'];
            $rate=(int)$_POST['rate'];
            $total=$qty*$rate;
            echo"Total=".$total;
        }      
    ?>
    </body>
 </html>  