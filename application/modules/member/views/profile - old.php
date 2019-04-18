<?php $this->load->view('template/landingpage/head') ?>
<link href="<?=base_url()?>assets/css/member-dashboard.css" rel="stylesheet" type="text/css">
<link href="<?=base_url()?>assets/css/main2.css" rel="stylesheet" type="text/css">
<link href="<?=base_url()?>assets/css/member-edit-detail.css" rel="stylesheet" type="text/css">
<body ng-controller="MemberController">  
<?php $this->load->view('template/landingpage/nav') ?>

<section class="page_title">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 col-md-11 col-md-offset-1">
                <div class="page_title_section_holder">
                    <h1 class="xs_center">DASHBOARD</h1>
                    <div class="title_menu_holder hidden-xs">
                        <ul class="">
                            <li id="mdashboard">Dashboard</li>
                            <li class="active">User Profile Overview</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="transaction_holder" ng-cloak>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-1">
                <img src="<?=base_url()?>assets/images/profile-overview-decor.png" alt="Profile Overview" class="img-responsive hidden-xs" style="margin: 0 auto;">
            </div>
            <div class="col-xs-12 col-sm-6 col-md-5">
                <div class="profile-menu-wrapper">
                    <select class="profile-menu visible-xs" onchange="location = this.value;">
                        <option value="" hidden>Select Menu</option>
                        <option value="member.php">Dashboard</option>
                        <option value="member-conf.php">Payment Confirmation</option>
                        <option value="profile-overview.php">User Profile Overview</option>
                    </select>
                </div>
                <div class="profile_overview_holder" style="border: none;">
                    <h2 class="gotham_medium fs_18 lh_36 ls-30 mt_10">User Profile Overview</h2>
                    <div class="mt_10">
                        <h3 id="profile" class="open_sans semibold fs_16 lh_36 color_light_gray ib va_middle fl_left">General Information</h3>
                        <div class="btn_edit_info_holder ib va_middle fl_right lh_36">
                            <div class="btn_edit_info tb">
                                <div class="open_sans fs_12 color_red tc va_middle center hidden-xs">Edit Information</div>
                                <div class="open_sans fs_12 color_red tc va_middle center visible-xs">Edit</div>
                            </div>
                        </div>
                        <div style="clear: both"></div>
                        <div class="data_inner_holder">
                            <div class="left_col ib va_top">
                                <p class="open_sans fs_14 lh_36 ls-50 color_red">Full Name :</p>
                            </div>
                            <div class="right_col ib">
                                <p class="open_sans semibold fs_14 lh_36 ls-50"><?=$Member->first_name?> <?=$Member->last_name?></p>
                            </div>
                            <div style="clear: both"></div>
                            <div class="left_col ib va_top">
                                <p class="open_sans fs_14 lh_36 ls-50 color_red">E-mail :</p>
                            </div>
                            <div class="right_col ib">
                                <p class="open_sans semibold fs_14 lh_36 ls-50"><?=$Member->email?></p>
                            </div>
                            <div style="clear: both"></div>
                            <div class="left_col ib va_top">
                                <p class="open_sans fs_14 lh_36 ls-50 color_red">Password :</p>
                            </div>
                            <div class="right_col ib">
                                <p class="open_sans semibold fs_14 lh_36 ls-50">*******</p>
                            </div>
                            <div style="clear: both"></div>
                            <div class="left_col ib va_top">
                                <p class="open_sans fs_14 lh_36 ls-50 color_red hidden-xs">Phone Number :</p> 
                                <p class="open_sans fs_14 lh_36 ls-50 color_red visible-xs">Phone :</p>
                            </div>
                            <div class="right_col ib">
                                <p class="open_sans semibold fs_14 lh_36 ls-50"><?=$Member->phone?></p>
                            </div>
                            <div style="clear: both"></div>
                            <div class="left_col ib va_top">
                                <p class="open_sans fs_14 lh_36 ls-50 color_red">Address :</p>
                            </div>
                            <div class="right_col ib">
                                <p class="open_sans semibold fs_14 lh_36 ls-50"><?=$Member->street?></p>
                                <p class="open_sans semibold fs_14 lh_36 ls-50"><?=$Member->city?></p>
                                <p class="open_sans semibold fs_14 lh_36 ls-50">
                                	<?php
                                	$Country = isset($MasterCountry[$Member->country]) ? $MasterCountry[$Member->country] : '';
                                	echo $Country;
                                	?>
                                	</p>
                            </div>
                            <div style="clear: both"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="right_menu">
    <div class="right_menu_holder">
        <div class="btn_cancel_side tb fl_right" style="background-color: #de4837; z-index: 99;">
            <div class="avenir_regular fs_12 lh_24 color_white center tc va_middle">Cancel</div>
        </div>
        <div class="form_holder">
            <!-- <form id="edit_method">
                <p id="form_title_method" class="avenir_demi fs_20 lh_30 color_white center form_title">Did you change your Payment Method?</p>
                <div class="row_holder">
                    <p class="avenir_demi fs_12 lh_25 color color_yellow row_title">Choose Payment Methode</p>
                    <div class="form-group">
                        <div class="holder">
                            <div class="btn_payment_holder">
                                <p class="avenir_demi fs_12 lh_26 color_dark_gray_2">TRANSFER</p>
                                <div class="plus_minus_holder tb absolute">
                                    <p class="avenir_demi fs_20 lh_30 tc va_middle"><span>+</span></p>
                                </div>
                            </div>
                            <div class="bank_holder" hidden="hidden">
                                <input type="radio" class="bank_radio_input ib va_middle" name="bank_radio">
                                <label for="bank_radio"><span></span></label>
                                <img src="<?=base_url()?>assets/images/logo/logo_bca_small.png" class="img-responsive ib va_middle">
                                <p class="avenir_regular fs_14 lh_25 color_white ib va_middle">BCA</p>
                            </div>
                            <div class="bank_holder" hidden="hidden">
                                <input type="radio" class="bank_radio_input ib va_middle" name="bank_radio">
                                <label for="bank_radio"><span></span></label>
                                <img src="<?=base_url()?>assets/images/logo/logo_mandiriEcash_small.png" class="img-responsive ib va_middle">
                                <p class="avenir_regular fs_14 lh_25 color_white ib va_middle">Mandiri</p>
                            </div>
                            <div class="bank_holder" hidden="hidden">
                                <input type="radio" class="bank_radio_input ib va_middle" name="bank_radio">
                                <label for="bank_radio"><span></span></label>
                                <img src="<?=base_url()?>assets/images/logo/logo_mega_small.png" class="img-responsive ib va_middle">
                                <p class="avenir_regular fs_14 lh_25 color_white ib va_middle">Mega</p>
                            </div>
                        </div>
                        <div class="holder">
                            <div class="btn_payment_holder">
                                <p class="avenir_demi fs_12 lh_26 color_dark_gray_2">CREDIT CARD</p>
                                <div class="plus_minus_holder tb absolute">
                                    <p class="avenir_demi fs_20 lh_30 tc va_middle"><span>-</span></p>
                                </div>
                            </div>
                            <div class="bank_holder">
                                <input type="radio" class="bank_radio_input ib va_middle" name="bank_radio">
                                <label for="bank_radio"><span></span></label>
                                <img src="<?=base_url()?>assets/images/logo/logo_masterCard_small.png" class="img-responsive ib va_middle">
                                <p class="avenir_regular fs_14 lh_25 color_white ib va_middle">Master Card</p>
                            </div>
                            <div class="bank_holder">
                                <input type="radio" class="bank_radio_input ib va_middle" name="bank_radio" checked="checked">
                                <label for="bank_radio"><span></span></label>
                                <img src="<?=base_url()?>assets/images/logo/logo_visa_small.png" class="img-responsive ib va_middle">
                                <p class="avenir_regular fs_14 lh_25 color_white ib va_middle">Visa</p>
                            </div>
                        </div>
                        <div class="btn_process_holder tb fl_right">
                            <div class="avenir_regular fs_14 lh_25 color_white tc va_middle">Process</div>
                        </div>
                    </div>
                </div>
                <div class="row_holder">
                    <p class="avenir_demi fs_12 lh_25 color color_yellow row_title">Visa Payment Form</p>
                    <div class="form-group">
                        <label class="avenir_regular fs_14 lh_25 color_yellow">Name</label>
                        <input type="text" class="avenir_regular fs_16 lh_26 color_dark_gray_2 side_form_input form-control" id="name_form_method">
                        <label class="avenir_regular fs_14 lh_25 color_white">Same with Your Visa Card</label>
                    </div>
                    <div class="form-group">
                        <label class="avenir_regular fs_14 lh_25 color_yellow">Card Number</label>
                        <input type="number" class="avenir_regular fs_16 lh_26 color_dark_gray_2 side_form_input form-control" id="cardNumber_form_method">
                    </div>
                    <div class="form-group">
                        <label class="avenir_regular fs_14 lh_25 color_yellow">Expired Date</label>
                        <br />
                        <input type="text" class="avenir_regular fs_14 lh_25 color_dark_gray_2 side_date_input" placeholder="DD" id="input_date_form_method" id="expired_date_form_method">
                        <label for="input_date_form_method"><span></span></label>
                        <input type="text" class="avenir_regular fs_14 lh_25 color_dark_gray_2 side_date_input" placeholder="MM" id="input_month_form_method">
                        <label for="input_month_form_method"><span></span></label>
                        <input type="text" class="avenir_regular fs_14 lh_25 color_dark_gray_2 side_date_input" placeholder="YY" id="input_year_form_method">
                        <label for="input_year_form_method"><span></span></label>
                    </div>
                    <div class="form-group">
                        <label class="avenir_regular fs_14 lh_25 color_yellow">CVV</label>
                        <input type="number" class="avenir_regular fs_16 lh_26 color_dark_gray_2 side_form_input form-control" id="cvv_form_method">
                    </div>
                    <div class="form-group">
                        <div class="wd_half ib va_middle">
                            <label class="avenir_regular fs_14 lh_25 color_yellow">Choose Bank</label>
                            <select class="avenir_regular fs_16 lh_26 color_dark_gray_2 side_form_input" id="choose_bank_form_method">
                                <option value="BNI">BNI</option>
                                <option value="BCA">BCA</option>
                                <option value="BRI">BRI</option>
                            </select>
                            <label for="choose_bank_form_method"><span></span></label>
                        </div>
                        <div class="wd_half ib va_middle">
                            <label class="avenir_regular fs_14 lh_25 color_yellow">Choose Duration</label>
                            <select class="avenir_regular fs_16 lh_26 color_dark_gray_2 side_form_input" id="choose_duration_form_method">
                                <option value="6 Hours">6 Hours</option>
                                <option value="12 Hours">12 Hours</option>
                                <option value="24 Hours">24 Hours</option>
                            </select>
                            <label for="choose_duration_form_method"><span></span></label>
                        </div>
                    </div>
                    <div class="form-group wd_half">
                        <div class="btn_holder tb fl_right pointer btn_done wd_half">
                            <div class="avenir_regular fs_14 lh_25 color_white tc va_middle center">DONE</div>
                        </div>
                    </div>
                </div>
            </form> -->

            <!-- // -------------------------------- EDIT PROFILE --------------------------------  // -->
            <form id="edit_profile" ng-submit="EditProfile()">
                <p id="form_title_profile" class="avenir_demi fs_20 lh_30 color_white center form_title">Did you change your profile information? Let's us know about you more.</p>
                <div class="form-group">
                    <label class="avenir_regular fs_12 lh_22 color_yellow">First Name</label>
                    <input id="first_name_form_profile" name="name" required type="text" class="avenir_regular fs_12 lh_22 color_dark_gray_2 form-control side_form_input form-control" ng-model="Member.FirstName">
                </div>
                <div class="form-group">
                    <label class="avenir_regular fs_12 lh_22 color_yellow">Last Name</label>
                    <input id="last_name_form_profile" required name="lastname" type="text" class="avenir_regular fs_12 lh_22 color_dark_gray_2 form-control side_form_input form-control" ng-model="Member.LastName">
                </div>
                <div class="form-group">
                    <label class="avenir_regular fs_12 lh_22 color_yellow mb_0">Password</label>
                    <div style="clear: both"></div>
                    <label class="avenir_regular fs_12 lh_22 color_white">Change your password only if you need to reset password.</label>
                    <div class="password_holder">
                        <input id="password_form_profile" name="password" type="password" class="avenir_regular fs_12 lh_22 color_dark_gray_2 form-control side_form_input password" ng-model="Member.Password1">
                        <div id="" class="btn_eye_holder">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="password_holder mt_15">
                        <input id="newPassword_form_profile" name="repassword" type="password" class="avenir_regular fs_12 lh_22 color_dark_gray_2 form-control side_form_input password" ng-model="Member.Password2">
                        <div id="" class="btn_eye_holder">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="avenir_regular fs_12 lh_22 color_yellow">E-mail</label>
                    <input readonly id="email_form_profile" required name="email" type="email" class="avenir_regular fs_12 lh_22 color_dark_gray_2 form-control side_form_input form-control" ng-model="Member.Email">
                </div>
                <div class="form-group">
                    <label class="avenir_regular fs_12 lh_22 color_yellow">Mobile Number</label>
                    <input id="mobile_form_profile" name="phone" required type="number" class="avenir_regular fs_12 lh_22 color_dark_gray_2 form-control side_form_input form-control" ng-model="Member.Phone">
                </div>
                <!-- <div class="form-group">
                    <label class="avenir_regular fs_12 lh_22 color_yellow">Address</label>
                    <div class="form_address_holder">
                        <div>
                            <label class="avenir_regular fs_12 lh_22 color_yellow ib va_middle">Street</label>
                            <input id="street_form_profile" name="aboutme" type="text" class="avenir_regular fs_12 lh_22 color_dark_gray_2 form-control side_form_input form-control" ng-model="Member.password2">
                        </div>
                        <div>
                            <label class="avenir_regular fs_12 lh_22 color_yellow ib va_middle">City</label>
                            <input id="city_form_profile" name="city" type="text" class="avenir_regular fs_12 lh_22 color_dark_gray_2 form-control side_form_input form-control"  ng-model="Member.city">
                        </div>
                        <div>
                            <label class="avenir_regular fs_12 lh_22 color_yellow ib va_middle">Country</label>
                            <select id="province_form_profile" type="text" name="country" class="avenir_regular fs_12 lh_22 color_dark_gray_2 form-control side_form_input form-control">
                                <option value="0"></option>
                            </select>
                        </div>
                    </div>
                </div> -->
                <div class="form-group">
                    <input type="submit" class="hidden form_submit_profile">
                    <div class="form_text_holder fl_left wd_half ib mt_30">
                        <p class="avenir_regular fs_12 lh_18 color_white">Please full fill form because it will help us to know more about you.</p>
                    </div>
                    <div class="fl_right ib wd_half">
                        <div class="btn_holder tb fl_right pointer btn_done">
                            <div class="avenir_regular fs_14 lh_25 color_white tc va_middle center">UPDATE</div>
                        </div>
                    </div>
                </div>
            </form>
            <!-- // -------------------------------- EDIT PROFILE --------------------------------  // -->
        </div>
    </div>
