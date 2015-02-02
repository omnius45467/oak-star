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
                            foreach (get_oak_star_videos() as $video):
                                ?>
                                <?php
                                echo "<li class='parallax-item'>";
                                echo $video['title'];
                                echo $video['desc'];
                                echo do_shortcode('
                                    [video_lightbox_youtube video_id="$video["link"]" width="100%" height="100%" anchor="$video["title"]"]
                                ');
                                echo "</li>";
                                ?>
                                <br/>
                            <?php
                            endforeach;
                            ?>
                        </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- parallax end -->