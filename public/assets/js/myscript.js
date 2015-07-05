var clipBoard;

(function (clipBoard){
  var set = (function(){
    var path = 'ZeroClipboard.swf';
    return function(click,copy) {
      click.zclip({
        path:path,
        copy: function(){
          return copy.val();
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
  clipBoard.set($('#copy-btn'),$('#copy-btn').prev());
});