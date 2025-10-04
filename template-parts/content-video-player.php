<?php

$content_video_player = new WPST_Content_Video_Player( $post->ID ); ?>
<div class="video-player">
	<?php echo $content_video_player->get_content_video_player(); ?>
</div>
