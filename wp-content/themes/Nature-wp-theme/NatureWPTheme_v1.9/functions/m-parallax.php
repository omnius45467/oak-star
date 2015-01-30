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
                            echo "<li class='parallax-item'>";
                            echo do_shortcode('[types field="youtube-video-url" output="raw"][/types]');

                            echo "</li>";
//                            $youtube = types_render_field("youtube_videos", array("raw"=>"true","separator"=>";"));
//                            for ($youtube_url = 1;$youtube_url <= 9; $youtube_url++) {
//                                echo "<li class='parallax-item'>Youtube Video:";
//                                echo do_shortcode('[video_lightbox_youtube video_id="$youtube_url" width="100%" height="100%" anchor="http://www.example.com/images/youtube-thumb.jpg"]');
//                                echo "</li>";
//                            }
                            ?>
                        </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- parallax end -->