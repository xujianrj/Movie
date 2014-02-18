<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>最新<?php echo ($list_name); ?>-<?php echo ($list_dir); ?><?php echo ($list_name_big); ?><?php echo ($list_name); ?>-2011最新<?php echo ($list_name); ?><?php echo ($list_title); ?></title>
<meta name="keywords" content="<?php if(!empty($list_keywords)): ?><?php echo ($list_keywords); ?><?php else: ?>最新<?php echo ($list_name); ?>,<?php echo ($keywords); ?><?php endif; ?>">
<meta name="description" content="最新<?php echo ($list_name); ?>包含的影片有<?php if(is_array($vod_list)): $i = 0; $__LIST__ = $vod_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><?php echo (msubstr($ppvod["vod_name"],0,10)); ?>,<?php endforeach; endif; else: echo "" ;endif; ?>完全免费在线观看！">
<!--模板仿制、修改，QQ：182377860  模板支持网站：www.yayamov.com-->
<link href="<?php echo ($tpl); ?>/static/css/base.css" type="text/css" rel="stylesheet" />
<link href="<?php echo ($tpl); ?>/static/css/qirebox.css" type="text/css" rel="stylesheet" />
<script language="javascript">var Root='<?php echo ($root); ?>';var Sid='<?php echo ($sid); ?>';var Cid='<?php echo ($list_id); ?>';<?php if($sid == 1): ?>var Id='<?php echo ($vod_id); ?>';<?php else: ?>var Id='<?php echo ($news_id); ?>';<?php endif; ?></script>
<script src="<?php echo ($tpl); ?>/static/js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="<?php echo ($tpl); ?>/static/js/jquery.base.js" type="text/javascript"></script>
<script src="<?php echo ($tpl); ?>/static/js/playclass.js" type="text/javascript"></script>
<link href="/favicon.ico" type="image/x-icon" rel="icon">
<link href="/favicon.ico" type="image/x-icon" rel="shortcut icon">
</head>
<body>
<div id="header">
  <div id="navbar">
    <div class="layout fn-clear">
      <ul id="nav" class="ui-nav">
        <li  class="nav-item  current" class="nav-item " id="nav-home">
        <a class="nav-link" target="_self" href="<?php echo ($root); ?>"><i class="ui-icon home-nav"></i></a>
        </li>
        <li style="display: none;"  class="nav-item drop-down " id="nav-tv"> <a class="nav-link drop-title" target="_self" href="<?php echo getlistname(2,'list_url');?>"> <i class="ui-icon tv-nav"></i>电视剧</a>

        <li  class="nav-item drop-down " id="nav-movie"><a class="nav-link drop-title" target="_self" href="<?php echo getlistname(1,'list_url');?>">
          <i class="ui-icon movie-nav"></i>电影</a>
        <li  class="nav-item" id="nav-cartoon"><a class="nav-link" target="_self" href="<?php echo getlistname(3,'list_url');?>">
          <i class="ui-icon cartoon-nav"></i>动漫</a></li>
        <li  style="display: none;" class="nav-item" id="nav-fun"><a class="nav-link" target="_self" href="<?php echo getlistname(4,'list_url');?>">
            <i class="ui-icon fun-nav"></i>综艺</a></li>
        <li style="display: none;" class="nav-item drop-down " id="nav-wei"><a class="nav-link drop-title" target="_self" href="<?php echo getlistname(35,'list_url');?>">
            <i class="ui-icon wei-nav"></i>微电影</a>
        <li class="nav-item" id="nav-live"><a class="nav-link" target="_self" href="<?php echo ff_mytpl_url('my_live.html');?>"><i class="ui-icon live-nav"></i>直播</a></li>
        <li class="nav-item " id="nav-koushui"><a class="nav-link" target="_self" href="<?php echo ff_mytpl_url('my_koushui.html');?>"><i class="ui-icon ks-nav"></i>口水</a></li>
        <li style="display: none;" class="nav-item" id="nav-shop"><a class="nav-link" target="_self" href="<?php echo ($url_special); ?>"><i class="ui-icon shop-nav"></i>专题</a></li>
      </ul>
      <!-- // nav end -->
      <ul id="sign" class="ui-nav" >
        <li class="nav-item drop-down" id="loginbarx" style="display: none;">
            <a class="nav-link drop-title" id="innermsg" href="/user-Login"><i class="ui-icon sign-nav"></i></a>
          <div class="drop-box" id="nav-signin">
        <li class="nav-item drop-down" id="nav-looked"><a class="nav-link drop-title" target="_self"><i class="ui-icon looked-nav"></i>播放记录 </a>
          <div class="drop-box">
            <div class="looked-list">
              <p><a class="close-his" target="_self" href="javascript:;">关闭</a><a href="javascript:void(0);" id="emptybt"  target="_self" onclick="javascript:_GC()">清空全部播放记录</a></p>
              <ul class="highlight" id="playhistory">
              </ul>
              <div class="his-todo" id="morelog" style="display:none;"></div>
              <div class="his-todo" id="his-todo"><a target="_blank" class="show-login-dialog" href="/user/index.php">登录</a>后将能永久保存播放记录<em>|</em><a target="_blank"  href="/user/index.php">免费注册</a></div>
            </div>
            <script type="text/javascript">PlayHistoryObj.viewPlayHistory('playhistory');</script>
            <!-- // looked-list end -->
          </div>
        </li>
      </ul>
      <!-- // sign end -->
    </div>
  </div>
  <!-- // navbar end -->
  <div id="subnav">
    <div class="layout fn-clear">
      <div class="subnav-tv fn-left" style="display: none;"><strong class="tv">电视剧：</strong>
        <?php if(is_array($list_menu)): $i = 0; $__LIST__ = $list_menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><?php if(in_array(($ppvod["list_id"]), explode(',',"2"))): ?><?php if(is_array($ppvod["son"])): $i = 0; $__LIST__ = $ppvod["son"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvodson): ++$i;$mod = ($i % 2 )?><a href="<?php echo ($ppvodson["list_url"]); ?>"><?php echo (msubstr($ppvodson["list_name"],0,2)); ?></a><em>|</em><?php endforeach; endif; else: echo "" ;endif; ?><?php endif; ?><?php endforeach; endif; else: echo "" ;endif; ?>
      </div>
      <div class="subnav-movie fn-left"><strong class="movie">电影：</strong>
        <?php if(is_array($list_menu)): $i = 0; $__LIST__ = $list_menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><?php if(in_array(($ppvod["list_id"]), explode(',',"1"))): ?><?php if(is_array($ppvod["son"])): $i = 0; $__LIST__ = $ppvod["son"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvodson): ++$i;$mod = ($i % 2 )?><a href="<?php echo ($ppvodson["list_url"]); ?>"><?php echo (msubstr($ppvodson["list_name"],0,3)); ?></a><em>|</em><?php endforeach; endif; else: echo "" ;endif; ?><?php endif; ?><?php endforeach; endif; else: echo "" ;endif; ?>
      </div>
    </div>
  </div>
  <!-- // subnav end -->
  <div id="headbar">
    <div class="layout fn-clear">
      <div id="logo"><a href="http://www.yayamov.com"><img src="<?php echo ($tpl); ?>/static/images/logo.png" alt="丫丫电影网http://www.yayamov.com" /></a></div>
      <!-- // logo end -->
      <div id="searchbar">
        <div class="ui-search">
          <form id="ffsearch" name="ffsearch" method="POST" action="<?php echo ($root); ?>index.php?s=vod-search" onSubmit="return qrsearch();">
            <input type="text" id="wd" name="wd" class="search-input" value="请在此处输入影片片名或演员名称。" onfocus="if(this.value=='请在此处输入影片片名或演员名称。'){this.value='';}" onblur="if(this.value==''){this.value='请在此处输入影片片名或演员名称。';};"/>
            <input type="submit"   class="search-button" value="" />
          </form>
        </div>
        <!-- // search end -->
        <!--模板仿制、修改，QQ：182377860  模板支持网站：www.yayamov.com-->
        <div class="hotkeys"> <?php echo ($hotkey); ?> </div>
        <!-- // hotkeys end -->
      </div>
      <!-- // searchbar end -->
      <ul id="qire-plus">
        <li><a id="new" href="<?php echo ff_mytpl_url('my_new.html');?>"><i class="ui-icon new-icon"></i>最近<br />
          更新</a></li>
        <li><a href="<?php echo ff_mytpl_url('my_top.html');?>"><i class="ui-icon top-icon"></i>影片<br />
          排行</a></li>
        <li><a href="/baiduplayer/F.html"><i class="ui-icon help-icon"></i>会员<br />
          帮助</a></li>
        <li><a href="<?php echo ($url_guestbook); ?>"><i class="ui-icon gb-icon"></i>留言<br />
          反馈</a></li>
        <li><a target="_self" id="a-clo" href="javascript:void(0);" onclick='fav();'><i class="ui-icon fav-icon"></i>收藏<br />
          本站</a></li>
      </ul>
      <!-- qire-plus end -->
      <a class="show-login-dialog fn-hide" href="/user/index.php" >登录</a>
      <script type="text/javascript">
				function fav(){
					URL='http://www.yayamov.com';title='yaya电影网';
					try{ 
						window.external.addFavorite(URL, title);  
					}catch (e){ 
						try {
							window.sidebar.addPanel(title, URL, ""); 
						}catch (e){ 
							alert("加入收藏失败，请使用Ctrl+D进行添加");
						}
				}	}
			</script>
    </div>
    <!-- // layout end -->
  </div>
  <!-- // headbar end -->
