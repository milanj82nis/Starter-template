<?php 
session_start();


class DbConnect {

	private $host = HOST;
	private $dbname = DBNAME;
	private $username = USERNAME;
	private $password = PASSWORD;

	public function connect(){

		$sql = 'mysql:host='. $this -> host .';dbname='. $this -> dbname ;
		$pdo = new PDO  ( $sql , $this -> username , $this -> password );
		$pdo -> setAttribute ( PDO::ATTR_DEFAULT_FETCH_MODE , PDO::FETCH_ASSOC );
		$pdo -> setAttribute ( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
		return $pdo;


	}// connect


}// DbConnect








