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
    <h1 class="page-title">プロフィール編集</h1>
    
    <!-- メインカラム -->
    <section id="main">
      <div class="form-container">
        <form action="" class="form form-prof" enctype="multipart/form-data">
          <div class="area-msg"></div>
          
          <label for="">
            名前
            <input type="text" name="username">
          </label>
          <div class="area-msg"></div>
          
          <label for="">
            TEL
            <input type="text" name="tel">
          </label>
          <div class="area-msg"></div>
          
          <label for="">
            郵便番号
            <input type="text" name="zip">
          </label>
          <div class="area-msg"></div>
          
          <label for="">
            住所
            <input type="text" name="addr">
          </label>
          <div class="area-msg"></div>
          
          <label for="">
            年齢
            <input type="number" name="age">
          </label>
          <div class="area-msg"></div>
          
          <label for="">
            Email <span class="label-require">必須</span>
            <input type="text" name="email">
          </label>
          <div class="area-msg"></div>
          
          <label for="">
            Twitterアカウント
            <input type="text" name="twitter">
          </label>
          <div class="area-msg"></div>
          
          <label for="">
            LINEアカウント
            <input type="text" name="line">
          </label>
          <div class="area-msg"></div>
          
          <label for="">
            URL
            <input type="text" name="url">
          </label>
          <div class="area-msg"></div>
          
          プロフィール画像
          <div class="area-top">※クリックすると、画像を選択できます。</div>
          <label for="" class="area-drop area-drop-prof">
            <input type="hidden" name="MAX_FILE_SIZE" value="3145728">
            <input type="file" class="input-file" name="pic">
            <img src="images/masashi.png" alt="" class="prev-img">
          </label>
          <div class="area-msg"></div>
          
          <div class="btn-container btn-container-prof">
            <input type="submit" class="btn btn-mid btn-cv" value="変更する">
          </div>
          
        </form>
      </div>
    </section>
    
    <?php
    require('sidebar.php');
    ?>    
    
  </main>
  
  <?php
  require('footer.php');
  ?>