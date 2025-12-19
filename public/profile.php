<?php
$siteTitle = 'HOME';
require __DIR__ . '/../app/view/layout/head.php';
?>

<!-- 全体背景色 -->

<body class="background_color">
  <!-- ヘッダー -->
  <header class="header">
    <div class="header_main_wrap">
      <div class="header_right_wrap">
        <icon class="header_logo">M</icon>
        <span class="header_title">match</span>
      </div>
      <div class="header_left_wrap">
        <button class="/?header_login">
          <a href="/login.php">ログイン</a>
        </button>
        <button class=" header_registration" href="/signin">
          <a href="/signup.php">
            無料で始める
          </a>
        </button>
      </div>
    </div>
  </header>

</body>

</html>