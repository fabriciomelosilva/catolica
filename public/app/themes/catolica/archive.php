<?php // Template Name: Sobre ?>

<?php

get_header();

        
get_template_part('sections/nav', 'index');


$post_type = get_post_type();


if ($post_type == 'noticias'){
	
	$posts = new WP_Query( array( 'post_type' => 'noticias', 'posts_per_page' => 1 ) ); 
	var_dump($posts);

}


get_footer(); ?>
