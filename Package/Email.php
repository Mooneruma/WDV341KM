<?php
	class Email{
		
			private $recipient;
			private $sender;  
			private $subject;  
			private $message;  
		
		public function  __construct($inRecipient){
			$this->recipient = $inRecipient; 
		}
		
		public function setRecipient ($inRecipient){
			$this->recipient = $inRecipient;
		}
		
		public function getRecipient (){
			return $this->recipient;
		}
		
		public function setSender ($inSender){
			$this->sender = $inSender;
		}
		
		public function getSender (){
			return $this->sender;
		}
		
		public function setSubject ($inSubject){
			$this->subject = $inSubject;
		}
		
		public function getSubject (){
			return $this->subject;
		}
		
		public function setMessage ($inMessage){
			$this->message = $inMessage;
		}
		
		public function getMessage (){
			return $this->message;
		}
		
		public function sendMail(){
		
			$to = $this->getRecipient();
			$subject = $this->getSubject();
			$messageText = wordwrap($this->getMessage(), 50, "/n", FALSE);
			$header = 'From: ' . $this->getSender();
			
			return mail($to, $subject, $messageText, $header);
			
		}
	}
?>