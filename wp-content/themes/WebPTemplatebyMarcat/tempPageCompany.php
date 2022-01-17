<?php
    /**
     * Template Name: 私たちについて
     * Template Post Type: page
     */
?>
<?php get_header(); ?>
<?php remove_filter ('the_content', 'wpautop'); ?>
<?php get_template_part('include_files/page/company/01_Fv'); ?>
<aside class="wapper breadCrumbList"><?php if(function_exists('bcn_display')) { bcn_display(); }?></aside>
<?php if ( have_posts() ) while ( have_posts() ) : the_post();  ?>
<main class="<?php echo $post->post_name; ?>Main">
    <?php the_content(); ?>
    <?php //ここから下は一旦ローカル作成時にはこっちで作業して、テストアップ時にContentsに入れていきましょう ?>
        <?php get_template_part('include_files/page/company/02_message'); ?>
        <?php get_template_part('include_files/page/company/03_company'); ?>
        <?php get_template_part('include_files/page/company/04_group'); ?>
        <?php get_template_part('include_files/page/company/05_social'); ?>
        <?php get_template_part('include_files/page/company/06_outline'); ?>
    <?php get_template_part('include_files/page/company/07_btmNav'); ?>
    <?php //ここから上は一旦ローカル作成時にはこっちで作業して、テストアップ時にContentsに入れていきましょう ?>
<?php endwhile; // end of the loop. ?>
</main>
<?php get_footer(); ?>