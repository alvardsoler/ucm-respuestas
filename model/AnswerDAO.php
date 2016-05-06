<?php

include_once ("connection/FactoryConnection.php");
include_once ("DAOContests.php");

class Answer{
	private $connection;
	private static $instance;
	private function __construct() {
		$this -> connection = FactoryConnection::getInstance() -> getConnection('MySQL');
	}

	public static function getInstance() {
		if (is_null(self::$instance)) {
			self::$instance = new Answer();
		}
		return self::$instance;
	}
	
	// get questions of user
	public function getAnswersFromUser($username) {	
		$query = "SELECT * FROM answers WHERE `username`='" . $username . "'";		
		$link = $this -> connection -> connect(DAOContents::getInstance() -> hostName, DAOContents::getInstance() -> dbUser, DAOContents::getInstance() -> dbPassword, DAOContents::getInstance() -> dbName);
		$result = $this -> connection -> execute($query);
		$this -> connection -> disconnect($link);
		return $result;
	}

	public function getAnswersFromQuestion($questionID) {	
		$query = "SELECT * FROM answers WHERE `questionID`='" . $questionID . "'";		
		$link = $this -> connection -> connect(DAOContents::getInstance() -> hostName, DAOContents::getInstance() -> dbUser, DAOContents::getInstance() -> dbPassword, DAOContents::getInstance() -> dbName);
		$result = $this -> connection -> execute($query);
		$this -> connection -> disconnect($link);
		return $result;
	}	

	public function insert($questionID, $username, $text) {
		//Insercion en la BBDD
		$query = "INSERT INTO answers(questionID, username, text) 	VALUES('$questionID', '$username', '$text')";		
		$link = $this -> connection -> connect(DAOContents::getInstance() -> hostName, DAOContents::getInstance() -> dbUser, DAOContents::getInstance() -> dbPassword, DAOContents::getInstance() -> dbName);
		$result = $this -> connection -> execute($query);
		$this -> connection -> disconnect($link);
		return true;
	}

	public function getAnswers() {	
		$query = "SELECT * FROM answers";
		
		$link = $this -> connection -> connect(DAOContents::getInstance() -> hostName, DAOContents::getInstance() -> dbUser, DAOContents::getInstance() -> dbPassword, DAOContents::getInstance() -> dbName);
		$result = $this -> connection -> execute($query);		
		$this -> connection -> disconnect($link);


		return $result;
	}


/*	public function delete($id) {
		//Insercion en la BBDD
		$query = "DELETE FROM `answers` WHERE `id`='" . $id . "'";
		$link = $this -> connection -> connect(DAOContents::getInstance() -> hostName, DAOContents::getInstance() -> dbUser, DAOContents::getInstance() -> dbPassword, DAOContents::getInstance() -> dbName);
		$result = $this -> connection -> execute($query);
		$this -> connection -> disconnect($link);
		return true;
	}*/
}

?>