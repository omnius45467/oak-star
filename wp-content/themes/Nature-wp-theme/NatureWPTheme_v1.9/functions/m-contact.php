 <?php global $nature_mt; ?>
                <!-- Contact Form and Info -->
<div class="container">				
                <div class="row contact-row">
                    <!-- Contact Info -->
                    <div class="contact-info-span">
                        <div class="contact-info contact-centered">
                            <div>
                                <?php if(isset($nature_mt['contact_address']) && $nature_mt['contact_address'] != '') { ?>
                                    <div>
                                        <p><?php echo $nature_mt['contact_address'];?></p>
                                    </div>
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
                            <ul class="social">
                                <?php if(isset($nature_mt['twitter_url']) && $nature_mt['twitter_url'] != '') { ?>
                                    <li><a class="twitter" href="<?php echo $nature_mt['twitter_url'];?>">Twitter</a></li>
                                <?php } ?>
                                <?php if(isset($nature_mt['facebook_url']) && $nature_mt['facebook_url'] != '') { ?>
                                    <li><a class="facebook" href="<?php echo $nature_mt['facebook_url'];?>">Facebook</a></li>
                                <?php } ?>
                                <?php if(isset($nature_mt['rss_url']) && $nature_mt['rss_url'] != '') { ?>
                                    <li><a class="rss" href="<?php echo $nature_mt['rss_url'];?>">RSS</a></li>

                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
</div>
                <!-- Contact Form and Info -->