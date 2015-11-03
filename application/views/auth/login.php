<body class="hold-transition login-page">
    <div class="login-box">
		
		<div class="login-logo">
			<b><?php echo lang('login_admin');?></b><?php echo lang('login_heading');?>
		</div><!-- /.login-logo -->
		<div class="login-box-body">
			<p class="login-box-msg"><?php echo lang('login_subheading');?></p>
			
			<div id="infoMessage" class="text-danger"><?php echo $message;?></div>

			<?php echo form_open("auth/login");?>

			<div class="form-group has-feedback">
				<?php $identity = array('class' => 'form-control', 'placeholder' => 'Email','name'=>'identity','id'=>'identity');?>
				<?php echo form_input($identity);?>
			   <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
			</div>

			<div class="form-group has-feedback">
				<?php $password= array('type'=>'password', 'class' => 'form-control', 'placeholder' => 'Password','name'=>'password','id'=>'password');?>
				<?php echo form_input($password);?>
				<span class="glyphicon glyphicon-lock form-control-feedback"></span>
			</div> 

			<div class="row">
				<div class="col-xs-8">
					<div class="checkbox icheck">
						<label>
							<?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?><?php echo lang('login_remember_label', 'remember');?>
						</label>
					</div>
				</div><!-- /.col -->
				<div class="col-xs-4">
					<button type="submit" name="submit" class="btn btn-primary btn-block btn-flat"><?php echo lang('login_submit_btn');?></button>
				</div><!-- /.col -->
			</div>  

			<?php echo form_close();?>
			<div class="social-auth-links text-center">
				<p>- OR -</p>
				<a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i><?php echo lang('facebook')?></a>
				<a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i><?php echo lang('google')?></a>
			</div><!-- /.social-auth-links -->

			<p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
			<a href="/" class="text-center"><?php echo lang('login_membership');?></a>
		</div><!-- /.login-box-body -->
    </div><!-- /.login-box -->