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
}
