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
    <div class="profile_main_mypage_back">←マイページに戻る</div>
    <div class="profile_main">

      <!-- プロフィール上テキスト -->
      <div class="profile_main_edit_text">プロフィール編集</div>
      <div class="profile_main_icon_text">アイコン画像</div>

      <!-- アイコン画像編集箇所 -->
      <div class="profile_main_icon_image_wrap">
        <div class="profile_main_icon_main_wrap">

          <div class="profile_main_icon_main">
            <!-- ユーザーアイコン -->
            <i class="fa-regular fa-user profile"></i>
          </div>

          <!-- カメラアイコン -->
          <div class="profile_main_icon_sub">
            <div class="profile_main_icon_decoration">
              <i class="fa-solid fa-camera profile"></i>
            </div>
          </div>

        </div>
        <!-- 画像説明文 -->
        <div class="profile_main_transfer_jpg_png_text_wrap">
          <div class="profile_main_transfer_images">画像を変更</div>
          <div class="profile_main_jpg_png_text">JPG、PNG形式（最大5MB）</div>
        </div>

      </div>

      次回名前欄の編集から

      <!-- 名前編集箇所 -->
      <div class="profile_main_name_edit_text">
        <div>名前<span>*</span></div>
        <input>
      </div>

      <!-- 名前編集箇所 -->
      <div class="profile_main_name_edit_text">
        <div>自己紹介文</div>
        <input>
      </div>

      <div class="profile_main_name_edit_text_sub">
        スキルや経験、興味のある分野などを記載してください
      </div>

      <div>
        <button class="profile_main_name_edit_cancel">キャンセル</button>
        <button class="profile_main_name_edit_save">保存する</button>
      </div>

    </div>
  </div>

</body>

</html>