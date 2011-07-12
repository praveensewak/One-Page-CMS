<?php

include_once('../settings.php');

class Database{
	private $connection;
	
	public function __construct(){
		$this->connection = mysql_connect(DB_SERVER, DB_USER, DB_PASS) or die(mysql_error());
		mysql_select_db(DB_NAME, $this->connection);
	}
	
	public function query($q){
		return mysql_query($q, $this->connection);
	}
	
	$database = new Database;
}