<?php

// create a new xml document
$doc = new DOMDocument('1.0');


$root = $doc->createElement('Items');
$doc->appendChild($root);

$Item = $doc->createElement('Item');
$Item->setAttribute('Type', 'Book');
$ItemName = $doc->createElement('ItemName', 'Balbharati');
$Item->appendChild($ItemName);
$ItemPrice = $doc->createElement('ItemPrice', '200');
$Item->appendChild($ItemPrice);
$Quantity = $doc->createElement('Quantity', '1');
$Item->appendChild($Quantity);
$root->appendChild($Item);

$Item = $doc->createElement('Item');
$Item->setAttribute('Type', 'Watch');
$ItemName = $doc->createElement('ItemName', 'Titan');
$Item->appendChild($ItemName);
$ItemPrice = $doc->createElement('ItemPrice', '2500');
$Item->appendChild($ItemPrice);
$Quantity = $doc->createElement('Quantity', '1');
$Item->appendChild($Quantity);
$root->appendChild($Item);

$Item = $doc->createElement('Item');
$Item->setAttribute('Type', 'Flower');
$ItemName = $doc->createElement('ItemName', 'Rose');
$Item->appendChild($ItemName);
$ItemPrice = $doc->createElement('ItemPrice', '50');
$Item->appendChild($ItemPrice);
$Quantity = $doc->createElement('Quantity', '5');
$Item->appendChild($Quantity);
$root->appendChild($Item);

$Item = $doc->createElement('Item');
$Item->setAttribute('Type', 'Pen');
$ItemName = $doc->createElement('ItemName', 'Cello');
$Item->appendChild($ItemName);
$ItemPrice = $doc->createElement('ItemPrice', '30');
$Item->appendChild($ItemPrice);
$Quantity = $doc->createElement('Quantity', '3');
$Item->appendChild($Quantity);
$root->appendChild($Item);

$Item = $doc->createElement('Item');
$Item->setAttribute('Type', 'Laptop');
$ItemName = $doc->createElement('ItemName', 'Dell');
$Item->appendChild($ItemName);
$ItemPrice = $doc->createElement('ItemPrice', '1');
$Item->appendChild($ItemPrice);
$Quantity = $doc->createElement('Quantity', '40000');
$Item->appendChild($Quantity);
$root->appendChild($Item);

// save the xml document to a file
$doc->save('Item.xml');

echo 'File Item.xml created successfully!';
?>
