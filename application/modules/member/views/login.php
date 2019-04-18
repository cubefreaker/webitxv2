<?php $this->load->view('template/landingpage/head') ?>
<body>  
<?php $this->load->view('template/landingpage/nav') ?>

	<section class="main-section container-fluid" ng-controller="LoginController" style="margin-top: 5%">
	    <div class="row" style="margin-top: 10px;">
	        <div class="col-sm-8 col-md-8" style="text-align: center;">
          <h1 style="text-align: center;">Why Must Join ITX?</h1>
            <div class="row">
              <div class="col-md-4">
                <div class="thumbnail">
                  <img src="" alt="">
                  <h3>Buyer Management</h3>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur placeat dicta eum ea? Nesciunt eveniet, saepe quod cum vitae labore ipsam commodi dicta, impedit voluptatem nulla atque vel, provident voluptates?</p>
                
                </div>
                <!-- <label>Buyer Management</label>                 -->
              </div>
              <div class="col-md-4">
                <div class="thumbnail">
                  <img src="" alt="">
                  <h3>Seller Management</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur ipsam repudiandae non animi? Architecto vitae quia atque exercitationem sed corporis optio consequuntur inventore error quod deserunt, delectus iure perferendis? Laborum!</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="thumbnail">
                  <img src="" alt="">
                  <h3>Price Management</h3>
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt rerum molestias illum voluptatibus consectetur, assumenda nobis nam nihil velit. Sed impedit sapiente obcaecati quis libero molestiae quidem repellendus commodi ullam?</p>
                </div>
              </div>
            </div>
            <div class="row" style="margin-top: 10px;">
              <div class="col-md-4">                
                <div class="thumbnail">
                  <img src="" alt="">
                  <h3>Data Analytics</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae quasi maxime sit? Ullam deleniti, quos ratione illo veniam natus fugiat numquam quibusdam doloremque facilis consequuntur? Nam repellendus error minus recusandae?</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="thumbnail">
                  <img src="" alt="">
                  <h3>Aplication Program Interface</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus autem, mollitia aut facere, veniam, ab excepturi praesentium sapiente voluptatum ipsam doloremque illo! Obcaecati recusandae atque facere veniam, repellat blanditiis tempore.</p>
                </div>                
              </div>
              <div class="col-md-4">
                <div class="thumbnail">
                  <img src="" alt="">
                  <h3>Dashboard</h3>
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. A laudantium odio expedita nesciunt impedit deleniti aliquid quis sed vel. Fugit vel earum quaerat tempora voluptatem quasi repellendus quidem eveniet nesciunt!</p>
                </div>      
              </div>
            </div>
          </div>
	        <!-- End of col-sm-5 -->
          <div class="col-sm-4 col-md-4" style="padding-right:5%;padding-left:5%;">
          <form name="logfrm" method="post" action="<?=base_url('member/login')?>" style="margin: 0px; padding:0px;">
          <h1>Login</h1>
          <div class="form-group">
	                    <label>Email</label>
	                    <input type="email" name="email" required class="form-control">
	                    <input type="hidden" name="act" value="login">
                      <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
	                </div>
	                <div class="form-group">
	                    <label>Password</label>
	                    <input type="password" name="password" required class="form-control">
	                </div>
	                <button type="submit" class="btn btn-danger btn-block">
	                    Login
	                </button>
          </div>
          </form>
	        <!-- <div class="col-sm-4 col-md-4" style="padding-right:5%;padding-left:5%;">
	            <form name="logfrm" method="post" action="<?=base_url('member/login')?>">
	                <h3>Already Member</h3>
	                <h5>login to make everything easier</h5>

	                <div class="form-group">
	                    <label>Email</label>
	                    <input type="email" name="email" required class="form-control">
	                    <input type="hidden" name="act" value="login">
                      <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
	                </div>
	                <div class="form-group">
	                    <label>Password</label>
	                    <input type="password" name="password" required class="form-control">
	                </div>
	                <div class="checkbox">
	                  <label><input name='remember_me' type="checkbox" value="">Remember me</label> -->
	                  <!-- <a href="forgot.php" class="forgot">Lost your password?</a> -->
	                <!-- </div>
	                <button type="submit" class="btn btn-danger btn-block">
	                    Login
	                </button>
                  
	            </form>
	        </div> -->
	        <!-- End of col-sm-6 -->
	    </div>
	    <!-- End of row -->
	</section>
	    
	<?php $this->load->view('template/loader/preloader') ?>
  
  <?php $this->load->view('template/landingpage/footer', $footerPage) ?>

  <script src="<?=base_url()?>assets/js/jquery.min.js"></script>
<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>assets/js/nav.js"></script>
<script src="<?=base_url()?>assets/js/slick.min.js"></script>
<script src="<?=base_url()?>assets/js/login.js"></script>

<script type="text/javascript">
function stopLoading() {
  $('.page_preloader').fadeOut(800);

  $('body, html').css({
      'overflow' : 'auto',
      'max-width' : 'none',
      'max-height' : 'none'
  });
}

var getCookiebyName = function(name){
  var pair = document.cookie.match(new RegExp(name + '=([^;]+)'));
  return !!pair ? pair[1] : null;
};

$(document).ready(function() {
    $('.btn-register').click(function() {
        $('#regfrm').trigger("click");
    });
    
    $('#regfrm').on('submit', function(e) {
        e.preventDefault();
        
        var pass1=$('#pass1').val();
        var pass2=$('#pass2').val();
        if(pass1 != pass2) {
          swal({
            title: "Error",
            text: "Password doesn't match",
            type:"error"
          });
          return false;
        }
        
        $('.page_preloader').css('opacity', '0.8');
        $('.page_preloader').css('z-index', '9999');
        $('.page_preloader').css('display', 'block');
        
        $.ajax({
          type: "POST",
          url: "<?=base_url('member/register')?>",
          data: $('#regfrm').serialize(),
          headers: { 'X-CSRF-TOKEN': getCookiebyName('5f05193eee9e900380c12e6040e7dee9') },
          success: function(resp){
            stopLoading();
            if (resp.status) {
              swal({
                title: "Success",
                text: "Registration success!",
                type: "success",
                allowOutsideClick: true,
                confirmButtonText: "OK"
              }).then(function() {
                location.reload();
              }, function(dismiss) {
                location.reload();
              });
            }
            else {
              swal({
                title: "Error",
                text: resp.message,
                type:"error"
              });
            }
          },
          error: function(errResp) {
            stopLoading();
            swal({
                title: "Error",
                text: "Please try again later",
                type:"error"
              });
          },
          dataType: 'json'
        });
    });
    
<?php if ($error): ?>
    setTimeout(function(){
      swal({
          title: "Error",
          text: "<?php echo $error;?>",
          type:"error"
        });
    },500);
<?php endif;?>
});
</script>

<script type="text/javascript">
    var urlSearch = "<?=base_url('flight/search')?>";
    
    app.filter('range', function() {
      return function(input, min, max) {
        min = parseInt(min);
        max = parseInt(max);
        for (var i=min; i<max; i++)
          input.push(i);
        return input;
      };
    });

    app.controller('LoginController', function ($scope, $filter, $window, $http) {


  });
</script>
</body>

</html>