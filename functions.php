<?php

/*
/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\ INSTRUCTIONS /\/\/\/\/\/\/\/\/\/\/\/\/\//\/\/\/\/\

	The following functions in Standard 3 are able to be overridden in your child 
	theme.
	
		standard_page_menu
		standard_add_theme_background
		standard_add_theme_editor_style
		standard_add_theme_menus
		standard_add_theme_sidebars
		standard_add_theme_features
		standard_set_media_embed_size
		standard_set_theme_colors
		standard_header_style
		standard_admin_header_style
		standard_admin_header_image
		standard_process_link_post_format_content
		standard_process_link_post_format_title
		standard_remove_paragraph_on_media
		standard_wrap_embeds
		standard_search_form
		standard_post_format_rss
		standard_modify_widget_titles
		standard_add_title_to_single_post_pagination

	You may also place any functions outlined in our FAQs & tutorials on the support
	forum in this file, as instructed, or any other code you create yourself or find
	from around the web.
	
	Be forewarned that even the simplest mistake within this file can completely
	bring down your website. Please make sure to create backups and have FTP
	access to your server before modifying this file so you amy correct any issues.
	
	Be sure to place any code after these instructions and before the closing 
	PHP tag (ie. "?>").

/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\//\/\/\/\/\/\/\/\/\/\
*/

/**
 * Adds custom sidebars
 */
function add_admin_sidebars() {

	// fourth sidebar
	register_sidebar(
		array(
			'name' => __('Footer Widget #4', 'standard'),
			'id' => 'sidebar-6',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>'
		)
	);

	
} // end add_theme_sidebars
add_action('init', 'add_admin_sidebars');

?>