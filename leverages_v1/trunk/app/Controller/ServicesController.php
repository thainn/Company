<?php
/**
* Leverages Vietnam Co., Ltd
* 
* @author              Nguyen Ngoc Hoang
* @date created        23/10/2012
* @modified by         
* @date modified      
*
* ServicesController display services of company
*/

class ServicesController extends AppController {
    
	/*
	 * Frontend only.
	* Display "Dịch vụ" static page.
	*
	*/
	function index() {
        $this->set('page_title','Dịch vụ');
    }
    
    /*
     * Frontend only.
    * Display "Human Capital Service" static page.
    *
    */
    function hc() {
        $this->set('page_title','Dịch vụ Human capital');
    }
    
    /*
     * Frontend only.
    * Display "Media Service" static page.
    *
    */
    function media() {
        $this->set('page_title','Dịch vụ truyền thông');
    }
    
    /*
     * Frontend only.
    * Display "System Engineering Service" static page.
    *
    */
    function se() {
        $this->set('page_title','System engineering');
    }
    
    /*
     * Frontend only.
    * Display "Medical Service" static page.
    *
    */
    function medical() {
        $this->set('page_title','Dịch vụ medical');
    }
}
