<?php
$siteTitle = "ユーザー登録";
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
          <h2 class="title">ユーザー登録</h2>
          <p style="text-align:center;">せいじぼん!!をご利用頂くには、<br>
          会員登録（無料）が必要です。<br>
          簡単な手続きをお済ませ頂きますと、<br>
          お買い物をお楽しみ頂けます。</p>
          <div class="area-msg"></div><br>
          
          <label for="">
            ユーザー名
            <input type="text" name="username">
          </label>
          <div class="area-msg"></div>
          
          <label for="">
            Email <span class="label-require">必須</span>
            <input type="text" name="email">
          </label>
          <div class="area-msg"></div>
          
          <label for="">
            パスワード <span class="label-require">必須</span>
            <input type="password" name="pass">
          </label>
          <div class="area-msg"></div>
          
          <label for="">
            パスワード（再入力） <span class="label-require">必須</span>
            <input type="password" name="pass_re">
          </label>
          <div class="area-msg"></div>
          
          <div class="btn-container">
            <input type="submit" class="btn btn-mid btn-cv" value="登録する">
          </div>
          
        </form>
      </div>
    </section>
  </main>
  
  <?php
  require('footer.php');
  ?>