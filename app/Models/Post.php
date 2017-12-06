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
	public function pagination($limit) {
		//total records
		$total_records = $this->totalRecord();
		//current page
		$current_page  = isset($_GET['page']) ? $_GET['page'] : 1;
		//total page
		$total_page    = ceil($total_records / $limit);
		//validate page exist
		if ($current_page > $total_page){
			$current_page = $total_page;
		}
		else if ($current_page < 1){
			$current_page = 1;
		}
		//start value
		$start = ($current_page - 1) * $limit;
		//get list post with pagination
		$sql  = "SELECT id,name,preview_text,user_id,date_create FROM posts ORDER BY id DESC LIMIT $start, $limit";
		$stmt = static::$db->prepare($sql);
		$stmt->execute();

		return $stmt->fetchAll();
	}

	public function totalRecord() {
		$sql  = "SELECT count(id) as total from posts";
		$stmt = static::$db->prepare($sql);
		$stmt->execute();
		$row  = $stmt->fetch();
		return $row['total'];
	}

	public function totalPage($limit) {
		$total_records = $this->totalRecord();
		//return total pages
		return ceil($total_records / $limit);
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
