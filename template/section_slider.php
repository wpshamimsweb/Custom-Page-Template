<?php
// Retrieve slider section field values
$slider_section = get_post_meta(get_the_ID(), 'homepage_layout_slider_section', true);
$oneline_plx = get_theme_mod('parallax_opt');
if($oneline_plx =='' || $oneline_plx =='0'){  
    $prlx_class = 'parallax-lite';
    $prlx_data_center = 'background-position: 50% 0px';
    $prlx_top_bottom = 'background-position: 50% -100px;';
} else {
    $prlx_class = ''; 
    $prlx_data_center = '';
    $prlx_top_bottom ='';
}     



if ($slider_section) {
    ?>

    <div id="slider-div">
        <div id="page-top" class="slider">
            <div class="flexslider <?php echo $prlx_class;?> <?php echo $bnt_style;?>">
                <ul class="slides">
                    <?php
                    foreach ($slider_section as $slider_item) {
                        $slider_image_url = $slider_item['homepage_layout_slider_image'];
                        $slider_content = $slider_item['homepage_layout_slider_content'];
                        $slider_quote_title = $slider_item['homepage_layout_slider_quote_title'];
                        $slider_author_title = $slider_item['homepage_layout_slider_author_title'];
                        $attachment_id = attachment_url_to_postid($slider_image_url);

                        $slider_image_url = wp_get_attachment_image_url($attachment_id, 'large');

                        if ($slider_quote_title && $slider_author_title) {
                            ?>
                            <li data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -100px;" style="background-image: url('<?php echo esc_url($slider_image_url); ?>');">
                                <div class="over-lay">
                                    <div class="fs-caption wow thunk-fadeInDown" data-wow-delay="1s">
                                        <div class="caption-container" data-anchor-target="#slider-div h2">
                                            <h2 class="title overtext slider_qoute_title"><?php echo $slider_quote_title; ?><br><span class=""><?php echo $slider_author_title; ?></span></h2>
                                            
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <?php
                        } else {
                           
                            if ($slider_image_url) {
                                ?>
                                <li data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -100px;" style="background-image: url('<?php echo esc_url($slider_image_url); ?>');">
                                    <div class="over-lay">
                                        <div class="fs-caption wow thunk-fadeInDown" data-wow-delay="1s">
                                            <div class="caption-container" data-anchor-target="#slider-div h2">
                                                <h2 class="title overtext"><?php echo $slider_content; ?></h2>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <?php
                            }
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>

    <div class="bg_bottom_slider">
        
    </div>


    <?php
}
?>
