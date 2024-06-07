<?php
$ways_title = get_field('ways_title');
$ways_content = get_field('ways_description');
?>

<section class="ways">
  <div class="container">
    
   <div class="goal-content">         
    <div class="goal-title">
        <?php if ($ways_title) : ?>
        <h2 class="goal-heading project-heading"><?php echo $ways_title; ?></h2>
        <?php endif; ?>
    </div>  
    <div class="project-description goal-description">
        <?php if ($ways_content) : ?>
        <p><?php echo $ways_content; ?></p>
        <?php endif; ?>
    </div>
 </div>
 <div class="clearfix"></div>
</section>
