<?php
    class TaiKhoan {
        protected $soDu;

        public function __construct($soDu) {
            $this->soDu = $soDu; 
        }
    }

    class TaiKhoanTietKiet extends TaiKhoan {
        public function rutTien($soTien) {
            if ($this->soDu >= $soTien) {
                $this->soDu -= $soTien;
                echo "Ban da rut {$soTien}, ban con lai: " . $this->soDu;
            } else {
                echo "So du khong du de rut";
            }
        }
    }

    $taiKhoanTietKiem = new TaiKhoanTietKiet(1000);

    $taiKhoanTietKiem->rutTien(200);
?>
