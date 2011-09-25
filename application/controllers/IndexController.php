<?php

class IndexController extends Zend_Controller_Action
{

	public function indexAction()
	{
		$this->view->titulo = 'Portal de noticias news123 - Portada';
		
		$postsModel = new Application_Model_Posts();
		
		$this->view->titulares = $postsModel->getAllNew();
		 
	}
}