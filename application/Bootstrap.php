<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{

    public function run()
    {
        $options = array(
            'layout'     => 'layout',
            'layoutPath' => APPLICATION_PATH .'/layouts/scripts',
        );
        $layout = Zend_Layout::startMvc($options);
        Zend_Controller_Action_HelperBroker::addPath(APPLICATION_PATH .'/controllers/helpers');
        Zend_Session::start();
        parent::run();
    }
}

