<div class="tab-pane" id="infomitra">
<div style="padding:2%;">
                <h3 style="margin-bottom:10px;">Informasi Mitra</h3>
            </div>
            <form id="mitrafrm" class="form-horizontal" method="post" action="<?=base_url('member/editMitra')?>">
            <div class="col-md-6" style="padding:2%;">
                    
                    
                        <div class="form-group">
                            <label class="control-label col-sm-4" style="text-align: left;">Nama Brand / Merk</label> 
                            <div class="input-group col-sm-8">
                                <span class="input-group-addon">
                                    <i class="fa fa-qrcode"></i>
                                </span>
                                <input type="text" class="form-control" id="brand" name="brand" value="" required>
                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" style="text-align: left;">Nama Perusahaan</label> 
                            <div class="input-group col-sm-8">
                                <span class="input-group-addon">
                                    <i class="fa fa-building"></i>
                                </span>
                                <input type="text" class="form-control" name="coname" value="" required>
                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" style="text-align: left;">Jenis Usaha</label> 
                            <div class="input-group col-sm-8">
                                <span class="input-group-addon">
                                    <i class="fa fa-briefcase"></i>
                                </span>
                                <select class="form-control" name="type" value="">
                                                    <option value="" selected>1</option>
                                                    <option value="">2</option>
                                </select>
                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" style="text-align: left;">Nama Pemilik Usaha</label> 
                            <div class="input-group col-sm-8">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-user"></i>
                                </span>
                                <input type="text" class="form-control" name="owner" value="" required>
                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" style="text-align: left;">No Telepon</label> 
                            <div class="input-group col-sm-8">
                                <span class="input-group-addon">
                                    <i class="fa fa-phone"></i>
                                </span>
                                <input type="tel" class="form-control" name="phone" value="" required>
                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" style="text-align: left;">No HP</label> 
                            <div class="input-group col-sm-8">
                                <span class="input-group-addon">
                                    <i class="fa fa-mobile"></i>
                                </span>
                                <input type="tel" class="form-control" name="mobile" value="" required>
                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" style="text-align: left;">Alamat Perusahaan</label> 
                            <div class="input-group col-sm-8">
                                <span class="input-group-addon">
                                    <i class="fa fa-home"></i>
                                </span>
                                <input type="text" class="form-control" name="address" value="" required>
                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" style="text-align: left;">Kecamatan</label> 
                            <div class="input-group col-sm-8">
                                <span class="input-group-addon">
                                    <i class="fa fa-home"></i>
                                </span>
                                <select class="form-control" name="subdistrict" value="">
                                                    <option value="" selected>1</option>
                                                    <option value="">2</option>
                                </select>
                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" style="text-align: left;">Provinsi</label> 
                            <div class="input-group col-sm-8">
                                <span class="input-group-addon">
                                    <i class="fa fa-home"></i>
                                </span>
                                <select class="form-control" name="province" value="">
                                                    <option value="" selected>1</option>
                                </select>
                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                            </div>
                        </div>


                        
            </div>
                        
            <div class="col-md-6 text-center"style="padding:2%;">
                <!-- <div class="form-group"> -->
                <div class="img-thumbnail text-center" style="margin-bottom:35px;">
                    
                        <?php 
                            $query = $this->db->query("SELECT * FROM users_company WHERE id = '".$Member->id."'");
                            $company = $query->row();
                            
                            $csrf_name = $this->security->get_csrf_token_name();
                            $csrf_hash = $this->security->get_csrf_hash();

                            if($company != NULL){
                                if ($company->logo == NULL || $company->logo == '') {
                                    echo '
                                        <input type="file" id="imgUpload" name="logoURL" style="display: none;">
                                        <input type="hidden" name="'.$csrf_name.'" value="'.$csrf_hash.'">
                                        <input type="image" id="imgBrand" height="200" width="200" src="'.base_url().'assets/images/profile/profile.png">';
                                } else {
                                    echo '
                                        <input type="file" id="imgUpload" name="logoURL" style="display: none;">
                                        <input type="hidden" name="'.$csrf_name.'" value="'.$csrf_hash.'">
                                        <input type="image" id="imgBrand" height="200" width="200" src="'.base_url().'assets/images/profile/'.$company->logo.'">';
                                }
                            }else{
                                echo '
                                        <input type="file" id="imgUpload" name="logoURL" style="display: none;>
                                        <input type="hidden" name="'.$csrf_name.'" value="'.$csrf_hash.'">
                                        <input type="image" id="imgBrand" height="200" width="200" src="'.base_url().'assets/images/profile/profile.png">';
                            }
                            
                                                       
                        ?>
                </div>
                <!-- </div> -->
                <div class="form-group">
                    <label class="control-label col-sm-4" style="text-align: left;">Email</label> 
                    <div class="input-group col-sm-8">
                        <span class="input-group-addon">
                            <i class="fa fa-envelope"></i>
                        </span>
                        <input type="email" class="form-control" name="email" value="" required>
                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" style="text-align: left;">Website</label> 
                    <div class="input-group col-sm-8">
                        <span class="input-group-addon">
                            <i class="fa fa-globe"></i>
                        </span>
                        <input type="text" class="form-control" name="website" value="" required>
                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" style="text-align: left;">Kabupaten / Kota</label> 
                    <div ng-app="myApp" ngController="myCtrl" class="input-group col-sm-8">
                        <span class="input-group-addon">
                            <i class="fa fa-home"></i>
                        </span>
                        <select class="form-control" name="city" value="">
                            <option ng-repeat="x in country" value="{{x}}" selected>{{x}}</option>
                        </select>
                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" style="text-align: left;">Kode Pos</label> 
                    <div class="input-group col-sm-8">
                        <span class="input-group-addon">
                            <i class="fa fa-envelope-o"></i>
                        </span>
                        <input type="text" class="form-control" name="postal" value="" required>
                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                    </div>
                </div>
                </div>
            
            <button id="savemitra" type="submit" class="btn btn-danger pull-right">Save Changes</button>
        </form>
</div>
<script>
function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#imgBrand').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
}
    
$("#imgUpload").change(function(){
    readURL(this);
});

$("#imgBrand").click(function() {
    $("#imgUpload").click();
});

$(document).ready(function(){
	$('#savemitra').click(function(){
        if(confirm("Are You Sure?")){
            $("#mitrafrm").submit();
        }
	});
});
// function saveProfile(){
    // if(confirm("Are You Sure?")){
    //     document.getElementById("editfrm").submit();
    // }   
// }

$(document).ready(function(){
    $('#brand').val("Test");
});

</script>


<script>
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope, $http) {
  $http.get('http://localhost/webitx/member/tes')
  .then(function(response) {
    $scope.country = response.data;
  });console.log('tes');
});
</script> 