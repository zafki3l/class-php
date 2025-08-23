<?php

use Dom\Text;

    abstract class TapTin
    {
        public $tenFile; 

        public function __construct($tenFile)
        {
            $this->tenFile = $tenFile;
        }

        abstract function mo();
    }

    class TextFile extends TapTin
    {
        function mo()
        {
            echo "Mở file văn bản: $this->tenFile\n";
        }
    }

    class ImageFile extends TapTin
    {
        function mo()
        {
            echo "Mở file hình ảnh: $this->tenFile\n";
        }
    }

    class VideoFile extends TapTin
    {
        function mo()
        {
            echo "Mở file video: $this->tenFile\n";
        }
    }

    function xuLy(TapTin $tapTin)
    {
        $tapTin->mo();
    }
    
    xuLy(new TextFile('text.txt'));
    xuLy(new ImageFile('image.png'));
    xuLy(new VideoFile('video.mp4'));
?>