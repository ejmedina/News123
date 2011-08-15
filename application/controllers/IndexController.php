<?php

class IndexController extends Zend_Controller_Action
{

	public function init()
	{
		/* Initialize action controller here */
	}

	public function indexAction()
	{
		$this->view->titulo = 'Portal de noticias news123 - Portada';
		
		$this->view->titulares = array(
			'Boca juega con Union por la segunda fecha',
			'Velez Gano',
			'Cristina arraso en las elecciones'
	
		);
	}
	

}

