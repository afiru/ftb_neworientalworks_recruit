<?php if(is_home()): ?>
<div class="bg_fff footerContact">
    <div class="wapper fotterContactWap">
        <section class="ftContact">
            <h2 class="t_center h2FtContact">お気軽にお問い合わせください</h2>
            <div class="display_flex_center display_row ftContactFx">
                <a class="oswald telFtContactFx">TEL:072-623-1886</a>
                
                <a class="btnFtContact" href="<?php echo get_the_permalink(43); ?>">
                    <span class="arrowBtnFtContact">お問い合わせ</span>
                    <!--
                    ../img/footer/arrowBtnFtContact.png
                    -->
                </a>
            </div>
        </section>
    </div>
</div>
<?php endif; ?>
