<?php
	include "db.php";
	$link = connectDB();
	$id = $_POST["id"];
	$query = "SELECT json, comment FROM familiograma WHERE id = ".$id;
	$show = mysqli_query($link, $query) or die ("Error");
	$row = mysqli_fetch_array($show);
	$array = array('json'=>$row['json'], 'comment'=>$row['comment']);
	echo json_encode($array);
?>
