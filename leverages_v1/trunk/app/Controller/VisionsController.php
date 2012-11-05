<?php
/**
* Leverages Vietnam Co., Ltd
* 
* @author              Nguyen Ngoc Hoang
* @date created        23/10/2012
* @modified by         
* @date modified      
*
* VisionsController display profile of company
*/
class VisionsController extends AppController {

	/*
	 * Frontend only.
	* Display "Giới thiệu" default static page.
	*
	*/
     function index() {
         $this->set('page_title','Mục tiêu của công ty');
     }
     
     /*
      * Frontend only.
     * Display "Giới thiệu" static page.
     *
     */
     function profiles() {
         $this->set('page_title','Giới thiệu công ty');
     }
     
     /*
      * Frontend only.
     * Display "Philosophy" static page.
     *
     */
     function philosophy() {
         $this->set('page_title','Philosophys');
     }
}
