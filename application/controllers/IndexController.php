<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
    }

    // Action listing menu utama...
    public function menuAction()
    {
    	// Disable layout..	
		$this->_helper->layout->disableLayout();
		// Disable View
		$this->_helper->viewRenderer->setNoRender();

		// Ugly menu, please fix it... 
		$menu = array(
			array(
				"text" => "My Menu 1",
				"link" => "/index/menu1",
				"children" => array(
					array(
						"text" => "My Sub Menu 1",
						"link" => "/index/submenu1",
						"leaf" => true // Ilangin ini kalo ada sub menu dibawah nya, gunain children
					)
				)
			),
			array(
				"text" => "My Menu 2",
				"link" => "/index/menu2",
				"leaf" => true // Ilangin ini kalo ada sub menu dibawah nya, gunain children
			),
			array(
				"text" => "My Menu 3",
				"link" => "/index/menu3",
				"leaf" => true // Ilangin ini kalo ada sub menu dibawah nya, gunain children
			)
		);


        $this->getResponse()->setHeader('Content-Type', 'text/javascript');
        $this->getResponse()->setBody(Zend_Json::encode($menu));
    }


}

