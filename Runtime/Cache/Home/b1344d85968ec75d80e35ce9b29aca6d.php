<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>正在观看《<?php echo ($vod_name); ?>》<?php echo ($vod_jiname); ?> -由<?php echo ($sitename); ?>提供百度影音在线播放</title>
<meta name="keywords" content="<?php echo ($vod_name); ?>在线观看-<?php echo ($vod_name); ?>百度影音-<?php echo ($vod_name); ?>蓝光高清">
<meta name="description" content="<?php echo ($vod_name); ?>剧情介绍:<?php echo (msubstr(h($vod_content),0,80)); ?>">
<link href="<?php echo ($tpl); ?>/static/css/base.css" type="text/css" rel="stylesheet" />
<link href="<?php echo ($tpl); ?>/static/css/qirebox.css" type="text/css" rel="stylesheet" />
<script src="<?php echo ($tpl); ?>/static/js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="<?php echo ($tpl); ?>/static/js/jquery.base.js" type="text/javascript"></script>
<script src="<?php echo ($tpl); ?>/static/js/playclass.js" type="text/javascript"></script>
<link href="/favicon.ico" type="image/x-icon" rel="icon">
<link href="/favicon.ico" type="image/x-icon" rel="shortcut icon">
<base target="_blank" />
</head>
<body>
<script>PlayHistoryObj.addPlayHistory('<?php echo ($vod_name); ?><?php echo ($vod_jiname); ?>',location.href)</script>
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

<div id="play-focus">
  <div class="layout" id="sohu-top-sponer">
    <!-- 广告位：play-sogou -->
    <script type="text/javascript" src="/bd/play-sogou.js"></script>
  </div>
  <!-- // layout End -->
  <div id="play" class="layout fn-clear"> <?php echo ($vod_player); ?>
    <div class="playbox-bottom">
      <script type="text/javascript" src="/bd/play01-960.js"></script>
    </div>
  </div>
  <!-- // play-focus end -->
</div>
<div id="content" class="layout">
  <div class="ui-box" id="like-focus">
    <div class="detail-related fn-clear">
      <h5 class="hd">你是否也在<strong>寻找</strong>：</h5>
      <p class="bd"></p>
    </div>
    <!-- // detail-related End -->
    <ul class="img-list">
      <?php $hot_up = ff_mysql_vod('cid:'.$list_id.';limit:7;order:vod_up desc,vod_addtime desc'); ?>
      <?php if(is_array($hot_up)): $i = 0; $__LIST__ = $hot_up;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><a class="play-img" target="_blank" href="<?php echo ($ppvod["vod_readurl"]); ?>" title="<?php echo ($ppvod["vod_name"]); ?>"><img src="<?php echo (getpicurl($ppvod["vod_pic"])); ?>" alt="<?php echo ($ppvod["vod_name"]); ?>" />
          <label class="mask"></label>
          <label class="text"><?php echo ($ppvod["vod_title"]); ?></label>
          <label class="score"><?php echo ($ppvod["vod_hits"]); ?></label>
          </a>
          <h5><a target="_blank" href="<?php echo ($ppvod["vod_readurl"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,10)); ?></a></h5>
        </li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
    <!-- // img-list end -->
    <ul class="txt-list">
      <?php $hot_up1 = ff_mysql_vod('cid:'.$list_id.';limit:8,15;order:vod_up desc,vod_addtime desc'); ?>
      <?php if(is_array($hot_up1)): $i = 0; $__LIST__ = $hot_up1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><span><?php echo ($i); ?>.</span><a target="_blank" href="<?php echo ($ppvod["vod_readurl"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,10)); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
    <!-- // txt-list End -->
  </div>
  <!-- // ui-sponsor end -->
  <!-- //like-focus end -->
  <div class="ui-sponsor"> </div>
</div>
</div>
<!-- // ui-sponsor end -->
<!-- // Footer Start -->
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