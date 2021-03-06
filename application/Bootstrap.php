<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    
   
    protected function _initBaseUrl() { 
        $this->bootstrap("frontController"); 
        $front=$this->getResource("frontController"); 
        $request=new Zend_Controller_Request_Http(); 
        $front->setRequest($request); 
    } 
    
    protected function  _initSession(){
       Zend_Session::start();
       $session = new Zend_Session_Namespace("Zend_Auth");
       $session->setExpirationSeconds("3600");
   }
   
   public function _initLockSystem(){
        $lockSystem = $this->getOption('lockSystem');
        Zend_Registry::set('lockSystem', "off");
       /*$this->bootstrap("frontController");
       $front = $this->getResource('FrontController');
       $front->setParam('lockSystem', "off");*/
}

   

}

