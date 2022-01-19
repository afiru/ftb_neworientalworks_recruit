<div class="wapper contactWap">
    <figure class="formStep">
        <picture>
            <source media="(min-width: 768px)" srcset="<?php echo get_bloginfo('template_url'); ?>/img/formStep01Pc.svg"><!--PC画像-->
            <source media="(max-width: 768px)" srcset="<?php echo get_bloginfo('template_url'); ?>/img/formStep01Sp.svg"><!--SP画像-->
            <img loading="lazy" src="<?php echo get_bloginfo('template_url'); ?>/img/formStep01Pc.svg" alt="フォームステップ" width="345" height="88" />
        </picture>
    </figure>
    
    <section class="contactThanksSec">
        <p class="t_center txtContactThanksSec">
            メールを送信しました。お問い合わせいただき誠にありがとうございます。<br>
            お問い合わせいただいた内容を確認し、ご返信させていただきます。<br>
            恐れ入りますが今しばらくお待ちください。
        </p>
        <div class="btnContactThanksWap">
            <a href="[home_url]" class="btnContactThanks">
                <span class="arrowBtnContactThanks">HOMEへ戻る</span>
            </a>
        </div>
    </section>
    <div class="formCnt FormThanks">
        [mwform_formkey key="23"]
    </div>
</div>