</section>

<?php $this->load->view('template/loader/preloader') ?>
<?php $this->load->view('template/landingpage/footer', $footerPage) ?>

<script src="<?=base_url()?>assets/js/member.js"></script>

<script type="text/javascript">
    "use strict";
    app.controller('MemberController', function (FlightSearch, $scope, $filter, $window, $http, $timeout) {

        $scope.init = function(){
            $scope.Member               = <?=json_encode($MemberData)?>;
            $scope.MasterCountry        = <?=json_encode($MasterCountry)?>;
            $scope.Member.Phone         = parseInt($scope.Member.Phone, 10);
        };

        (function () {
            $scope.init();
            $('.detail_day').show();
        })();

        $scope.EditProfile = function() {
            if ($scope.Member.Password1  || $scope.Member.Password2) {
                if (!$scope.Member.Password1 || !$scope.Member.Password2 || $scope.Member.Password1 != $scope.Member.Password2) {
                    FlightSearch.ErrorResponse('Password not match');
                    return false;
                }
            }
            console.log($scope.Member);
            FlightSearch.startLoadingPage();

            $http.post(
                baseUrl+'member/editProfile',
                {'data': $scope.Member}
            ).then(function successCallback(resp) {
                console.log(resp);
                FlightSearch.stopLoadingPage();
                if (resp.data['StatusResponse'] == 0) {
                    FlightSearch.ErrorResponse(resp.data['Message']);
                }
                else if (resp.data['StatusResponse'] == 1) {
                    FlightSearch.SuccessResponse();
                }
            }, function errorCallback(err) {
                console.log(err);
                FlightSearch.ErrorResponse(err);
            });
        }

        $('.btn_done').click(function() {
            $scope.EditProfile();
        });

    });

    $(document).ready(function() {

        $('#mdashboard').click(function() {
          window.location.href = '<?=base_url("member/dashboard")?>';
        });

     //    $('#edit_profile').on('submit', function(e) {
	    //     e.preventDefault();
	        
	    //     var pass1=$('#password_form_profile').val();
	    //     var pass2=$('#newPassword_form_profile').val();
	    //     if(pass1 != pass2) {
	    //       swal({
	    //         title: "Error",
	    //         text: "Password doesn't match",
	    //         type:"error"
	    //       });
	    //       return false;
	    //     }
	        
	    //     $('.page_preloader').css('opacity', '0.8');
	    //     $('.page_preloader').css('z-index', '9999');
	    //     $('.page_preloader').css('display', 'block');
	        
	    //     $.ajax({
	    //       type: "POST",
	    //       url: '_mem.php',
	    //       data: $('#edit_profile').serialize(),
	    //       success: function(resp){
	    //         stopLoading();
	    //         if (resp.status) {
	    //           swal({
	    //             title: "Success",
	    //             text: "Profile updated!",
	    //             type: "success",
	    //             allowOutsideClick: true,
	    //             confirmButtonText: "OK"
	    //           }).then(function() {
	    //             location.reload();
	    //           }, function(dismiss) {
	    //             location.reload();
	    //           });
	    //         }
	    //         else {
	    //           swal({
	    //             title: "Error",
	    //             text: resp.message,
	    //             type:"error"
	    //           });
	    //         }
	    //       },
	    //       error: function(errResp) {
	    //         stopLoading();
	    //         swal({
	    //             title: "Error",
	    //             text: "Please try again later",
	    //             type:"error"
	    //           });
	    //       },
	    //       dataType: 'json'
	    //     });
	        
	    //     return false;
	    // });

    });
</script>

</body>
</html>