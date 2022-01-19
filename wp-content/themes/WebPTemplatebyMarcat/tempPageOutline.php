<?php
    /**
     * Template Name: 募集要項
     * Template Post Type: page
     */
?>
<?php get_header(); ?>
<?php remove_filter ('the_content', 'wpautop'); ?>
<?php get_template_part('include_files/page/recruit/01_Fv'); ?>
<aside class="wapper breadCrumbList"><?php if(function_exists('bcn_display')) { bcn_display(); }?></aside>
<?php if ( have_posts() ) while ( have_posts() ) : the_post();  ?>
<main class="<?php echo $post->post_name; ?>Main">
    <?php get_template_part('include_files/page/outline/02_title'); ?>
    <?php get_template_part('include_files/page/outline/03_Loop'); ?>
    <?php get_template_part('include_files/page/recruit/04_entry'); ?>
    <?php get_template_part('include_files/page/recruit/06_btmNav'); ?>

</main>
<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>