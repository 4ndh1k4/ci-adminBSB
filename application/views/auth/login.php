<?php echo form_open("auth/login");?>
    <div class="msg">
		<?php echo lang('login_subheading');?><br />
		<?php if(isset($message)){ 
			echo '<div class="alert bg-red alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			'.$message.'
			</div>';
		}?>
	</div>
    <div class="input-group">
        <span class="input-group-addon">
            <i class="material-icons">person</i>
        </span>
        <div class="form-line">
            <?php echo form_input($identity);?>
        </div>
    </div>
    <div class="input-group">
        <span class="input-group-addon">
            <i class="material-icons">lock</i>
        </span>
        <div class="form-line">
			<?php echo form_input($password);?>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-8 p-t-5">							
			<?php echo form_checkbox('remember', '1', FALSE, 'id="remember" class="filled-in chk-col-pink"');?>
			<?php echo lang('login_remember_label', 'remember');?>
        </div>
        <div class="col-xs-4">
			<?php echo form_submit('submit', lang('login_submit_btn'), 'class="btn btn-block bg-pink waves-effect"');?>
        </div>
    </div>
    <div class="row m-t-15 m-b--20">
        <div class="col-xs-6">
            <a href="#">Register Now!</a>
        </div>
        <div class="col-xs-6 align-right">
            <a href="forgot_password"><?php echo lang('login_forgot_password');?></a>
        </div>
    </div>
<?php echo form_close();?>
           