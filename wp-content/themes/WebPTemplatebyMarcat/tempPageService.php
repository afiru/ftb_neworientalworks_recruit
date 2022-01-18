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
    <?php get_template_part('include_files/page/service/02_newOriental'); ?>
    <?php get_template_part('include_files/page/service/03_Opasu'); ?>
    <?php get_template_part('include_files/page/service/04_Amyuz'); ?>
    <?php get_template_part('include_files/page/service/05_Shintoyo'); ?>
    <?php get_template_part('include_files/page/service/06_ziOrient'); ?>
    <?php get_template_part('include_files/page/service/07_restaurant'); ?>
    <?php get_template_part('include_files/page/service/08_realestate'); ?>
<?php endwhile; // end of the loop. ?>
</main>
<?php get_footer(); ?>