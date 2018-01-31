<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class ReviewsController extends AppController {

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array();

/**
 * Displays a view
 *
 * @return void
 * @throws NotFoundException When the view file could not be found
 *	or MissingViewException in debug mode.
 */
	public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('index');
    }

    public function isAuthorized($user) {
    // Admin can access every action
        if (isset($user['role']) && $user['role'] === 'admin') {
            return true;
        }

        // Default deny
        return false;
    }

	public function index() {
		$this->set('reviews', $this->Review->find('all', array(
			'order' => array('Review.id' => 'desc'))));
        $this->set(compact('title', $title = 'Reviews of Painting & Assemblies : Viridian Painting'));
        $this->set(compact('description', $description = 'See what past customers of Viridian Painting have to say.'));
	}

	public function add() {
		if ($this->request->is('post')) {
            $this->Review->create();
            if ($this->Review->save($this->request->data)) {
                $this->Flash->success(__('The review has been saved.'));
                return $this->redirect(array('action' => 'add'));
            }
            $this->Flash->error(__('Unable to add your review.'));
        }
        $this->set(compact('title', $title = 'About Us : Viridian Painting & Property Services'));
	}
}
