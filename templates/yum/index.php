<div class="container">
    <div class="row col-md-8 col-md-offset-2">
        <h2>yumツールの使い方</h2>
        <p>CentOS,Fedora,Red Hat Enterprise Linuxなどで採用されているパッケージrpmを取り扱うコマンド</p>

        <h3>yum コマンド</h3>
        <p class="format">yum [action]</p>
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
                    <td>yum check-update</td>
                    <td>アップデート対象のパッケージリストを表示する</td>
                </tr>
                <tr>
                    <td>yum update [package]</td>
                    <td>指定したパッケージをアップデートする</td>
                </tr>
                <tr>
                    <td>yum install [package]</td>
                    <td>指定したパッケージをインストールする</td>
                </tr>
                <tr>
                    <td>yum remove [package]</td>
                    <td>指定したパッケージをアンインストールする</td>
                </tr>
                <tr>
                    <td>yum info [package]</td>
                    <td>指定したパッケージの情報を表示する</td>
                </tr>
                <tr>
                    <td>yum list</td>
                    <td>全パッケージ情報をリスト表示する</td>
                </tr>
                <tr>
                    <td>yum repolist</td>
                    <td>リポジトリ一覧を表示する</td>
                </tr>
                <tr>
                    <td>yum search [query]</td>
                    <td>パッケージ情報キーワードで検索する</td>
                </tr>
                <tr>
                    <td>yum search all [query]</td>
                    <td>パッケージをキワードで検索する（パッケージ名および説明文等すべて）</td>
                </tr>
                <tr>
                    <td>yum grouplist</td>
                    <td>パッケージグループをリスト表示する</td>
                </tr>
                <tr>
                    <td>yum groupinstall [group]</td>
                    <td>指定したグループのパッケージをインストールする</td>
                </tr>
            </tbody>

        </table>

        <h3>yumdownloader コマンド</h3>
        <p class="format">yumdownloader [pacakge]</p>
        <p>パッケージをダウンロードだけする</p>
    </div>
</div>
<span id="samus"></span>
<script src="assets/js/jquery.ba-tinypubsub.js"></script>