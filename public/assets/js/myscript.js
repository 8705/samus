var clipBoard;

(function (clipBoard){
  var set = (function(){
    var path = 'ZeroClipboard.swf';
    return function(click,copy) {
      click.zclip({
        path:path,
        copy: function(){
          return copy.val();
        }
      });
    };
  })();
  clipBoard.set = set;
})(clipBoard || (clipBoard = {}));

$(function(){
  clipBoard.set($('#copy-button'),$('#copy-button').prev());
});