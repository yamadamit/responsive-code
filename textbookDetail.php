<?php
$siteTitle = "教科書の詳細ページ";
require('head.php');
?>
<body>
  
  <?php
  require('header.php');
  ?>
  <!-- メインコンテンツ -->
  <main class="main page-1colum">
    
    <!-- メインカラム -->
    <section id="main">
      
      <div class="form-container form-container-detail">
        <div class="title">
          <span class="badge">政治学</span>
          <span class="textname">政治学 補訂版 (New Liberal Arts Selection)</span>
          <i class="fa fa-heart icn-favo" aria-hidden="true"></i>
        </div>
        
        <div class="text-img-container">
          <div class="img-main">
            <img src="images/01.png" alt="" id="js-switch-img-main">
          </div>
          
          <div class="img-sub">
            <img src="images/01.png" alt="画像1" class="js-switch-img-sub">
            <img src="images/04.png" alt="画像2" class="js-switch-img-sub">
            <img src="images/sample-img.png" alt="画像3" class="js-switch-img-sub">
          </div>
        </div>
        
        <div class="author-detail">
          <h1>基本情報</h1>
          <div>・著者名：久米 郁男、川出 良枝他</div>
          <div>・出版社：有斐閣</div>
          <div>・コンディション：ほぼ新品</div>
        </div>
        
        <div class="text-detail">
          <h1>内容</h1>
          <p>
            政治とは何か、政治学とは何か。政治を、「本人」「共通の目的」「代理人」という三つの要素に注目し、現在の日本を題材として整理・解説した教科書。主催者である国民(本人)が政府(代理人)を雇って自らの利益の実現(共通の目的)をはかるという観点に立ち、政治の課題から、政治理論、統治のしくみ、行政学・地方自治、国際政治、何がデモクラシーを支えるかまでを、体系的に解説する。政治学諸分野の知識や考え方、対象とする問題を、政治学全体の中に位置づけた。事実関係やデータなどをアップデイトし、補訂。
          </p>
        </div>
        
        <div class="text-buy">
          <div class="item-left">
            <a href="index.php">&lt;&lt; 教科書一覧に戻る</a>
          </div>
          <form action="msg.php">
            <div class="item-right">
              <input type="submit" class="btn btn-primary btn-cv" name="submit" value="買う！">
            </div>
          </form>
          <div class="item-right">
            <div class="price">¥3,740</div>
          </div>
        </div>
      </div>
      
    </section>
  </main>
  
  <?php
  require('footer.php');
  ?>