<span class="p-country-name" style="display:none;">Japan</span>

<div class="l-form__doboz">

  <div class="l-form__line">
    <div class="l-form__lineLbx">
      <div class="l-form__ttl">お名前</div>
      <div class="l-form__req">必須</div>
    </div>
    <div class="l-form__lineRbx">
      <div class="l-form__input">[text* user-name placeholder "お名前をご入力ください"]</div>
    </div>
  </div>

  <div class="l-form__line">
    <div class="l-form__lineLbx">
      <div class="l-form__ttl">フリガナ</div>
      <div class="l-form__req">必須</div>
    </div>
    <div class="l-form__lineRbx">
      <div class="l-form__input">[text* user-ruby placeholder "フリガナをご入力ください"]</div>
    </div>
  </div>

  <div class="l-form__line">
    <div class="l-form__lineLbx">
      <div class="l-form__ttl">ご住所
      </div>
    </div>
    <div class="l-form__lineRbx">
      <div class="l-form__lineRbxAddress">
        <div class="l-form__lineRbxAddressItem">
          <div class="l-form__input">[text user-postcode class:p-postal-code placeholder "〒 郵便番号をご入力ください"]</div>
        </div>
      </div>
      <div class="l-form__lineRbxAddress">
        　　　　　　　　　　　　　<div class="l-form__lineRbxAddress">
          <div class="l-form__input">[text user-address class:p-region class:p-locality class:p-street-address class:p-extended-address placeholder "ご住所をご入力ください"]</div>
        </div>
      </div>
    </div>
  </div>

  <div class="l-form__line">
    <div class="l-form__lineLbx">
      <div class="l-form__ttl">お電話

      </div>
    </div>
    <div class="l-form__lineRbx">
      <div class="l-form__input">[tel user-tel placeholder "お電話番号をご入力ください"]</div>
    </div>
  </div>

  <div class="l-form__line">
    <div class="l-form__lineLbx">
      <div class="l-form__ttl">メール</div>
      <div class="l-form__req">必須</div>
    </div>
    <div class="l-form__lineRbx">
      <div class="l-form__input">[email* user-email placeholder "メールアドレスをご入力ください"]</div>
    </div>
  </div>


  <div class="l-form__line l-form__line--top">
    <div class="l-form__lineLbx">
      <div class="l-form__ttl">お問合せ内容</div>
      <div class="l-form__req">必須</div>
    </div>
    <div class="l-form__lineRbx">
      <div class="l-form__textarea">[textarea* user-message placeholder "お問合せ内容をご入力ください"]</div>
    </div>
  </div>

  <div class="l-form__privacy">
    <div class="l-form__privacyCheckbox">[acceptance user-acceptance]個人情報の取り扱いについて、<br class="m-hide--pc"><span class="l-form__privacyUnderber"><a href="../privacy" target="_blank" rel="noopener noreferrer" class="l-form__privacyLinkAnchor">PRIVACY POLICY</a></span>に同意の上送信します[/acceptance]</div>
  </div>

  <div class="l-form__submit">
    <div class="l-form__submitTag">[submit "送信する"]</div>
  </div>

</div>