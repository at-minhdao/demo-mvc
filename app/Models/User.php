<?php

namespace App\Models;

class User extends Model
{
    protected $table = 'users';

    public function addUser($arUser)
    {
    	$sql = "INSERT INTO users(username, fullname, password) VALUES (:username,:fullname,:password)";
    	$stmt = static::$db->prepare($sql);
		$data = array(
			'username' => $arUser['username'],
			'fullname' => $arUser['fullname'],
			'password' => $arUser['password'],
		);
		$result = $stmt->execute($data);
		return $result;
    }
    public function checkUser($arUser)
    {
		//get user login from database
    	$sql = "SELECT * FROM users WHERE username=:username";
    	$stmt = static::$db->prepare($sql);
		$data = array(
			'username' => $arUser['username'],
		);
		$stmt->execute($data);
		$userCheck = $stmt->fetch();
		//validate user login
		if ($userCheck['username'] == $arUser['username'] && $userCheck['password'] == $arUser['password']) {
			$_SESSION['userLogin'] = $userCheck;
			return true;
		} else {
			return false;
		}
    }
}
