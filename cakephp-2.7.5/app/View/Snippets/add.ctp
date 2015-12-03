<div>
<?php echo $this->Form->create('Snippet'); ?>
		<?php
			echo $this->Form->hidden('user_id', array('value'=>$authUser['id']));
			echo $this->Form->input('description');
			echo $this->Form->input('language');
			echo $this->Form->input('content', array('type' => 'textarea', 'rows' => 10, 'cols' => 100));
		?>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
