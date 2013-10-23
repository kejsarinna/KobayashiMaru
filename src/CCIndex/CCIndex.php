<?php
/**
 * Standard controller layout.
 * 
 * @package LydiaCore
 */
class CCIndex implements IController {

  /**
    * Implementing interface IController. All controllers must have an index action.
   */
  public function Index() {  
    global $kb;
    $kb->data['title'] = "The Index Controller";
    $kb->data['main'] = "<h1>The Index Controller</h1>";
  }

} 
