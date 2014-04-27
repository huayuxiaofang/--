<?php
/*添加主题选项*/
add_action('admin_menu', 'mytheme_page');
 
function mytheme_page (){
 
	if ( count($_POST) > 0 && isset($_POST['mytheme_settings']) ){
 
		$options = array (
		'keywords',
		'description',
		'analytics',
		
		'about_title',
		'about_cititle',
		
		'news_title',
		'news_cititle',
		
		'case_title',
		'case_cititle',
		
		'lx_title',
		'lx_cititle',
		
		'xianshi',

		'xiangce_bimg',
		'xiangce_img',
		'xiangce_url',
		'xiangce_tit',
		'xiangce_text',
		
		'about_img1',
		'about_url1',
		'about_tit1',
		'about_text1',
		
		'about_img2',
		'about_url2',
		'about_tit2',
		'about_text2',
		
		'about_img3',
		'about_url3',
		'about_tit3',
		'about_text3',
		
		'about_img4',
		'about_url4',
		'about_tit4',
		'about_text4',
		
		'about_img5',
		'about_url5',
		'about_tit5',
		'about_text5',
		
		'about_img6',
		'about_url6',
		'about_tit6',
		
		'about_img7',
		'about_url7',
		'about_tit7',
		
		'about_img8',
		'about_url8',
		'about_tit8',
		
		'about_img9',
		'about_url9',
		'about_tit9',
		
		'about_img0',
		'about_url0',
		'about_tit0',
		
		'beian',
		'dizhi',
		'tell',
		'fax',
		'mail',
		'qq',
		
	
		
		'ditu_tit',
		'ditu_cont',
		'ditu_zuob',
	
		'ditu_zuob3',
		
		'logo',
	
		
		
		);
 
		foreach ( $options as $opt ){
 
			delete_option ( 'mytheme_'.$opt, $_POST[$opt] );
 
			add_option ( 'mytheme_'.$opt, $_POST[$opt] );	
 
		}
 
	}
 
	add_theme_page(__('主题选项'), __('主题选项'), 'edit_themes', basename(__FILE__), 'mytheme_settings');
 
}
 //加载upload.js文件   
            wp_enqueue_script('my-upload', get_bloginfo( 'stylesheet_directory' ) . '/js/upload.js');   
            //加载上传图片的js(wp自带)   
            wp_enqueue_script('thickbox');   
            //加载css(wp自带)   
            wp_enqueue_style('thickbox');  
 
