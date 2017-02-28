<?php
	header("Content-Type:application/json");
	$con = new MySqli('localhost', 'root','','telbook');
	$res = $con ->query("SELECT * FROM persons");
	$persons = [];
	while ($person = $res->fetch_object()) {
		$persons[] = $person;
	}
	echo json_encode($persons);
