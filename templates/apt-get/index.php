<div class="container">
    <div class="row col-md-8 col-md-offset-2">
        <h2>apt-getコマンドの使い方</h2>
        <p>Debian/GNU LinuxやUbuntuなどDebian系ディストリビューションで使われるパッケージ管理用コマンド</p>

        <h3>コマンド</h3>
        <p class="format">apt-get [option] [action]</p>
        <table class="command-talbe table table-striped">
            <thead>
                <tr>
                    <th>コマンド</th>
                    <td>内容</td>
                </tr>
            </thead>
            <tbody>
                <tr class="head-line">
                    <td colspan="2">action</td>
                </tr>
                <tr>
                    <td>apt-get install [package]</td>
                    <td>パッケージをインストールまたはアップグレードする</td>
                </tr>
                <tr>
                    <td>apt-get upgrade</td>
                    <td>全パッケージのうち、他のパッケージを削除しないものをアップグレードする</td>
                </tr>
                <tr>
                    <td>apt-get remove [package]</td>
                    <td>パッケージをアンインストールする</td>
                </tr>
                <tr>
                    <td>apt-get clean</td>
                    <td>過去に取得保持していたパッケージファイルを削除する</td>
                </tr>
                <tr>
                    <td>apt-get dist-upgrade</td>
                    <td>カーネルを最新にアップグレードする</td>
                </tr>
                <tr>
                    <td>apt-get update</td>
                    <td>サーバーから最新のパッケージデータベースを取得する</td>
                </tr>
                <tr class="head-line">
                    <td colspan="2">option</td>
                </tr>
                <tr>
                    <td>apt-get -d [action]</td>
                    <td>ファイルをダウンロードする（インストールはしない）</td>
                </tr>
                <tr>
                    <td>apt-get -s [action]</td>
                    <td>システムを変更せずに動作をシミュレートする</td>
                </tr>
            </tbody>
        </table>

        <h3>ダウンロード元サイトの設定</h3>
        <p><code>/etc/apt/sources.list</code>に記載されているパッケージ情報を管理しているURL先からパッケージ情報をダウンロードします。<br>
        このファイルを編集することでパッケージのダウンロード元を追加・変更できます。</p>
        <pre>
// 書き方
deb  http://jp.archive.ubuntu.com/ubuntu/  trusty  main restriced
(1)  (2)                                   (3)     (4)
        </pre>
        <p>追加・変更した後は<code>apt-get update</code>でパッケージデータベースを更新します。</p>
        <table class="table">
            <tr>
                <td style="width: 30px;">(1)</td>
                <td style="width: 180px;"><code>deb</code> : パッケージを取得<br>
                <code>deb-src</code> : ソースを取得
                </td>
                <td></td>
            </tr>
            <tr>
                <td>(2)</td>
                <td>取得先のURI</td>
                <td></td>
            </tr>
            <tr>
                <td>(3)</td>
                <td>バージョン名</td>
                <td>安定版は<code>stable</code></td>
            </tr>
            <tr>
                <td>(4)</td>
                <td>パッケージの種類</td>
                <td>
                    <code>main</code> : 公式にサポートされているソフトウェア<br>
                    <code>universe</code> : コミュニティによってメンテされているソフトウェア<br>
                    <code>restricted</code> : デバイス用のプロプライエタリなドライバ<br>
                    <code>multiverse</code> : 著作権もしくは法的にな問題によって制限されたソフトウェア<br>
                    <code>contrib</code> : フリーではないソフトと依存関係のあるソフトウェア<br>
                    <code>non-free</code> : 利用と改変再配布に制限のあるソフトウェア<br>
                </td>
            </tr>
        </table>
    </div>
</div>
<span id="samus"></span>
<script src="assets/js/jquery.ba-tinypubsub.js"></script>