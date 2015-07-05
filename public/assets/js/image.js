var err = {};
err.imagesizemsg = '半角数字1〜4048の間で入力してださい';
err.flg = false;
MAXSIZE = 4048;

$.subscribe('image/setWidth',function(event, width){
  $.publish('image/widthError');
  if ( !width ) width = 100;
  $('.download-btn').each(function(){
    $(this).data('w',width);
  });
});
$.subscribe('image/setHeight',function(event, height){
  $.publish('image/heightError');
  if ( !height ) height = 100;
  $('.download-btn').each(function(){
    $(this).data('h',height);
  });
});
$.subscribe('image/widthError',function(event, msg){
  var message = msg || '';
  err.flg = message !== '';
  $('.widthError').text(message);
});
$.subscribe('image/heightError',function(event, msg){
  var message = msg || '';
  err.flg = message !== '';
  $('.heightError').text(message);
});

$(function(){
  var url,ext,w,h;
  var re = /^[0-9]{1,4}$/;
  $('#input-width').on('keyup change',function(){
    if ( ($(this).val() !== "" && !$(this).val().match(re)) || $(this).val() > MAXSIZE) {
      $.publish('image/widthError',err.imagesizemsg);
      return;
    }
    $.publish('image/setWidth',$(this).val());
  });
  $('#input-height').on('keyup change',function(){
    if ( ($(this).val() !== "" && !$(this).val().match(re)) || $(this).val() > MAXSIZE) {
      $.publish('image/heightError',err.imagesizemsg);
      return;
    }
    $.publish('image/setHeight',$(this).val());
  });
  $('.download-btn').on('click mouseDown touch',function(e){
    if ( err.flg ) {
      e.preventDefault;
      return false;
    }
    url = "/src/image.php";
    ext = $(this).data('ext');
    w   = $(this).data('w');
    h   = $(this).data('h');
    this.href = url + "?ext=" + ext + "&w=" + w + "&h=" + h;
  });
});