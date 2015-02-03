<?php
/*
Template name: Events Page Template
*/
global $nature_mt; ?>
<section id="events" class="events">
    <div class="container">
        <?php
        foreach (get_oak_star_events() as $events):
            ?>
            <?php
            echo '<h3>' .$events['title']. '</h3>';
            echo '<h5 style="color:#457;">'.$events['desc'].'</h5>';
            echo do_shortcode('
            ');

            ?>
            <br/>
        <?php
        endforeach;
        ?>
    </div>
</section>
<!-- parallax end -->

<!--
Shortcodes for the main file

[events-row]

[events title="Awesome Shows"  image="http://nature.metrothemes.me/wp-content/uploads/2013/06/service-1.png"  text="Lorem ipsum dolor slo onsec tueraliquet Morbi nec In Curabitur lreaoreet nisl lorem in pellente e vidicus pannel impirus sadintas" url="http://localhost:8080/wp-content/uploads/2015/01/blank1.pdf"]

[events title="Out of Town Shows"  image="http://nature.metrothemes.me/wp-content/uploads/2013/06/service-2.png"  text="Lorem ipsum dolor slo onsec tueraliquet Morbi nec In Curabitur lreaoreet nisl lorem in pellente e vidicus pannel impirus sadintas" url="http://localhost:8080/wp-content/uploads/2015/01/blank1.pdf"]

[events title="On Site Shows"  image="http://nature.metrothemes.me/wp-content/uploads/2013/06/service-3.png"  text="Lorem ipsum dolor slo onsec tueraliquet Morbi nec In Curabitur lreaoreet nisl lorem in pellente e vidicus pannel impirus sadintas" url="http://localhost:8080/wp-content/uploads/2015/01/blank1.pdf"]

[/events-row]
[other-service-row]

[other-service icon="http://nature.metrothemes.me/wp-content/uploads/2013/06/other-service-1.png" title="Design Therapy" text="Lorem ipsum dolor slo onsec designs tueraliquet Morbi nec In Curabitur nel"]

[other-service icon="http://nature.metrothemes.me/wp-content/uploads/2013/06/other-service-2-Copy.png" title="Design Therapy" text="Lorem ipsum dolor slo onsec designs tueraliquet Morbi nec In Curabitur nel"]

[other-service icon="http://nature.metrothemes.me/wp-content/uploads/2013/06/other-service-3.png" title="Design Therapy" text="Lorem ipsum dolor slo onsec designs tueraliquet Morbi nec In Curabitur nel"]

[other-service icon="http://nature.metrothemes.me/wp-content/uploads/2013/06/other-service-4.png" title="Design Therapy" text="Lorem ipsum dolor slo onsec designs tueraliquet Morbi nec In Curabitur nel"]

[/other-service-row]



-->