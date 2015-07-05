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
            case 'copy-btn2':
              var type = $("select[id='random_type']").val();
              var num  = $('#num').val();
              text = String_random(type+'{'+num+'}');
              break;
            default:
              break;
          }
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
  clipBoard.set($('#copy-btn2'));
  clipBoard.set($('#copy-btn3'));
});