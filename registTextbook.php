<?php
$siteTitle = "教科書を登録する";
require('head.php');
?>
<body>  
  <?php
  require('header.php');
  ?>

  <!-- メインコンテンツ -->
  <main class="main page-2colum page-logined">
    <h1 class="page-title">教科書を出品する</h1>
    
    <!-- メインカラム -->
    <section id="main">
      <div class="form-container">
        <form action="" class="form form-regist" enctype="multipart/form-data">
          <div class="area-msg"></div>
          
          <label for="">
            教科書のタイトル <span class="label-require">必須</span>
            <input type="text" name="name">
          </label>
          <div class="area-msg"></div>
          
          <label for="">
            著者名
            <input type="text" name="author" class="form-regist-elm">
          </label>
          <div class="area-msg"></div>
          
          <label for="">
            出版社
            <input type="text" name="publisher" class="form-regist-elm">
          </label>
          <div class="area-msg"></div>
          
          <label for="">
            カテゴリ <span class="label-require">必須</span>
            <select name="category_id" id="" class="form-regist-elm form-regist-elm-select">
              <option value="1">政治学</option>
              <option value="2">中国政治</option>
              <option value="3">アメリカ政治</option>
            </select>
          </label>
          <div class="area-msg"></div>
          
          <label for="">
            コンディション <span class="label-require">必須</span>
            <select name="state_id" id="" class="form-regist-elm form-regist-elm-select">
              <option value="1">ほぼ新品</option>
              <option value="2">非常に良い</option>
              <option value="3">良い</option>
              <option value="4">可</option>
              <option value="5">汚れあり</option>              
            </select>
          </label>
          <div class="area-msg"></div>
          
          <label for="">
            詳細
            <textarea name="" id="js-count" cols="30" rows="10" style="height:150px;"></textarea>
            <div class="counter-text"><span id="js-count-view">0</span>/255文字</div>          
          </label>
          <div class="area-msg"></div>
          
          <label for="" style="text-align:left;">
            金額 <span class="label-require">必須</span>
            <div class="form-group">
              <input type="text" name="price" style="width:150px;" placeholder="3,000"><span class="option">円</span>              
            </div>
          </label>
          <div class="area-msg"></div>
          
          
          <div style="overflow:hidden;">
           
            <div class="imgDrop-container">
              画像1
              <label for="" class="area-drop area-drop-regist">
                <input type="hidden" name="MAX_FILE_SIZE" value="3145728">
                <input type="file" class="input-file" name="pic1">
                <img src="images/masashi.png" alt="" class="prev-img">
                ドラッグ＆ドロップ
              </label>
            </div>
            
            <div class="imgDrop-container">
              画像2
              <label for="" class="area-drop area-drop-regist">
                <input type="hidden" name="MAX_FILE_SIZE" value="3145728">
                <input type="file" class="input-file" name="pic2">
                <img src="images/masashi.png" alt="" class="prev-img">
                ドラッグ＆ドロップ
              </label>
            </div>
            
            <div class="imgDrop-container">
              画像3
              <label for="" class="area-drop area-drop-regist">
                <input type="hidden" name="MAX_FILE_SIZE" value="3145728">
                <input type="file" class="input-file" name="pic3">
                <img src="images/masashi.png" alt="" class="prev-img">
                ドラッグ＆ドロップ
              </label>
            </div>
            
          </div>
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