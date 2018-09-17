<?php echo form_open('auth/reset_password/' . $code);?>
	<div class="msg">
		<?php echo lang('reset_password_heading');?><br />
		<?php if(isset($message)){ 
			echo '<div class="alert bg-red alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					'.$message.'
				  </div>';
		}?>
	</div>
	
	<div class="input-group">
        <label for="new_password"><?php echo sprintf(lang('reset_password_new_password_label'), $min_password_length);?></label>
        <div class="form-line">
			<?php echo form_input($new_password);?>
		</div>
    </div>
	<div class="input-group">
        <?php echo lang('reset_password_new_password_confirm_label', 'new_password_confirm');?>
        <div class="form-line">
			<?php echo form_input($new_password_confirm);?>
		</div>
    </div>	
	<?php echo form_input($user_id);?>
	<?php echo form_hidden($csrf); ?>
	<?php echo form_submit('submit', lang('reset_password_submit_btn'),'class="btn btn-block bg-pink waves-effect"');?>

<?php echo form_close();?>