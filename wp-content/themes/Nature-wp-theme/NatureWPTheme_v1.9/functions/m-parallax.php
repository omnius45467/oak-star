<?php
/*
Template name: Parallax page template
*/
global $nature_mt; ?>

<section id="newsletter" class="newsletter">
    <div class="container-fluid">

        <div class="row-fluid">
            <div class="col-lg-12">
                <div class="newsletter-box">
                        <ul class="og-grid">
                            <?php
                            //echo "<li class='parallax-item'>";
                            //echo do_shortcode('[types field="youtube-video-url" seporator=" " output="raw"][/types]');
                            //echo do_shortcode('[video_lightbox_youtube video_id="youtube-video-url" width="100%" height="100%" anchor="youtube-video-url"]');
                            //echo "</li>";
                            //$youtube = types_render_field("youtube_videos", array("raw"=>"true","separator"=>";"));
                            //for ($youtube_url = 1;$youtube_url <= 9; $youtube_url++) {
                            //echo "<li class='parallax-item'>Youtube Video:";
                            //echo "</li>";
                            //}
                            
                            ?>
                        </ul>
                    <?php
                        foreach (get_oak_star_videos() as $video):
                    ?>
                            <?php
                            echo do_shortcode("[video_lightbox_youtube video_id='<?php echo $video['link']; ?>' width='100%' height='100%' anchor='<?php echo $video['link']; ?>']");
                                ?>
                            <!--                            <iframe width="560" height="315" src="--><?php //echo $video['link']; ?><!--" frameborder="0" allowfullscreen></iframe>-->
                    <?php
                        endforeach;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- parallax end -->