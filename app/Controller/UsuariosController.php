<?php

class UsuariosController extends AppController {

	public $components = array('Paginator');

	public function beforeRender () {
		parent::beforeRender();
		$controllerName = "Usuários";
		$this->set('controllerName', $controllerName);
	}

	/**
	 * Método de listagem dos usuários na tela inicial do módulo
	 * @return [type] [description]
	 */
	public function index () {

		$model = $this->modelClass;

		$this->Paginator->settings = $this->paginate;

		$this->set('usuarios', $this->Paginator->paginate($model));

	}

	/**
	 * Método que adiciona um novo registro no banco
	 * Depois mostra uma mensagem de sucesso ou de erro
	 * @return [type] [description]
	 */
	public function adicionar () {
		try{

			$model = $this->modelClass;

			if($this->request->is('post')){

				$this->$model->create();

				if($this->$model->save($this->request->data)) {
					$this->Session->setFlash('Usuário cadastrado com sucesso!', "Flash/success");
					return $this->redirect(array("action" => "index"));
				}
				$this->Session->setFlash('Problema ao cadastrar usuário!', "Flash/danger");

			}

		}catch(Exception $e){
			echo $e->getMessage();
		}
	}

	/**
	 * Método que altera um registro no banco
	 * @param  Integer $id [id do registro que será alterado]
	 */
	public function alterar ($id) {
		try{

			$model = $this->modelClass;

			if($this->request->is('post') || $this->request->is('put')){

				$model->id = $id;

				if($this->$model->save($this->request->data)) {
					$this->Session->setFlash('Usuário alterado com sucesso!', "Flash/success");
					return $this->redirect(array("action" => "index"));
				}
				$this->Session->setFlash('Problema ao alterar usuário!', "Flash/danger");

			}

		}catch(Exception $e){
			echo $e->getMessage();
		}
	}

}