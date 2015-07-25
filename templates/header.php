<!DOCTYPE html>
<html>
<head>
<meta name="google-site-verification" content="GGvL9kjVYgDqlds06gjtBqv6oR_bqjSx7MaLiorCODw" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php echo $title ?></title>
<meta charset="utf-8">
<meta name="description" content="文字数カウントの他にもフォームのユーザーテストに使用するテキストや画像を提供しています">
<meta name="keywords" content="文字数カウント,ダミーテキスト,ダミー画像">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<link href='http://fonts.googleapis.com/css?family=Cabin' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" href="">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<?php if (getenv('APPLICATION_ENV') === 'production'): ?>
<script src="assets/js/analytics.js"></script>
<?php endif; ?>
</head>
<body>
<nav class="nav ">
    <div class="container">
        <div class="logo">
            <a class="cabin" href="/">SAMUS</a><h1><?php echo $h1 ?></h1>
        </div>
    </div>
</nav>