<?php 
	get_header(); 

	$modules = get_field('modules');
	$modNum = 1;
	foreach($modules as $m){ //Loop through the ACF flexible field module and include dem filez!
		
		$anchorlinkID = "scroll-".$modNum;
		
		include('modules/'.$m['acf_fc_layout'].'.php');
		$modNum++;
	} 

	get_footer(); 
?>
