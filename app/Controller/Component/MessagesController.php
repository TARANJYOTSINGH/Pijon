
<?php
App::uses('CakeEmail', 'Network/Email');

class MessagesController extends AppController
{

  public function send() {

 	
 	 

    if(!empty($this->request->data))
 	  {
              
        
         
       
     
      $email_array=$this->User->find('all');
      //foreach ($email_array as $user) 
      //{   
        
      	 //$firstname=$user['User']['first_name'];
      	 $email = new CakeEmail();
       // $email->subject($this->request->data['subject']);
        // $email->template('email_cstm')
           //     ->emailFormat('html')
               $email->from(array('tm05504n@gmail.com'=>'Taranjyot Singh'))
                     ->subject($this->request->data['subject'])
                     ->send($this->request->data['message']);
	                  //->to($email_array['User']['email'])
		// }
			$this->Session->setFlash(__('Emails has been sent successfully'),
              'default',array('class'=>'success'));
         }

	}
  ?>