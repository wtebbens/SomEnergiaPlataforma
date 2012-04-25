<?php
function embed_extender_init()
{
	global $CONFIG;
	
	if (elgg_is_active_plugin('embedvideo')){
		include_once $CONFIG->pluginspath . 'embedvideo/lib/embedvideo.php';
		//die('embed');
	}
	else {
		include_once $CONFIG->pluginspath . 'embed_extender/lib/embedvideo.php';
		//die('extender');
	}
	
	include_once $CONFIG->pluginspath . 'embed_extender/lib/custom.php';
	include_once $CONFIG->pluginspath . 'embed_extender/lib/embed_extender.php';

	//elgg_register_plugin_hook_handler('display', 'view', 'embed_extender_rewrite');
	//elgg_register_plugin_hook_handler('view', 'all', 'embed_extender_rewrite');
	
	//Check where embed code - The wire
	$wire_show = elgg_get_plugin_setting('wire_show', 'embed_extender');		
	if($wire_show == 'yes'){
		elgg_register_plugin_hook_handler('view', 'object/thewire', 'embed_extender_rewrite');
	}
	
	//Check where embed code - Blog posts
	$blog_show = elgg_get_plugin_setting('blog_show', 'embed_extender');		
	if($blog_show == 'yes'){
		elgg_register_plugin_hook_handler('view', 'object/blog', 'embed_extender_rewrite');
	}
	
	//Check where embed code - Comments
	$comment_show = elgg_get_plugin_setting('comment_show', 'embed_extender');		
	if($comment_show == 'yes'){
		elgg_register_plugin_hook_handler('view', 'annotation/generic_comment', 'embed_extender_rewrite');
		elgg_register_plugin_hook_handler('view', 'annotation/default', 'embed_extender_rewrite');
	}
	
	//Check where embed code - Group topics
	$topicposts_show = elgg_get_plugin_setting('topicposts_show', 'embed_extender');		
	if($topicposts_show == 'yes'){
		elgg_register_plugin_hook_handler('view', 'object/groupforumtopic', 'embed_extender_rewrite');
	}
	
	//Check where embed code - Messageboard
	$messageboard_show = elgg_get_plugin_setting('messageboard_show', 'embed_extender');
	if($messageboard_show == 'yes'){
		elgg_register_plugin_hook_handler('view', 'annotation/default', 'embed_extender_rewrite');
	}

	//Check where embed code - Pages
	$page_show = elgg_get_plugin_setting('page_show', 'embed_extender');		
	if($page_show == 'yes'){
		elgg_register_plugin_hook_handler('view', 'object/page_top', 'embed_extender_rewrite');
	}
	
	//Check where embed code - Pages
	$page_show = elgg_get_plugin_setting('bookmark_show', 'embed_extender');		
	if($page_show == 'yes'){
		elgg_register_plugin_hook_handler('view', 'object/bookmarks', 'embed_extender_rewrite');
	}
	elgg_extend_view('css','embed_extender/css');

}

elgg_register_event_handler('init', 'system', 'embed_extender_init');