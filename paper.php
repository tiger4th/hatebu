<div id="paper" class="shadow">

<div id="header">
<p class="x-small">
<span class="bold"><?php if($page=='top'){echo '1';}else{echo $key+2;} ?></span>　　
令和<?php echo (date("Y")-2018); ?>年（<?php echo date("Y年");?>）<?php echo date("n月j日"); ?>　<?php echo $day[date("w")]; ?>曜日
　　　　　　　　　は　　　て　　　ぶ　　　新　　　聞
</p>
</div>

<div id="box">

<?php if($page=="top"){ ?>
<div id="right">
<h1><img src="./image/logo.gif" alt="はてぶ新聞"></h1>
<br /><br />
<div class="date">
  <a href="<?php echo $wiki; ?>" target="_blank">
    <p>令和<?php echo date("Y") - 2018; ?>年（<?php echo date("Y年"); ?>）</p>
    <p class="bold"><span class="xx-large"><?php echo date("n"); ?></span><span class="large">月</span> <span class="xx-large"><?php echo date("j"); ?></span><span class="large">日</span></p>
    <p class="large bold"><?php echo $day[date("w")]; ?>曜日</p>
  </a>
</div>
<br />
<input type="hidden" id="vertical" value="1">
<a href="javascript:;" onclick="rotate('button'); return false;"><img src="./image/lotate.gif" width="80" height="20" class="lotate"></a>

<?php if($device==='pc'){ ?>
<br /><br /><br />
<iframe src="https://www.sunny-spot.net/get_fcst/parts_fcst.php?ID=4410&CL=BLACK" width="160" height="370" hspace="0" vspace="0" marginheight="0" marginwidth="0" frameborder="0" scrolling=no></iframe>
<br />
<?php } ?>
<br />

<!-- 広告 -->
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8381218834058340"
     crossorigin="anonymous"></script>
<!-- hatebu右 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-8381218834058340"
     data-ad-slot="6455781768"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
<!-- 広告 -->
<br />
<!--
<SCRIPT charset="utf-8" type="text/javascript" src="http://ws.amazon.co.jp/widgets/q?ServiceVersion=20070822&MarketPlace=JP&ID=V20070822/JP/tiger4th-22/8006/3d3ced38-8d14-4282-88d1-5e6834674e25"> </SCRIPT> <NOSCRIPT><A HREF="http://ws.amazon.co.jp/widgets/q?ServiceVersion=20070822&MarketPlace=JP&ID=V20070822%2FJP%2Ftiger4th-22%2F8006%2F3d3ced38-8d14-4282-88d1-5e6834674e25&Operation=NoScript">Amazon.co.jp ウィジェット</A></NOSCRIPT>
-->
</div>

<div id="left">
<div id="rotate_99">
<?php /* ?>
<h2>速報</h2>
<?php $i = 0; ?>
<?php foreach ($text["topics"] as $value) { ?>
<p class='article'>
<b class="large"><a href="<?php echo $value["link"]; ?>" target="_blank"><?php echo $value["title"]; ?></a></b>
 <a href="<?php echo "http://b.hatena.ne.jp/entry/".$value["link"]; ?>" target="_blank"><span class='num'><?php echo $value["bookmarkcount"]; ?></span></a><br />
<?php echo $value["description"]; ?>
<span class="x-small"> <?php echo $value["date"]; ?></span>
</p>
<?php $i++; if ($i >= 3) {break;} ?>
<?php } ?>
<?php */ ?>

<h2>一般</h2>
<?php $i = 0; ?>
<?php foreach ($text["general"] as $value) { ?>
<p class='article'>
<b class="large"><a href="<?php echo $value["link"]; ?>" target="_blank"><?php echo $value["title"]; ?></a></b>
 <a href="<?php echo "http://b.hatena.ne.jp/entry/".$value["link"]; ?>" target="_blank"><span class='num'><?php echo $value["bookmarkcount"]; ?></span></a><br />
<?php echo $value["description"]; ?>
<span class="x-small"> <?php echo $value["date"]; ?></span>
</p>
<?php $i++; if ($i >= 3) {break;} ?>
<?php } ?>

<h2>政治・経済</h2>
<?php $i = 0; ?>
<?php foreach ($text["economics"] as $value) { ?>
<p class='article'>
<b class="large"><a href="<?php echo $value["link"]; ?>" target="_blank"><?php echo $value["title"]; ?></a></b>
 <a href="<?php echo "http://b.hatena.ne.jp/entry/".$value["link"]; ?>" target="_blank"><span class='num'><?php echo $value["bookmarkcount"]; ?></span></a><br />
<?php echo $value["description"]; ?>
<span class="x-small"> <?php echo $value["date"]; ?></span>
</p>
<?php $i++; if ($i >= 3) {break;} ?>
<?php } ?>

<h2>スポーツ・芸能・音楽</h2>
<?php $i = 0; ?>
<?php foreach ($text["entertainment"] as $value) { ?>
<p class='article'>
<b class="large"><a href="<?php echo $value["link"]; ?>" target="_blank"><?php echo $value["title"]; ?></a></b>
 <a href="<?php echo "http://b.hatena.ne.jp/entry/".$value["link"]; ?>" target="_blank"><span class='num'><?php echo $value["bookmarkcount"]; ?></span></a><br />
<?php echo $value["description"]; ?>
<span class="x-small"> <?php echo $value["date"]; ?></span>
</p>
<?php $i++; if ($i >= 3) {break;} ?>
<?php } ?>

<h2>Ａｍａｚｏｎ</h2>
<?php $i = 0; ?>
<?php foreach ($text["amazon"] as $value) { ?>
<p class='article'>
<b class="large"><a href="<?php echo $value["link"]; ?>" target="_blank"><?php echo $value["title"]; ?></a></b>
 <a href="<?php echo "http://b.hatena.ne.jp/entry/".$value["link"]; ?>" target="_blank"><span class='num'><?php echo $value["bookmarkcount"]; ?></span></a><br />
<?php echo $value["description"]; ?>
<span class="x-small"> <?php echo $value["date"]; ?></span>
</p>
<?php $i++; if ($i >= 3) {break;} ?>
<?php } ?>
</div>
</div>

<input type="hidden" id="state_top" value="1">
<input type="hidden" id="code_top" value="99">

<?php }elseif($page=="amazon"){ ?>
<div id="center">
<div id="rotate_<?php echo array_search($page, $list); ?>">
<h2><?php echo $long_name[array_search($page, $list)]; ?></h2>
<br />
<?php foreach ($text[$page] as $value) { ?>
<p class='article'>
<b class="large"><a href="<?php echo $value["link"]; ?>" target="_blank"><?php echo $value["title"]; ?></a></b>
 <a href="<?php echo "http://b.hatena.ne.jp/entry/".$value["link"]; ?>" target="_blank"><span class='num'><?php echo $value["bookmarkcount"]; ?></span></a><br />
<span class="x-small"> <?php echo $value["date"]; ?></span>
<br/><br/>
</p>
<?php } ?>
<br />
<!-- <iframe src="http://rcm-jp.amazon.co.jp/e/cm?t=tiger4th-22&o=9&p=16&l=bn1&mode=books-jp&browse=202188011&fc1=000000&lt1=_blank&lc1=3366FF&bg1=EEEEEE&f=ifr" marginwidth="0" marginheight="0" width="468" height="336" border="0" frameborder="0" style="border:none;" scrolling="no"></iframe> -->
</div>
</div>

<input type="hidden" id="state_<?php echo $page; ?>" value="0">
<input type="hidden" id="code_<?php echo $page; ?>" value="<?php echo $key; ?>">

<?php }else{ ?>
<div id="center">
<div id="rotate_<?php echo array_search($page, $list); ?>">
<h2><?php echo $long_name[array_search($page, $list)]; ?></h2>
<br />
<?php foreach ($text[$page] as $value) { ?>
<p class='article'>
<b class="large"><a href="<?php echo $value["link"]; ?>" target="_blank"><?php echo $value["title"]; ?></a></b>
 <a href="<?php echo "http://b.hatena.ne.jp/entry/".$value["link"]; ?>" target="_blank"><span class='num'><?php echo $value["bookmarkcount"]; ?></span></a><br />
<?php echo $value["description"]; ?>
<span class="x-small"> <?php echo $value["date"]; ?></span>
</p>
<?php } ?>
</div>
</div>

<input type="hidden" id="state_<?php echo $page; ?>" value="0">
<input type="hidden" id="code_<?php echo $page; ?>" value="<?php echo $key; ?>">
<?php } ?>

<div id="footer">
<p class="hidden">&copy;tiger4th.com</p>
</div>
</div>

</div>
