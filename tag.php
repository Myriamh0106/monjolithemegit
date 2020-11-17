

<?php
get_header();
?>
<div class="category">
<h1>tag Namme xxxx <?php the_tags('Tags:',',','<br/>'); ?> </h1>
<?php get_template_part('loop'); ?>
</div>
<?php
get_sidebar();
get_footer();
?>
