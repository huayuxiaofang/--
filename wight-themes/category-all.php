<?php get_header(); ?>
<div class="maim_pages">
   <div class="main3" style="background:none;"> 

    <ul class="all_nav2">
        <li><a href="#">首页</a>></li>
        <li><a href="#">企业案例</a></li>
     </ul>

   <ul class="new_tu" style="width:922px;">
       
          <?php
$cat=get_category_by_slug('company-case'); //获取分类别名为 wordpress 的分类数据

?>
             
             
<?php if( $posts ) : ?>     
<?php foreach( $posts as $post ) : setup_postdata( $post ); ?>

   <li>
   <?php if(get_post_meta($post->ID, "推荐",true)):   ?>
       <div class="tuijian"> <img src="<? bloginfo('template_url'); ?>/images/new-tuijian.png" /></div>
       <?php else : ?>
        <?php endif; ?>  
        <a class="new_tu_img" href="<?php the_permalink() ?>"  > <span> <?php the_post_thumbnail('medium'); ?> </span> </a>  
        <h1><a href="<?php the_permalink() ?>"><?php echo mb_strimwidth(strip_tags($post->post_title), 0,40,"... :"); ?></a></h1>
         </li>

    <?php endforeach; ?>
    
    <?php else : ?>
       
       
       
        <li>
        <div class="tuijian"> <img src="<? bloginfo('template_url'); ?>/images/new-tuijian.png" /></div>
        <a class="new_tu_img" href="<? bloginfo('template_url'); ?>/images/ohters/index_25.gif"  rel="lightbox[set_3]" > <span> <img src="<? bloginfo('template_url'); ?>/images/ohters/index_25.gif" /></span> </a>  
        <h1><a>产品标题</a></h1>
         </li>
         
           <li>
             <div class="tuijian"> <img src="<? bloginfo('template_url'); ?>/images/new-tuijian.png" /></div>
        <a class="new_tu_img" href="<? bloginfo('template_url'); ?>/images/ohters/index_28.gif"  rel="lightbox[set_3]" > <span> <img src="<? bloginfo('template_url'); ?>/images/ohters/index_28.gif" /></span> </a>  
        <h1><a>产品标题</a></h1>
         </li>
         
           <li>
             <div class="tuijian"> <img src="<? bloginfo('template_url'); ?>/images/new-tuijian.png" /></div>
        <a class="new_tu_img" href="<? bloginfo('template_url'); ?>/images/ohters/tu1.jpg"  rel="lightbox[set_3]" > <span> <img src="<? bloginfo('template_url'); ?>/images/ohters/tu1.jpg" /></span> </a>  
        <h1><a>产品标题</a></h1>
         </li>
         
           <li>
            
        <a class="new_tu_img" href="<? bloginfo('template_url'); ?>/images/ohters/index_28.gif"  rel="lightbox[set_3]" > <span> <img src="<? bloginfo('template_url'); ?>/images/ohters/index_28.gif" /></span> </a>  
        <h1><a>产品标题</a></h1>
         </li>
         
           <li>
            
        <a class="new_tu_img" href="<? bloginfo('template_url'); ?>/images/ohters/tu1.jpg"  rel="lightbox[set_3]" > <span> <img src="<? bloginfo('template_url'); ?>/images/ohters/tu1.jpg" /></span> </a>  
        <h1><a>产品标题</a></h1>
         </li>
         
           <li>
           
        <a class="new_tu_img" href="<? bloginfo('template_url'); ?>/images/ohters/index_25.gif"  rel="lightbox[set_3]" > <span> <img src="<? bloginfo('template_url'); ?>/images/ohters/index_25.gif" /></span> </a>  
        <h1><a>产品标题</a></h1>
         </li>
         
            <li>
        <div class="tuijian"> <img src="<? bloginfo('template_url'); ?>/images/new-tuijian.png" /></div>
        <a class="new_tu_img" href="<? bloginfo('template_url'); ?>/images/ohters/index_25.gif"  rel="lightbox[set_3]" > <span> <img src="<? bloginfo('template_url'); ?>/images/ohters/index_25.gif" /></span> </a>  
        <h1><a>产品标题</a></h1>
         </li>
         
           <li>
             <div class="tuijian"> <img src="<? bloginfo('template_url'); ?>/images/new-tuijian.png" /></div>
        <a class="new_tu_img" href="<? bloginfo('template_url'); ?>/images/ohters/index_28.gif"  rel="lightbox[set_3]" > <span> <img src="<? bloginfo('template_url'); ?>/images/ohters/index_28.gif" /></span> </a>  
        <h1><a>产品标题</a></h1>
         </li>
         
           <li>
             <div class="tuijian"> <img src="<? bloginfo('template_url'); ?>/images/new-tuijian.png" /></div>
        <a class="new_tu_img" href="<? bloginfo('template_url'); ?>/images/ohters/tu1.jpg"  rel="lightbox[set_3]" > <span> <img src="<? bloginfo('template_url'); ?>/images/ohters/tu1.jpg" /></span> </a>  
        <h1><a>产品标题</a></h1>
         </li>
         
           <li>
            
        <a class="new_tu_img" href="<? bloginfo('template_url'); ?>/images/ohters/index_28.gif"  rel="lightbox[set_3]" > <span> <img src="<? bloginfo('template_url'); ?>/images/ohters/index_28.gif" /></span> </a>  
        <h1><a>产品标题</a></h1>
         </li>
         
           <li>
            
        <a class="new_tu_img" href="<? bloginfo('template_url'); ?>/images/ohters/tu1.jpg"  rel="lightbox[set_3]" > <span> <img src="<? bloginfo('template_url'); ?>/images/ohters/tu1.jpg" /></span> </a>  
        <h1><a>产品标题</a></h1>
         </li>
         
           <li>
           
        <a class="new_tu_img" href="<? bloginfo('template_url'); ?>/images/ohters/index_25.gif"  rel="lightbox[set_3]" > <span> <img src="<? bloginfo('template_url'); ?>/images/ohters/index_25.gif" /></span> </a>  
        <h1><a>产品标题</a></h1>
         </li>
   
      
       
      </ul>
         <div class="pager">   <?php par_pagenavi(); ?>  </div>

     <?php endif; ?>  

   
   
   </div>
    <img class="shadow_2" src="<? bloginfo('template_url'); ?>/images/pages/shadouw.png" />
</div>




<?php get_footer(); ?>
