 <?php
 /*
Template name: Contact Page Template
*/
 global $nature_mt; ?>
         <!-- Contact Info -->
             <div class="contact-info contact-centered">
                 <?php if(isset($nature_mt['contact_address']) && $nature_mt['contact_address'] != '') { ?>
                     <h4><?php echo $nature_mt['contact_address'];?></h4>
                 <?php } ?>
                 <h4>
                     <?php if(isset($nature_mt['phone']) && $nature_mt['phone'] != '') { ?>
                         Phone: <?php echo $nature_mt['phone'];?>
                     <?php } ?>
                     <br>
                     <?php if(isset($nature_mt['fax']) && $nature_mt['fax'] != '') { ?>
                         Fax: <?php echo $nature_mt['fax'];?>
                     <?php } ?>
                     <br>
                     <?php if(isset($nature_mt['web']) && $nature_mt['web'] != '') { ?>
                     <a href="<?php echo $nature_mt['web'];?>"><?php echo $nature_mt['web'];?></a>
                 </h4>
             <?php } ?>
                 <ul class="social" style="margin-right:43px;">
                     <?php if(isset($nature_mt['twitter_url']) && $nature_mt['twitter_url'] != '') { ?>
                         <li><a class="fa fa-twitter-square fa-5x" href="<?php echo $nature_mt['twitter_url'];?>"></a></li>
                     <?php } ?>
                     <?php if(isset($nature_mt['facebook_url']) && $nature_mt['facebook_url'] != '') { ?>
                         <li><a class="fa fa-facebook-square fa-5x" href="<?php echo $nature_mt['facebook_url'];?>"></a></li>
                     <?php } ?>
                     <?php if(isset($nature_mt['rss_url']) && $nature_mt['rss_url'] != '') { ?>
                         <li><a class="fa fa-instagram fa-5x" href="<?php echo $nature_mt['rss_url'];?>"></a></li>
                     <?php } ?>
                 </ul>
             </div>
 <!-- Contact Info End-->