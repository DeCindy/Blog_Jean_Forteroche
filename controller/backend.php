<?php

require_once('model/LoginManager.php');

function loginView()
{
	require('view/backend/loginView.php');
}

function controlLogin($emailUser, $pwdUser)
{
	$loginManager = new Blog\Model\LoginManager();
	$login = $loginManager->getLogin();

	if ($login['email'] == $emailUser && $login['password'] == $pwdUser) 
	{
		session_start();
		$_SESSION['login'] = $emailUser;
		$_SESSION['pwd'] = $pwdUser;
		header('location: index.php?action=adminView');
	}
	else
	{
		throw new Exception(' membre non reconnu');
	}
}

function adminView()
{
	require('view/backend/adminView.php');
}

function editChapter()
{
	require('view/backend/editChapterView.php');
}

function manageComments()
{
	require('view/backend/manageCommentsView.php');
}