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
class PagesController extends AppController {

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array('Post', 'Testimonial', 'Xml', 'Utility');

/**
 * Displays a view
 *
 * @return void
 * @throws NotFoundException When the view file could not be found
 *	or MissingViewException in debug mode.
 */
	public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('index', 'gallery', 'contact', 'about', 'sitemap');
    }

	public function isAuthorized($user) {
    // Admin can access every action
        if (isset($user['role']) && $user['role'] === 'admin') {
            return true;
        }

        // Default deny
        return true;
    }

	public function index() {
		$this->set(compact('title', $title = 'House Painting in Colorado : Viridian Painting & Property Services'));
        $this->set(compact('description', $description = 'Viridian Painting & Property Services offers ecofriendly house painting in Colorado throughout Denver, the Metro Area, the Front Range and the Foothills.'));
        $this->set('posts', $this->Post->find('all'));
		$this->set('testimonials', $this->Testimonial->getRecentTestimonials());
	}

	public function gallery() {
        $this->set(compact('title', $title = 'Photo Gallery of Painting & Assemblies : Viridian Painting & Property Services'));
        $this->set(compact('description', $description = 'Viridian Painting offers ecofriendly house painting and assembly services in Colorado throughout Denver, the Metro Area, the Front Range and the Foothills.'));
	}

	public function about() {
        $this->set(compact('title', $title = 'About Us : Viridian Painting & Property Services'));
        $this->set(compact('description', $description = 'Viridian Painting offers ecofriendly house painting and assembly services in Colorado throughout Denver, the Metro Area, the Front Range and the Foothills.'));   
	}

	public function contact() {
		if ($this->request->is('post')) {
			$name = $this->request->data['Contact']['name'];
            $email = $this->request->data['Contact']['email'];
            $message = $this->request->data['Contact']['body'];
            //$human = intval($this->request->data['Contact']['human']);
                //$this->Flash->success(__('Your post has been saved.'));
                //return $this->redirect(array('action' => 'index'));
            //}
            $from = $this->request->data['Contact']['email']; 
    		$to = 'judy@viridianpainting.com'; 
    		$subject = 'Viridianpainting.com Contact Page';
    		$body ="From: $name\n\n E-Mail: $email\n\n Message:\n $message";
    		if (mail ($to, $subject, $body, $from)) {
	        $result=$this->Flash->success(__('Thank you for your message! I will be in touch soon.'));
	        //'<div class="alert alert-success">Thank You! I will be in touch</div>';
	      } else {
	        $result=$this->Flash->error(__('Sorry, there was an error sending your message. Please try again.'));
	        //'<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
	      }
            //$this->Flash->error(__('Unable to add your post.'));
        }
        $this->set(compact('title', $title = 'Contact Us : Viridian Painting & Property Services'));
        $this->set(compact('description', $description = 'Contact us at Viridian Painting & Property Services.'));
  	}

    public function sitemap() {
        Configure::write('debug', 0);

        //$articles = $this->Article->getSitemapInformation();

        //$this->set(compact('articles'));
        $this->RequestHandler->respondAs('xml'); 
        $this->set(compact('title', $title = 'Sitemap : Viridian Painting'));
        $this->set(compact('description', $description = ''));   
    }
}
