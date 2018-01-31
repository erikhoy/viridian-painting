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
class ServicesController extends AppController {

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
        $this->Auth->allow('painting', 'assemblies');
    }

    public function isAuthorized($user) {
    // Admin can access every action
        if (isset($user['role']) && $user['role'] === 'admin') {
            return true;
        }

        // Default deny
        return true;
    }

	public function display() {
		$path = func_get_args();

		$count = count($path);
		if (!$count) {
			return $this->redirect('/');
		}
		$page = $subpage = $title_for_layout = null;

		if (!empty($path[0])) {
			$page = $path[0];
		}
		if (!empty($path[1])) {
			$subpage = $path[1];
		}
		if (!empty($path[$count - 1])) {
			$title_for_layout = Inflector::humanize($path[$count - 1]);
		}
		$this->set(compact('page', 'subpage', 'title_for_layout'));

		try {
			$this->render(implode('/', $path));
		} catch (MissingViewException $e) {
			if (Configure::read('debug')) {
				throw $e;
			}
			throw new NotFoundException();
		}
	}

	public function house_painting() {
		$this->set(compact('title', $title = 'House Painting Services in Colorado : Viridian Painting & Property Services'));
		$this->set(compact('description', $description = 'Viridian Painting offers ecofriendly house painting services in Colorado throughout Denver, the Metro Area, the Front Range and the Foothills.'));
	}

	public function painting() {
		$this->set(compact('title', $title = 'Painting Services in Colorado : Viridian Painting & Property Services'));
		$this->set(compact('description', $description = 'Viridian Painting offers ecofriendly house painting services in Colorado throughout Denver, the Metro Area, the Front Range and the Foothills.'));
	}

	public function furniture_assemblies() {
		$this->set(compact('title', $title = 'Furniture Assembly Services in Colorado : Viridian Painting & Property Services'));
		$this->set(compact('description', $description = 'Viridian Painting offers furniture assembly services in Colorado throughout Denver, the Metro Area, the Front Range and the Foothills.'));
	}

	public function assemblies() {
		$this->set(compact('title', $title = 'Assembly Services in Colorado : Viridian Painting & Property Services'));
		$this->set(compact('description', $description = 'Viridian Painting offers assembly services in Colorado throughout Denver, the Metro Area, the Front Range and the Foothills.'));
	}
}
