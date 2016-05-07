<?php
include_once ("model/DAOContests.php");
include_once ("model/AnswerDAO.php");


$answer = Answer::getInstance() -> insert($_POST['id'], $_POST['username'], $_POST['text']);

return $answer;

?>