<pre>
<?php
$xml=simplexml_load_file("book.xml"); //or die("eror:cannot create object");
echo htmlspecialchars($xml->asXML());
// var_dump($xml);
// print_r($xml);
?>
</pre>