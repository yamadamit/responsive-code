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
          <p style="text-align:center;">ご指定のメールアドレスにお送りした<br>
          【パスワード再発行メール】内にある<br>
          「認証キー」をご入力下さい。
          </p>          
          <div class="area-msg"></div><br><br>
          
          <label for="">
            認証キー
            <input type="text" name="token">
          </label>
          <div class="area-msg"></div><br>
          
          <div class="btn-container">
            <input type="submit" class="btn btn-mid btn-cv" value="変更画面へ">
          </div><br><br>
          <a href="passRemindSend.php" style="text-decoration:none;">&lt;&lt; パスワード再発行メールを再送信する</a>
        </form>
      </div>
    </section>
  </main>
  
  <?php
  require('footer.php');
  ?>