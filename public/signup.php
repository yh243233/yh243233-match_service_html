<?php
$siteTitle = 'SIGNIN';
require __DIR__ . '/../app/view/layout/head.php';
?>

<body class="background_signup">
  <div class="background_bule_fileter"></div>
  <div class="signup_main_wrap">
    <div class="signup_top_back">
      <a href="/">
        ←トップに戻る
      </a>
    </div>
    <div class="signup_frame">
      <div class="signup_element_1">
        <icon class="signup_element_logo">M</icon>
        <span class="signup_element_title">match</span>
      </div>
      <div class="signup_element_text1">新規登録</div>
      <div class="signup_element_text2">アカウントを作成してください</div>
      <div>
        <div>名前</div>
        <!-- 人ロゴ -->
        <i class="fa-regular fa-user"></i>
        <input class="signup_input1" placeholder="山田太郎">
      </div>

      <div>
        <div>メールアドレス</div>
        <!-- メールロゴ -->
        <i class="fa-regular fa-envelope"></i>
        <input class="signup_input2" placeholder="example@email.com">
      </div>

      <div>
        <div>パスワード</div>
        <!-- 鍵アカウント -->
        <i class="fa-solid fa-lock 1"></i>
        <input class="signup_input3" placeholder="••••••••">
      </div>

      <div>
        <div>パスワード（確認）</div>
        <!-- 鍵アカウント -->
        <i class="fa-solid fa-lock 2"></i>
        <input class="signup_input4" placeholder="••••••••">
      </div>

      <button class="signup_create_account">
        アカウント作成
      </button>

      <div class="signup_login_account">
        すでにアカウントをお持ちの方は
        <a href="/login.php" class="signup_text">ログイン</a>
      </div>
    </div>
  </div>
  <div class="background_purple_fileter"></div>
</body>