</div>
<!-- // header end -->

<div id="content" class="layout">
  <div class="ui-sponsor">
    <!-- 广告位：list01-960 -->
    <script type="text/javascript" src="/bd/tulist960_01.js"></script>
  </div>
  <!-- // ui-sponsor end -->
  <div class="bread-crumb-nav fn-clear">
    <ul class="bread-crumbs">
      <li class="home"><a href="/">首页</a></li>
      <li> 图片模式</li>
    </ul>
    <!-- // bread-crumbs end -->
  </div>
  <!-- // bread-crumb-nav end -->
  <div class="ui-box filter-focus">
    <div class="ui-title">
      <h3>图片模式索引</h3>
      <span><a href="#"  class="conreset">重置条件</a></span>
      <p class="conbread"></p>
    </div>
    <div class="ui-cnt">
      <?php

$s_area=array('大陆','香港','台湾','港台','欧美','日本','韩国','日韩','新加坡','泰国','印度','俄罗斯','其他');

$s_language=array('国语','粤语','韩语','日语','英语','泰语','其他');

$s_year=array('2012','2011','2010','2009','2008','2007','2006','2005','2004','2003','2002','2001','2000','1999');

if($_GET[year]) $u_year="-year-".$_GET[year];else $u_year=NULL;if($_GET[area]) $u_area="-area-".$_GET[area];else $u_area=NULL;if($_GET[language]) $u_language="-language-".$_GET[language];else $u_order=NULL;if($_GET[order]) $u_order="-order-".$_GET[order];else $u_order=NULL;

