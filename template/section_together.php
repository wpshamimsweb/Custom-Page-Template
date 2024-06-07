<?php
$together_title = get_field('together_title');
$together_content = get_field('together_description');
?>

<section class="together">
  <div class="container">
    
   <div class="goal-content">         
    <div class="goal-title">
        <?php if ($together_title) : ?>
        <h2 class="goal-heading project-heading"><?php echo $together_title; ?></h2>
        <?php endif; ?>
    </div>  
    <div class="project-description goal-description">
        <?php if ($together_content) : ?>
        <p><?php echo $together_content; ?></p>
        <?php endif; ?>
    </div>
 </div>
 <div class="clearfix" id="testimonial"></div>
</section>
