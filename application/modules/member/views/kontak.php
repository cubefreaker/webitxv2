<div class="tab-pane" id="kontak">
    <div style="padding:2%;">
        <h3 style="margin-bottom:10px;">Kontak Perwakilan Perusahaan</h3>
    </div>
    <form id="kontakfrm" class="form-horizontal" method="post" action="<?=base_url('member/editKontak')?>">
        <div class="col-md-12">    
            <table class="table">
                <thead>
                    <tr>
                        <th>Kontak Umum</th>
                        <th>Kontak Operasional</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="form-group" style="margin-right:5%;">
                                <label class="control-label col-sm-2" style="text-align: left;">Nama</label> 
                                <div class="input-group col-sm-10">
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-user"></i>
                                    </span>
                                    <input type="text" class="form-control" name="username" value="Abdul" required>
                                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <label class="control-label col-sm-2" style="text-align: left;">Nama</label> 
                                <div class="input-group col-sm-10">
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-user"></i>
                                    </span>
                                    <input type="text" class="form-control" name="username" value="Abdulah" required>
                                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group" style="margin-right:5%;">
                                <label class="control-label col-sm-2" style="text-align: left;">Email</label> 
                                <div class="input-group col-sm-10">
                                    <span class="input-group-addon">
                                        <i class="fa fa-envelope"></i>
                                    </span>
                                    <input type="email" class="form-control" name="email" value="Email" required>
                                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="form-group" style="margin-right:5%;">
                                <label class="control-label col-sm-2" style="text-align: left;">Email</label> 
                                <div class="input-group col-sm-10">
                                    <span class="input-group-addon">
                                        <i class="fa fa-envelope"></i>
                                    </span>
                                    <input type="email" class="form-control" name="email" value="Email" required>
                                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group" style="margin-right:5%;">
                                <label class="control-label col-sm-2" style="text-align: left;">No. Tlp</label> 
                                <div class="input-group col-sm-10">
                                    <span class="input-group-addon">
                                        <i class="fa fa-phone"></i>
                                    </span>
                                    <input type="tel" class="form-control" name="phone" value="0" required>
                                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <label class="control-label col-sm-2" style="text-align: left;">No. Tlp</label> 
                                <div class="input-group col-sm-10">
                                    <span class="input-group-addon">
                                        <i class="fa fa-phone"></i>
                                    </span>
                                    <input type="tel" class="form-control" name="phone" value="0" required>
                                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group" style="margin-right:5%;">
                                <label class="control-label col-sm-2" style="text-align: left;">No. HP</label> 
                                <div class="input-group col-sm-10">
                                    <span class="input-group-addon">
                                        <i class="fa fa-mobile"></i>
                                    </span>
                                    <input type="tel" class="form-control" name="phone" value="0" required>
                                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <label class="control-label col-sm-2" style="text-align: left;">No. HP</label> 
                                <div class="input-group col-sm-10">
                                    <span class="input-group-addon">
                                        <i class="fa fa-mobile"></i>
                                    </span>
                                    <input type="tel" class="form-control" name="phone" value="0" required>
                                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <button id="savekontak" type="submit" class="btn btn-md btn-danger pull-right">Save</button>
        </div>
    </form>
    
</div>