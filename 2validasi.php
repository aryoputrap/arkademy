<?php
function is_username_valid($username)
{
	if(preg_match("/^([A-Za-z][a-zA-Z0-9]{5,9}$/", $username)) {
  		return true;
	} else {
  		return false;
	}
}

function is_password_valid($password)
{
if(preg_match("/^([a-zA-Z0-9]{8,}\@{1,}$/", $password)) {
  		return true;
	} else {
  		return false;
	}


?>
