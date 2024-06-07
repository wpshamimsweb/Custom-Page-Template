<?php
// Retrieve team section field values
$team_section = get_post_meta(get_the_ID(), 'homepage_layout_team_section', true);
 $team_content = get_post_meta(get_the_ID(), 'homepage_layout_team_content', true);
?>
<section>
    <div class="container">
        <div class="team-section">
            <div class="team-image-part">
     <?php       
            // Check if team section has values
if ($team_section) {
    foreach ($team_section as $team_member) {
        $team_image_url = $team_member['homepage_layout_team_image'];
        $team_image_lightbox_url = $team_member['homepage_layout_team_image_lightbox'];
       

        // Extract attachment ID from the image URL
        $attachment_id = attachment_url_to_postid($team_image_url);
         $attachment_lightbox_id = attachment_url_to_postid( $team_image_lightbox_url);

        // Get team image URL
        $team_image_url = wp_get_attachment_image_url($attachment_id, 'large');
         $team_image_url_lightbox = wp_get_attachment_image_url($attachment_lightbox_id, 'large');

        // Display team member content
        ?>
        
            <?php if ($team_image_url) : ?>
            
                <div class="team-image">
                    <a href="<?php echo esc_url($team_image_url_lightbox); ?>" data-fancybox="gallery">
                        <img src="<?php echo esc_url($team_image_url); ?>" alt="Team Member Image">
                    </a>
                </div>
            <?php endif; ?>
            
       
        <?php
    }
}
?>
      </div>
  <?php if ($team_content) : ?>
                <div class="team-content">
                    <p><?php echo $team_content; ?></p>
                </div>
            <?php endif; ?>
 </div>
    </div>
</section>
<script>
    JQuery(document).ready(function($) {
        // Initialize Fancybox
        $('[data-fancybox="gallery"]').fancybox({
            buttons: [
                "close"
            ],
            loop: true, // Enable loop for navigation
            transitionEffect: "slide", // Set transition effect
        });
    });
</script>

<!-- Add Fancybox CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />


<!-- Add Fancybox JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
