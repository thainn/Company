<?php
/**
 * Application level View Helper
 *
 * This file is application-wide helper file. You can put all
 * application-wide helper-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Helper
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Helper', 'View');

/**
 * Application helper
 *
 * Add your application-wide methods in the class below, your helpers
 * will inherit them.
 *
 * @package       app.View.Helper
 */
class AppHelper extends Helper {
        
     function url($url = null, $full = false) {
        if(!isset($url['language']) && isset($this->params['language'])) {
          $url['language'] = $this->params['language'];
        }

        return parent::url($url, $full);
   }
   public function cutString($str,$len,$more){
        if ($str=="" || $str==NULL){
            return $str;
        }
        if (is_array($str)){
            return $str;
        }
        $str = strip_tags($str,'');
        $str = trim($str);
        if (strlen($str) <= $len) {
            return $str;
        }
        $str = substr($str,0,$len);
        if ($str != "") {
            if (!substr_count($str," ")) {
                if ($more) $str .= " ...";
                return $str;
            }
            while(strlen($str) && ($str[strlen($str)-1] != " ")) {
                $str = substr($str,0,-1);
            }
            $str = substr($str,0,-1);
            if ($more) {
                $str .= " ...";
            }
        }
        return $str;
    }
    
    
}
