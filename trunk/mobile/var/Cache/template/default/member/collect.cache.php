<?php if (!class_exists('template', false)) die('Access Denied');
0
|| self::check('default\member/collect.tpl', 'D:\Web\Witkey\wwwroot\yph\trunk\mobile\application\View\default\member\collect.tpl', 1460437159)
;?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no">
  <meta content="telephone=no" name="format-detection">
  <meta name="apple-touch-fullscreen" content="yes">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <title>我的收藏</title>
  <link href="<?php echo $BASE_V;?>css/common/base.css" type="text/css" rel="stylesheet">
  <link href="<?php echo $BASE_V;?>css/user/user.css" type="text/css" rel="stylesheet">
  <link href="<?php echo $BASE_V;?>css/common/itemListTemplate.css" type="text/css" rel="stylesheet">
  <style id="style-1-cropbar-clipper">
  /* Copyright 2014 Evernote Corporation. All rights reserved. */
  
  .en-markup-crop-options {
    top: 18px !important;
    left: 50% !important;
    margin-left: -100px !important;
    width: 200px !important;
    border: 2px rgba(255, 255, 255, .38) solid !important;
    border-radius: 4px !important;
  }
  
  .en-markup-crop-options div div:first-of-type {
    margin-left: 0px !important;
  }
  </style>
</head>

<body>
      <header id="common_hd" class="c_txt rel">
        <a id="hd_back" class="abs comm_p8" href="<?php echo $referer_url;?>">返回</a>
        <a id="common_hd_logo" class="t_hide abs common_hd_logo">我的收藏</a>
        <h1 class="hd_tle">我的收藏</h1>
        <a id="hd_enterShop" class="hide abs" href="<?php echo MOBILE_URL; ?>member/home" style="display: block;"> <span id="hd_enterShop_img" class="abs"> <img class="block" src="" width="32" height="32" style="display: block;"> </span>会员中心</a>
    </header>

  <nav class="favlistTab">
    <ul>
      <li><a href="?type=goods"><span id="productBtn"<?php if($type=='goods') { ?> class="esp"<?php } ?>>商品</span></a></li>
      <li><a href="?type=shop"><span id="shopBtn"<?php if($type=='shop') { ?> class="esp"<?php } ?>>店铺</span></a></li>
    </ul>
  </nav>
  <section id="favo_wrap"<?php if($type!='goods') { ?> class="hide"<?php } ?>>
    <div class="i_wrap margin_auto rel hide" id="favproduct" style="display: block;">
      <ul class="i_ul rel" id="hot_ul">
      </ul>
      <div class="clear"></div>
    </div>
  </section>
  <section id="favshop"<?php if($type!='shop') { ?> class="hide"<?php } ?>>
  </section>
  <p id="empty_favo" class="c_txt hide" style="display: none;"></p>
  <p id="scroll_loading_txt" class="c_txt hide loading" style="display: none;">&nbsp;</p>
  <nav id="uploadapp">
    <p></p>
    <p class="txt">收藏商品降价会有提醒哦！</p>
    <p></p>
  </nav>
  <script src="<?php echo STATIC_URL; ?>common/assets/js/jquery.min.js" type="text/javascript"></script>
  <script src="<?php echo STATIC_URL; ?>js/jquery-plugin/jquery.tmpl.min.js" type="text/javascript"></script>
  <script type="text/javascript">
  var index_url = '<?php echo INDEX_URL; ?>';
  var mobile_url = '<?php echo MOBILE_URL; ?>';
  var static_url = '<?php echo STATIC_URL; ?>';
  var base_v = '<?php echo $BASE_V;?>';
  var php_self = '<?php echo PHP_SELF; ?>';

  var global_type = '<?php echo $type;?>';
  </script>
  <script src="<?php echo $BASE_V;?>js/member_collect.js" type="text/javascript"></script>
</body>

</html>
