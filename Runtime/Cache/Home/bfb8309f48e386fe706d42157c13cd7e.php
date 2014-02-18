<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>百度影音《<?php echo ($vod_name); ?>》在线观看-<?php echo ($vod_name); ?>剧情介绍-<?php echo ($sitename); ?>-最新最快的百度影音电影网！</title>
<meta name="keywords" content="<?php echo ($vod_name); ?>全集在线,<?php echo ($vod_name); ?>百度影音,<?php echo ($vod_name); ?>剧情介绍,<?php echo ($vod_name); ?>高清影片">
<meta name="description" content="<?php echo ($vod_name); ?>剧情:<?php echo (msubstr(h($vod_content),0,80)); ?>">
<link href="<?php echo ($tpl); ?>/static/css/base.css" type="text/css" rel="stylesheet" />
<script language="javascript">var Root='<?php echo ($root); ?>';var Sid='<?php echo ($sid); ?>';var Cid='<?php echo ($list_id); ?>';<?php if($sid == 1): ?>var Id='<?php echo ($vod_id); ?>';<?php else: ?>var Id='<?php echo ($news_id); ?>';<?php endif; ?></script>
<link href="<?php echo ($tpl); ?>/static/css/qirebox.css?v2013018" type="text/css" rel="stylesheet" />
<script src="<?php echo ($tpl); ?>/static/js/jquery-1.7.1.min.js" type="text/javascript"> </script>
<script src="<?php echo ($tpl); ?>/static/js/jquery.base.js" type="text/javascript"></script>
<script src="<?php echo ($tpl); ?>/static/js/playclass.js" type="text/javascript"></script>
<script language="javascript" src="<?php echo ($tpl); ?>/static/yayamov/js/jquery.js" charset="utf-8"></script>
<script language="javascript" src="<?php echo ($tpl); ?>/static/yayamov/js/jquery-autocomplete.js" charset="utf-8"></script>
<link href="<?php echo ($tpl); ?>/static/yayamov/css/base.css" type="text/css" rel="stylesheet">
<script language="javascript" src="<?php echo ($tpl); ?>/static/yayamov/js/home.js" charset="utf-8"></script>
<!--ff.tpl.js-->
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
    <!-- 广告位：vod01 -->
    <script type="text/javascript" src="/bd/drama_banner1.js"></script>
  </div>
  <!-- // ui-sponsor end -->
  <div class="bread-crumb-nav fn-clear">
    <ul class="bread-crumbs">
      <li class="home"> <a href="/">首页</a></li>
      <li><a href="<?php echo ($root); ?>">首页</a>〉<a href="<?php echo ($list_url); ?>"><?php echo ($list_name); ?></a>〉<a href="<?php echo ($vod_readurl); ?>"><?php echo ($vod_name); ?></a></li>
    </ul>
    <div class="bread-share fn-right">
      <div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare"><span class="bds_more">分享到：</span><a class="bds_qzone"></a><a class="bds_tsina"></a><a class="bds_tqq"></a><a class="bds_renren"></a><a class="bds_douban"></a><a class="bds_taobao"></a><a class="bds_ty"></a><a class="bds_tieba"></a><a class="bds_kaixin001"></a><a class="bds_copy"></a></div>
      <script type="text/javascript" id="bdshare_js" data="type=tools&uid=0" ></script>
      <script type="text/javascript" id="bdshell_js"></script>
      <script type="text/javascript">				document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com<?php echo ($tpl); ?>/static/js/shell_v2.js?t=" + new Date().getHours();
			</script>
      <!-- Baidu Button END -->
    </div>
  </div>
  <!-- // bread-crumb-nav end -->
  <div class="ui-box" id="detail-box">
    <div style="DISPLAY: block" id="rating-main" class="rating-box">
      <div class="rating-total fn-clear">
        <label style="width:<?php echo($ppvod['vod_gold']*10) ?>%;" id="total" class="rating-total-item"> </label>
        <div class="pingfen-total"><strong id="pingfen"><?php echo ($vod_gold); ?></strong><em id="pingfen2"><?php echo ($vod_gold); ?></em></div>
      </div>
      <div class="rating-panle">
        <div class="rating-bar">
          <div style="width:<?php echo ($vod_hits); ?>%;" id="fenshu" class="rating-bar-item"> </div>
        </div>
        <ul class="rating-show">
          <li><span title="力荐" class="starstop star5">力荐</span>
            <div class="power">
              <div class="power-item" id="pam"></div>
            </div>
            <em id="pa">5382人</em></li>
          <li><span title="推荐" class="starstop star4">推荐</span>
            <div class="power">
              <div class="power-item" id="pbm"></div>
            </div>
            <em id="pb">797人</em></li>
          <li><span title="还行" class="starstop star3">还行</span>
            <div class="power">
              <div class="power-item" id="pcm"></div>
            </div>
            <em id="pc">142人</em></li>
          <li><span title="较差" class="starstop star2">较差</span>
            <div class="power">
              <div class="power-item" id="pdm"></div>
            </div>
            <em id="pd">70人</em></li>
          <li><span title="很差" class="starstop star1">很差</span>
            <div class="power">
              <div class="power-item" id="pem"></div>
            </div>
            <em id="pe">193人</em></li>
        </ul>
      </div>
    </div>
    <!-- // rating-box End -->
    <div class="rating-box" >
      <div class="rating-kong-item"> </div>
    </div>
    <!-- // rating-box End -->
    <div class="detail-title fn-clear">
      <h2><?php echo ($vod_name); ?></h2>
      <div class="detail-sect">
        <div class="interest-sect user-bt"> <a class="sect-btn" href="javascript:void(0);" onclick="userFav('30');return false;" target=_blank>收藏</a>
          <div class="sect-show"><a class="cancel" href="javascript:void(0)" onClick="sitefav(window.location.href,'[vodinfo:name]在线看');return false;" target=_blank>已收藏</a></div>
        </div>
        <!-- // interest_sect End -->
        <div class="interest-rss user-bt"><a class="rss-btn sect-btn"  href="<?php echo ($vod_rssurl); ?>">订阅</a>
          <div class="rss-show sect-show"><a class="cancel" href="javascript:void(0);" val="0" data="-" id="delbt">[vodinfo:hits]已订阅</a></div>
        </div>
      </div>
      <!-- // detail-sect End -->
    </div>
    <!-- // detail-title End -->
    <div class="detail-cols fn-clear">
      <div class="detail-pic fn-left"><img width="225" height="300" src="<?php echo ($vod_picurl); ?>"  onerror="javascript:this.src='<?php echo ($tpl); ?>/static/images/yayamov.gif';"  alt="<?php echo ($vod_name); ?>" /></div>
      <!-- // detail-pic End -->
      <div class="detail-info fn-left">
        <div id="detail-rating" class="fn-clear">
          <div class="gold">
            <div> <span class="Gold"></span> <span class="Goldnum"></span><span class="golder">[<span class="Golder"> 我也要给这影片打分</span>]</span> </div>
          </div>
        </div>
        <!-- // detail-rating End -->
        <div class="info fn-clear">
          <dl>
            <dt>主演：</dt>
            <dd> <?php echo (ff_search_url($vod_actor)); ?></dd>
          </dl>
          <dl>
            <dt>状态：</dt>
            <dd><span class="color" >
              <?php if(in_array(($list_id), explode(',',"3,4,15,16,17,18,19,20,21,22"))): ?><?php if(!empty($vod_continu)): ?>连载至<?php echo ($vod_continu); ?>
                  <?php if(($list_pid)  ==  "4"): ?>期
                    <?php else: ?>
                    集<?php endif; ?>
                  </p><?php endif; ?>
                <?php else: ?>
                <?php echo ($vod_title); ?><?php endif; ?>
              </span></dd>
          </dl>
          <dl class="fn-left">
            <dt>类型：</dt>
            <dd><a href='  <?php echo ($list_url); ?> '  > <?php echo ($list_name); ?></a> </dd>
          </dl>
          <dl class="fn-right">
            <dt>地区：</dt>
            <dd><span><?php echo ($vod_area); ?></span></dd>
          </dl>
          <dl class="fn-left">
            <dt>语言：</dt>
            <dd> <span> <?php echo (($vod_language)?($vod_language):'未知'); ?></span></dd>
          </dl>
          <dl class="fn-right">
            <dt>导演：</dt>
            <dd> <?php echo (ff_search_url($vod_director)); ?></dd>
          </dl>
          <dl class="fn-left">
            <dt>时间：</dt>
            <dd><span id="addtime"><?php echo (date('Y-m-d h:m:s',$vod_addtime)); ?></span></dd>
          </dl>
          <dl class="fn-right">
            <dt>年份：</dt>
            <dd><span><?php echo (($vod_year)?($vod_year):'未知'); ?></span></dd>
          </dl>
          <dl>
            <dt>
              <?php $count=M('cm')->where(array('cm_cid'=>$vod_id))->select(); ?>
              评论：</dt>
            <dd id="link-cmt" >
              <label>当前有<strong id="commnum"><?php echo count($count);?></strong>条评论，</label>
              <a href="#comment">我也要评论</a></dd>
          </dl>
          <dl class="juqing">
            <dt>剧情：</dt>
            <dd><?php echo (msubstr($vod_content,0,50)); ?>…<a class="link detail-desc" href="#detail-intro">详细剧情</a> </dd>
          </dl>
        </div>
        <!-- // info End -->
      </div>
      <!-- // detail-info End -->
      <div class="detail-union fn-right">
        <!-- 广告位：vod02-300 -->
        <script type="text/javascript" src="/bd/drama_right_300.js"></script>
      </div>
      <!-- // detail-ad End -->
    </div>
    <!-- // detail-cols End -->
  </div>
  <!-- // ui-box#detail-box end -->
  <div class="ui-sponsor">
    <!-- 广告位：vod03 -->
    <script type="text/javascript" >BAIDU_CLB_SLOT_ID = "425655";</script>
  </div>
  <!-- // ui-sponsor end -->
  <div class="ui-box" id="detail-list"> <a name=""></a>
    <?php if(is_array($vod_playlist)): $i = 0; $__LIST__ = $vod_playlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><div class="play-list-box" id="baiduhd-pl-list">
        <div class="caption fn-clear">
          <h4><a href="#"><img src="<?php echo ($tpl); ?>/static/images/playlogo/<?php echo ($ppvod["playname"]); ?>.gif" alt="" /></a></h4>
          <div class="txt">. </div>
        </div>
        <div class="content">
          <p class="play-list">
            <?php $countji=count($ppvod['son'])-1;if($ppvod['son']>10){krsort($ppvod['son']);} ?>
            <?php if(is_array($ppvod['son'])): $iii = 0; $__LIST__ = $ppvod['son'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvodson): ++$iii;$mod = ($iii % 2 )?><a target="_blank" href="<?php echo ($ppvodson["playurl"]); ?>"><?php echo ($ppvodson["playname"]); ?>
              <?php if(($iii)  ==  "1"): ?><span class="new">new</span><?php endif; ?>
              </a><?php endforeach; endif; else: echo "" ;endif; ?>
          </p>
        </div>
      </div><?php endforeach; endif; else: echo "" ;endif; ?>
  </div>
  <!-- // ui-box end -->
  <div class="ui-sponsor">
    <!-- 广告位：vod04 -->
    <script type="text/javascript" src="/bd/drama_banner2.js"></script>
  </div>
  <!-- // ui-sponsor end -->
  <div class="ui-box" id="like-focus">
    <div class="ui-title">
      <h2>喜欢看“<strong><?php echo ($vod_name); ?></strong>”的人也喜欢：</h2>
    </div>
    <ul class="img-list fn-clear">
      <?php $hot_up = ff_mysql_vod('cid:'.$list_id.';limit:7;order:vod_up desc,vod_addtime desc'); ?>
      <?php if(is_array($hot_up)): $i = 0; $__LIST__ = $hot_up;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><a class="play-img" target="_blank" href="<?php echo ($ppvod["vod_readurl"]); ?>"><img src="<?php echo ($ppvod["vod_picurl"]); ?>" onerror="javascript:this.src='<?php echo ($tpl); ?>/static/images/yayamov.gif';"  alt="<?php echo ($ppvod["vod_name"]); ?>" />
          <label class="mask"></label>
          <label class="text"><?php echo ($ppvod["vod_title"]); ?></label>
          <label class="score"><?php echo ($ppvod["vod_gold"]); ?></label>
          </a>
          <h5><a target="_blank" href="<?php echo ($ppvod["vod_readurl"]); ?>"><?php echo ($ppvod["vod_name"]); ?></a></h5>
        </li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
    <!-- // img-list end -->
    <ul class="txt-list">
      <?php $hot_up1 = ff_mysql_vod('cid:'.$list_id.';limit:8,15;order:vod_up desc,vod_addtime desc'); ?>
      <?php if(is_array($hot_up1)): $i = 0; $__LIST__ = $hot_up1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><span>
          <?php if($i < 10): ?>0<?php echo ($i); ?>
            <?php else: ?>
            <?php echo ($i); ?><?php endif; ?>
          .</span><a target="_blank" href="<?php echo ($ppvod["vod_readurl"]); ?>"><?php echo ($ppvod["vod_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
    <!-- // txt-list End -->
  </div>
  <!-- // ui-box#like-focus end -->
  <div class="ui-box" id="comment" >
    <div class="ui-title">
      <h3>网友评论</h3>
    </div>
    <div class="ui-cnt">
      <div class="box">
        <div id="Comment" class="maxBox">评论加载ING...</div>
      </div>
      <!-- UYAN COUNT END -->
    </div>
    <!-- // comment End -->
  </div>
  <!-- // ui-box end -->
  <div class="ui-sponsor">
    <!-- 广告位：vod05 -->
    <script type="text/javascript" src="/bd/drama_banner3.js"></script>
  </div>
  <!-- // ui-sponsor end -->
  <div class="ui-box ui-qire" id="star-collection">
    <h3><span><a href="<?php echo ($url_special); ?>">所有专题</a></span> 明星合集专题</h3>
    <ul class="txt-list fn-clear">
      <?php $special_new = ff_mysql_special('limit:0,10;order:special_id desc'); ?>
      <?php if(is_array($special_new)): $i = 0; $__LIST__ = $special_new;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><a href="<?php echo ($ppvod["special_readurl"]); ?>" target="_blank"><?php echo (msubstr($ppvod["special_name"],0,20)); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
  </div>
  <!-- // star-collection end -->
</div>
<!-- // wrap End -->
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


<script type="text/javascript" src="<?php echo ($tpl); ?>/static/js/jquery.colorbox.js"></script>
<div style="display:none">
<div id="detail-intro">
<div class="ui-dialog-cnt">
  <div class="detail-desc-cnt"> <?php echo ($vod_content); ?>yayamov.com </div>
</div>
<script type="text/javascript"> 
$(document).ready(function(){
	$(".detail-desc").colorbox({
		inline:true, 
		opacity: 0.6,
		width: "1000px"
	});
});
</script>
<script type="text/javascript" src="<?php echo ($tpl); ?>js/jquery.colorbox.js"></script>
</body>
</html>