<?php

class Genimage {

    const MAX_SIZE  = 4048;
    const ERR_MSG   = 'リクエストに誤りがあります';

    public $ext;
    public $width;
    public $height;
    public $image;
    public $errMsg = null;

    public function __construct($ext, $width, $height)
    {
        if ( !isset($ext) || !isset($width) || !isset($height) ) {
            $this->errMsg = self::ERR_MSG;
        }
        if ( !preg_match('/^png|jpge|jpg|gif$/u', $ext) ) {
            $this->errMsg = self::ERR_MSG;
        }
        if ( !preg_match('/^[0-9]{1,4}$/u', $width) ) {
            $this->errMsg = self::ERR_MSG;
        }
        if ( !preg_match('/^[0-9]{1,4}$/u', $height) ) {
            $this->errMsg = self::ERR_MSG;
        }
        if ( (int)$width > self::MAX_SIZE || (int)$height > self::MAX_SIZE ) {
            $this->errMsg = self::ERR_MSG;
        }

        $this->ext      = $ext;
        $this->width    = $width;
        $this->height   = $height;
    }

    public function output()
    {
        $ext      = $this->ext;
        $width    = $this->width;
        $height   = $this->height;

        try {

            if ( !is_null($this->errMsg)) throw new RuntimeException($this->errMsg);

            header ('Content-Type: application/octet-stream');
            $filename = $this->filename($ext,$width,$height);
            header ('Content-disposition: attachment; filename="'.$filename.'"');

            // var_dump($filename);exit;
            $im = @imagecreatetruecolor($width, $height)
                  or die('Cannot Initialize new GD image stream');
            $text_color = imagecolorallocate($im, 255,255,255);
            imagestring($im, 5, 5, 5, strtoupper($ext)." 8705 CO", $text_color);

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
    }

    /**
     * generate file's name
     *
     */
    private function filename($ext,$width,$height)
    {
        return 'w'.$width.'h'.$height.'.'.$ext;
    }
}