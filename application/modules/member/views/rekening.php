<div class="tab-pane" id="rekening">
    <div style="padding:2%;">
        <h3 style="margin-bottom:10px;">Kontak Perwakilan Perusahaan</h3>
    </div>
    <form id="rekfrm" class="form-horizontal" style="padding-left:2%;" method="post" action="<?=base_url('member/editRekening')?>">
        <div class="form-group">
            <label class="control-label col-sm-2" style="text-align: left;">Nama Bank</label> 
            <div class="input-group col-sm-4">
                <span class="input-group-addon">
                    <i class="fa fa-building"></i>
                </span>
                <input type="text" class="form-control" name="bank" value="" required>
                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" style="text-align: left;">Nomor Rekening</label> 
            <div class="input-group col-sm-4">
                <span class="input-group-addon">
                    <i class="fa fa-credit-card"></i>
                </span>
                <input type="text" class="form-control" name="rekno" value="" required>
                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" style="text-align: left;">Atas Nama</label> 
            <div class="input-group col-sm-4">
                <span class="input-group-addon">
                    <i class="glyphicon glyphicon-user"></i>
                </span>
                <input type="text" class="form-control" name="rekowner" value="" required>
                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
            </div>
        </div>
        <div class="col-md-6" style="padding:0px;">
            <button id="saverek" class="btn btn-danger pull-right" type="submit">Save</button>
        </div>
    </form>
</div>