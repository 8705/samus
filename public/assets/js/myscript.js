var clipBoard;

(function (clipBoard){
  var set = (function(){
    var path = '/assets/js/ZeroClipboard.swf';
    return function(click,copy) {
      click.zclip({
        path:path,
        copy:copy.text()
      });
    };
  })();
  clipBoard.set = set;
})(clipBoard || (clipBoard = {}));

$(function(){
  clipBoard.set($('.click'),$('#copy'));
});