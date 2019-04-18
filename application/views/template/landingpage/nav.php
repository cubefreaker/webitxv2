<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="col-xs-12 col-md-10 col-md-offset-1">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button> -->
      <a class="navbar-brand desktop-only" href="<?=base_url()?>">
        <img src="<?=base_url()?>assets/images/logo/<?=$masterLandingPage->logo?>">
      </a>
      <a class="navbar-brand visible-xs" href="<?=base_url()?>">
        <img src="<?=base_url()?>assets/images/logo/<?=$masterLandingPage->logo?>">
      </a>
    </div>


    <ul class="nav-right pull-right">
      <?php if (count($navPage) > 0) { ?>
      <li  class="bg-red dropdown desktop-only">
          <a class="semibold" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <?php
              $navMore1 = array_filter($navPage[0], function ($var) {
                  return ($var->type_page == 'navmore1');
              });
              foreach ($navMore1 as $key => $value) {
               echo" <li><a href='".base_url().'page/'.$value->seourl."'>".$value->nav_name."</a></li>";
              }
              echo "<hr>";
              $navMore2 = array_filter($navPage[0], function ($var) {
                  return ($var->type_page == 'navmore2');
              });
              foreach ($navMore2 as $key => $value) {
               echo" <li><a href='".base_url().'page/'.$value->seourl."'>".$value->nav_name."</a></li>";
              }
            ?>
          </ul>
        </li>
      <?php }
        if ( !$this->ion_auth->logged_in() || ($this->ion_auth->is_admin()) )
        {
            // echo'<li><a href="'.base_url().'member/login">Login</a></li>';
            echo'
            <li class="sign-up">
            <a class="keep-color" href="">Home</a>
          <li class="sign-up">
            <a class="keep-color" href="">Promo</a>
          <li class="sign-up">
            <a class="keep-color" href="">Contact Us</a>
          <li class="sign-up">
            <a class="keep-color" href="">Contact Us</a>
          <li class="sign-up">
            <a class="keep-color" href="'.base_url("member/register").'">Register</a>
          </li>
            <li class="sign-up"><a href="'.base_url("member/login").'" class="keep-color">Login</a></li>';
        }
        else {
        $member = $this->ion_auth->user()->row();
        $memberUsername = $member->username;
         echo'
          <li class="sign-up">
          <a class="keep-color" href="">Home</a>
          <li class="sign-up">
            <a class="keep-color" href="">Promo</a>
          <li class="sign-up">
            <a class="keep-color" href="">Contact Us</a>
          </li>
            <li class="sign-up" style="padding: 18px">
            <div class="dropdown">
              <button class="keep-color" type="button" data-toggle="dropdown">
                Request
              </button>
              <ul class="dropdown-menu">
                <li><a class="keep-color" href="">As Seller</a></li>
                <li><a class="keep-color" href="">As Buyer</a></li>
                <li><a class="keep-color" href="">Data Analytic</a></li>
                <li><a class="keep-color" href="">Resource</a></li>
              </ul>
            </div>
          </li>
          <li class="sign-up">
          <div class="dropdown">
            <button class="keep-color" type="button" data-toggle="dropdown">
              '.$memberUsername.'
            </button>
            <ul class="dropdown-menu">
              <li><a class="keep-color" href="'.base_url('member/index').'">Profile</a></li>
              <li><a class="keep-color" href="'.base_url('member/logout').'">Logout</a></li>
            </ul>
          </div>
          </li>
          ';
        }
      ?>
      
      
    </ul>


    <!-- Collect the nav links, forms, and other content for toggling -->
    <!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav pull-right">
      <?php
      if (count($navPage) > 0) {
        $navTitle = array_filter($navPage[0], function ($var) {
            return ($var->type_page == 'nav');
        });
        foreach ($navTitle as $key => $value) {
         echo"<li><a href='".base_url().'page/'.$value->seourl."'>".$value->nav_name."</a></li>";
        }
      }
      ?> -->
      <!-- <li><a href="<?=base_url('member/dashboard')?>">Transaction History</a></li> -->

      <!-- <li class="mobile-only"><a href="umroh.php">Umroh</a></li>
      <li class="mobile-only"><a href="inbound-service.php">Inbound Service</a></li>
      <li class="mobile-only"><a href="why-we-are.php">Why We Are</a></li>
      <li class="mobile-only"><a href="why-join-us.php">Why Join Us</a></li>
      <li class="mobile-only"><a href="career.php">Careers</a></li>    -->           
      <!-- </ul> -->
    <!-- </div> -->
    <!-- /.navbar-collapse -->

  </div>
  </div><!-- /.container-fluid -->
</nav><!-- /.navbar-default -->