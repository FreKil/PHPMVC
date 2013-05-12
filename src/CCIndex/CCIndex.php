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
      global $drygia;
      $drygia->data['title'] = "The Index Controller";	 
   }

}