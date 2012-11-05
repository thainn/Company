<?php

/**
 * Leverages Vietnam Co., Ltd
 *
 * @author             Nguyen Ngoc Thai
 * @date created       10/19/2012
 * @modified by        Truong Minh Hai
 * @date modified      10/25/2012
 *
 * Manage contacted information
 */

class ContactsController extends AppController {
    var $uses = array('Contact');
    var $helpers = array('Paginator', 'Html');
    var $components = array('Session', 'phpMailer','RequestHandler', 'Email');
    var $paginate = array();
    
    public $contactName, $contactPhone, $contactEmail, $contactContent;
    public $contacterror = 0;
    
    /*
    * Frontend only.
    * display contact page.
    */
	function index() {
        $this->set('page_title', 'Liên hệ Leverages');
        $this->set('data', $this->request->data);
        
        $contacterror = 0;
        if ($this->request->is('post')) {
            $this->Contact->create();
            if (empty($this->request->data['name'])) {
                $this->set('enterName', 'Vui lòng nhập họ tên');
                $contacterror = 1;
            }
            
            if (empty($this->request->data['phone'])) {
                $this->set('enterPhone', 'Vui lòng nhập địa số điện thoại');
                $contacterror = 1;
            }
            
            if (empty($this->request->data['email'])) {
                $this->set('enterEmail', 'Vui lòng nhập địa chỉ email');
                $contacterror = 1;
            } elseif (!filter_var($this->request->data['email'], FILTER_VALIDATE_EMAIL)) {
                $this->set('enterEmail', 'Địa chỉ Email nhập không chính xác');
                $contacterror = 1;
            }
            
            if (empty($this->request->data['content'])) {
                $this->set('enterContent', 'Vui lòng nhập nội dung liên hệ');
                $contacterror = 1;
            }
            
			$randomKey = $this->request->data['randomKey'];
			if($randomKey==$this->Session->read('RAND_KEY')) {
				if (empty($contacterror)) {
					$this->request->data['email'] 	= strip_tags($this->request->data['email'], '');
					$this->request->data['name']	= strip_tags($this->request->data['name'], '');
					$this->request->data['phone']	= strip_tags($this->request->data['phone'], '');
					$this->request->data['content']	= strip_tags($this->request->data['content'], '');
					$this->request->data['send_date'] = date('Y-m-d H:i:s',time());
					
					if ($this->Contact->save($this->request->data)) {
						$this->set('data', '');
						$this->set('notice', 'Đã gửi thông tin liên hệ của bạn đến ban quản trị');
						
						//send mail
						$contactEmail 	= $this->request->data['email'];
						$contactName 	= $this->request->data['name'];
						$contactPhone 	= $this->request->data['phone'];
						$contactContent = $this->request->data['content'];
						$contactContent = "Họ tên : {$contactName}<br>"
										  ."Điện thoại :  {$contactPhone}<br/>"
										  ."Email :  {$contactEmail}<br/>"
										  ."Nội dung :  {$contactContent}</br>";
						//$this->phpMailer->mail_smtp($contactEmail, 'hoangnn@leverages.jp', $contactName, $contactContent);
						
					     $this->Email->smtpOptions = array(
                            'port' => 465,
                            'timeout' => 100,
                            'host' => 'ssl://smtp.gmail.com',
                            'username' => 'tanngocson854@gmail.com',
                            'password' => 'ngocthai',
                        );
                        $this->Email->delivery = 'smtp';
                        $this->Email->send = 'debug';
                        $this->Email->to = 'tunghbt@leverages.jp';
                        $this->Email->subject = 'Leverages.com.vn Send CV';
                        $this->Email->from = 'Contact <noreply@example.com>';
                       $this->Email->send($contactContent);
					}
				}
			}else{
				$this->set('data', '');
				$this->redirect(array('action'=>'index'));	
			}
        }
		$randKey = rand(0,9999999);
		$this->Session->write('RAND_KEY',$randKey);
		$this->set('randKey',$randKey);
    }

    
    /*
     * Backend only.
     * Listing contact information.
    * This is a default of page contact.
    */
    public function admin_index() {
        App::uses('AppHelper', 'View/Helper');
        $this->set('flag', '1');
        if ($this->Session->read('contact') == 1) {
            $this->Session->write('contactResult', '1');
            $this->Session->delete('contact');
        } else if ($this->Session->read('contact') == 0) {
            $this->Session->write('contactResult', '0');
            $this->Session->delete('contact');
        } else {
            $this->Session->write('contactResult', '2');
            $this->Session->delete('contact');
        }

        $this->paginate = array(
            'limit' => Configure::read('LIMIT_CONTACT'),
            'conditions' => array('flag' => '0'),
            'order'=>'send_date desc'
        );
        $data = $this->paginate("Contact");
        $this->set("contact", $data);
        
         $data2 = $this->Contact->find('all', array('conditions' => array('flag' => '0')));
        $count2 = 0;
        foreach ($data as $data) {
            $count2 = $count2 + 1;
        }
        $this->set('countGlobal',$count2);
        
        
        
        $this->set('resultContact', '-1');
        $data = $this->Contact->find('all', array('conditions' => array('flag' => '0')));
        $count = 0;
        foreach ($data as $data) {
            $count = $count + 1;
        }
        $this->set('lengthContact', $count);
        // $d = Router::url('/', true);
        $path = $this->here;
        $string = $path;
        $part = strtok($string, '/');
        while ($part != false) {
            $buff = $part;
            $part = strtok('/');
        }
        $part = strtok($buff, ':');
        while ($part != false) {
            $buff = $part;
            $part = strtok('/');
        }
        $NumberPaging = $count / Configure::read('LIMIT_CONTACT');
        $page = $count % Configure::read('LIMIT_CONTACT');
        if ($page != 0) {
            $NumberPaging = $NumberPaging + 1;
        }
        $Maxpage =  $NumberPaging;
        $pageCurrent = $buff;
        settype($pageCurrent,"integer");
        settype($Maxpage,"integer");
        if($pageCurrent>$Maxpage)
        { 
            $this->redirect(array('controller'=>'contacts', 'action'=>'index/page:'.$Maxpage));
        }
    }

