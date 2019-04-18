<div class="tab-pane active" id="personaldata">
            <div style="padding:2%;">
                <h3 style="margin-bottom:10px;">Personal Data</h3>
            </div>
            <div class="col-md-8" >
                    
                    <form id="editfrm" class="form-horizontal" method="post" action="<?=base_url('member/editProfile')?>">
                        <div class="form-group">
                            <label class="control-label col-sm-2" style="text-align: left;">Username</label> 
                            <div class="input-group col-sm-10">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-user"></i>
                                </span>
                                <input type="text" class="form-control" name="username" value="<?=$Member->username;?>" required>
                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" style="text-align: left;">First Name</label> 
                            <div class="input-group col-sm-10">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-user"></i>
                                </span>
                                <input type="text" class="form-control" name="firstname" value="<?=$Member->first_name;?>" required>
                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" style="text-align: left;">Last Name</label> 
                            <div class="input-group col-sm-10">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-user"></i>
                                </span>
                                <input type="text" class="form-control" name="lastname" value="<?=$Member->last_name;?>" required>
                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" style="text-align: left;">Gender</label> 
                            <div class="input-group col-sm-10">
                                <span class="input-group-addon">
                                    <i class="fa fa-mars"></i>
                                </span>
                                <select class="form-control" name="gender" value="<?=$Member->gender;?>">
                                                    <option value="male" selected>Male</option>
                                                    <option value="female">Female</option>
                                </select>
                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" style="text-align: left;">Birth Date</label> 
                            <div class="input-group col-sm-10">
                                <span class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </span>
                                <input type="date" class="form-control" name="birthdate" value="<?=$Member->birth_date;?>" required>
                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" style="text-align: left;">Email</label> 
                            <div class="input-group col-sm-10">
                                <span class="input-group-addon">
                                    <i class="fa fa-envelope"></i>
                                </span>
                                <input type="email" class="form-control" name="email" value="<?=$Member->email;?>" required>
                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" style="text-align: left;">Phone</label> 
                            <div class="input-group col-sm-10">
                                <span class="input-group-addon">
                                    <i class="fa fa-phone"></i>
                                </span>
                                <input type="tel" class="form-control" name="phone" value="<?=$Member->phone;?>" required>
                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" style="text-align: left;">Password</label> 
                            <div class="input-group col-sm-10">
                                <span class="input-group-addon">
                                    <i class="fa fa-lock"></i>
                                </span>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="********">
                                </div>
                                <div class="col-sm-3">
                                    <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#changepass">change password</button>
                                    <div id="changepass" class="modal fade" role="dialog">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content">
                                                <form id="updtpass" method="post" action="<?=base_url('member/changePass')?>">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Change Password</h4>
                                                </div>
                                                <div class="modal-body">
                                                    Input current password
                                                    <input class="form-control" type="password" name="old" required/>
                                                    <br>
                                                    Input new password
                                                    <input type="password" id="pass1" name="new" class="form-control" placeholder="Password must contain capitalize & number" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required/>
                                                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                                                    <br>
                                                    Confirm password
                                                    <input class="form-control" type="password" id="pass2" name="new_confirm" required/>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-default btn-save">Save</button>
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <button id="savechanges" type="submit" class="btn btn-danger">Save Changes</button>
                    </form>
            </div>
                        
            <div class="col-md-4 text-center">
                
                <div class="img-thumbnail text-center">
                    <?php 
                        if ($Member->img_thum == NULL || $Member->img_thum == '') {
                            echo '<img height="200" width="200" src="'.base_url().'assets/images/profile/profile.png">';
                        } else {
                            echo '<img height="200" width="200" src="'.base_url().'assets/images/profile/'.$Member->img_thum.'">';
                        }
                    ?>
                </div>
                <div style="margin-top:10px;">
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#changepp">Change Photo</button>
                    <div id="changepp" class="modal fade" role="dialog">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content text-left">
                                <form method="post" enctype="multipart/form-data" action="<?=base_url('member/uploadImage')?>">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Upload Photo</h4>
                                    </div>
                                    <div class="modal-body">                                    
                                        <input type="file" name="imageURL"> 
                                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">                               
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-default btn-edit">Upload</button>
                                    </div>
                                </form>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>

<script>
$(document).ready(function(){
	$('#savechanges').click(function(){
        if(confirm("Are You Sure?")){
            $("#editfrm").submit();
        }
	});
});
</script>
       