<?php 
 $fname=$_GET['fname']; 
 $xml=simplexml_load_file("$fname") or die("Error: Cannot create object"); 
 echo "Contents of $fname in tabular format : <br><br>"; 
 echo"<table border=1><tr><th>itemName. </th><th>itemprice</th><th>Quantity</th></tr>"; 
 foreach($xml->children() as $items) 
 { 
 
 echo "<td>".$items->itemName . "</td> "; 
 echo "<td>".$items->itemprice . "</td>"; 
 echo "<td>".$items->Quantity. "</td></tr>";
 } 
 echo "</table>" ;
?>