<?php get_header(); ?>

  
  
 <!--ijaoover-->

<div class="maim">
   <div class="main2">
       <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/xuant.js"></script>
       
       
   <div class="jiao">
   
   <DIV id=imgPlay>
<UL class=imgs id=actor>
<?php if (get_option('mytheme_about_img6')!=""): ?>
 <LI> <img src="<?php echo get_option('mytheme_about_img6'); ?>" /></LI>
  <?php else : ?>  
      <?php endif; ?> 
      
      
      <?php if (get_option('mytheme_about_img7')!=""): ?>
 <LI> <img src="<?php echo get_option('mytheme_about_img7'); ?>" /></LI>
  <?php else : ?>  
      <?php endif; ?> 
      
      
      <?php if (get_option('mytheme_about_img8')!=""): ?>
 <LI> <img src="<?php echo get_option('mytheme_about_img8'); ?>" /></LI>
  <?php else : ?>  
      <?php endif; ?> 
      
      <?php if (get_option('mytheme_about_img9')!=""): ?>
 <LI> <img src="<?php echo get_option('mytheme_about_img9'); ?>" /></LI>
  <?php else : ?>  
      <?php endif; ?> 
 
 <?php if (get_option('mytheme_about_img0')!=""): ?>
 <LI> <img src="<?php echo get_option('mytheme_about_img0'); ?>" /></LI>
  <?php else : ?>  
      <?php endif; ?> 
 
  
  
</UL>


<DIV class=prev><img src="<? bloginfo('template_url'); ?>/images/prev.png" /></DIV>
<DIV class=next><img src="<? bloginfo('template_url'); ?>/images/next.png" /></DIV></DIV>
   
   
   </div>
   
   
   
   
   
       







          <div class="news_in">
          <div id="s3" class="scrollDiv">
            <ul>

        <?php
$cat=get_category_by_slug('zhiding'); //获取分类别名为 wordpress 的分类数据

?>
             
                   <?php $posts = get_posts( "category=$cat->term_id&numberposts=16" ); ?>
                     <?php if( $posts ) : ?>     
                     <?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
             <li>
                 <a title="<?php the_title(); ?>" href="<?php the_permalink() ?>"><h1><b>NEWS:</b><?php the_title(); ?></h1>
               <p><?php echo mb_strimwidth(strip_tags($post->post_title), 0,20,"... "); ?> </p>
             </a>
             </li>
             
           <?php endforeach; ?>
    
    <?php else : ?>  
      <?php endif; ?>  
   
             </ul>
</div>
<span id="btn2">[下一条>>]</span> 	
 </div>
           
     <div class="main2">
     
     
     <div class="leftmain">
       <ul class="new_tu">
       
       <?php
$cat=get_category_by_slug('company-case'); //获取分类别名为 wordpress 的分类数据

?>
             
                   <?php $posts = get_posts( "category=$cat->term_id&numberposts=8" ); ?>
                     <?php if( $posts ) : ?>     
                     <?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
       
        <li>
         <?php if(get_post_meta($post->ID, "推荐",true)):   ?>
        <div class="tuijian"> <img src="<? bloginfo('template_url'); ?>/images/new-tuijian.png" /></div>
         <?php else : ?>
        <?php endif; ?>  
        
        <a class="new_tu_img" href="<?php the_permalink() ?>"> <span> <?php the_post_thumbnail('medium'); ?></span> </a>  
        <h1><a href="<?php the_permalink() ?>"><?php echo mb_strimwidth(strip_tags($post->post_title), 0,20,"... "); ?></a></h1>
         </li>
         
         
       <?php endforeach; ?>
    
    <?php else : ?>  
      <?php endif; ?>  
      </ul>
     
     </div>    
     
     
       <div class="rightmain">
           <div class="about_index"> 
           <b>WHAT WE CAN DO </b>
           <h1>我们能为您做的</h1>
           <P>   <?php 
                      $name = 'about-us'; //page别名
                      global $wpdb;
                      $page_id = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = '$name'");
                      $page_data = get_page( $page_id )->post_content;?>
                <?php      echo   mb_strimwidth(strip_tags( $page_data), 0,380,"..."); ?></P>
                
                <a href="<? echo get_page_link( $page_id ); ?>" class="about_index_btn" >去看看</a>
           </div>
           
           <div class="about_index">
                       
          



