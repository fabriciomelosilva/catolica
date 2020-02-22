<?php // Template Name: Sobre ?>

<?php

get_header();

        
get_template_part('sections/nav', 'index');


$post_type = get_post_type();


if ($post_type == 'noticias'){
	
	$posts = new WP_Query( array( 'post_type' => 'noticias', 'posts_per_page' => 5 ) ); 
	while ( $posts->have_posts() ) : $posts->the_post();

	the_title( '<h2>', '</h2>' ); 

	endwhile;
}


if ($post_type == 'eventos'){
	
	$posts = new WP_Query( array( 'post_type' => 'eventos', 'posts_per_page' => 5 ) ); 
	while ( $posts->have_posts() ) : $posts->the_post();

	the_title( '<h2>', '</h2>' ); 

	endwhile;
}


get_footer(); ?>
