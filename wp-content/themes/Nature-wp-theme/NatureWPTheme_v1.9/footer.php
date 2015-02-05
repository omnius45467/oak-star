 <?php global $nature_mt; ?>
</div>
<!-- Footer -->
<footer>
    <section id="footer" class="footer">
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="col-sm-12 col-md-12 col-lg-12 footer-span">
                    <div class="scroll-top"><a href="#"></a></div>
                    <br/>
                    <?php if(isset($nature_mt['footer_text']) && $nature_mt['footer_text'] != '') { ?>
                    <p>&copy;<?php echo $nature_mt['footer_text'];?></p>
                    <?php } ?> 
                    <!-- Footer Social Icon -->
                    <ul class="social">                        
                <?php if(isset($nature_mt['twitter_url']) && $nature_mt['twitter_url'] != '') { ?>
                        <li><a class="twitter" href="<?php echo $nature_mt['twitter_url'];?>"></a></li>
                <?php } ?> 
                <?php if(isset($nature_mt['facebook_url']) && $nature_mt['facebook_url'] != '') { ?>
                        <li><i class="facebook"></i><a class="fa fa-facebook-square fa-2x facebook" href="<?php echo $nature_mt['facebook_url'];?>">Facebook</a></li>
                <?php } ?> 
                <?php if(isset($nature_mt['rss_url']) && $nature_mt['rss_url'] != '') { ?>
                        <li><i class="fa fa-instagram fa-5x"></i><a class="fa fa-instagram fa-2x rss" href="<?php echo $nature_mt['rss_url'];?>">RSS</a></li>

                <?php } ?>
                    </ul>
                    <!-- Footer Social Icon end -->
                </div>
            </div>
        </div>
    </section>
</footer>

<!-- Footer end -->
<?php global $nature_mt;
if(isset($nature_mt['integration_footer'])) echo $nature_mt['integration_footer'] . PHP_EOL; ?>

 <?php wp_footer(); ?>
  </body>
</html>