<div class="content-wrapper" style="min-height: 1126px;">
<section class="content">
	<div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"><?php echo lang('deactivate_heading');?></h3>
				  <p><?php echo sprintf(lang('deactivate_subheading'), $user->username);?></p>
				</div>

				<div class="box-body">
				<?php echo form_open("auth/deactivate/".$user->id);?>

				  <p>
				  	<?php echo lang('deactivate_confirm_y_label', 'confirm');?>
				    <input type="radio" name="confirm" value="yes" checked="checked" />
				    <?php echo lang('deactivate_confirm_n_label', 'confirm');?>
				    <input type="radio" name="confirm" value="no" />
				  </p>

				  <?php echo form_hidden($csrf); ?>
				  <?php echo form_hidden(array('id'=>$user->id)); ?>

				  <p><?php echo form_submit('submit', lang('deactivate_submit_btn'));?></p>
				<?php echo form_close();?>
				 </div>
	</div>
</section>
</div>