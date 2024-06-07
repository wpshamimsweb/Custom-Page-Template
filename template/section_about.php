<?php

$about_image_url = get_field('about_image');
$about_content = get_field('about_content');
?>
<div class="container">
  <div class="about-section">
    <div class="about-image">
        <?php if ($about_image_url) : ?>
            <a href="<?php echo esc_url($about_image_url); ?>" class="lightbox">
                <img src="<?php echo esc_url($about_image_url); ?>" alt="About Image">
            </a>
        <?php endif; ?>
    </div>
    <div class="about-content">
        <?php if ($about_content) : ?>
            <p><?php echo $about_content; ?></p>
        <?php endif; ?>
    </div>
  </div>
  <div class="clearfix"></div>
</div>


