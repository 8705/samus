<div class="container">
    <div class="row col-md-8 col-md-offset-2">
        <h2>dpkgツールの使い方</h2>
        <p>Debian/GNU LinuxやUbuntuなどDebian系ディストリビューションで使われるパッケージ管理ツール</p>

        <h3>dpkgコマンド</h3>
        <p class="format"><code>dpkg [option] [action]</code></p>
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
                    <td>dpkg -i(--install) [package]</td>
                    <td>パッケージをインストール</td>
                </tr>
                <tr>
                    <td>dpkg -r(--remove) [package]</td>
                    <td>設定ファイルを残してパッケージをアンインストール</td>
                </tr>
                <tr>
                    <td>dpkg -P(--purge) [package]</td>
                    <td>設定ファイルも含めて完全にパッケージをアンインストール</td>
                </tr>
                <tr>
                    <td>dpkg -l(--list) [query]</td>
                    <td>インストール済みパッケージを検索して表示</td>
                </tr>
                <tr>
                    <td>dpkg -S(--search) [file]</td>
                    <td>指定したファイルがどのパッケージからインストールされたかを表示<br>[file]にはワイルドカードが使える</td>
                </tr>
                <tr>
                    <td>dpkg -L(--listfiles) [package]</td>
                    <td>指定パッケージからインストールされたファイルを一覧表示</td>
                </tr>
                <tr>
                    <td>dpkg -s(--status) [package]</td>
                    <td>パッケージ情報を表示</td>
                </tr>
                <tr>
                    <td>dpkg --configure [package]</td>
                    <td>展開されたパッケージを構成</td>
                </tr>
                <tr>
                    <td>dpkg --unpack [package]</td>
                    <td>パッケージを展開（インストールはしない）</td>
                </tr>
                <tr class="head-line">
                    <td colspan="2">option</td>
                </tr>
                <tr>
                    <td>dpkg -E [action]</td>
                    <td>すでに同バージョンがインストールされていればインストールしない</td>
                </tr>
                <tr>
                    <td>dpkg -G [action]</td>
                    <td>すでに新バージョンがインストールされていればインストールしない</td>
                </tr>
                <tr>
                    <td>dpkg -R(--recursive) [action]</td>
                    <td>ディレクトリ内を再帰的に処理する</td>
                </tr>
            </tbody>
        </table>
        <h4>dpkg 設定ファイル</h4>
        <p><code>/etc/dpkg/dpkg.cfg</code></p>
        <p><a href="http://manpages.ubuntu.com/manpages/lucid/man1/dpkg.1.html" target="_blank">Ubuntu Manpage: dpkg - package manager for Debian </a></p>
        <h3>dpkg-reconfigureコマンド</h3>
        <p>すでに設定されているパッケージを再設定する</p>
        <p class="format"><code>dpkg-reconfigure [option] package</code></p>
        <p><a href="http://manpages.ubuntu.com/manpages/lucid/en/man8/dpkg-reconfigure.8.html" target="_blank">Ubuntu Manpage: dpkg-reconfigure - reconfigure an already installed package </a></p>
    </div>
</div>
<span id="samus"></span>
<script src="assets/js/jquery.ba-tinypubsub.js"></script>