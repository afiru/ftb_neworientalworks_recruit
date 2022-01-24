<div class="bg_fff ovhidden indexRecruit">
    <div class="wapper po_re indexRecruitWap">
        <div class="display_flex_stretch display_row titleIndexRecruit">
            <h1 class="h1TitleIndexRecruit">
                <img loading="lazy" src="<?php echo get_bloginfo('template_url'); ?>/img/index/h1TitleIndexRecruit.svg" alt="リクルート" width="365.33" height="48.67" />
            </h1>
            <p class="cl_006FDB txtTitleIndexCompany">採用情報</p> 
        </div>
        <div class="po_re navIndexRecruit">            
            <div class="navIndexRecruitWap">
                <div class="bgIndexRecruit"></div>
                <ul class="display_flex_stretch ulIndexRecruit">
                    <li class="liIndexRecruit liIndexRecruit01">
                        <a class="btnIndexRecruit" href="<?php echo get_the_permalink(31); ?>#merit" target="">
                            <img class="nomal" loading="lazy" src="<?php echo get_bloginfo('template_url'); ?>/img/index/btnIndexRecruit01off.svg" alt="3つの魅力" width="216" height="216" />
                            <img class="hover" loading="lazy" src="<?php echo get_bloginfo('template_url'); ?>/img/index/btnIndexRecruit01on.svg" alt="3つの魅力" width="216" height="216" />
                        </a>
                    </li>
                    <li class="liIndexRecruit liIndexRecruit02">
                        <a class="btnIndexRecruit" href="<?php echo get_the_permalink(57); ?>" target="">
                            <img class="nomal" loading="lazy" src="<?php echo get_bloginfo('template_url'); ?>/img/index/btnIndexRecruit02off.svg" alt="スタッフインタビュー" width="216" height="216" />
                            <img class="hover" loading="lazy" src="<?php echo get_bloginfo('template_url'); ?>/img/index/btnIndexRecruit02on.svg" alt="スタッフインタビュー" width="216" height="216" />
                        </a>
                    </li>
                    <li class="liIndexRecruit liIndexRecruit03">
                        <a class="btnIndexRecruit" href="<?php echo get_the_permalink(35); ?>" target="">
                            <img class="nomal" loading="lazy" src="<?php echo get_bloginfo('template_url'); ?>/img/index/btnIndexRecruit03off.svg" alt="募集要項" width="216" height="216" />
                            <img class="hover" loading="lazy" src="<?php echo get_bloginfo('template_url'); ?>/img/index/btnIndexRecruit03on.svg" alt="募集要項" width="216" height="216" />
                        </a>
                    </li>
                </ul>
            </div>

            <div class="btnMoreIndexRecruitWap">
                <a class="btnMoreIndexRecruit" href="<?php echo get_the_permalink(31); ?>">
                    <span class="arrowBtnMoreIndexRecruit">詳しくはこちら</span>
                    <!--
                    Bg:../img/index/arrowBtnMoreIndexRecruit.png
                    -->
                </a>
            </div>
        </div>
        
        <div class="bgPhotoIndexRecruit">
            <picture>
                <source media="(min-width: 768px)" srcset="<?php echo get_bloginfo('template_url'); ?>/img/index/bgPhotoIndexRecruitPc.png"><!--PC画像-->
                <source media="(max-width: 768px)" srcset="<?php echo get_bloginfo('template_url'); ?>/img/index/bgPhotoIndexRecruitSp.png"><!--SP画像-->
                <img loading="lazy" src="<?php echo get_bloginfo('template_url'); ?>/img/index/bgPhotoIndexRecruitPc.png" alt="" width="840" height="547" />
            </picture>
        </div>
    </div>
</div>