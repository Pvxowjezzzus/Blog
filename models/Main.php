<?php

namespace models;

use core\Model;

class Main extends Model {

	public $error;


	public function postsList($route) {
	
		return $this->db->row('SELECT * FROM articles ORDER BY ID');
	}

	public function postValid($post) {
		$titlelen = iconv_strlen($post['title']);
		$desclen = iconv_strlen($post['description']);
		$uniquename = $this->db->row('SELECT * FROM articles WHERE title = '.$post['title'].'');
		if($titlelen < 10) {
			$this->error = 'Заголовок должен содержать от 10 до 100 символов';
			return false;
		}
		if($uniquename) {
			$this->error = 'Заголовок должен быть уникальным!';
			return false;
		}
		else if ($desclen < 20 || $desclen > 1000) {
			$this->error = 'Описание должно содержать от 20 до 500 символов';
			
			return false;
		}
		if(empty($_FILES['image']['tmp_name'])){
			$this->error = 'Изображение не выбрано';
			return false;
		}
		return true;
	}
	
	public function AddPost($post) {
		
		$params = [
			'id' => null,
			'title' => $post['title'],
			'text' => $post['description'],
			'images' => 'null',
			'created_at' => date("Y-m-d H:i:s"),

		];
		foreach($params as $i) {
			htmlentities($i, ENT_QUOTES);
		}

		
		return $this->db->lastInsertId();
	}
	public function PostData($id) {
		$params = [
			'id' => $id,
		];
		return $this->db->row('SELECT * FROM articles WHERE id = :id', $params);

	}
	public function PostExistence($id) {
		$params = [
			'id' => $id,
		];
		return $this->db->column('SELECT id FROM articles WHERE id = :id', $params);
	}
	public function PostUploadImg($path, $id) {
		move_uploaded_file($path, $_SERVER['DOCUMENT_ROOT'].'/materials/'.$id.'.jpg');
		$params = [
			'images' => "/materials/$id.jpg",
		];
		$this->db->query('UPDATE articles  SET images = :images WHERE id = '.$id.'' , $params);
		
	}
}