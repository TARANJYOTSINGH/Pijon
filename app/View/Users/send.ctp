<!-- Form for sending email to all registered users -->
<?php
echo $this->Form->create('Email');
	 ?>
	 <fieldset>
	 	<?php 
	 	// Subject field
	 	 echo $this->Form->input('subject');
	 	 // Message text area
	 	 echo $this->Form->input('message',array('type'=>'textarea'));
	 	 ?>
	 	</fieldset>
	 	<?php echo $this->Form->end('Send');?>