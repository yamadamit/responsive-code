$(function(){
  
  //フッターを最下部に固定
  var $ftr = $('.footer');
  if( window.innerHeight > $ftr.offset().top + $ftr.outerHeight() ){
    $ftr.attr({'style': 'position:fixed; top:' + (window.innerHeight - $ftr.outerHeight()) +'px;' });
  }
  
  // フロートヘッダーメニュー
  var targetHeight = $('.js-float-menu-target').height();
  $(window).on('scroll', function() {
    $('.js-float-menu').toggleClass('float-active', $(this).scrollTop() > targetHeight);
  });

  // SPメニュー
  $('.js-toggle-sp-menu').on('click', function () {
    $(this).toggleClass('active');
    $('.js-toggle-sp-menu-target').toggleClass('active');
  });
  
  //アカウント削除ページの非活性化
  $('#check').click(function(){
    if( $(this).prop('checked')){
      $('.btn-widthdraw').prop('disabled', false);
    }else{
      $('.btn-widthdraw').prop('disabled', true);
    }
  });
  
  //テキストエリアカウント
  var $countUp = $('#js-count'),
      $countView = $('#js-count-view');
  $countUp.on('keyup', function(e){
    $countView.html($(this).val().length);
  });
  
  //画像の切り替え
  var $switchImgSubs = $('.js-switch-img-sub'),
      $switchImgMain = $('#js-switch-img-main');
  $switchImgSubs.on('click',function(e){
    $switchImgMain.attr('src',$(this).attr('src'));
  });
  
  //連絡掲示板のスクロール
  $(function(){
    $('#js-scroll-bottom').animate({
      scrollTop:　$('#js-scroll-bottom')[0].scrollHeight
    }, 'fast');
  });
  
  //トップページの上に戻るボタン
  var appear = false;
  var pagetop = $('#page_top');
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {  //100pxスクロールしたら
      if (appear == false) {
        appear = true;
        pagetop.stop().animate({
          'bottom': '65px' //下から50pxの位置に
        }, 300); //0.3秒かけて現れる
      }
    } else {
      if (appear) {
        appear = false;
        pagetop.stop().animate({
          'bottom': '-65px' //下から-50pxの位置に
        }, 300); //0.3秒かけて隠れる
      }
    }
  });
  pagetop.click(function () {
    $('body, html').animate({ scrollTop: 0 }, 500); //0.5秒かけてトップへ戻る
    return false;
  });
});