<?php get_header(); ?>
<?php $cats = get_the_category(get_the_ID()); ?>
<?php foreach($cats as $cat){ $catid[]= $cat->cat_ID; $catid[]= $cat->cat_parent; } ?>
<?php if(in_array(1, $catid , true)): ?>
<?php get_template_part('include_files/single/news'); ?>
<?php endif; ?>
<?php get_footer(); ?>