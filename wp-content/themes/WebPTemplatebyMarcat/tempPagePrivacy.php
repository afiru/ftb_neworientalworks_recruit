<?php
    /**
     * Template Name: プライバシーポリシー
     * Template Post Type: page
     */
?>
<?php get_header(); ?>
<?php remove_filter ('the_content', 'wpautop'); ?>
<?php get_template_part('include_files/page/privacy/01_Fv'); ?>
<aside class="wapper breadCrumbList"><?php if(function_exists('bcn_display')) { bcn_display(); }?></aside>
<?php if ( have_posts() ) while ( have_posts() ) : the_post();  ?>
<main class="<?php echo $post->post_name; ?>Main">
    <?php get_template_part('include_files/page/privacy/02_topTxt'); ?>
    <?php get_template_part('include_files/page/privacy/03_mainTxt'); ?>
<?php endwhile; // end of the loop. ?>
</main>
<?php get_footer(); ?>