<div class="cont">
	<div class="snippets form">
	<?php echo $this->Form->create('Snippet'); ?>
		<fieldset>
			<legend><?php echo __('Edit Snippet'); ?></legend>
		<?php
			echo $this->Form->input('id');
			echo $this->Form->input('language');
			echo $this->Form->input('description', array('type' => 'textarea'));
			echo $this->Form->input('content', array('type' => 'textarea'));
		?>
		</fieldset>
	<?php echo $this->Form->end(__('Submit')); ?>
	</div>
</div>
