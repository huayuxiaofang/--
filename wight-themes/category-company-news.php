<?php get_header(); ?>
<div class="maim_pages">
   <div class="main3"> 
    <?php if (get_option('mytheme_news_title')!=""): ?>
     <img class="bt_img" src="<?php echo get_option('mytheme_news_title'); ?>" alt="新闻动态-<?php bloginfo('name'); ?>" />
   <?php else : ?>    
   <img class="bt_img" src="<? bloginfo('template_url'); ?>/images/pages/news-list_07.gif" alt="新闻动态-<?php bloginfo('name'); ?>" />
   <?php endif; ?>
 
    <ul class="all_nav2">
        <li><a href="#">首页</a>></li>
        <li><a href="#">关于我们</a>></li>
     </ul>
    <div class="leftmain5">
    <div class="news_show">
  
    
      <div class="about_wen2">

  
    
    <ul>
    
     <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
       <li>
             <a class="bt" href="<?php the_permalink() ?>"> <h1><?php the_title(); ?> </h1></a>
             <a class="time" href="#"><?php the_time('m-d-y') ?></a>
         
         </li>
      
       <?php endwhile; ?>     
          
      



	<?php else : ?>
         <li>
             <a class="bt" href="#"> <h1>奢华风吹艳长沙婚庆市场 </h1></a>
             <a class="time" href="#">2012-5-30</a>
         
         </li>
         
          <li>
             <a class="bt" href="#"> <h1>奢华风吹艳长沙婚庆市场 </h1></a>
             <a class="time" href="#">2012-5-30</a>
         
         </li>
         
            <li>
             <a class="bt" href="#"> <h1>奢华风吹艳长沙婚庆市场 </h1></a>
             <a class="time" href="#">2012-5-30</a>
         
         </li>
         
            <li>
             <a class="bt" href="#"> <h1>奢华风吹艳长沙婚庆市场 </h1></a>
             <a class="time" href="#">2012-5-30</a>
         
         </li>
         
            <li>
             <a class="bt" href="#"> <h1>奢华风吹艳长沙婚庆市场 </h1></a>
             <a class="time" href="#">2012-5-30</a>
         
         </li>
         
                <li>
             <a class="bt" href="#"> <h1>奢华风吹艳长沙婚庆市场 </h1></a>
             <a class="time" href="#">2012-5-30</a>
         
         </li>
         
         
                <li>
             <a class="bt" href="#"> <h1>奢华风吹艳长沙婚庆市场 </h1></a>
             <a class="time" href="#">2012-5-30</a>
         
         </li>
         
         
                <li>
             <a class="bt" href="#"> <h1>奢华风吹艳长沙婚庆市场 </h1></a>
             <a class="time" href="#">2012-5-30</a>
         
         </li>
         
         
                <li>
             <a class="bt" href="#"> <h1>奢华风吹艳长沙婚庆市场 </h1></a>
             <a class="time" href="#">2012-5-30</a>
         
         </li>
         
         
        <?php  endif; ?>   

         
    </ul>
            
             
    <div class="pager">   <?php par_pagenavi(); ?>  </div>
  
  

         
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
