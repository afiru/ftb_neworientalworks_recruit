<div class="bg_fff indexNews">
    <div class="wapper indexNewsWap">
        <div class="display_flex_center display_row indexNewsFx">
            <h1 class="h1IndexNewsFx">
                <img loading="lazy" src="<?php echo get_bloginfo('template_url'); ?>/img/index/h1IndexNewsFx.svg" alt="採用情報" width="238.23" height="48.67" />
            </h1>
            <p class="cl_006FDB txtTitleIndexCompany">お知らせ</p>
        </div>
        
        <?php 
            $args = array('cat'=>1,'posts_per_page'=>5,'order'=>'DESC','orderby'=>'date');
            $query1 = new WP_Query( $args );
            if ( $query1->have_posts() ): 
        ?>
        <article class="IndexNewsArchives">
            <?php $i=1; while ( $query1->have_posts() ):$query1->the_post(); ?>
            <a class="display_flex_center display_row IndexNewsArchive">
                <time class="dateIndexNewsArchive"><?php echo get_the_date('Y.m.d',$post->ID); ?></time>
                <?php getNewFlug(get_the_date('Y-m-d',$post->ID)); ?>
                <h3 class="h3IndexNewsArchive"><?php echo stringOverFlow(get_the_title($post->ID),255); ?></h3>
            </a>
            <?php $i++; endwhile; wp_reset_postdata(); ?>
        </article>
        
        <div class="btnMoreIndexNewsWap">
            <a class="btnMoreIndexNews" href="<?php echo get_category_link(1); ?>">
                <span class="arrowBtnMoreIndexNews">もっと見る</span>
            </a>
        </div>
        <?php endif; ?>
    </div>
</div>