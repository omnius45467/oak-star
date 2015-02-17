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

             </div>
 <!-- Contact Info End-->