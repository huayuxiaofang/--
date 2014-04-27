<?php get_header(); ?>
 <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/xuant2.js"></script>
<div class="maim_pages">
   <div class="main3" > 

    <ul class="all_nav2">
        <li><a href="#">首页</a>></li>
        <li><a href="#">企业案例</a>><a><?php the_title(); ?></a></li>
     </ul>

   <div class="new_tu" style="width:905px;">
   
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
         <div class="sing_bt">
			<h1><?php the_title(); ?></h1>
		     <a><?php the_time('m-d-y') ?></a>
         </div>
			<div class="entry">
				
				<?php the_content(); ?>

			
				
			
           <p><?php the_tags( 'Tags: ', ', ', ''); ?></p>
        
            <!-- Baidu Button BEGIN -->
    <div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare">
        <span class="bds_more">分享到：</span>
        <a class="bds_qzone"></a>
        <a class="bds_tsina"></a>
        <a class="bds_tqq"></a>
        <a class="bds_renren"></a>
		<a class="shareCount"></a>
    </div>
<script type="text/javascript" id="bdshare_js" data="type=tools" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
	document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + new Date().getHours();
</script>
<!-- Baidu Button END -->
            
            
 

		
	

			
		</div>



	<?php endwhile; endif; ?>
   </div>
       
   

   
   
   </div>
    <img class="shadow_2" src="<? bloginfo('template_url'); ?>/images/pages/shadouw.png" />
</div>




<?php get_footer(); ?>
