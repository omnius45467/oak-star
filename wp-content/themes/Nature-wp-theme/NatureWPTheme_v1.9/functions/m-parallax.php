<?php global $nature_mt; ?>
<!-- Parallax -->
<section id="newsletter" class="newsletter">
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="col-lg-12">
                <div class="newsletter-box">
                    <?php if(isset($nature_mt['newsletter_text']) && $nature_mt['newsletter_text'] != '') { ?>
                        <?php echo $nature_mt['newsletter_text'];?>
                    <?php } ?>
                    <div class="newsletter-form">
                        <ul class="inline">
                            <li><span class="animated fadeIn"><?php echo do_shortcode( '[video_lightbox_youtube video_id="hn6pSo6ZNZQ" width="100%" height="100%" auto_thumb="1"]' );?></span></li>
                            <li><span class="animated fadeIn"><?php echo do_shortcode( '[video_lightbox_youtube video_id="hn6pSo6ZNZQ" width="100%" height="100%" auto_thumb="1"]' );?></span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Newsletter end -->