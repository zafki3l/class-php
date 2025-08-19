<?php 
    class HinhChuNhat {
        public $dai;
        public $rong;

        public function __construct($dai, $rong) {
            $this->dai = $dai;
            $this->rong = $rong;
        }

        public function tinhDienTich() {
            $dai = $this->dai;
            $rong = $this->rong;

            $dienTich = $dai * $rong;

            return $dienTich;
        }

        public function tinhChuVi() {
            $dai = $this->dai;
            $rong = $this->rong;

            $chuVi = ($dai + $rong) * 2;

            return $chuVi;
        }
    }

    $hinhChuNhat = new HinhChuNhat(10, 20);

    echo "Dien tich cua hinh chu nhat: " . $hinhChuNhat->tinhDienTich();
    echo "<br>";
    echo "Chu vi cua hinh chu nhat: " . $hinhChuNhat->tinhChuVi();
?>