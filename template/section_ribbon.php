<!---RIBBON SECTION START- -->
<?php

$heading = get_theme_mod('ribbon_heading','');
$ribbon_button_text = get_theme_mod('ribbon_button_text','');
$oneline_plx = get_theme_mod('parallax_opt');
if($oneline_plx =='' || $oneline_plx =='0'){  
$prlx_class = 'parallax-lite';
$prlx_data_center = 'background-position: 50% 0px';
$prlx_top_bottom = 'background-position: 50% -100px;';
}else{
$prlx_class = ''; 
$prlx_data_center = '';
$prlx_top_bottom =''; 
}  
?>

<div class="rolam_bg_top">
        
</div>

<div class="ribbon-wrapper <?php echo $prlx_class;?>"  id="team">
<section id="ribbon" class="ribbon_sec rolam_sec" data-center="<?php echo esc_attr($prlx_data_center);?>" data-top-bottom="<?php echo esc_attr($prlx_top_bottom);?>" style="" >
            <div class="container">
                <div class="ribon-box ">
                   
                </div>
            </div>
        </section>
</div>
<div class="section-navigate-background">
    <div class="section-navigate-background-text"><span><?php echo esc_html("Rólam", "oneline-lite");?></span></div>
</div>
