<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Email extends Controller {
	
    public function send_email(){
        $this->call->library('email');

        $this->email->sender('your@example.com', 'Your Name');
        $this->email->recipient('someone@example.com');

        $this->email->subject('Email Test');
        $this->email->email_content('Testing the email class.');

        $this->email->send();
        echo 'email sent!';
			
    }
}
?>
