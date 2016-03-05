<?php
class mysql{
    public function setHost($hostname, $username, $password){
    	$link = mysql_connect($hostname, $username, $password) or die(mysql_error());
    	return $link;
    }

    public function setBase($db){
    	mysql_select_db($db) or die(mysql_error());
    	return true;
    }

    public function select($query){
    	$result = mysql_query($query) or die(mysql_error());
    	return mysql_num_rows($result);
    }

    public function getCount($query){
    	$result = mysql_query($query) or die(mysql_error());
    	return mysql_fetch_row($result);
    }

    public function selectFetch($query){
    	$result = mysql_query($query) or die(mysql_error());
    	$data = mysql_fetch_assoc($result);
    	return $data;
    }

    public function getLength($result){
    	$length = mysql_fetch_lengths($result);
    	return $length;
    }

    public function getRow($query){
    	$result = mysql_query($query);
    	$row = array();
    	while ($item=mysql_fetch_array($result))
    		$row[]=$item;
    	return $row;
    }

	public function insert($query){
    	$result = mysql_query($query) or die(mysql_error());
    	return $result;
    }

    public function update($query){
    	$result = mysql_query($query) or die(mysql_error());
    	return $result;
    }

    public function close($link){
    	mysql_close($link);
    }
}
?>
