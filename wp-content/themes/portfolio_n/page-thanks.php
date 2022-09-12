<?php get_header(); ?>
<div class="p-thanks">
  <div class="p-thanks__container l-container">
    <div class="p-thanks__read">
      <span>お問い合わせ</span>
      <span>ありがとうございます。</span>
    </div>

    <div class="p-thanks__area">
      <div class="p-thanks__flow p-form-flow">
        <span class="p-form-flow__item">内容入力</span>
        <span class="p-form-flow__item is-current">送信完了</span>
      </div>

      <div class="p-thanks__content">
        <div class="p-thanks__text">
          <p>お問い合わせの送信が完了しました。日曜日・祝日を除く3日以内にご連絡を致します。<br>
            確認メールが届いているかご確認をお願い致します。届いていない場合は、ご連絡先の記入が間違っている可能性があります。再度お問い合わせフォームより送信をお願い致します。
          </p>
        </div>
        <div class="p-thanks__button">
          <a href="<?php echo esc_url(home_url("/")); ?>" class="c-button-line">
            <span class="c-button-line__text">ホームへ</span>
            <span class="c-button-line__line"></span>
          </a>
        </div>
      </div>
    </div>

  </div>
</div>
<?php get_footer(); ?>