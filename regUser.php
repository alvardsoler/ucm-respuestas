<?php
function regUser($username, $pass, $email, $showemail){
	echo '$username $pass $email $showemail';
}
	echo '$_POST[\'nombre\'] -> ',$_POST['username'], '<br \>';
	echo '$_POST[\'pass\'] -> ',$_POST['pass'], '<br \>';
	echo '$_POST[\'email\'] -> ',$_POST['email'], '<br \>';
	echo '$_POST[\'showemail\'] -> ',$_POST['showemail'], '<br \>';
	echo '$_REQUEST[\'nombre\'] -> ',$_REQUEST['username'], '<br \>';
?>