<?php
$siteTitle = "パスワード再発行";
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
          <h2 class="title">パスワード再発行</h2>
          <p>ご指定のメールアドレス宛に<br>
          パスワード再発行用のURLと認証キーをお送りします。</p>          
          <div class="area-msg"></div><br>
          
          <label for="">
            Email
            <input type="text" name="email">
          </label>
          <div class="area-msg"></div><br>
          
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