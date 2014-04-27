		<div id="footer">
             
             <div class="footer_main">
            <div class="di"></div>
                      <div class="f_m">  
                          <div class="f_xian">
                           <div class="f_bq">
                               <p>
                               <a>
                               版权所有copy@<?php echo date("Y"); echo " "; bloginfo('name'); ?>
                               <?php if (get_option('mytheme_beian')!=""): ?>
                              <?php echo get_option('mytheme_beian'); ?>
                              <?php else : ?>
                                湘ICP备11016964号 </a>    </p>
                              <?php endif; ?>      
                                
                            </div>
                            </div>
                            
                       </div>
             </div>
        
        
        
			
	

	</div>

	<?php wp_footer(); ?>
	
	<!-- Don't forget analytics -->
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/script.js"></script>
    <script type="text/javascript"  charset=utf-8 src="<?php bloginfo('template_url'); ?>/js/lrscroll.js"></script> 
</body>

</html>