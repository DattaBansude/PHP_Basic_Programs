<?php
$xml=simplexml_load_file("Item.xml") or die("eror:cannot create object");
echo "<table border=1 align=center>";
echo "<tr><td>Item Name</td><td>Item Price</td><td>Quantity</td></tr>";
foreach($xml->children() as $item)
{
echo "<tr><td>".$item->ItemName."</td>";
echo "<td>".$item->ItemPrice."</td>";
echo "<td>".$item->Quantity."</td></tr>";
}
echo "<table>";
?>