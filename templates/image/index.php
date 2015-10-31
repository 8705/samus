<div class="container">
    <div class="row col-md-8">
        <h2>画像ダウンロード</h2>
        <span>サイズを指定して好きな拡張子の画像を取り放題！※上限：縦4048px横4048px</span>
        <table class="image table table-condensed">
            <tr>
                <td colspan="2">
                    <div class="form-group col-md-6">
                        <label for="input-width">Width:</label>
                        <input type="text" class="form-control" id="input-width" placeholder="100" maxlength="4">
                        <span class="widthError"></span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="input-height">height:</label>
                        <input type="text" class="form-control" id="input-height" placeholder="100" maxlength="4">
                        <span class="heightError"></span>
                    </div>
                </td>
            </tr>
            <tr>
                <th rowspan="3" class="md-col-7">
                    <span class="view-w">100</span><span class="view-x">✕</span><span class="view-h">100</span>
                </th>
                <td>
                    <a class="btn btn-orange download-btn" data-w="100" data-h="100" data-ext="png" href="/genimage" role="button">.png</a>
                </td>
            </tr>
            <tr>
                <td>
                    <a class="btn btn-orange download-btn" data-w="100" data-h="100" data-ext="jpg" href="/genimage" role="button">.jpg</a>
                </td>
            </tr>
            <tr>
                <td>
                    <a class="btn btn-orange download-btn" data-w="100" data-h="100" data-ext="gif" href="/genimage" role="button">.gif</a>
                </td>
            </tr>
        </table>
    </div>
</div>
<span id="samus"></span>
<script src="assets/js/jquery.ba-tinypubsub.js"></script>
<script src="assets/js/image.js"></script>
<script src="https://cdn.rawgit.com/egapool/samusball/master/samusball.js"></script>

<script>
    $(function(){
        $('#samus').samus();
    });
</script>