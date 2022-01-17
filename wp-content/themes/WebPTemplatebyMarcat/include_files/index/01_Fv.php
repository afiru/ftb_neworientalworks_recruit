<div class="ovhidden indexFv">
    <div class="wapper po_re indexFvWap">        
        <div class="indexFvSlider">
            <?php 
                $args = array(
                    'post_type' => 'slider',
                    'posts_per_page'=>10,
                    'order'=>'ASC',
                    'orderby'=>'menu_order'
                );
            ?>
            <?php $query1 = new WP_Query( $args ); ?>
            <?php if ( $query1->have_posts() ): ?>
            <div class="indexFvSliderSet"><!--これでポジションとかを設定してしまおう-->                
                <ul class="ulIndexFv jsUlIndexFv">
                    <?php $i=1; while ( $query1->have_posts() ):$query1->the_post(); ?>
                    <li class="liIndexFv liIndexFv<?php echo $i; ?>"></li>
                        <?php
                            $pc_img = get_scf_img_url('imgSliderPc');
                            $sp_img = get_scf_img_url('imgSliderSp');
                        ?>
                    <style>
                        .liIndexSlide<?php echo $i; ?> {
                            background: url(<?php echo $pc_img[0]; ?>) no-repeat top center;
                            background-size: auto 100%;
                        }
                        @media screen and (max-width: 750px) {
                            .liIndexSlide<?php echo $i; ?> {
                                background: url(<?php echo $sp_img[0]; ?>) no-repeat top center;
                                background-size: auto 100%;
                            }
                        }
                    </style>
                    <?php $i++; endwhile; wp_reset_postdata(); ?>
                </ul>
            </div>
            <?php endif; ?>
            
            <figure class="logoIndexFv">
                <picture>
                    <source media="(min-width: 768px)" srcset="<?php echo get_bloginfo('template_url'); ?>/img/index/logoIndexFvPc.svg"><!--PC画像-->
                    <source media="(max-width: 768px)" srcset="<?php echo get_bloginfo('template_url'); ?>/img/index/logoIndexFvSp.svg"><!--SP画像-->
                    <img loading="lazy" src="<?php echo get_bloginfo('template_url'); ?>/img/index/logoIndexFvPc.svg" alt="つながりを大切に新しい未来へ" width="622" height="136" />
                </picture>
            </figure>
        </div>
        
        <nav class="navIndexFv">
            <ul class="ulIndexFv">
                <li class="liIndexFvList liIndexFvList01">
                    <a class="btnIndexFv" href="<?php echo get_the_permalink(2); ?>" target="">
                        <img loading="lazy" src="<?php echo get_bloginfo('template_url'); ?>/img/index/btnIndexFv01.png" alt="私達について" width="187" height="187" />
                        <section class="txtIndexFvList">
                            <h2 class="t_center h2TxtIndexFvList">私たちについて</h2>
                            <p class="oswald t_center pTxtIndexFvList">COMPANY</p>
                        </section>
                    </a>
                </li>

                <li class="liIndexFvList liIndexFvList02">
                    <a class="btnIndexFv" href="<?php echo get_the_permalink(31); ?>" target="">
                        <img loading="lazy" src="<?php echo get_bloginfo('template_url'); ?>/img/index/btnIndexFv02.png" alt="採用情報" width="187" height="187" />
                        <section class="txtIndexFvList">
                            <h2 class="t_center h2TxtIndexFvList">採用情報</h2>
                            <p class="oswald t_center pTxtIndexFvList">RECRUIT</p>
                        </section>
                    </a>
                </li>

           

                <li class="liIndexFvList liIndexFvList02">
                    <a class="btnIndexFv" href="http://www.tsukemenichimori.com/" target="_blank">
                        <img loading="lazy" src="<?php echo get_bloginfo('template_url'); ?>/img/index/btnIndexFv03.png" alt="つけ麺いちもり" width="187" height="187" />
                        <section class="txtIndexFvList">
                            <h2 class="t_center h2TxtIndexFvList">つけ麺<br>いちもり</h2>
                            <p class="oswald t_center pTxtIndexFvList">ICHIMORI</p>
                        </section>
                    </a>
                </li>

                <li class="liIndexFvList liIndexFvList02">
                    <a class="btnIndexFv" href="<?php echo get_the_permalink(30); ?>" target="">
                        <img loading="lazy" src="<?php echo get_bloginfo('template_url'); ?>/img/index/btnIndexFv04.png" alt="事業内容" width="187" height="187" />
                        <section class="txtIndexFvList">
                            <h2 class="t_center h2TxtIndexFvList">事業内容</h2>
                            <p class="oswald t_center pTxtIndexFvList">SERVICE</p>
                        </section>
                    </a>
                </li>
            </ul>
        </nav>

        <div class="scrollIndexFv">
            <p class="oswald t_center txtScrollIndexFv">SCROLL</p>
            <div class="borderBoxIndexFv">
                <span class="brBoxIndexFv"></span>
            </div>
        </div>
    </div>
</div>