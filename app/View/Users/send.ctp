<?php
echo $this->Form->create('Email');
	 ?>
	 <fieldset>
	 	<?php 
	 	 echo $this->Form->input('subject');
	 	 echo $this->Form->input('message',array('type'=>'textarea'));
	 	 ?>
	 	</fieldset>
	 	<?php echo $this->Form->end('Send');?>