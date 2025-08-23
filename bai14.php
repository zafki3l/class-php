<?php 
    abstract class DongCo
    {
        abstract function khoiDong();
    }

    class DongCoXang extends DongCo
    {
        public function khoiDong()
        {
            echo "Động cơ xăng khởi động....";
        }
    }

    class DongCoDien extends DongCo
    {
        public function khoiDong()
        {
            echo "Động cơ điện khởi động.....";
        }
    }

    class DongCoHybird extends DongCo
    {
        public function khoiDong()
        {
            echo "Động cơ hybird khởi động....";
        }
    }

    $dongCoList = [
        new DongCoXang(),
        new DongCoHybird(),
        new DongCoDien()
    ];

    foreach ($dongCoList as $dongCo) {
        $dongCo->khoiDong();
        echo "\n";
    }
?>