<?php
    /**
     * Template Name: 事業内容
     * Template Post Type: page
     */
?>
<?php get_header(); ?>
<?php remove_filter ('the_content', 'wpautop'); ?>
<?php get_template_part('include_files/page/service/01_Fv'); ?>
<aside class="wapper breadCrumbList"><?php if(function_exists('bcn_display')) { bcn_display(); }?></aside>
<?php if ( have_posts() ) while ( have_posts() ) : the_post();  ?>
<main class="<?php echo $post->post_name; ?>Main">
        <?php get_template_part('include_files/page/company/02_message'); ?>
        <?php get_template_part('include_files/page/company/03_company'); ?>
        <?php get_template_part('include_files/page/company/04_group'); ?>
        <?php get_template_part('include_files/page/company/05_social'); ?>
        <?php get_template_part('include_files/page/company/06_outline'); ?>
        <?php get_template_part('include_files/page/company/07_btmNav'); ?>
<?php endwhile; // end of the loop. ?>
</main>
<?php get_footer(); ?>