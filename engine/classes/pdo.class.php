<?php
class database{
	function hostConnect($hostname, $database, $user, $password){
		$connection = new PDO('mysql:host=' . $hostname . ';dbname=' . $db . $username, $password);

		return $connection;
	}

	function fetchArray($query){
		$queryResult = PDO::FETCH_ASSOC($query);

		return $queryResult;
	}

	function hostDisconnect($connection){
		$connection = null;

		return $connection;
	}
}
