<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Black Keys Album Songs</title>
</head>
<body>
<?php // Create 3 album arrays with a list of tracks, and then display all of them
$brothers_album = array (
	1 => "Everlasting Light",
	2 => "Next Girl",
	3 => "Tighten Up",
	4 => "Howlin' for You",
	5 => "Black Mud"
	);
$attack_release_album = array (
	1 => "All You Ever Wanted",
	"I Got Mine",
	"Strange Times",
	"Psychotic Girl",
	"Lies"
	);
$chulahoma_album = array (
	1 => "Keep Your Hands Off Her",
	"Have Mercy on Me",
	"Work Me",
	"Meet Me in the City",
	"Nobody But You"
	);
$albums = array (
	'Brothers'=>$brothers_album,
	'Attack and Release' => $attack_release_album,
	'Chulahoma' => $chulahoma_album
	);

// Created a nested foreach loop that will print all the tracks
foreach ($albums as $album => $tracks) {
	print "<p><b>$album</b>\n";
	foreach ($tracks as $number => $track_name) {
	    print "<br /> $number ) $track_name "; 
	}
	print "</p>";
}
?>