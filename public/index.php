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
<script src="assets/js/String_random.js"></script>
<script src="assets/js/zeroclip.js"></script>
<script src="assets/js/jquery.ba-tinypubsub.js"></script>
<script src="assets/js/myscript.js"></script>
<script src="assets/js/image.js"></script>
<?php if (getenv('APPLICATION_ENV') === 'production'): ?>
<script src="assets/js/analytics.js"></script>
<?php endif; ?>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h3>入力した文字列をコピーできる</h3>
            <textarea id="copytext" class="form-control"></textarea>
            <a id="copy-btn1" href="#" class="btn btn-success">Copy</a>
            <h3>入力した文字数分だけランダム文字列をコピーできる</h3>
            <select id="random_type" class="form-control">
                <option value="[a-zA-Z0-9]">半角英数字(a-zA-Z0-9)</option>
                <option value="[a-zA-Z]">半角英字のみ(a-zA-Z)</option>
                <option value="[0-9]">半角数字のみ(0-9)</option>
                <option value=".">半角文字なら何でもあり</option>
                <option value="[ぁ-ん]">全角平仮名のみ(ぁ-ん)</option>
                <option value="[ぁ-んァ-ヶー一-龠]">全角日本語(ぁ-んァ-ヶー一-龠)</option>
            </select>
            <input id="num" type="text" class="form-control" placeholder="100">
            <a id="copy-btn2" href="#" class="btn btn-success">Copy</a>
        </div>
        <div class="col-md-4"></div>
    </div>
    <div class="row col-md-5">
        <h2>画像ダウンロード</h2>
        <table class="image table table-condensed">
            <tr>
                <td colspan="2">
                    <div class="form-group col-md-6">
                        <label for="input-width">Width:</label>
                        <input type="text" class="form-control" id="input-width" placeholder="100px">
                        <span class="widthError"></span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="input-height">height:</label>
                        <input type="text" class="form-control" id="input-height" placeholder="100px">
                        <span class="heightError"></span>
                    </div>
                </td>
            </tr>
            <tr>
                <th>
                    <span class="view-w">100</span><span class="view-x">✕</span><span class="view-h">100</span>
                </th>
                <td>
                    <a class="btn btn-success download-btn" data-w="100" data-h="100" data-ext="png" href="/src/image.php" role="button">.png</a>
                </td>
            </tr>
            <tr>
                <th>
                    <span class="view-w">100</span><span class="view-x">✕</span><span class="view-h">100</span>
                </th>
                <td>
                    <a class="btn btn-success download-btn" data-w="100" data-h="100" data-ext="jpg" href="/src/image.php" role="button">.jpg</a>
                </td>
            </tr>
            <tr>
                <th>
                    <span class="view-w">100</span><span class="view-x">✕</span><span class="view-h">100</span>
                </th>
                <td>
                    <a class="btn btn-success download-btn" data-w="100" data-h="100" data-ext="gif" href="/src/image.php" role="button">.gif</a>
                </td>
            </tr>
        </table>
    </div>
</div>
</body>
</html>