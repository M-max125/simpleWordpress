<?php
/**
 * 
 * FOOTER template file
 * 
 * @package Shop&Drop theme
 */
?>




<footer>
   <div class="footer-top">
       <div class="container">
           <div class="row">
               
                <div class="col-md-3 col-sm-6 col-xs-12 segment-one dw-30 mc-5">
                    <h3><?php bloginfo('name');?></h3>
                    <p>This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum,
                        “Lorem ipsum dolor sit amet..”, comes from a line in section 1.10.32.</p>
               </div>
               
               <div class="col-md-3 col-sm-6 col-xs-12 segment-two dw-30 mc-5">
                        <h2>Useful Links</h2>
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location'=>'footer-menu'
                                
                            )
                            );
                        ?>
               </div>
               
               <div class="col-md-3 col-sm-6 col-xs-12 segment-three mc-5">
                    <h2>Follow Us</h2>
                    <p>Please follow us on our Social Media Profile in order to keep outdated.</p>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
               </div>
               
               <div class="col-md-3 col-sm-6 col-xs-12 segment-four mc-5">
                    <h2>Our Newsletter</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat animi repellendus autem quo distinctio corporis.</p>
                    <p>Enter your email:</p>
                    
                        <form action="">
                            <input type="email">
                            <input type="submit" value="Subscribe">
                        </form>
               </div>
           </div>
       </div>
   </div>
  
   <p class="footer-bottom-text"> All right reserved by &copy; <?php bloginfo('name');?> 2020</p>

</footer>


<?php wp_footer();?>
</body>
</html>