<div class="container">
    <div class="row col-md-8 col-md-offset-2">
        <h2>rpmコマンドの使い方</h2>
        <p>CentOS,Fedora,Red Hat Enterprise Linuxなどで採用されているパッケージrpmを取り扱うコマンド</p>

        <h3>フォーマット</h3>
        <p class="format">rpm [option] [action]</p>

        <h4>インストール/アップグレードモード</h4>
        <table class="table table-striped">
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
                    <td>rpm -i(--install) [package]</td>
                    <td>パッケージをインストールする</td>
                </tr>
                <tr>
                    <td>rpm -U(--upgrade) [package]</td>
                    <td>パッケージをアップグレードする（なければインストールする）</td>
                </tr>
                <tr>
                    <td>rpm -F(--freshen) [package]</td>
                    <td>パッケージがインストールされていればアップグレードする</td>
                </tr>

                <tr class="head-line">
                    <td colspan="2">option</td>
                </tr>
                <tr>
                    <td>rpm -v [action]</td>
                    <td>詳細な情報を表示する</td>
                </tr>
                <tr>
                    <td>rpm -h(--hash) [action]</td>
                    <td>進行状況を「#」で表示する</td>
                </tr>
                <tr>
                    <td>rpm --nodeps [action]</td>
                    <td>依存関係を無視してインストールする</td>
                </tr>
                <tr>
                    <td>rpm --force [action]</td>
                    <td>既存のファイルを新しいものに置き換える</td>
                </tr>
                <tr>
                    <td>rpm --test [action]</td>
                    <td>実際にはインストールせずにテストを実施する</td>
                </tr>
            </tbody>
        </table>
        <h4>アンインストールモード</h4>
        <table class="table table-striped">
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
                    <td>rpm -e(--erase) [package]</td>
                    <td>パッケージをアンインストールする</td>
                </tr>
                <tr class="head-line">
                    <td colspan="2">option</td>
                </tr>
                <tr>
                    <td>rpm -nodeps [action]</td>
                    <td>依存関係を無視してインストールする</td>
                </tr>
            </tbody>
        </table>

        <h4>照会モード</h4>
        <table class="table table-striped">
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
                    <td>rpm -qp [package]</td>
                    <td>指定したパッケージがインストールされているか照会する</td>
                </tr>
                <tr>
                    <td>rpm -qa(-q --all)</td>
                    <td>インストール済みのすべてのパッケージを表示する</td>
                </tr>
                <tr>
                    <td>rpm -qf [file]</td>
                    <td>指定したファイルを含むパッケージ名を表示する</td>
                </tr>
                <tr>
                    <td>rpm -qc(-q --configfiles) [package]</td>
                    <td>設定ファイルのみ表示する</td>
                </tr>
                <tr>
                    <td>rpm -qd(-q --docfiles)</td>
                    <td>ドキュメントのみを表示する</td>
                </tr>
                <tr>
                    <td>rpm -qi(-q --info)</td>
                    <td>インストール済みパッケージ情報を表示する</td>
                </tr>
                <tr>
                    <td>rpm -qlp(-q --list) [package]</td>
                    <td>指定したパッケージに含まれるファイルを表示する</td>
                </tr>
                <tr>
                    <td>rpm -qRp(-q --requires) [package]</td>
                    <td>指定したパッケージに含まれるファイルを表示する</td>
                </tr>
                <tr>
                    <td>rpm -q --changelog</td>
                    <td>変更履歴を表示する</td>
                </tr>
            </tbody>
        </table>

        <h4>検査モード</h4>
        <table class="table table-striped">
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
                    <td>rpm -V(--verify) [package]</td>
                    <td>パッケージの検査</td>
                </tr>
                <tr>
                    <td>rpm -Va</td>
                    <td>インストール済みのすべてのパッケージを検査</td>
                </tr>
                <tr>
                    <td>rpm -V --nomd5 [file]</td>
                    <td>MD5によるファイルの改ざんを検査せずにパッケージを検査</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<span id="samus"></span>
<script src="assets/js/jquery.ba-tinypubsub.js"></script>