<?php
 /* Template Name: Home Page Layout */
?>
<?php 
get_header();      
$section = array('section_slider', 'section_about','section_ribbon','section_team_custom','section_ribbon_two' , 'section_goal' , 'section_ribbon_project' , 'section_project' , 'section_ribbon_ways' , 'section_ways' , 'section_ribbon_together', 'section_together' , 'section_testimonial','section_countactus');
        foreach(get_theme_mod('_sorting',$section) as $value):
        get_template_part( 'template/'.$value); 
        endforeach;
?>
<?php get_footer(); ?>