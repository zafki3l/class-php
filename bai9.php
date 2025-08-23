<?php
    abstract class NhanVien
    {
        abstract function tinhLuong($hour);
    }

    class NhanVienFullTime extends NhanVien
    {
        function tinhLuong($hour)
        {
            $salary = 15000;
            
            return $salary;
        }
    }

    class NhanVienPartTime extends NhanVien
    {
        function tinhLuong($hour)
        {
            $salary = $hour * 100;

            return $salary;
        }   
    }

    class ThucTapSinh extends NhanVien
    {
        function tinhLuong($hour)
        {
            $salary = 3000;

            return $salary;
        }   
    }

    function xuLy(NhanVien $nhanVien, $hour)
    {
        echo "Lương = " . $nhanVien->tinhLuong($hour) . "\n";
    }

    xuLy(new NhanVienFullTime, 100);
    xuLy(new NhanVienPartTime, 100);
    xuLy(new ThucTapSinh, 60);
?>