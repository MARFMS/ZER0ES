
<div class="cont">
	<div class="users form">
	<?php echo $this->Form->create('User'); ?>
		<fieldset>
			<legend><?php echo __('Edit User'); ?></legend>
		<?php
			echo $this->Form->input('id');
			echo $this->Form->input('name');
			echo $this->Form->input('last_name');
			echo $this->Form->input('email');
			echo $this->Form->input('biography', array('type' => 'textarea'));
			echo $this->Form->input('languages', array('type' => 'textarea'));
		?>
		</fieldset>
	<?php echo $this->Form->end(__('Submit')); ?>
	</div>
</div>
