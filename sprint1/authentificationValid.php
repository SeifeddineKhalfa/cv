<?php 
	function Login()
	{
		if(empty($_POST['email']))
		{
			$this->HandleError("Email is empty!");
			return false;
		}
		
		if(empty($_POST['pwd']))
		{
			$this->HandleError("Password is empty!");
			return false;
		}
		
		$email = trim($_POST['email']);
		$password = trim($_POST['pwd']);
		
		if(!$this->CheckLoginInDB($email,$password))
		{
			return false;
		}
		
		session_start();
		
		$_SESSION[$this->GetLoginSessionVar()] = $email;
		
		return true;
	}
?>