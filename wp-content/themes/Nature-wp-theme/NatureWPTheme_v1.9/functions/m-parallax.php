

            <section id="container-dm" class="container portfolio">

                    <?php
                    foreach (get_oak_star_videos() as $video):
                                ?>
                        <div class="event pull-left well" title="<?php echo ''.$video['desc'].'';?>" data-masonry-options='{ "columnWidth": 200, "itemSelector": ".event" }'>
                            <?php
                            echo '<h3>' .$video['title']. '</h3>';
                            echo do_shortcode('[video_lightbox_youtube video_id='.$video["link"].' width="100%" height="100%" anchor='.$video["link"].']');
                            echo '</div>'
                            ?>
                        </div>
                    <?php
                    endforeach;
                    ?>

            </section>

