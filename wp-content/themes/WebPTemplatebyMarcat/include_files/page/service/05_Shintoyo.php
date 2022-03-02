<div class="ServiceCnt ServiceCnt04">
    <section class="wapper shopService">
        <h1 class="h1ShopService"><span class="h1ShopServiceSpan">新東洋興業株式会社運営</span></h1>
        <?php 
            $args = array('cat'=>7,'posts_per_page'=>6,'order'=>'DESC','orderby'=>'date');
            $query1 = new WP_Query( $args );
            if ( $query1->have_posts() ): 
        ?>
        <!--<article class="display_flex_stretch display_row shopInfo">
            <?php $i=1; while ( $query1->have_posts() ):$query1->the_post(); ?>
            <div class="display_flex_stretch shopInfoCnt">
                <a class="photoShopInfo" href="<?php echo scf::get('url'); ?>" target="_blank">
                    <?php $img = get_post_thumbsdata($post->ID); ?>
                    <img loading="lazy" src="<?php echo $img[0]; ?>" alt="<?php echo get_the_title($post->ID); ?>" width="<?php echo $img[1]; ?>" height="<?php echo $img[2]; ?>" />
                </a>
                <section class="secShopInfo">
                    <h3 class="h3SecShopInfo"><?php echo get_the_title($post->ID); ?></h3>
                    <p class="txtShopInfo"><?php echo scf::get('address'); ?></p>
                    
                    <div class="btnSecShopInfoWap">
                        <a class="btnSecShopInfo" href="<?php echo scf::get('url'); ?>" target="_blank">
                            <span class="arrowSecShopInfo">店舗詳細はこちら</span>
                        </a>
                    </div>
                </section>
            </div>
            <?php $i++; endwhile; wp_reset_postdata(); ?>
        </article>-->
        <?php endif; ?>
    </section>
</div>