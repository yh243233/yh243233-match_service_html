<?php
$siteTitle = 'HOME';
require __DIR__ . '/../app/view/layout/head.php';
?>

<!-- 全体背景色 -->

<body class="background_color">

  <!-- ヘッダー -->
  <?php
  require __DIR__ . '/../app/view/layout/normalHeader.php';
  ?>

  <!-- ヒーローバナー -->
  <section class="hero">
    <div class="hero_phrase_wrap">
      <!-- 星アイコン -->
      <i class="fa-solid fa-star"></i>
      <span class="hero_phrase">シンプルで使いやすい新しいマッチング体験</span>
    </div>
    <div class="hero_main_text_wrap">
      <span class="hero_main_text_1">エンジニア案件マッチングを</span>
      <span class="hero_main_text_2">もっとシンプルに</span>
    </div>
    <div class="hero_sub_text">
      <div class="hero_sub_text_1">複雑な入力は不要。誰でも簡単に案件を投稿・応募できる</div>
      <div class="hero_sub_text_2">エンジニア向けマッチングプラットフォーム</div>
    </div>
    <div class="hero_button_wrap">
      <button class="hero_registration_button">無料で始める
        <span>→</span>
      </button>
      <button class="hero_learnmore_button">案件を見る</button>
    </div>
  </section>

  <!-- 紹介文 -->
  <section class="introduction">
    <div class="introduction_wrap">
      <!-- メイン文 -->
      <div class="introduction_main">
        <!-- 雷マーク -->
        <div class="introduction_main_bolt_box">
          <i class="fa-solid fa-bolt"></i>
        </div>
        <div class="introduction_main_text1">シンプルで使いやすい</div>
        <div class="introduction_main_text2">インターフェイス</div>
        <div class="introduction_main_logo">
          <!-- ローディングロゴ -->
          <i class="fa-solid fa-ellipsis"></i>
        </div>
      </div>
      <!-- サブ文 -->
      <div class="introduction_sub_wrap">
        <div class="introduction_sub1">
          <div class="introduction_sub_logo1">
            <!-- 星ロゴ -->
            <i class="fa-regular fa-star"></i>
          </div>
          <div class="introduction_sub_text1">簡単投稿</div>
        </div>
        <div class="introduction_sub2">
          <div class="introduction_sub_logo2">
            <!-- 雷ロゴ -->
            <i class="fa-solid fa-bolt-lightning"></i>
          </div>
          <div class="introduction_sub_text2">即レス対応</div>
        </div>
        <div class="introduction_sub3">
          <div class="introduction_sub_logo3">
            <!-- 盾ロゴ -->
            <i class="fa-solid fa-shield"></i>
          </div>
          <div class="introduction_sub_text3">安心安全</div>
        </div>
      </div>
    </div>
  </section>

  <!-- 特徴文 -->
  <section class="features">

    <div class="features_main_text">matchの特徴</div>

    <div class="features_main_text_wrap">
      <div class="features_sub_wrap">
        <div class="features_sub_wrap_1">
          <div class="features_sub_wrap_1-1">
            <icon>
              <!-- 雷ロゴ -->
              <div class="features_sub_bolt_box">
                <i class="fa-solid fa-cloud-bolt"></i>
              </div>
            </icon>
            <div class="features_sub_text_1-1">シンプルな投稿</div>
          </div>
          <div class="features_sub_text_1-2">複雑なオプションは一切なし。タイトル、金額、内</div>
          <div class="features_sub_text_1-3">容だけで簡単に案件を投稿できます。</div>
        </div>
      </div>

      <div class="features_sub_wrap_2">
        <div class="features_sub_wrap_2-1">
          <icon>
            <!-- チャットロゴ -->
            <div class="features_sub_fa-comment_box">
              <i class="fa-regular fa-comment"></i>
            </div>
          </icon>
          <div class="features_sub_text_2-1">スムーズなやり取り</div>
        </div>
        <div class="features_sub_text_2-3">パブリックメッセージとDMで、案件の詳細を気軽</div>
        <div class="features_sub_text_2-4">にやり取りできます。</div>
      </div>

      <div class="features_sub_wrap_3">
        <div class="features_sub_wrap_3-1">
          <!-- 盾ロゴ -->
          <div class="features_sub_fa-shield-halved">
            <i class="fa-solid fa-shield-halved"></i>
          </div>
          <div class="features_sub_text_3-1">安心の環境</div>
        </div>
        <div class="features_sub_text_3-3">会員制なので、安心して案件の投稿・応募ができます。</div>
      </div>
    </div>
  </section>
  </div>

  <!-- 特徴文その3 -->
  <section class="features3">
    <div class="features3_sub_wrap_3">
      <div class="features3_3-1">今すぐ始めよう</div>
      <div class="features3_3-2">無料でアカウント登録して、エンジニア案件を見つけましょう</div>
      <button class="features3_registration_button">
        <span>無料で始める →</span>
      </button>
    </div>
  </section>

  <?php
  require __DIR__ . '/../app/view/layout/footer.php';
  ?>

</body>

</html>