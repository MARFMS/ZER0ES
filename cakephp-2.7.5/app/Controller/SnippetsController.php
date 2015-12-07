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
	public $components = array('Paginator', 'Flash', 'Session', 'RequestHandler');
	public $helpers = array('Js');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Snippet->recursive = 2;
		$this->set('snippets', $this->Paginator->paginate());
		$this->set('asd', $this->User);
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
			$this->request->data['Snippet']['user_id'] = $this->Auth->user('id');
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
				return $this->redirect(array('controller' => 'users', 'action' => 'profile'));
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
		return $this->redirect(array('controller' => 'users', 'action' => 'profile'));
	}
	
	public function search() {
		$search_text = $this->request->data['search-text'];
		$tokens = array();
		$token = strtok($search_text, " ");
		
		while ($token !== false) {
			array_push($tokens, strtolower($token));
			$token = strtok(" ");
		}

		$results = array();

		for ($i= 0; $i<count($tokens); ++$i) {
			$result = $this->Snippet->find('all', array(
				'conditions' => array('Snippet.language' => $tokens[$i])
			));
			$results = array_merge($results, $result);
		}

		

		$this->set('snippets', $results);
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

	public function isAuthorized($user) {
	    // All registered users can add snippets
	    if ($this->action === 'add') {
	        return true;
	    }

	    // The owner of a snippet can edit and delete it
	    if (in_array($this->action, array('edit', 'delete'))) {
	        $snippetId = (int) $this->request->params['pass'][0];
	        if ($this->Snippet->isOwnedBy($snippetId, $user['id'])) {
	            return true;
	        }
	    }

	    return parent::isAuthorized($user);
	}

	function hi(){
		echo "Hi, world!";
	}



}
