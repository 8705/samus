var clipBoard;

(function (clipBoard){
  var set = (function(){
    var path = 'https://cdnjs.cloudflare.com/ajax/libs/zeroclipboard/2.2.0/ZeroClipboard.swf';
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