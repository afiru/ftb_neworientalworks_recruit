<?php get_template_part('include_files/category/news/01_Fv'); ?>
<aside class="wapper breadCrumbList"><?php if(function_exists('bcn_display')) { bcn_display(); }?></aside>
<main class="wapper catNewsWap">
    <h2 class="h2CatNewsWap">お知らせ</h2>
    
    <article class="singleNews">
        <?php if ( have_posts() ) while ( have_posts() ) : the_post();  ?>
        <div class="newIconTime">
            <?php getNewFlug(get_the_date('Y-m-d',$post->ID)); ?>
            <time class="timeSingleNews"><?php echo get_the_date('Y.m.d',$post->ID); ?></time>
        </div>
        <section class="cntSingleNews">
            <h2 class="h2SingleNews"><?php echo get_the_title($post->ID); ?></h2>
            
            <section class="singleNewsLxc">
                <?php the_content(); ?>
            </section>
            
            <div class="btnSingleNewsWap">
                <a class="btnSingleNews" href="<?php echo get_category_link(1); ?>">
                    <span class="arrowBtnSingleNews">お知らせ一覧にもどる</span>
                </a>
            </div>
        </section>
        <?php endwhile; // end of the loop. ?>
    </article>

</main>