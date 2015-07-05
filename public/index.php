<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Samus 入力テスト</title>
<meta charset="utf-8">
<meta name="description" content="フォームのユーザーテストに使用するテキストや画像を提供しています">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="shortcut icon" href="">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<!-- <script src="assets/js/bootstrap.min.js"></script> -->
<script src="assets/js/jquery.zclip.min.js"></script>
<script src="assets/js/jquery.snippet.min.js"></script>
<!-- <script src="assets/js/script.js"></script> -->
</head>
<body>
	<div class="row">
        <div class="col-md-8">
        	<textarea>hogehoge</textarea>
			<a id="copy-button" href="#" class="btn btn-success">Copy</a>
        </div>
        <div class="col-md-4">.col-md-4</div>
	</div>
	<script>
	$(document).ready(function(){
	  $("#copy-button").zclip({
	    path: "assets/js/ZeroClipboard.swf",
	    copy: function(){
	      return $(this).prev().val();
	    }
	  });
	});</script>
</body>
</html>