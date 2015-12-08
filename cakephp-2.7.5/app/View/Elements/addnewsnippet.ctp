<?php echo $this->Form->create('Snippet', array('url' => array('controller' => 'snippets', 'action' => 'add'),'class'=>'form-snippets-add')); ?>
	<?php
		echo $this->Form->hidden('user_id', array('value'=>$authUser['id']));
		echo $this->Form->input('description', array('class'=>'form'));
		echo $this->Form->input('language', array('class'=>'form'));
		echo $this->Form->input('content', array('type' => 'textarea', 'rows' => 10, 'cols' => 50. ,'class'=>'form'));
	?>
<?php echo $this->Form->end(__('Submit')); ?>