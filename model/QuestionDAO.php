<?php

include_once ("connection/FactoryConnection.php");
include_once ("DAOContests.php");

class Question{
	private $connection;
	private static $instance;
	private function __construct() {
		$this -> connection = FactoryConnection::getInstance() -> getConnection('MySQL');
	}

	public static function getInstance() {
		if (is_null(self::$instance)) {
			self::$instance = new Question();
		}
		return self::$instance;
	}
	
	// get questions of user
	public function getQuestionsFromUser($username) {	
		$query = "SELECT * FROM questions WHERE `username`='" . $username . "'";		
		$link = $this -> connection -> connect(DAOContents::getInstance() -> hostName, DAOContents::getInstance() -> dbUser, DAOContents::getInstance() -> dbPassword, DAOContents::getInstance() -> dbName);
		$result = $this -> connection -> execute($query);
		$this -> connection -> disconnect($link);
		return $result;
	}

	

	public function insert($username, $title, $text) {
		//Insercion en la BBDD
		$query = "INSERT INTO questions(username, title, text) 	VALUES('$username', '$title', '$text')";		
		$link = $this -> connection -> connect(DAOContents::getInstance() -> hostName, DAOContents::getInstance() -> dbUser, DAOContents::getInstance() -> dbPassword, DAOContents::getInstance() -> dbName);
		$result = $this -> connection -> execute($query);
		$this -> connection -> disconnect($link);
		return true;
	}

	public function getQuestions() {	
		$query = "SELECT * FROM questions";
		
		$link = $this -> connection -> connect(DAOContents::getInstance() -> hostName, DAOContents::getInstance() -> dbUser, DAOContents::getInstance() -> dbPassword, DAOContents::getInstance() -> dbName);
		$result = $this -> connection -> execute($query);
		$this -> connection -> disconnect($link);
		return $result;
	}


	public function delete($id) {
		//Insercion en la BBDD
		$query = "DELETE FROM `questions` WHERE `id`='" . $id . "'";
		$link = $this -> connection -> connect(DAOContents::getInstance() -> hostName, DAOContents::getInstance() -> dbUser, DAOContents::getInstance() -> dbPassword, DAOContents::getInstance() -> dbName);
		$result = $this -> connection -> execute($query);
		$this -> connection -> disconnect($link);
		return true;
	}
}

?>