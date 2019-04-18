<footer>
    <div class="footer-container row">
        <?php
        for ($position=1; $position <= 2; $position++) { // for position
            $title = array_filter($footerPage, function ($var) use ($position) {
                return ($var['position'] == $position);
            });
            echo "<div class='col-sm-3 col-xs-6'>";
            if ($title) {
                foreach ($title as $value) {
                    foreach ($value['title'] as $keyTitle => $valueTitle) {
                        echo "<div class='mb_20'><h5>".$valueTitle['title']->seourl."</h5><ul>";
                        foreach ($valueTitle['subTitle'] as $keySubTitle => $valueSubTitle) {
                                echo"<li><a href='".base_url().'page/'.$valueSubTitle->seourl."'>".$valueSubTitle->nav_name."</a></li>";
                        } // end foreach subtitle
                        echo"</ul></div>";
                    } // end foreach title
                } // end foreach title filter
            } // end if title
            echo"</div>";
        } // end for position
        ?>

        <div class="col-sm-3 col-xs-12 footer-col-3 footer-contact">
            <h5><b><?=json_decode($masterLandingPage->contactus_contact_center)->title?></b></h5>
            <p>
                <?=json_decode($masterLandingPage->contactus_contact_center)->phone?> <br>
                <?=json_decode($masterLandingPage->contactus_contact_center)->email?>
            </p>
            <br>
            <h5><b><?=json_decode($masterLandingPage->contactus_tour_inquiries)->title?></b></h5>
            <p>
                <?=json_decode($masterLandingPage->contactus_tour_inquiries)->phone?> <br>
                <?=json_decode($masterLandingPage->contactus_tour_inquiries)->email?>
            </p>
            <br>
            <h5><b><?=json_decode($masterLandingPage->contactus_complain_compliment)->title?></b></h5>
            <p>
                <?=json_decode($masterLandingPage->contactus_complain_compliment)->phone?> <br>
                <?=json_decode($masterLandingPage->contactus_complain_compliment)->email?>
            </p>
        </div>

        <div class="col-sm-3 col-xs-12 footer-col-4 text-right">
            <p><?=$masterLandingPage->company_address?></p>
            <?php 
            $socials_icon= [
              '1' => 'fa fa-twitter',
              '2' => 'fa fa-instagram',
              '3' => 'fa fa-facebook',
              '4' => 'fa fa-google-plus',
            ];
            $socials = json_decode($masterLandingPage->contactus_socmed);
            $socials = (is_array($socials)) ? $socials : [];
            if (count($socials) > 0) : ?>
                <!-- <p class=" mt_40">Follow Us on:</p> -->
                <!-- <ul class="footer-socmed-list"> -->
                <?php
                foreach($socials as $vsoc):
                    if (isset($socials_icon[$vsoc->type])): ?>
                    <!-- <li>
                        <a href="<?=$vsoc->url?>" target="_blank">
                            <i class="<?=$socials_icon[$vsoc->type]?>" aria-hidden="true"></i>
                        </a>
                    </li> -->
                    <?php 
                    endif;  // end if socials
                endforeach;  // end foreach socials
            endif; //end if social_icon ?>
            </ul>
            <!-- <p class="copyright">&copy;2018, <?=$masterLandingPage->company_name?>.</p> -->
            <!-- <p class="copyright"><?=$masterLandingPage->company_address?>OPSIGO © 2018 All rights reserved</p> -->
        </div>
    </div>
</footer>

<script type='text/javascript' src="<?=base_url('assets/js/nav.js')?>"></script>
<script type='text/javascript' src="<?=base_url('assets/js/sweetalert2.min.js')?>"></script>
<script type='text/javascript' src="<?=base_url('assets/js/flight-search-angular.js')?>"></script>