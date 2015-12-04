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
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-017"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-018"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-019"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-020"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-021"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-022"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-023"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-024"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-025"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-026"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-027"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-028"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-029"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-030"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-031"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-032"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-033"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-034"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-035"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-036"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-037"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-038"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-039"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-040"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-041"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-042"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-043"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-044"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-045"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-046"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-047"></i></a>
      </div>
    </p>
  </section>
<!--
///// $$CONTENT-2 ////
-->
  <section id="content2">
    <p>
      <div class="emoji-grid">
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-048"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-049"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-050"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-051"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-052"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-053"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-054"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-055"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-056"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-057"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-058"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-059"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-060"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-061"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-062"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-063"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-064"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-065"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-066"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-067"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-068"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-069"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-070"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-071"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-072"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-073"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-074"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-075"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-076"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-077"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-078"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-079"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-080"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-081"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-082"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-083"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-084"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-085"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-086"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-087"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-088"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-089"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-090"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-091"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-092"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-093"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-094"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-095"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-096"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-097"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-098"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-099"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-100"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-101"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-102"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-103"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-104"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-105"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-106"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-107"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-108"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-109"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-110"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-111"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-112"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-113"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-114"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-115"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-116"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-117"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-118"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-119"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-120"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-121"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-122"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-123"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-124"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-125"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-126"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-127"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-128"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-129"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-130"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-131"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-132"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-133"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-134"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-135"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-136"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-137"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-138"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-139"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-140"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-141"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-142"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-143"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-144"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-145"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-146"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-147"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-148"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-149"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-150"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-151"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-152"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-153"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-154"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-155"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-156"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-157"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-158"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-159"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-160"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-161"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-162"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-163"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-164"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-165"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-166"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-167"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-168"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-169"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-170"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-171"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-172"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-173"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-174"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-175"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-176"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-177"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-178"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-179"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-180"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-181"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-182"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-183"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-184"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-185"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-186"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-187"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-188"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-189"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-190"></i></a>
      </div>
    </p>
  </section>
<!--
///// $$CONTENT-3 ////
-->
  <section id="content3">
    <p>
      <div class="emoji-grid">
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-191"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-192"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-193"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-194"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-195"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-196"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-197"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-198"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-199"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-200"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-201"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-202"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-203"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-204"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-205"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-206"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-207"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-208"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-209"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-210"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-211"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-212"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-213"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-214"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-215"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-216"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-217"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-218"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-219"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-220"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-221"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-222"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-223"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-224"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-225"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-226"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-227"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-228"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-229"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-230"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-231"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-232"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-233"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-234"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-235"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-236"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-237"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-238"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-239"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-240"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-241"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-242"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-243"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-244"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-245"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-246"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-247"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-248"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-249"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-250"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-251"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-252"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-253"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-254"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-255"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-256"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-257"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-258"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-259"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-260"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-261"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-262"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-263"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-264"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-265"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-266"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-267"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-268"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-269"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-270"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-271"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-272"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-273"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-274"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-275"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-276"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-277"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-278"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-279"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-280"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-281"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-282"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-283"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-284"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-285"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-286"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-287"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-288"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-289"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-290"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-291"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-292"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-293"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-294"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-295"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-296"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-297"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-298"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-299"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-300"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-301"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-302"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-303"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-304"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-305"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-306"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-307"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-308"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-309"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-310"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-311"></i></a>
      </div>
    </p>
  </section>
<!--
///// $$CONTENT-4 ////
-->
  <section id="content4">
    <p>
      <div class="emoji-grid">
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-312"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-313"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-314"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-315"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-316"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-317"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-318"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-319"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-320"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-321"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-322"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-323"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-324"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-325"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-326"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-327"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-328"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-329"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-330"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-331"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-332"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-333"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-334"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-335"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-336"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-337"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-338"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-339"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-340"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-341"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-342"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-343"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-344"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-345"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-346"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-347"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-348"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-349"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-350"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-351"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-352"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-353"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-354"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-355"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-356"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-357"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-358"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-359"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-360"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-361"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-362"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-363"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-364"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-365"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-366"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-367"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-368"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-369"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-370"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-371"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-372"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-373"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-374"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-375"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-376"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-377"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-378"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-379"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-380"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-381"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-382"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-383"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-384"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-385"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-386"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-387"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-388"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-389"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-390"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-391"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-392"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-393"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-394"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-395"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-396"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-397"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-398"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-399"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-400"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-401"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-402"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-403"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-404"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-405"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-406"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-407"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-408"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-409"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-410"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-411"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-412"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-413"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-414"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-415"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-416"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-417"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-418"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-419"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-420"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-421"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-422"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-423"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-424"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-425"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-426"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-427"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-428"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-429"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-430"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-431"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-432"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-433"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-434"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-435"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-436"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-437"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-438"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-439"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-440"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-441"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-442"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-443"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-444"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-445"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-446"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-447"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-448"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-449"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-450"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-451"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-452"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-453"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-454"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-455"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-456"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-457"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-458"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-459"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-460"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-461"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-462"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-463"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-464"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-465"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-466"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-467"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-468"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-469"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-470"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-471"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-472"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-473"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-474"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-475"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-476"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-477"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-478"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-479"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-480"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-481"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-482"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-483"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-484"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-485"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-486"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-487"></i></a>
      </div>
    </p>
  </section>
