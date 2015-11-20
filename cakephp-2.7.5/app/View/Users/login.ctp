<?php echo $this->Html->css('login.css'); ?>
<div class="col-sm-6 col-md-4 col-md-offset-4">           
	<?php echo $this->Flash->render('auth'); ?>
	<?php echo $this->Form->create('User', array('class'=>'form-signin')); ?>
		<fieldset>
			<legend>
				<h1 class="text-center login-title">Login</h1>
			</legend>
			<?php echo $this->Form->input('username',array('id'=>'username','class'=>'form-control','placeholder'=>'User','required'=>'required'));
			echo $this->Form->input('password',array('class'=>'form-control','type'=>'password','placeholder'=>'password','required'=>'required'));
		?>
		</fieldset>
	<?php echo $this->Form->end(__('Login'));?>
</div>

   
