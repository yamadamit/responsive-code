<?php
$siteTitle = "アカウント削除";
require('head.php');
?>

<style>
  .form{
    text-align: center;
  }
  .btn-container{
    margin-top: 40px;
  }
  #check{
    margin-top: 40px;
  }
  .form .btn-container .btn{
    float: none;
  }
</style>
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
          <h2 class="title">アカウント削除</h2>
          <div class="area-msg"></div>
          
          <p style="text-align:center;">アカウントを削除した場合、<br>
          これまで登録してきた教科書の情報も<br>
          全て削除されてしまいます。<br>
          それでも削除しますか？</p>
                    
          <div class="btn-container">
            <p style="font-size:14px; text-align:center;">
              ※アカウントを削除する際は、<br>
              以下のボタンにチェックを入れてください。
            </p>
            <input type="checkbox" id="check">
          </div>
          <div class="btn-container">
            <input type="submit" class="btn btn-mid btn-widthdraw" value="削除する" name="submit" disabled="disabled">
          </div>          
        </form>
      </div>
    </section>
  </main>
  
  <?php
  require('footer.php');
  ?>