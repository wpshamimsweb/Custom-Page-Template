<?php
$goal_title = get_field('goal_title');
$goal_content = get_field('goal_content');
?>

<section class="section-goal">
      
  <div class="container">
    
   <div class="goal-content">         
    <div class="goal-title">
        <?php if ($goal_title) : ?>
        <h2 class="goal-heading project-heading"><?php echo $goal_title; ?></h2>
        <?php endif; ?>
    </div>  
    <div class="project-description goal-description">
        <?php if ($goal_content) : ?>
        <p><?php echo $goal_content; ?></p>
        <?php endif; ?>
    </div>
 </div>
 <div class="clearfix"></div>
</section>
