<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Samus 入力テスト</title>
<meta charset="utf-8">
<meta name="description" content="フォームのユーザーテストに使用するテキストや画像を提供しています">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="shortcut icon" href="">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="assets/js/zeroclip.js"></script>
<script src="assets/js/jquery.ba-tinypubsub.js"></script>
<script src="assets/js/myscript.js?v=2"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h3>入力した文字列をコピーできる</h3>
            <textarea id="copytext"></textarea>
            <a id="copy-btn" href="#" class="btn btn-success">Copy</a>
            <h3>入力した文字列を指定した数だけ連続させてコピーできる</h3>
            <input id="text1" type="text">
            <input id="num1" type="text">
            <a id="copy-btn2" href="#" class="btn btn-success">Copy</a>
        </div>
        <div class="col-md-4">.col-md-4</div>
    </div>
</div>
</body>
</html>