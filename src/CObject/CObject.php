<?php
/**
 * Holding a instance of CKobayashi to enable use of $this in subclasses and provide some helpers.
 *
 * @package KobayashiCore
 */
class CObject {

	/**
	 * Members
	 */
	protected $kb;
	protected $config;
	protected $request;
	protected $data;
	protected $db;
	protected $views;
	protected $session;
	protected $user;


	/**
	 * Constructor, can be instantiated by sending in the $kb reference.
	 */
	protected function __construct($kb=null) {
	  if(!$kb) {
	    $kb = CKobayashi::Instance();
	  }
	  $this->kb       = &$kb;
    $this->config   = &$kb->config;
    $this->request  = &$kb->request;
    $this->data     = &$kb->data;
    $this->db       = &$kb->db;
    $this->views    = &$kb->views;
    $this->session  = &$kb->session;
    $this->user     = &$kb->user;
	}


	/**
	 * Wrapper for same method in CKobayashi. See there for documentation.
	 */
	protected function RedirectTo($urlOrController=null, $method=null, $arguments=null) {
    $this->kb->RedirectTo($urlOrController, $method, $arguments);
  }


	/**
	 * Wrapper for same method in CKobayashi. See there for documentation.
	 */
	protected function RedirectToController($method=null, $arguments=null) {
    $this->kb->RedirectToController($method, $arguments);
  }


	/**
	 * Wrapper for same method in CKobayashi. See there for documentation.
	 */
	protected function RedirectToControllerMethod($controller=null, $method=null, $arguments=null) {
    $this->kb->RedirectToControllerMethod($controller, $method, $arguments);
  }


	/**
	 * Wrapper for same method in CKobayashi. See there for documentation.
	 */
  protected function AddMessage($type, $message, $alternative=null) {
    return $this->kb->AddMessage($type, $message, $alternative);
  }


	/**
	 * Wrapper for same method in CKobayashi. See there for documentation.
	 */
	protected function CreateUrl($urlOrController=null, $method=null, $arguments=null) {
    return $this->kb->CreateUrl($urlOrController, $method, $arguments);
  }


}
  