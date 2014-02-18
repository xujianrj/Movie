<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo ($title); ?></title>
<meta name="keywords" content="<?php echo ($keywords); ?>">
<meta name="description" content="<?php echo ($description); ?>">
<script language="javascript">var Root='<?php echo ($root); ?>';var Sid='<?php echo ($sid); ?>';var Cid='<?php echo ($list_id); ?>';<?php if($sid == 1): ?>var Id='<?php echo ($vod_id); ?>';<?php else: ?>var Id='<?php echo ($news_id); ?>';<?php endif; ?></script>
<script language="javascript"><!-- 
	window.onerror=function(){return true;} 
// --></script>
<!--模板仿制、修改，QQ：182377860  模板支持网站：www.yayamov.com-->
<link href="<?php echo ($tpl); ?>/static/css/base.css?v2013011232148" type="text/css" rel="stylesheet" />
<link href="<?php echo ($tpl); ?>/static/css/qirebox.css?v2013018" type="text/css" rel="stylesheet" />
<script src="<?php echo ($tpl); ?>/static/js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="<?php echo ($tpl); ?>/static/js/jquery.base.js" type="text/javascript"></script>
<script src="<?php echo ($tpl); ?>/static/js/playclass.js?v2013040132" type="text/javascript"></script>
<link href="/favicon.ico" type="image/x-icon" rel="icon">
<link href="/favicon.ico" type="image/x-icon" rel="shortcut icon">
<script src="<?php echo ($tpl); ?>/static/js/jquery.superslide.js" type="text/javascript"></script>
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
  <div class="qire-notice" style="display:none;"><span style="color:#135294;font-family:tahoma, 宋体, fantasy;font-size:medium;line-height:22px;text-align:center;"><span style="color:#e53333;font-size:12px;">近日对首页和一些页面的结构设计做了一些微调，如果遇到变形或者打不开的情况，请强制F5刷新页面或手动清空浏览器缓存~~如果您对有任何的想法和意见，可以在<a target="_blank" href="{maccms:gbooklink}">留言板</a>中给我们留言，谢谢，我们一直在努力</span><br />
    </span></div>
  <!-- // qire-notice end -->
  <div class="ui-sponsor">
    <!-- 广告位：index01 -->
    <!--<script type="text/javascript" src="/bd/index_banner1.js"></script>-->
  </div>
  <!-- // ui-sponsor end -->
  <div class="layout fn-clear" id="latest-focus">
    <div class="latest-tab-nav">
      <ul class="fn-clear">
        <li id="latest1" onmouseover="setTab('latest',1,6);" class="current"><span><i class="ui-icon hot"></i>热门影片推荐</span></li>
        <li style="display:none;" id="latest2" onmouseover="setTab('latest',2,6);"><span><i class="ui-icon tv"></i>最新电视剧</span></li>
        <li id="latest3" onmouseover="setTab('latest',3,6);"><span><i class="ui-icon movie"></i>最新电影</span></li>
        <li style="display:none;" id="latest4" onmouseover="setTab('latest',4,6);"><span><i class="ui-icon dm"></i>最新综艺</span></li>
        <li id="latest5" onmouseover="setTab('latest',5,6);"><span><i class="ui-icon fun"></i>最新动漫</span></li>
        <li style="display:none;" id="latest6" onmouseover="setTab('latest',6,6);"><span><i class="ui-icon wei"></i>最新微电影</span></li>
      </ul>
    </div>
    <div class="latest-tab-box">
      <div id="con_latest_1" class="latest-item hot-latest">
        <div class="silder-cnt">
          <ul class="img-list">
            <?php $news=ff_mysql_vod('limit:6;stars:5;order:vod_hits desc,vod_gold desc'); ?>
            <?php if(is_array($news)): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><a class="play-img" href="<?php echo ($ppvod["vod_readurl"]); ?>" title="<?php echo ($ppvod["vod_name"]); ?>"><img src="<?php echo ($ppvod["vod_picurl"]); ?>"  onerror="javascript:this.src='<?php echo ($tpl); ?>/static/images/m1938.gif';" alt="<?php echo ($ppvod["vod_name"]); ?>" />
                <label class="mask"></label>
                <label class="text"><?php echo ($ppvod["vod_title"]); ?></label>
                <label class="score"><?php echo ($ppvod["vod_gold"]); ?></label>
                </a>
                <h5><a href="<?php echo ($ppvod["vod_readurl"]); ?>"><?php echo ($ppvod["vod_name"]); ?>…</a></h5>
                <p class="hot"><?php echo (ff_search_url($ppvod["vod_actor"])); ?></p>
              </li><?php endforeach; endif; else: echo "" ;endif; ?>
          </ul>
          <!-- // img-list end -->
        </div>
        <ul class="txt-list">
          <?php $news_2=ff_mysql_vod('limit:7,12; order:vod_hits desc,vod_gold desc'); ?>
          <?php if(is_array($news_2)): $i = 0; $__LIST__ = $news_2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><span><?php echo ($i); ?>.</span><a href="<?php echo ($ppvod["vod_readurl"]); ?>"  title="<?php echo ($ppvod["vod_name"]); ?>"><?php echo ($ppvod["vod_name"]); ?></a>/<a class="gray" href="<?php echo ($ppvod["list_url"]); ?>"><?php echo ($ppvod["list_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <!-- // txt-list End -->
      </div>
      <div id="con_latest_2" class="latest-item tv-latest fn-hide">
        <div class="silder-cnt">
          <ul class="img-list">
            <?php $vod_new = ff_mysql_vod('cid:2;limit:1,6:order:vod_id desc'); ?>
            <?php if(is_array($vod_new)): $i = 0; $__LIST__ = $vod_new;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><a class="play-img" href="<?php echo ($ppvod["vod_readurl"]); ?>"><img src="<?php echo ($ppvod["vod_picurl"]); ?>"  onerror="javascript:this.src='<?php echo ($tpl); ?>/static/images/m1938.gif';"  alt="<?php echo ($ppvod["vod_name"]); ?>"/>
                <label class="mask"></label>
                <label class="text"><?php echo ($ppvod["vod_title"]); ?></label>
                </a>
                <h5><a href="<?php echo ($ppvod["vod_readurl"]); ?>"><?php echo ($ppvod["vod_name"]); ?></a></h5>
                <p class="time"> <?php echo (date('Y-m-d H:i:s',$ppvod["vod_addtime"])); ?></p>
              </li><?php endforeach; endif; else: echo "" ;endif; ?>
          </ul>
          <!-- // img-list End -->
        </div>
        <ul class="txt-list">
          <?php $vod_new = ff_mysql_vod('cid:2;limit:7,12:order:vod_id desc'); ?>
          <?php if(is_array($vod_new)): $i = 0; $__LIST__ = $vod_new;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><span><?php echo (date('m-d',$ppvod["vod_addtime"])); ?>.</span><a href="<?php echo ($ppvod["vod_readurl"]); ?>"><?php echo ($ppvod["vod_name"]); ?></a>/<a class="gray" href="<?php echo ($ppvod["list_url"]); ?>"><?php echo ($ppvod["vod_title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <!-- // txt-list end -->
      </div>
      <div id="con_latest_3" class="latest-item movie-latest fn-hide">
        <div class="silder-cnt">
          <ul class="img-list">
            <?php $vod_new = ff_mysql_vod('cid:1;limit:1,6:order:vod_id desc'); ?>
            <?php if(is_array($vod_new)): $i = 0; $__LIST__ = $vod_new;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><a class="play-img" href="<?php echo ($ppvod["vod_readurl"]); ?>"><img src="<?php echo ($ppvod["vod_picurl"]); ?>"  onerror="javascript:this.src='<?php echo ($tpl); ?>/static/images/m1938.gif';"  alt="<?php echo ($ppvod["vod_name"]); ?>"/>
                <label class="mask"></label>
                <label class="text"><?php echo ($ppvod["vod_title"]); ?></label>
                  <label class="score"><?php echo ($ppvod["vod_gold"]); ?></label>
                </a>
                <h5><a href="<?php echo ($ppvod["vod_readurl"]); ?>"><?php echo ($ppvod["vod_name"]); ?></a></h5>
                <p class="time"><?php echo (date('Y-m-d H:i:s',$ppvod["vod_addtime"])); ?></p>
              </li><?php endforeach; endif; else: echo "" ;endif; ?>
          </ul>
          <!-- // img-list End -->
        </div>
        <ul class="txt-list">
          <?php $vod_new = ff_mysql_vod('cid:1;limit:7,12:order:vod_id desc'); ?>
          <?php if(is_array($vod_new)): $i = 0; $__LIST__ = $vod_new;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><span><?php echo (date('m-d',$ppvod["vod_addtime"])); ?>.</span><a href="<?php echo ($ppvod["vod_readurl"]); ?>"><?php echo ($ppvod["vod_name"]); ?></a>/<a class="gray" href="<?php echo ($ppvod["list_url"]); ?>"><?php echo ($ppvod["vod_title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <!-- // txt-list end -->
      </div>
      <div id="con_latest_4" class="latest-item dm-latest fn-hide">
        <div class="silder-cnt">
          <ul class="img-list">
            <?php $vod_new = ff_mysql_vod('cid:4;limit:1,6:order:vod_id desc'); ?>
            <?php if(is_array($vod_new)): $i = 0; $__LIST__ = $vod_new;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><a class="play-img" href="<?php echo ($ppvod["vod_readurl"]); ?>"><img src="<?php echo ($ppvod["vod_picurl"]); ?>"  onerror="javascript:this.src='<?php echo ($tpl); ?>/static/images/m1938.gif';"  alt="<?php echo ($ppvod["vod_name"]); ?>"/>
                <label class="mask"></label>
                <label class="text"><?php echo ($ppvod["vod_title"]); ?></label>
                </a>
                <h5><a href="<?php echo ($ppvod["vod_readurl"]); ?>"><?php echo ($ppvod["vod_name"]); ?></a></h5>
                <p class="time"><?php echo (date('Y-m-d H:i:s',$ppvod["vod_addtime"])); ?></p>
              </li><?php endforeach; endif; else: echo "" ;endif; ?>
          </ul>
          <!-- // img-list End -->
        </div>
        <ul class="txt-list">
          <?php $vod_new = ff_mysql_vod('cid:4;limit:7,12:order:vod_id desc'); ?>
          <?php if(is_array($vod_new)): $i = 0; $__LIST__ = $vod_new;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><span><?php echo (date('m-d',$ppvod["vod_addtime"])); ?>.</span><a href="<?php echo ($ppvod["vod_readurl"]); ?>"><?php echo ($ppvod["vod_name"]); ?></a>/<a class="gray" href="<?php echo ($ppvod["list_url"]); ?>"><?php echo ($ppvod["vod_title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <!-- // txt-list end -->
      </div>
      <div id="con_latest_5" class="latest-item fun-latest fn-hide">
        <div class="silder-cnt">
          <ul class="img-list">
            <?php $vod_new = ff_mysql_vod('cid:3;limit:1,6:order:vod_id desc'); ?>
            <?php if(is_array($vod_new)): $i = 0; $__LIST__ = $vod_new;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><a class="play-img" href="<?php echo ($ppvod["vod_readurl"]); ?>"><img src="<?php echo ($ppvod["vod_picurl"]); ?>"  onerror="javascript:this.src='<?php echo ($tpl); ?>/static/images/m1938.gif';"  alt="<?php echo ($ppvod["vod_name"]); ?>"/>
                <label class="mask"></label>
                <label class="text"><?php echo ($ppvod["vod_title"]); ?></label>
                  <label class="score"><?php echo ($ppvod["vod_gold"]); ?></label>
                </a>
                <h5><a href="<?php echo ($ppvod["vod_readurl"]); ?>"><?php echo ($ppvod["vod_name"]); ?></a></h5>
                <p class="time"><?php echo (date('Y-m-d H:i:s',$ppvod["vod_addtime"])); ?></p>
              </li><?php endforeach; endif; else: echo "" ;endif; ?>
          </ul>
          <!-- // img-list End -->
        </div>
        <ul class="txt-list">
          <?php $vod_new = ff_mysql_vod('cid:3;limit:7,12:order:vod_id desc'); ?>
          <?php if(is_array($vod_new)): $i = 0; $__LIST__ = $vod_new;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><span><?php echo (date('m-d',$ppvod["vod_addtime"])); ?>.</span><a href="<?php echo ($ppvod["vod_readurl"]); ?>"><?php echo ($ppvod["vod_name"]); ?></a>/<a class="gray" href="<?php echo ($ppvod["list_url"]); ?>"><?php echo ($ppvod["vod_title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <!-- // txt-list end -->
      </div>
      <div id="con_latest_6" class="latest-item wei-latest fn-hide">
        <div class="silder-cnt">
          <ul class="img-list">
            <?php $vod_new = ff_mysql_vod('cid:5;limit:1,6:order:vod_id desc'); ?>
            <?php if(is_array($vod_new)): $i = 0; $__LIST__ = $vod_new;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><a class="play-img" href="<?php echo ($ppvod["vod_readurl"]); ?>"><img src="<?php echo ($ppvod["vod_picurl"]); ?>"  onerror="javascript:this.src='<?php echo ($tpl); ?>/static/images/m1938.gif';"  alt="<?php echo ($ppvod["vod_name"]); ?>"/>
                <label class="mask"></label>
                <label class="text"><?php echo ($ppvod["vod_title"]); ?></label>
                </a>
                <h5><a href="<?php echo ($ppvod["vod_readurl"]); ?>"><?php echo ($ppvod["vod_name"]); ?></a></h5>
                <p class="time"><?php echo (date('Y-m-d H:i:s',$ppvod["vod_addtime"])); ?></p>
              </li><?php endforeach; endif; else: echo "" ;endif; ?>
          </ul>
          <!-- // img-list End -->
        </div>
        <ul class="txt-list">
          <?php $vod_new = ff_mysql_vod('cid:5;limit:7,12:order:vod_id desc'); ?>
          <?php if(is_array($vod_new)): $i = 0; $__LIST__ = $vod_new;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><span><?php echo (date('m-d',$ppvod["vod_addtime"])); ?>.</span><a href="<?php echo ($ppvod["vod_readurl"]); ?>"><?php echo ($ppvod["vod_name"]); ?></a>/<a class="gray" href="<?php echo ($ppvod["list_url"]); ?>"><?php echo ($ppvod["vod_title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <!-- // txt-list end -->
      </div>
      <!-- // con_latest_x end -->
    </div>
  </div>
  <!-- // latest-focus end -->
  <div class="ui-sponsor">
    <!-- 广告位：index02-yigao -->
    <!--<script type="text/javascript" src="/bd/index_banner2.js"></script>-->
  </div>
  <!-- // ui-sponsor end -->
  <div class="ui-box ui-qire fn-clear" id="qire-tv" style="display:none;">
    <div class="qire-bar">
      <div class="ui-title"> <a class="ui-icon title-icon" href="<?php echo getlistname(2,'list_url');?>">电视剧</a>
        <h2 class="hide-txt"><a href="<?php echo getlistname(2,'list_url');?>">电视剧<em>Teleplay</em></a></h2>
        <a class="view-all" href="<?php echo getlistname(2,'list_url');?>">更多</a></div>
      <!-- // ui-title end -->
      <div class="ui-sort">
        <div class="sort-item sort-type">
          <ul class="sort-list fn-clear">
            <?php $vod_type=M('list')->where(array('list_pid'=>2))->select() ?>
            <?php if(is_array($vod_type)): $i = 0; $__LIST__ = $vod_type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvodson): ++$i;$mod = ($i % 2 )?><li><a href="<?php echo getlistname($ppvodson['list_id'],'list_url');?>"><?php echo (msubstr($ppvodson["list_name"],0,2)); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
          </ul>
          <!-- // sort-list#sort-type end -->
        </div>
        <!-- // sort-item end -->
        <div class="sort-item sort-star">
          <ul class="sort-list fn-clear">
            <?php

$s_area=array('大陆','香港','台湾','港台','欧美','日本','韩国','日韩','新加坡','泰国','印度','俄罗斯','其他');

$s_language=array('国语','粤语','韩语','日语','英语','泰语','其他');

$s_year=array('2013','2011','2010','2009','2008','2007','2006','2005','2004','2003','2002','2001','2000','1999');

if($_GET[year]) $u_year="-year-".$_GET[year];else $u_year=NULL;if($_GET[area]) $u_area="-area-".$_GET[area];else $u_area=NULL;if($_GET[language]) $u_language="-language-".$_GET[language];else $u_order=NULL;if($_GET[order]) $u_order="-order-".$_GET[order];else $u_order=NULL;

?>
            <?php foreach($s_year as $yid=>$yvalue){ if($_GET[year]==$yvalue) $class=" class='active'";else $class=NULL;echo "<li $class><a href=".$root."?s=vod-show-id-".$_GET[id]."-year-".$yvalue.$u_area.$u_language.$u_order.".html>".$yvalue."</a></li>";} ?>
          </ul>
          <!-- // sort-list#sort-type end -->
        </div>
        <!-- // sort-item end -->
      </div>
      <!-- // ui-sort end -->
      <div class="ui-ranking">
        <h3><a href="/tv-top.html">排行榜</a></h3>
        <ul class="ranking-list">
          <?php $hot_tv=ff_mysql_vod('cid:2;limit:1,10;order:vod_gold desc,vod_hits desc'); ?>
          <?php if(is_array($hot_tv)): $i = 0; $__LIST__ = $hot_tv;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><span><?php echo ($ppvod["vod_hits"]); ?> </span>
              <?php if(($i)  <  "4"): ?><em class="stress"><?php echo ($i); ?>.</em>
                <?php else: ?>
                <?php if(($i)  <  "4"): ?><em class="stress"><?php echo ($i); ?>.</em>
                  <?php else: ?>
                  <em><?php echo ($i); ?>.</em><?php endif; ?><?php endif; ?>
              <a href="<?php echo ($ppvod["vod_readurl"]); ?>" title="<?php echo ($ppvod["vod_name"]); ?>"><?php echo ($ppvod["vod_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <!-- // ranking-list end -->
      </div>
      <!-- // ui-ranking end -->
    </div>
    <!-- // qire-bar end -->
    <div class="qire-box">
      <div class="qire-commend">
        <ul class="img-list focus-list fn-clear">
          <?php $vod_new = ff_mysql_vod('cid:2;limit:1,2:order:vod_id desc'); ?>
          <?php if(is_array($vod_new)): $i = 0; $__LIST__ = $vod_new;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><a class="play-img" href="<?php echo ($ppvod["vod_readurl"]); ?>"><img src="<?php echo ($ppvod["vod_picurl"]); ?>" onerror="javascript:this.src='<?php echo ($tpl); ?>/static/images/m1938.gif';"  alt="<?php echo ($ppvod["vod_name"]); ?>"/>
              <label class="score"><?php echo ($ppvod["vod_gold"]); ?></label>
              </a>
              <div class="play-txt">
                <h5><a href="<?php echo ($ppvod["vod_readurl"]); ?>"><?php echo ($ppvod["vod_name"]); ?></a></h5>
                <p class="nums"><?php echo ($ppvod["vod_title"]); ?></p>
                <p class="desc"><?php echo (msubstr($ppvod["vod_content"],0,38)); ?>…</p>
                <dl class="item">
                  <dt>演员：</dt>
                  <dd> <?php echo (ff_search_url($ppvod["vod_actor"])); ?> </dd>
                </dl>
                <dl class="item">
                  <dt>地区：</dt>
                  <dd><?php echo ($ppvod["vod_area"]); ?></dd>
                </dl>
                <dl class="item">
                  <dt>类型：</dt>
                  <dd><a  href="<?php echo ($ppvod["list_url"]); ?> "><?php echo ($ppvod["list_name"]); ?></a></dd>
                </dl>
                <dl class="item">
                  <dt>年份：</dt>
                  <dd><?php echo ($ppvod["vod_year"]); ?></dd>
                </dl>
              </div>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <!-- focus-list end -->
      </div>
      <!-- // qire-commend end -->
      <div class="qire-random">
        <ul class="img-list fn-clear">
          <?php $vod_new = ff_mysql_vod('cid:2;limit:3,5:order:vod_id desc'); ?>
          <?php if(is_array($vod_new)): $i = 0; $__LIST__ = $vod_new;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><a class="play-img" href="<?php echo ($ppvod["vod_readurl"]); ?>"><img src="<?php echo ($ppvod["vod_picurl"]); ?>" onerror="javascript:this.src='<?php echo ($tpl); ?>/static/images/m1938.gif';"  alt="<?php echo ($ppvod["vod_name"]); ?>"/>
              <label class="mask"></label>
              <label class="text"><?php echo ($ppvod["vod_title"]); ?></label>
              <label class="score"><?php echo ($ppvod["vod_gold"]); ?></label>
              </a>
              <h5><a href="<?php echo ($ppvod["vod_readurl"]); ?>"><?php echo ($ppvod["vod_name"]); ?></a></h5>
              <p class="star"><?php echo (ff_search_url($ppvod["vod_actor"])); ?></p>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <!-- img-list end -->
      </div>
      <!-- // qire-random end -->
      <div class="qire-assist fn-clear">
        <ul class="assist-tab-nav">
          <li id="ds1" onmouseover="setTab('ds',1,2);" class="current">卫视同步</li>
          <li id="ds2" onmouseover="setTab('ds',2,2);">新剧预告</li>
        </ul>
        <!-- // assist-tab-nav end -->
        <div id="con_ds_1" class="assist-tab-box">
          <ul class="synch-list">
            <li>
              <h5><a href="#"><img src="<?php echo ($tpl); ?>/static/images/tv/hntv.gif" alt="湖南卫视" />湖南卫视</a></h5>
              <?php $vod_new = ff_mysql_vod('cid:15;limit:1,3:order:vod_id desc'); ?>
              <!--模板仿制、修改，QQ：182377860  模板支持网站：www.yayamov.com-->
              <?php if(is_array($vod_new)): $i = 0; $__LIST__ = $vod_new;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><p><a href="<?php echo ($ppvod["vod_readurl"]); ?>" title="<?php echo ($ppvod["vod_name"]); ?>"><?php echo ($ppvod["vod_name"]); ?></a></p><?php endforeach; endif; else: echo "" ;endif; ?>
            </li>
            <li>
              <h5><a href="#"><img src="<?php echo ($tpl); ?>/static/images/tv/jstv.gif" alt="江苏卫视" />江苏卫视</a></h5>
              <?php $vod_new = ff_mysql_vod('cid:15;limit:3,3:order:vod_id desc'); ?>
              <?php if(is_array($vod_new)): $i = 0; $__LIST__ = $vod_new;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><p><a href="<?php echo ($ppvod["vod_readurl"]); ?>" title="<?php echo ($ppvod["vod_name"]); ?>"><?php echo ($ppvod["vod_name"]); ?></a></p><?php endforeach; endif; else: echo "" ;endif; ?>
            </li>
            <li>
              <h5><a href="http://www.yayamov.com/live/dongfangtv.html"><img src="<?php echo ($tpl); ?>/static/images/tv/dftv.gif" alt="东方卫视" />东方卫视</a></h5>
              <?php $vod_new = ff_mysql_vod('cid:15;limit:6,3:order:vod_id desc'); ?>
              <?php if(is_array($vod_new)): $i = 0; $__LIST__ = $vod_new;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><p><a href="<?php echo ($ppvod["vod_readurl"]); ?>" title="<?php echo ($ppvod["vod_name"]); ?>"><?php echo ($ppvod["vod_name"]); ?></a></p><?php endforeach; endif; else: echo "" ;endif; ?>
            </li>
            <li>
              <h5><a href="http://www.yayamov.com/live/zhejinagtv.html"><img src="<?php echo ($tpl); ?>/static/images/tv/zjtv.gif" alt="浙江卫视" />浙江卫视</a></h5>
              <?php $vod_new = ff_mysql_vod('cid:15;limit:9,3:order:vod_id desc'); ?>
              <?php if(is_array($vod_new)): $i = 0; $__LIST__ = $vod_new;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><p><a href="<?php echo ($ppvod["vod_readurl"]); ?>" title="<?php echo ($ppvod["vod_name"]); ?>"><?php echo ($ppvod["vod_name"]); ?></a></p><?php endforeach; endif; else: echo "" ;endif; ?>
            </li>
          </ul>
        </div>
        <!-- // assist-tab-box end -->
        <div id="con_ds_2" class="assist-tab-box fn-hide">
          <ul class="assist-list fn-clear">
            <?php $vod_new = ff_mysql_vod('cid:2;limit:1,8:order:vod_id desc'); ?>
            <?php if(is_array($vod_new)): $i = 0; $__LIST__ = $vod_new;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li>
                <h5><a href="<?php echo ($ppvod["vod_readurl"]); ?>"><?php echo ($ppvod["vod_name"]); ?></a></h5>
                <p class="time"><?php echo (date('Y-m-d H:i:s',$ppvod["vod_addtime"])); ?></p>
              </li><?php endforeach; endif; else: echo "" ;endif; ?>
          </ul>
          <!-- assist-list end -->
        </div>
        <!-- // assist-tab-box end -->
      </div>
      <!-- // qire-assist end -->
    </div>
    <!-- // qire-box end -->
  </div>
  <!-- // ui-qire end -->
  <div class="ui-box ui-qire fn-clear" id="qire-movie">
    <div class="qire-bar">
      <div class="ui-title"> <a class="ui-icon title-icon" href="<?php echo getlistname(1,'list_url');?>">电影</a>
        <h2 class="hide-txt"><a href="<?php echo getlistname(1,'list_url');?>">电影<em>Movie</em></a></h2>
        <a class="view-all" href="<?php echo getlistname(1,'list_url');?>">更多</a> </div>
      <!-- // ui-title end -->
      <div class="ui-sort">
        <div class="sort-item sort-type">
          <ul class="sort-list fn-clear">
            <?php $vod_type=M('list')->where(array('list_pid'=>1))->select() ?>
            <?php if(is_array($vod_type)): $i = 0; $__LIST__ = $vod_type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvodson): ++$i;$mod = ($i % 2 )?><li target="_blank" href=" <?php echo getlistname($ppvodson['list_id'],'list_url');?>"><?php echo ($ppvodson["list_name"]); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
            <?php

$s_area=array('大陆','香港','台湾','港台','欧美','日本','韩国','日韩','新加坡','泰国','印度','俄罗斯','其他');

$s_language=array('国语','粤语','韩语','日语','英语','泰语','其他');

$s_year=array('2013','2012','2011','2010');

if($_GET[year]) $u_year="-year-".$_GET[year];else $u_year=NULL;if($_GET[area]) $u_area="-area-".$_GET[area];else $u_area=NULL;if($_GET[language]) $u_language="-language-".$_GET[language];else $u_order=NULL;if($_GET[order]) $u_order="-order-".$_GET[order];else $u_order=NULL;
?>
            <?php 

            foreach($s_area as $aid=>$avalue){ if($_GET[area]==$avalue) $class=" class='active'";else $class=NULL;echo "<li $class><a href=".$root."?s=vod-show-id-".$_GET[id].$u_year."-area-".urlencode($avalue).$u_language.$u_order.".html>".$avalue."</a></li>";} ?>
            </dl><!--模板仿制、修改，QQ：182377860  模板支持网站：www.yayamov.com-->
          </ul>
          <!-- // sort-list#sort-type end -->
        </div>
        <!-- // sort-item end -->
        <div class="sort-item sort-star">
          <ul class="sort-list fn-clear">
          </ul>
          <!-- // sort-list#sort-type end -->
        </div>
        <!-- // sort-item end -->
        <div class="sort-item sort-star">
          <ul class="sort-list fn-clear">
            <?php foreach($s_year as $yid=>$yvalue){ if($_GET[year]==$yvalue) $class=" class='active'";else $class=NULL;echo "<li $class><a href=".$root."?s=vod-show-id-".$_GET[id]."-year-".$yvalue.$u_area.$u_language.$u_order.".html>".$yvalue."</a></li>";} ?>
          </ul>
          <!-- // sort-list#sort-star end -->
        </div>
        <!-- // sort-item end -->
      </div>
      <!-- // ui-sort end -->
      <div class="ui-ranking">
        <h3><a href="/tv-top.html">排行榜</a></h3>
        <ul class="ranking-list">
          <?php $hot_tv=ff_mysql_vod('cid:1;limit:1,10;order:vod_gold desc,vod_hits desc'); ?>
          <?php if(is_array($hot_tv)): $i = 0; $__LIST__ = $hot_tv;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><span><?php echo ($ppvod["vod_hits"]); ?> </span>
              <?php if(($i)  <  "4"): ?><em class="stress"><?php echo ($i); ?>.</em>
                <?php else: ?>
                <em><?php echo ($i); ?>.</em><?php endif; ?>
              <a href="<?php echo ($ppvod["vod_readurl"]); ?>" title="<?php echo ($ppvod["vod_name"]); ?>"><?php echo ($ppvod["vod_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <!-- // ranking-list end -->
      </div>
      <!-- // ui-ranking end -->
    </div>
    <!-- // qire-bar end -->
    <div class="qire-box">
      <div class="qire-commend">
        <ul class="img-list focus-list fn-clear">
          <?php $vod_new = ff_mysql_vod('cid:1;limit:1,2:order:vod_id desc'); ?>
          <?php if(is_array($vod_new)): $i = 0; $__LIST__ = $vod_new;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><a class="play-img" href="<?php echo ($ppvod["vod_readurl"]); ?>"><img src="<?php echo ($ppvod["vod_picurl"]); ?>" onerror="javascript:this.src='<?php echo ($tpl); ?>/static/images/m1938.gif';"  alt="<?php echo ($ppvod["vod_name"]); ?>"/>
              <label class="score"><?php echo ($ppvod["vod_gold"]); ?></label>
              </a>
              <div class="play-txt">
                <h5><a href="<?php echo ($ppvod["vod_readurl"]); ?>"><?php echo ($ppvod["vod_name"]); ?></a></h5>
                <p class="nums"><?php echo ($ppvod["vod_title"]); ?></p>
                <p class="desc"><?php echo (msubstr($ppvod["vod_content"],0,38)); ?>…</p>
                <dl class="item">
                  <dt>演员：</dt>
                  <dd> <?php echo (ff_search_url($ppvod["vod_actor"])); ?> </dd>
                </dl>
                <dl class="item">
                  <dt>地区：</dt>
                  <dd><?php echo ($ppvod["vod_area"]); ?></dd>
                </dl>
                <dl class="item">
                  <dt>类型：</dt>
                  <dd><a  href="<?php echo ($ppvod["list_url"]); ?> "><?php echo ($ppvod["list_name"]); ?></a></dd>
                </dl>
                <dl class="item">
                  <dt>年份：</dt>
                  <dd><?php echo ($ppvod["vod_year"]); ?></dd>
                </dl>
              </div>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <!-- focus-list end -->
      </div><!--模板仿制、修改，QQ：182377860  模板支持网站：www.yayamov.com-->
      <!-- // qire-commend end -->
      <div class="qire-random">
        <ul class="img-list fn-clear">
          <?php $vod_new = ff_mysql_vod('cid:1;limit:3,5:order:vod_id desc'); ?>
          <?php if(is_array($vod_new)): $i = 0; $__LIST__ = $vod_new;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><a class="play-img" href="<?php echo ($ppvod["vod_readurl"]); ?>"><img src="<?php echo ($ppvod["vod_picurl"]); ?>" onerror="javascript:this.src='<?php echo ($tpl); ?>/static/images/m1938.gif';"  alt="<?php echo ($ppvod["vod_name"]); ?>"/>
              <label class="mask"></label>
              <label class="text"><?php echo ($ppvod["vod_title"]); ?></label>
              <label class="score"><?php echo ($ppvod["vod_gold"]); ?></label>
              </a>
              <h5><a href="<?php echo ($ppvod["vod_readurl"]); ?>"><?php echo ($ppvod["vod_name"]); ?></a></h5>
              <p class="star"><?php echo (ff_search_url($ppvod["vod_actor"])); ?></p>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <!-- img-list end -->
      </div>
      <!-- // qire-random end -->
      <div class="qire-assist fn-clear">
        <ul class="assist-tab-nav">
          <li id="dy1" onmouseover="setTab('dy',1,2);" class="current">正在热映</li>
          <li id="dy2" onmouseover="setTab('dy',2,2);">即将上映</li>
        </ul>
        <!-- // assist-tab-nav end -->
        <div id="con_dy_1" class="assist-tab-box">
          <ul class="assist-list fn-clear">
            <?php $vod_new = ff_mysql_vod('cid:1;limit:1,8:order:vod_id desc'); ?>
            <?php if(is_array($vod_new)): $i = 0; $__LIST__ = $vod_new;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li>
                <h5><a href="<?php echo ($ppvod["vod_readurl"]); ?>"><?php echo ($ppvod["vod_name"]); ?></a></h5>
                <p class="time"><?php echo (date('m-d',$ppvod["vod_addtime"])); ?> 上映</p>
              </li><?php endforeach; endif; else: echo "" ;endif; ?>
          </ul>
          <!-- assist-list end -->
        </div>
        <!-- // assist-tab-box end -->
        <div id="con_dy_2" class="assist-tab-box fn-hide">
          <ul class="assist-list fn-clear">
            <?php $vod_new = ff_mysql_vod('cid:1;limit:9,8:order:vod_id desc'); ?>
            <?php if(is_array($vod_new)): $i = 0; $__LIST__ = $vod_new;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li>
                <h5><a href="<?php echo ($ppvod["vod_readurl"]); ?>"><?php echo ($ppvod["vod_name"]); ?></a></h5>
                <p class="time"><?php echo (date('m-d',$ppvod["vod_addtime"])); ?> 上映</p>
              </li><?php endforeach; endif; else: echo "" ;endif; ?>
          </ul>
          <!-- assist-list end -->
        </div>
        <!-- // assist-tab-box end -->
      </div>
      <!-- // qire-assist end -->
    </div>
    <!-- // qire-box end -->
  </div><!--模板仿制、修改，QQ：182377860  模板支持网站：www.yayamov.com-->
  <!-- // ui-qire end -->
  <div class="ui-sponsor">
    <!-- 广告位：index03 -->
    <!--<script type="text/javascript" src="/bd/index_banner3.js"></script>-->
  </div>
  <!-- // ui-sponsor end -->
  <div class="ui-box ui-qire fn-clear" id="qire-cartoon">
    <div class="qire-bar">
      <div class="ui-title"> <a class="ui-icon title-icon" href="<?php echo getlistname(3,'list_url');?>">经典动漫</a>
        <h2 class="hide-txt"><a href="<?php echo getlistname(3,'list_url');?>">经典动漫<em>Cartoon</em></a></h2>
        <a class="view-all" href="<?php echo getlistname(3,'list_url');?>">更多</a></div>
      <!-- // ui-title end -->
      <div class="ui-sort">
        <div class="sort-item sort-type">
          <ul class="sort-list fn-clear">
            <?php

$s_area=array('大陆','香港','台湾','港台','欧美','日本','韩国','日韩','新加坡','泰国','印度','俄罗斯','其他');

$s_language=array('国语','粤语','韩语','日语','英语','泰语','其他');

$s_year=array('2013','2012','2011','2010','2009','2008','2007','2006');

if($_GET[year]) $u_year="-year-".$_GET[year];else $u_year=NULL;if($_GET[area]) $u_area="-area-".$_GET[area];else $u_area=NULL;if($_GET[language]) $u_language="-language-".$_GET[language];else $u_order=NULL;if($_GET[order]) $u_order="-order-".$_GET[order];else $u_order=NULL;
?>
            <?php 

            foreach($s_area as $aid=>$avalue){ if($_GET[area]==$avalue) $class=" class='active'";else $class=NULL;echo "<li $class><a href=".$root."?s=vod-show-id-".$_GET[id].$u_year."-area-".urlencode($avalue).$u_language.$u_order.".html>".$avalue."</a></li>";} ?>
            </dl>
          </ul>
          <!-- // sort-list#sort-type end -->
        </div>
        <!-- // sort-item end -->
        <div class="sort-item sort-star">
          <ul class="sort-list fn-clear">
            <?php foreach($s_year as $yid=>$yvalue){ if($_GET[year]==$yvalue) $class=" class='active'";else $class=NULL;echo "<li $class><a href=".$root."?s=vod-show-id-".$_GET[id]."-year-".$yvalue.$u_area.$u_language.$u_order.".html>".$yvalue."</a></li>";} ?>
          </ul>
          <!-- // sort-list#sort-star end -->
        </div>
        <!-- // sort-item end -->
      </div>
      <!-- // ui-sort end -->
      <div class="ui-ranking">
        <h3><a href="/tv-top.html">排行榜</a></h3>
        <ul class="ranking-list">
          <?php $hot_tv=ff_mysql_vod('cid:3;limit:1,10;order:vod_gold desc,vod_hits desc'); ?>
          <?php if(is_array($hot_tv)): $i = 0; $__LIST__ = $hot_tv;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><span><?php echo ($ppvod["vod_hits"]); ?> </span>
              <?php if(($i)  <  "4"): ?><em class="stress"><?php echo ($i); ?>.</em>
                <?php else: ?>
                <em><?php echo ($i); ?>.</em><?php endif; ?>
              <a href="<?php echo ($ppvod["vod_readurl"]); ?>" title="<?php echo ($ppvod["vod_name"]); ?>"><?php echo ($ppvod["vod_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <!-- // ranking-list end -->
      </div>
      <!-- // ui-ranking end -->
    </div>
    <!-- // qire-bar end -->
    <div class="qire-box"><!--模板仿制、修改，QQ：182377860  模板支持网站：www.yayamov.com-->
      <div class="qire-commend">
        <ul class="img-list focus-list fn-clear">
          <?php $vod_new = ff_mysql_vod('cid:3;limit:1,2:order:vod_id desc'); ?>
          <?php if(is_array($vod_new)): $i = 0; $__LIST__ = $vod_new;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><a class="play-img" href="<?php echo ($ppvod["vod_readurl"]); ?>"><img src="<?php echo ($ppvod["vod_picurl"]); ?>" onerror="javascript:this.src='<?php echo ($tpl); ?>/static/images/m1938.gif';"  alt="<?php echo ($ppvod["vod_name"]); ?>"/>
              <label class="score"><?php echo ($ppvod["vod_gold"]); ?></label>
              </a>
              <div class="play-txt">
                <h5><a href="<?php echo ($ppvod["vod_readurl"]); ?>"><?php echo ($ppvod["vod_name"]); ?></a></h5>
                <p class="nums"><?php echo ($ppvod["vod_title"]); ?></p>
                <p class="desc"><?php echo (msubstr($ppvod["vod_content"],0,38)); ?>…</p>
                <dl class="item">
                  <dt>演员：</dt>
                  <dd> <?php echo (ff_search_url($ppvod["vod_actor"])); ?> </dd>
                </dl>
                <dl class="item">
                  <dt>地区：</dt>
                  <dd><?php echo ($ppvod["vod_area"]); ?></dd>
                </dl>
                <dl class="item">
                  <dt>类型：</dt>
                  <dd><a  href="<?php echo ($ppvod["list_url"]); ?> "><?php echo ($ppvod["list_name"]); ?></a></dd>
                </dl>
                <dl class="item">
                  <dt>年份：</dt>
                  <dd><?php echo ($ppvod["vod_year"]); ?></dd>
                </dl>
              </div>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <!-- focus-list end -->
      </div>
      <!-- // qire-commend end -->
      <div class="qire-random">
        <ul class="img-list fn-clear">
          <?php $vod_new = ff_mysql_vod('cid:3;limit:3,5:order:vod_id desc'); ?>
          <?php if(is_array($vod_new)): $i = 0; $__LIST__ = $vod_new;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><a class="play-img" href="<?php echo ($ppvod["vod_readurl"]); ?>"><img src="<?php echo ($ppvod["vod_picurl"]); ?>" onerror="javascript:this.src='<?php echo ($tpl); ?>/static/images/m1938.gif';"  alt="<?php echo ($ppvod["vod_name"]); ?>"/>
              <label class="mask"></label>
              <label class="text"><?php echo ($ppvod["vod_title"]); ?></label>
              <label class="score"><?php echo ($ppvod["vod_gold"]); ?></label>
              </a>
              <h5><a href="<?php echo ($ppvod["vod_readurl"]); ?>"><?php echo ($ppvod["vod_name"]); ?></a></h5>
              <p class="star"><?php echo (ff_search_url($ppvod["vod_actor"])); ?></p>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <!-- img-list end -->
      </div>
      <!-- // qire-random end -->
      <div class="qire-forecast fn-clear">
        <ul class="forecast-tab-nav fn-clear">
          <li class="title">动漫更新时间表：</li>
          <li id="dm1" onmouseover="setTab('dm',1,7);" >星期一</li>
          <li id="dm2" onmouseover="setTab('dm',2,7);" >星期二</li>
          <li id="dm3" onmouseover="setTab('dm',3,7);">星期三</li>
          <li id="dm4" onmouseover="setTab('dm',4,7);" >星期四</li>
          <li id="dm5" onmouseover="setTab('dm',5,7);" >星期五</li>
          <li id="dm6" onmouseover="setTab('dm',6,7);" >星期六</li>
          <li id="dm7" onmouseover="setTab('dm',7,7);" >星期日</li>
        </ul>
        <!-- // forecast-tab-nav end -->
        <div id="con_dm_1"  class="forecast-tab-box fn-hide">
          <ul class="forecast-list fn-clear">
            <?php $vod_new = ff_mysql_vod('cid:3;limit:1,12:order:vod_id desc'); ?>
            <?php if(is_array($vod_new)): $i = 0; $__LIST__ = $vod_new;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li>
                <h5><a href="<?php echo ($ppvod["vod_readurl"]); ?>" target="_blank"><?php echo ($ppvod["vod_name"]); ?></a></h5>
              </li><?php endforeach; endif; else: echo "" ;endif; ?>
          </ul>
          <!-- forecast-list end -->
        </div>
        <!-- // forecast-tab-box end -->
        <div id="con_dm_2" class="forecast-tab-box fn-hide">
          <ul class="forecast-list fn-clear">
            <?php $vod_new = ff_mysql_vod('cid:3;limit:13,12:order:vod_id desc'); ?>
            <?php if(is_array($vod_new)): $i = 0; $__LIST__ = $vod_new;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li>
                <h5><a href="<?php echo ($ppvod["vod_readurl"]); ?>" target="_blank"><?php echo ($ppvod["vod_name"]); ?></a></h5>
              </li><?php endforeach; endif; else: echo "" ;endif; ?>
          </ul>
          <!-- forecast-list end -->
        </div>
        <!-- // forecast-tab-box end -->
        <div id="con_dm_3" class="forecast-tab-box">
          <ul class="forecast-list fn-clear">
            <?php $vod_new = ff_mysql_vod('cid:3;limit:25,12:order:vod_id desc'); ?>
            <?php if(is_array($vod_new)): $i = 0; $__LIST__ = $vod_new;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li>
                <h5><a href="<?php echo ($ppvod["vod_readurl"]); ?>" target="_blank"><?php echo ($ppvod["vod_name"]); ?></a></h5>
              </li><?php endforeach; endif; else: echo "" ;endif; ?>
          </ul>
          <!-- forecast-list end -->
        </div>
        <!-- // forecast-tab-box end -->
        <div id="con_dm_4" class="forecast-tab-box fn-hide">
          <ul class="forecast-list fn-clear">
            <?php $vod_new = ff_mysql_vod('cid:3;limit:37,12:order:vod_id desc'); ?>
            <?php if(is_array($vod_new)): $i = 0; $__LIST__ = $vod_new;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li>
                <h5><a href="<?php echo ($ppvod["vod_readurl"]); ?>" target="_blank"><?php echo ($ppvod["vod_name"]); ?></a></h5>
              </li><?php endforeach; endif; else: echo "" ;endif; ?>
          </ul><!--模板仿制、修改，QQ：182377860  模板支持网站：www.yayamov.com-->
          <!-- forecast-list end -->
        </div>
        <!-- // forecast-tab-box end -->
        <div id="con_dm_5" class="forecast-tab-box fn-hide">
          <ul class="forecast-list fn-clear">
            <?php $vod_new = ff_mysql_vod('cid:3;limit:49,12:order:vod_id desc'); ?>
            <?php if(is_array($vod_new)): $i = 0; $__LIST__ = $vod_new;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li>
                <h5><a href="<?php echo ($ppvod["vod_readurl"]); ?>" target="_blank"><?php echo ($ppvod["vod_name"]); ?></a></h5>
              </li><?php endforeach; endif; else: echo "" ;endif; ?>
          </ul>
          <!-- forecast-list end -->
        </div>
        <!-- // forecast-tab-box end -->
        <div id="con_dm_6" class="forecast-tab-box fn-hide">
          <ul class="forecast-list fn-clear">
            <?php $vod_new = ff_mysql_vod('cid:3;limit:61,12:order:vod_id desc'); ?>
            <?php if(is_array($vod_new)): $i = 0; $__LIST__ = $vod_new;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li>
                <h5><a href="<?php echo ($ppvod["vod_readurl"]); ?>" target="_blank"><?php echo ($ppvod["vod_name"]); ?></a></h5>
              </li><?php endforeach; endif; else: echo "" ;endif; ?>
          </ul>
          <!-- forecast-list end -->
        </div>
        <!-- // forecast-tab-box end -->
        <div id="con_dm_7" class="forecast-tab-box fn-hide">
          <ul class="forecast-list fn-clear">
            <?php $vod_new = ff_mysql_vod('cid:3;limit:73,12:order:vod_id desc'); ?>
            <?php if(is_array($vod_new)): $i = 0; $__LIST__ = $vod_new;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li>
                <h5><a href="<?php echo ($ppvod["vod_readurl"]); ?>" target="_blank"><?php echo ($ppvod["vod_name"]); ?></a></h5>
              </li><?php endforeach; endif; else: echo "" ;endif; ?>
          </ul>
          <!-- forecast-list end -->
        </div>
        <!-- // forecast-tab-box end -->
      </div>
      <!-- // qire-assist end -->
    </div>
    <!-- // qire-box end -->
  </div>
  <!-- // ui-qire end -->
  <div class="ui-box ui-qire fn-clear" id="qire-fun" style="display:none;">
    <div class="qire-bar">
      <div class="ui-title"> <a class="ui-icon title-icon" href="<?php echo getlistname(4,'list_url');?>">综艺娱乐</a>
        <h2 class="hide-txt"><a href="<?php echo getlistname(4,'list_url');?>">综艺娱乐<em>Variety</em></a></h2>
        <a class="view-all" href="<?php echo getlistname(4,'list_url');?>">更多</a></div>
      <!-- // ui-title end -->
      <div class="ui-sort">
        <div class="sort-item">
          <ul class="sort-list fn-clear">
            <?php $vod_new = ff_mysql_vod('cid:4;limit:1,10:order:vod_id desc'); ?>
            <?php if(is_array($vod_new)): $i = 0; $__LIST__ = $vod_new;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><a href="<?php echo ($ppvod["vod_readurl"]); ?>"><?php echo ($ppvod["vod_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
          </ul>
          <!-- // sort-list#sort-type end -->
        </div>
        <!-- // sort-item end -->
      </div>
      <!-- // ui-sort end -->
      <div class="ui-ranking">
        <h3><a href="/tv-top.html">排行榜</a></h3>
        <ul class="ranking-list">
          <?php $hot_tv=ff_mysql_vod('cid:4;limit:1,10;order:vod_gold desc,vod_hits desc'); ?>
          <?php if(is_array($hot_tv)): $i = 0; $__LIST__ = $hot_tv;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><span><?php echo ($ppvod["vod_hits"]); ?> </span>
              <?php if(($i)  <  "4"): ?><em class="stress"><?php echo ($i); ?>.</em>
                <?php else: ?>
                <em><?php echo ($i); ?>.</em><?php endif; ?>
              <a href="<?php echo ($ppvod["vod_readurl"]); ?>" title="<?php echo ($ppvod["vod_name"]); ?>"><?php echo ($ppvod["vod_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <!-- // ranking-list end -->
      </div>
      <!-- // ui-ranking end -->
    </div>
    <!-- // qire-bar end -->
    <div class="qire-box">
      <div class="qire-commend">
        <ul class="img-list focus-list fn-clear">
          <?php $vod_new = ff_mysql_vod('cid:4;limit:1,2:order:vod_id desc'); ?>
          <?php if(is_array($vod_new)): $i = 0; $__LIST__ = $vod_new;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><a class="play-img" href="<?php echo ($ppvod["vod_readurl"]); ?>"><img src="<?php echo ($ppvod["vod_picurl"]); ?>" onerror="javascript:this.src='<?php echo ($tpl); ?>/static/images/m1938.gif';"  alt="<?php echo ($ppvod["vod_name"]); ?>"/>
              <label class="score"><?php echo ($ppvod["vod_gold"]); ?></label>
              </a>
              <div class="play-txt">
                <h5><a href="<?php echo ($ppvod["vod_readurl"]); ?>"><?php echo ($ppvod["vod_name"]); ?></a></h5>
                <p class="nums"><?php echo ($ppvod["vod_title"]); ?></p>
                <p class="desc"><?php echo (msubstr($ppvod["vod_content"],0,38)); ?>…</p>
                <dl class="item">
                  <dt>演员：</dt>
                  <dd> <?php echo (ff_search_url($ppvod["vod_actor"])); ?> </dd>
                </dl>
                <dl class="item">
                  <dt>地区：</dt>
                  <dd><?php echo ($ppvod["vod_area"]); ?></dd>
                </dl>
                <dl class="item">
                  <dt>类型：</dt>
                  <dd><a  href="<?php echo ($ppvod["list_url"]); ?> "><?php echo ($ppvod["list_name"]); ?></a></dd>
                </dl>
                <dl class="item">
                  <dt>年份：</dt>
                  <dd><?php echo ($ppvod["vod_year"]); ?></dd>
                </dl>
              </div>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <!-- focus-list end -->
      </div>
      <!-- // qire-commend end -->
      <div class="qire-random">
        <ul class="img-list fn-clear">
          <?php $vod_new = ff_mysql_vod('cid:4;limit:3,5:order:vod_id desc'); ?>
          <?php if(is_array($vod_new)): $i = 0; $__LIST__ = $vod_new;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><a class="play-img" href="<?php echo ($ppvod["vod_readurl"]); ?>"><img src="<?php echo ($ppvod["vod_picurl"]); ?>" onerror="javascript:this.src='<?php echo ($tpl); ?>/static/images/m1938.gif';"  alt="<?php echo ($ppvod["vod_name"]); ?>"/>
              <label class="mask"></label>
              <label class="text"><?php echo ($ppvod["vod_title"]); ?></label>
              <label class="score"><?php echo ($ppvod["vod_gold"]); ?></label>
              </a>
              <h5><a href="<?php echo ($ppvod["vod_readurl"]); ?>"><?php echo ($ppvod["vod_name"]); ?></a></h5>
              <p class="star"><?php echo (ff_search_url($ppvod["vod_actor"])); ?></p>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <!-- img-list end -->
      </div>
      <!-- // qire-random end -->
      <div class="qire-forecast fn-clear">
        <ul class="forecast-tab-nav fn-clear">
          <li class="title">综艺更新时间表：</li>
          <li id="zy1" onmouseover="setTab('zy',1,7);" >星期一</li>
          <li id="zy2" onmouseover="setTab('zy',2,7);" >星期二</li>
          <li id="zy3" onmouseover="setTab('zy',3,7);">星期三</li>
          <li id="zy4" onmouseover="setTab('zy',4,7);" >星期四</li>
          <li id="zy5" onmouseover="setTab('zy',5,7);" >星期五</li>
          <li id="zy6" onmouseover="setTab('zy',6,7);" >星期六</li>
          <li id="zy7" onmouseover="setTab('zy',7,7);" >星期日</li>
        </ul>
        <!-- // forecast-tab-nav end -->
        <div id="con_zy_1"  class="forecast-tab-box fn-hide">
          <ul class="forecast-list fn-clear">
            <?php $vod_new = ff_mysql_vod('cid:4;limit:1,8:order:vod_id desc'); ?>
            <?php if(is_array($vod_new)): $i = 0; $__LIST__ = $vod_new;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li>
                <h5><a href="<?php echo ($ppvod["vod_readurl"]); ?>" target="_blank"><?php echo ($ppvod["vod_name"]); ?></a></h5>
              </li><?php endforeach; endif; else: echo "" ;endif; ?>
          </ul>
          <!-- forecast-list end -->
        </div>
        <!-- // forecast-tab-box end -->
        <div id="con_zy_2" class="forecast-tab-box fn-hide">
          <ul class="forecast-list fn-clear">
            <?php $vod_new = ff_mysql_vod('cid:4;limit:9,8:order:vod_id desc'); ?>
            <?php if(is_array($vod_new)): $i = 0; $__LIST__ = $vod_new;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li>
                <h5><a href="<?php echo ($ppvod["vod_readurl"]); ?>" target="_blank"><?php echo ($ppvod["vod_name"]); ?></a></h5>
              </li><?php endforeach; endif; else: echo "" ;endif; ?>
          </ul>
          <!-- forecast-list end -->
        </div>
        <!-- // forecast-tab-box end -->
        <div id="con_zy_3" class="forecast-tab-box">
          <ul class="forecast-list fn-clear">
            <?php $vod_new = ff_mysql_vod('cid:4;limit:17,8:order:vod_id desc'); ?>
            <?php if(is_array($vod_new)): $i = 0; $__LIST__ = $vod_new;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li>
                <h5><a href="<?php echo ($ppvod["vod_readurl"]); ?>" target="_blank"><?php echo ($ppvod["vod_name"]); ?></a></h5>
              </li><?php endforeach; endif; else: echo "" ;endif; ?>
          </ul>
          <!-- forecast-list end -->
        </div>
        <!-- // forecast-tab-box end -->
        <div id="con_zy_4" class="forecast-tab-box fn-hide">
          <ul class="forecast-list fn-clear">
            <?php $vod_new = ff_mysql_vod('cid:4;limit:25,8:order:vod_id desc'); ?>
            <?php if(is_array($vod_new)): $i = 0; $__LIST__ = $vod_new;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li>
                <h5><a href="<?php echo ($ppvod["vod_readurl"]); ?>" target="_blank"><?php echo ($ppvod["vod_name"]); ?></a></h5>
              </li><?php endforeach; endif; else: echo "" ;endif; ?>
          </ul>
          <!-- forecast-list end -->
        </div>
        <!-- // forecast-tab-box end -->
        <div id="con_zy_5" class="forecast-tab-box fn-hide">
          <ul class="forecast-list fn-clear">
            <?php $vod_new = ff_mysql_vod('cid:4;limit:33,8:order:vod_id desc'); ?>
            <?php if(is_array($vod_new)): $i = 0; $__LIST__ = $vod_new;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li>
                <h5><a href="<?php echo ($ppvod["vod_readurl"]); ?>" target="_blank"><?php echo ($ppvod["vod_name"]); ?></a></h5>
              </li><?php endforeach; endif; else: echo "" ;endif; ?>
          </ul>
          <!-- forecast-list end -->
        </div>
        <!-- // forecast-tab-box end -->
        <div id="con_zy_6" class="forecast-tab-box fn-hide">
          <ul class="forecast-list fn-clear">
            <?php $vod_new = ff_mysql_vod('cid:4;limit:41,8:order:vod_id desc'); ?>
            <?php if(is_array($vod_new)): $i = 0; $__LIST__ = $vod_new;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li>
                <h5><a href="<?php echo ($ppvod["vod_readurl"]); ?>" target="_blank"><?php echo ($ppvod["vod_name"]); ?></a></h5>
              </li><?php endforeach; endif; else: echo "" ;endif; ?>
          </ul>
          <!-- forecast-list end -->
        </div>
        <!-- // forecast-tab-box end -->
        <div id="con_zy_7" class="forecast-tab-box fn-hide">
          <ul class="forecast-list fn-clear">
            <?php $vod_new = ff_mysql_vod('cid:4;limit:49,8:order:vod_id desc'); ?>
            <?php if(is_array($vod_new)): $i = 0; $__LIST__ = $vod_new;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li>
                <h5><a href="<?php echo ($ppvod["vod_readurl"]); ?>" target="_blank"><?php echo ($ppvod["vod_name"]); ?></a></h5>
              </li><?php endforeach; endif; else: echo "" ;endif; ?>
          </ul>
          <!-- forecast-list end -->
        </div>
        <!-- // forecast-tab-box end -->
      </div>
      <!-- // qire-assist end -->
    </div>
    <!-- // qire-box end -->
  </div><!--模板仿制、修改，QQ：182377860  模板支持网站：www.yayamov.com-->
  <!-- // ui-qire end -->
  <div class="ui-box ui-qire fn-clear" id="qire-wei" style="display:none;">
    <div class="qire-bar">
      <div class="ui-title"> <a class="ui-icon title-icon" href="<?php echo getlistname(5,'list_url');?>">微电影</a>
        <h2 class="hide-txt"><a href="<?php echo getlistname(5,'list_url');?>">微电影<em>Micro Film</em></a></h2>
        <a class="view-all" href="<?php echo getlistname(5,'list_url');?>">更多</a></div>
      <!-- // ui-title end -->
      <div class="ui-sort">
        <div class="sort-item">
          <ul class="sort-list fn-clear">
            <?php $vod_type=M('list')->where(array('list_pid'=>5))->select() ?>
            <?php if(is_array($vod_type)): $i = 0; $__LIST__ = $vod_type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvodson): ++$i;$mod = ($i % 2 )?><li target="_blank" href="<?php echo getlistname($ppvodson['list_id'],'list_url');?>"><?php echo ($ppvodson["list_name"]); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
          </ul>
          <!-- // sort-list#sort-type end -->
        </div>
        <!-- // sort-item end -->
      </div>
      <!-- // ui-sort end -->
      <div class="ui-ranking">
        <h3><a href="/tv-top.html">排行榜</a></h3>
        <ul class="ranking-list">
          <?php $hot_tv=ff_mysql_vod('cid:5;limit:1,10;order:vod_gold desc,vod_hits desc'); ?>
          <?php if(is_array($hot_tv)): $i = 0; $__LIST__ = $hot_tv;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><span><?php echo ($ppvod["vod_hits"]); ?> </span>
              <?php if(($i)  <  "4"): ?><em class="stress"><?php echo ($i); ?>.</em>
                <?php else: ?>
                <em><?php echo ($i); ?>.</em><?php endif; ?>
              <a href="<?php echo ($ppvod["vod_readurl"]); ?>" title="<?php echo ($ppvod["vod_name"]); ?>"><?php echo ($ppvod["vod_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <!-- // ranking-list end -->
      </div>
      <!-- // ui-ranking end -->
    </div>
    <!-- // qire-bar end -->
    <div class="qire-box">
      <div class="qire-commend">
        <ul class="img-list focus-list fn-clear">
          <?php $vod_new = ff_mysql_vod('cid:5;limit:1,2:order:vod_id desc'); ?>
          <?php if(is_array($vod_new)): $i = 0; $__LIST__ = $vod_new;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><a class="play-img" href="<?php echo ($ppvod["vod_readurl"]); ?>"><img src="<?php echo ($ppvod["vod_picurl"]); ?>" onerror="javascript:this.src='<?php echo ($tpl); ?>/static/images/m1938.gif';"  alt="<?php echo ($ppvod["vod_name"]); ?>"/>
              <label class="score"><?php echo ($ppvod["vod_gold"]); ?></label>
              </a>
              <div class="play-txt">
                <h5><a href="<?php echo ($ppvod["vod_readurl"]); ?>"><?php echo ($ppvod["vod_name"]); ?></a></h5>
                <p class="nums"><?php echo ($ppvod["vod_title"]); ?></p>
                <p class="desc"><?php echo (msubstr($ppvod["vod_content"],0,38)); ?>…</p>
                <dl class="item">
                  <dt>演员：</dt>
                  <dd> <?php echo (ff_search_url($ppvod["vod_actor"])); ?> </dd>
                </dl>
                <dl class="item">
                  <dt>地区：</dt>
                  <dd><?php echo ($ppvod["vod_area"]); ?></dd>
                </dl>
                <dl class="item">
                  <dt>类型：</dt>
                  <dd><a  href="<?php echo ($ppvod["list_url"]); ?> "><?php echo ($ppvod["list_name"]); ?></a></dd>
                </dl>
                <dl class="item">
                  <dt>年份：</dt>
                  <dd><?php echo ($ppvod["vod_year"]); ?></dd>
                </dl>
              </div>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <!-- focus-list end -->
      </div>
      <!-- // qire-commend end -->
      <div class="qire-random">
        <ul class="img-list fn-clear">
          <?php $vod_new = ff_mysql_vod('cid:5;limit:3,5:order:vod_id desc'); ?>
          <?php if(is_array($vod_new)): $i = 0; $__LIST__ = $vod_new;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><a class="play-img" href="<?php echo ($ppvod["vod_readurl"]); ?>"><img src="<?php echo ($ppvod["vod_picurl"]); ?>" onerror="javascript:this.src='<?php echo ($tpl); ?>/static/images/m1938.gif';"  alt="<?php echo ($ppvod["vod_name"]); ?>"/>
              <label class="mask"></label>
              <label class="text"><?php echo ($ppvod["vod_title"]); ?></label>
              <label class="score"><?php echo ($ppvod["vod_gold"]); ?></label>
              </a>
              <h5><a href="<?php echo ($ppvod["vod_readurl"]); ?>"><?php echo ($ppvod["vod_name"]); ?></a></h5>
              <p class="star"><?php echo (ff_search_url($ppvod["vod_actor"])); ?></p>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <!-- img-list end -->
      </div>
      <!-- // qire-random end -->
    </div>
    <!-- // qire-box end -->
  </div>
  <!-- // ui-qire end -->
  <div class="ui-sponsor">
    <!-- 广告位：index04 -->
    <!--<script type="text/javascript" src="/bd/index_banner4.js"></script>-->
  </div>
  <!-- // ui-sponsor end -->
  <div class="ui-box ui-qire" id="directory-focus">
    <div class="directory-item">
      <ul class="directory-list">
        <li>
          <dl class="tv">
            <dt><a href="<?php echo getlistname(2,'list_url');?>">电视剧</a></dt>
            <dd>
              <?php $vod_type=M('list')->where(array('list_pid'=>2))->select() ?>
              <?php if(is_array($vod_type)): $i = 0; $__LIST__ = $vod_type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvodson): ++$i;$mod = ($i % 2 )?><a target="_blank" target="_blank" href="<?php echo getlistname($ppvodson['list_id'],'list_url');?>"><?php echo ($ppvodson["list_name"]); ?></a></dd>
            <dd><?php endforeach; endif; else: echo "" ;endif; ?>
          </dl>
        </li>
        <li>
          <dl class="movie">
            <dt><a href="<?php echo getlistname(1,'list_url');?>">电影</a></dt>
            <dd>
              <?php $vod_type=M('list')->where(array('list_pid'=>1))->select() ?>
              <?php if(is_array($vod_type)): $i = 0; $__LIST__ = $vod_type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvodson): ++$i;$mod = ($i % 2 )?><a target="_blank" href="<?php echo getlistname($ppvodson['list_id'],'list_url');?>"><?php echo ($ppvodson["list_name"]); ?></a></dd>
            <dd><?php endforeach; endif; else: echo "" ;endif; ?>
          </dl>
        </li>
        <?php $hot_dm=ff_mysql_vod('cid:3;limit:6;order:vod_hits desc;vod_addtime desc'); ?>
        <li>
          <dl class="cartoon">
            <dt><a href=" <?php echo ($ppvod["list_url"]); ?> ">动漫</a></dt>
            <?php if(is_array($hot_dm)): $i = 0; $__LIST__ = $hot_dm;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><dd> <a href="<?php echo ($ppvod["vod_readurl"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,5)); ?></a> </dd><?php endforeach; endif; else: echo "" ;endif; ?>
          </dl>
        </li>
        <?php $hot_dm=ff_mysql_vod('cid:4;limit:6;order:vod_hits desc;vod_addtime desc'); ?>
        <li>
          <dl class="fun">
            <dt><a href=" <?php echo ($ppvod["list_url"]); ?> ">综艺娱乐</a></dt>
            <?php if(is_array($hot_dm)): $i = 0; $__LIST__ = $hot_dm;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><dd> <a href="<?php echo ($ppvod["vod_readurl"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,5)); ?></a> </dd><?php endforeach; endif; else: echo "" ;endif; ?>
          </dl>
        </li>
        <li>
          <dl class="wei">
          <dt><a href="<?php echo getlistname(5,'list_url');?>">微电影</a></dt>
          <dd>
            <?php $vod_type=M('list')->where(array('list_pid'=>5))->select() ?>
            <?php if(is_array($vod_type)): $i = 0; $__LIST__ = $vod_type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvodson): ++$i;$mod = ($i % 2 )?><a target="_blank" href="<?php echo getlistname($ppvodson['list_id'],'list_url');?>"><?php echo ($ppvodson["list_name"]); ?></a></dd><?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
    </div><!--模板仿制、修改，QQ：182377860  模板支持网站：www.yayamov.com-->
    <!-- // directory-list end -->
    <div class="directory-search fn-clear">
      <div class="ui-search">
        <form id="ffsearch" name="ffsearch" method="POST" action="<?php echo ($root); ?>index.php?s=vod-search" onSubmit="return qrsearch();">
          <input type="text" id="wd" name="wd" class="search-input" value="请在此处输入影片片名或演员名称。" onfocus="if(this.value=='请在此处输入影片片名或演员名称。'){this.value='';}" onblur="if(this.value==''){this.value='请在此处输入影片片名或演员名称。';};" />
          <input type="submit" id="wd"  class="search-button" value="" />
        </form>
      </div>
      <!-- // search End -->
      <div class="hotkeys"> ﻿
        <?php $vod_new = ff_mysql_vod('day:10;limit:4,8:order:vod_id desc'); ?>
        <?php if(is_array($vod_new)): $i = 0; $__LIST__ = $vod_new;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><a href="<?php echo ($ppvod["vod_readurl"]); ?>" target="_blank"><?php echo (msubstr($ppvod["vod_name"],0,5)); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
      </div>
      <!-- // hotkeys End -->
    </div>
    <!-- // directory-search end -->
  </div>
  <!-- // ui-box end -->
  <div class="ui-box ui-qire" id="star-collection" style="display:none;">
    <h3><span><a href="{maccms:vodtopiclink}">所有专题</a></span> 明星合集专题</h3>
    <ul class="txt-list fn-clear">
      <?php $special_new = ff_mysql_special('limit:0,16;order:special_id desc'); ?>
      <?php if(is_array($special_new)): $i = 0; $__LIST__ = $special_new;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><a href="<?php echo ($ppvod["special_readurl"]); ?>" target="_blank"><?php echo (msubstr($ppvod["special_name"],0,20)); ?></a></li>
    </ul>
  </div>
  <!-- // star-collection end -->
  <div id="links-focus">
    <div class="ui-title fn-clear"><span>欢迎交换友情链接!</span>
      <h2>友情链接</h2>
    </div>
    <div class="ui-cnt">
      <ul class="ul-link fn-clear">
        <!--<li><a href="http://www.yayamov.com/" target="_blank">丫丫电影网</a></li>-->
        <fflist name="list_link" id="ppvod"><a href="<?php echo ($ppvod["link_url"]); ?>" target="_blank"><?php echo ($ppvod["link_name"]); ?></a>┆<?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
    </div>
  </div>
  <!-- // links-focus end -->
</div>
<!-- // content end -->
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