<?php
$siteTitle = "マイページ";
require('head.php');
?>
<body>
  <style>
    #main{
      border: none !important;
    }
  </style>
  
  <?php
  require('header.php');
  ?>

  <!-- メインコンテンツ -->
  <main class="main page-2colum page-logined">
    <h1 class="page-title">マイページ</h1>
    
    <!-- メインカラム -->
    <section id="main">
      <section class="list panel-list">
        <h2 class="title" style="padding:0 0 0 10px;">お気に入り一覧</h2>
        <a href="textbookDetail.php" class="panel">
          <div class="panel-head">
            <img src="images/01.png" alt="">
          </div>
          <div class="panel-body">
            <p class="panel-title">政治学 補訂版 (New Liberal Arts Selection)<span class="price">¥3,740</span></p>
          </div>
        </a>
        <a href="textbookDetail.php" class="panel">
          <div class="panel-head">
            <img src="images/02.png" alt="">
          </div>
          <div class="panel-body">
            <p class="panel-title">図解 はじめて学ぶ みんなの政治<span class="price">¥1,925</span></p>
          </div>
        </a>
        <a href="textbookDetail.php" class="panel">
          <div class="panel-head">
            <img src="images/03.png" alt="">
          </div>
          <div class="panel-body">
            <p class="panel-title">現代中国政治［第3版］―グローバル・パワーの肖像―<span class="price">¥3,080</span></p>
          </div>
        </a>
        <a href="textbookDetail.php" class="panel">
          <div class="panel-head">
            <img src="images/04.png" alt="">
          </div>
          <div class="panel-body">
            <p class="panel-title">国際政治学 (New Liberal Arts Selection) (日本語) 単行本（ソフトカバー） <span class="price">¥3,520</span></p>
          </div>
        </a>
        <a href="textbookDetail.php" class="panel">
          <div class="panel-head">
            <img src="images/05.png" alt="">
          </div>
          <div class="panel-body">
            <p class="panel-title">国際政治 - 恐怖と希望 (中公新書) (日本語) 新書<span class="price">¥836</span></p>
          </div>
        </a>
        <a href="textbookDetail.php" class="panel">
          <div class="panel-head">
            <img src="images/06.png" alt="">
          </div>
          <div class="panel-body">
            <p class="panel-title">ヨーロッパ政治史 (放送大学教材)<span class="price">¥3,190</span></p>
          </div>
        </a>
        
      </section>
      
      <section class="list list-table">
        <h2 class="title" style="padding:0 0 0 10px;">連絡掲示板一覧</h2>
        <table class="table">
          <thead>
            <tr>
              <th>最新送信日時</th>
              <th>送信メッセージ</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>2020.04.13 22:31:25</td>
              <td><a href="">ああああああああああああああああああああ...</a></td>
            </tr>
            <tr>
              <td>2020.04.13 22:31:25</td>
              <td><a href="">ああああああああああああああああああああ...</a></td>
            </tr>
            <tr>
              <td>2020.04.13 22:31:25</td>
              <td><a href="">ああああああああああああああああああああ...</a></td>
            </tr>
            <tr>
              <td>2020.04.13 22:31:25</td>
              <td><a href="">ああああああああああああああああああああ...</a></td>
            </tr>
            <tr>
              <td>2020.04.13 22:31:25</td>
              <td><a href="">ああああああああああああああああああああ...</a></td>
            </tr>
          </tbody>
        </table>
      </section>
      
      <section class="list panel-list">
        <h2 class="title" style="padding:0 0 0 10px;">登録商品一覧</h2>
        <a href="textbookDetail.php" class="panel">
          <div class="panel-head">
            <img src="images/07.png" alt="">
          </div>
          <div class="panel-body">
            <p class="panel-title">ロールズ政治哲学史講義 I (岩波現代文庫) (日本語) 文庫<span class="price">¥2,068</span></p>
          </div>
        </a>
        <a href="textbookDetail.php" class="panel">
          <div class="panel-head">
            <img src="images/08.png" alt="">
          </div>
          <div class="panel-body">
            <p class="panel-title">カントの政治哲学入門: 政治における理念とは何か<span class="price">¥2,200</span></p>
          </div>
        </a>
        <a href="textbookDetail.php" class="panel">
          <div class="panel-head">
            <img src="images/09.png" alt="">
          </div>
          <div class="panel-body">
            <p class="panel-title">はじめての政治哲学――「正しさ」をめぐる23の問い (講談社現代新書) (日本語) 新書<span class="price">¥27</span></p>
          </div>
        </a>
      </section>
      
    </section>
    
    <?php
    require('sidebar.php');
    ?>    
    
  </main>
  
  <?php
  require('footer.php');
  ?>