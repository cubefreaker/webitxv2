<?php $this->load->view('template/landingpage/head') ?>
<body>  
<?php $this->load->view('template/landingpage/nav') ?>

<div class="container-fluid" style="margin: 5%; border:1px solid #cecece;">
    <div style="text-align: center;">
        <h1>Web Tagline</h1>
    </div>
    
</div>

<div class="container-fluid" style="margin: 5%;">
    <div class="row" style="text-align: center;">
        <div class="col-md-4 thumbnail"><a href="">thumbnail 1</a></div>
        <div class="col-md-4 thumbnail"><a href="">thumbnail 2</a></div>
        <div class="col-md-4 thumbnail"><a href="">thumbnail 3</a></div>
    </div>
</div>

<?php $this->load->view('template/loader/preloader') ?>
  
<?php $this->load->view('template/landingpage/footer', $footerPage) ?>

<script src="<?=base_url()?>assets/js/jquery.min.js"></script>
<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>assets/js/nav.js"></script>
<script src="<?=base_url()?>assets/js/slick.min.js"></script>