<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MyHtmlHelper
 *
 * @author thainn
 */
class MyHtmlHelper extends HtmlHelper{
    //put your code here
    
       public function url($url = null, $full = false) {
	        if(!isset($url['language']) && isset($this->params['language'])) {
	          $url['language'] = $this->params['language'];
	        }
	        return parent::url($url, $full);
	   }
           
           
}

?>
