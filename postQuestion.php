<?php

include_once ("model/DAOContests.php");
include_once ("model/QuestionDAO.php");

$question = Question::getInstance() -> insert($_POST['username'], $_POST['title'], $_POST['text']);
/*while ($q = mysql_fetch_assoc($question)){
	break;
}*/
return $question;

?>