<?php if (get_option('mytheme_about_tit1')!=""): ?>
<ul class="box1 bo1">
<h1><?php echo get_option('mytheme_about_tit1'); ?> </h1>
<li class="text1 te1">

  <p><?php echo  mb_strimwidth(get_option('mytheme_about_text1'),0,120,"...") ?> 

</p>

</li>
</ul>  


 <?php else : ?>
<ul class="box1 bo1">
<h1>精致的设计 </h1>
<li class="text1 te1">

  <p>主题公园出品的网站模板，都是经过设计师小组讨论，反复的视觉审核，前端工程师纯手写代码，繁复验证，确保每一个网站主题（模板）都是精品！主题公园出品的网站模板，都是经过设计师小组讨论，反复的视觉审核，前端工程师纯手写代码，繁复验证，确保每一个网站主题（模板）都是精品！<br />
 付费的网站主题（模板）是一种高效快捷的建站方式，能够为您节约大量的成本，这些成本包括繁复的开发流程，反复拖延的项目周期，与开发公司的痛苦周旋以及大笔的资金。

</p>

</li>
</ul>  

 <ul class="box1 bo2">
<h1>简单的操作 </h1>
<li class="text1 te2" >
  <p>主题公园的模板（主题）制作，是以使用者的自身体验为基础来设计的，我们在制作这项工程的时候，会设身处地的为使用者着想，主题的所有文字都是可以在后台修改的，避免使用者接触令人头疼的编码。主题公园的模板（主题）制作，是以使用者的自身体验为基础来设计的，我们在制作这项工程的时候，会设身处地的为使用者着想，主题的所有文字都是可以在后台修改的，避免使用者接触令人头疼的编码。</p>

</li>
</ul>  
 
  
 
          
 <ul class="box1 bo3">
<h1>手写的前端 </h1>
<li class="text1 te3">
  <p>我们在制作主题（模板）的时候，前端工程师会把做好的前端反复测试，让我们的主题（模板）被所有的主流浏览器兼容，使访问者更加舒适的浏览网站，并且更适合搜索引擎的胃口，使收录几率大大提高。我们在制作主题（模板）的时候，前端工程师会把做好的前端反复测试，让我们的主题（模板）被所有的主流浏览器兼容，使访问者更加舒适的浏览网站，并且更适合搜索引擎的胃口，使收录几率大大提高。</p>

</li>
</ul>     
 
   <?php endif; ?>     
     
     
 <?php if (get_option('mytheme_about_tit2')!=""): ?>
      <ul class="box1 bo2">
<h1><?php echo get_option('mytheme_about_tit2'); ?></h1>
<li class="text1 te2" >
  <p><?php echo  mb_strimwidth(get_option('mytheme_about_text2'),0,120,"...") ?></p>

</li>
</ul>  
   
   <?php else : ?>
            
          <?php endif; ?>   
   
    
    <?php if (get_option('mytheme_about_tit3')!=""): ?>
    <ul class="box1 bo3">
<h1><?php echo get_option('mytheme_about_tit3'); ?> </h1>
<li class="text1 te3">
  <p><?php echo  mb_strimwidth(get_option('mytheme_about_text3'),0,120,"...") ?></p>

</li>
</ul>         
       
   <?php else : ?>
           
       <?php endif; ?>          
                 
 
           
           
           
           </div>
       
       </div>  
           
           

       <div class="news_in2">
          <img class="contact_img" src="<? bloginfo('template_url'); ?>/images/contact_in_22.gif" />
          <div class="contact_wen">
          <p><b>电话：</b><?php echo get_option('mytheme_tell'); ?> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  <b>传真：</b><?php echo get_option('mytheme_fax'); ?></p>
         
          <p><b>电子邮件：</b><?php echo get_option('mytheme_mail'); ?>  &nbsp; &nbsp; &nbsp; <b>QQ：<?php echo get_option('mytheme_qq'); ?></b></p>
         
          <p><b>联系地址：</b><?php echo get_option('mytheme_dizhi'); ?></p>
          
          </div>
          </div>
          <img style=" float:left;" src="<? bloginfo('template_url'); ?>/images/shadow.png" />

   <div class="f_links">
                            
                               <li><h1>友情链接:</h1></li>
                              <?php wp_list_bookmarks('orderby=id&categorize=0&category=2&title_li='); ?>
                    
                            </div>
</div>


</div>







<?php get_footer(); ?>
