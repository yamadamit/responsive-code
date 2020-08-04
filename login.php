<?php
$siteTitle = "ログイン";
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
          <h2 class="title">ログイン</h2>
          <div class="area-msg"></div><br>
          
          <label for="">
            Email
            <input type="text" name="email">
          </label>
          <div class="area-msg"></div>
          
          <label for="">
            パスワード
            <input type="password" name="pass">
          </label>
          <div class="area-msg"></div>
          
          <label for="">
            <input type="checkbox" name="pass_Save">次回ログインを省略する
          </label><br>
          
          <div class="btn-container">
            <input type="submit" class="btn btn-mid btn-cv" value="ログイン">
          </div><br>
          パスワードを忘れた方は<a href="passRemindSend.php">コチラ</a><br>
        </form>
      </div>
    </section>
  </main>
  
  <?php
  require('footer.php');
  ?>