<?php
try {
    define("MAX_SIZE", 4048);

    // preg_matchで判定
    $ext        = $_GET['ext'];
    $width      = $_GET['w'];
    $height     = $_GET['h'];

    if ( !isset($ext) || !isset($width) || !isset($height) ) {
        throw new RuntimeException('リクエストに誤りがあります');
    }
    if ( !preg_match('/^png|jpge|jpg|gif$/u', $ext) ) {
        throw new RuntimeException('リクエストに誤りがあります');
    }
    if ( !preg_match('/^[0-9]{1,4}$/u', $width) ) {
        throw new RuntimeException('リクエストに誤りがあります');
    }
    if ( !preg_match('/^[0-9]{1,4}$/u', $height) ) {
        throw new RuntimeException('リクエストに誤りがあります');
    }
    if ( (int)$width > MAX_SIZE || (int)$height > MAX_SIZE ) {
        throw new RuntimeException('リクエストに誤りがあります');
    }

    header ('Content-Type: application/octet-stream');
    $filename   = 'W'.$width.'H'.$height.'.'.$ext;
    header ('Content-disposition: attachment; filename="'.$filename.'"');

    // var_dump($filename);exit;
    $im = @imagecreatetruecolor($width, $height)
          or die('Cannot Initialize new GD image stream');
    $text_color = imagecolorallocate($im, 233, 14, 91);
    imagestring($im, 1, 5, 5, strtoupper($ext).' 8705 CO', $text_color);

    switch ($ext) {
        case 'png':
            imagepng($im);
            break;
        case 'jpg':
        case 'jpeg':
            imagejpeg($im);
            break;
        case 'gif':
            imagegif($im);
            break;
    }
    imagedestroy($im);
} catch(Exception $e) {
    echo $e->getMessage();
}
