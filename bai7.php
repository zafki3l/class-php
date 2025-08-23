<?php 
    interface HinhHoc
    {
        public function tinhChuVi($a, $b);
        public function tinhDienTich($a, $b);
    }

    class HinhTron implements HinhHoc
    {
        public function tinhChuVi($a, $b)
        {
            $circumference = ($a + $b) * 3.14;

            return $circumference;
        }

        public function tinhDienTich($a, $b) 
        {
            $area = $a * $b * 3.14;

            return $area;
        }
    }

    class HinhChuNhat implements HinhHoc
    {
        public function tinhChuVi($a, $b)
        {
            $circumference = 2* ($a + $b);

            return $circumference;
        }

        public function tinhDienTich($a, $b)
        {
            $area = $a * $b;

            return $area;
        }
    }

    class HinhVuong implements HinhHoc 
    {
        public function tinhChuVi($a, $b)
        {
            $circumference = 2 * ($a + $b);

            return $circumference;
        }

        public function tinhDienTich($a, $b)
        {
            $area = $a * $b;

            return $area;
        }
    }

    function xuLy(HinhHoc $hinhHoc, $a, $b)
    {
        $chuvi = $hinhHoc->tinhChuVi($a, $b);
        $dienTich = $hinhHoc->tinhDienTich($a, $b);
        echo "Chu vi " . $chuvi;
        echo ", Diện tích " . $dienTich;
    }

    xuLy(new HinhChuNhat(), 5, 10);
    echo "\n";
    xuLy(new HinhTron(), 5, 5);
    echo "\n";
    xuLy(new HinhVuong(), 5, 5);
?>