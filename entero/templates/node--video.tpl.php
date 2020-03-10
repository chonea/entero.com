<?php
/*
 * Video node template
 */

$ga_event_name = 'Video '.$node->nid.' - '.$node->title;
?>

<h2 class="video-title"><?php print $title; ?></h2>
<?php print render($content); ?>
<div id="frame_<?php echo $node->nid; ?>" class="video-frame"><iframe id="video_<?php echo $node->nid; ?>" width="100%" height="100%" src="http://player.vimeo.com/video/<?php echo $node->field_video_id['und']['0']['value']; ?>?api=1&autoplay=true&player_id=video_<?php echo $node->nid; ?>" frameborder="0" data-progress="true" data-seek="true" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>

<script type="text/javascript">
(function($){
	$(document).ready(function(){
		if (typeof ga === "undefined") {
			console.log("ga is undefined");
		} else {
			ga('send', {
				'hitType': 'event',          // Required.
				'eventCategory': 'Video',   // Required.
				'eventAction': 'view',      // Required.
				'eventLabel': "<?php echo preg_replace("/\r?\n/", "\\n", addslashes($ga_event_name)); ?>",
				'eventValue': <?php echo $node->nid; ?>
			});
		}
		<?php /*
		//_gaq.push(['_trackEvent','Video','view','<?php echo $ga_event_name; ?>',<?php echo $node->nid; ?>,false]);
		*/ ?>
	});
})(jQuery);
</script>