function mytheme_settings(){?>
 
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/xuanxiang.css" type="text/css" />
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/upload.js"></script> 
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.3.1.js"></script> 
     <script type="text/javascript">
// 收缩展开效果
$(document).ready(function(){

	$(".box h1").click(function(){
		$(this).next(".text").slideToggle("slow");
	})

	
});

$(document).ready(function(){

	$(".jiao_div h2").click(function(){
		$(this).nextAll("li").slideToggle("slow");
	})

	
});
</script>	
<div class="wrap">
 
<h2>主题选项</h2>
 <p>主题名称：浅白色百搭主题<br/>
主题版本：2.01<br/>
本主题由web主题公园倾力打造，感谢您使用web主题公园的主题，更多主题请访问：<a href="http://www.themepark.com.cn">http://www.themepark.com.cn</a><br/>
BUG提交，请进入web主题公园网站，在相关主题下留言即可，我们收到留言即将对bug进行评估并更新，感谢您的支持!<br />
优化后台"主题选项"的功能，现在可以在后台上传图片了，优化另外一些细节，希望你能喜欢。
<br />
2013-5-16更新信息：2.01更新，修复首页无法显示文章的bug，修复焦点图不能更新的bug
</p>
 
 <ul>
 
 <li class="box"> <h1>首选项</h1>
 <div class="text" style="display:none">
<form method="post" action="">
 
	<fieldset>
 
	<legend><strong>LOGO的图片地址</strong></legend>
 
              
         
				<div class="up">
           <input type="text" size="80"  name="logo" id="logo" value="<?php echo get_option('mytheme_logo'); ?>"/>   
            <input type="button" name="upload_button" value="上传" id="upbottom"/>   
    </div>        

 
				<em>请上传logo图片，图片格式为PNG（216像素 X45像素） logo主题为浅色最佳</em>
 

 
	<legend><strong>公司联系方式（显示在首页和联系我们页面）</strong></legend>
 
              
         <legend><strong>地址</strong></legend>
				<textarea name="dizhi" id="dizhi" rows="1" cols="70"><?php echo get_option('mytheme_dizhi'); ?></textarea><br />
 
				<em>示例：中华人民共和国北京市朝阳区星峰大厦</em>
      
       <legend><strong>电话</strong></legend>
				<textarea name="tell" id="tell" rows="1" cols="70"><?php echo get_option('mytheme_tell'); ?></textarea><br />
 
				<em>示例:0731-85787196</em>
                
                       <legend><strong>传真</strong></legend>
				<textarea name="fax" id="fax" rows="1" cols="70"><?php echo get_option('mytheme_fax'); ?></textarea><br />
 
				<em>示例：0731-85787193</em>
		
		       <legend><strong>电子邮件</strong></legend>
				<textarea name="mail" id="mail" rows="1" cols="70"><?php echo get_option('mytheme_mail'); ?></textarea><br />
 
				<em>示例：jack@gmail.com</em>
                
                       <legend><strong>	qq</strong></legend>
				<textarea name="qq" id="qq" rows="1" cols="70"><?php echo get_option('mytheme_qq'); ?></textarea><br />
 
		
         
				 <legend><strong>备案号</strong></legend>
				<textarea name="beian" id="beian" rows="1" cols="70"><?php echo get_option('mytheme_beian'); ?></textarea><br />
 
                  
				<em>示例：京备 8888-888</em>
				


	</fieldset>
 <fieldset>

     	<fieldset>
 
	<legend><strong>百度地图引用</strong></legend>
 <ul class="jiao_div">

  <li>
			<a>名称</a>	<textarea class="jiao" name="ditu_tit" id="ditu_tit" rows="1" cols="50"><?php echo get_option('mytheme_ditu_tit'); ?></textarea>
 </li>
 <li>
		<a>具体地址</a>	<textarea class="jiao" name="ditu_cont" id="ditu_cont" rows="1" cols="50"><?php echo get_option('mytheme_ditu_cont'); ?></textarea>
 </li>
  <li>
		<a>坐标X</a>	<textarea class="jiao" name="ditu_zuob" id="ditu_zuob" rows="1" cols="50"><?php echo get_option('mytheme_ditu_zuob'); ?></textarea>
        <a>坐标Y</a>	<textarea class="jiao" name="ditu_zuob3" id="ditu_zuob3" rows="1" cols="50"><?php echo get_option('mytheme_ditu_zuob3'); ?></textarea>
       
				
 </li>
 
   <li>
		
       
 </li>
 </ul>
              
			
         

 
				<em style="float:left; margin-top:60px;">默认为天安门地图，坐标获得方法：
                 <br /> 1.点击进入<A target="_blank" href="http://api.map.baidu.com/lbsapi/creatmap/index.html/">百度地图制作</A><br />2.点击侧边栏"定位中心点"，找到公司所在位置
               <br /> 3.点击"添加标注"，在地图上标注公司具体位置<br />
              <br />  4.回到定位中心点，如下图所示获取经纬度坐标，x、y对应填入对话框中保存即可:
              <br />  <img style="float:left; border:#F00 solid 2px;" src="<?php bloginfo('template_url'); ?>/images/shuoming.jpg" />
                

            
                </em>
 

	</fieldset>

    
  	<p class="submit">
 
		<input type="submit" name="Submit" class="button-primary" value="保存设置" />
 
		<input type="hidden" name="mytheme_settings" value="save" style="display:none;" />
 
	</p>
 


 


</div>
</li>
 
  <li class="box"> <h1>焦点图组件选项</h1>
 <div class="text" style="display:none">

 	
	
 
	
 
 	<fieldset class="jiao_e">
 <legend><strong>焦点图选项</strong></legend>
  <ul class="jiao_div">
  <h2>焦点图1<a>+点击开关</a></h2>
  <li>
            <img src="<?php echo get_option('mytheme_about_img6'); ?>" /><br />
			<a>图片地址</a>	
            
				<div class="up">
           <input type="text" size="80"  name="about_img6" id="about_img6" value="<?php echo get_option('mytheme_about_img6'); ?>"/>   
            <input type="button" name="upload_button" value="上传" id="upbottom"/>   
    </div>        
        
             <em>焦点图尺寸：946 X 342(像素）</em>
 </li>
 <li>
		<a>链接</a>	<textarea class="jiao" name="about_url6" id="about_url6" rows="1" cols="46"><?php echo get_option('mytheme_about_url6'); ?></textarea>
         <em>填写您想要这张图片链接的网页地址</em>
 </li>
  <li>
		<a>替换文字</a>	<textarea class="jiao" name="about_tit6" id="about_tit6" rows="1" cols="46"><?php echo get_option('mytheme_about_tit6'); ?></textarea>
         <em>写上焦点图的替换文字，这有利于搜索引擎的搜索</em>
 </li>
 </ul>
 
 <ul class="jiao_div">
  <h2>焦点图2<a>+点击开关</a></h2>
  <li>
             <img src="<?php echo get_option('mytheme_about_img7'); ?>" /><br />
			<a>图片地址</a>	
            
				<div class="up">
           <input type="text" size="80"  name="about_img7" id="about_img7" value="<?php echo get_option('mytheme_about_img7'); ?>"/>   
            <input type="button" name="upload_button" value="上传" id="upbottom"/>   
    </div>        
             <em>焦点图尺寸：946 X 342(像素）</em>
 </li>
 <li>
          
		<a>链接</a>	<textarea class="jiao" name="about_url7" id="about_url7" rows="1" cols="46"><?php echo get_option('mytheme_about_url7'); ?></textarea>
         <em>填写您想要这张图片链接的网页地址</em>
 </li>
   <li>
		<a>替换文字</a>	<textarea class="jiao" name="about_tit7" id="about_tit7" rows="1" cols="46"><?php echo get_option('mytheme_about_tit7'); ?></textarea>
         <em>写上焦点图的替换文字，这有利于搜索引擎的搜索</em>
 </li>
 </ul>

  <ul class="jiao_div">
  <h2>焦点图3<a>+点击开关</a></h2>
  <li>
             <img src="<?php echo get_option('mytheme_about_img8'); ?>" /><br />
			<a>图片地址</a>
            
				<div class="up">
           <input type="text" size="80"  name="about_img8" id="about_img8" value="<?php echo get_option('mytheme_about_img8'); ?>"/>   
            <input type="button" name="upload_button" value="上传" id="upbottom"/>   
    </div>        
            <em>焦点图尺寸：946 X 342(像素）</em>
 </li>
 <li> 
         
		<a>链接</a>	<textarea class="jiao" name="about_url8" id="about_url8" rows="1" cols="46"><?php echo get_option('mytheme_about_url8'); ?></textarea>
         <em>填写您想要这张图片链接的网页地址</em>
 </li>
   <li>
		<a>替换文字</a>	<textarea class="jiao" name="about_tit8" id="about_tit8" rows="1" cols="46"><?php echo get_option('mytheme_about_tit8'); ?></textarea>
         <em>写上焦点图的替换文字，这有利于搜索引擎的搜索</em>
 </li>
 </ul>
 
 
   <ul class="jiao_div">
  <h2>焦点图4<a>+点击开关</a></h2>
  <li>
              <img src="<?php echo get_option('mytheme_about_img9'); ?>" /><br />
			<a>图片地址</a>
            
				<div class="up">
           <input type="text" size="80"  name="about_img9" id="about_img9" value="<?php echo get_option('mytheme_about_img9'); ?>"/>   
            <input type="button" name="upload_button" value="上传" id="upbottom"/>   
    </div>        
        <em>焦点图尺寸：946 X 342(像素）</em>
 </li>
 <li>
		<a>链接</a>	<textarea class="jiao" name="about_url9" id="about_url9" rows="1" cols="46"><?php echo get_option('mytheme_about_url9'); ?></textarea>
         <em>填写您想要这张图片链接的网页地址</em>
 </li>
   <li>
		<a>替换文字</a>	<textarea class="jiao" name="about_tit9" id="about_tit9" rows="1" cols="46"><?php echo get_option('mytheme_about_tit9'); ?></textarea>
         <em>写上焦点图的替换文字，这有利于搜索引擎的搜索</em>
 </li>
 </ul>
 
    <ul class="jiao_div">
  <h2>焦点图5<a>+点击开关</a></h2>
  <li> 
             <img src="<?php echo get_option('mytheme_about_img0'); ?>" /><br />
			<a>图片地址</a>	
           
				<div class="up">
           <input type="text" size="80"  name="about_img0" id="about_img0" value="<?php echo get_option('mytheme_about_img0'); ?>"/>   
            <input type="button" name="upload_button" value="上传" id="upbottom"/>   
    </div>        
         <em>焦点图尺寸：946 X 342(像素）</em>
 </li>
 <li>
		<a>链接</a>	<textarea class="jiao" name="about_url0" id="about_url0" rows="1" cols="46"><?php echo get_option('mytheme_about_url0'); ?></textarea>
         <em>填写您想要这张图片链接的网页地址</em>
 </li>
   <li>
		<a>替换文字</a>	<textarea class="jiao" name="about_tit0" id="about_tit0" rows="1" cols="46"><?php echo get_option('mytheme_about_tit0'); ?></textarea>
         <em>写上焦点图的替换文字，这有利于搜索引擎的搜索</em>
 </li>
 </ul>
 
 </fieldset>
 
 


 
	<p class="submit">
 
		<input type="submit" name="Submit" class="button-primary" value="保存设置" />
 
		<input type="hidden" name="mytheme_settings" value="save" style="display:none;" />
 
	</p>

</div>
 
 
  

 
 
 
 
 
 
 <li class="box"> <h1>SEO以及统计选项</h1>
 <div class="text" style="display:none">

 
	<fieldset>
 
	<legend><strong>SEO 代码添加</strong></legend>
 

 
				<textarea name="keywords" id="keywords" rows="1" cols="70"><?php echo get_option('mytheme_keywords'); ?></textarea><br />
 
				<em>网站关键词（Meta Keywords），中间用半角逗号隔开,如：主题公园，网站模板，wordpress主题</em>
 
		
				<textarea name="description" id="description" rows="3" cols="70"><?php echo get_option('mytheme_description'); ?></textarea>
 
				<em>网站描述（Meta Description），针对搜索引擎设置的网页描述，如：主题公园是专注于高端网站主题，高端网站模板的设计和制作...</em>
 
	
 
	</fieldset>
 
 
 
	<fieldset>
 
	<legend><strong>统计代码添加</strong></legend>
 
		
 
				<textarea name="analytics" id="analytics" rows="5" cols="70"><?php echo stripslashes(get_option('mytheme_analytics')); ?></textarea>
 

      	</fieldset>  
    
 


 
	<p class="submit">
 
		<input type="submit" name="Submit" class="button-primary" value="保存设置" />
 
		<input type="hidden" name="mytheme_settings" value="save" style="display:none;" />
 
	</p>

</div>
</li>
<li class="box"> <h1>首页的简介</h1>
 <div class="text" style="display:none">

 
	<fieldset>

				
				

 <div style="margin-top:20px;">
 <div style="100%">
 <strong>关于我们页面下方的特色分类（你得在这写点儿什么，一共三组，他们将显示在首页）</strong>
    
				
				
   
              </div>
<ul class="jiao_div">

 <div><legend><strong>分类1</strong></legend>
 

 </div>

  

  <li>
		<a>标题</a>	<textarea class="jiao" name="about_tit1" id="about_tit1" rows="1" cols="50"><?php echo get_option('mytheme_about_tit1'); ?></textarea>
 </li>
  <li>
		<a>文字</a>	<textarea class="jiao" name="about_text1" id="about_text1" rows="6" cols="96"><?php echo get_option('mytheme_about_text1'); ?></textarea>
 </li>
 </ul>
 
<ul class="jiao_div">
 <div><legend><strong>分类2</strong></legend></div>
 <label>
		
 
 <li>


  <li>
		<a>标题</a>	<textarea class="jiao" name="about_tit2" id="about_tit2" rows="1" cols="50"><?php echo get_option('mytheme_about_tit2'); ?></textarea>
 </li>
  <li>
		<a>文字</a>	<textarea class="jiao" name="about_text2" id="about_text2" rows="6" cols="96"><?php echo get_option('mytheme_about_text2'); ?></textarea>
 </li>
 </ul>
 
<ul class="jiao_div">
 <div><legend><strong>分类3</strong></legend></div>

  

  <li>
		<a>标题</a>	<textarea class="jiao" name="about_tit3" id="about_tit3" rows="1" cols="50"><?php echo get_option('mytheme_about_tit3'); ?></textarea>
 </li>
  <li>
		<a>文字</a>	<textarea class="jiao" name="about_text3" id="about_text3" rows="6" cols="96"><?php echo get_option('mytheme_about_text3'); ?></textarea>
 </li>
 </ul>
 
 


 </div>
	</fieldset>
 
 
  	<p class="submit">
 
		<input type="submit" name="Submit" class="button-primary" value="保存设置" />
 
		<input type="hidden" name="mytheme_settings" value="save" style="display:none;" />
 
	</p>
 

    
 


 


</div>
</li>
<li class="box"> <h1>关于我们 和 新闻动态的标题图片</h1>
 <div class="text" style="display:none">

 
	<fieldset>
 
	<legend><strong>公司新闻动态标题图片</strong></legend>
 
              
         
         
           <img src="<?php echo get_option('mytheme_news_title'); ?>" /><br />
			<a>图片地址</a>	
            
				<div class="up">
           <input type="text" size="80"  name="news_title" id="news_title" value="<?php echo get_option('mytheme_news_title'); ?>"/>   
            <input type="button" name="upload_button" value="上传" id="upbottom"/>   
    </div>  
         
				
				<em>新闻动态的标题图片，如果不填则为默认图片</em>
 
		
				
				

	</fieldset>
    
    	<fieldset>
 
	<legend><strong>关于我们标题图片</strong></legend>
 
              
          <img src="<?php echo get_option('mytheme_case_title'); ?>" /><br />
			<a>图片地址</a>	
            
				<div class="up">
           <input type="text" size="80"  name="case_title" id="case_title" value="<?php echo get_option('mytheme_case_title'); ?>"/>   
            <input type="button" name="case_title" value="上传" id="case_title"/>   
    </div>  
         
				
 
				<em>关于我们的标题图片，不填则显示默认图片</em>
 
		
				
         
				
				

	</fieldset>
 
 
   

    
 

 	<p class="submit">
 
		<input type="submit" name="Submit" class="button-primary" value="保存设置" />
 
		<input type="hidden" name="mytheme_settings" value="save" style="display:none;" />
 
	</p>
 

</form>
</div>
</li>
 </ul>

</div>


 
<?php }
echo $after_widget;
/*添加主题选项over*/
?>