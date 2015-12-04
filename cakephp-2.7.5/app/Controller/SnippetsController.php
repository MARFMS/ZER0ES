<?php
App::uses('AppController', 'Controller');
/**
 * Snippets Controller
 *
 * @property Snippet $Snippet
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class SnippetsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Snippet->recursive = 2;
		$this->set('snippets', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Snippet->exists($id)) {
			throw new NotFoundException(__('Invalid snippet'));
		}
		$options = array('conditions' => array('Snippet.' . $this->Snippet->primaryKey => $id));
		$this->set('snippet', $this->Snippet->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Snippet->create();
			if ($this->Snippet->save($this->request->data)) {
				$this->Flash->success(__('The snippet has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The snippet could not be saved. Please, try again.'));
			}
		}
		$users = $this->Snippet->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Snippet->exists($id)) {
			throw new NotFoundException(__('Invalid snippet'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Snippet->save($this->request->data)) {
				$this->Flash->success(__('The snippet has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The snippet could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Snippet.' . $this->Snippet->primaryKey => $id));
			$this->request->data = $this->Snippet->find('first', $options);
		}
		$users = $this->Snippet->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Snippet->id = $id;
		if (!$this->Snippet->exists()) {
			throw new NotFoundException(__('Invalid snippet'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Snippet->delete()) {
			$this->Flash->success(__('The snippet has been deleted.'));
		} else {
			$this->Flash->error(__('The snippet could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Snippet->recursive = 2;
		$this->set('snippets', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Snippet->exists($id)) {
			throw new NotFoundException(__('Invalid snippet'));
		}
		$options = array('conditions' => array('Snippet.' . $this->Snippet->primaryKey => $id));
		$this->set('snippet', $this->Snippet->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Snippet->create();
			if ($this->Snippet->save($this->request->data)) {
				$this->Flash->success(__('The snippet has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The snippet could not be saved. Please, try again.'));
			}
		}
		$users = $this->Snippet->User->find('list');
		$this->set(compact('users'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Snippet->exists($id)) {
			throw new NotFoundException(__('Invalid snippet'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Snippet->save($this->request->data)) {
				$this->Flash->success(__('The snippet has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The snippet could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Snippet.' . $this->Snippet->primaryKey => $id));
			$this->request->data = $this->Snippet->find('first', $options);
		}
		$users = $this->Snippet->User->find('list');
		$this->set(compact('users'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Snippet->id = $id;
		if (!$this->Snippet->exists()) {
			throw new NotFoundException(__('Invalid snippet'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Snippet->delete()) {
			$this->Flash->success(__('The snippet has been deleted.'));
		} else {
			$this->Flash->error(__('The snippet could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
