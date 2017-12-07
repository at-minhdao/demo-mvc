<?php

namespace App\Models;

class User extends Model
{
    protected $table = 'users';

    public function addUser($arUser)
    {
		//validate username exist
		$check = $this->findUser($arUser['username']);
		if ($check == false) {
			$sql = "INSERT INTO users(username, fullname, password) VALUES (:username,:fullname,:password)";
			$stmt = static::$db->prepare($sql);
			$data = array(
				'username' => $arUser['username'],
				'fullname' => $arUser['fullname'],
				'password' => $arUser['password'],
			);
			$result = $stmt->execute($data);
			return $result;
		} else {
			return false;
		}
	}
	//find user with username
	public function findUser($username) {
		$sql = "SELECT * FROM users WHERE username=:username";
    	$stmt = static::$db->prepare($sql);
		$data = array(
			'username' => $username,
		);
		$stmt->execute($data);
		return $stmt->fetch();
	}
    public function checkUser($arUser)
    {
		//validate user login
		$userCheck = $this->findUser($arUser['username']);		
		if ($userCheck['username'] == $arUser['username'] && $userCheck['password'] == $arUser['password']) {
			$_SESSION['userLogin'] = $userCheck;
			return true;
		} else {
			return false;
		}
    }
}
