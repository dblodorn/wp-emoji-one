<?php
require_once( dirname(dirname(dirname(dirname(__FILE__)))) . '/wp-config.php');
load_plugin_textdomain('wp_emoji_one', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?php _e('WP Emoji One',"wp_emoji_one"); ?></title>
	<script language="javascript" type="text/javascript" src="<?php echo get_option('siteurl') ?>/wp-includes/js/tinymce/tiny_mce_popup.js"></script>
	<script language="javascript" type="text/javascript" src="<?php echo get_option('siteurl') ?>/wp-includes/js/tinymce/utils/form_utils.js"></script>
	<link rel='stylesheet' id='wp_emoji-css'  href='<?php echo plugin_dir_url( __FILE__ ); ?>/css/wp-emoji-one-style.css' type='text/css' media='all' />
	<base target="_self" />
	<script language="javascript" type="text/javascript" src="<?php echo plugin_dir_url( __FILE__ ); ?>/js/InsertEmoji.js"></script>
</head>
<body id="link" onload="tinyMCEPopup.executeOnLoad('init();');document.body.style.display='';" style="display: none">

	<form action="#">
	
  <input id="tab1" type="radio" name="tabs" checked>
  <label for="tab1" title="<?php _e("People", 'wp_emoji_one'); ?>"><img src="<?php echo plugin_dir_url( __FILE__ ); ?>/img/smiley.png" alt="" /></label>
  <input id="tab2" type="radio" name="tabs">
  <label for="tab2" title="<?php _e("Nature and Animals", 'wp_emoji_one'); ?>"><img src="<?php echo plugin_dir_url( __FILE__ ); ?>/img/flower.png" alt="" /></label>
  <input id="tab3" type="radio" name="tabs">
  <label for="tab3" title="<?php _e("Food and Drink", 'wp_emoji_one'); ?>"><img src="<?php echo plugin_dir_url( __FILE__ ); ?>/img/apple.png" alt="" /></label>
  <input id="tab4" type="radio" name="tabs">
  <label for="tab4" title="<?php _e("Celebration", 'wp_emoji_one'); ?>"><img src="<?php echo plugin_dir_url( __FILE__ ); ?>/img/bow.png" alt="" /></label>
  <input id="tab5" type="radio" name="tabs">
  <label for="tab5" title="<?php _e("Activity", 'wp_emoji_one'); ?>"><img src="<?php echo plugin_dir_url( __FILE__ ); ?>/img/swim.png" alt="" /></label>
  <input id="tab6" type="radio" name="tabs">
  <label for="tab6" title="<?php _e("Travel and Places", 'wp_emoji_one'); ?>"><img src="<?php echo plugin_dir_url( __FILE__ ); ?>/img/car.png" alt="" /></label>
  <input id="tab7" type="radio" name="tabs">
  <label for="tab7" title="<?php _e("Objects and Symbols", 'wp_emoji_one'); ?>"><img src="<?php echo plugin_dir_url( __FILE__ ); ?>/img/clock.png" alt="" /></label>
  <hr><br />

	<?php //declaring path to icons 
		// $dir = plugin_dir_url( __FILE__ ).'/icons/'; 
	?>

  <span class="size-box">
    <label for="icon-size"><?php _e("Size:", 'wp_emoji_one'); ?></label></th>
      <select name="size" id="iconsize">
        <option value="16" selected="selected">16</option>
        <option value="18">18</option>
        <option value="24">24</option>
        <option value="32">32</option>
        <option value="64">64</option>
      </select>
      <em><?php _e("Specify the image size to use for the icons.", 'wp_emoji_one'); ?></em><br/>
  </span>
<!--
///// $$CONTENT-1 ////
-->
  <section id="content1">
    <p>
      <div class="emoji-grid">
        <a href="javascript:emojiinsert('001.png')"><i class="sprite sprite-001"></i></a>
        <a href="javascript:emojiinsert('002.png')"><i class="sprite sprite-002"></i></a>
        <a href="javascript:emojiinsert('003.png')"><i class="sprite sprite-003"></i></a>
        <a href="javascript:emojiinsert('004.png')"><i class="sprite sprite-004"></i></a>
        <a href="javascript:emojiinsert('005.png')"><i class="sprite sprite-005"></i></a>
        <a href="javascript:emojiinsert('006.png')"><i class="sprite sprite-006"></i></a>
        <a href="javascript:emojiinsert('007.png')"><i class="sprite sprite-007"></i></a>
        <a href="javascript:emojiinsert('008.png')"><i class="sprite sprite-008"></i></a>
        <a href="javascript:emojiinsert('009.png')"><i class="sprite sprite-009"></i></a>
        <a href="javascript:emojiinsert('010.png')"><i class="sprite sprite-010"></i></a>
        <a href="javascript:emojiinsert('011.png')"><i class="sprite sprite-011"></i></a>
        <a href="javascript:emojiinsert('012.png')"><i class="sprite sprite-012"></i></a>
        <a href="javascript:emojiinsert('013.png')"><i class="sprite sprite-013"></i></a>
        <a href="javascript:emojiinsert('014.png')"><i class="sprite sprite-014"></i></a>
        <a href="javascript:emojiinsert('015.png')"><i class="sprite sprite-015"></i></a>
        <a href="javascript:emojiinsert('016.png')"><i class="sprite sprite-016"></i></a>
        <a href="javascript:emojiinsert('017.png')"><i class="sprite sprite-017"></i></a>
        <a href="javascript:emojiinsert('018.png')"><i class="sprite sprite-018"></i></a>
        <a href="javascript:emojiinsert('019.png')"><i class="sprite sprite-019"></i></a>
        <a href="javascript:emojiinsert('020.png')"><i class="sprite sprite-020"></i></a>
        <a href="javascript:emojiinsert('021.png')"><i class="sprite sprite-021"></i></a>
        <a href="javascript:emojiinsert('022.png')"><i class="sprite sprite-022"></i></a>
        <a href="javascript:emojiinsert('023.png')"><i class="sprite sprite-023"></i></a>
        <a href="javascript:emojiinsert('024.png')"><i class="sprite sprite-024"></i></a>
        <a href="javascript:emojiinsert('025.png')"><i class="sprite sprite-025"></i></a>
        <a href="javascript:emojiinsert('026.png')"><i class="sprite sprite-026"></i></a>
        <a href="javascript:emojiinsert('027.png')"><i class="sprite sprite-027"></i></a>
        <a href="javascript:emojiinsert('028.png')"><i class="sprite sprite-028"></i></a>
        <a href="javascript:emojiinsert('029.png')"><i class="sprite sprite-029"></i></a>
        <a href="javascript:emojiinsert('030.png')"><i class="sprite sprite-030"></i></a>
        <a href="javascript:emojiinsert('031.png')"><i class="sprite sprite-031"></i></a>
        <a href="javascript:emojiinsert('032.png')"><i class="sprite sprite-032"></i></a>
        <a href="javascript:emojiinsert('033.png')"><i class="sprite sprite-033"></i></a>
        <a href="javascript:emojiinsert('034.png')"><i class="sprite sprite-034"></i></a>
        <a href="javascript:emojiinsert('035.png')"><i class="sprite sprite-035"></i></a>
        <a href="javascript:emojiinsert('036.png')"><i class="sprite sprite-036"></i></a>
        <a href="javascript:emojiinsert('037.png')"><i class="sprite sprite-037"></i></a>
        <a href="javascript:emojiinsert('038.png')"><i class="sprite sprite-038"></i></a>
        <a href="javascript:emojiinsert('039.png')"><i class="sprite sprite-039"></i></a>
        <a href="javascript:emojiinsert('040.png')"><i class="sprite sprite-040"></i></a>
        <a href="javascript:emojiinsert('041.png')"><i class="sprite sprite-041"></i></a>
        <a href="javascript:emojiinsert('042.png')"><i class="sprite sprite-042"></i></a>
        <a href="javascript:emojiinsert('043.png')"><i class="sprite sprite-043"></i></a>
        <a href="javascript:emojiinsert('044.png')"><i class="sprite sprite-044"></i></a>
        <a href="javascript:emojiinsert('045.png')"><i class="sprite sprite-045"></i></a>
        <a href="javascript:emojiinsert('046.png')"><i class="sprite sprite-046"></i></a>
        <a href="javascript:emojiinsert('047.png')"><i class="sprite sprite-047"></i></a>
        <a href="javascript:emojiinsert('048.png')"><i class="sprite sprite-048"></i></a>
        <a href="javascript:emojiinsert('049.png')"><i class="sprite sprite-049"></i></a>
        <a href="javascript:emojiinsert('050.png')"><i class="sprite sprite-050"></i></a>
        <a href="javascript:emojiinsert('051.png')"><i class="sprite sprite-051"></i></a>
        <a href="javascript:emojiinsert('052.png')"><i class="sprite sprite-052"></i></a>
        <a href="javascript:emojiinsert('053.png')"><i class="sprite sprite-053"></i></a>
        <a href="javascript:emojiinsert('054.png')"><i class="sprite sprite-054"></i></a>
        <a href="javascript:emojiinsert('055.png')"><i class="sprite sprite-055"></i></a>
        <a href="javascript:emojiinsert('056.png')"><i class="sprite sprite-056"></i></a>
        <a href="javascript:emojiinsert('057.png')"><i class="sprite sprite-057"></i></a>
        <a href="javascript:emojiinsert('058.png')"><i class="sprite sprite-058"></i></a>
        <a href="javascript:emojiinsert('059.png')"><i class="sprite sprite-059"></i></a>
        <a href="javascript:emojiinsert('060.png')"><i class="sprite sprite-060"></i></a>
        <a href="javascript:emojiinsert('061.png')"><i class="sprite sprite-061"></i></a>
        <a href="javascript:emojiinsert('062.png')"><i class="sprite sprite-062"></i></a>
        <a href="javascript:emojiinsert('063.png')"><i class="sprite sprite-063"></i></a>
        <a href="javascript:emojiinsert('064.png')"><i class="sprite sprite-064"></i></a>
        <a href="javascript:emojiinsert('065.png')"><i class="sprite sprite-065"></i></a>
        <a href="javascript:emojiinsert('066.png')"><i class="sprite sprite-066"></i></a>
        <a href="javascript:emojiinsert('067.png')"><i class="sprite sprite-067"></i></a>
        <a href="javascript:emojiinsert('068.png')"><i class="sprite sprite-068"></i></a>
        <a href="javascript:emojiinsert('069.png')"><i class="sprite sprite-069"></i></a>
        <a href="javascript:emojiinsert('070.png')"><i class="sprite sprite-070"></i></a>
        <a href="javascript:emojiinsert('071.png')"><i class="sprite sprite-071"></i></a>
        <a href="javascript:emojiinsert('072.png')"><i class="sprite sprite-072"></i></a>
        <a href="javascript:emojiinsert('073.png')"><i class="sprite sprite-073"></i></a>
        <a href="javascript:emojiinsert('074.png')"><i class="sprite sprite-074"></i></a>
        <a href="javascript:emojiinsert('075.png')"><i class="sprite sprite-075"></i></a>
        <a href="javascript:emojiinsert('076.png')"><i class="sprite sprite-076"></i></a>
        <a href="javascript:emojiinsert('077.png')"><i class="sprite sprite-077"></i></a>
        <a href="javascript:emojiinsert('078.png')"><i class="sprite sprite-078"></i></a>
        <a href="javascript:emojiinsert('079.png')"><i class="sprite sprite-079"></i></a>
        <a href="javascript:emojiinsert('080.png')"><i class="sprite sprite-080"></i></a>
        <a href="javascript:emojiinsert('081.png')"><i class="sprite sprite-081"></i></a>
        <a href="javascript:emojiinsert('082.png')"><i class="sprite sprite-082"></i></a>
        <a href="javascript:emojiinsert('083.png')"><i class="sprite sprite-083"></i></a>
        <a href="javascript:emojiinsert('084.png')"><i class="sprite sprite-084"></i></a>
        <a href="javascript:emojiinsert('085.png')"><i class="sprite sprite-085"></i></a>
        <a href="javascript:emojiinsert('086.png')"><i class="sprite sprite-086"></i></a>
        <a href="javascript:emojiinsert('087.png')"><i class="sprite sprite-087"></i></a>
        <a href="javascript:emojiinsert('088.png')"><i class="sprite sprite-088"></i></a>
        <a href="javascript:emojiinsert('089.png')"><i class="sprite sprite-089"></i></a>
        <a href="javascript:emojiinsert('090.png')"><i class="sprite sprite-090"></i></a>
        <a href="javascript:emojiinsert('091.png')"><i class="sprite sprite-091"></i></a>
        <a href="javascript:emojiinsert('092.png')"><i class="sprite sprite-092"></i></a>
        <a href="javascript:emojiinsert('093.png')"><i class="sprite sprite-093"></i></a>
        <a href="javascript:emojiinsert('094.png')"><i class="sprite sprite-094"></i></a>
        <a href="javascript:emojiinsert('095.png')"><i class="sprite sprite-095"></i></a>
        <a href="javascript:emojiinsert('096.png')"><i class="sprite sprite-096"></i></a>
        <a href="javascript:emojiinsert('097.png')"><i class="sprite sprite-097"></i></a>
        <a href="javascript:emojiinsert('098.png')"><i class="sprite sprite-098"></i></a>
        <a href="javascript:emojiinsert('099.png')"><i class="sprite sprite-099"></i></a>
      </div>
    </p>
  </section>
<!--
///// $$CONTENT-2 ////
-->
  <section id="content2">
    <p>
      <div class="emoji-grid">    
        <a href="javascript:emojiinsert('101.png')"><i class="sprite sprite-101"></i></a>
        <a href="javascript:emojiinsert('102.png')"><i class="sprite sprite-102"></i></a>
        <a href="javascript:emojiinsert('103.png')"><i class="sprite sprite-103"></i></a>
        <a href="javascript:emojiinsert('104.png')"><i class="sprite sprite-104"></i></a>
        <a href="javascript:emojiinsert('105.png')"><i class="sprite sprite-105"></i></a>
        <a href="javascript:emojiinsert('106.png')"><i class="sprite sprite-106"></i></a>
        <a href="javascript:emojiinsert('107.png')"><i class="sprite sprite-107"></i></a>
        <a href="javascript:emojiinsert('108.png')"><i class="sprite sprite-108"></i></a>
        <a href="javascript:emojiinsert('109.png')"><i class="sprite sprite-109"></i></a>
        <a href="javascript:emojiinsert('110.png')"><i class="sprite sprite-110"></i></a>
        <a href="javascript:emojiinsert('111.png')"><i class="sprite sprite-111"></i></a>
        <a href="javascript:emojiinsert('112.png')"><i class="sprite sprite-112"></i></a>
        <a href="javascript:emojiinsert('113.png')"><i class="sprite sprite-113"></i></a>
        <a href="javascript:emojiinsert('114.png')"><i class="sprite sprite-114"></i></a>
        <a href="javascript:emojiinsert('115.png')"><i class="sprite sprite-115"></i></a>
        <a href="javascript:emojiinsert('116.png')"><i class="sprite sprite-116"></i></a>
        <a href="javascript:emojiinsert('117.png')"><i class="sprite sprite-117"></i></a>
        <a href="javascript:emojiinsert('118.png')"><i class="sprite sprite-118"></i></a>
        <a href="javascript:emojiinsert('119.png')"><i class="sprite sprite-119"></i></a>
        <a href="javascript:emojiinsert('120.png')"><i class="sprite sprite-120"></i></a>
        <a href="javascript:emojiinsert('121.png')"><i class="sprite sprite-121"></i></a>
        <a href="javascript:emojiinsert('122.png')"><i class="sprite sprite-122"></i></a>
        <a href="javascript:emojiinsert('123.png')"><i class="sprite sprite-123"></i></a>
        <a href="javascript:emojiinsert('124.png')"><i class="sprite sprite-124"></i></a>
        <a href="javascript:emojiinsert('125.png')"><i class="sprite sprite-125"></i></a>
        <a href="javascript:emojiinsert('126.png')"><i class="sprite sprite-126"></i></a>
        <a href="javascript:emojiinsert('127.png')"><i class="sprite sprite-127"></i></a>
        <a href="javascript:emojiinsert('128.png')"><i class="sprite sprite-128"></i></a>
        <a href="javascript:emojiinsert('129.png')"><i class="sprite sprite-129"></i></a>
        <a href="javascript:emojiinsert('130.png')"><i class="sprite sprite-130"></i></a>
        <a href="javascript:emojiinsert('131.png')"><i class="sprite sprite-131"></i></a>
        <a href="javascript:emojiinsert('132.png')"><i class="sprite sprite-132"></i></a>
        <a href="javascript:emojiinsert('133.png')"><i class="sprite sprite-133"></i></a>
        <a href="javascript:emojiinsert('134.png')"><i class="sprite sprite-134"></i></a>
        <a href="javascript:emojiinsert('135.png')"><i class="sprite sprite-135"></i></a>
        <a href="javascript:emojiinsert('136.png')"><i class="sprite sprite-136"></i></a>
        <a href="javascript:emojiinsert('137.png')"><i class="sprite sprite-137"></i></a>
        <a href="javascript:emojiinsert('138.png')"><i class="sprite sprite-138"></i></a>
        <a href="javascript:emojiinsert('139.png')"><i class="sprite sprite-139"></i></a>
        <a href="javascript:emojiinsert('140.png')"><i class="sprite sprite-140"></i></a>
        <a href="javascript:emojiinsert('141.png')"><i class="sprite sprite-141"></i></a>
        <a href="javascript:emojiinsert('142.png')"><i class="sprite sprite-142"></i></a>
        <a href="javascript:emojiinsert('143.png')"><i class="sprite sprite-143"></i></a>
        <a href="javascript:emojiinsert('144.png')"><i class="sprite sprite-144"></i></a>
        <a href="javascript:emojiinsert('145.png')"><i class="sprite sprite-145"></i></a>
        <a href="javascript:emojiinsert('146.png')"><i class="sprite sprite-146"></i></a>
        <a href="javascript:emojiinsert('147.png')"><i class="sprite sprite-147"></i></a>
        <a href="javascript:emojiinsert('148.png')"><i class="sprite sprite-148"></i></a>
        <a href="javascript:emojiinsert('149.png')"><i class="sprite sprite-149"></i></a>
        <a href="javascript:emojiinsert('150.png')"><i class="sprite sprite-150"></i></a>
        <a href="javascript:emojiinsert('151.png')"><i class="sprite sprite-151"></i></a>
        <a href="javascript:emojiinsert('152.png')"><i class="sprite sprite-152"></i></a>
        <a href="javascript:emojiinsert('153.png')"><i class="sprite sprite-153"></i></a>
        <a href="javascript:emojiinsert('154.png')"><i class="sprite sprite-154"></i></a>
        <a href="javascript:emojiinsert('155.png')"><i class="sprite sprite-155"></i></a>
        <a href="javascript:emojiinsert('156.png')"><i class="sprite sprite-156"></i></a>
        <a href="javascript:emojiinsert('157.png')"><i class="sprite sprite-157"></i></a>
        <a href="javascript:emojiinsert('158.png')"><i class="sprite sprite-158"></i></a>
        <a href="javascript:emojiinsert('159.png')"><i class="sprite sprite-159"></i></a>
        <a href="javascript:emojiinsert('160.png')"><i class="sprite sprite-160"></i></a>
        <a href="javascript:emojiinsert('161.png')"><i class="sprite sprite-161"></i></a>
        <a href="javascript:emojiinsert('162.png')"><i class="sprite sprite-162"></i></a>
        <a href="javascript:emojiinsert('163.png')"><i class="sprite sprite-163"></i></a>
        <a href="javascript:emojiinsert('164.png')"><i class="sprite sprite-164"></i></a>
        <a href="javascript:emojiinsert('165.png')"><i class="sprite sprite-165"></i></a>
        <a href="javascript:emojiinsert('166.png')"><i class="sprite sprite-166"></i></a>
        <a href="javascript:emojiinsert('167.png')"><i class="sprite sprite-167"></i></a>
        <a href="javascript:emojiinsert('168.png')"><i class="sprite sprite-168"></i></a>
        <a href="javascript:emojiinsert('169.png')"><i class="sprite sprite-169"></i></a>
        <a href="javascript:emojiinsert('170.png')"><i class="sprite sprite-170"></i></a>
        <a href="javascript:emojiinsert('171.png')"><i class="sprite sprite-171"></i></a>
        <a href="javascript:emojiinsert('172.png')"><i class="sprite sprite-172"></i></a>
        <a href="javascript:emojiinsert('173.png')"><i class="sprite sprite-173"></i></a>
        <a href="javascript:emojiinsert('174.png')"><i class="sprite sprite-174"></i></a>
        <a href="javascript:emojiinsert('175.png')"><i class="sprite sprite-175"></i></a>
        <a href="javascript:emojiinsert('176.png')"><i class="sprite sprite-176"></i></a>
        <a href="javascript:emojiinsert('177.png')"><i class="sprite sprite-177"></i></a>
        <a href="javascript:emojiinsert('178.png')"><i class="sprite sprite-178"></i></a>
        <a href="javascript:emojiinsert('179.png')"><i class="sprite sprite-179"></i></a>
        <a href="javascript:emojiinsert('180.png')"><i class="sprite sprite-180"></i></a>
        <a href="javascript:emojiinsert('181.png')"><i class="sprite sprite-181"></i></a>
        <a href="javascript:emojiinsert('182.png')"><i class="sprite sprite-182"></i></a>
        <a href="javascript:emojiinsert('183.png')"><i class="sprite sprite-183"></i></a>
        <a href="javascript:emojiinsert('184.png')"><i class="sprite sprite-184"></i></a>
        <a href="javascript:emojiinsert('185.png')"><i class="sprite sprite-185"></i></a>
        <a href="javascript:emojiinsert('186.png')"><i class="sprite sprite-186"></i></a>
        <a href="javascript:emojiinsert('187.png')"><i class="sprite sprite-187"></i></a>
        <a href="javascript:emojiinsert('188.png')"><i class="sprite sprite-188"></i></a>
        <a href="javascript:emojiinsert('189.png')"><i class="sprite sprite-189"></i></a>
        <a href="javascript:emojiinsert('190.png')"><i class="sprite sprite-190"></i></a>
        <a href="javascript:emojiinsert('191.png')"><i class="sprite sprite-191"></i></a>
        <a href="javascript:emojiinsert('192.png')"><i class="sprite sprite-192"></i></a>
        <a href="javascript:emojiinsert('193.png')"><i class="sprite sprite-193"></i></a>
        <a href="javascript:emojiinsert('194.png')"><i class="sprite sprite-194"></i></a>
        <a href="javascript:emojiinsert('195.png')"><i class="sprite sprite-195"></i></a>
        <a href="javascript:emojiinsert('196.png')"><i class="sprite sprite-196"></i></a>
        <a href="javascript:emojiinsert('197.png')"><i class="sprite sprite-197"></i></a>
        <a href="javascript:emojiinsert('198.png')"><i class="sprite sprite-198"></i></a>
        <a href="javascript:emojiinsert('199.png')"><i class="sprite sprite-199"></i></a>
      </div>
    </p>
  </section>
<!--
///// $$CONTENT-3 ////
-->
  <section id="content3">
    <p>
      <div class="emoji-grid">
        <a href="javascript:emojiinsert('201.png')"><i class="sprite sprite-201"></i></a>
        <a href="javascript:emojiinsert('202.png')"><i class="sprite sprite-202"></i></a>
        <a href="javascript:emojiinsert('203.png')"><i class="sprite sprite-203"></i></a>
        <a href="javascript:emojiinsert('204.png')"><i class="sprite sprite-204"></i></a>
        <a href="javascript:emojiinsert('205.png')"><i class="sprite sprite-205"></i></a>
        <a href="javascript:emojiinsert('206.png')"><i class="sprite sprite-206"></i></a>
        <a href="javascript:emojiinsert('207.png')"><i class="sprite sprite-207"></i></a>
        <a href="javascript:emojiinsert('208.png')"><i class="sprite sprite-208"></i></a>
        <a href="javascript:emojiinsert('209.png')"><i class="sprite sprite-209"></i></a>
        <a href="javascript:emojiinsert('210.png')"><i class="sprite sprite-210"></i></a>
        <a href="javascript:emojiinsert('211.png')"><i class="sprite sprite-211"></i></a>
        <a href="javascript:emojiinsert('212.png')"><i class="sprite sprite-212"></i></a>
        <a href="javascript:emojiinsert('213.png')"><i class="sprite sprite-213"></i></a>
        <a href="javascript:emojiinsert('214.png')"><i class="sprite sprite-214"></i></a>
        <a href="javascript:emojiinsert('215.png')"><i class="sprite sprite-215"></i></a>
        <a href="javascript:emojiinsert('216.png')"><i class="sprite sprite-216"></i></a>
        <a href="javascript:emojiinsert('217.png')"><i class="sprite sprite-217"></i></a>
        <a href="javascript:emojiinsert('218.png')"><i class="sprite sprite-218"></i></a>
        <a href="javascript:emojiinsert('219.png')"><i class="sprite sprite-219"></i></a>
        <a href="javascript:emojiinsert('220.png')"><i class="sprite sprite-220"></i></a>
        <a href="javascript:emojiinsert('221.png')"><i class="sprite sprite-221"></i></a>
        <a href="javascript:emojiinsert('222.png')"><i class="sprite sprite-222"></i></a>
        <a href="javascript:emojiinsert('223.png')"><i class="sprite sprite-223"></i></a>
        <a href="javascript:emojiinsert('224.png')"><i class="sprite sprite-224"></i></a>
        <a href="javascript:emojiinsert('225.png')"><i class="sprite sprite-225"></i></a>
        <a href="javascript:emojiinsert('226.png')"><i class="sprite sprite-226"></i></a>
        <a href="javascript:emojiinsert('227.png')"><i class="sprite sprite-227"></i></a>
        <a href="javascript:emojiinsert('228.png')"><i class="sprite sprite-228"></i></a>
        <a href="javascript:emojiinsert('229.png')"><i class="sprite sprite-229"></i></a>
        <a href="javascript:emojiinsert('230.png')"><i class="sprite sprite-230"></i></a>
        <a href="javascript:emojiinsert('231.png')"><i class="sprite sprite-231"></i></a>
        <a href="javascript:emojiinsert('232.png')"><i class="sprite sprite-232"></i></a>
        <a href="javascript:emojiinsert('233.png')"><i class="sprite sprite-233"></i></a>
        <a href="javascript:emojiinsert('234.png')"><i class="sprite sprite-234"></i></a>
        <a href="javascript:emojiinsert('235.png')"><i class="sprite sprite-235"></i></a>
        <a href="javascript:emojiinsert('236.png')"><i class="sprite sprite-236"></i></a>
        <a href="javascript:emojiinsert('237.png')"><i class="sprite sprite-237"></i></a>
        <a href="javascript:emojiinsert('238.png')"><i class="sprite sprite-238"></i></a>
        <a href="javascript:emojiinsert('239.png')"><i class="sprite sprite-239"></i></a>
        <a href="javascript:emojiinsert('240.png')"><i class="sprite sprite-240"></i></a>
        <a href="javascript:emojiinsert('241.png')"><i class="sprite sprite-241"></i></a>
        <a href="javascript:emojiinsert('242.png')"><i class="sprite sprite-242"></i></a>
        <a href="javascript:emojiinsert('243.png')"><i class="sprite sprite-243"></i></a>
        <a href="javascript:emojiinsert('244.png')"><i class="sprite sprite-244"></i></a>
        <a href="javascript:emojiinsert('245.png')"><i class="sprite sprite-245"></i></a>
        <a href="javascript:emojiinsert('246.png')"><i class="sprite sprite-246"></i></a>
        <a href="javascript:emojiinsert('247.png')"><i class="sprite sprite-247"></i></a>
        <a href="javascript:emojiinsert('248.png')"><i class="sprite sprite-248"></i></a>
        <a href="javascript:emojiinsert('249.png')"><i class="sprite sprite-249"></i></a>
        <a href="javascript:emojiinsert('250.png')"><i class="sprite sprite-250"></i></a>
        <a href="javascript:emojiinsert('251.png')"><i class="sprite sprite-251"></i></a>
        <a href="javascript:emojiinsert('252.png')"><i class="sprite sprite-252"></i></a>
        <a href="javascript:emojiinsert('253.png')"><i class="sprite sprite-253"></i></a>
        <a href="javascript:emojiinsert('254.png')"><i class="sprite sprite-254"></i></a>
        <a href="javascript:emojiinsert('255.png')"><i class="sprite sprite-255"></i></a>
        <a href="javascript:emojiinsert('256.png')"><i class="sprite sprite-256"></i></a>
        <a href="javascript:emojiinsert('257.png')"><i class="sprite sprite-257"></i></a>
        <a href="javascript:emojiinsert('258.png')"><i class="sprite sprite-258"></i></a>
        <a href="javascript:emojiinsert('259.png')"><i class="sprite sprite-259"></i></a>
        <a href="javascript:emojiinsert('260.png')"><i class="sprite sprite-260"></i></a>
        <a href="javascript:emojiinsert('261.png')"><i class="sprite sprite-261"></i></a>
        <a href="javascript:emojiinsert('262.png')"><i class="sprite sprite-262"></i></a>
        <a href="javascript:emojiinsert('263.png')"><i class="sprite sprite-263"></i></a>
        <a href="javascript:emojiinsert('264.png')"><i class="sprite sprite-264"></i></a>
        <a href="javascript:emojiinsert('265.png')"><i class="sprite sprite-265"></i></a>
        <a href="javascript:emojiinsert('266.png')"><i class="sprite sprite-266"></i></a>
        <a href="javascript:emojiinsert('267.png')"><i class="sprite sprite-267"></i></a>
        <a href="javascript:emojiinsert('268.png')"><i class="sprite sprite-268"></i></a>
        <a href="javascript:emojiinsert('269.png')"><i class="sprite sprite-269"></i></a>
        <a href="javascript:emojiinsert('270.png')"><i class="sprite sprite-270"></i></a>
        <a href="javascript:emojiinsert('271.png')"><i class="sprite sprite-271"></i></a>
        <a href="javascript:emojiinsert('272.png')"><i class="sprite sprite-272"></i></a>
        <a href="javascript:emojiinsert('273.png')"><i class="sprite sprite-273"></i></a>
        <a href="javascript:emojiinsert('274.png')"><i class="sprite sprite-274"></i></a>
        <a href="javascript:emojiinsert('275.png')"><i class="sprite sprite-275"></i></a>
        <a href="javascript:emojiinsert('276.png')"><i class="sprite sprite-276"></i></a>
        <a href="javascript:emojiinsert('277.png')"><i class="sprite sprite-277"></i></a>
        <a href="javascript:emojiinsert('278.png')"><i class="sprite sprite-278"></i></a>
        <a href="javascript:emojiinsert('279.png')"><i class="sprite sprite-279"></i></a>
        <a href="javascript:emojiinsert('280.png')"><i class="sprite sprite-280"></i></a>
        <a href="javascript:emojiinsert('281.png')"><i class="sprite sprite-281"></i></a>
        <a href="javascript:emojiinsert('282.png')"><i class="sprite sprite-282"></i></a>
        <a href="javascript:emojiinsert('283.png')"><i class="sprite sprite-283"></i></a>
        <a href="javascript:emojiinsert('284.png')"><i class="sprite sprite-284"></i></a>
        <a href="javascript:emojiinsert('285.png')"><i class="sprite sprite-285"></i></a>
        <a href="javascript:emojiinsert('286.png')"><i class="sprite sprite-286"></i></a>
        <a href="javascript:emojiinsert('287.png')"><i class="sprite sprite-287"></i></a>
        <a href="javascript:emojiinsert('288.png')"><i class="sprite sprite-288"></i></a>
        <a href="javascript:emojiinsert('289.png')"><i class="sprite sprite-289"></i></a>
        <a href="javascript:emojiinsert('290.png')"><i class="sprite sprite-290"></i></a>
        <a href="javascript:emojiinsert('291.png')"><i class="sprite sprite-291"></i></a>
        <a href="javascript:emojiinsert('292.png')"><i class="sprite sprite-292"></i></a>
        <a href="javascript:emojiinsert('293.png')"><i class="sprite sprite-293"></i></a>
        <a href="javascript:emojiinsert('294.png')"><i class="sprite sprite-294"></i></a>
        <a href="javascript:emojiinsert('295.png')"><i class="sprite sprite-295"></i></a>
        <a href="javascript:emojiinsert('296.png')"><i class="sprite sprite-296"></i></a>
        <a href="javascript:emojiinsert('297.png')"><i class="sprite sprite-297"></i></a>
        <a href="javascript:emojiinsert('298.png')"><i class="sprite sprite-298"></i></a>
        <a href="javascript:emojiinsert('299.png')"><i class="sprite sprite-299"></i></a>
      </div>
    </p>
  </section>
<!--
///// $$CONTENT-4 ////
-->
  <section id="content4">
    <p>
      <div class="emoji-grid">
        <a href="javascript:emojiinsert('301.png')"><i class="sprite sprite-301"></i></a>
        <a href="javascript:emojiinsert('302.png')"><i class="sprite sprite-302"></i></a>
        <a href="javascript:emojiinsert('303.png')"><i class="sprite sprite-303"></i></a>
        <a href="javascript:emojiinsert('304.png')"><i class="sprite sprite-304"></i></a>
        <a href="javascript:emojiinsert('305.png')"><i class="sprite sprite-305"></i></a>
        <a href="javascript:emojiinsert('306.png')"><i class="sprite sprite-306"></i></a>
        <a href="javascript:emojiinsert('307.png')"><i class="sprite sprite-307"></i></a>
        <a href="javascript:emojiinsert('308.png')"><i class="sprite sprite-308"></i></a>
        <a href="javascript:emojiinsert('309.png')"><i class="sprite sprite-309"></i></a>
        <a href="javascript:emojiinsert('310.png')"><i class="sprite sprite-310"></i></a>
        <a href="javascript:emojiinsert('311.png')"><i class="sprite sprite-311"></i></a>
        <a href="javascript:emojiinsert('312.png')"><i class="sprite sprite-312"></i></a>
        <a href="javascript:emojiinsert('313.png')"><i class="sprite sprite-313"></i></a>
        <a href="javascript:emojiinsert('314.png')"><i class="sprite sprite-314"></i></a>
        <a href="javascript:emojiinsert('315.png')"><i class="sprite sprite-315"></i></a>
        <a href="javascript:emojiinsert('316.png')"><i class="sprite sprite-316"></i></a>
        <a href="javascript:emojiinsert('317.png')"><i class="sprite sprite-317"></i></a>
        <a href="javascript:emojiinsert('318.png')"><i class="sprite sprite-318"></i></a>
        <a href="javascript:emojiinsert('319.png')"><i class="sprite sprite-319"></i></a>
        <a href="javascript:emojiinsert('320.png')"><i class="sprite sprite-320"></i></a>
        <a href="javascript:emojiinsert('321.png')"><i class="sprite sprite-321"></i></a>
        <a href="javascript:emojiinsert('322.png')"><i class="sprite sprite-322"></i></a>
        <a href="javascript:emojiinsert('323.png')"><i class="sprite sprite-323"></i></a>
        <a href="javascript:emojiinsert('324.png')"><i class="sprite sprite-324"></i></a>
        <a href="javascript:emojiinsert('325.png')"><i class="sprite sprite-325"></i></a>
        <a href="javascript:emojiinsert('326.png')"><i class="sprite sprite-326"></i></a>
        <a href="javascript:emojiinsert('327.png')"><i class="sprite sprite-327"></i></a>
        <a href="javascript:emojiinsert('328.png')"><i class="sprite sprite-328"></i></a>
        <a href="javascript:emojiinsert('329.png')"><i class="sprite sprite-329"></i></a>
        <a href="javascript:emojiinsert('330.png')"><i class="sprite sprite-330"></i></a>
        <a href="javascript:emojiinsert('331.png')"><i class="sprite sprite-331"></i></a>
        <a href="javascript:emojiinsert('332.png')"><i class="sprite sprite-332"></i></a>
        <a href="javascript:emojiinsert('333.png')"><i class="sprite sprite-333"></i></a>
        <a href="javascript:emojiinsert('334.png')"><i class="sprite sprite-334"></i></a>
        <a href="javascript:emojiinsert('335.png')"><i class="sprite sprite-335"></i></a>
        <a href="javascript:emojiinsert('336.png')"><i class="sprite sprite-336"></i></a>
        <a href="javascript:emojiinsert('337.png')"><i class="sprite sprite-337"></i></a>
        <a href="javascript:emojiinsert('338.png')"><i class="sprite sprite-338"></i></a>
        <a href="javascript:emojiinsert('339.png')"><i class="sprite sprite-339"></i></a>
        <a href="javascript:emojiinsert('340.png')"><i class="sprite sprite-340"></i></a>
        <a href="javascript:emojiinsert('341.png')"><i class="sprite sprite-341"></i></a>
        <a href="javascript:emojiinsert('342.png')"><i class="sprite sprite-342"></i></a>
        <a href="javascript:emojiinsert('343.png')"><i class="sprite sprite-343"></i></a>
        <a href="javascript:emojiinsert('344.png')"><i class="sprite sprite-344"></i></a>
        <a href="javascript:emojiinsert('345.png')"><i class="sprite sprite-345"></i></a>
        <a href="javascript:emojiinsert('346.png')"><i class="sprite sprite-346"></i></a>
        <a href="javascript:emojiinsert('347.png')"><i class="sprite sprite-347"></i></a>
        <a href="javascript:emojiinsert('348.png')"><i class="sprite sprite-348"></i></a>
        <a href="javascript:emojiinsert('349.png')"><i class="sprite sprite-349"></i></a>
        <a href="javascript:emojiinsert('350.png')"><i class="sprite sprite-350"></i></a>
        <a href="javascript:emojiinsert('351.png')"><i class="sprite sprite-351"></i></a>
        <a href="javascript:emojiinsert('352.png')"><i class="sprite sprite-352"></i></a>
        <a href="javascript:emojiinsert('353.png')"><i class="sprite sprite-353"></i></a>
        <a href="javascript:emojiinsert('354.png')"><i class="sprite sprite-354"></i></a>
        <a href="javascript:emojiinsert('355.png')"><i class="sprite sprite-355"></i></a>
        <a href="javascript:emojiinsert('356.png')"><i class="sprite sprite-356"></i></a>
        <a href="javascript:emojiinsert('357.png')"><i class="sprite sprite-357"></i></a>
        <a href="javascript:emojiinsert('358.png')"><i class="sprite sprite-358"></i></a>
        <a href="javascript:emojiinsert('359.png')"><i class="sprite sprite-359"></i></a>
        <a href="javascript:emojiinsert('360.png')"><i class="sprite sprite-360"></i></a>
        <a href="javascript:emojiinsert('361.png')"><i class="sprite sprite-361"></i></a>
        <a href="javascript:emojiinsert('362.png')"><i class="sprite sprite-362"></i></a>
        <a href="javascript:emojiinsert('363.png')"><i class="sprite sprite-363"></i></a>
        <a href="javascript:emojiinsert('364.png')"><i class="sprite sprite-364"></i></a>
        <a href="javascript:emojiinsert('365.png')"><i class="sprite sprite-365"></i></a>
        <a href="javascript:emojiinsert('366.png')"><i class="sprite sprite-366"></i></a>
        <a href="javascript:emojiinsert('367.png')"><i class="sprite sprite-367"></i></a>
        <a href="javascript:emojiinsert('368.png')"><i class="sprite sprite-368"></i></a>
        <a href="javascript:emojiinsert('369.png')"><i class="sprite sprite-369"></i></a>
        <a href="javascript:emojiinsert('370.png')"><i class="sprite sprite-370"></i></a>
        <a href="javascript:emojiinsert('371.png')"><i class="sprite sprite-371"></i></a>
        <a href="javascript:emojiinsert('372.png')"><i class="sprite sprite-372"></i></a>
        <a href="javascript:emojiinsert('373.png')"><i class="sprite sprite-373"></i></a>
        <a href="javascript:emojiinsert('374.png')"><i class="sprite sprite-374"></i></a>
        <a href="javascript:emojiinsert('375.png')"><i class="sprite sprite-375"></i></a>
        <a href="javascript:emojiinsert('376.png')"><i class="sprite sprite-376"></i></a>
        <a href="javascript:emojiinsert('377.png')"><i class="sprite sprite-377"></i></a>
        <a href="javascript:emojiinsert('378.png')"><i class="sprite sprite-378"></i></a>
        <a href="javascript:emojiinsert('379.png')"><i class="sprite sprite-379"></i></a>
        <a href="javascript:emojiinsert('380.png')"><i class="sprite sprite-380"></i></a>
        <a href="javascript:emojiinsert('381.png')"><i class="sprite sprite-381"></i></a>
        <a href="javascript:emojiinsert('382.png')"><i class="sprite sprite-382"></i></a>
        <a href="javascript:emojiinsert('383.png')"><i class="sprite sprite-383"></i></a>
        <a href="javascript:emojiinsert('384.png')"><i class="sprite sprite-384"></i></a>
        <a href="javascript:emojiinsert('385.png')"><i class="sprite sprite-385"></i></a>
        <a href="javascript:emojiinsert('386.png')"><i class="sprite sprite-386"></i></a>
        <a href="javascript:emojiinsert('387.png')"><i class="sprite sprite-387"></i></a>
        <a href="javascript:emojiinsert('388.png')"><i class="sprite sprite-388"></i></a>
        <a href="javascript:emojiinsert('389.png')"><i class="sprite sprite-389"></i></a>
        <a href="javascript:emojiinsert('390.png')"><i class="sprite sprite-390"></i></a>
        <a href="javascript:emojiinsert('391.png')"><i class="sprite sprite-391"></i></a>
        <a href="javascript:emojiinsert('392.png')"><i class="sprite sprite-392"></i></a>
        <a href="javascript:emojiinsert('393.png')"><i class="sprite sprite-393"></i></a>
        <a href="javascript:emojiinsert('394.png')"><i class="sprite sprite-394"></i></a>
        <a href="javascript:emojiinsert('395.png')"><i class="sprite sprite-395"></i></a>
        <a href="javascript:emojiinsert('396.png')"><i class="sprite sprite-396"></i></a>
        <a href="javascript:emojiinsert('397.png')"><i class="sprite sprite-397"></i></a>
        <a href="javascript:emojiinsert('398.png')"><i class="sprite sprite-398"></i></a>
        <a href="javascript:emojiinsert('399.png')"><i class="sprite sprite-399"></i></a>



        <a href="javascript:emojiinsert('401.png')"><i class="sprite sprite-401"></i></a>
        <a href="javascript:emojiinsert('402.png')"><i class="sprite sprite-402"></i></a>
        <a href="javascript:emojiinsert('403.png')"><i class="sprite sprite-403"></i></a>
        <a href="javascript:emojiinsert('404.png')"><i class="sprite sprite-404"></i></a>
        <a href="javascript:emojiinsert('405.png')"><i class="sprite sprite-405"></i></a>
        <a href="javascript:emojiinsert('406.png')"><i class="sprite sprite-406"></i></a>
        <a href="javascript:emojiinsert('407.png')"><i class="sprite sprite-407"></i></a>
        <a href="javascript:emojiinsert('408.png')"><i class="sprite sprite-408"></i></a>
        <a href="javascript:emojiinsert('409.png')"><i class="sprite sprite-409"></i></a>
        <a href="javascript:emojiinsert('410.png')"><i class="sprite sprite-410"></i></a>
        <a href="javascript:emojiinsert('411.png')"><i class="sprite sprite-411"></i></a>
        <a href="javascript:emojiinsert('412.png')"><i class="sprite sprite-412"></i></a>
        <a href="javascript:emojiinsert('413.png')"><i class="sprite sprite-413"></i></a>
        <a href="javascript:emojiinsert('414.png')"><i class="sprite sprite-414"></i></a>
        <a href="javascript:emojiinsert('415.png')"><i class="sprite sprite-415"></i></a>
        <a href="javascript:emojiinsert('416.png')"><i class="sprite sprite-416"></i></a>
        <a href="javascript:emojiinsert('417.png')"><i class="sprite sprite-417"></i></a>
        <a href="javascript:emojiinsert('418.png')"><i class="sprite sprite-418"></i></a>
        <a href="javascript:emojiinsert('419.png')"><i class="sprite sprite-419"></i></a>
        <a href="javascript:emojiinsert('420.png')"><i class="sprite sprite-420"></i></a>
        <a href="javascript:emojiinsert('421.png')"><i class="sprite sprite-421"></i></a>
        <a href="javascript:emojiinsert('422.png')"><i class="sprite sprite-422"></i></a>
        <a href="javascript:emojiinsert('423.png')"><i class="sprite sprite-423"></i></a>
        <a href="javascript:emojiinsert('424.png')"><i class="sprite sprite-424"></i></a>
        <a href="javascript:emojiinsert('425.png')"><i class="sprite sprite-425"></i></a>
        <a href="javascript:emojiinsert('426.png')"><i class="sprite sprite-426"></i></a>
        <a href="javascript:emojiinsert('427.png')"><i class="sprite sprite-427"></i></a>
        <a href="javascript:emojiinsert('428.png')"><i class="sprite sprite-428"></i></a>
        <a href="javascript:emojiinsert('429.png')"><i class="sprite sprite-429"></i></a>
        <a href="javascript:emojiinsert('430.png')"><i class="sprite sprite-430"></i></a>
        <a href="javascript:emojiinsert('431.png')"><i class="sprite sprite-431"></i></a>
        <a href="javascript:emojiinsert('432.png')"><i class="sprite sprite-432"></i></a>
        <a href="javascript:emojiinsert('433.png')"><i class="sprite sprite-433"></i></a>
        <a href="javascript:emojiinsert('434.png')"><i class="sprite sprite-434"></i></a>
        <a href="javascript:emojiinsert('435.png')"><i class="sprite sprite-435"></i></a>
        <a href="javascript:emojiinsert('436.png')"><i class="sprite sprite-436"></i></a>
        <a href="javascript:emojiinsert('437.png')"><i class="sprite sprite-437"></i></a>
        <a href="javascript:emojiinsert('438.png')"><i class="sprite sprite-438"></i></a>
        <a href="javascript:emojiinsert('439.png')"><i class="sprite sprite-439"></i></a>
        <a href="javascript:emojiinsert('440.png')"><i class="sprite sprite-440"></i></a>
        <a href="javascript:emojiinsert('441.png')"><i class="sprite sprite-441"></i></a>
        <a href="javascript:emojiinsert('442.png')"><i class="sprite sprite-442"></i></a>
        <a href="javascript:emojiinsert('443.png')"><i class="sprite sprite-443"></i></a>
        <a href="javascript:emojiinsert('444.png')"><i class="sprite sprite-444"></i></a>
        <a href="javascript:emojiinsert('445.png')"><i class="sprite sprite-445"></i></a>
        <a href="javascript:emojiinsert('446.png')"><i class="sprite sprite-446"></i></a>
        <a href="javascript:emojiinsert('447.png')"><i class="sprite sprite-447"></i></a>
        <a href="javascript:emojiinsert('448.png')"><i class="sprite sprite-448"></i></a>
        <a href="javascript:emojiinsert('449.png')"><i class="sprite sprite-449"></i></a>
        <a href="javascript:emojiinsert('450.png')"><i class="sprite sprite-450"></i></a>
        <a href="javascript:emojiinsert('451.png')"><i class="sprite sprite-451"></i></a>
        <a href="javascript:emojiinsert('452.png')"><i class="sprite sprite-452"></i></a>
        <a href="javascript:emojiinsert('453.png')"><i class="sprite sprite-453"></i></a>
        <a href="javascript:emojiinsert('454.png')"><i class="sprite sprite-454"></i></a>
        <a href="javascript:emojiinsert('455.png')"><i class="sprite sprite-455"></i></a>
        <a href="javascript:emojiinsert('456.png')"><i class="sprite sprite-456"></i></a>
        <a href="javascript:emojiinsert('457.png')"><i class="sprite sprite-457"></i></a>
        <a href="javascript:emojiinsert('458.png')"><i class="sprite sprite-458"></i></a>
        <a href="javascript:emojiinsert('459.png')"><i class="sprite sprite-459"></i></a>
        <a href="javascript:emojiinsert('460.png')"><i class="sprite sprite-460"></i></a>
        <a href="javascript:emojiinsert('461.png')"><i class="sprite sprite-461"></i></a>
        <a href="javascript:emojiinsert('462.png')"><i class="sprite sprite-462"></i></a>
        <a href="javascript:emojiinsert('463.png')"><i class="sprite sprite-463"></i></a>
        <a href="javascript:emojiinsert('464.png')"><i class="sprite sprite-464"></i></a>
        <a href="javascript:emojiinsert('465.png')"><i class="sprite sprite-465"></i></a>
        <a href="javascript:emojiinsert('466.png')"><i class="sprite sprite-466"></i></a>
        <a href="javascript:emojiinsert('467.png')"><i class="sprite sprite-467"></i></a>
        <a href="javascript:emojiinsert('468.png')"><i class="sprite sprite-468"></i></a>
        <a href="javascript:emojiinsert('469.png')"><i class="sprite sprite-469"></i></a>
        <a href="javascript:emojiinsert('470.png')"><i class="sprite sprite-470"></i></a>
        <a href="javascript:emojiinsert('471.png')"><i class="sprite sprite-471"></i></a>
        <a href="javascript:emojiinsert('472.png')"><i class="sprite sprite-472"></i></a>
        <a href="javascript:emojiinsert('473.png')"><i class="sprite sprite-473"></i></a>
        <a href="javascript:emojiinsert('474.png')"><i class="sprite sprite-474"></i></a>
        <a href="javascript:emojiinsert('475.png')"><i class="sprite sprite-475"></i></a>
        <a href="javascript:emojiinsert('476.png')"><i class="sprite sprite-476"></i></a>
        <a href="javascript:emojiinsert('477.png')"><i class="sprite sprite-477"></i></a>
        <a href="javascript:emojiinsert('478.png')"><i class="sprite sprite-478"></i></a>
        <a href="javascript:emojiinsert('479.png')"><i class="sprite sprite-479"></i></a>
        <a href="javascript:emojiinsert('480.png')"><i class="sprite sprite-480"></i></a>
        <a href="javascript:emojiinsert('481.png')"><i class="sprite sprite-481"></i></a>
        <a href="javascript:emojiinsert('482.png')"><i class="sprite sprite-482"></i></a>
        <a href="javascript:emojiinsert('483.png')"><i class="sprite sprite-483"></i></a>
        <a href="javascript:emojiinsert('484.png')"><i class="sprite sprite-484"></i></a>
        <a href="javascript:emojiinsert('485.png')"><i class="sprite sprite-485"></i></a>
        <a href="javascript:emojiinsert('486.png')"><i class="sprite sprite-486"></i></a>
        <a href="javascript:emojiinsert('487.png')"><i class="sprite sprite-487"></i></a>
        <a href="javascript:emojiinsert('488.png')"><i class="sprite sprite-488"></i></a>
        <a href="javascript:emojiinsert('489.png')"><i class="sprite sprite-489"></i></a>
        <a href="javascript:emojiinsert('490.png')"><i class="sprite sprite-490"></i></a>
        <a href="javascript:emojiinsert('491.png')"><i class="sprite sprite-491"></i></a>
        <a href="javascript:emojiinsert('492.png')"><i class="sprite sprite-492"></i></a>
        <a href="javascript:emojiinsert('493.png')"><i class="sprite sprite-493"></i></a>
        <a href="javascript:emojiinsert('494.png')"><i class="sprite sprite-494"></i></a>
        <a href="javascript:emojiinsert('495.png')"><i class="sprite sprite-495"></i></a>
        <a href="javascript:emojiinsert('496.png')"><i class="sprite sprite-496"></i></a>
        <a href="javascript:emojiinsert('497.png')"><i class="sprite sprite-497"></i></a>
        <a href="javascript:emojiinsert('498.png')"><i class="sprite sprite-498"></i></a>
        <a href="javascript:emojiinsert('499.png')"><i class="sprite sprite-499"></i></a>
      </div>
    </p>
  </section>
<!--
///// $$CONTENT-5 ////
-->
  <section id="content5">
    <p>
      <div class="emoji-grid">
        <a href="javascript:emojiinsert('501.png')"><i class="sprite sprite-501"></i></a>
        <a href="javascript:emojiinsert('502.png')"><i class="sprite sprite-502"></i></a>
        <a href="javascript:emojiinsert('503.png')"><i class="sprite sprite-503"></i></a>
        <a href="javascript:emojiinsert('504.png')"><i class="sprite sprite-504"></i></a>
        <a href="javascript:emojiinsert('505.png')"><i class="sprite sprite-505"></i></a>
        <a href="javascript:emojiinsert('506.png')"><i class="sprite sprite-506"></i></a>
        <a href="javascript:emojiinsert('507.png')"><i class="sprite sprite-507"></i></a>
        <a href="javascript:emojiinsert('508.png')"><i class="sprite sprite-508"></i></a>
        <a href="javascript:emojiinsert('509.png')"><i class="sprite sprite-509"></i></a>
        <a href="javascript:emojiinsert('510.png')"><i class="sprite sprite-510"></i></a>
        <a href="javascript:emojiinsert('511.png')"><i class="sprite sprite-511"></i></a>
        <a href="javascript:emojiinsert('512.png')"><i class="sprite sprite-512"></i></a>
        <a href="javascript:emojiinsert('513.png')"><i class="sprite sprite-513"></i></a>
        <a href="javascript:emojiinsert('514.png')"><i class="sprite sprite-514"></i></a>
        <a href="javascript:emojiinsert('515.png')"><i class="sprite sprite-515"></i></a>
        <a href="javascript:emojiinsert('516.png')"><i class="sprite sprite-516"></i></a>
        <a href="javascript:emojiinsert('517.png')"><i class="sprite sprite-517"></i></a>
        <a href="javascript:emojiinsert('518.png')"><i class="sprite sprite-518"></i></a>
        <a href="javascript:emojiinsert('519.png')"><i class="sprite sprite-519"></i></a>
        <a href="javascript:emojiinsert('520.png')"><i class="sprite sprite-520"></i></a>
        <a href="javascript:emojiinsert('521.png')"><i class="sprite sprite-521"></i></a>
        <a href="javascript:emojiinsert('522.png')"><i class="sprite sprite-522"></i></a>
        <a href="javascript:emojiinsert('523.png')"><i class="sprite sprite-523"></i></a>
        <a href="javascript:emojiinsert('524.png')"><i class="sprite sprite-524"></i></a>
        <a href="javascript:emojiinsert('525.png')"><i class="sprite sprite-525"></i></a>
        <a href="javascript:emojiinsert('526.png')"><i class="sprite sprite-526"></i></a>
        <a href="javascript:emojiinsert('527.png')"><i class="sprite sprite-527"></i></a>
        <a href="javascript:emojiinsert('528.png')"><i class="sprite sprite-528"></i></a>
        <a href="javascript:emojiinsert('529.png')"><i class="sprite sprite-529"></i></a>
        <a href="javascript:emojiinsert('530.png')"><i class="sprite sprite-530"></i></a>
        <a href="javascript:emojiinsert('531.png')"><i class="sprite sprite-531"></i></a>
        <a href="javascript:emojiinsert('532.png')"><i class="sprite sprite-532"></i></a>
        <a href="javascript:emojiinsert('533.png')"><i class="sprite sprite-533"></i></a>
        <a href="javascript:emojiinsert('534.png')"><i class="sprite sprite-534"></i></a>
        <a href="javascript:emojiinsert('535.png')"><i class="sprite sprite-535"></i></a>
        <a href="javascript:emojiinsert('536.png')"><i class="sprite sprite-536"></i></a>
        <a href="javascript:emojiinsert('537.png')"><i class="sprite sprite-537"></i></a>
        <a href="javascript:emojiinsert('538.png')"><i class="sprite sprite-538"></i></a>
        <a href="javascript:emojiinsert('539.png')"><i class="sprite sprite-539"></i></a>
        <a href="javascript:emojiinsert('540.png')"><i class="sprite sprite-540"></i></a>
        <a href="javascript:emojiinsert('541.png')"><i class="sprite sprite-541"></i></a>
        <a href="javascript:emojiinsert('542.png')"><i class="sprite sprite-542"></i></a>
        <a href="javascript:emojiinsert('543.png')"><i class="sprite sprite-543"></i></a>
        <a href="javascript:emojiinsert('544.png')"><i class="sprite sprite-544"></i></a>
        <a href="javascript:emojiinsert('545.png')"><i class="sprite sprite-545"></i></a>
        <a href="javascript:emojiinsert('546.png')"><i class="sprite sprite-546"></i></a>
        <a href="javascript:emojiinsert('547.png')"><i class="sprite sprite-547"></i></a>
        <a href="javascript:emojiinsert('548.png')"><i class="sprite sprite-548"></i></a>
        <a href="javascript:emojiinsert('549.png')"><i class="sprite sprite-549"></i></a>
        <a href="javascript:emojiinsert('550.png')"><i class="sprite sprite-550"></i></a>
        <a href="javascript:emojiinsert('551.png')"><i class="sprite sprite-551"></i></a>
        <a href="javascript:emojiinsert('552.png')"><i class="sprite sprite-552"></i></a>
        <a href="javascript:emojiinsert('553.png')"><i class="sprite sprite-553"></i></a>
        <a href="javascript:emojiinsert('554.png')"><i class="sprite sprite-554"></i></a>
        <a href="javascript:emojiinsert('555.png')"><i class="sprite sprite-555"></i></a>
        <a href="javascript:emojiinsert('556.png')"><i class="sprite sprite-556"></i></a>
        <a href="javascript:emojiinsert('557.png')"><i class="sprite sprite-557"></i></a>
        <a href="javascript:emojiinsert('558.png')"><i class="sprite sprite-558"></i></a>
        <a href="javascript:emojiinsert('559.png')"><i class="sprite sprite-559"></i></a>
        <a href="javascript:emojiinsert('560.png')"><i class="sprite sprite-560"></i></a>
        <a href="javascript:emojiinsert('561.png')"><i class="sprite sprite-561"></i></a>
        <a href="javascript:emojiinsert('562.png')"><i class="sprite sprite-562"></i></a>
        <a href="javascript:emojiinsert('563.png')"><i class="sprite sprite-563"></i></a>
        <a href="javascript:emojiinsert('564.png')"><i class="sprite sprite-564"></i></a>
        <a href="javascript:emojiinsert('565.png')"><i class="sprite sprite-565"></i></a>
        <a href="javascript:emojiinsert('566.png')"><i class="sprite sprite-566"></i></a>
        <a href="javascript:emojiinsert('567.png')"><i class="sprite sprite-567"></i></a>
        <a href="javascript:emojiinsert('568.png')"><i class="sprite sprite-568"></i></a>
        <a href="javascript:emojiinsert('569.png')"><i class="sprite sprite-569"></i></a>
        <a href="javascript:emojiinsert('570.png')"><i class="sprite sprite-570"></i></a>
        <a href="javascript:emojiinsert('571.png')"><i class="sprite sprite-571"></i></a>
        <a href="javascript:emojiinsert('572.png')"><i class="sprite sprite-572"></i></a>
        <a href="javascript:emojiinsert('573.png')"><i class="sprite sprite-573"></i></a>
        <a href="javascript:emojiinsert('574.png')"><i class="sprite sprite-574"></i></a>
        <a href="javascript:emojiinsert('575.png')"><i class="sprite sprite-575"></i></a>
        <a href="javascript:emojiinsert('576.png')"><i class="sprite sprite-576"></i></a>
        <a href="javascript:emojiinsert('577.png')"><i class="sprite sprite-577"></i></a>
        <a href="javascript:emojiinsert('578.png')"><i class="sprite sprite-578"></i></a>
        <a href="javascript:emojiinsert('579.png')"><i class="sprite sprite-579"></i></a>
        <a href="javascript:emojiinsert('580.png')"><i class="sprite sprite-580"></i></a>
        <a href="javascript:emojiinsert('581.png')"><i class="sprite sprite-581"></i></a>
        <a href="javascript:emojiinsert('582.png')"><i class="sprite sprite-582"></i></a>
        <a href="javascript:emojiinsert('583.png')"><i class="sprite sprite-583"></i></a>
        <a href="javascript:emojiinsert('584.png')"><i class="sprite sprite-584"></i></a>
        <a href="javascript:emojiinsert('585.png')"><i class="sprite sprite-585"></i></a>
        <a href="javascript:emojiinsert('586.png')"><i class="sprite sprite-586"></i></a>
        <a href="javascript:emojiinsert('587.png')"><i class="sprite sprite-587"></i></a>
        <a href="javascript:emojiinsert('588.png')"><i class="sprite sprite-588"></i></a>
        <a href="javascript:emojiinsert('589.png')"><i class="sprite sprite-589"></i></a>
        <a href="javascript:emojiinsert('590.png')"><i class="sprite sprite-590"></i></a>
        <a href="javascript:emojiinsert('591.png')"><i class="sprite sprite-591"></i></a>
        <a href="javascript:emojiinsert('592.png')"><i class="sprite sprite-592"></i></a>
        <a href="javascript:emojiinsert('593.png')"><i class="sprite sprite-593"></i></a>
        <a href="javascript:emojiinsert('594.png')"><i class="sprite sprite-594"></i></a>
        <a href="javascript:emojiinsert('595.png')"><i class="sprite sprite-595"></i></a>
        <a href="javascript:emojiinsert('596.png')"><i class="sprite sprite-596"></i></a>
        <a href="javascript:emojiinsert('597.png')"><i class="sprite sprite-597"></i></a>
        <a href="javascript:emojiinsert('598.png')"><i class="sprite sprite-598"></i></a>
        <a href="javascript:emojiinsert('599.png')"><i class="sprite sprite-599"></i></a>
        

        <a href="javascript:emojiinsert('601.png')"><i class="sprite sprite-601"></i></a>
        <a href="javascript:emojiinsert('602.png')"><i class="sprite sprite-602"></i></a>
        <a href="javascript:emojiinsert('603.png')"><i class="sprite sprite-603"></i></a>
        <a href="javascript:emojiinsert('604.png')"><i class="sprite sprite-604"></i></a>
        <a href="javascript:emojiinsert('605.png')"><i class="sprite sprite-605"></i></a>
        <a href="javascript:emojiinsert('606.png')"><i class="sprite sprite-606"></i></a>
        <a href="javascript:emojiinsert('607.png')"><i class="sprite sprite-607"></i></a>
        <a href="javascript:emojiinsert('608.png')"><i class="sprite sprite-608"></i></a>
        <a href="javascript:emojiinsert('609.png')"><i class="sprite sprite-609"></i></a>
        <a href="javascript:emojiinsert('610.png')"><i class="sprite sprite-610"></i></a>
        <a href="javascript:emojiinsert('611.png')"><i class="sprite sprite-611"></i></a>
        <a href="javascript:emojiinsert('612.png')"><i class="sprite sprite-612"></i></a>
        <a href="javascript:emojiinsert('613.png')"><i class="sprite sprite-613"></i></a>
        <a href="javascript:emojiinsert('614.png')"><i class="sprite sprite-614"></i></a>
        <a href="javascript:emojiinsert('615.png')"><i class="sprite sprite-615"></i></a>
        <a href="javascript:emojiinsert('616.png')"><i class="sprite sprite-616"></i></a>
        <a href="javascript:emojiinsert('617.png')"><i class="sprite sprite-617"></i></a>
        <a href="javascript:emojiinsert('618.png')"><i class="sprite sprite-618"></i></a>
        <a href="javascript:emojiinsert('619.png')"><i class="sprite sprite-619"></i></a>
        <a href="javascript:emojiinsert('620.png')"><i class="sprite sprite-620"></i></a>
        <a href="javascript:emojiinsert('621.png')"><i class="sprite sprite-621"></i></a>
        <a href="javascript:emojiinsert('622.png')"><i class="sprite sprite-622"></i></a>
        <a href="javascript:emojiinsert('623.png')"><i class="sprite sprite-623"></i></a>
        <a href="javascript:emojiinsert('624.png')"><i class="sprite sprite-624"></i></a>
        <a href="javascript:emojiinsert('625.png')"><i class="sprite sprite-625"></i></a>
        <a href="javascript:emojiinsert('626.png')"><i class="sprite sprite-626"></i></a>
        <a href="javascript:emojiinsert('627.png')"><i class="sprite sprite-627"></i></a>
        <a href="javascript:emojiinsert('628.png')"><i class="sprite sprite-628"></i></a>
        <a href="javascript:emojiinsert('629.png')"><i class="sprite sprite-629"></i></a>
        <a href="javascript:emojiinsert('630.png')"><i class="sprite sprite-630"></i></a>
        <a href="javascript:emojiinsert('631.png')"><i class="sprite sprite-631"></i></a>
        <a href="javascript:emojiinsert('632.png')"><i class="sprite sprite-632"></i></a>
        <a href="javascript:emojiinsert('633.png')"><i class="sprite sprite-633"></i></a>
        <a href="javascript:emojiinsert('634.png')"><i class="sprite sprite-634"></i></a>
        <a href="javascript:emojiinsert('635.png')"><i class="sprite sprite-635"></i></a>
        <a href="javascript:emojiinsert('636.png')"><i class="sprite sprite-636"></i></a>
        <a href="javascript:emojiinsert('637.png')"><i class="sprite sprite-637"></i></a>
        <a href="javascript:emojiinsert('638.png')"><i class="sprite sprite-638"></i></a>
        <a href="javascript:emojiinsert('639.png')"><i class="sprite sprite-639"></i></a>
        <a href="javascript:emojiinsert('640.png')"><i class="sprite sprite-640"></i></a>
        <a href="javascript:emojiinsert('641.png')"><i class="sprite sprite-641"></i></a>
        <a href="javascript:emojiinsert('642.png')"><i class="sprite sprite-642"></i></a>
        <a href="javascript:emojiinsert('643.png')"><i class="sprite sprite-643"></i></a>
        <a href="javascript:emojiinsert('644.png')"><i class="sprite sprite-644"></i></a>
        <a href="javascript:emojiinsert('645.png')"><i class="sprite sprite-645"></i></a>
        <a href="javascript:emojiinsert('646.png')"><i class="sprite sprite-646"></i></a>
        <a href="javascript:emojiinsert('647.png')"><i class="sprite sprite-647"></i></a>
        <a href="javascript:emojiinsert('648.png')"><i class="sprite sprite-648"></i></a>
        <a href="javascript:emojiinsert('649.png')"><i class="sprite sprite-649"></i></a>
        <a href="javascript:emojiinsert('650.png')"><i class="sprite sprite-650"></i></a>
        <a href="javascript:emojiinsert('651.png')"><i class="sprite sprite-651"></i></a>
        <a href="javascript:emojiinsert('652.png')"><i class="sprite sprite-652"></i></a>
        <a href="javascript:emojiinsert('653.png')"><i class="sprite sprite-653"></i></a>
        <a href="javascript:emojiinsert('654.png')"><i class="sprite sprite-654"></i></a>
        <a href="javascript:emojiinsert('655.png')"><i class="sprite sprite-655"></i></a>
        <a href="javascript:emojiinsert('656.png')"><i class="sprite sprite-656"></i></a>
        <a href="javascript:emojiinsert('657.png')"><i class="sprite sprite-657"></i></a>
        <a href="javascript:emojiinsert('658.png')"><i class="sprite sprite-658"></i></a>
        <a href="javascript:emojiinsert('659.png')"><i class="sprite sprite-659"></i></a>
        <a href="javascript:emojiinsert('660.png')"><i class="sprite sprite-660"></i></a>
        <a href="javascript:emojiinsert('661.png')"><i class="sprite sprite-661"></i></a>
        <a href="javascript:emojiinsert('662.png')"><i class="sprite sprite-662"></i></a>
        <a href="javascript:emojiinsert('663.png')"><i class="sprite sprite-663"></i></a>
        <a href="javascript:emojiinsert('664.png')"><i class="sprite sprite-664"></i></a>
        <a href="javascript:emojiinsert('665.png')"><i class="sprite sprite-665"></i></a>
        <a href="javascript:emojiinsert('666.png')"><i class="sprite sprite-666"></i></a>
        <a href="javascript:emojiinsert('667.png')"><i class="sprite sprite-667"></i></a>
        <a href="javascript:emojiinsert('668.png')"><i class="sprite sprite-668"></i></a>
        <a href="javascript:emojiinsert('669.png')"><i class="sprite sprite-669"></i></a>
        <a href="javascript:emojiinsert('670.png')"><i class="sprite sprite-670"></i></a>
        <a href="javascript:emojiinsert('671.png')"><i class="sprite sprite-671"></i></a>
        <a href="javascript:emojiinsert('672.png')"><i class="sprite sprite-672"></i></a>
        <a href="javascript:emojiinsert('673.png')"><i class="sprite sprite-673"></i></a>
        <a href="javascript:emojiinsert('674.png')"><i class="sprite sprite-674"></i></a>
        <a href="javascript:emojiinsert('675.png')"><i class="sprite sprite-675"></i></a>
        <a href="javascript:emojiinsert('676.png')"><i class="sprite sprite-676"></i></a>
        <a href="javascript:emojiinsert('677.png')"><i class="sprite sprite-677"></i></a>
        <a href="javascript:emojiinsert('678.png')"><i class="sprite sprite-678"></i></a>
        <a href="javascript:emojiinsert('679.png')"><i class="sprite sprite-679"></i></a>
        <a href="javascript:emojiinsert('680.png')"><i class="sprite sprite-680"></i></a>
        <a href="javascript:emojiinsert('681.png')"><i class="sprite sprite-681"></i></a>
        <a href="javascript:emojiinsert('682.png')"><i class="sprite sprite-682"></i></a>
        <a href="javascript:emojiinsert('683.png')"><i class="sprite sprite-683"></i></a>
        <a href="javascript:emojiinsert('684.png')"><i class="sprite sprite-684"></i></a>
        <a href="javascript:emojiinsert('685.png')"><i class="sprite sprite-685"></i></a>
        <a href="javascript:emojiinsert('686.png')"><i class="sprite sprite-686"></i></a>
        <a href="javascript:emojiinsert('687.png')"><i class="sprite sprite-687"></i></a>
        <a href="javascript:emojiinsert('688.png')"><i class="sprite sprite-688"></i></a>
        <a href="javascript:emojiinsert('689.png')"><i class="sprite sprite-689"></i></a>
        <a href="javascript:emojiinsert('690.png')"><i class="sprite sprite-690"></i></a>
        <a href="javascript:emojiinsert('691.png')"><i class="sprite sprite-691"></i></a>
        <a href="javascript:emojiinsert('692.png')"><i class="sprite sprite-692"></i></a>
        <a href="javascript:emojiinsert('693.png')"><i class="sprite sprite-693"></i></a>
        <a href="javascript:emojiinsert('694.png')"><i class="sprite sprite-694"></i></a>
        <a href="javascript:emojiinsert('695.png')"><i class="sprite sprite-695"></i></a>
        <a href="javascript:emojiinsert('696.png')"><i class="sprite sprite-696"></i></a>
        <a href="javascript:emojiinsert('697.png')"><i class="sprite sprite-697"></i></a>
        <a href="javascript:emojiinsert('698.png')"><i class="sprite sprite-698"></i></a>
        <a href="javascript:emojiinsert('699.png')"><i class="sprite sprite-699"></i></a>
      </div>
    </p>
  </section>  
<!--
///// $$CONTENT-6 ////
-->
  <section id="content6">
    <p>
      <div class="emoji-grid">
        <a href="javascript:emojiinsert('701.png')"><i class="sprite sprite-701"></i></a>
        <a href="javascript:emojiinsert('702.png')"><i class="sprite sprite-702"></i></a>
        <a href="javascript:emojiinsert('703.png')"><i class="sprite sprite-703"></i></a>
        <a href="javascript:emojiinsert('704.png')"><i class="sprite sprite-704"></i></a>
        <a href="javascript:emojiinsert('705.png')"><i class="sprite sprite-705"></i></a>
        <a href="javascript:emojiinsert('706.png')"><i class="sprite sprite-706"></i></a>
        <a href="javascript:emojiinsert('707.png')"><i class="sprite sprite-707"></i></a>
        <a href="javascript:emojiinsert('708.png')"><i class="sprite sprite-708"></i></a>
        <a href="javascript:emojiinsert('709.png')"><i class="sprite sprite-709"></i></a>
        <a href="javascript:emojiinsert('710.png')"><i class="sprite sprite-710"></i></a>
        <a href="javascript:emojiinsert('711.png')"><i class="sprite sprite-711"></i></a>
        <a href="javascript:emojiinsert('712.png')"><i class="sprite sprite-712"></i></a>
        <a href="javascript:emojiinsert('713.png')"><i class="sprite sprite-713"></i></a>
        <a href="javascript:emojiinsert('714.png')"><i class="sprite sprite-714"></i></a>
        <a href="javascript:emojiinsert('715.png')"><i class="sprite sprite-715"></i></a>
        <a href="javascript:emojiinsert('716.png')"><i class="sprite sprite-716"></i></a>
        <a href="javascript:emojiinsert('717.png')"><i class="sprite sprite-717"></i></a>
        <a href="javascript:emojiinsert('718.png')"><i class="sprite sprite-718"></i></a>
        <a href="javascript:emojiinsert('719.png')"><i class="sprite sprite-719"></i></a>
        <a href="javascript:emojiinsert('720.png')"><i class="sprite sprite-720"></i></a>
        <a href="javascript:emojiinsert('721.png')"><i class="sprite sprite-721"></i></a>
        <a href="javascript:emojiinsert('722.png')"><i class="sprite sprite-722"></i></a>
        <a href="javascript:emojiinsert('723.png')"><i class="sprite sprite-723"></i></a>
        <a href="javascript:emojiinsert('724.png')"><i class="sprite sprite-724"></i></a>
        <a href="javascript:emojiinsert('725.png')"><i class="sprite sprite-725"></i></a>
        <a href="javascript:emojiinsert('726.png')"><i class="sprite sprite-726"></i></a>
        <a href="javascript:emojiinsert('727.png')"><i class="sprite sprite-727"></i></a>
        <a href="javascript:emojiinsert('728.png')"><i class="sprite sprite-728"></i></a>
        <a href="javascript:emojiinsert('729.png')"><i class="sprite sprite-729"></i></a>
        <a href="javascript:emojiinsert('730.png')"><i class="sprite sprite-730"></i></a>
        <a href="javascript:emojiinsert('731.png')"><i class="sprite sprite-731"></i></a>
        <a href="javascript:emojiinsert('732.png')"><i class="sprite sprite-732"></i></a>
        <a href="javascript:emojiinsert('733.png')"><i class="sprite sprite-733"></i></a>
        <a href="javascript:emojiinsert('734.png')"><i class="sprite sprite-734"></i></a>
        <a href="javascript:emojiinsert('735.png')"><i class="sprite sprite-735"></i></a>
        <a href="javascript:emojiinsert('736.png')"><i class="sprite sprite-736"></i></a>
        <a href="javascript:emojiinsert('737.png')"><i class="sprite sprite-737"></i></a>
        <a href="javascript:emojiinsert('738.png')"><i class="sprite sprite-738"></i></a>
        <a href="javascript:emojiinsert('739.png')"><i class="sprite sprite-739"></i></a>
        <a href="javascript:emojiinsert('740.png')"><i class="sprite sprite-740"></i></a>
        <a href="javascript:emojiinsert('741.png')"><i class="sprite sprite-741"></i></a>
        <a href="javascript:emojiinsert('742.png')"><i class="sprite sprite-742"></i></a>
        <a href="javascript:emojiinsert('743.png')"><i class="sprite sprite-743"></i></a>
        <a href="javascript:emojiinsert('744.png')"><i class="sprite sprite-744"></i></a>
        <a href="javascript:emojiinsert('745.png')"><i class="sprite sprite-745"></i></a>
        <a href="javascript:emojiinsert('746.png')"><i class="sprite sprite-746"></i></a>
        <a href="javascript:emojiinsert('747.png')"><i class="sprite sprite-747"></i></a>
        <a href="javascript:emojiinsert('748.png')"><i class="sprite sprite-748"></i></a>
        <a href="javascript:emojiinsert('749.png')"><i class="sprite sprite-749"></i></a>
        <a href="javascript:emojiinsert('750.png')"><i class="sprite sprite-750"></i></a>
        <a href="javascript:emojiinsert('751.png')"><i class="sprite sprite-751"></i></a>
        <a href="javascript:emojiinsert('752.png')"><i class="sprite sprite-752"></i></a>
        <a href="javascript:emojiinsert('753.png')"><i class="sprite sprite-753"></i></a>
        <a href="javascript:emojiinsert('754.png')"><i class="sprite sprite-754"></i></a>
        <a href="javascript:emojiinsert('755.png')"><i class="sprite sprite-755"></i></a>
        <a href="javascript:emojiinsert('756.png')"><i class="sprite sprite-756"></i></a>
        <a href="javascript:emojiinsert('757.png')"><i class="sprite sprite-757"></i></a>
        <a href="javascript:emojiinsert('758.png')"><i class="sprite sprite-758"></i></a>
        <a href="javascript:emojiinsert('759.png')"><i class="sprite sprite-759"></i></a>
        <a href="javascript:emojiinsert('760.png')"><i class="sprite sprite-760"></i></a>
        <a href="javascript:emojiinsert('761.png')"><i class="sprite sprite-761"></i></a>
        <a href="javascript:emojiinsert('762.png')"><i class="sprite sprite-762"></i></a>
        <a href="javascript:emojiinsert('763.png')"><i class="sprite sprite-763"></i></a>
        <a href="javascript:emojiinsert('764.png')"><i class="sprite sprite-764"></i></a>
        <a href="javascript:emojiinsert('765.png')"><i class="sprite sprite-765"></i></a>
        <a href="javascript:emojiinsert('766.png')"><i class="sprite sprite-766"></i></a>
        <a href="javascript:emojiinsert('767.png')"><i class="sprite sprite-767"></i></a>
        <a href="javascript:emojiinsert('768.png')"><i class="sprite sprite-768"></i></a>
        <a href="javascript:emojiinsert('769.png')"><i class="sprite sprite-769"></i></a>
        <a href="javascript:emojiinsert('770.png')"><i class="sprite sprite-770"></i></a>
        <a href="javascript:emojiinsert('771.png')"><i class="sprite sprite-771"></i></a>
        <a href="javascript:emojiinsert('772.png')"><i class="sprite sprite-772"></i></a>
        <a href="javascript:emojiinsert('773.png')"><i class="sprite sprite-773"></i></a>
        <a href="javascript:emojiinsert('774.png')"><i class="sprite sprite-774"></i></a>
        <a href="javascript:emojiinsert('775.png')"><i class="sprite sprite-775"></i></a>
        <a href="javascript:emojiinsert('776.png')"><i class="sprite sprite-776"></i></a>
        <a href="javascript:emojiinsert('777.png')"><i class="sprite sprite-777"></i></a>
        <a href="javascript:emojiinsert('778.png')"><i class="sprite sprite-778"></i></a>
        <a href="javascript:emojiinsert('779.png')"><i class="sprite sprite-779"></i></a>
        <a href="javascript:emojiinsert('780.png')"><i class="sprite sprite-780"></i></a>
        <a href="javascript:emojiinsert('781.png')"><i class="sprite sprite-781"></i></a>
        <a href="javascript:emojiinsert('782.png')"><i class="sprite sprite-782"></i></a>
        <a href="javascript:emojiinsert('783.png')"><i class="sprite sprite-783"></i></a>
        <a href="javascript:emojiinsert('784.png')"><i class="sprite sprite-784"></i></a>
        <a href="javascript:emojiinsert('785.png')"><i class="sprite sprite-785"></i></a>
        <a href="javascript:emojiinsert('786.png')"><i class="sprite sprite-786"></i></a>
        <a href="javascript:emojiinsert('787.png')"><i class="sprite sprite-787"></i></a>
        <a href="javascript:emojiinsert('788.png')"><i class="sprite sprite-788"></i></a>
        <a href="javascript:emojiinsert('789.png')"><i class="sprite sprite-789"></i></a>
        <a href="javascript:emojiinsert('790.png')"><i class="sprite sprite-790"></i></a>
        <a href="javascript:emojiinsert('791.png')"><i class="sprite sprite-791"></i></a>
        <a href="javascript:emojiinsert('792.png')"><i class="sprite sprite-792"></i></a>
        <a href="javascript:emojiinsert('793.png')"><i class="sprite sprite-793"></i></a>
        <a href="javascript:emojiinsert('794.png')"><i class="sprite sprite-794"></i></a>
        <a href="javascript:emojiinsert('795.png')"><i class="sprite sprite-795"></i></a>
        <a href="javascript:emojiinsert('796.png')"><i class="sprite sprite-796"></i></a>
        <a href="javascript:emojiinsert('797.png')"><i class="sprite sprite-797"></i></a>
        <a href="javascript:emojiinsert('798.png')"><i class="sprite sprite-798"></i></a>
        <a href="javascript:emojiinsert('799.png')"><i class="sprite sprite-799"></i></a>
      </div>
    </p>
  </section>
<!--
///// $$CONTENT-7 ////
-->
  <section id="content7">
    <p>
      <div class="emoji-grid">
        <a href="javascript:emojiinsert('801.png')"><i class="sprite sprite-801"></i></a>
        <a href="javascript:emojiinsert('802.png')"><i class="sprite sprite-802"></i></a>
        <a href="javascript:emojiinsert('803.png')"><i class="sprite sprite-803"></i></a>
        <a href="javascript:emojiinsert('804.png')"><i class="sprite sprite-804"></i></a>
        <a href="javascript:emojiinsert('805.png')"><i class="sprite sprite-805"></i></a>
        <a href="javascript:emojiinsert('806.png')"><i class="sprite sprite-806"></i></a>
        <a href="javascript:emojiinsert('807.png')"><i class="sprite sprite-807"></i></a>
        <a href="javascript:emojiinsert('808.png')"><i class="sprite sprite-808"></i></a>
        <a href="javascript:emojiinsert('809.png')"><i class="sprite sprite-809"></i></a>
        <a href="javascript:emojiinsert('810.png')"><i class="sprite sprite-810"></i></a>
        <a href="javascript:emojiinsert('811.png')"><i class="sprite sprite-811"></i></a>
        <a href="javascript:emojiinsert('812.png')"><i class="sprite sprite-812"></i></a>
        <a href="javascript:emojiinsert('813.png')"><i class="sprite sprite-813"></i></a>
        <a href="javascript:emojiinsert('814.png')"><i class="sprite sprite-814"></i></a>
        <a href="javascript:emojiinsert('815.png')"><i class="sprite sprite-815"></i></a>
        <a href="javascript:emojiinsert('816.png')"><i class="sprite sprite-816"></i></a>
        <a href="javascript:emojiinsert('817.png')"><i class="sprite sprite-817"></i></a>
        <a href="javascript:emojiinsert('818.png')"><i class="sprite sprite-818"></i></a>
        <a href="javascript:emojiinsert('819.png')"><i class="sprite sprite-819"></i></a>
        <a href="javascript:emojiinsert('820.png')"><i class="sprite sprite-820"></i></a>
        <a href="javascript:emojiinsert('821.png')"><i class="sprite sprite-821"></i></a>
        <a href="javascript:emojiinsert('822.png')"><i class="sprite sprite-822"></i></a>
        <a href="javascript:emojiinsert('823.png')"><i class="sprite sprite-823"></i></a>
        <a href="javascript:emojiinsert('824.png')"><i class="sprite sprite-824"></i></a>
        <a href="javascript:emojiinsert('825.png')"><i class="sprite sprite-825"></i></a>
        <a href="javascript:emojiinsert('826.png')"><i class="sprite sprite-826"></i></a>
        <a href="javascript:emojiinsert('827.png')"><i class="sprite sprite-827"></i></a>
        <a href="javascript:emojiinsert('828.png')"><i class="sprite sprite-828"></i></a>
        <a href="javascript:emojiinsert('829.png')"><i class="sprite sprite-829"></i></a>
        <a href="javascript:emojiinsert('830.png')"><i class="sprite sprite-830"></i></a>
        <a href="javascript:emojiinsert('831.png')"><i class="sprite sprite-831"></i></a>
        <a href="javascript:emojiinsert('832.png')"><i class="sprite sprite-832"></i></a>
        <a href="javascript:emojiinsert('833.png')"><i class="sprite sprite-833"></i></a>
        <a href="javascript:emojiinsert('834.png')"><i class="sprite sprite-834"></i></a>
        <a href="javascript:emojiinsert('835.png')"><i class="sprite sprite-835"></i></a>
        <a href="javascript:emojiinsert('836.png')"><i class="sprite sprite-836"></i></a>
        <a href="javascript:emojiinsert('837.png')"><i class="sprite sprite-837"></i></a>
        <a href="javascript:emojiinsert('838.png')"><i class="sprite sprite-838"></i></a>
        <a href="javascript:emojiinsert('839.png')"><i class="sprite sprite-839"></i></a>
        <a href="javascript:emojiinsert('840.png')"><i class="sprite sprite-840"></i></a>
        <a href="javascript:emojiinsert('841.png')"><i class="sprite sprite-841"></i></a>
        <a href="javascript:emojiinsert('842.png')"><i class="sprite sprite-842"></i></a>
        <a href="javascript:emojiinsert('843.png')"><i class="sprite sprite-843"></i></a>
        <a href="javascript:emojiinsert('844.png')"><i class="sprite sprite-844"></i></a>
        <a href="javascript:emojiinsert('845.png')"><i class="sprite sprite-845"></i></a>
        <a href="javascript:emojiinsert('846.png')"><i class="sprite sprite-846"></i></a>
      </div>
    </p>
  </section>
<!--
///// $$END-CONTENT ////
-->
</form>
<div style="float: right; margin:5px 35px 0 0;">
    <input type="button" id="cancel" name="cancel" value="<?php _e("Cancel", 'wp_emoji_one'); ?>" onclick="tinyMCEPopup.close();" />
</div>

    <script type="text/javascript">
        //<![CDATA[
        var wpemojionedomain = "<?php echo plugin_dir_url( __FILE__ ); ?>";

        function saveSize() {
            var opt = document.getElementById("iconsize");
            var si = opt.selectedIndex;
            window.sessionStorage.setItem("emojiSize", si);
        }

        function saveCategory() {
            var category = document.getElementsByName("tabs");
            for (var x = 0; x < category.length; x++) {
                if (category[x].checked) {
                    var ci = x;
                }
            }
            window.sessionStorage.setItem("emojiCategory", ci);
        }

        var size = document.getElementById("iconsize");
        var category = document.getElementsByName("tabs");

        size.addEventListener("change", saveSize, false);
        for (var x = 0; x < category.length; x++)
            category[x].addEventListener("change", saveCategory, false);

        window.onload = function() {
            var sizeIndex = window.sessionStorage.getItem("emojiSize");
            var categoryIndex = window.sessionStorage.getItem("emojiCategory");
            if (sizeIndex) {
                var sizeSelect = document.getElementById("iconsize");
                size.selectedIndex = sizeIndex;
            }
            var tabIndex = "tab" + (parseInt(categoryIndex) + 1);
            if (categoryIndex) {
                var tab = document.getElementById(tabIndex);
                tab.checked = true;
            }
        };

        window.onunload = function () {
            size.removeEventListener("change", saveSize, false);
            for (var x = 0; x < category.length; x++)
                category[x].removeEventListener("change", saveCategory, false);
        };
        //]]>
    </script>

</body>
</html>
