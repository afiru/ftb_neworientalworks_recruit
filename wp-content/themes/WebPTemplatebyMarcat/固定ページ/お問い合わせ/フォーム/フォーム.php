<div class="mainForm">
    <table class="tableMainForm">
        <tr>
            <th class="thMainForm">
                <div class="display_flex_stretch thFx">
                    <span class="cl_FF3D3B hissuThFx">必須</span>
                    <span class="titleThFx">お名前(会社名)</span>
                </div>
            </th>
            <td class="tdMainForm">[mwform_text name="お名前(会社名)" id="name" class="inputW100" size="60" maxlength="255" placeholder="山田太郎"]</td>
        </tr>
        <tr>
            <th class="thMainForm">
                <div class="display_flex_stretch thFx">
                    <span class="cl_FF3D3B hissuThFx">必須</span>
                    <span class="titleThFx">フリガナ</span>
                </div>
            </th>
            <td class="tdMainForm">[mwform_text name="フリガナ" id="kana" class="inputW100" size="60" maxlength="255" placeholder="ヤマダタロウ"]</td>
        </tr>
        

        <tr>
            <th class="thMainForm">
                <div class="display_flex_stretch thFx">
                    <span class="cl_FF3D3B hissuThFx">必須</span>
                    <span class="titleThFx">メールアドレス</span>
                </div>
            </th>
            <td class="tdMainForm">[mwform_email name="メールアドレス" id="mail" class="inputW100" size="60" maxlength="255" placeholder="neworientalworks@ne.jp"]</td>
        </tr>
        
        <tr>
            <th class="thMainForm">
                <div class="display_flex_stretch thFx">
                    <span class="cl_FF3D3B hissuThFx">必須</span>
                    <span class="titleThFx">メールアドレス<br>（確認用）</span>
                </div>
            </th>
            <td class="tdMainForm">[mwform_email name="メールアドレス（確認用）" id="re_mail" class="inputW100" size="60" maxlength="255" placeholder="neworientalworks@ne.jp"]</td>
        </tr>

        <tr>
            <th class="thMainForm">
                <div class="display_flex_stretch thFx">
                    <span class="cl_FF3D3B hissuThFx">必須</span>
                    <span class="titleThFx">お電話番号</span>
                </div>
            </th>
            <td class="tdMainForm">[mwform_text name="お電話番号" id="tel" class="inputW100" size="60" maxlength="255" placeholder="090-1234-5678"]</td>
        </tr>
        
        <tr>
            <th class="thMainForm">
                <div class="display_flex_stretch thFx">
                    <span class="cl_FF3D3B hissuThFx">任意</span>
                    <span class="titleThFx">郵便番号</span>
                </div>
            </th>
            <td class="tdMainForm">
                <div class="postNumMainForm">
                    <div class="inputNumMainForm">[mwform_text name="郵便番号1" id="num1" class="inputW100" size="60" maxlength="255" placeholder="567"]</div>
                    <div class="hyphenNumMainForm">-</div>
                    <div class="inputNumMainForm">[mwform_text name="郵便番号2" id="num2" class="inputW100" size="60" maxlength="255" placeholder="0828"]</div>
                </div>
            </td>
        </tr>
        <tr>
            <th class="thMainForm">
                <div class="display_flex_stretch thFx">
                    <span class="cl_AAAAAA hissuThFx">任意</span>
                    <span class="titleThFx">住所</span>
                </div>
            </th>
            <td class="tdMainForm">[mwform_text name="住所" id="address" class="inputW100" size="60" maxlength="255" placeholder="大阪府茨木市舟木町12-26"]</td>
        </tr>
        <tr>
            <th class="thMainForm">
                <div class="display_flex_stretch thFx">
                    <span class="cl_FF3D3B hissuThFx">必須</span>
                    <span class="titleThFx">ご要望</span>
                </div>
            </th>
            <td class="tdMainForm">[mwform_textarea name="ご要望" id="contact" class="inputTxtW100" maxlength="2000" cols="50" rows="5"]</td>
        </tr>
    </table>
</div>

<div class="buttonConfirmWap ">
    [mwform_bconfirm class="buttonConfirm" value="confirm"]入力内容の確認[/mwform_bconfirm]
</div>

<div class="buttonThanksBack">
    <div class="display_flex_center display_row buttonThanksBackFx">
        [mwform_bback class="buttonBack" value="back"]入力画面に戻る[/mwform_bback]
        [mwform_bsubmit name="send" class="buttonThanks" value="send"]送信する[/mwform_bsubmit]
    </div>
</div>
