<?php  
/* 
Template Name:aboutus
*/  
?> 


<?php get_header(); ?>
<div class="maim_pages">
   <div class="main3"> 
  <?php if (get_option('mytheme_case_title')!=""): ?>
     <img class="bt_img" src="<?php echo get_option('mytheme_case_title'); ?>" alt="关于我们-<?php bloginfo('name'); ?>" />
   <?php else : ?>    
   <img class="bt_img" src="<? bloginfo('template_url'); ?>/images/pages/about_tu_07.gif" alt="关于我们-<?php bloginfo('name'); ?>" />
   <?php endif; ?>
    <ul class="all_nav2">
        <li><a href="#">首页</a>></li>
        <li><a href="#">关于我们</a>></li>
     </ul>
    <div class="leftmain5">
    <div class="news_show">
  
    
      <div class="about_wen2">

    
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
       
     <?php the_content(); ?>
    
      
           <?php endwhile; ?> 
          
      



	<?php else : ?>
        

 <?php  endif; ?>   

         
     </div>
            

   </div>
    
    
    </div>
    
    
    
    <div class="rightmain2">
    <?php include_once("sidebar.php"); ?>
    </div>
   
   
   
   </div>
     <img class="shadow_2" src="<? bloginfo('template_url'); ?>/images/pages/shadouw.png" />  
</div>




<?php get_footer(); ?>
