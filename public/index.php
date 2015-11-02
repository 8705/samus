<?php
require '../vendor/autoload.php';
require '../app/genimage.php';

$app = new \Slim\Slim(array(
    'debug' => true,
    'templates.path' => '../templates'
));

$app->get('/', function () use ($app){

    $app->view->setData(array(
        'title' => 'Webサイトテスト用ツール SAMUS',
        'h1' => 'Webサイトテスト用ツール'
    ));
    $app->render('header.php');
    $app->render("index.php");
    $app->render("footer.php");
});

$app->get('/charcount', function () use ($app){

    $app->view->setData(array(
        'title' => '文字数カウント SAMUS',
        'h1' => '文字数カウント'
    ));
    $app->render('header.php');
    $app->render("charcount/index.php");
    $app->render("footer.php");
});

$app->get('/image', function () use ($app){

    $app->view->setData(array(
        'title' => 'テスト画像ジェネレータ SAMUS',
        'h1' => 'テスト画像ジェネレータ'
    ));
    $app->render('header.php');
    $app->render("image/index.php");
    $app->render("footer.php");
});

$app->get('/dpkg', function () use ($app){

    $app->view->setData(array(
        'title' => 'dpkgツール SAMUS',
        'h1' => 'dpkgツール'
    ));
    $app->render('header.php');
    $app->render("dpkg/index.php");
    $app->render("footer.php");
});
$app->get('/apt-get', function () use ($app){

    $app->view->setData(array(
        'title' => 'apt-getコマンド SAMUS',
        'h1' => 'apt-getコマンド'
    ));
    $app->render('header.php');
    $app->render("apt-get/index.php");
    $app->render("footer.php");
});

$app->get('/rpm', function () use ($app){

    $app->view->setData(array(
        'title' => 'rpmコマンド SAMUS',
        'h1' => 'rpmコマンド'
    ));
    $app->render('header.php');
    $app->render("rpm/index.php");
    $app->render("footer.php");
});

$app->get('/yum', function () use ($app){

    $app->view->setData(array(
        'title' => 'yumコマンド SAMUS',
        'h1' => 'yumコマンド'
    ));
    $app->render('header.php');
    $app->render("yum/index.php");
    $app->render("footer.php");
});

$app->get('/genimage', function() use ($app){

    $refferer = $_SERVER["HTTP_REFERER"];
    if ($refferer !== 'http://samus.8705.co/image' &&
        $refferer !== 'http://mamp.samus/image' &&
        $refferer !== 'http://samus.local.com/image')
    {
        exit;
    }
    $request = $app->request->get();
    $im = new Genimage($request['ext'],$request['w'],$request['h']);
    $im->output();
});

$app->run();