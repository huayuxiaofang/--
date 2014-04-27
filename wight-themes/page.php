


<?php get_header(); ?>
<div class="maim_pages">
   <div class="main3"> 
 
   
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
