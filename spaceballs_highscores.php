<?php

header("content-type: text/xml; charset=utf-8");

// Hier Datenbank Connection einbauen, so dass die Connection in einer Variable $connect steht.
require_once("../inc/connect.inc.php");

if (count($_POST) > 0 && $_POST["muh"] == "abcdef") {
	$sql = 'INSERT INTO spaceballs_highscores (Date_Created, Name, Score)'
			. ' VALUES ("' . date("Y-m-d H:i:s") . '","' . $_POST["name"] . '","' . $_POST["score"] . '")';
	$result = @mysql_query($sql,$connect) or die("Something went wrong by saving your highscores!");
}

$sql = 'SELECT ID, Date_Created, Name, Score'
        . ' FROM spaceballs_highscores'
        . ' ORDER BY Score DESC'
        . ' LIMIT 0,15';
		
$result = @mysql_query($sql,$connect);
$counter = 1;

$xml = new DOMDocument();
$root = $xml->createElement("highscores");
$root->setAttribute("name", "Top 15");

while($row=mysql_fetch_object($result)) {
	$pos = $xml->createElement("position");
	$pos->setAttribute("id",$counter++);
	
	$name = $xml->createElement("name");
	$cdata = $xml->createCDATASection($row->Name . "<br />");
	$name->appendChild($cdata);
	$pos->appendChild($name);
	
	$score = $xml->createElement("score");
	$cdata = $xml->createCDATASection($row->Score . " points<br />");
	$score->appendChild($cdata);
	$pos->appendChild($score);
	
	$date = $xml->createElement("date");
	$cdata = $xml->createCDATASection(date("d.m.Y",strtotime($row->Date_Created)) . "<br />");
	$date->appendChild($cdata);
	$pos->appendChild($date);
	
	$root->appendChild($pos);
}

$xml->appendChild($root);

echo $xml->saveXML();

?>