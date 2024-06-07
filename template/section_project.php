<section id="project">
<div class="container">

    <div class="project-section">
    <?php
    $project_heading = get_post_meta(get_the_ID(), 'homepage_layout_project_heading', true);
    $project_description = get_post_meta(get_the_ID(), 'homepage_layout_project_description', true);

    echo '<h2 class="project-heading">' . esc_html($project_heading) . '</h2>';
    echo '<div class="project-description">' . wpautop($project_description) . '</div>';

    $project_boxes = get_post_meta(get_the_ID(), 'homepage_layout_project_section', true);

    if ($project_boxes) {
        foreach ($project_boxes as $project_box) {
            // Get the attachment ID for box icon
            $box_icon_id = isset($project_box['homepage_layout_project_box_icon']) ? $project_box['homepage_layout_project_box_icon'] : '';
            // Get the image URL from attachment ID
            $box_icon_url = wp_get_attachment_image_url($box_icon_id, 'large');

            $box_title = isset($project_box['homepage_layout_project_box_title']) ? $project_box['homepage_layout_project_box_title'] : '';
            $box_text = isset($project_box['homepage_layout_project_box_text']) ? wpautop($project_box['homepage_layout_project_box_text']) : '';

            echo '<div class="project-box">';
            if (!empty($box_icon_id)) {
                echo '<div class="box-icon"><img src="' . esc_url($box_icon_id) . '" alt="Box Icon"></div>';
            }
            echo '<div class="box-text">';
            if (!empty($box_title)) {
                echo '<h3 class="box-title">' . esc_html($box_title) . '</h3>';
            }
            if (!empty($box_text)) {
                echo '<div class="box-desc">' . $box_text . '</div>';
            }
            echo '</div>'; // Close the box-text div
            ?>
            <div class="clearfix" style="clear:both;"></div>
            <?php
            echo '</div>'; // Close the project-box div
        }
    }
    ?>
</div>

<?php
//echo oneline_lite_svg_bottom_enable();
?>
</div>
<div class="clearfix"></div>
</section>
