<div class="tab-pane" id="dokumen">
    <h3 style="padding:2%;">Dokumen Upload</h3>
    <form id="dokumenfrm" class="form-horizontal" method="post" action="<?=base_url('member/editDokumen')?>">
        <div class="form-group" style="padding-left:2%;">
            <label class="control-label col-sm-2" style="text-align: left;">Jenis Usaha</label> 
                <div class="input-group col-sm-3">
                    <span class="input-group-addon">
                        <i class="fa fa-briefcase"></i>
                    </span>
                    <select class="form-control" name="gender" value="<?=$Member->gender;?>">
                        <option value="badanusaha" selected>Badan Usaha</option>
                        <option value=""></option>
                    </select>
                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                </div>
        </div>
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>File</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Scan KTP</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Scan NPWP</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Scan SIUP/TDP</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Scan Akte Perusahaan</td>
                    </tr>
                    <tr>
                        <td>Scan Surat Kuasa (bila diwakilkan)</td>
                    </tr>
                </tbody>
            </table>
            <button id="savedokumen" class="btn btn-danger pull-right" type="submit">Save</button>
        </div>
    </form>
</div>