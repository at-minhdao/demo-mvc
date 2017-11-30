<?php

namespace App\Models;

class Post extends Model
{
	protected $table = 'posts';

	public function getAll()
	{
		$sql = "SELECT id,name,preview_text,user_id,date_create FROM posts ORDER BY id DESC";
		$stmt = static::$db->prepare($sql);
		$stmt->execute();

		return $stmt->fetchAll();
	}
	public function addPost($arPost)
	{
		$sql = "INSERT INTO posts(name, preview_text, detail_text, user_id, date_create) VALUES (:name,:preview_text,:detail_text,:user_id,:date_create)";
    	$stmt = static::$db->prepare($sql);
		$data = array(
			'name'         => $arPost['name'],
			'preview_text' => $arPost['preview_text'],
			'detail_text'  => $arPost['detail_text'],
			'user_id'      => $arPost['user_id'],
			'date_create'  => $arPost['date_create'],
		);
		$result = $stmt->execute($data);
		return $result;
	}
}
