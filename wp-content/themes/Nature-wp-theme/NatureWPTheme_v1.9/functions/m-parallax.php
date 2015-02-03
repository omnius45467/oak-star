<?php

/*
Template name: Parallax page template
*/
global $nature_mt; ?>

<section id="newsletter" class="newsletter">
    <div class="container-fluid">

        <div class="row-fluid">
            <div class="portfolio">
                <div id="og-grid"class="og-grid">
                        <ul class="list-inline">
                            <?php
                            foreach (get_oak_star_videos() as $video):
                                ?>
                            <?php
                                echo "<li class='parallax-item'>";
                                echo '<h3>' .$video['title']. '</h3>';
                                echo '<h5 style="color:#457;">'.$video['desc'].'</h5>';
                                echo do_shortcode('
                                    [video_lightbox_youtube video_id='.$video["link"].' width="100%" height="100%" anchor='.$video["link"].']
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