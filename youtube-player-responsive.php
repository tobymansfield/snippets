<?php

// SHORTCODE
// YOUTUBE PLAYER
function youtube_shortcode( $atts, $content = null ) {
	extract(shortcode_atts(array(
		    "id" => '',
		  ), $atts));
	return '<style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class="embed-container videoborder"><iframe src="http://www.youtube.com/embed/' . $id . '" allowfullscreen frameborder="0"></iframe></div>';
}
add_shortcode( 'youtube', 'youtube_shortcode' );

// REMOVE YT SHORTCODE FROM EXCERPT
add_filter( 'the_excerpt', 'remove_youtube_from_excerpt' );
function remove_youtube_from_excerpt( $excerpt ) {
	return preg_replace ('/\[youtube[^\]]*\]/', '$1', $excerpt);
}

?>