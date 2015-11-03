<?php
session_start();

require_once('config.php');

$uname = isset($_POST['uname']) ? $_POST['uname'] : '';
$pass = isset($_POST['pass']) ? $_POST['pass'] : '';

if($uname == D_UNAME && $pass == D_PASS){
	$_SESSION['cmarketops_logged_in'] = '<keOwl1)zerl#2ke';
	header('Location: delete.php');
}

?>

<form method='post' action="">
Username: <input type='text' name='uname'/>
Password: <input type='password' name='pass'/>
<input type='submit' value='Submit'/>
</form>