<?php $this->load->view('template/landingpage/head') ?>
<link href="<?=base_url()?>assets/css/member-dashboard.css" rel="stylesheet" type="text/css">
<link href="<?=base_url('assets/css/flight-book-pay.css')?>" rel="stylesheet" type="text/css">
<link href="<?=base_url('assets/css/main2.css')?>" rel="stylesheet" type="text/css">
<body>  
<?php $this->load->view('template/landingpage/nav') ?>

<section class="page_title">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 col-md-11 col-md-offset-1">
                <div class="page_title_section_holder">
                    <h1 class="xs_center">DASHBOARD</h1>
                    <div class="title_menu_holder hidden-xs">
                        <ul class="">
                            <li class="active">Dashboard</li>
                            <!-- <li id="mconfirmation">Payment Confirmation</li> -->
                            <li id="profoverview">User Profile Overview</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="transaction_holder" ng-controller="MemberController" ng-cloak>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-7 col-md-6 col-md-offset-1">
                <div class="profile-menu-wrapper">
                  <select class="profile-menu visible-xs" onchange="location = this.value;">
                    <option value="" hidden>Select Menu</option>
                    <option value="member.php">Dashboard</option>
                    <!-- <option value="member-conf.php">Payment Confirmation</option> -->
                    <option value="profile-overview.php">User Profile Overview</option>
                  </select>
                </div>
                <div class="">
                    <div class="inner_holder va_middle ib wd_half">
                        <div class="fl_left ib va_middle">
                            <h1 class=" semibold fs_18 lh_28 ls-1 color_dark_gray">Transaction History</h1>
                        </div>
                    </div>
                </div>
                <div style="clear:both"></div>
                <div class="list_holder">
                    <div ng-class="selectRow($index)" ng-click="selectTransaction($index)" data-id="transaction-{{data.OrderId}}" class="per_row_holder pointer" ng-repeat="data in List track by $index">
                        <!-- <div class="per_method_holder transfer">
                            <div class="btn_open_close">
                                <p class="avenir_demi fs_12 lh_25 color_dark_gray_2">Transaction</p>
                                <div class="plus_minus_holder tb absolute">
                                    <p class="avenir_demi fs_20 lh_30 tc va_middle"><span>+</span></p>
                                </div>
                            </div> -->
                            <div class="ib va_middle text_holder">
                                <div class="ib va_top">
                                    <p class=" semibold fs_14 ls-10 color_dark_gray">
                                        <span class=""> {{ data.FlightOrigin }} </span>
                                        <span class="">-</span>
                                        <span class=""> {{ data.FlightDestination }} {{ data.OrderCount > 1 ? '(2)' : ''}} </span>
                                    </p>
                                    <p class=" semibold fs_12 ls-10 color_light_gray">
                                        <!-- <span class=""> Flight, </span> -->
                                        <span class=""> {{ data.CreatedDateView }} </span>
                                    </p>
                                </div>
                                <div class="ib va_top">
                                    <p class=" semibold fs_14  ls-10 color_dark_gray orderid">
                                        <span class="">{{ data.OrderId }}</span>
                                    </p>
                                    <p class=" semibold fs_12  ls-10 color_red ">
                                        <span class="">{{ data.PaymentType }} - {{ data.BankName }}</span>
                                    </p>
                                </div>
                                <div class="ib va_top right">
                                    <p class=" semibold fs_12 ls-10 color_light_gray ib right">Total :</p>
                                    <p class=" semibold fs_14 ls-10 color_red ib right">{{ DefaultCurrency }}</p>
                                    <p class=" semibold fs_14 ls-10 color_red ib right money">{{ data.TotalPrice }}</p>
                                    <!-- <p class=" semibold fs_14 lh_14 ls-10 color_dark_gray right">Status :</p> -->
                                    <!-- <p class=" semibold fs_14 ls-10 color_red ib right"> {{ data.PaymentStatus }} </p> -->

                                    <p class=" semibold fs_14 lh_14 ls-10 fl_right" ng-style="PaymentColor(data.PaymentStatus, data.RsvStatus)">
                                        {{ data.PaymentStatus !='Expired' ? data.RsvStatus : 'Expired' }}    
                                    </p>
                                </div>
                            </div>
                        <!-- </div> -->
                    </div>
                </div>
                <div ng-if="List.length == 0" class="loading_holder center">
                    Tidak ada riwayat transaksi
                </div>
            </div>
            <div class="col-xs-12 col-sm-5 col-md-5">
                <div class="profile_overview_holder">
                    <h2 class="gotham_medium fs_18 lh_36 ls-30 mt_10">Transaction Overview</h2>
                    
                    <div class="mt_10 data active" ng-if="dataSelected">
                        <div class="data_inner_holder">
                            <div class="left_col ib va_top" style="width:30% !important">
                                <p class=" fs_14 lh_36 ls-50 color_red">Reservation :</p>
                            </div>
                            <div class="right_col ib">
                                <p class=" semibold fs_14 lh_36 ls-50">{{ dataSelected.CreatedDateView }}</p>
                            </div>
                            <div style="clear: both"></div>
                            <div class="left_col ib va_top" style="width:30% !important">
                                <p class=" fs_14 lh_36 ls-50 color_red">Order ID :</p>
                            </div>
                            <div class="right_col ib">
                                <p class=" semibold fs_14 lh_36 ls-50 orderid">{{ dataSelected.OrderId }}</p>
                            </div>
                            <div style="clear: both"></div>
                            <div class="left_col ib va_top" style="width:30% !important">
                                <p class=" fs_14 lh_36 ls-50 color_red">Booker :</p>
                            </div>
                            <div class="right_col ib">
                                <p class=" semibold fs_14 lh_36 ls-50"> {{ dataSelected.ContactName }} </p>
                            </div>
                            <div style="clear: both"></div>
                            <div class="left_col ib va_top" style="width:30% !important">
                                <p class=" fs_14 lh_36 ls-50 color_red">Email :</p>
                            </div>
                            <div class="right_col ib">
                                <p class=" semibold fs_14 lh_36 ls-50"> {{ dataSelected.ContactEmail }} </p>
                            </div>
                            <div style="clear: both"></div>
                            <div class="left_col ib va_top" style="width:30% !important">
                                <p class=" fs_14 lh_36 ls-50 color_red">Flight Type :</p>
                            </div>
                            <div class="right_col ib">
                                <p class=" semibold fs_14 lh_36 ls-50">
                                    {{ dataSelected.OrderCount > 1 ? 'Round Trip' : 'One Way' }}                                    
                                </p>
                            </div>
                            <div style="clear: both"></div>
                            <div class="left_col ib va_top" style="width:30% !important">
                                <p class=" fs_14 lh_36 ls-50 color_red">Total Payment :</p>
                            </div>
                            <div class="right_col ib">
                                <p class=" semibold fs_14 lh_36 ls-50">
                                    {{ dataSelected.TotalPrice }}
                                </p>
                            </div>
                            <div style="clear: both"></div>
                            <span ng-if="dataSelected.PaymentStatus != 'Expired'">
                                <div class="left_col ib va_top" style="width:30% !important">
                                    <p class=" fs_14 lh_36 ls-50 color_red">Pay Before :</p>
                                </div>
                                <div class="right_col ib">
                                    <p class=" semibold fs_14 lh_36 ls-50">
                                        {{ dataSelected.DueDate }}
                                    </p>
                                </div>
                                <div style="clear: both"></div>
                                
                                <div class="left_col ib va_top" style="width:30% !important">
                                    <p class=" fs_14 lh_36 ls-50 color_red">Transfer to :</p>
                                </div>
                                <div class="right_col ib">
                                    <p ng-repeat="bank in MasterBank" class=" semibold fs_14 lh_36 ls-50">
                                       {{ bank.name }}: {{ bank.rekening }} ({{ bank.rekening_name }})
                                   </p>
                               <hr style="margin:0px;">
                                </div>
                                <div style="clear: both"></div>
                            </span>
                        </div>


                        <div  class="view-detail-holder">

                            <div class="row">
                                <div class="col-md-12"> 

                                  <div ng-if="dataSelected.RsvStatus == 'Ticketed' " ng-click="DownloadTicket(dataSelected.OrderId, 0)" class="btn_view_detail tb col-md-4">
                                    <div class=" fs_12 color_red tc va_middle center">Download Ticket Depart</div>
                                  </div>

                                  <div ng-if="dataSelected.RsvStatus == 'Ticketed' && dataSelected.OrderCount > 1"  ng-click="DownloadTicket(dataSelected.OrderId, 1)" class="btn_view_detail tb col-md-4">
                                    <div class=" fs_12 color_red tc va_middle center">Download Ticket Return</div>
                                  </div>

                                  <div ng-if="dataSelected.PaymentStatusId < 2 && dataSelected.PaymentStatus != 'Expired' " ng-click="BackToPayment(dataSelected.OrderId)" class="btn_view_detail tb col-md-4" >
                                    <div class=" fs_12 color_red tc va_middle center">Back to Payment</div>
                                  </div>
                                </div>
                            </div>

                          <div style="clear: both;"></div>
                        </div>

                        <hr>

                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>

