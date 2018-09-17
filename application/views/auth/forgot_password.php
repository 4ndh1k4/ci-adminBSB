<?php echo form_open("auth/forgot_password");?>
	<div class="msg">
		<?php echo sprintf(lang('forgot_password_subheading'), $identity_label);?><br />
		<?php if(isset($message)){ 
			echo '<div class="alert bg-red alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					'.$message.'
				  </div>';
		}?>
	</div>
	<div class="input-group">
        <span class="input-group-addon">
            <i class="material-icons">email</i>
        </span>
		<div class="form-line">
			<?php echo form_input($identity);?>
		</div>
    </div>					  
	<?php echo form_submit('submit', lang('forgot_password_submit_btn'), 'class="btn btn-block bg-pink waves-effect"');?>
	<div class="row m-t-20 m-b--5 align-center">
        <a href="login">Sign In!</a>
    </div>
<?php echo form_close();?>
			