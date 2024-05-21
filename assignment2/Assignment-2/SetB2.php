<?php
$doc = new DOMDocument();
$doc->load('Movie.xml');
$Movies = $doc->getElementsByTagName('Movie');
foreach ($Movies as $Movie) {
$MovieTitle = $Movie->getElementsByTagName('MovieTitle')->item(0)->nodeValue;
  echo "Movie Title: $MovieTitle\n";
  echo "<br>";
$ActorName = $Movie->getElementsByTagName('ActorName')->item(0)->nodeValue;
  echo "Actor Name: $ActorName\n";
  echo "<br>";
  echo "<br>";
}
