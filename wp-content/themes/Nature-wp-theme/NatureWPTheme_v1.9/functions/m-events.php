<?php
/*
Template name: Events Page Template
*/
global $nature_mt; ?>
<section id="events" class="events">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <?php
                foreach (get_oak_star_events() as $events):
                    ?>
                    <?php
                    echo '<h3>' .$events['title']. '</h3>';
                    echo '<h5 style="color:#fff;">'.$events['desc'].'</h5>';
                    ?>
                <?php
                endforeach;
                ?>
            </div>
        </div>
    </div>
</section>
<!-- events end -->
