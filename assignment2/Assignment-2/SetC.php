<?php
$doc=new DOMDocument("1.0","UTF-8");
$xmlfile="movies.xml";
$root=$doc->createElement("Movie_CD_Store");

$classical=$doc->createElement("Classical");
$mn=$doc->createElement("MovieTitle","Mother India");
$classical->appendChild($mn);
$an=$doc->createElement("ActorName","Sunil Dutt");
$classical->appendChild($an);
$re=$doc->createElement("ReleaseYear",1957);
$classical->appendChild($re);

$horror=$doc->createElement("Horror");
$mn=$doc->createElement("MovieTitle","Stree");
$horror->appendChild($mn);
$an=$doc->createElement("ActorName","Rajkummar Rao");
$horror->appendChild($an);
$re=$doc->createElement("ReleaseYear",2018);
$horror->appendChild($re);

$action=$doc->createElement("Action");
$mn=$doc->createElement("MovieTitle","Pathaan");
$action->appendChild($mn);
$an=$doc->createElement("ActorName","Shah Rukh Khan");
$action->appendChild($an);
$re=$doc->createElement("ReleaseYear",2023);
$action->appendChild($re);

$root->appendChild($classical);	
$root->appendChild($action);
$root->appendChild($horror);
$doc->appendChild($root);
$doc->save("movies.xml");
echo '<a href="movies.xml">Click Here </a>';
?>