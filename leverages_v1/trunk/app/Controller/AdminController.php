<?php

/**
 * Leverages Vietnam Co., Ltd
 *
 * @author             Nguyen Ngoc Thai
 * @date created       10/19/2012
 *
 * 
 */

class AdminController extends AppController{
    function index(){
         $this->redirect(array('controller' => 'admin/index', 'action' => 'index'));
    }
}