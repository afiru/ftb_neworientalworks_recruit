<?php get_header(); ?>
<?php get_template_part('include_files/category/news/01_Fv'); ?>
<aside class="wapper breadCrumbList"><?php if(function_exists('bcn_display')) { bcn_display(); }?></aside>
<main class="wapper catNewsWap">
    <h2 class="h2CatNewsWap">お知らせ</h2>
    
    <article class="archivesNews">
        <?php if ( have_posts() ) while ( have_posts() ) : the_post();  ?>
            <a href="<?php echo get_the_permalink($post->ID); ?>" class="display_flex_center display_row IndexNewsArchive IndexNewsArchivePage">
                <time class="dateIndexNewsArchive"><?php echo get_the_date('Y.m.d',$post->ID); ?></time>
                <?php getNewFlug(get_the_date('Y-m-d',$post->ID)); ?>
                <h3 class="h3IndexNewsArchive"><?php echo stringOverFlow(get_the_title($post->ID),255); ?></h3>
            </a>
        <?php endwhile; // end of the loop. ?>
    </article>

    
    <aside class="pagenateWap"><!--ma_115_0_90_0 sp_ma_85_0_70_0-->
        <div class="pagenate">
            <?php wp_pagenavi(); ?><!--fs_15_15-->
        </div>        
    </aside>
</main>
<?php get_footer(); ?>
