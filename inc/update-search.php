<?php
// Updates the search_result.json when a new article is published, updated or deleted etc.

function update_post_search() {
	// only run if custom post type is transitioned    
	// get current post type in admin
	$post_type = get_post_type();
	set_time_limit(600);
	$data = [];

	$posts = get_posts(array(
		'post_type' => $post_type,
		'post_status' => 'publish',
		'numberposts' => -1,
	));

	foreach ($posts as $post) {
		$r = [];
		$post_id = $post->ID;
		$terms = get_the_terms($post_id, 'category');
		$preamble = custom_excerpt(16, 'preamble', $post_id);
		$r['title'] = $post->post_title;
		$r['link'] = get_the_permalink($post);
		$r['excerpt'] = !empty($preamble) ? $preamble : excerpt(16, $post_id);
		$r['img'] = get_the_post_thumbnail_url($post_id, 'medium_large');
		$r['date'] = get_the_date('d M Y', $post_id);
		$r['category'] = join(', ', wp_list_pluck($terms, 'name'));

		$data[] = $r;
	}
	$json_data = json_encode($data);
	// write to file
	$file = fopen(ABSPATH . '/search-results/' . $post_type . '_search_result.json', 'w');
	fwrite($file, $json_data);
	fclose($file);
}

add_action('transition_post_status', function () {
	if (!isset($_POST['post_type']) || 'page' === $_POST['post_type']) {
		return;
	}
	update_post_search();
}, 10, 3);

add_action('trashed_post', 'update_post_search');
