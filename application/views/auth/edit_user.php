
<div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title"><?php echo lang('edit_user_heading');?></h3>
                  <p><?php echo lang('edit_user_subheading');?></p>
                  <div id="infoMessage"><?php echo $message;?></div>
                </div><!-- /.box-header -->
                <!-- form start -->
                <?php echo form_open(uri_string());?>
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1"><?php echo lang('edit_user_fname_label', 'first_name');?></label>
                      <?php echo form_input($first_name);?>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1"><?php echo lang('edit_user_lname_label', 'last_name');?></label>
                      <?php echo form_input($last_name);?>
                    </div>                    
                    <div class="form-group">
                      <label for="exampleInputEmail1"><?php echo lang('edit_user_company_label', 'company');?></label>
                      <?php echo form_input($company);?>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1"><?php echo lang('edit_user_phone_label', 'phone');?></label>
                      <?php echo form_input($phone);?>
                    </div>                    
                    <div class="form-group">
                      <label for="password"><?php echo lang('edit_user_password_label', 'password');?></label>
                      <?php echo form_input($password);?>
                    </div>
                     <div class="form-group">
                      <label for="password_confirm"><?php echo lang('edit_user_password_confirm_label', 'password_confirm');?></label>
                       <?php echo form_input($password_confirm);?>
                    </div>
                    <div class="checkbox">        
                              <?php if ($this->ion_auth->is_admin()): ?>

                                   <h3 class="box-title"><?php echo lang('edit_user_groups_heading');?></h3>
                                  <?php foreach ($groups as $group):?>
                                      <label class="checkbox">
                                      <?php
                                          $gID=$group['id'];
                                          $checked = null;
                                          $item = null;
                                          foreach($currentGroups as $grp) {
                                              if ($gID == $grp->id) {
                                                  $checked= ' checked="checked"';
                                              break;
                                              }
                                          }
                                      ?>
                                      <input type="checkbox" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
                                      <?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
                                      </label>
                                  <?php endforeach?>

                              <?php endif ?>
                      </label>
                    </div>
                  </div><!-- /.box-body -->

                  <?php echo form_hidden('id', $user->id);?>
                  <?php echo form_hidden($csrf); ?>
                  <div class="box-footer">
                    <p><?php echo form_submit('submit', lang('edit_user_submit_btn'));?></p>
                  </div>
                <?php echo form_close();?>
              </div>