<!--
///// $$CONTENT-5 ////
-->
  <section id="content5">
    <p>
      <div class="emoji-grid">
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-488"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-489"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-490"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-491"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-492"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-493"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-494"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-495"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-496"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-497"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-498"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-499"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-500"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-501"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-502"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-503"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-504"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-505"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-506"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-507"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-508"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-509"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-510"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-511"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-512"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-513"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-514"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-515"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-516"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-517"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-518"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-519"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-520"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-521"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-522"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-523"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-524"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-525"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-526"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-527"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-528"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-529"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-530"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-531"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-532"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-533"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-534"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-535"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-536"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-537"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-538"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-539"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-540"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-541"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-542"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-543"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-544"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-545"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-546"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-547"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-548"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-549"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-550"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-551"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-552"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-553"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-554"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-555"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-556"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-557"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-558"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-559"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-560"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-561"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-562"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-563"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-564"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-565"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-566"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-567"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-568"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-569"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-570"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-571"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-572"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-573"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-574"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-575"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-576"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-577"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-578"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-579"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-580"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-581"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-582"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-583"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-584"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-585"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-586"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-587"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-588"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-589"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-590"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-591"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-592"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-593"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-594"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-595"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-596"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-597"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-598"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-599"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-600"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-601"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-602"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-603"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-604"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-605"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-606"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-607"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-608"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-609"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-610"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-611"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-612"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-613"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-614"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-615"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-616"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-617"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-618"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-619"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-620"></i></a>
      </div>
    </p>
  </section>  
<!--
///// $$CONTENT-6 ////
-->
  <section id="content6">
    <p>
      <div class="emoji-grid">
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-621"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-622"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-623"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-624"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-625"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-626"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-627"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-628"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-629"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-630"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-631"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-632"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-633"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-634"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-635"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-636"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-637"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-638"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-639"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-640"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-641"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-642"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-643"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-644"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-645"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-646"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-647"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-648"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-649"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-650"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-651"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-652"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-653"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-654"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-655"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-656"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-657"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-658"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-659"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-660"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-661"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-662"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-663"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-664"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-665"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-666"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-667"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-668"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-669"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-670"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-671"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-672"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-673"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-674"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-675"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-676"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-677"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-678"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-679"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-680"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-681"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-682"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-683"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-684"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-685"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-686"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-687"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-688"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-689"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-690"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-691"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-692"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-693"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-694"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-695"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-696"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-697"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-698"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-699"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-700"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-701"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-702"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-703"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-704"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-705"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-706"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-707"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-708"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-709"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-710"></i></a>
      </div>
    </p>
  </section>
<!--
///// $$CONTENT-7 ////
-->
  <section id="content7">
    <p>
      <div class="emoji-grid">
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-711"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-712"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-713"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-714"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-715"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-716"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-717"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-718"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-719"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-720"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-721"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-722"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-723"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-724"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-725"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-726"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-727"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-728"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-729"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-730"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-731"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-732"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-733"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-734"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-735"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-736"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-737"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-738"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-739"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-740"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-741"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-742"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-743"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-744"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-745"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-746"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-747"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-748"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-749"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-750"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-751"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-752"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-753"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-754"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-755"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-756"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-757"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-758"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-759"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-760"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-761"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-762"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-763"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-764"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-765"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-766"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-767"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-768"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-769"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-770"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-771"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-772"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-773"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-774"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-775"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-776"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-777"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-778"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-779"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-780"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-781"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-782"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-783"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-784"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-785"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-786"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-787"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-788"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-789"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-790"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-791"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-792"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-793"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-794"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-795"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-796"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-797"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-798"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-799"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-800"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-801"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-802"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-803"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-804"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-805"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-806"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-807"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-808"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-809"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-810"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-811"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-812"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-813"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-814"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-815"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-816"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-817"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-818"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-819"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-820"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-821"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-822"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-823"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-824"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-825"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-826"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-827"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-828"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-829"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-830"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-831"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-832"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-833"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-834"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-835"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-836"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-837"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-838"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-839"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-840"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-841"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-842"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-843"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-844"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-845"></i></a>
        <a href="javascript:emojiinsert('.png')"><i class="sprite sprite-846"></i></a>
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