    /*
     * Backend only.
     * Listing contact detail information
    */
     public function admin_view($id = null) {
        if ($id != null) {
            // $data = $this->Contact->find('all',array('conditions' => array('Contact.id' => 1)));
            $data = $this->Contact->findById($id);
            if ($data == null || $data['Contact']['flag'] == '1') {
                $this->set('error', 'true');
                
            }
           
            $this->set('contact', $data);
        }
    }

    /*
     * Backend only.
     * Deleting contact detail information by ajax method
     * 
     * $id: id of the deleted item.
    */
    public function admin_delete($id = null) {
        if ($id != null) {
            $sql = 'UPDATE contacts SET flag = 1 WHERE id =' . $id;
            //$this->Contact->query($sql);
            $this->Contact->query($sql);
            $this->Session->write('contact', '1');
            Configure::write('debug', 0);
            $this->layout = 'ajax';
            $this->autoLayout = false;
            $this->autoRender = false;
            $this->header('Content-Type: application/json');
            $data = array();
            $result = array();
               $this->Session->setFlash('Thông tin đã được xóa');
            echo json_encode($result);
        }
    }
    
    /*
     * Backend only.
    * Deleting contact detail information
    *
    * $id: id of the deleted item.
    * $page: the previou pagination page.
    */
    
     public function admin_deleteNotAjax($id = null,$page=null) {
        if ($id != null) {
            $sql = 'UPDATE contacts SET flag = 1 WHERE id =' . $id;
                 if(!$this->Contact->query($sql)){
                          $this->Session->write('contact', '1');
                      $this->Session->setFlash('Thông tin đã được xóa');
                        $this->redirect(array('controller'=>'contacts', 'action'=>'index/'.$page));
    		}
        }
         $this->Session->setFlash('Thông tin đã được xóa');
           $this->Session->write('contact', '1');
    	  $this->redirect(array('controller'=>'contacts', 'action'=>'index/'.$page));
    }
}
