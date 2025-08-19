<?php 
    class SinhVien {
        //Viết method hienThiThongTin() để in ra thông tin sinh viên.
        public $ten;
        public $tuoi;
        public $lop;

        function __construct($ten, $tuoi, $lop) {
            $this->ten = $ten;
            $this->tuoi = $tuoi;
            $this->lop = $lop;
        }

        public function toString() {
            $ten = $this->ten;
            $tuoi = $this->tuoi;
            $lop = $this->lop;

            return "{$ten}, {$tuoi}, {$lop}";
        }
    }

    $sinhVien = new SinhVien("Thái", 20, "A1");
    echo $sinhVien->toString();
?>

