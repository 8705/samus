var clipBoard;

(function (clipBoard){
  var set = (function(){
    var path = '/assets/js/ZeroClipboard.swf';
    return function(btn) {
      btn.zclip({
        path: path,
        beforeCopy:function(){
          var text;
          switch (btn.attr('id')) {
            case 'copy-btn1':
              text = $('#copytext').val();
              break;
            default:
              var type = $(this).data('type');
              var num  = $(this).data('num');
              text = String_random(type+'{'+num+'}');
              break;
          }
          $('#text_count').text(text.length);
          $('#text_byte').text(CountLength(text));
          $('#copytext').val(text);
        },
        copy: function(){
          return $('#copytext').val();
        },
        afterCopy:function(){
          $.publish('copy/success',[$(this)]);
        },
      });
    };
  })();
  clipBoard.set = set;
})(clipBoard || (clipBoard = {}));

$.subscribe("copy/success",function(event,$btn){
  $btn.after('<span class="icon-copy">Copy!</span>');
  var $copy = $('.icon-copy');
  $copy
    .animate({
      opacity : 0,
      top     : '-=20',
  },500,function(){
    $(this).remove();
  });
});

$(function(){
  clipBoard.set($('#copy-btn1'));
  clipBoard.set($('.copy-btn2'));

  $('#copytext').on('keyup mouseup change',function(){
    text = $(this).val();
    $('#text_count').text(text.length);
    $('#text_byte').text(CountLength(text));
  });
});


/****************************************************************
* バイト数を数える
*
* 引数 ： str 文字列
* 戻り値： バイト数
*
****************************************************************/
function CountLength(str) {
    var r = 0;
    for (var i = 0; i < str.length; i++) {
        var c = str.charCodeAt(i);
        // Shift_JIS: 0x0 ～ 0x80, 0xa0 , 0xa1 ～ 0xdf , 0xfd ～ 0xff
        // Unicode : 0x0 ～ 0x80, 0xf8f0, 0xff61 ～ 0xff9f, 0xf8f1 ～ 0xf8f3
        if ( (c >= 0x0 && c < 0x81) || (c == 0xf8f0) || (c >= 0xff61 && c < 0xffa0) || (c >= 0xf8f1 && c < 0xf8f4)) {
            r += 1;
        } else {
            r += 2;
        }
    }
    return r;
}
