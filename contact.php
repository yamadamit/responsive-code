<?php
$siteTitle = "お問い合わせ";
require('head.php');
?>
<body>  
  <?php
  require('header.php');
  ?>
  
  <!-- ここからメインコンテンツ -->
  <!-- 最初にdivタグ（webサで使用）とmainタグ（レスポで使用）どちらを使うか考える -->
  <main class="main page-1colum">
    
    <!-- メインカラム -->
    <section id="main">
      <div class="form-container">
        <form action="" class="form">
          <h2 class="title">お問い合わせ</h2>
          <div class="area-msg"></div><br>
          
          <label for="">
            お名前
            <input type="text" name="username">
          </label>
          <div class="area-msg"></div>
          
          <label for="">
            メールアドレス <span class="label-require">必須</span>
            <input type="text" name="email">
          </label>
          <div class="area-msg"></div>
          
          <label for="">
            件名
            <input type="text" name="subject">
          </label>
          <div class="area-msg"></div>
          
          <label for="">
            内容 <span class="label-require">必須</span>
            <textarea name="" id="js-count" cols="10" rows="40" style="height:200px;"></textarea>
          </label>
          <div class="counter-text"><span id="js-count-view">0</span>/255文字</div>
          <div class="area-msg"></div>
          
          <div class="btn-container">
            <input type="submit" class="btn btn-mid btn-cv" value="送信する">
          </div>
          
        </form>
      </div>
    </section>
  </main>
  
  <?php
  require('footer.php');
  ?>