<?php $this->load->view('template/loader/preloader') ?>
<?php $this->load->view('template/landingpage/footer', $footerPage) ?>

<script type="text/javascript">
    "use strict";
    app.controller('MemberController', function (FlightSearch, $scope, $filter, $window, $http, $timeout ) {

        $scope.init = function(){
            $scope.List             = <?=json_encode($List)?>;
            $scope.DefaultCurrency  = "<?=DEFAULT_CURRENCY?>";
            $scope.MasterBank       = <?=json_encode($MasterBank)?>;
            $scope.dataSelected     = $scope.List.length > 0 ? $scope.List[0] : false;
            $scope.rowSelected      = $scope.List.length > 0 ? 0 : false;
        };

        (function () {
            $scope.init();
            $('.detail_day').show();
        })();
        
        $scope.BackToPayment = function(OrderId) {
            window.location.href = '<?=base_url("flight/backToPayment/")?>' + OrderId;
        }

        $scope.DownloadTicket = function(OrderId, Type) {
            window.open(baseUrl+'api/email/DownloadTicket?OrderId='+OrderId+'&Type='+Type);
        };


        $scope.selectTransaction = function (i){
            $scope.dataSelected = $scope.List[i];
            $scope.rowSelected = i;
        };

        $scope.PaymentColor = function(PaymentStatus, RsvStatus){
            if (PaymentStatus == 'Expired') {
                return {'color': 'grey'};
            }
            else {
                return {'color': 'green'};
            }
        };

        $scope.selectRow = function(i){
            if ($scope.rowSelected == i) {
                return "unread";
                // return {'background-color': 'grey !important'};
            }
            else {
                // return {'background-color': 'green !important'};
            }
        };

    });


    $(document).ready(function() {
        $('#profoverview').click(function() {
            window.location.href = '<?=base_url("member/profile")?>';
        });

        $('.per_method_holder .bank_holder, .per_method_holder .info_holder').hide();

            /*open close in payment transfer page*/
            $('.btn_open_close').click(function() {
                var this_bank = $(this).parent().find('.bank_holder');
            $('.per_method_holder .bank_holder, .per_method_holder .info_holder').slideUp(400);
            $('.plus_minus_holder span').text('+');
            if($(this_bank).is(':visible')){
                $(this).find('span').text('+');
                $(this).parent().find('.bank_holder, .info_holder').slideUp(400);
            } else {
                $(this).find('span').text('-');
                $(this).parent().find('.bank_holder, .info_holder').slideDown(400);
            }
        });
    });
</script>

</body>

</html>