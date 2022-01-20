<?php
    /**
     * Template Name: サイトマップ
     * Template Post Type: page
     */
?>
<?php get_header(); ?>
<?php remove_filter ('the_content', 'wpautop'); ?>
<?php get_template_part('include_files/page/sitemap/01_Fv'); ?>
<aside class="wapper breadCrumbList"><?php if(function_exists('bcn_display')) { bcn_display(); }?></aside>
<?php if ( have_posts() ) while ( have_posts() ) : the_post();  ?>
<main class="<?php echo $post->post_name; ?>Main">
    <?php get_template_part('include_files/page/sitemap/02_link'); ?>
<?php endwhile; // end of the loop. ?>
</main>
<?php get_footer(); ?>