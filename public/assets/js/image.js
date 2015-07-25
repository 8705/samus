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
$.subscribe('view/setWidth',function(event,width){
  if ( !width ) width = 100;
  $('.view-w').each(function(){
    $(this).text(width);
  });
});
$.subscribe('view/widthError',function(event,bool){
  var err = bool || false;
  $('.view-w').each(function(){
    if ( err ) {
      $(this).addClass('error');
    } else {
      $(this).removeClass('error');
    }
  });
});
$.subscribe('view/setHeight',function(event,height){
  if ( !height ) height = 100;
  $('.view-h').each(function(){
    $(this).text(height);
  });
});
$.subscribe('view/heightError',function(event,bool){
  var err = bool || false;
  $('.view-h').each(function(){
    if ( err ) {
      $(this).addClass('error');
    } else {
      $(this).removeClass('error');
    }
  });
});

$(function(){
  var url,ext,w,h;
  var re = /^[0-9]{1,4}$/;
  $('#input-width').on('keyup change',function(){
    $.publish('view/setWidth',$(this).val());
    if ( ($(this).val() !== "" && !$(this).val().match(re)) || $(this).val() > MAXSIZE) {
      $.publish('image/widthError',err.imagesizemsg);
      $.publish('view/widthError',true);
      return;
    }
    $.publish('image/setWidth',$(this).val());
    $.publish('view/widthError');
  });
  $('#input-height').on('keyup change',function(){
    $.publish('view/setHeight',$(this).val());
    if ( ($(this).val() !== "" && !$(this).val().match(re)) || $(this).val() > MAXSIZE) {
      $.publish('image/heightError',err.imagesizemsg);
      $.publish('view/heightError',true);
      return;
    }
    $.publish('image/setHeight',$(this).val());
    $.publish('view/heightError');
  });
  $('.download-btn').on('click mouseDown touch',function(e){
    if ( err.flg ) {
      e.preventDefault;
      return false;
    }
    url = "/genimage";
    ext = $(this).data('ext');
    w   = $(this).data('w');
    h   = $(this).data('h');
    this.href = url + "?ext=" + ext + "&w=" + w + "&h=" + h;
  });
});