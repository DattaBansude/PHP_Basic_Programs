<?php
header('Content-Type: text/xml');
print '<?xml version="1.0"?>' . "\n";
print "<BookInfo>\n";
$book = array(array('bookno' => '1',
'bookname' => 'JAVA', 'authorname' => 'Balguru Swami', 'price' => '250', 'year' => '2006'), array('bookno' =>
'2', 'bookname' => 'C', 'authorname' => 'Denis Ritchie', 'price' => '500', 'year' => '1971'));
foreach ($book as $b)
{
print " <book>\n";
foreach($b as $tag => $data)
{
print " <$tag>" . htmlspecialchars($data) . "</$tag>\n";
}
print " </book>\n";
}
print "</BookInfo>\n";
?>