<header class="pcHeader">
    <div class="wapper display_flex_center pcHeaderWap">
        <a class="buttonPcHeader" href="<?php echo home_url('/'); ?>">
            <img loading="lazy" src="<?php echo get_bloginfo('template_url'); ?>/img/logoHeaderPc.svg" alt="<?php bloginfo('name'); ?>" width="362" height="46.46" />
        </a>
        <?php 
            $header_menu_name = 'header_pc_nav_01';//要変更
            $header_menu_nav_class = 'pcHeaderNav';//要変更
            $header_menu_ul_class = 'display_flex_center pcHeaderUl';//要変更
            if( has_nav_menu( $header_menu_name ) ){ 
                wp_nav_menu ( array (
                    'menu' => $header_menu_name,'menu_id' => $header_menu_name,'theme_location' => $header_menu_name, 'depth' => 2,'fallback_cb'     => 'wp_page_menu',
                    'container' => 'nav','container_class'  =>$header_menu_nav_class,'menu_class' => $header_menu_ul_class
                ));
            }
        ?>
        <div class="buttonContactHeader">
            <a class="buttonContactHeaderLink" href="<?php echo home_url('/contact/'); ?>">
                <span class="arrowBottonPcHeader">お問い合わせ</span>
            </a>
        </div>
    </div>
</header>