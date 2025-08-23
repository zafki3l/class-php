<?php 
    interface ThanhToan
    {
        public function pay($soTien);
    }

    interface HoanTien
    {
        public function refund($soTien);
    }

    class ViDienTu implements ThanhToan, HoanTien
    {
        private $soDu;

        public function __construct($soDu)
        {
            $this->soDu = $soDu;
        }
	
        public function pay($soTien)
        {
            if ($soTien > $this->soDu) {
                echo "Tài khoản không đủ để thực hiện thanh toán";
            } else {
                $this->soDu -= $soTien;

                return $this->soDu;
            }
        }

        public function refund($soTien)
        {
            $this->soDu += $soTien;

            return $this->soDu;
        }
    }

    class TienMat implements ThanhToan
    {
        public $soDu;

        public function __construct($soDu)
        {
            $this->soDu = $soDu;
        }

        public function pay($soTien)
        {
            if ($soTien > $this->soDu) {
                echo "Tài khoản không đủ để thực hiện thanh toán";
            } else {
                $this->soDu -= $soTien;

                return $this->soDu;
            }
        }
    }

    // $viDienTu = new ViDienTu(1000);
    // print_r($viDienTu);
    // $viDienTu->pay(500);
    // print_r($viDienTu);
    // $viDienTu->refund(500);
    // print_r($viDienTu);

    $tienMat = new TienMat(1000);
    $tienMat->pay(500);
    print_r($tienMat);
?>