<?php
$siteTitle = 'LOGIN';
require __DIR__ . '/../app/view/layout/head.php';
?>

<body class="background_login">
  <div class="background_bule_fileter"></div>
  <div class="login_main_wrap">
    <div class="login_top_back">
      <a href="/">
        ←トップに戻る
      </a>
    </div>
    <div class="login_frame">
      <div class="login_element_1">
        <icon class="login_element_logo">M</icon>
        <span class="login_element_title">match</span>
      </div>
      <div class="login_element_text1">新規登録</div>
      <div class="login_element_text2">アカウントを作成してください</div>

      <div class="login_element_login">
        <div>メールアドレス</div>
        <!-- メールロゴ -->
        <i class="fa-regular fa-envelope"></i>
        <input class="login_input2" placeholder="example@email.com">
      </div>

      <div>
        <div>パスワード</div>
        <!-- 鍵アカウント -->
        <i class="fa-solid fa-lock 1"></i>
        <input class="login_input3" placeholder="••••••••">
      </div>

      <button class="login_create_account">
        アカウント作成
      </button>

      <div class="login_login_account">
        アカウントをお持ちでない方は
        <a href="/signup.php" class="login_signup_text">新規登録</a>
      </div>
    </div>
  </div>
  <div class="background_purple_fileter"></div>
</body>