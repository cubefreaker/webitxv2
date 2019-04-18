<?php $this->load->view('template/landingpage/head') ?>
<body>  
<?php $this->load->view('template/landingpage/nav') ?>

<div class="container-fluid">
    <div class="row header-page">
        <div class="col-sm-10 col-sm-offset-1">
            <h3><?=$pageDetail->nav_name?></h3>
        </div>
    </div>
</div>

<!-- <img style="max-height: 375px; max-width: 1263px;" class="img-header" src="<?=base_url("/assets/images/page/$pageDetail->imgcover")?>"> -->

<!-- <section class="page_title">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 col-md-11 col-md-offset-1">
                <div class="page_title_section_holder">
                    <h1 class="xs_center"><?=$pageDetail->nav_name?></h1>
                </div>
            </div>
        </div>
    </div>
</section> -->

<?php if ($pageDetail->imgcover) { ?>
    <section style="background: url('<?=base_url("/assets/images/page/$pageDetail->imgcover")?>') center no-repeat; background-size: cover; height: 375px;">
        <div class="container-fluid">
            <div class="row clearfix">
            </div>
        </div>
    </section>
<?php } ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1 header-link">
            <a href="<?=base_url()?>">Home /</a> <a><span><?=$pageDetail->nav_name?></span></a>
        </div>
    </div>
</div>

<section class="section-content container-fluid">
     <div class="row">
        <div class="col-sm-8 col-sm-offset-2 header-link">
            <h3 class="title"><?=$pageDetail->name?></h3>
            <h4 class="subtitle"><?=$pageDetail->subtitle?></h4>
            <?=$pageDetail->description?>
        </div>
    </div>
</section>


<?php $this->load->view('template/landingpage/footer', $footerPage) ?>

</body>
</html>