?>
      <div class="filter-list fn-clear">
        <h5>类型：</h5>
        <ul>
          <li><a class="current" href="#"   target="_blank">全部</a></li>
          <?php $cidarrr=array(15,16,17,18,19); ?>
          <?php if(is_array($cidarrr)): $i = 0; $__LIST__ = $cidarrr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppcid): ++$i;$mod = ($i % 2 )?><li><a title='<?php echo getlistname($ppcid);?>' href="<?php echo getlistname($ppcid,'list_url');?>"><?php echo getlistname($ppcid);?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
          <?php $cidarrr=array(8,9,10,11,12,13,14,28); ?>
          <?php if(is_array($cidarrr)): $i = 0; $__LIST__ = $cidarrr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppcid): ++$i;$mod = ($i % 2 )?><li><a title='<?php echo getlistname($ppcid);?>' href="<?php echo getlistname($ppcid,'list_url');?>"><?php echo getlistname($ppcid);?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
      </div>
      <div class="filter-list fn-clear">
        <h5>产地：</h5>
        <ul>
          <li><a rel="nofllow" class="current" href="#" data="year-0">全部</a></li>
          <?php 

            foreach($s_area as $aid=>$avalue){ if($_GET[area]==$avalue) $class=" class='active'";else $class=NULL;echo "<li $class><a href=".$root."index.php?s=vod-show-id-".$list_id.$u_year."-area-".urlencode($avalue).$u_language.$u_order.".html>".$avalue."</a></li>";} ?>
        </ul>
      </div>
      <div class="filter-list fn-clear">
        <h5>年代：</h5>
        <ul>
          <li><a rel="nofllow" class="current" href="#" data="year-0">全部</a></li>
          <?php foreach($s_year as $yid=>$yvalue){ if($_GET[year]==$yvalue) $class=" class='active'";else $class=NULL;echo "<li $class><a href=".$root."index.php?s=vod-show-id-".$list_id."-year-".$yvalue.$u_area.$u_language.$u_order.".html>".$yvalue."</a></li>";} ?>
        </ul>
      </div>
    </div>
    <!-- // filter-item end -->
  </div>
  <!-- // filter-focus end -->
  <!-- filter-focus end -->
  <div class="ui-box ui-qire fn-clear" id="list-focus">
    <div class="qire-box">
      <div class="ui-bar fn-clear">
        <ul class="view-mode">
          <li id="view-list"><a rel="nofollow" class="current" href="#" data="t-2">图片模式</a></li>
          <li id="view-letter"><a rel="nofollow" href="<?php echo getlistname(15,'list_url');?>" id="byletter">字母模式</a></li>
        </ul>
        <!-- view-mode end -->
        <!-- view-filter end -->
        <div class="ui-pages short-page fn-right"  id="aapagesx">
          <label></label>
        </div>
      </div>
      <!-- // ui-bar end -->
      <ul class="show-list fn-clear" id="contents">
       <?php $vod_list = ff_mysql_vod('cid:'.$list_id.';limit:8;page:true;order:vod_addtime desc,vod_id desc');$page = $vod_list[0]['page']; ?>
      <?php if(($vod_list["0"]["count"])  !=  "0"): ?><?php if(is_array($vod_list)): $i = 0; $__LIST__ = $vod_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><a class="play-img" target="_blank" href="<?php echo ($ppvod["vod_readurl"]); ?>"><img src="<?php echo ($ppvod["vod_picurl"]); ?>" alt="<?php echo (msubstr($ppvod["vod_name"],0,20)); ?>" />
            <label class="score"><?php echo ($ppvod["vod_gold"]); ?></label>
            </a>
            <div class="play-txt">
              <h5><a target="_blank" href="<?php echo ($ppvod["vod_readurl"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,20)); ?></a></h5>
              <p class="actor"><em>主演:</em><?php echo (ff_search_url($ppvod["vod_actor"])); ?></p>
              <p class="type fn-left"><em>类型：</em><a target="_blank" href="<?php echo ($ppvod["list_url"]); ?>" data="mcid-42"> <?php echo ($ppvod["list_name"]); ?> </a></p>
              <p class="type"><em class="long">更新时间：</em><?php echo (date('Y-m-d H:i:s',$ppvod["vod_addtime"])); ?></p>
              <p class="plot"><em>剧情：</em><?php echo (msubstr($ppvod["vod_content"],0,120)); ?>…</p>
              <p class="state"><em>状态：</em><a target="_blank" href="<?php echo ($ppvod["vod_playurl"]); ?>" class="goplay"><?php echo ($ppvod["vod_title"]); ?></a><cite>.</cite></p>
              <p class="more-desc"><a class="more" target="_blank" href="<?php echo ($ppvod["vod_readurl"]); ?>">详细</a></p>
            </div>
          </li><?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
      <!-- // show-list End -->
      <div class="ui-bar list-page fn-clear">
        <div class="ui-pages ui-page-big" id="aapages"> <?php echo ($page); ?> </div>
      </div>
       <?php else: ?>
       	 <ul>该分类暂无数据！</ul><?php endif; ?>   
      <!-- // list-page End -->
    </div>
    <!-- // qire-box end -->
    <div class="qire-bar">
      <div class="ui-sponsor250">
        <!-- 广告位：tulist02-250 -->
        <script type="text/javascript" src="/bd/tulist_01.js"></script>
      </div>
      <!-- // ui-sponsor250 end -->
      <div class="ui-ranking">
        <h3>本周推荐榜</h3>
        <ul class="ranking-list">
          <?php $vod_new = ff_mysql_vod('day:10;limit:20,15:order:vod_id desc'); ?>
          <?php if(is_array($vod_new)): $i = 0; $__LIST__ = $vod_new;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><span><?php echo ($ppvod["vod_gold"]); ?></span>
              <?php if(($i)  <  "4"): ?><em class="stress"><?php echo ($i); ?>.</em>
                <?php else: ?>
                <?php if(($i)  <  "4"): ?><em class="stress"><?php echo ($i); ?>.</em>
                  <?php else: ?>
                  <em><?php echo ($i); ?>.</em><?php endif; ?><?php endif; ?>
              <a href="<?php echo ($ppvod["vod_readurl"]); ?>" title="<?php echo (msubstr($ppvod["vod_name"],0,20)); ?>"><?php echo (msubstr($ppvod["vod_name"],0,20)); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <!-- // ranking-list end -->
      </div>
      <!-- // ui-ranking end -->
      <div class="ui-ranking">
        <h3>按周点击排行榜</h3>
        <ul class="ranking-list">
          <?php $vod_new = ff_mysql_vod('day:10;limit:35,15:order:vod_id desc'); ?>
          <?php if(is_array($vod_new)): $i = 0; $__LIST__ = $vod_new;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><span><?php echo ($ppvod["vod_hits"]); ?> </span>
              <?php if(($i)  <  "4"): ?><em class="stress"><?php echo ($i); ?>.</em>
                <?php else: ?>
                <?php if(($i)  <  "4"): ?><em class="stress"><?php echo ($i); ?>.</em>
                  <?php else: ?>
                  <em><?php echo ($i); ?>.</em><?php endif; ?><?php endif; ?>
              <a href="<?php echo ($ppvod["vod_readurl"]); ?>" title="<?php echo (msubstr($ppvod["vod_name"],0,20)); ?>"><?php echo (msubstr($ppvod["vod_name"],0,20)); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <!-- // ranking-list end -->
      </div>
      <!-- // ui-ranking end -->
      <div class="ui-sponsor250">
        <!-- 广告位：tulist03-250 -->
        <script type="text/javascript" src="/bd/tulist_02.js"></script>
      </div>
      <!-- // ui-sponsor250 end -->
    </div>
  </div>
  <!-- // ui-box#list-focus end -->
  <div class="ui-sponsor">
    <!-- 广告位：list01-960 -->
    <script type="text/javascript" src="/bd/tulist960_02.js"></script>
  </div>
  <!-- // ui-sponsor end -->
