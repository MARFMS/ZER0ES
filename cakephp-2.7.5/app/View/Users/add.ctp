<div class="users form">
<?php echo $this->Form->create('User', array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Sign Up'); ?></legend>
	<?php
		echo $this->Form->input('user_name');
		echo $this->Form->input('name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('password');
		echo $this->Form->input('email');
		echo $this->Form->input('image_file', array('type' => 'file'));
	?>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
