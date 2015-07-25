<div class="container">
    <div class="row">
        <div class="introduce col-md-8 col-md-offset-2">
            文字数カウントやランダム文字生成、テスト画像などWebサイトのテストでよく使用するものを集めました。
        </div>
        <div class="gnavi col-md-8 col-md-offset-2">
            <div class="list-group">
                <a href="/charcount" class="list-group-item"><h2>文字数カウンター</h2><p>文字数及びbyte数のカウント／ランダム文字生成</p></a>
                <a href="/image" class="list-group-item"><h2>テスト画像ジェネレーター</h2><p>サイズと拡張子を指定してテスト用画像を生成</p></a>
                <a class="list-group-item future"><h2>XSSテストテキスト</h2><p>Coming Soon ...</p></a>
                <a class="list-group-item future"><h2>パスワード/htpasswd暗号化同時生成</h2><p>Coming Soon ...</p></a>
            </div>
        </div>
    </div>
    <span id="samus"></span>
    <script src="assets/js/String_random.js"></script>
    <script src="assets/js/zeroclip.js"></script>
    <script src="assets/js/jquery.ba-tinypubsub.js"></script>
    <script src="assets/js/myscript.js"></script>
    <script src="assets/js/image.js"></script>
    <script src="https://cdn.rawgit.com/egapool/samusball/master/samusball.js"></script>
    <script>
        $(function(){
            $('#samus').samus();
        });
    </script>