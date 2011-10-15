<?php echo $this->Form->create();?>

	<?php
		echo $this->Form->input('username');
		echo $this->Form->input('password');

	?>
	<p class="submit">
		<?php echo $this->Form->submit('ログイン',array('class'=>'button-primary'));?>
	</p>
<?php echo $this->Form->end();?>
