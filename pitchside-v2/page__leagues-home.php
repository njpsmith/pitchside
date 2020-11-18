<?php 
	/*
	 Template Name: Leagues Home Page
	*/
	get_header(); 

	$m = array();
	

	$m['small_hero'] = get_field('small_hero');
	include('modules/small_hero.php');
	
	$m['content_row'] = get_field('content_row');
	include('modules/content_row.php');

	$m['leagues_grid'] = get_field('leagues_grid');
	include('modules/leagues_grid.php');

	$m['cta_row'] = get_field('cta_row');
	include('modules/cta_row.php');
?>




<?php get_footer(); ?>
