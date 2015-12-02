<div>
<?php echo $this->Form->create('Snippet'); ?>
		<?php
			//echo $this->Form->input('likes');
			//echo $this->Form->input('dislikes');
			echo $this->Form->input('description');
			echo $this->Form->input('language');		// Mejor si viniera en un combobox
			echo $this->Form->input('content', array('type' => 'textarea', 'rows' => 10, 'cols' => 100));
		?>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
