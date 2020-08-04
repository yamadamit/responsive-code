<?php
$siteTitle = "プロフィール編集";
require('head.php');
?>
<body>  
  <?php
  require('header.php');
  ?>
  
  <!-- メインコンテンツ -->
  <main class="main page-2colum page-logined">
    <h1 class="page-title">パスワード変更</h1>
    
    <!-- メインカラム -->
    <section id="main">
      <div class="form-container">
        <form action="" class="form form-prof">
          <div class="area-msg"></div>
          
          <label for="">
            パスワード <span class="label-require">必須</span>
            <input type="password" name="pass_old">
          </label>
          <div class="area-msg"></div>
          
          <label for="">
            パスワード <span class="label-require">必須</span>
            <input type="password" name="pass_new">
          </label>
          <div class="area-msg"></div>          
          
          <label for="">
            パスワード（再入力） <span class="label-require">必須</span>
            <input type="password" name="pass_new_re">
          </label>
          <div class="area-msg"></div>
          
          <div class="btn-container">
            <input type="submit" class="btn btn-mid btn-cv" value="変更する">
          </div>
          
        </form>
      </div>
    </section>
    
    <!-- サイドバー -->
    <?php
    require('sidebar.php');
    ?>
    
  </main>
  
  <?php
  require('footer.php');
  ?>