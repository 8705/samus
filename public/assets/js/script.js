$(document).ready(function(){
  $("#copy-button").zclip({
    path: "assets/js/ZeroClipboard.swf",
    copy: function(){
      return $(this).prev().val();
    }
  });
});