</div>
<!-- // content end --><!--模板仿制、修改，QQ：182377860  模板支持网站：www.yayamov.com-->
<!-- // footer start -->
<!-- // Footer Start -->

<div class="footer">
  <div class="w960">
    <div class="foot-nav"> <a class="color" href="/help/" target="_blank" title="qvod快播使用帮助">qvod快播使用帮助</a>-<a class="color" href="/baiduplayer/F.html" target="_blank" title="百度影音使用帮助">百度影音使用帮助</a>-<a href="<?php echo ($url_guestbook); ?>" target="_blank" title="给我留言">给我留言</a>-<a href="<?php echo ($url_map_google); ?>" target="_blank" title="谷歌地图">谷歌地图</a>-<a href="<?php echo ($url_map_baidu); ?>" target="_blank" title="百度地图">百度地图</a>-<a href="<?php echo ($url_map_rss); ?>" target="_blank" title="RSS订阅">RSS订阅</a> </div>
    <!-- // foot-nav End -->
    <!--模板仿制、修改，QQ：182377860  模板支持网站：www.yayamov.com-->
    <div class="copyright">
      <p><?php echo ($title); ?>的最新电视剧和电影资源均系收集于各大视频网站，本网站只提供web页面服务，并不提供影片资源存储，也不参与录制、上传</p>
      <p>若本站收录的节目无意侵犯了贵司版权，请给网页底部邮箱地址来信，我们会及时处理和回复，谢谢</p>
      <p>Copyright © 2009-2012 <a class="color" href="<?php echo ($root); ?>"> <?php echo ($title); ?> </a></p>
      <p> <?php echo ($sitename); ?> 欢迎和各大公司进行内容及模式上合作。另外，本站暂不接受任何广告，谢谢</p>
    </div>
    <!-- // copyright End -->
    <div class="foot-weibo fn-clear">
      <div style="float:left;margin-right:5px;"> </div>
    </div>
    <!-- // maxBox End -->
  </div>
</div>

<!-- // Footer End -->
<!-- // copyright End -->
<!-- // Footer End -->
</div>
<script language="javascript" type="text/javascript" src="http://js.users.51.la/16209781.js"></script>

<script language="javascript" type="text/javascript" src="http://quote.51.la/?id=16209781&amp;mb=%3Cscript+language%3D%22javascript%22+type%3D%22text%2Fjavascript%22+src%3D%22http%3A%2F%2Fquote%2E51%2Ela%2F%3Fid%3D16209781%26amp%3Bmb%3D3%22%3E%3C%2Fscript%3E%7Caj%7C%7Caj%7C%7Caj%7C%7Caj%7C&amp;target=ajiang%5F51la"></script>


</body>
</html>