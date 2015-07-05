var clipBoard;

(function (clipBoard){
  var set = (function(){
    var path = '/assets/js/ZeroClipboard.swf';
    return function(click) {
      click.zclip({
        path: path,
        beforeCopy:function(){
          var text = $('#text1').val();
          var num  = $('#num1').val();
          $('#copytext').val(text.repeat(num));
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
  clipBoard.set($('#copy-btn'));
});