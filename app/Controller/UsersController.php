<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');



class UsersController extends AppController {

	public function register() {
	if ($this->request->is('post')) 
	     {
		$this->User->create();
		if ($this->User->save($this->request->data)) 
		{
			$this->Session->setFlash(__('New user registered'),
			'default',array('class'=>'success'));
			return $this->redirect(array('action' => 'register'));
		}
		else
		$this->Session->setFlash(__('Could not register user'));
	}
}
	public function admin(){
		
		$this->set('users',$this->User->find('all'));
	}
	public function send() {

 
if($this->request->is('post'))
    {
              
        
         
       
     
      $email_array=$this->User->find('all');

       foreach($email_array as $user) 
      {   
        
         //$firstname=$user['User']['first_name'];
         $email = new CakeEmail('mandrill');
       // $email->subject($this->request->data['subject']);
        // $email->template('email_cstm')
           //     ->emailFormat('html')
               $email->from(array('tm05504n@gmail.com'=>'Taranjyot Singh'))
                     ->to($user['User']['email'])
                     ->subject($this->request->data['Email']['subject'])
                     ->send(Dear."&nbsp;".$user['User']['first_name']."<br>".$this->request->data['Email']['message']);
                    //->to($email_array['User']['email'])
     }
      $this->Session->setFlash(__('Emails has been sent successfully'),
              'default',array('class'=>'success'));
      return $this->redirect(array('action' => 'send'));
         }

  }


}