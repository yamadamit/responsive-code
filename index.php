<?php
$siteTitle = "HOME";
require('head.php');
?>
<body>
  
  <?php
  require('header.php');
  ?>
  
  <div class="hero">
    <img src="images/hero.png" alt="">
  </div>

  <!-- メインコンテンツ -->
  <main class="main page-2colum main-index">
    
    <!-- サイドバー -->
    <section id="sidebar" class="sidebar-index">
      <form action="">
       
        <h1 class="title">カテゴリー</h1>
        <div class="selectbox">
          <span class="icn_select"></span>
          <select name="" id="">
            <option value="0">選択してください</option>
            <option value="1">日本政治</option>
            <option value="2">アメリカ政治</option>
            <option value="3">中国政治</option>            
          </select>
        </div>
        
        <h1 class="title">表示順（金額）</h1>
        <div class="selectbox">
          <span class="icn_select">
            <select name="sort" id="">
              <option value="0">選択してください</option>
              <option value="1">金額が安い順</option>
              <option value="2">金額が高い順</option>
            </select>
          </span>
        </div>
        
        <input type="submit" value="検索" class="btn-side">
        
      </form>
    </section>        
    
    <!-- メインカラム -->
    <section id="main">
      
       <!-- 検索結果 -->
       <div class="search-title">
        <div class="search-title-left">
          <span class="total-num">99</span>件の商品が見つかりました。
        </div>
        <div class="search-title-right">
          <span class="num">1</span> - <span class="num">15</span>件 / <span class="num">99</span>件中
        </div>
      </div>
      
      <div class="panel-list">
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
      </div>
      
      <div class="pagination">
        <ul class="pagination-list">
          <li class="list-item"><a href="">&lt;</a></li>
          <li class="list-item"><a href="">1</a></li>
          <li class="list-item"><a href="">2</a></li>
          <li class="list-item active"><a href="">3</a></li>
          <li class="list-item"><a href="">4</a></li>
          <li class="list-item"><a href="">5</a></li>
          <li class="list-item"><a href="">&gt;</a></li>
        </ul>
      </div>
      
      <div id="page_top"><a href=""></a></div>
      
    </section>
  </main>
  
  <?php
  require('footer.php');
  ?>