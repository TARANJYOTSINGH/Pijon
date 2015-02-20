<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');



class UsersController extends AppController
{
    // Register conroller for adding new users.
    public function register()
    {
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('New user registered'), 'default', array(
                    'class' => 'success'
                ));
                return $this->redirect(array(
                    'action' => 'register'
                ));
            } else
                $this->Session->setFlash(__('Could not register user'));
        }
    }

    // Admin conroller for listing the registered users.
    public function admin()
    {
        
        $this->set('users', $this->User->find('all'));
    }
    
    // Send conroller for sending email to all registered Users.
    public function send()
    {
        
        
        if ($this->request->is('post')) {
            
            
            
            
            // find function for quering the database for all registered users.
            $email_array = $this->User->find('all');
            
            //loop for each user
            foreach ($email_array as $user) {
                
                
                $email = new CakeEmail('mandrill');
                
                $email->from(array('tm05504n@gmail.com' => 'Taranjyot Singh')
                    //get the user email from database
                  )->to($user['User']['email'])
                //get the subject and message from send form 
                 ->subject($this->request->data['Email']['subject'])

                 ->send(Dear . "&nbsp;" . $user['User']['first_name'] . "<br>" . $this->request->data['Email']['message']);
                
            }
            $this->Session->setFlash(__('Emails has been sent successfully'), 'default', array(
                'class' => 'success'
            ));
            return $this->redirect(array(
                'action' => 'send'
            ));
        }
        
    }
    
    
}