<?php

include_once ("connection/FactoryConnection.php");
include_once ("DAOContests.php");

class User{
	private $connection;
	private static $instance;
	private function __construct() {
		$this -> connection = FactoryConnection::getInstance() -> getConnection('MySQL');
	}

	public static function getInstance() {
		if (is_null(self::$instance)) {
			self::$instance = new User();
		}
		return self::$instance;
	}

	// metodo para comprobar al loguear
	public function checkUserPassword($username, $pass){
		//$query = "SELECT * FROM users WHERE `username`='" . $username . "' AND" . `password`='" . $pass ."'";
		$query = "SELECT * FROM users WHERE `username`= '" . $username . "' AND `password`= '" . $pass . "'";
		$link = $this -> connection -> connect(DAOContents::getInstance() -> hostName, DAOContents::getInstance() -> dbUser, DAOContents::getInstance() -> dbPassword, DAOContents::getInstance() -> dbName);
		$result = $this -> connection -> execute($query);
		$this -> connection -> disconnect($link);		
		return $result;	
	}

	public function insert($username, $pass, $email, $showemail = false) {
		//Insercion en la BBDD
		$query = "INSERT INTO users(username, email, password, show_email) 	VALUES('$username', '$email', '$pass', '$showemail')";		
		$link = $this -> connection -> connect(DAOContents::getInstance() -> hostName, DAOContents::getInstance() -> dbUser, DAOContents::getInstance() -> dbPassword, DAOContents::getInstance() -> dbName);
		$result = $this -> connection -> execute($query);
		$this -> connection -> disconnect($link);
		return true;
	}

	public function getUser($username){
		$query = "SELECT * FROM users WHERE `username`='" . $username . "'";
		$link = $this -> connection -> connect(DAOContents::getInstance() -> hostName, DAOContents::getInstance() -> dbUser, DAOContents::getInstance() -> dbPassword, DAOContents::getInstance() -> dbName);
		$result = $this -> connection -> execute($query);
		$this -> connection -> disconnect($link);
		return $result;	
	}

	public function getUsers() {
	
		$query = "SELECT * FROM users";		
		$link = $this -> connection -> connect(DAOContents::getInstance() -> hostName, DAOContents::getInstance() -> dbUser, DAOContents::getInstance() -> dbPassword, DAOContents::getInstance() -> dbName);
		$result = $this -> connection -> execute($query);
		$this -> connection -> disconnect($link);
		return $result;
	}


	public function delete($username) {
		//Insercion en la BBDD
		$query = "DELETE FROM `users` WHERE `username`='" . $username . "'";
		$link = $this -> connection -> connect(DAOContents::getInstance() -> hostName, DAOContents::getInstance() -> dbUser, DAOContents::getInstance() -> dbPassword, DAOContents::getInstance() -> dbName);
		$result = $this -> connection -> execute($query);
		$this -> connection -> disconnect($link);
		return true;
	}
}

?>