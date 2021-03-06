<?php

class UsuariosController extends AppController {

	public $components = array('Paginator');

	public function beforeRender () {
		parent::beforeRender();
		$controllerName = "Usuários";
		$this->set('controllerName', $controllerName);
	}

	/**
	 * Método de listagem dos Registros na tela inicial do módulo
	 * @return [type] [description]
	 */
	public function index () {

		$model = $this->modelClass;

		$this->Paginator->settings = $this->paginate;

		$this->set('lista', $this->Paginator->paginate($model));

	}

	/**
	 * Método que adiciona um novo registro no banco
	 * Depois mostra uma mensagem de sucesso ou de erro
	 * @return [type] [description]
	 */
	public function adicionar () {
		try{

			$model = $this->modelClass;

			if( $this->request->is('post') ){

				$this->$model->create();

				if($this->$model->save( $this->request->data ) ) {
					$this->Session->setFlash('Registro cadastrado com sucesso!', "Flash/success");
					return $this->redirect(array("action" => "index"));
				}
				$this->Session->setFlash('Problema ao cadastrar Registro!', "Flash/danger");

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

			if( !$this->$model->exists($id) ){
				$this->Session->setFlash('Registro não existe', "Flash/danger");
				return $this->redirect(array("action" => "index"));
			}

			if( $this->request->is('post') || $this->request->is('put') ){

				$this->$model->id = $id;

				if($this->$model->save($this->request->data)) {
					$this->Session->setFlash('Registro alterado com sucesso!', "Flash/success");
					return $this->redirect(array("action" => "index"));
				}
				$this->Session->setFlash('Problema ao alterar Registro!', "Flash/danger");

			}

			$this->request->data = $this->$model->findById($id);

		}catch(Exception $e){
			echo $e->getMessage();
		}
	}

	public function excluir ($id) {
		try{

			$model = $this->modelClass;

			$registro = $this->$model->find('first', array('conditions' => array( 'Usuario.id' => $id )));

			$this->$model->id = $id;

			if($this->$model->saveField('excluido', 1)) {
				$this->Session->setFlash('Registro excluido com sucesso!', "Flash/success");
				return $this->redirect(array("action" => "index"));
			}


		}catch (Exception $e){
			echo $e->getMessage();
		}
	}

}