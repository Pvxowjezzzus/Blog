<?php

namespace controllers;

use core\Controller;
use models\Main;


class MainController extends Controller {

	public function indexAction() {
	
		$vars = [
			'list' => $this->model->postsList($this->route),
		];
		$this->view->render('Главная страница', $vars);
	}

	public function aboutAction() {
		$this->view->render('Обо мне');
	}

	public function createArticleAction() {
		if (!empty($_POST)) {
			if(!$this->model->postValid($_POST, 'createArticle')) {
				
				exit($this->view->message(http_response_code(400), $this->model->error));
			}
			
			$id = $this->model->AddPost($_POST);
			if(!$id){		
			exit($this->view->message(http_response_code(400), 'Ошибка отправки запроса!'));
			}
			$this->model->PostUploadImg($_FILES['image']['tmp_name'], $id);
			exit($this->view->message(http_response_code(200),'Статья успешно добавлена!'));
		}
		$this->view->render('Создание статьи');	
	}	

	public function postAction() {
		if(!$this->model->PostExistence($this->route['id'])[0]) {
			$this->view->errorCode(404);
		}
		$vars = [
			'data' => $this->model->PostData($this->route['id'])[0],
		];
		$this->view->render('Статья', $vars);
	}

}