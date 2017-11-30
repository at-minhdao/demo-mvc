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
}
