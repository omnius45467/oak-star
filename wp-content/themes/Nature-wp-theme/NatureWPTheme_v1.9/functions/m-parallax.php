<?php

/*
Template name: Parallax page template
*/
global $nature_mt; ?>

<section>
    <div class="container-fluid">

        <div class="row-fluid">
            <div class="portfolio">
                <div id="container-dm">

                            <?php
                            foreach (get_oak_star_videos() as $video):
                                ?>
                             <div class="event pull-left well" data-masonry-options='{ "columnWidth": 200, "itemSelector": ".event" }'>
                                 <?php

                                 echo '<h3>' .$video['title']. '</h3>';
                                 echo '<h5 style="color:#457;">'.$video['desc'].'</h5>';
                                 echo do_shortcode('
                                    [video_lightbox_youtube video_id='.$video["link"].' width="100%" height="100%" anchor='.$video["link"].']
                                ');
                                 echo '</div>'
                                 ?>
                             </div>   


                            <?php
                            endforeach;
                            ?>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- parallax end -->