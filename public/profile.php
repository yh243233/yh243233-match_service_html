<?php
$siteTitle = 'Profile';
require __DIR__ . '/../app/view/layout/head.php';
?>

<!-- 全体背景色 -->

<body class="background_color_profile">

  <!-- ヘッダー -->
  <?php
  require __DIR__ . '/../app/view/layout/profileHeader.php';
  ?>

  <div class="profile_main_wrap">
    <div class="profile_main">

      <!-- プロフィール上テキスト -->
      <div class="profile_edit_text">プロフィール編集</div>
      <div class="profile_icon_text">アイコン画像</div>

      <!-- アイコン画像編集箇所 -->
      <div class="profile_icon_image_wrap">
        <div class="profile_icon_main_wrap">
          <div class="profile_icon_main">
            大きいアイコン
            <div class="profile_icon_sub">
              <icon class="profile_icon_decoration">小さいアイコン</い>
            </div>
          </div>
        </div>
        <div class="profile_transfer_images">画像を転送</div>>
        <div>JPG、PNG形式（最大5MB）</div>>
      </div>

      <!-- 名前編集箇所 -->
      <div class="profile_name_edit_text">
        <div>名前<span>*</span></div>
        <input>
      </div>

      <!-- 名前編集箇所 -->
      <div class="profile_name_edit_text">
        <div>自己紹介文</div>
        <input>
      </div>

      <div class="profile_name_edit_text_sub">
        スキルや経験、興味のある分野などを記載してください
      </div>

      <div>
        <button class="profile_name_edit_cancel">キャンセル</button>
        <button class="profile_name_edit_save">保存する</button>
      </div>

    </div>
  </div>

</body>

</html>