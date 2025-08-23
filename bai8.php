<?php 
    abstract class PhuongTien 
    {
        abstract function chay();
    }

    class XeMay extends PhuongTien
    {
        function chay()
        {
            echo "Xe máy chạy....\n";
        }
    }

    class Oto extends PhuongTien
    {
        function chay()
        {
            echo "Ô tô chạy.....\n";
        }
    }

    class TauThuy extends PhuongTien
    {
        function chay()
        {
            echo "Tàu thủy chạy....\n";
        }
    }

    function xuLy(PhuongTien $phuongTien)
    {
        $phuongTien->chay();
    }

    xuLy(new XeMay);
    xuLy(new Oto);
    xuLy(new TauThuy);
?>