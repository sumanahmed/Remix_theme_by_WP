<?php get_header(); ?>

	<?php
		$sections =	cs_get_option('section_sorter');
		foreach($sections['enabled'] as $key=>$value){

			switch($key){

				case 'slider':get_template_part('sections/slider');
				break;

				case 'about':get_template_part('sections/about');
				break;

				case 'portfolio':get_template_part('sections/portfolio');
				break;

				case 'advertise':get_template_part('sections/advertise');
				break;

				case 'services':get_template_part('sections/services');
				break;
				
				case 'team':get_template_part('sections/team');
				break;
				
				case 'pricing':get_template_part('sections/pricing');
				break;
				
				case 'work':get_template_part('sections/work');
				break;
				
				case 'blog':get_template_part('sections/blog');
				break;
				
				case 'video':get_template_part('sections/video');
				break;
				
				case 'client':get_template_part('sections/client');
				break;

			}
			
		}
	?>

<?php get_footer(); ?>