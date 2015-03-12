<?php
session_start();

$username = $SESSION['is_login'];
echo $username;
if(!$username)
{
	echo 'username null';
	//header('Location: VPN_Signin.htm');
}




?>